<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css"  rel="stylesheet" />
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
            <a class="navbar-brand" href="#"><i class="fas fa-meteor"></i></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="/">Главная</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="/anakin">Энакин Скайуокер</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="/obi-wan">Оби-Ван Кеноби</a>
                </li>
            </ul>
            </div>
        </div>
    </nav>
    <div class="container">
        <?php 
        $url = $_SERVER["REQUEST_URI"];

        if ($url == "/") {
            require "../views/main.php"; // << добавил ../, что означает ищи файл в папке на уровень выше
        } elseif (preg_match("#^/anakin#", $url)) {
            require "../views/anakin.php"; // << и тут
        } elseif (preg_match("#^/obi-wan#", $url)) {
            require "../views/obi-wan.php"; // и здесь
        } 
        ?>
    </div>
</body>
</html>
