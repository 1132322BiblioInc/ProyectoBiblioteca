<?php
#$db = new mysql('localhost','root','toor','mydb')

#if ($db->maxdb_connect_errno) 
#{
#	printf("error al conectar a la BD%s",$mysql->maxdb_connect_errno);
#}

$link = mysql_connect("localhost","root","");
if ($link) {
	mysql_select_db("mydb",$link);
}
?>