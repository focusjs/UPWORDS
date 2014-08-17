<?php 
/* Template Name: main-template  */ 
?>
<?php

	$pageid = basename(get_permalink());
	$GLOBALS["pageid"] = $pageid;
	$site_name = get_site_url();
	if(is_search() || strcmp($pageid, "") == 0 || strrpos($site_name, $pageid) > 0) {
		$GLOBALS["pageid"]="home";
	}
	
	// shop  life about causes blog contact	
	get_header();
	
	//
  if($pageid === 'home') {
		get_home_page();
	} else if($pageid === 'shop') {
		get_shop_page();
	} else if($pageid === 'life') {
		get_life_page();
	} else if($pageid === 'about') {
		get_about_page();
	} else if($pageid === 'causes') {
		get_causes_page();
	} else if($pageid === 'blog') {
		get_blog_page();
	} else if($pageid === 'contact') {
		get_contact_page();
	} else if($pageid === 'product') {
		get_product_page();
	} else {
		echo "<b> Page Not Found !</b>";
	}
	// 
	get_footer();

?>
