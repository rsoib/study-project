<?php

	define("DB_HOST","localhost");
	define("DB_USER","root");
	define("DB_PASS","");
	define("DB_NAME","barselona");



$con = mysqli_connect(DB_HOST,DB_USER,DB_PASS,DB_NAME);
mysqli_set_charset($con, "utf-8");

if (mysqli_connect_errno()) {
  echo "Ошибка при подключение к базе данных: "; mysqli_connect_error();} ?>