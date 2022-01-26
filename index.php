<?php

$page_path = 'pages/';
$pages = ['/', '/fidelites', '/restaurant', '/nous-localisez', '/jouez-et-gagnez', '/nos-produits', '/mes-cadeaux'];
$page = $_SERVER['REQUEST_URI'];

switch($page) {
    /* acceuil page*/
    case $pages[0]:
        $file_name = 'home.php';
    break;
    /* restaurant page*/
    case $pages[2]:
        $file_name = 'restaurant.php';
    break;
    /* nous-localisez page*/
    case $pages[3]:
        $file_name = 'nous-localisez.php';
    break;
    /* nos-produits page*/
    case $pages[5]:
        $file_name = 'nos-produits.php';
    break;
    /* fidelites page*/
    case $pages[1]:
        $file_name = 'fidelities.php';
    break;
    case $pages[6]:
        $file_name = 'mes-gains.php';
    break;
    
}
$content = file_get_contents($page_path.$file_name);
$layout = file_get_contents('layout.php');
echo str_replace('@content', $content, $layout);

