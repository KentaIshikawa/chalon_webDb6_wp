<?php get_header(); ?>
<?php get_template_part('template/under'); ?>
<?php if(have_posts()): ?>
    <?php while(have_posts()):the_post(); ?>
        <section class="news">
            <h3 class="page_title"><?php the_title(); ?></h3>
            <time class="news_time" datetime="2023-08-07">2023-08-07</time>
            <div class="news_inner">
                <div class="news_contents">

                </div>
                <a href="../" class="btn">TOPへ戻る</a>
            </div>
        </section>
    <?php endwhile; ?>
<?php endif; ?>
<?php get_footer(); ?>