<?php get_header(); ?>
<?php get_template_part('template/under'); ?>

<?php if(have_posts()): ?>
    <?php while(have_posts()):the_post(); ?>
        

    <section class="menu_single">
        <div class="menu_single_inner">
            <h3 class="page_title">ショートケーキ</h3>
            <div class="menu_single_box">
                <picture>
                    <source srcset="../../img/menu_01.webp" type="image/webp">
                    <img src="../../img/menu_01.jpg" alt="ショートケーキ">
                </picture>
                <div>
                    <dl>
                        <dt>価格</dt>
                        <dd>600円</dd>
                    </dl>
                    <dl>
                        <dt>カロリー</dt>
                        <dd>343kcal</dd>
                    </dl>
                    <dl>
                        <dt>アレルギー</dt>
                        <dd>卵、乳、小麦</dd>
                    </dl>
                </div>
            </div>
            <a href="../" class="btn">メニュー一覧へ</a>
        </div>
    </section>
    <?php endwhile; ?>
<?php endif; ?>

<?php get_footer(); ?>