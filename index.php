<?php

$page_path = 'pages/';
$include_path = 'includes/';
$pages = ['/', '/fidelites', '/restaurant', '/nous-localisez', '/jouez-et-gagnez', '/nos-produits', '/mes-cadeaux', '/spinne-and-win', '/soldes'];
$page = $_SERVER['REQUEST_URI'];
$style = '';
$script = '';

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
    /* fidelites page*/
    case $pages[6]:
        $file_name = 'mes-gains.php';
    break;
    /* spinner game page*/
    case $pages[7]:
        $file_name = 'spinner-game.php';
        $style_mame = 'spinner-style.php';
        $script_mame = 'spinner-script.php';
    break;
    case $pages[8]:
        $file_name = 'soldes.php';
    break;
    
}
$content = file_get_contents($page_path.$file_name);
if(isset($style_mame)) $style = file_get_contents($include_path.$style_mame);
if(isset($script_mame)) $script = file_get_contents($include_path.$script_mame);
$layout = file_get_contents('layout.php');
echo str_replace(['@content', '@style', '@script'], [$content, $style, $script], $layout);

