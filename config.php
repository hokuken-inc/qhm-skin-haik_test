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
            'type'        => 'color',
            'palette'     => array('white', 'green', 'gray'), 
            'value'       => 'green'
        ),
        'body_color' => array(
            'title' => '本文文字色',
            'description' => '本文の文字色に指定する色です。',
            'type' => 'color',
            'palette'     => array('white', 'green', 'gray'), 
            'value' => 'black'
        ),
        'body_font' => array(
            'title' => '本文フォント',
            'description' => '本文のフォント指定です。',
            'type' => 'select',
            'options' => array('sans-serif'),
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
        ),
        'theme_color' => array(
            'title' => 'テーマカラー',
            'description' => '本文の文字色に指定する色です。',
            'type' => 'color',
            'palette'  => array('#428bca', '#5cb85c', '#5bc0de', '#f0ad4e', '#d9534f'), 
            'value' => '#5cb85c'
        ),
        'theme_if' => array(
            'title' => '背景と文字の色',
            'description' => 'true:白背景文字,false：色背景白文字',
            'type'    => 'if',
            'paint'   => 'theme_color',
            'value'   =>  true
        ),
        
    )
);
