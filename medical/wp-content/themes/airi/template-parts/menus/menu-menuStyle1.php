<?php
/**
 * Template part for Menu style 1
 *
 * @package Airi
 */
?>
<head>


	<script type="text/javascript">

		// function myFunction(){
		// 	var element=document.getElementById("masthead-sticky-wrapper");
		// 	// element.classList.add('sticky-wrapper is-sticky');
		// 	element.classList.add("sticky-wrapper" , "is-sticky");
		// 	console.log("sticky function working");


		// 	var element2=document.getElementById("masthead");
		// 	element2.setAttribute(
       	// 	"style", "width: 1304px; position: fixed; top: 0px; z-index: inherit;");
		// }
		jQuery(document).ready(function(){
			jQuery(window).scroll(function() { 

				 var scroll = jQuery(window).scrollTop();
				 if (scroll >= 50) {
					jQuery('#masthead-sticky-wrapper').addClass('sticky-wrapper is-sticky');
					jQuery('#masthead').attr("style", "position: fixed; background-color:#ffff; top: 0px; z-index: inherit;" );
					// console.log("added");
        		} 
				else {
            		jQuery('#masthead-sticky-wrapper').removeClass(' is-sticky');
					jQuery('#masthead').attr("style", "" );
					
					// console.log("removed");
        			}

				   

				});
					// console.log("testing jquery");
				// jQuery methods go here...

			});
	</script>
</head>

<div >
<header id="masthead" class="site-header">
	
	<div class="<?php echo esc_attr( airi_menu_container() ); ?>">
		<div class="row">
		<div class="site-branding col-md-4 col-sm-6 col-9">
				<?php airi_site_branding(); ?>
			</div><!-- .site-branding -->

			<div class="header-mobile-menu col-md-8 col-sm-6 col-3">
				<button class="mobile-menu-toggle" aria-controls="primary-menu">
					<span class="mobile-menu-toggle_lines"></span>
					<span class="sr-only"><?php esc_html_e( 'Toggle mobile menu', 'airi' ); ?></span>
				</button>
			</div>			

			<nav id="site-navigation" class="main-navigation col-md-8">
				<?php
				 	
				if(is_page('For Individuals')):
					wp_nav_menu( array(
								// 'theme_location' => 'menu-1',
								'menu_id'        => '4',
							) );
				elseif(is_page('Concerns')):
					wp_nav_menu( array(
						// 'theme_location' => 'menu-1',
						'menu_id'        => '4',
					) );
				elseif(is_page('Find a Provider')):
					wp_nav_menu( array(
							// 'theme_location' => 'menu-1',
						'menu_id'        => '4',
					) );
				elseif(is_page('Ask')):
					wp_nav_menu( array(
								// 'theme_location' => 'menu-1',
						'menu_id'        => '4',
					) );
				elseif(is_page('Start a Review')):
					wp_nav_menu( array(
									// 'theme_location' => 'menu-1',
						'menu_id'        => '4',
					) );
				elseif(is_page('Request Free Consult')):
					wp_nav_menu( array(
										// 'theme_location' => 'menu-1',
						'menu_id'        => '4',
					) );
					
				else:

					wp_nav_menu( array(
						'theme_location' => 'menu-1',
						'menu_id'        => 'primary-menu',
					) );

				endif;
					

				?>

				<ul class="header-search-cart">
			<li class="header-search">
				<div class="header-search-toggle">
				
				<a href="index.php/search-page/" title="Search Page">
					<i class="fa fa-search"></i>
				</a>
				</div>
			</li>
			<li class="header-cart-link">
							</li>
		</ul>

				<!-- search icon -->
				<?php  /* airi_header_cart_search(); */ ?>
			</nav><!-- #site-navigation -->
		</div>
	</div>
	<!-- <div class="header-search-form"> -->
		<!-- <a href="<?php /* echo home_url(); */?>/medical/search/" title="Search Page"></a> -->
		<!-- <a href="index.php?page_id=599" title="Search Page"></a> -->
		<!-- <a href="/medical/index.php/search-page/" title="Search Page"></a> -->
		
		<?php /*  get_search_form(); */ ?>
	<!-- </div> -->


</header><!-- #masthead -->
</div>