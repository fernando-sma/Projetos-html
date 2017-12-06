<?php
echo "<meta charset = 'utf-8'>";
$questaon = rand(1,4);
$mysqli = new mysqli("localhost","root","","vestibular");
$pergunta = $mysqli->query ("SELECT `pergunta` FROM `questoes` WHERE id = $questaon")->fetch_object()-> pergunta;
$a = $mysqli->query ("SELECT `a` FROM `questoes` WHERE id = $questaon")->fetch_object()-> a;
$b = $mysqli->query ("SELECT `b` FROM `questoes` WHERE id = $questaon")->fetch_object()-> b;
$c = $mysqli->query ("SELECT `c` FROM `questoes` WHERE id = $questaon")->fetch_object()-> c;
$d = $mysqli->query ("SELECT `d` FROM `questoes` WHERE id = $questaon")->fetch_object()-> d;
$e = $mysqli->query ("SELECT `e` FROM `questoes` WHERE id = $questaon")->fetch_object()-> e;
$rc = $mysqli->query ("SELECT `rc` FROM `questoes` WHERE id = $questaon")->fetch_object()-> rc;


echo $pergunta . "<br>";
echo $a . "<br>";
echo $b . "<br>";
echo $c . "<br>";
echo $d . "<br>";
echo $e . "<br>";






?>