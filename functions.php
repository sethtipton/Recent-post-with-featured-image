// Homepage Blog Feed [bfeed]

function home_recentpost($atts, $content=null){

	$getpost = get_posts( array('number' => 1, 'category' => 1) );
	
	$getpost = $getpost[0];
	
		$return  = "<a href='" . get_permalink($getpost->ID) . "'>";
		$return .= "<h3>" . $getpost->post_title . "</h3>" ;
		$return .= "<span class='date'>" . mysql2date('j M Y', $getpost->post_date) . "</span>" ;
		$return .= "<span class='author'>Posted by " . get_the_author_link($getpost ->ID) . "</span>" ;
		$return .= "</a>";
	
	$return .= get_the_post_thumbnail($getpost->ID);

return $return;

}

add_shortcode('bfeed', 'home_recentpost');
