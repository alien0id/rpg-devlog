<?php

$post = $post ?? null;

if ($post !== null):
?>
    <h1><?= htmlspecialchars($post['title']) ?></h1>

    <small>
        <?= htmlspecialchars($post['date']) ?> ·
        <?= htmlspecialchars($post['category']) ?>
    </small>

    <p>
        <?= nl2br(htmlspecialchars($post['content'])) ?>
    </p>

    <a href="/">← Назад на главную</a>
<?php
endif;
