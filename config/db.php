<?php
	/**
	*
	*	Инициализация подключения к БД
	*
	*/
	
	$dblocation = "127.0.0.1";
	$dbname = "test_samsonos";
	$dbuser = "root";
	$dbpasswd = "";
	
	//соединяемся с БД.
	$db = mysql_connect($dblocation, $dbuser, $dbpasswd);

	//проверка на ошибку

	if(!$db){
		echo "Ошибка доступа к MySQL";
		exit();
	}
	
	//устанавливаем кодировку по умолчанию для текущего соединения.
	mysql_set_charset('utf8');
	
	//подключаемся непосредственно к нашей БД
	if(!mysql_select_db($dbname, $db)){
		echo "Ошибка доступа к базе данных: ($dbname)";
		exit();
	}
