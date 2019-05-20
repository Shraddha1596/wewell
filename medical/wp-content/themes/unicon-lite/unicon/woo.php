<?php
	/** Woocommerce Hooks **/
	if( class_exists('Woocommerce') ) {
		add_action('woocommerce_before_main_content', 'unicon_lite_woo_start_div', 9);
		if( !function_exists('unicon_lite_woo_start_div') ) {
			function unicon_lite_woo_start_div() {
				?>
				<div class="container-wrap clearfix">
					<div class="inner-container clearfix">
				<?php
			}
		}

		add_action('woocommerce_sidebar', 'unicon_lite_woo_end_div', 11);
		if( !function_exists('unicon_lite_woo_end_div') ) {
			function unicon_lite_woo_end_div() {
				?>
					</div>
				</div>
				<?php
			}
		}

	
		/**
		* Woo Commerce Number of row filter Function
		**/

		add_filter('loop_shop_columns', 'unicon_lite_loop_columns');
		if (!function_exists('unicon_lite_loop_columns')) {
		   function unicon_lite_loop_columns() {
		       $xr = 3;
		       return $xr;
		   }
		}

		add_action( 'body_class', 'scrollme_woo_body_class');
		if (!function_exists('scrollme_woo_body_class')) {
		   function scrollme_woo_body_class( $class ) {
		          $class[] = 'columns-'.unicon_lite_loop_columns();
		          return $class;
		   }
		}
	}