<?php
require_once __DIR__ . "/../vendor/autoload.php";

?>
<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <title>BveDataForum</title>
</head>
<body>
<?php
include "header.php";
?>
<!--
created by https://bbbootstrap.com/snippets/login-form-footer-and-social-media-icons-55203607#
-->
<div class="container-fluid px-1 px-md-5 px-lg-1 px-xl-5 py-5 mx-auto">
    <div class="card card0 border-0">
        <div class="row d-flex">
            <div class="col-lg-6">
                <div class="card1 pb-5">

                    <div class="row px-3 justify-content-center mt-4 mb-5 border-line"> <img src="images/115_sh_2.webp" class="image"><p style="text-align: center">&copy; サハ２０９様制作ストラクチャー</p> </div>
                </div>
            </div>
            <div class="col-lg-6">
                <form action="login.php" method="post">
                    <div class="card2 card border-0 px-4 py-5">
                        <div class="row px-3"> <label class="mb-1">
                                <h6 class="mb-0 text-sm">メールアドレス</h6>
                            </label> <input class="mb-4" type="text" name="email" placeholder="メールアドレス"> </div>
                        <div class="row px-3"> <label class="mb-1">
                                <h6 class="mb-0 text-sm">パスワード</h6>
                            </label> <input type="password" name="password" placeholder="パスワード"> </div>
                        <div class="row px-3 mb-4">

                        </div>
                        <div class="row mb-3 px-3"> <button type="submit" class="btn btn-blue text-center">ログイン</button> </div>
                        <div class="row mb-4 px-3"> <small class="font-weight-bold">会員登録はこちら!<a class="text-danger ">Register</a></small> </div>
                    </div>
                </form>
            </div>
        </div>
        <div class="bg-blue py-4">
            <div class="row px-3"> <small class="ml-4 ml-sm-5 mb-2">Copyright &copy; BVE Data Forum  2021. All rights reserved.</small>
                <div class="social-contact ml-4 ml-sm-auto"> <span class="fa fa-facebook mr-4 text-sm"></span> <span class="fa fa-google-plus mr-4 text-sm"></span> <span class="fa fa-linkedin mr-4 text-sm"></span> <span class="fa fa-twitter mr-4 mr-sm-5 text-sm"></span> </div>
            </div>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP&display=swap" rel="stylesheet">
<link href="css/style.css" rel="stylesheet">
<link href="css/login.css" rel="stylesheet">
</body>
