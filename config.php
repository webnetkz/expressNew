<?php

@session_start();
require_once 'app/db/db.php';

// Получение глобальных переменных
$global = $pdo->query('SELECT `url` FROM `settings` WHERE id = 1;');
$global = $global->fetchAll(PDO::FETCH_ASSOC);

$url = $global[0]['url'];
$uri = $_SERVER['REQUEST_URI'];
$content = $uri;

// Получение переменных страницы
$page = $pdo->query('SELECT `title` FROM `data_page` WHERE `path` = "'.$uri.'";');
$page = $page->fetchAll(PDO::FETCH_ASSOC);

$title = $page[0]['title'];





