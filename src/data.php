<?php

function get_all_posts(): array
{
    $path = __DIR__ . '/../data/posts.json';

    // Если файла нет — возвращаем пустой массив, не ломаем сайт
    if (!file_exists($path)) {
        return [];
    }

    $content = file_get_contents($path);
    if ($content === false) {
        return [];
    }

    try {
        return json_decode($content, true, 512, JSON_THROW_ON_ERROR);
    } catch (JsonException $e) {
        // В реальном проекте здесь пишут в лог: error_log($e->getMessage());
        // Пока просто вернем пустой массив, чтобы сайт не упал
        return [];
    }
}

function get_post_by_slug(string $slug): ?array
{
    $posts = get_all_posts();

    foreach ($posts as $post) {
        if ($post['slug'] === $slug) {
            return $post;
        }
    }

    return null;
}
