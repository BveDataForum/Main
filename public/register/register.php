<?php
?>

<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="BVEのデータを投稿・ダウンロード。路線データから素材データまで">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous"><title>BveDataForum</title>
</head>
<body>
<?php
include "../header.php";
?>
<div class="container register-box" style="background-color: aliceblue">
    <div class="row content-box">
        <div class="col-md-8 mb-3">
            <h2>会員登録</h2>
            <p>アカウントにはBVE作者と一般アカウントの２種類に分かれています。<br>
            BVE作者の方はBVE作者申請まで進んでください。<br>
            路線データのダウンロードや掲示板ご利用の方は下記で早速会員登録!</p>
            <img src="../images/register.png" width="60%">
            <button type="button" class="btn btn-success" style="margin-left: 5px;color: white" <button type="button" onclick="location.href='Formのリンク'">作者登録申請</button>
        </div>
        <div class="col-md-4">
            <form>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">メールアドレス</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                    <div id="emailHelp" class="form-text">既に使用しているアドレスや作者アカウントと同じアドレスは使用できません。</div>
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">パスワード</label>
                    <input type="password" class="form-control" id="exampleInputPassword1">
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">パスワード（再度ご入力願います。)</label>
                    <input type="password" class="form-control" id="exampleInputPassword1">
                </div>
                <div class="mb-3 form-check">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                    <label class="form-check-label" for="exampleCheck1">利用規約に同意します。</label>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
</div>
<?php
include "../footer.php";
?>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP&display=swap" rel="stylesheet">
<link href="../css/style.css" rel="stylesheet">
</body>
</html>