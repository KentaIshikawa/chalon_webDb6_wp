<picture>
    <?php if(has_post_thumbnail()): ?>
        <?php the_post_thumbnail(); ?>
    <?php else: ?>
        <img src="https://placehold.jp/f77237/ffffff/1200x900.jpg?text=No%20Image" alt="">
    <?php endif; ?>
</picture>