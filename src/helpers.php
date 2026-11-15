<?php

function render($view, $title) {
    ob_start();
    require __DIR__ . '/../templates/pages/' . $view . '.php';
    $content = ob_get_clean();
    require __DIR__ . '/../templates/layout.php';
};


