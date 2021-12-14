<?php require('../functions.php');
$auth = new auth();
$file = new files();
$shopAction = new shopAction();
if ($auth->isLogin() == false) {
    header("location:../login.php");
    die();
}
if (isset($_GET['action']) == "logout") {
    unset($_SESSION['user_login']);
    unset($_SESSION['user_id']);
}
if (isset($_GET['download'])) {
    $p_id = $_GET['download'];
    $file->download($p_id);
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Mr.Bara - Multipurpose eCommerce HTML Template </title>
    <meta name="robots" content="noindex, follow" />
    <meta name="description" content="Mr.Bara Multipurpose eCommerce Bootstrap 5 Template is a stunning e-commerce website template that is the best choice for any online store.">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="https://gmpg.org/xfn/11">
    <link rel="canonical" href="https://htmldemo.hasthemes.com/mrbara/index.html" />

    <!-- Open Graph (OG) meta tags are snippets of code that control how URLs are displayed when shared on social media  -->
    <meta property="og:locale" content="en_US" />
    <meta property="og:type" content="website" />
    <meta property="og:title" content="Mr.Bara - Multipurpose eCommerce HTML Template" />
    <meta property="og:url" content="https://htmldemo.hasthemes.com/mrbara/index.html" />
    <meta property="og:site_name" content="Mr.Bara - Multipurpose eCommerce HTML Template" />
    <!-- For the og:image content, replace the # with a link of an image -->
    <meta property="og:image" content="#" />
    <meta property="og:description" content="Mr.Bara Multipurpose eCommerce Bootstrap 5 Template is a stunning e-commerce website template that is the best choice for any online store." />
    <!-- Add site Favicon -->
    <link rel="icon" href="assets/images/favicon/cropped-favicon-32x32.png" sizes="32x32" />
    <link rel="icon" href="assets/images/favicon/cropped-favicon-192x192.png" sizes="192x192" />
    <link rel="apple-touch-icon" href="assets/images/favicon/cropped-favicon-180x180.png" />
    <meta name="msapplication-TileImage" content="assets/images/favicon/cropped-favicon-270x270.png" />

    <!-- All CSS is here
	============================================ -->
    <link rel="stylesheet" href="assets/css/vendor/bootstrap.min.css" />
    <link rel="stylesheet" href="assets/css/vendor/font-awesome.min.css" />
    <link rel="stylesheet" href="assets/css/vendor/ionicons.min.css" />
    <link rel="stylesheet" href="assets/css/vendor/eleganticons.css" />
    <link rel="stylesheet" href="assets/css/plugins/select2.min.css" />
    <link rel="stylesheet" href="assets/css/plugins/nice-select.css" />
    <link rel="stylesheet" href="assets/css/plugins/animate.css" />
    <link rel="stylesheet" href="assets/css/plugins/swiper.min.css" />
    <link rel="stylesheet" href="assets/css/plugins/magnific-popup.css" />
    <link rel="stylesheet" href="assets/css/plugins/easyzoom.css" />
    <link rel="stylesheet" href="assets/css/plugins/slinky.css" />
    <link rel="stylesheet" href="assets/css/plugins/jquery-ui.css" />
    <link rel="stylesheet" href="assets/css/plugins/jquery.mb.ytplayer.min.css" />
    <link rel="stylesheet" href="assets/css/style.css" />

    <link rel="stylesheet" href="../assets/css/fontAwesome5Pro.css">


</head>




<body class="select-border-none">
    <div class="main-wrapper main-wrapper-2">