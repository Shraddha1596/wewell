<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Airi
 */

?>

<?php

$healthseeker = get_option('siteurl');
$healthseeker .= '/wp-content/uploads/2019/02/home_image2.jpg';
?>

<style>

	.healthseekr-img1{
		background-image: url(<?php echo $healthseeker ?>);
		background-repeat: no-repeat;
    	background-size: contain;
	}

</style>
<script>

</script>

<!doctype html>
<html <?php language_attributes();?>>
	<head>
		<meta charset="<?php bloginfo('charset');?>">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="profile" href="http://gmpg.org/xfn/11">

		<?php wp_head();?>
	</head>
	<?php
		$home = get_option('siteurl');
		$home .= '/wp-content/uploads/2019/02/home3.jpg';

		$heathseekr = get_option('siteurl');
		$heathseekr .= '/wp-content/uploads/2019/02/Healthseeker_new.jpg';

		$pricebanner = get_option('siteurl');
		$pricebanner .= '/wp-content/uploads/2019/02/plans-banner.jpg';
		// echo $url;

		
		$referral = get_option('siteurl');
		$referral .= '/wp-content/uploads/2019/02/adult-beautiful-brunette-1549280.jpg';
				
	?>

<script>
	jQuery(document).ready(function(){
			jQuery(window).scroll(function() { 

				 var scroll = jQuery(window).scrollTop();
				 if (scroll >= 50) {
					jQuery('.banner-img ').removeClass('page-hero__bg-image -loaded');
					// jQuery('#masthead').attr("style", "position: fixed; background-color:#ffff; top: 0px; z-index: inherit;" );
					// console.log("added");
        		} 
				else {
					// jQuery('.banner-img ').addClass('page-hero__bg-image -loaded');
					
            		// jQuery('#masthead-sticky-wrapper').removeClass(' is-sticky');
					// jQuery('#masthead').attr("style", "" );
					
					// console.log("removed");
        			}

				   

				});
					// console.log("testing jquery");
				// jQuery methods go here...

			});
		</script>
	<body <?php body_class();?>>
		<div id="page" class="site">
			<a class="skip-link screen-reader-text" href="#content">
				<?php esc_html_e('Skip to content', 'airi');?>
			</a>
			

			<?php if ((is_front_page() && is_home()) || (is_front_page() && !is_home())): ?>
				<!-- <div class="banner-img page-hero__bg-image -loaded animated zoomIn" style="background-color:#004d49; background-image: url(<?php echo $home ?>); background-size: 110% 110%;background-position: center center;animation: shrink 5s infinite alternate;"> -->
				
				
				<div class="banner-img">
					<div class="testing-banner page-hero__bg-image -loaded" style="background-image: url(<?php echo $home ?>);"></div>
					<?php $menu_layout = airi_menu_layout();?>
					<?php get_template_part('template-parts/menus/menu', $menu_layout['type']);?>
					
					<div class="page-hero__image-hero flex-center">
						<div class="page-hero__inner-wrapper">
							<p class="banner-head ml-5">
								Meet more clients,<br> establish your brand<br> and connect with<br> other practitioners
							</p>
							<p class="banner-head-mobile ml-5">
								Meet more clients, establish your brand and connect with other practitioners
							</p>
							<p class="banner-body ml-5">
								WeWell is the world’s most trusted  online community  for integrative  healthcare.
							</p>
							<div class="banner-btn ml-5 ">
								<a href="#signup-form" class="button mt-5">
									<span>Claim Your Free Profile</span>
								</a>
							</div>
						</div>
					</div>
				</div>
				
				<?php
				
					elseif(is_page('Search Page')):
						$menu_layout = airi_menu_layout();
						get_template_part('template-parts/menus/menu', $menu_layout['type']);
				?>
				<?php
				
				elseif(is_page('Plans & Pricing')):?>
					<div class="banner-img">
						<div class="testing-banner page-hero__bg-image -loaded" style="background-image:url(<?php echo $pricebanner ?>);"></div>
						<!-- <img class="testing-banner page-hero__bg-image -loaded" src="<?php echo $pricebanner ?>"> -->

						<?php $menu_layout = airi_menu_layout();?>
						<?php get_template_part('template-parts/menus/menu', $menu_layout['type']);?>
						<div class="page-hero__image-hero flex-center">
							<div class="page-hero__inner-wrapper">
							<p class="banner-head-plans ml-5">
							Simple, straightforward pricing
							</p>
							<p class="banner-body ml-5">
							From new grads to seasoned pros,
							 we’re here to help you grow your practice. Start for free and upgrade at any time.
							</p>
							<div class="banner-btn ml-5 ">
								<a href="/medical#signup-form" class="button mt-5">
									<span>Claim Your Free Profile</span>
								</a>
							</div>
						</div>
						</div>
					</div>


					<!-- testing banner animation -->
					<?php
				elseif(is_page('testing')):?>
					<div class="banner-img">

				    <img class="testing-banner page-hero__bg-image -loaded" src="<?php echo $pricebanner ?>">
						<!-- <div class="testing-banner page-hero__bg-image -loaded" style="background-image: url(<?php echo $pricebanner ?>);"></div> -->
						<?php $menu_layout = airi_menu_layout();?>
						<?php get_template_part('template-parts/menus/menu', $menu_layout['type']);?>

						
						
						<div class="page-hero__image-hero flex-center">
							<div class="page-hero__inner-wrapper">
							<p class="banner-head-plans ml-5">
							Simple, straightforward pricing
							</p>
							<p class="banner-body ml-5">
							From new grads to seasoned pros,
							 we’re here to help you grow your practice. Start for free and upgrade at any time.
							</p>
							<div class="banner-btn ml-5 ">
								<a href="index.php/claim-your-free-profile/" class="button mt-5">
									<span>Claim Your Free Profile</span>
								</a>
							</div>
						</div>
						</div>
					</div>
			 		<!-- testing banner animation -->


					<?php

						$one = get_option('siteurl');
						$one .= '/wp-content/uploads/2019/02/one.svg';
					?>

					<?php elseif(is_page('Referral')):?>
						<div class="banner-img">
							<div class="testing-banner page-hero__bg-image -loaded" style="background-image: url(<?php echo $referral ?>);"></div>

							<?php $menu_layout = airi_menu_layout();?>
							<?php get_template_part('template-parts/menus/menu', $menu_layout['type']);?>
							<div class="page-hero__image-hero flex-center">
								<div class="page-hero__inner-wrapper">
									<p class="banner-head ml-5">
										Invite a friend &<br> get a $25 credit	
									</p>
									<p class="banner-head-mobile ml-5">
										Invite a friend & get a $25 credit	
									</p>
									<p class="banner-body ml-5">
									Invite friends to join WeWell  - for every one who claims a profile,
									 you’ll both earn $25 in credit.
									</p>
									<div class="referral-steps">
										<span class="steps">
											<img class="steps-size" src="../../wp-content/uploads/2019/02/one.svg">Invite your friends
										</span>
										<span class="steps">
											<img class="steps-size" src="../../wp-content/uploads/2019/02/two.svg">They sign up
										</span>
										<span class="steps">
											<img class="steps-size" src="../../wp-content/uploads/2019/02/three.svg">You get rewarded
											<img class="steps-size gift" src="../../wp-content/uploads/2019/02/gift.svg">
										</span>
									</div>
								</div>
							</div>
						</div>

				<?php else: 
					
					$id=get_the_ID();
			   
				   	$p = get_page($id);
				   // echo $p->post_title;
			   		if($p->post_title=="For Individuals"):
			   	?>
				<div class="banner-img">
					<div class="testing-banner page-hero__bg-image -loaded" style="background-image: url(<?php echo $heathseekr ?>);"></div>

					<?php $menu_layout = airi_menu_layout();?>
					<?php get_template_part('template-parts/menus/menu', $menu_layout['type']);?>
					<div class="page-hero__image-hero flex-center">
					<div class="page-hero__inner-wrapper">
						<p class="banner-head1 ml-5">
						Your natural solution<br> to healthcare
						</p>
						<p class="banner-head1-mobile ml-5">
						Your natural solution to healthcare
						</p>
						<p class="banner-body1 ml-5">
						Stop wasting time on doctors that don’t get you.<br> Find answers to whatever ails you and join a 
						community of<br> people who share your health journey. WeWell is the most <br>trusted integrative 
						healthcare platform.
						</p>
						<p class="banner-body1-mobile ml-5">
						Stop wasting time on doctors that don’t get you. Find answers to whatever ails you and join a 
						community of people who share your health journey. WeWell is the most trusted integrative 
						healthcare platform.
						</p>
						<div class="row banner-btn ml-5 ">
							<a href="index.php/find-a-provider/" class="button1 mt-5 mr-5">
								<span>Find a Provider</span>
							</a>
							<a  href="index.php/Concerns/" class="button1 mt-5">
								<span>Search Concerns</span>
							</a>
						</div>
					   </div>
					</div>
					   <?php else: ?>
							<div >

							<?php $menu_layout = airi_menu_layout();?>
							<?php get_template_part('template-parts/menus/menu', $menu_layout['type']);?>
								
							</div>
							
						
					   <?php endif;?>
									<?php endif;?>
			</div>
			<?php if ((is_front_page() && is_home()) || (is_front_page() && !is_home())): ?>
				<!-- if its home page code -->
				<div class="plans">
					<div class="div1">
						<p class="pricing">
							Plans & Pricing
						</p>
					</div>
					<div class="div2 laptop" >
						<button  onclick="window.location.href='index.php/plans-pricing/'" ><i class="fa fa-play" aria-hidden="true"></i>View Plans & Pricing</button>
					</div>
					<div class="div3 ">
						<p class="desc">
							From recent grads to seasoned pros, we’re here to help you grow your practice.
							Start for free and upgrade any time.
						</p>
					</div>
					
					<div class="div2 mobile">
						<button onclick="window.location.href='index.php/plans-pricing/'"><i class="fa fa-play" aria-hidden="true"></i>View Plans & Pricing</button>
					</div>
					 
				</div>
				<?php else: ?>
					<?php 
					// $id=get_the_ID();			
					// $p = get_page($id);
					// echo $p->post_title;
					if(is_page('For Individuals')):?>
						<!-- else code -->
						<div class="healthseek">
							<div class="container">
								<div class="row">	
									<?php
									?>		
									<!-- <form class="col-sm-12 col-lg-12 col-md-12 healthseek-form" method="get" 
										<?php if($_REQUEST['query']=='' && $_REQUEST['query1']==''){ ?>
																							action="<?php get_permalink(); ?>"
																						<?php }  
																						else{ ?>  
																							action="<?php echo home_url(); ?>/index.php/ask-a-provider" 
																						<?php } ?>>	 -->
									<form class="col-sm-12 col-lg-12 col-md-12 healthseek-form" method="get" action="<?php echo home_url(); ?>/index.php/ask-a-provider">													
										<div class="row">
											<label class="col-sm-12 col-md-3 col-lg-3 healthseek-input">
												<input type="text" class="search-field" name="query" placeholder="health concern, procedure, provider name...">
					   						</label>
											<label class="col-lg-3 col-md-3 col-sm-12 healthseek-input">
												<input type="text" class="search-field" name="query1" placeholder="zip code or city">	
											</label>
											<label class="col-lg-3 col-md-3 col-sm-12 healthseek-input">
												<input type="text" class="search-field" name="query1" placeholder="insurance carrier and plan">	
					   						</label>   
											<label class="col-lg-1 col-md-3 col-sm-12 healthseek-search">
												<button class="lappy"><i class="fa fa-search"></i></button>
												<button class="phone">Search</i></button>
					   						</label>
										</div>
									</form>
									<?php
									if ( isset( $_REQUEST['query'] ) ) {
										// run search query
										query_posts( array(
										   's' => $_REQUEST[ 'query' ],
										   'post_type' => $_REQUEST[ 'post_type' ],
										   'paged' => $paged
										   )
										);
										if($_REQUEST['query']=='' && $_REQUEST['query1']==''){
											echo"
												<div class='search-result-blank'>
														 <p>
														 Please type something into the search box
														 </p>		
												 </div>
											";
										}
									}
									?>


									<!-- <div class="col-lg-2 col-sm-12 block">
										<p class="tagtitle">Soothe your</p>
										<p class="tagbody">Cold + Flu</p>
									</div>
									<div class="col-lg-2 col-sm-12  block">
										<p class="tagtitle">Improve your</p>
										<p class="tagbody">Sleep</p>
									</div>
									<div class="col-lg-2 col-sm-12  block">
										<p class="tagtitle">Reduce your</p>
										<p class="tagbody">Stress</p>
									</div>
									<div class="col-lg-2 col-sm-12  block">
										<p class="tagtitle">Ease your</p>
										<p class="tagbody">Pain + Recover</p>
									</div>
									<div class="col-lg-2 col-sm-12 block">
										<p class="tagtitle">Support your</p>
										<p class="tagbody">Digestion</p>
									</div> -->
								</div>
							</div>
						</div>
					<?php else: ?>
				<?php endif;?>
			<?php endif;?>
			<div id="content" class="site-content">

			<?php
if (!is_page_template('page-templates/template_page-builder.php')) {
    echo '<div class="container">';
    echo '<div class="row">';
}
?>