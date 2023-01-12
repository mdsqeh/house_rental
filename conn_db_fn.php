<?php
//连接数据库函数
  function db_connect()
	{
		$host = 'localhost';		  //要连接的数据库主机名或ip地址
		$user = 'db_user';				//数据库用户名
		$pwd = 'password';			  //密码
		$dbname = 'db_name';			//要连接的数据库名
		$conn = new mysqli($host, $user, $pwd, $dbname);
        if ($conn->connect_error) {
			die('Connect Error (' . $conn->connect_errno . ') '. $conn->connect_error);
		}
		return $conn;
	}
?>
