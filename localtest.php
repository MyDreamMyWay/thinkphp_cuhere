<?php
$hostname = "127.0.0.1";  //ָ����������������IP
$database = "test";  //Ҫ���ӵ����ݿ�����
$username = "root";  //MYSQL��ROOT����Ա����
$password = "My?24680";  //ROOT������

mysql_connect($hostname,$username,$password) or die("connect database error!");

echo "Connect MySQL OK!";

?>