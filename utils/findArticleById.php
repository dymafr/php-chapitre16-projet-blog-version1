<?php
declare(strict_types=1);
function findArticleById($id): array | null {
    $filename = __DIR__ . '/../data/articles.json';
    if (file_exists($filename)) {
        $articles = json_decode(file_get_contents($filename), true) ?? [];
        $articlesIds = array_column($articles, 'id');
        $articleIndex = array_search($id, $articlesIds);
        return $articles[$articleIndex];
    } else {
        return null;
    }
}
