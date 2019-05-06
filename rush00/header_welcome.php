<!DOCTYPE HTML>
<html lang="ru-RU">
<head>
    <title><?php echo isset($title) ? $title : ''; ?></title>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="responsive.css">
</head>
<body>
<header>
    <div class="logo">
        <a href="index.php">
            <img src="https://www.r43dsici.com/data/out/169/1134768.png" class="logo">
        </a>
    </div>

    <div class="menu" style="display: inline-block;"}>


        <a href="methods/logout.php" class="exit"> <h1 class="exit">выход</h1></a>

<!--        <a href="file_of_php/registr.php" class="move">-->
            <h1 class="text_ent" style="margin-right: 20px"><?php  echo $_SESSION['info_user']['name'];?></h1>
<!--        </a>-->
        <div class="dropdown">
            <div class="catalog">
                <a href="categor.php" class="move">
                    <h1 class="text_ent">Каталог</h1>
                </a>
            </div>
        </div>
    </div>

    <div class="trash">
        <a href="basket.php"><img title="КОРЗИНА" src="https://vk.com/images/stickers/7785/512.png" class="trash"></a>
    </div>
</header>