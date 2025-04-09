<?php
    $is_image = $url == '/anakin/image';
    $is_info = $url == '/anakin/info';
?>

<h1>Энакин Скайуокер</h1>

<div class="container">
        <ul class="nav nav-pills">
        <li class="nav-item">
            <a class="nav-link <?= $is_image ? "active" : '' ?>" href="/anakin/image">
                Картинка
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link <?= $is_info ? "active" : '' ?>" href="/anakin/info">
                Описание
            </a>
        </li>
        </ul>
</div>

<div style="margin-top: 15px;">
        <ul class="list-group">
                <li class="list-group-item">
                        <?php if ($is_image) {?>
                                <?php require "/anakin_image.php"; ?>
                        <?php } else if ($is_info) { ?>
                                <?php require "/anakin_info.php"; ?>
                        <?php } else { ?>
                                Выберите вверху информацию, которую хотите посмотреть<br>
                        <?php } ?>
                </li>
        </ul>
</div>