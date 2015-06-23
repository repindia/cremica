

<?php
	get_header();

	$current_cat = get_query_var('cat'); 
	// Get Current Category
	$current_category = get_category( $current_cat );
	// Get Children Categories of Current Categories
	$args = array('child_of' => $current_cat , 'hide_empty' => 0);
	$categories = get_categories( $args );

	if(is_subcategory())
	{
		$parent_cat = $current_category->parent; 
		$parent_category = get_category( $parent_cat );
		$parentCategoryName = $parent_category->name;
		
		$args = array('child_of' => $parent_cat , 'hide_empty' => 0);
		$categories = get_categories( $args );

		// Sending Data to Template Part
		set_query_var( 'categories', $categories);
		set_query_var('current_category',$current_category);
		set_query_var( 'parentCategoryName', $parentCategoryName);

		get_template_part( 'partials/subcategory-food-services'); 
	}
	else
	{	
		set_query_var( 'categories', $categories);

		get_template_part( 'partials/category-food-services'); 
	}

	get_footer();
?>

