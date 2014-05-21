<?php
return array(
    'bootstrap' => true,
    'custom_options' => array(
        'logo_text' => array(
            'title' => 'ロゴ文字',
            'description' => 'ヘッダーのロゴに指定する文字です。',
            'type' => 'text',
            'value' => 'haik'
        ),
        'heading_color' => array(
            'title' => 'ヘッダー文字色',
            'description' => 'ヘッダーの文字色に指定する色です。',
            'type' => 'color',
            'value' => 'green'
        ),
        'body_color' => array(
            'title' => '本文文字色',
            'description' => '本文の文字色に指定する色です。',
            'type' => 'color',
            'value' => 'black'
        ),
        'body_font' => array(
            'title' => '本文フォント',
            'description' => '本文のフォント指定です。',
            'type' => 'font',
            'value' => 'sans-serif'
        ),
        'body_bgimage' => array(
            'title' => '本文背景画像',
            'description' => '本文の背景画像です。',
            'type' => 'img',
            'value' => '',
        ),
        'logo_visible' => array(
            'title' => 'ロゴ画像の表示',
            'description' => 'ロゴ画像を表示するかどうか。',
            'type' => 'if',
            'value' => true
        )
    )
);
