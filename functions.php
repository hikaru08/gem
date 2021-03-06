<?php

function load_js() {
	//管理画面を除外
	if ( !is_admin() ){
		//事前に読み込まれるjQueryを解除
		wp_deregister_script( 'jquery' );
		//Google CDNのjQueryを出力
		wp_enqueue_script( 'jquery', '//ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js', array(), NULL, true );

		// SP時のheaderボタン
		wp_enqueue_script( 'slidebar.js', get_template_directory_uri() . '/assets/js/slidebar.js', array(), '1.0.0', true );
	}
}
add_action( 'init', 'load_js' );
?>
