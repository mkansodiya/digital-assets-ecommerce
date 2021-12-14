<?php require('boss/wthfetch.php');
function rndmString($length = 5, $prefilx = "", $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ')
{
    // $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $charactersLength = strlen($characters);
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[rand(0, $charactersLength - 1)];
    }
    return $prefilx . $randomString;
}
class query extends database
{
    function fetchData($table, $fields = "*", $condition = "", $order = "", $sort = "", $limit = "")
    {
        $con = $this->connect();
        $q = "SELECT $fields FROM $table";
        if ($condition != "") {
            $q .= " WHERE $condition ";
        }
        if ($limit != "") {
            $q .= " limit $limit ";
        }
        $q = $con->prepare($q);
        $q->execute();
        $r = $q->fetchAll(PDO::FETCH_ASSOC);
        return $r;
    }
    function insertData($table, $data)
    {
        $fields = array();
        $values = array();
        foreach ($data as $field => $value) {
            $fields[] = $field;
            $values[] = $value;
        }
        $fields = "`" . implode("`,`", $fields) . "`";
        $values = "'" . implode("','", $values) . "'";
        $con = $this->connect();
        $q = "INSERT INTO $table ({$fields}) VALUES ({$values})";
        $q = $con->prepare($q);
        $q->execute();
        $insert_id = $con->lastInsertId();
        return $insert_id;
        //echo $fields;
    }
    function dropData($table, $condition)
    {
        $con = $this->connect();
        $q = "DELETE FROM `$table` WHERE $condition";
        $q = $con->prepare($q);
        $q->execute();
    }
    function updateData($table, $data, $condition)
    {
        $con = $this->connect();
        $q = "UPDATE `$table` SET $data WHERE $condition";
        $q = $con->prepare($q);
        $q->execute();
        //  return $q;
    }
}

class shopAction extends query
{
    function createOrder()
    {
        $query = new query();
        $user_id = $_SESSION['user_id'];
        $user_cart = $query->fetchData("cart", "*", "user_id='$user_id'");
        $order_total = 0;
        foreach ($user_cart as $key => $value) {
            $order_total =  $order_total + $value['price'];
        }
        $order_hash = rndmString(13, "gd_order_");
        $data = ["customer_id" => $user_id, "order_status" => "pending", "order_hash" => "$order_hash", "order_total" => $order_total];
        $order = $query->insertData("orders", $data);

        foreach ($user_cart as $key => $value) {
            $parent_id = $order;
            $price = $value['price'];
            $product_id = $value['product_id'];
            $data = ["customer_id" => $user_id, "parent_id" => $parent_id, "product_id" => $product_id, "price" => $price];
            $order_data = $query->insertData("orders_meta", $data);
        }
        return $order_hash;
    }
    function checkout()
    {
        $auth = new auth();
        $user_id = $_SESSION['user_id'];
        if ($auth->isLogin()) {
            $order_hash = $this->createOrder();
            header("location: razorpay/pay.php?order=$order_hash");
        } else {
            header("location: sign-in.php?gb=http://localhost/digi/index.php?action=checkout");
        }
        //$order_hash = $this->createOrder();

    }
    function isPurchased($product_id)
    {
        $query = new query;
        $user_id = $_SESSION['user_id'];
        $data = $query->fetchData("orders_meta", "parent_id", "customer_id='$user_id' AND product_id='$product_id'");
        if (count($data) == 0) {
            return false;
        } else {
            $i = 0;
            while ($i < count($data)) {
                $order_id = $data[$i]['parent_id'];
                $order_data = $query->fetchData("orders", "*", "ID='$order_id' AND customer_id='$user_id' AND order_status='completed' OR order_status='wc-completed'");
                // AND order_status='completed'
                $count = count($order_data);
                if ($count != 0) {
                    return true;
                    break;
                }
                $i++;
            }
        }
    }
    function isPaid($order_id)
    {
        $order_status = $this->fetchData("orders", "payment_id,order_status", "ID='$order_id'")[0];
        if ($order_status['payment_id'] == "Pending" || $order_status['order_status'] != "completed" || $order_status['payment_id'] == "") {
            return false;
        } else {
            return true;
        }
    }
    function minPrice($product_id)
    {
        $price = $this->fetchData('product_meta', "min_price", "product_id='$product_id'")[0]['min_price'];
        return $price;
    }
    function orderData()
    {
        $user_id = $_SESSION['user_id'];
        $order_data = $this->fetchData("orders", "*", "customer_id='$user_id'");
        return $order_data;
    }
    function orderProducts($order_id)
    {
        $products = $this->fetchData("orders_meta", "product_id", "parent_id='$order_id'");
        return $products;
    }
    function availableDownloads()
    {
        $user_id = $_SESSION["user_id"];
        $order_data = $this->fetchData("orders_meta", "`product_id`,`parent_id`", "customer_id='$user_id'");
        $i = 0;
        $downloads = array();
        while ($i < count($order_data)) {

            if ($this->isPaid($order_data[$i]['parent_id']) == true) {
                $downloads[] = $order_data[$i]['product_id'];
            }
            $i++;
        }
        return $downloads;
    }
    function productTitleById($id)
    {
        $product_title = $this->fetchData("products", "product_title", "id='$id'")[0]["product_title"];
        return $product_title;
    }
}


class auth extends query
{
    function isLogin()
    {
        if ($_SESSION['user_login'] == true) {
            return true;
        } else {
            return false;
        }
    }
    function loginUser($email, $password)
    {
        $q = $this->connect()->prepare("SELECT `ID`,`user_email`,`user_pass` FROM users WHERE user_email='$email'");
        $q->execute();
        if ($q->fetchColumn() < 1) {
            $msg = "No user found";
        } else {
            $q->execute();
            $q = $q->fetch(PDO::FETCH_ASSOC);
            $hash = $q['user_pass'];
            if ($this->verifyPass($password, $hash)) {
                $_SESSION['user_login'] = true;
                $ex_user = $_SESSION['user_id'];
                $_SESSION['user_id'] = $q['ID'];
                $user_id = $_SESSION['user_id'];
                $cart_update = $this->updateData("cart", "user_id='$user_id'", "user_id='$ex_user'");
                $msg = "login successful";
            } else {
                $msg = "Wrong email or password";
            }
        }
        return $msg;
    }
    function encPass($password)
    {
        $hash = password_hash($password, PASSWORD_DEFAULT);

        return $hash;
    }
    function verifyPass($pass, $hash)
    {
        if (password_verify($pass, $hash)) {
            return true;
        } else {
            return false;
        }
    }
    function logedInuser()
    {
        if ($this->isLogin()) {
            $user_id = $_SESSION['user_id'];
            $user_data = $this->fetchData("users", "*", "ID='$user_id'");
            return $user_data[0];
        }
    }
    function resetLink($email)
    {
        $key = rndmString(15, "gd_auth_");
        $this->updateData("users", "user_activation_key='$key'", "user_email='$email'");
    }
    function resetPass($key, $pass)
    {
        $validKey = $this->fetchData("users", "user_activation_key", "user_activation_key=$key");
        if (count($validKey) != 0) {
            $pass = $this->encPass($pass);
            //echo $pass;
            $this->updateData("users", "user_pass='$pass'", "user_activation_key='$key'");
            echo "Password updated successfully";
        } else {
            echo "Password reset link is expired";
        }
    }
}

class files extends shopAction
{
    function download($product_id)
    {
        $query = new query();
        $auth = new auth();
        if ($auth->isLogin()) {
            if ($this->minPrice($product_id) == 0) {
                $query->fetchData("orders",);
                $file = $query->fetchData("files", "url", "parent_id='$product_id'")[0]['url'];
                header("location: $file");
            } else if ($this->isPurchased($product_id)) {
                $user_id = $_SESSION['user_id'];
                $query->fetchData("orders",);
                $file = $query->fetchData("files", "url", "parent_id='$product_id'")[0]['url'];
                header("location: $file");
            } else {
                echo "This product is not purchased by you";
            }
        } else {
            echo "You must be \"loged in\" to download the file";
        }
    }
}
