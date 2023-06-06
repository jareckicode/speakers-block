<?php
/**
 * Server-side rendering of the `speakers` blocks.
 *
 */

 $args = array(
	'post_type' => 'speakers',
	'post_status' => 'publish',	
);

$query = new WP_Query( $args ); ?>

<div <?php echo wp_kses_data( get_block_wrapper_attributes() );?>>

<?php

while ( $query->have_posts() ) {
    $query->the_post(); ?>

			<div class='wp-block-create-block-speakers-item'>
				<div class'wp-block-create-block-speakers-item__image'>
        <?php
                if ( has_post_thumbnail() ) {
                    echo get_the_post_thumbnail();
                } 
            ?>
				</div>
				<div class='wp-block-create-block-speakers-item__content'>
					<h2><?php the_title();?></h2>
					<div><?php the_content(); ?></div>
				</div>
			</div>
          
<?php } ?>

</div>