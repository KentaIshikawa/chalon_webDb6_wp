<?php get_header(); ?>
<?php get_template_part('template/under'); ?>
<?php if(have_posts()): ?>
    <?php while(have_posts()):the_post(); ?>
        

    <section class="voice">
        <div class="voice_inner">
            <h3 class="page_title"><?php get_template_part('template/voice','title'); ?></h3>
            <div class="voice_box">
                <?php get_template_part('template/thumbnail'); ?>
                <div>
                    <dl>
                        <dt>お名前</dt>
                        <dd><?php echo SCF::get('family_name'); ?> <?php echo SCF::get('first_name'); ?></dd>
                    </dl>
                    <?php if(SCF::get('child_sanka') === '有'): ?>
                        <dl>
                            <dt>お子さん</dt>
                            <dd>
                                <?php
                                echo '<pre>';
                                print_r(SCF::get('children'));
                                echo '</pre>';
                                ?>
                                <?php
                                    $children = SCF::get('children');
                                    $children_arr = [];

                                    foreach($children as $child){
                                        $children_arr[]=$child['child_age'].$child['child_seibetsu'];
                                    };
                                    echo implode('と',$children_arr);
                                ?>
                                
                            </dd>
                        </dl>
                    <?php endif; ?>
                    <dl>
                        <dt>コース</dt>
                        <dd>Aコース（月2回）</dd>
                    </dl>
                    <dl>
                        <dt>お菓子作り経験</dt>
                        <dd>ほぼ無し</dd>
                    </dl>
                </div>
            </div>
            <section class="voice_interview_box_wrap">
                <h4 class="section_title">インタビュー</h4>
                <div class="voice_interview_box">
                    <dl class="voice_interview_box_q">
                        <dt><span class="material-symbols-outlined">support_agent</span>インタビュアー</dt>
                        <dd>まず、お子さんについて伺っても良いですか？</dd>
                    </dl>
                    <dl class="voice_interview_box_a">
                        <dt>
                            武井さん
                            <picture>
                                <source srcset="../../img/lesson_voice01.webp" type="image/webp">
                                <img src="../../img/lesson_voice01.jpg" alt="武井さん">
                            </picture>
                        </dt>
                        <dd>はい。上の子が6歳で下の子が5歳です。上の子は女の子なのでおとなしい方だと思いますが、下の子が男の子なのでやんちゃで困ってます。</dd>
                    </dl>
                </div>
                <div class="voice_interview_box">
                    <dl class="voice_interview_box_q">
                        <dt><span class="material-symbols-outlined">support_agent</span>インタビュアー</dt>

                        <dd>
                            そうなんですね（笑）今回、やんちゃな下のお子さんも一緒にお菓子教室に通っていただきましたが、やんちゃっぷりは大丈夫でしたか？
                        </dd>
                    </dl>
                    <dl class="voice_interview_box_a">
                        <dt>
                            武井さん
                            <picture>
                                <source srcset="../../img/lesson_voice01.webp" type="image/webp">
                                <img src="../../img/lesson_voice01.jpg" alt="武井さん">
                            </picture>
                        </dt>
                        <dd>最初は飽きちゃうかなぁと思っていましたが、難しいことは私が、子供が出来る事は子供にやらせることで、ちゃんと通えたと思います。
                        </dd>
                    </dl>
                </div>
                <div class="voice_interview_box">
                    <dl class="voice_interview_box_q">
                        <dt><span class="material-symbols-outlined">support_agent</span>インタビュアー</dt>

                        <dd>
                            具体的にどんな事をお母さんがやって、どんな事をお子さんがやっていたのですか？

                        </dd>
                    </dl>
                    <dl class="voice_interview_box_a">
                        <dt>
                            武井さん
                            <picture>
                                <source srcset="../../img/lesson_voice01.webp" type="image/webp">
                                <img src="../../img/lesson_voice01.jpg" alt="武井さん">
                            </picture>
                        </dt>
                        <dd>例えばクッキーの記事を作るのは、色々混ぜないといけなので私がやることが多かったです。反対に、生地を型抜きするのなんかは、子供でも出来るので子供にやらせていました。
                        </dd>
                    </dl>
                </div>
                <div class="voice_interview_box">
                    <dl class="voice_interview_box_q">
                        <dt><span class="material-symbols-outlined">support_agent</span>インタビュアー</dt>

                        <dd>
                            なるほどなるほど。少し力作業というか、準備っぽい事はお母さんが行って、お菓子のイメージが湧きやすい所をお子さんがやっていたんですね。
                        </dd>
                    </dl>
                    <dl class="voice_interview_box_a">
                        <dt>
                            武井さん
                            <picture>
                                <source srcset="../../img/lesson_voice01.webp" type="image/webp">
                                <img src="../../img/lesson_voice01.jpg" alt="武井さん">
                            </picture>
                        </dt>
                        <dd>はい。そんな感じでした。その方が子供は楽しめそうだったので。ですが、他のお母さんの子は、かき回すのが楽しそうだったので子供によりそうですね。
                        </dd>
                    </dl>
                </div>
                <div class="voice_interview_box">
                    <dl class="voice_interview_box_q">
                        <dt><span class="material-symbols-outlined">support_agent</span>インタビュアー</dt>

                        <dd>
                            ご自宅では何か作られましたか？
                        </dd>
                    </dl>
                    <dl class="voice_interview_box_a">
                        <dt>
                            武井さん
                            <picture>
                                <source srcset="../../img/lesson_voice01.webp" type="image/webp">
                                <img src="../../img/lesson_voice01.jpg" alt="武井さん">
                            </picture>
                        </dt>
                        <dd>オーブンが無いので、クッキーなどは試せないのですが、パンナコッタは作ってみました。はやくオーブンを買って、他の物も試してみたいです。
                        </dd>
                    </dl>
                </div>
                <div class="voice_interview_box">
                    <dl class="voice_interview_box_q">
                        <dt><span class="material-symbols-outlined">support_agent</span>インタビュアー</dt>

                        <dd>
                            最後に、これからお菓子教室に通われる方に一言お願いします。
                        </dd>
                    </dl>
                    <dl class="voice_interview_box_a">
                        <dt>
                            武井さん
                            <picture>
                                <source srcset="../../img/lesson_voice01.webp" type="image/webp">
                                <img src="../../img/lesson_voice01.jpg" alt="武井さん">
                            </picture>
                        </dt>
                        <dd>お子さんと一緒に、是非楽しんでほしいです。もちろん一人でも、ご夫婦でも楽しめると思います！
                        </dd>
                    </dl>
                </div>
            </section>
            <a href="../trial/" class="btn">無料体験のお申込みはこちら</a>
        </div>
    </section>
    <?php endwhile; ?>
<?php endif; ?>
<?php get_footer(); ?>