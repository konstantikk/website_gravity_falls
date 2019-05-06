<!DOCTYPE HTML>
<html lang="ru-RU">
    <head>
        <title><?php echo isset($title) ? $title : ''; ?></title>
				<meta charset="UTF-8"> 
				<link rel="stylesheet" href="responsive.css">
    </head>
    <body>
			<header class="123">
				<div class="logo">
					<a href="index.php">
					<img src="https://www.r43dsici.com/data/out/169/1134768.png" class="logo">
					</a>
				</div>

                <div class="menu" style="display: inline-block;"}>

				    <a href="index1.php" class="move">
					    <h1 class="text_ent">Вход</h1>
			    	</a>
                    <a href="index2.php" class="move">
					    <h1 class="text_ent">Регистрация</h1>
				    </a>
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