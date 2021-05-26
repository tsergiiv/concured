<div class="blog-article-elem">
    <article class="article-elem">
        <a class="article-cover" href="<?= the_permalink() ?>">
            <img src="<?= the_post_thumbnail() ?>" alt="Article #1">
        </a>
        <div class="article-info">
            <div class="article-tag">Article</div>
            <div class="article-date"><?= strtolower(get_the_date()) ?> <?= the_time() ?></div>
        </div>
        <div class="article-name"><?= the_title() ?></div><a class="read-more article-read-more" href="<?= the_permalink() ?>">Read more</a>
    </article>
</div>