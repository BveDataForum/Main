<?php
?>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
        <a class="navbar-brand" href="index.php" style="color: #009b03;"><b>BVE Data Forum</b></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarScroll">
            <ul class="navbar-nav me-auto my-2 my-lg-0 navbar-nav-scroll text-icon" style="--bs-scroll-height: 100px;">
                <li class="nav-item text-icon">
                    <i class="bi bi-house"></i><a class="nav-link" aria-current="page" href="index.php">ホーム</a>
                </li>
                <li class="nav-item">
                    <i class="bi bi-pencil"></i><a class="nav-link" href="#">掲示板</a>
                </li>
                <li class="nav-item dropdown">
                    <i class="bi bi-cloud-download"></i><a class="nav-link dropdown-toggle" href="#" id="navbarScrollingDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Data
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarScrollingDropdown">
                        <li><a class="dropdown-item">路線データ</a></li>
                        <li><a class="dropdown-item" href="#">車両データ</a></li>
                        <li><a class="dropdown-item" href="#">素材データ</a></li>
                        <li><hr class="dropdown-divider"></li>
                        <li><a class="dropdown-item" href="#">その他</a></li>
                    </ul>
                </li>
            </ul>
            <form class="d-flex">
                <input class="form-control me-2" type="search" placeholder="路線/データ名で検索" aria-label="Search">
                <button class="btn btn-outline-success" type="submit">Search</button>
            </form>
            <button type="button" class="btn btn-success" style="margin-left: 5px;">会員登録</button>
        </div>
    </div>
</nav>