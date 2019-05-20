<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Airi
 */

get_header();

$layout = airi_blog_layout();
?>

<script type="text/javascript">

jQuery(document).ready(function(){
	new WOW().init();
	console.log("animations");
});
	
</script>



	<div id="primary" class="content-area <?php echo esc_attr( $layout['type'] ); ?> <?php echo esc_attr( $layout['cols'] ); ?>">
		<main id="main" class="site-main">

			<section class="row margin1 d-flex animated wow fadeInUp slower">
				<div class="section-data1 order2 col-lg-5 col-md-5 col-sm-12 col-md-offset-right-1 ">
					<h3 class="client-data ">Get more clients</h3>
					<p>
						Starting or finding new clients isn’t easy, so we built a platform 
						to help you easily manage your online reputations, connect with clients,
						get new client referrals and join a community of exceptional practitioners and health seekers.
					</p>
					<!-- <a class="link" href="#">
						Find a client
						<svg class="cta-base__arrow-icon" viewBox="0 0 6 9" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
							<g stroke="none" stroke-width="1" fill-rule="evenodd">
								<g transform="translate(-47.000000, -8.000000)" fill-rule="nonzero">
									<g transform="translate(45.000000, 8.000000)">
										<polygon points="4.80702598 4.10441657 2.02983763 1.44433857 3.41327036 0 7.63608201 4.04474128 3.44310799 8.41452745 2 7.02981112"></polygon>
									</g>
								</g>
							</g>
						</svg>
					</a> -->
				</div>
				<?php
					$site = get_option( 'siteurl');
        			$site.='/wp-content/uploads/2019/02/home_image2.jpg';  
        		// echo $url;     
        			?>
				<div class="section-data2 order1 col-lg-6 col-md-6  col-sm-12">
					<img class="images" src="<?php echo $site ?>">
				</div>
			</section>


			<section class="row  margin1  d-flex animated wow fadeInUp  slower">
			<?php
					$site = get_option( 'siteurl');
        			$site.='/wp-content/uploads/2019/02/home image3.jpg';  
        		// echo $url;     
        			?>
				<div class="section-data2 order1 col-lg-6  col-md-6  col-sm-12 ">
					<img class="images" src="<?php echo $site ?>">
				</div>
				<div class="section-data1 order2 col-lg-5 col-md-5 col-sm-12 col-md-offset-1" >
					<h3 class="client-data">Connect with people who are searching for your services</h3>
					<p>
						Meet clients that are actively
						searching for natural and holistic 
						integrative healthcare providers
						and solutions.
					</p>
					<a class="link"  href="index.php/About/">
						Meet Clients
						<svg class="cta-base__arrow-icon" viewBox="0 0 6 9" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
							<g stroke="none" stroke-width="1" fill-rule="evenodd">
								<g transform="translate(-47.000000, -8.000000)" fill-rule="nonzero">
									<g transform="translate(45.000000, 8.000000)">
										<polygon points="4.80702598 4.10441657 2.02983763 1.44433857 3.41327036 0 7.63608201 4.04474128 3.44310799 8.41452745 2 7.02981112"></polygon>
									</g>
								</g>
							</g>
						</svg>
					</a>
				</div>
				
			</section>

			<section class="row margin1 d-flex animated wow fadeInUp  slower">
				<div class="section-data1 order2 col-md-5 col-lg-5  col-sm-12 col-md-offset-right-1 " >
					<h3 class="client-data">Profiles that show personality</h3>
					<p>
					Shine beyond your title. Establish your brand and build relationships with clients by sharing your expertise, practice style, 
					personality and philosophy.
					</p>
					<a class="link"  href="index.php/About/">
						Personalize your profile
						<svg class="cta-base__arrow-icon" viewBox="0 0 6 9" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
							<g stroke="none" stroke-width="1" fill-rule="evenodd">
								<g transform="translate(-47.000000, -8.000000)" fill-rule="nonzero">
									<g transform="translate(45.000000, 8.000000)">
										<polygon points="4.80702598 4.10441657 2.02983763 1.44433857 3.41327036 0 7.63608201 4.04474128 3.44310799 8.41452745 2 7.02981112"></polygon>
									</g>
								</g>
							</g>
						</svg>
					</a>
				</div>
				<?php
					$site = get_option( 'siteurl');
        			$site.='/wp-content/uploads/2019/02/phone3.png';  
        		// echo $url;     
        			?>
				<div class="section-data2 order1 col-lg-6 col-lg-6 col-md-6 col-sm-12">
					<img  src="<?php echo $site ?>">
				</div>
			</section>

			<section class="row margin2 d-flex animated wow fadeInUp slower">
			<?php
					$site = get_option( 'siteurl');
        			$site.='/wp-content/uploads/2019/02/group-job-interview_4460x4460.jpg';  
        		// echo $url;     
        			?>
				<div class="section-data2 order1 col-lg-6  col-md-6  col-sm-12">
					<img class="images" src="<?php echo $site ?>">
				</div>
				<div class="section-data1 order2 col-lg-5 col-md-5 col-sm-12 col-md-offset-1" >
					<h3 class="client-data">Get co-referrals</h3>
					<p>
					Connect with other  top practitioners for co-referrals and gain knowledge outside of your scope. 
					</p>
					<a class="link"  href="index.php/About/">
						Co-referrals
						<svg class="cta-base__arrow-icon" viewBox="0 0 6 9" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
							<g stroke="none" stroke-width="1" fill-rule="evenodd">
								<g transform="translate(-47.000000, -8.000000)" fill-rule="nonzero">
									<g transform="translate(45.000000, 8.000000)">
										<polygon points="4.80702598 4.10441657 2.02983763 1.44433857 3.41327036 0 7.63608201 4.04474128 3.44310799 8.41452745 2 7.02981112"></polygon>
									</g>
								</g>
							</g>
						</svg>
					</a>
					<!-- <div class="free-btn">
						<a href="#" class="profile-btn mt-5">
							<span>Claim Your Free Profile</span>
						</a>
					</div> -->
				</div>
				
			</section>
			<section class=" free-btn-sec text-center animated wow fadeInUp slower">
				<div class="free-btn">
					<a href="/medical#signup-form" class="profile-btn mt-5">
						<span>Claim Your Free Profile</span>
					</a>
				</div>
			</section>

			<!-- <section>
				<h3 class="size"><span class="client-data">Why Claim</span> ?</h3>
				<div class="container">
					<div class="row">
						<div class="col-lg-3 col-md-3 col-sm-12 claim bg1">
							<h4 class="text">Every care type</h4>
							<p class="font-weight-bold">
								Connect with people who want to be your patient
							</p>
							<p class="font mt-2">
								Meet patients that are actively
								searching for natural and holistic 
								integrative healthcare providers
								and solutions. 
							</p>	
						</div>
						<div class="col-lg-3 col-md-3 col-sm-12 claim bg2">
							<h4 class="text">Virtual Appointments</h4>
							<p class="font-weight-bold">
								Establish your online brand
							</p>
							<p class="font mt-2">
								WeWell solutions help you put your best face forward
							 	and reach your practice goals. Find out how to boost 
							 	your local visibility in your targeted specialties and 
							 	build relationships with patients by sharing your expertise.
							</p>	
						</div>
						<div class="col-lg-3 col-md-3 col-sm-12 claim bg3">
							<h4 class="text">Personal Concierge</h4>
							<p class="font-weight-bold">
								Get new patient referrals
							</p>
							<p class="font mt-2">
								Connect with other  highly specialized practitioners for co-referrals
							 	and gain knowledge outside of your scope. 
							</p>
						</div>
					</div>
				</div>
			</section> -->


			

		<section>
		<?php
		if ( have_posts() ) :

			if ( is_home() && ! is_front_page() ) :
				?>
				<header>
					<h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
				</header>
				<?php
			endif;
			?>
			<div class="blog-loop" <?php echo airi_masonry_data(); ?>>
				<div class="row">
				<div class="grid-sizer"></div>

				<?php
				/* Start the Loop */
				while ( have_posts() ) :
					the_post();

					/*
					 * Include the Post-Type-specific template for the content.
					 * If you want to override this in a child theme, then include a file
					 * called content-___.php (where ___ is the Post Type name) and that will be used instead.
					 */
					get_template_part( 'template-parts/content', get_post_type() );

				endwhile;
				?>
				</div>
			</div>
			<?php
			the_posts_navigation();

		else :

			get_template_part( 'template-parts/content', 'none' );

		endif;
		?>
		</section>
		</main><!-- #main -->
	</div><!-- #primary -->
		

<?php
if ( $layout['sidebar'] ) {
	get_sidebar();
}
get_footer();
