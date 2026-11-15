<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title><?= $title ?></title>
    <link rel="stylesheet" href="/assets/css/style.css">
</head>
<body>
    <header>
        <nav>
            <a href="/">Главная</a> | <a href="/about">О блоге</a>
        </nav>
    </header>
    <main>
        <?= $content ?> <!-- Сюда вставится текст страницы -->
    </main>
</body>
</html>
