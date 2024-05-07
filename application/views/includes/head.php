<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title><?= $page_title ?></title>
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <?php include 'includes.php'; ?>
</head>

<body>
    <?php
    __load_assets__($__assets__, 'css');
    ?>
    <?php include 'spinner.php';?>
    <div class="container-fluid p-0">