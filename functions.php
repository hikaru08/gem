<?php

function load_js() {
	//管理画面を除外
	if ( !is_admin() ){
		//事前に読み込まれるjQueryを解除
		wp_deregister_script( 'jquery' );
		//Google CDNのjQueryを出力
		wp_enqueue_script( 'jquery', '//ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js', array(), NULL, true );

		// まだjs動かない
		// wp_enqueue_script( 'responsive-table.js', get_template_directory_uri() . '/assets/js/app.js', array(), '1.0.0', true );
	}
}
add_action( 'init', 'load_js' );
?>
