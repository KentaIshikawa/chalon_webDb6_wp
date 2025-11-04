<?php echo SCF::get('age'); ?><?php echo SCF::get('seibetsu'); ?>
<?php if(SCF::get('child_sanka')==='有'): ?>
    <br>
    <?php
        $children = SCF::get('children');
    ?>
    お子さん<?php echo count($children); ?>人と参加
<?php endif; ?>