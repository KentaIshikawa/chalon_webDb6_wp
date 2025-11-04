<?php get_header(); ?>
<?php get_template_part('template/under'); ?>
    <section class="menu">
        <h3 class="page_title">メニュー一覧</h3>
        <section class="menu_cake">
            <div class="menu_cake_inner center">
                <h4 class="section_title">ケーキ</h4>
                <div class="menu_cake_text">
                    <p>CHALONのケーキは、国産の美味しくて安全な食材を使っています。スポンジケーキには、その日の朝にとれた卵を使っているので、卵の味が優しくしっかりしています。また、記念日のケーキなどもお受けしていますので店員にご相談ください。
                    </p>
                </div>
                <div class="menu_cake_img">
                    <?php
                    //ポストタイプがmenuで、
                    //カスタムタクソノミー種類のタームが、ケーキの物
                    $cake_args = [
                        'post_type'=>'menu',
                        'posts_per_page'=>-1,
                        'tax_query'=>[
                            [
                                'taxonomy'=>'kind',
                                'field'=>'slug',
                                'terms'=>'cake'
                            ]
                        ]
                    ];

                    $cake_query = new WP_Query($cake_args);
                    ?>
                    <?php if($cake_query->have_posts()): ?>
                        <?php while($cake_query->have_posts()):$cake_query->the_post(); ?>
                            <figure>
                                <picture>
                                    <?php get_template_part('template/thumbnail'); ?>
                                </picture>
                                <figcaption><?php the_title(); ?></figcaption>
                                <a href="<?php the_permalink(); ?>"></a>
                            </figure>
                        <?php endwhile; ?>
                    <?php endif; ?>
                </div>
            </div>
        </section>

        <section class="menu_other">
            <div class="menu_other_inner center">
                <h4 class="section_title">焼き菓子・その他</h4>
                <div class="menu_other_text">
                    <p>ケーキ以外にも、クッキーやマカロン、ゼリーなどもご用意しております。一つ一つ個包装になっているので、お友達などとシェアしやすくなっています。焼き菓子といえど、食材の新鮮さにはこだわっています。
                    </p>
                </div>
                <div class="menu_other_img">
                    <figure>
                        <picture>
                            <source srcset="../img/menu_10.webp" type="image/webp">
                            <img src="../img/menu_10.jpg" alt="バタークッキー">
                        </picture>
                        <figcaption>バタークッキー</figcaption>
                        <a href="#"></a>
                    </figure>
                    <figure>
                        <picture>
                            <source srcset="../img/menu_11.webp" type="image/webp">
                            <img src="../img/menu_11.jpg" alt="チョコチップクッキー">
                        </picture>
                        <figcaption>チョコチップクッキー</figcaption>
                        <a href="#"></a>
                    </figure>
                    <figure>
                        <picture>
                            <source srcset="../img/menu_12.webp" type="image/webp">
                            <img src="../img/menu_12.jpg" alt="クッキーセット">
                        </picture>
                        <figcaption>クッキーセット</figcaption>
                        <a href="#"></a>
                    </figure>
                    <figure>
                        <picture>
                            <source srcset="../img/menu_13.webp" type="image/webp">
                            <img src="../img/menu_13.jpg" alt="フルーツのゼリー">
                        </picture>
                        <figcaption>フルーツのゼリー</figcaption>
                        <a href="#"></a>
                    </figure>
                    <figure>
                        <picture>
                            <source srcset="../img/menu_14.webp" type="image/webp">
                            <img src="../img/menu_14.jpg" alt="マカロン">
                        </picture>
                        <figcaption>マカロン</figcaption>
                        <a href="#"></a>
                    </figure>
                </div>
            </div>
        </section>
        <section class="menu_drink">
            <div class="menu_drink_inner center">
                <h4 class="section_title">ドリンク</h4>
                <div class="menu_drink_text">
                    <p>ケーキをなるべく早く、美味しく召し上がって頂く為にイートインスペースを作りました。イートインスペースでのみ、ドリンクをご用意しています。ケーキと一緒に是非召し上がってください。</p>
                </div>
                <div class="menu_drink_img">
                    <figure>
                        <picture>
                            <source srcset="../img/menu_15.webp" type="image/webp">
                            <img src="../img/menu_15.jpg" alt="コーヒー">
                        </picture>
                        <figcaption>コーヒー</figcaption>
                        <a href="#"></a>
                    </figure>
                    <figure>
                        <picture>
                            <source srcset="../img/menu_16.webp" type="image/webp">
                            <img src="../img/menu_16.jpg" alt="アイスコーヒー">
                        </picture>
                        <figcaption>アイスコーヒー</figcaption>
                        <a href="#"></a>
                    </figure>
                    <figure>
                        <picture>
                            <source srcset="../img/menu_17.webp" type="image/webp">
                            <img src="../img/menu_17.jpg" alt="紅茶">
                        </picture>
                        <figcaption>紅茶</figcaption>
                        <a href="#"></a>
                    </figure>
                    <figure>
                        <picture>
                            <source srcset="../img/menu_18.webp" type="image/webp">
                            <img src="../img/menu_18.jpg" alt="アイスティー">
                        </picture>
                        <figcaption>アイスティー</figcaption>
                        <a href="#"></a>
                    </figure>
                </div>
            </div>
        </section>
    </section>
<?php get_footer(); ?>