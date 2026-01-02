<?php
header("Content-Type: application/xml; charset=utf-8");

$base_url = "https://drnajmunriyaz.com";

$pages = [
    'home',
    'about',
    'service',
    'courses',
    'books',
    'blog',
    'videos',
    'contact'
];

echo '<?xml version="1.0" encoding="UTF-8"?>';
?>
<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">
    <url>
        <loc><?= $base_url ?>/</loc>
        <lastmod><?= date('Y-m-d') ?></lastmod>
        <changefreq>weekly</changefreq>
        <priority>1.0</priority>
    </url>
    <?php foreach ($pages as $page): ?>
        <url>
            <loc><?= $base_url ?>/<?= $page ?></loc>
            <lastmod><?= date('Y-m-d') ?></lastmod>
            <changefreq>monthly</changefreq>
            <priority>0.8</priority>
        </url>
    <?php endforeach; ?>
</urlset>