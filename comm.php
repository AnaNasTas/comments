<?php

	$name = $_POST['name'];
	$message = $_POST['message'];

//Корректное отображение в html
	$name = htmlspecialchars($name);
  	$message = htmlspecialchars($message);

  if ($_POST) {
//Добавление комментария в базу данных
  	$mysqli = new mysqli("localhost", "root", "", "db_comments");
  	$mysqli->query("INSERT INTO `comments` (`name`, `message`) VALUES ('$name', '$message')");
//Вывод на экран
  	$result = $mysqli->query("SELECT * FROM `comments`");

    while ($comments = $result->fetch_assoc()) {
 			foreach ($comments as $comment) {
				print_r("$comment"."<br>");
    		}
 	}
 		
 	

}
  ?>