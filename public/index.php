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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <script src="https://unpkg.com/scrollreveal"></script>
    <title>BveDataForum</title>
</head>
<body>
<?php
    include "header.php";
?>
<div class="container-fluid" id="top_box">
    <div class="row">
        <div class="col px-0">
            <div class="row">
                <div class="col" id="t-1">
                    <img src="images/t-1.webp" id="i-1" width="80%">
                </div>
                <div class="col-6" id="pc-top">
                    <h1>BVE Data Forum</h1>
                    <p>お気に入りの路線を見つけよう。<br>
                    路線データの投稿やBVEに関する議論もすることができます。</p>
                    <div class="alert alert-success" role="alert">
                        路線作者の方ですか?早速データを投稿してみましょう!<br>
                        <button type="button" class="btn btn-success">登録画面はこちら</button>
                    </div>
				</div>                    
                <!--Mobile HTML-->
                <div class="col" id="sm-top">
                    <h1>BVE Data Forum</h1>
                    <p>お気に入りの路線を見つけよう。<br>
                        路線データの投稿やBVEに関する議論もすることができます。</p>
                </div>
                <!--END Mobile HTML-->
                <div class="col" id="t-2">
                    <img src="images/t-1-1.webp" id="i-2" width="78%">
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container">
    <div class="row content-box">
        <div class="col-md-8 mb-3">
            <h2>申請制の安心安全なフォーラム 様々な制限にも対応!</h2>
            <p>データ投稿は運営がチェックした作者のみがすることができます。<br>
                そのため、荒らしなどの行為を未然に防ぐことができます。<br>
                また、データ投稿時にパスワード保護などをつけることが可能です。<br>
                ※作者の基準に関しての詳細は作者申請ページをご覧ください。</p>
        </div>
        <div class="col-md-4">
            <img src="images/download.webp" width="70%">
        </div>
    </div>
    <div class="row content-box">
        <div class="col-md-8 mb-3">
            <h2>様々な路線データを素早く検索</h2>
            <p>路線データから車両データ・素材データなどすぐに検索することができます。</p>
        </div>
        <div class="col-md-4">
            <img src="images/115_3.webp" width="70%">
        </div>
    </div>
    <div class="row content-box">
        <div class="col-md-8 mb-3">
            <h2>魚拓/WayHackのアーカイブを禁止</h2>
            <p>WayHackなどのデータのアーカイブを禁止するため、公開されていないフォルダにデータを保存。<br>
            データの不正なアーカイブを禁止します。</p>
        </div>
        <div class="col-md-4">
            <img src="images/corn.webp" width="70%">
        </div>
    </div>
    <div class="row content-box">
        <div class="col-md-8 mb-3">
            <h2>DMCA虚偽申請への取り組み</h2>
            <p>昨今、嫌がらせとしてわざとDMCAの虚偽申請を送り、googleの検索結果から除外しようとする事案が発生しております。<br>
            当Forumでは虚偽申請が行われた場合に速やかに路線データやダウンロード回数を保持したままリンクを変更する機能を実装。<br>
            すぐに新しいページで公開を始めることができます。<br>
                <u>※このシステム・取り組みは、DMCAに反する行為の容認を目的とするものではありません。</u></p>
        </div>
        <div class="col-md-4">
            <img src="images/web.webp" width="70%">
        </div>
    </div>
</div>

<script>
        ScrollReveal().reveal('.content-box *', {
            delay: 100, // アニメーション開始までの時間
            duration: 1500, // アニメーション完了にかかる時間 default:1600
            origin: 'left', // 要素がどの方向から来るか
            distance: '100px', // 移動する距離
            reset: false // フレームインの度に動かすか
        });
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP&display=swap" rel="stylesheet">
<link href="css/style.css" rel="stylesheet">
<script src="https://unpkg.com/scrollreveal"></script>
</body>
</html>