<?php
$posts = get_all_posts();
?>

<h1>Главная страница</h1>

<?php if (empty($posts)): ?>
    <p>Постов пока нет.</p>
<?php else: ?>
    <?php foreach ($posts as $post): ?>
        <article>
            <h2>
                <a href="/post/<?= $post['slug'] ?>">
                    <?= $post['title'] ?>
                </a>
            </h2>
            <small><?= $post['date'] ?> | <?= $post['category'] ?></small>
            <p><?= mb_substr($post['content'], 0, 150) ?>...</p>
        </article>
    <?php endforeach; ?>
<?php endif; ?>
