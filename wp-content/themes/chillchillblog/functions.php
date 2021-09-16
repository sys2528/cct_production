<?php

add_filter( 'wpcf7_validate', 'check_validate', 10, 2 );
function check_validate ( $result, $tags ) {
    $form  = WPCF7_Submission::get_instance();
    $wpcf7 = WPCF7_ContactForm::get_current();
    $formID = $wpcf7->id();
    $zipcode = $_POST['zipcode'];
    $pattern_thai = "/^[ก-์ ะ-ู เ-แ_.-]+$/";
    $pattern_eng = "/^[a-zA-Z _.-]+$/";
    $pattern_number = "/^[0-9]+$/";
    if($formID == 60){
	    // Birth-Year
	    if($zipcode =='' ) {
	        $result->invalidate('zipcode', 'กรุณากรอกข้อมูลให้ครบถ้วน');
	    }
	    if(!preg_match($pattern_number,$zipcode)){
	    	$result->invalidate('zipcode', 'กรุณากรอกเฉพาะตัวเลข');
	    }

	}
	return $result;
}

	// Featured Image
	if ( function_exists( 'add_theme_support' ) ) { 
	  add_theme_support( 'post-thumbnails' );
	}

	/* Get Category Type */
	function GetCategoryType(){
		$categories=get_the_category();
		if ( ! empty( $categories ) ) {
			if($categories[0]->slug=="travel"){ $CategoryIcon = '<i class="fas fa-map-marker-alt"></i>'; }
			if($categories[0]->slug=="eat"){ $CategoryIcon = '<i class="fas fa-utensils"></i>'; }
			if($categories[0]->slug=="hotel"){ $CategoryIcon = '<i class="fas fa-bed"></i>'; }
		    echo ''.$CategoryIcon.' <a href="'.esc_url( get_category_link( $categories[0]->term_id)).'">'.esc_html($categories[0]->name).'</a>';
		}
	}

	/* Get The Tags */
	function GetTagsType(){
		$posttags=get_the_tags();
		$countall=count(get_the_tags());
		$count=0;
		if ($posttags) {
		  foreach($posttags as $tag) {
		    $count++;
		    if ($countall==$count) {
		      echo '<i class="fas fa-map-pin"></i> <a href='.get_tag_link($tag->term_id).'>'.$tag->name.'</a>';
		    }
		  }
		}
	}

	/* Get The Tags */
	function GetAllTags(){
		$posttags=get_the_tags();
		$countall=count(get_the_tags());
		//$count=0;
		if ($posttags) {
			echo '<ul>';
		  	foreach($posttags as $tag) {
		      echo '<li><a href='.get_tag_link($tag->term_id).'>'.$tag->name.'</a></li>';
		  	}
		  	echo '</ul>';
		}
	}

	/* Get The Tags Stories */
	function GetTagsTypeStories(){
		$posttags=get_the_tags();
		$countall=count(get_the_tags());
		$count=0;
		if ($posttags) {
		  foreach($posttags as $tag) {
		    $count++;
		    if ($countall==$count) {
		      echo '<i class="fas fa-map-pin"></i> '.$tag->name.'';
		    }
		  }
		}
	}

	//pagination
	function pagination($pages = '', $range = 2)
	{
	     $showitems = ($range * 2)+1;
	     global $paged;
	     if(empty($paged)) $paged = 1;
	     if($pages == '')
	     {
	         global $wp_query;
	         $pages = $wp_query->max_num_pages;
	         if(!$pages)
	         {
	             $pages = 1;
	         }
	     }
	     if(1 != $pages)
	     {
			 echo "<section id=\"pagination\">\n";
			 echo "<ul>\n";
			 //Prev：
	         if($paged > 1){ echo "<li><a href='".get_pagenum_link($paged - 1)."'><i class='fas fa-long-arrow-alt-left'></i></a></li>\n";}else{echo "<li><span><i class='fas fa-long-arrow-alt-left'></i></span></li>\n";}

	         for ($i=1; $i <= $pages; $i++)
	         {
	             if (1 != $pages &&( !($i >= $paged+$range+1 || $i <= $paged-$range-1) || $pages <= $showitems ))
	             {
	                
	                echo ($paged == $i)? "<li><span class=\"active\">".$i."</span></li>\n":"<li><a href='".get_pagenum_link($i)."'>".$i."</a></li>\n";
	             }
	         }
			//Next：
			if ($paged < $pages) {echo "<li><a href=\"".get_pagenum_link($paged + 1)."\"><i class='fas fa-long-arrow-alt-right'></i></a></li>\n";}else{echo "<li><span><i class='fas fa-long-arrow-alt-right'></i></span></li>\n";}

			echo "</ul>\n";
			echo "</section>\n";
	     }
	}

?>