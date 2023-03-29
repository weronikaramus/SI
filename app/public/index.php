<?php

require dirname(__DIR__) . '/inc/debug.inc.php';
require dirname(__DIR__) . '/inc/bookmarks.inc.php';
require dirname(__DIR__) . '/inc/templates.inc.php';

$view = [];
$view['title'] = 'Bookmarks';
$view['template'] = 'index';
$bookmarks = find_all();

render([
    'title' => 'Bookmarks',
    'template' => 'index',
    'bookmarks' => $bookmarks,
]);
