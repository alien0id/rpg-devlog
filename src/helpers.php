<?php

function render(string $view, string $title, array $data = []):void {
    ob_start();
    extract($data);
    require __DIR__ . '/../templates/pages/' . $view . '.php';
    $content = ob_get_clean();
    require __DIR__ . '/../templates/layout.php';
};


