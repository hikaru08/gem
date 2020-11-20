<?php 

function load_js() {
	//管理画面を除外
	if ( !is_admin() ){
		//事前に読み込まれるjQueryを解除
		wp_deregister_script( 'jquery' );
		//Google CDNのjQueryを出力
		wp_enqueue_script( 'jquery', '//ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js', array(), NULL, true );
	}
}
add_action( 'init', 'load_js' );
?>