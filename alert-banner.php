<?php 
		$meta_query = array(
			array(
				'key' => 'expiration', 
				'value' => date('Ymd'),
				'type' => 'DATE',
				'compare' => '>'
			)
		);
		$args = array(
				'post_type' => 'alert_banner',
				'posts_per_page' => -1,
				'meta_key' => 'expiration', 
				'meta_query' => $meta_query
			);
		$the_query = new WP_Query( $args ); 
        
        if ($the_query -> have_posts()) {
                        
			while ($the_query -> have_posts()) : $the_query -> the_post();
				
				?><aside role="alert" class="alert-banner"><div class="pagewidth">
                    	<?php 
						if (get_field('links_to') == 'internal') { 
							$link = get_field('internal_page'); 
							$target = "_self";
						?>
							<strong><?php the_field('alert_message'); ?>
							<a href="<?php echo $link; ?>" target="<?php echo $target; ?>"><?php the_field('link_text'); ?> &#8250;</a></strong>
                        
						<?php 
						} elseif (get_field('links_to') == 'external') { 
							$link = get_field('external_url'); 
							$target = "_blank";
						?>
							<strong><?php the_field('alert_message'); ?>
							<a href="<?php echo $link; ?>" target="<?php echo $target; ?>"><?php the_field('link_text'); ?> &#8250;</a></strong>
						
						<?php
                        } else { ?>
							<strong><?php the_field('alert_message'); ?></strong>
							<?php
                        } ?>
				</div></aside><?php // end .alert-banner
				
			endwhile; 
		
		} else {
			// no alerts found 
		}
		
		wp_reset_postdata();
		?>
