<?php
$baseURL = "http://localhost:3000/";
$pageName = "";
$fullURL = ($pageName = "") ? $baseURL . $pageName . ".php" : $baseURL ;

$siteName = "W3CSS Template";
$title = ($pageName = "") ? $pageName . " | " . $siteName : $siteName ;
$description = "";

$headerLogo = $baseURL . "images/header-logoeco.jpg";
?>

<head>
    <!-- Base URL -->
    <!-- <base href="<?php # echo $baseURL ?>"> -->
    <!-- Uncomment this if using Live site, it messes up Link with css or images -->

    <!-- Core Info -->
    <title><?php echo $title ?></title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">

    <!-- Stylesheets -->
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/main.css">

    <!-- Favicons -->
    <link rel="icon" type="image/png" href="favicon-32.png" sizes="32x32" />
    <link rel="icon" type="image/png" href="favicon-128.png" sizes="128x128" />
    <link rel="icon" type="image/png" href="favicon-196.png" sizes="196x196" />

    <!-- Schema Meta Tags -->
    <!-- Core Tags -->
    <link rel="canonical" href="<?php echo $baseURL ?>" />
    <meta name="description" content="<?php echo $description ?>" />
    <!-- Facebook -->
    <meta property="og:title" content="<?php echo $title ?>" />
    <meta property="og:description" content="<?php echo $description ?>" />

    <meta property="og:url" content="<?php echo $fullURL ?>">
    <meta property="og:image" content="<?php echo $headerLogo ?>" />
    <meta property="og:type" content="website" />
    <meta property="og:site_name" content="<?php echo $siteName ?>" />
    <meta property="og:image:alt" content="<?php echo $siteName ?>" />
    <!-- Twitter -->
    <meta property="twitter:title" content="<?php echo $title ?>">
    <meta property="twitter:description" content="<?php echo $description ?>" />
    <meta property="twitter:url" content="<?php echo $fullURL ?>">
    <meta property="twitter:image" content="<?php echo $headerLogo ?>">
    <meta property="twitter:card" content="summary_large_image">
</head>