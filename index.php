<?php

$db = new PDO("mysql:host=localhost;dbname=lesson01",'mysql', 'mysql');
$statement = $db->query('SELECT * FROM users');
$users = $statement->fetchAll(PDO::FETCH_ASSOC);

$statement = $db->query('SELECT * FROM posts');
$posts = $statement->fetchAll(PDO::FETCH_ASSOC);

var_dump($users,$posts);