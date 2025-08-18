<?php

/**
 * Register block categories
 */
function cse_blocks_register_block_category( $block_categories ) {
	$categories = array(
		'slug' => 'cse-blocks',
		'title' => 'CSE Blocks',
	);
	return array_merge( array( $categories ), $block_categories );
}
add_filter( 'block_categories_all', 'cse_blocks_register_block_category' );
