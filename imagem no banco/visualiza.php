<?php
	
$mysqli = new mysqli("localhost","root","","test");
$row = $mysqli->query ("SELECT `img` FROM `pessoa` WHERE id = 8")->fetch_object()-> img;
header("content-type: image/gif");
echo $row->img;




?>