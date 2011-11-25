<?php

//ideahack functions.

//list all subpages (for partner pages)
add_shortcode('list_all_subpages', 'ih_list_all_subpages');


// ideahack redirecting students page to search page.

add_action('get_header', 'ih_redirect_students');

function ih_redirect_students() {
	if ( "/students/" == $_SERVER['REQUEST_URI'] ){
				wp_redirect('/?search-class=DB_CustomSearch_Widget-db_customsearch_widget&widget_number=preset-default&all-1=wpsc-product&cs-Country-0=&cs-Gender-2=&cs-Active-3=true&search=Search');
		exit;
	} 
}



// Function that will return our Wordpress menu
function list_menu($atts, $content = null) {
	extract(shortcode_atts(array(  
		'menu'            => '', 
		'container'       => 'div', 
		'container_class' => '', 
		'container_id'    => '', 
		'menu_class'      => 'menu', 
		'menu_id'         => '',
		'echo'            => true,
		'fallback_cb'     => 'wp_page_menu',
		'before'          => '',
		'after'           => '',
		'link_before'     => '',
		'link_after'      => '',
		'depth'           => 0,
		'walker'          => '',
		'theme_location'  => ''), 
		$atts));
 
 
	return wp_nav_menu( array( 
		'menu'            => $menu, 
		'container'       => $container, 
		'container_class' => $container_class, 
		'container_id'    => $container_id, 
		'menu_class'      => $menu_class, 
		'menu_id'         => $menu_id,
		'echo'            => false,
		'fallback_cb'     => $fallback_cb,
		'before'          => $before,
		'after'           => $after,
		'link_before'     => $link_before,
		'link_after'      => $link_after,
		'depth'           => $depth,
		'walker'          => $walker,
		'theme_location'  => $theme_location));
}
//Create the shortcode
add_shortcode("listmenu", "list_menu");


//disable admin bar
define ( 'BP_DISABLE_ADMIN_BAR', true );


/**
 * helper function for ih_content to close tags
 */

function ih_close_tags($text) {

    $patt_open    = "%((?<!</)(?<=<)[\s]*[^/!>\s]+(?=>|[\s]+[^>]*[^/]>)(?!/>))%";

    $patt_close    = "%((?<=</)([^>]+)(?=>))%";

    if (preg_match_all($patt_open,$text,$matches))

    {

        $m_open = $matches[1];

        if(!empty($m_open))

        {

            preg_match_all($patt_close,$text,$matches2);

            $m_close = $matches2[1];

            if (count($m_open) > count($m_close))

            {

                $m_open = array_reverse($m_open);

                foreach ($m_close as $tag) $c_tags[$tag]++;

                foreach ($m_open as $k => $tag)    if ($c_tags[$tag]--<=0) $text.='</'.$tag.'>';

            }

        }

    }

    return $text;

}

/**
 * Seeing as WordPress doesn't support product id in excerpt, we had to create 
 * our own excerpt using a custom function. 
 */

	function ih_content($theContent, $num, $more_link_text = 'LEARN MORE', $post_id = 0) {  

	//$theContent = get_the_content($more_link_text);  
	$return_value = "";
	$output = preg_replace('/<img[^>]+./','', $theContent);  

	$limit = $num+1;  

	$content = explode(' ', $output, $limit);  

	array_pop($content);  

	$content = implode(" ",$content);  

    $content = strip_tags($content, '<p><a><address><a><abbr><acronym><b><big><blockquote><br><caption><cite><class><code><col><del><dd><div><dl><dt><em><font><h1><h2><h3><h4><h5><h6><hr><i><img><ins><kbd><li><ol><p><pre><q><s><span><strike><strong><sub><sup><table><tbody><td><tfoot><tr><tt><ul><var>');

      $return_value .= ih_close_tags($content) . "...";

      $return_value .= "<p><a id='readstory' href='";

      $return_value .= get_permalink($post_id);

      $return_value .= "'>".$more_link_text."</a></p>";

	return $return_value;
}

//list sub pages for partner page
function ih_list_all_subpages( $atts ) {
	extract( shortcode_atts( array(
		'page_id' => '1'
	), $atts ) );

	$args = array(
	    'child_of'     => 4879
 		);
	
	// $output = "<ul> <li> hello world </li>";
	$pages_array = get_pages( $args ); 
	//var_dump($pages_array);
	foreach( $pages_array as $page ) {
		$output .= "<div id='partner'><a id='partnerlink' href='". get_page_link( $page->ID ) . "'>" . $page->post_title . "</a>" . "<br />" . ih_content($page->post_content, 60,  $more_link_text = 'SEE THEIR STUDENTS', $page->ID) . "</div>"; // 
	}
	// $output .= "</ul>";	 
	return $output ;
}

add_image_size('frontpage', 100, 100, true); // thumbnails



