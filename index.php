<?php get_header(); ?>
<?php get_template_part('template/under'); ?>
<?php if(have_posts()): ?>
    <?php while(have_posts()):the_post(); ?>
        <section class="news">
            <h3 class="page_title"><?php the_title(); ?></h3>
            <time class="news_time" datetime="<?php the_time('Y-m-d'); ?>"><?php the_time('Y年m月d日'); ?></time>
            <div class="news_inner">
                <div class="news_contents">
                    <?php the_content(); ?>
                </div>
                <a href="<?php echo home_url(); ?>" class="btn">TOPへ戻る</a>
            </div>
        </section>
    <?php endwhile; ?>
<?php endif; ?>
<?php get_footer(); ?>