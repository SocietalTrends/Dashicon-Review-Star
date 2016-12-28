/* Dashiconsを使用可能に */
add_action( "wp_print_styles", "load_dashicons");
function load_dashicons() {
	wp_enqueue_style("dashicons");
}


/* レビューのためのショートコード関数定義 */
function reviewStar($rating){

	//デフォルト引数を定義
	$rating = shortcode_atts(array(
		"review" => 0, //評価スターの数
		"isdeci" => 0, //小数点の有無(0か1で設定。デフォルトは無し)
		"max" => 5     //最大スター数
	), $rating);

	$star;

	for($i = 0; $i < $rating["review"]; $i++){
		$star .= "<span class='star_full'></span>";
	}
	if($rating["isdeci"] == 1 && $rating["review"] != $rating["max"]){
			$star .= "<span class='star_half'></span>";
			$rating["review"] = $rating["review"] + $rating["isdeci"];
	}
	if($rating["review"] > $rating["max"]){
		echo("<br>[[デフォルトの最大数を超えたスターを表示することはできません。]]<br>[[表示するには第3引数の属性maxを用いて max = x と最大数を任意に設定してください。]]<br>");		
	}else{
		$max = $rating["max"] - $rating["review"];
		for($j = 0; $j < $max; $j++){
			$star .= "<span class='star_empty'></span>";
		}
		return "<div class='review'>$star</div>";
	}
}
//ショートコードを実行
add_shortcode("star", "reviewStar");
