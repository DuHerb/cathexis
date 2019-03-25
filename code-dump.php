<?php

// Featured Post Meta Boxes
function add_featured_post_meta_box() {
    add_meta_box(
        'featured_post_meta_box',
        'Author Info',
        'show_featured_post_meta_box',
        'featured_poem',
        'normal',
        'high'
    );
}
add_action('add_meta_boxes', 'add_featured_post_meta_box');

function show_featured_post_meta_box() {
    global $post;
        $meta = get_post_meta ($post->ID, 'Author Info', true);

        ?>

	<input type="hidden" name="featured_post_nonce" value="<?php echo wp_create_nonce( basename(__FILE__) ); ?>">

    <!-- All fields will go here -->
    <div>
        <label for="Author Info[name]">Author Name</label>
        <br>
        <input type="text" name="Author Info[name]" id="Author Info[name" class="regular-text" value="<?php echo $meta['name']; ?>">
    </div>

    <div>
        <label for="Author Info[bio]">Author Bio</label>
        <br>
        <textarea name="Author Info[bio]" id="Author Info[bio]" rows="5" cols="30"><?php echo $meta['bio']; ?></textarea>
    </div>

	<?php
}

function save_your_featured_post_meta( $post_id ) {
	// verify nonce
	if ( !wp_verify_nonce( $_POST['featured_post_nonce'], basename(__FILE__) ) ) {
		return $post_id;
	}
	// check autosave
	if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) {
		return $post_id;
	}
	// check permissions
	if ( 'page' === $_POST['featured_poem'] ) {
		if ( !current_user_can( 'edit_page', $post_id ) ) {
			return $post_id;
		} elseif ( !current_user_can( 'edit_post', $post_id ) ) {
			return $post_id;
		}
    }

	$old = get_post_meta( $post_id, 'Author Info', true );
	$new = $_POST['Author Info'];

	if ( $new && $new !== $old ) {
		update_post_meta( $post_id, 'Author Info', $new );
	} elseif ( '' === $new && $old ) {
		delete_post_meta( $post_id, 'Author Info', $old );
	}
}
add_action( 'save_post', 'save_your_featured_post_meta' );


//custom post loop for index.php
$args = array('post_type' => 'featured_poem');
$custom_posts = new WP_Query($args);
if ($custom_posts->have_posts()) : while ($custom_posts->have_posts()) : $custom_posts->the_post();
  get_template_part('content', 'featured');
endwhile; endif; wp_reset_postdata();

// Featured Posts

function create_featured_post_type() {
    register_post_type('featured_poem',
        array(
            'labels' => array(
                'name' => __('Featured Poems'),
                'singular_name' => __('Featured Poem'),
            ),
            'public' => true,
            'supports' => array(
                'title',
                'editor',
            ),
            'taxonomies' => array('post_tag, category')
    ));
    register_taxonomy_for_object_type('category', 'featured_poem');
    register_taxonomy_for_object_type('post_tag', 'featured_poem');
}
add_action('init', 'create_featured_post_type');

function create_standard_post_type() {
    register_post_type('standard_poem',
        array('labels' => array('name' => __('Standard Poems'),'singular_name' => __('Standard Poem')),
            'public' => true,
            'supports' => array('title', 'editor'),
            'taxonomies' => array('post_tag', 'category')
        ));
        register_taxonomy_for_object_type('category', 'standard_poem');
        register_taxonomy_for_object_type('post_tag', 'standard_poem');
}
add_action('init', 'create_standard_post_type');

//single.php if/then for regular post vs. featured.
if (have_posts()) : while (have_posts()) : the_post();
    if (in_category('featured')) {
      get_template_part('content','featured');
  } else {
      get_template_part('content', get_post_format());
}
endwhile; endif;

// archive.php old loop

if (have_posts()) : while (have_posts()) : the_post();

  get_template_part('content', 'archive');

endwhile; endif;
