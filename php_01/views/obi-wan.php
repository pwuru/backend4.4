<?php
    $is_image = $url == '/obi-wan/image';
    $is_info = $url == '/obi-wan/info';
?>

<h1>Оби-Ван Кеноби</h1>

<div class="container">
        <ul class="nav nav-pills">
        <li class="nav-item">
            <a class="nav-link <?= $is_image ? "active" : '' ?>" href="/obi-wan/image">
                Картинка
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link <?= $is_info ? "active" : '' ?>" href="/obi-wan/info">
                Описание
            </a>
        </li>
        </ul>
</div>

<div style="margin-top: 15px;">
        <ul class="list-group">
                <li class="list-group-item">
                        <?php if ($is_image) {?>
                                <?php require "/obi-wan_image.php"; ?>
                        <?php } else if ($is_info) { ?>
                                <?php require "/obi-wan_info.php"; ?>
                        <?php } else { ?>
                                Выберите вверху информацию, которую хотите посмотреть<br>
                        <?php } ?>
                </li>
        </ul>
</div>