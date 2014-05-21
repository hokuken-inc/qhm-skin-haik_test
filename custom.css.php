<?php

/**
*  Bootstrap などを読み込んだ後に、読み込むCSS。
*	カスタマイズに対応させる部分のCSS を上書きするCSS を定義する。
*
*/
?>

<style>

h1, h2, h3, h4, h5 {
	color : <?php hv('heading_color'); ?>;
}

p {
    color: <?php hv('body_color') ?>;
}

</style>

