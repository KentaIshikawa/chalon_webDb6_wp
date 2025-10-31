<div class="under_title">
    <div class="under_title_inner center">
        <h2>
            <?php
                $file = '';
                $alt = '';
                if(is_page('about')){
                    $file = 'about';
                    $alt = 'アバウト';
                }
                if(is_page('access')){
                    $file = 'access';
                    $alt = 'アクセス';
                }
                if(is_page(['trial','check','thanks'])){
                    $file = 'trial';
                    $alt = '無料体験お申し込み';
                }
                if(is_singular('post')){
                    $file = 'news';
                    $alt = 'お知らせ';
                }
            ?>
            <img class="sp contents_title" src="<?php echo get_template_directory_uri(); ?>/img/title_<?php echo $file; ?>_sp.svg" alt="<?php echo $alt; ?>">
            <img class="pc contents_title" src="<?php echo get_template_directory_uri(); ?>/img/title_<?php echo $file; ?>_pc.svg" alt="<?php echo $alt; ?>">

        </h2>
    </div>
</div>