<?php get_header(); ?>
<?php get_template_part('template/under'); ?>

<?php if(have_posts()): ?>
    <?php while(have_posts()):the_post(); ?>
        <section class="menu_single">
            <div class="menu_single_inner">
                <h3 class="page_title"><?php the_title(); ?></h3>
                <div class="menu_single_box">
                    <picture>
                        <?php if(has_post_thumbnail()): ?>
                            <?php the_post_thumbnail(); ?>
                        <?php else: ?>
                            <img src="https://placehold.jp/f77237/ffffff/1200x900.jpg?text=No%20Image" alt="">
                        <?php endif; ?>
                    </picture>
                    <div>
                        <dl>
                            <dt>価格</dt>
                            <dd><?php echo SCF::get('price'); ?>円</dd>
                        </dl>
                        <dl>
                            <dt>カロリー</dt>
                            <dd><?php echo SCF::get('cal'); ?>kcal</dd>
                        </dl>
                        <dl>
                            <dt>アレルギー</dt>
                            <dd>
                                <?php
                                    $alg_arr = SCF::get('alg');
                                    echo implode('、',$alg_arr);
                                ?>
                            </dd>
                        </dl>
                    </div>
                </div>
                <a href="../" class="btn">メニュー一覧へ</a>
            </div>
        </section>
    <?php endwhile; ?>
<?php endif; ?>

<?php get_footer(); ?>