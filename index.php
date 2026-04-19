<?php

declare(strict_types=1);

require 'helpers.php';
require_once 'functions.php';
require_once 'data.php';

/**
 * @var array $categories
 * @var array $lots
 */

$isAuth = rand(0, 1);

$userName = 'Stepan Kormilin';

$title = 'YetiCave';

$mainContent = include_template('main.php', [
    'categories' => $categories,
    'lots' => $lots,
]);

$layoutContent = include_template('layout.php', [
    'title' => $title,
    'isAuth' => $isAuth,
    'userName' => $userName,
    'mainContent' => $mainContent,
    'categories' => $categories,
]);

print($layoutContent);
