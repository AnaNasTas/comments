    <!DOCTYPE HTML>
    <html>

    <head>
        <meta charset="utf-8">
        <title></title>
        <link href="style.css" rel="stylesheet">
    </head>

    <body>
        <header>
            <img src="img/logo.png" style="float: right; padding-right: 70px">
            <p>Телефон: (499) 340-94-71<br> E-mail: <ins>info@future-group.ru</ins></p>
            <br><br><br><h1 style="font-size: 300%;">Комментарии</h1>
        </header>
        <hr class="hr-circle">
        <article>
            <div class="comments">
<?php
   include('comm.php');
?>
            </div>
            <hr>
            <h2>Оставить комментарий</h2>
            <form action="index.php" method="POST" name="comment">
                <div class="name">
                    <label>Ваше имя: </label><br><input type="text" name="name" class="nameinp"><br>
                </div>
                <div>
                    <label>Ваш комментарий: </label><br>
                    <textarea name="message" cols="50" rows="9" class="bord"></textarea><br>
                </div>
                <div align="center">
                    <input type="submit" value="Отправить" class="bord">
                </div>
            </form>
            <br><br>
        </article>
        <footer>
            <img src="img/logo.png" class="footer" style="float: left;">
            <p style="padding-left: 65%;">
                Телефон: (499) 340-94-71<br> E-mail: <ins>info@future-group.ru</ins><br> Адрес: <ins>115088 Москва, ул. 2-я Машиностроения, д. 7 стр. 1</ins>
            </p>
        </footer>
    </body>

    </html>