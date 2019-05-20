<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Airi
 */

?>

	</div><!-- #content -->

	<script>

	jQuery(document).ready(function(){

		jQuery("[name='wpbiker-forms-select-4']").multiselect({

		includeSelectAllOption: true

		});
		console.log("testing jquery");

	});
	</script>

	<?php
		if (!is_page_template('page-templates/template_page-builder.php')) {
    		echo '</div>';
    		echo '</div>';
		}
	?>
	<?php if ((is_front_page() && is_home()) || (is_front_page() && !is_home())): ?>

		<section class="-bg-color-salt-gray padding-stat">
			<div class="container">
				<div class="leads-head">Attract more motivated leads</div>
				<div class="row row-data animated wow fadeInUp slower">
					<div class="col-lg-4 col-sm-12 col-md-4">

					    <?php
								$clock = get_option('siteurl');
								$clock .= '/wp-content/uploads/2019/02/clock-back.svg';
							
							?>

						<div class="leads-motivate">
							<img class="icons" src="<?php echo $clock ?>" >
						</div>
						<div class="leads-data leads-padding">
							Save hours spent attracting new clients.
							92% people research their symptoms online 
							as a first decision making point.
							<!-- visit RealSelf each month -->
						</div>
					</div>
					<div class="col-lg-4 col-sm-12 col-md-4">

						<?php
							$lock = get_option('siteurl');
							$lock .= '/wp-content/uploads/2019/02/good.svg';
							
						?>
						<div class="leads-motivate">
							<img class="icons" src="<?php echo $lock ?>" >
							<!-- 5 million -->
						</div>
						<div  class="leads-data leads-padding">

							94% of people read online reviews before booking an appointment.
							88% of people trust online reviews as much as advice from friends and family.
							<!-- visitors sent to provider websites from RealSelf each year -->
						</div>
					</div>
					<div class="col-lg-4 col-sm-12 col-md-4">
					<?php
							$sync = get_option('siteurl');
							$sync .= '/wp-content/uploads/2019/02/coin.svg';
							
						?>
						<div class="leads-motivate ">
							<img class="icons" src="<?php echo $sync ?>" >
							<!-- 500,000 -->
						</div>
						<div class="leads-data" >
						Clients spend an average of 31% more on services that have excellent reviews.
						</div>
					</div>
				</div>
			</div>
		</section>

		<section class="leads-doctor margin">
			<div class="container">
				<div class="leads text-center">What our community is saying</div>

				<div class="carousel-slider">
    				<div class="carousel-slider-inner">
        				<input class="carousel-slider-open" type="radio" id="carousel-slider-1" name="carousel-slider" aria-hidden="true" hidden="" checked="checked">
        				<div class="carousel-slider-item">
							
							<?php
								$communtiy = get_option('siteurl');
								$communtiy .= '/wp-content/uploads/2019/02/doc3_2.jpg';
							
							?>
							<div class="row d-flex justify-content-center align-items-center">
								<div class="d-flex justify-content-center col-sm-12 col-lg-4 col-md-5">
								<img style="height:400px" class="carousel-img" src="<?php echo $communtiy ?>">
								</div>
								<div class="col-sm-12 col-lg-7 col-md-6 community">
									<p class="community-body">
										“ When my daughter was going through some chronic issues that my GP 
										couldn’t address, WeWell matched me with a super knowledgeable practitioner
										 and I finally received the help, support and understanding my daughter and 
										 I needed. ”
									</p>
									<div class="mt-5">Robin C.</div>
									<div>San Francisco, California</div>
								</div>
							</div>
						</div>
						

        				<input class="carousel-slider-open" type="radio" id="carousel-slider-2" name="carousel-slider" aria-hidden="true" hidden="">
        				<div class="carousel-slider-item">
							<?php
								$communtiy = get_option('siteurl');
								$communtiy .= '/wp-content/uploads/2019/02/doc1_2.jpg';
							
							?>
							<div class="row d-flex justify-content-center align-items-center">
								<div class="d-flex justify-content-center col-sm-12 col-lg-4 col-md-5">
								<img style="height:400px" class="carousel-img" src="<?php echo $communtiy ?>">
								</div>
								<div class="col-sm-12 col-lg-7 col-md-6 community">
									<p class="community-body">
										“ WeWell is the platform that we have been waiting for.
										 I recommend it to all of my patients and colleagues. 
										 It saved me time and helped me understand my patients
										  better so I can really focus on my patients and practice.”
									</p>
									<div class="mt-5">David A.</div>
									<div>Naturopath, BSc.(Hons), ND</div>
								</div>
							</div>
						</div>
						

        				<input class="carousel-slider-open" type="radio" id="carousel-slider-3" name="carousel-slider" aria-hidden="true" hidden="">
        				<div class="carousel-slider-item">
							<?php
								$communtiy = get_option('siteurl');
								$communtiy .= '/wp-content/uploads/2019/02/doc2_2.jpg';
							
							?>
							<div class="row d-flex justify-content-center align-items-center">
								<div class="d-flex justify-content-center col-sm-12 col-lg-4 col-md-5">
								<img style="height:400px" class="carousel-img" src="<?php echo $communtiy ?>">
								</div>
								<div class="col-sm-12 col-lg-7 col-md-6 community">
									<p class="community-body">
										“ I get clients who travel to my practice from fairly 
										far away for specific treatments because they found me
										 on WeWell. It’s easy and natural for both me and my 
										 clients to communicate and understand and has totally
										  changed how I connect with new clients. It’s also a 
										  great community of professionals to expand my knowledge
										   and practice with. I connected with some amazing practitioners
										 and doctors that I would never get the opportunity meet.”
									</p>
									<div class="mt-5">Linda R.</div>
									<div>Psychotherapist & Lifecoach, B.A., RPC, CCPCPR</div>
								</div>
							</div>
						</div>

						<input class="carousel-slider-open" type="radio" id="carousel-slider-4" name="carousel-slider" aria-hidden="true" hidden="">
        				<div class="carousel-slider-item">
							<?php
								$communtiy = get_option('siteurl');
								$communtiy .= '/wp-content/uploads/2019/02/doc4_2.jpg';
							
							?>
							<div class="row d-flex justify-content-center align-items-center">
								<div class="d-flex justify-content-center col-sm-12 col-lg-4 col-md-5">
								<img style="height:400px" class="carousel-img" src="<?php echo $communtiy ?>">
								</div>
								<div class="col-sm-12 col-lg-7 col-md-6 community">
									<p class="community-body">
										“ Thank you for providing a modern and supportive space to connect 
										with others going through the same health journey as me. Your tribe
										 forum is amazing. It helped me get through some tough times. I love
										  how I can get to know my doctors and ask questions before booking 
										  an appointment. Within minutes, I was chatting with a nutritionist 
										  that gave me informed, expert advice and I really felt heard and 
										  cared for. WeWell is a ray of hope in healthcare.”
									</p>
									<div class="mt-5">Kylie J</div>
									<div>Vancouver, BC</div>
								</div>
							</div>
						</div>

						<!-- <label for="carousel-slider-1" class="carousel-slider-control prev control-1">‹</label>
						<label for="carousel-slider-1" class="carousel-slider-control next control-1">›</label> -->
						
						<label for="carousel-slider-4" class="carousel-slider-control prev control-3">‹</label>
						<label for="carousel-slider-3" class="carousel-slider-control prev control-2">‹</label>
						<label for="carousel-slider-2" class="carousel-slider-control prev control-1">‹</label>
						<label for="carousel-slider-1" class="carousel-slider-control prev control-4">‹</label>


						<label for="carousel-slider-4" class="carousel-slider-control next control-1">›</label>
						<label for="carousel-slider-3" class="carousel-slider-control next control-4">›</label>
						<label for="carousel-slider-2" class="carousel-slider-control next control-3">›</label>
						<label for="carousel-slider-1" class="carousel-slider-control next control-2">›</label>
						
        				<!-- <label for="carousel-slider-3" class="carousel-slider-control prev control-1">‹</label>
        				<label for="carousel-slider-2" class="carousel-slider-control next control-1">›</label>
						<label for="carousel-slider-1" class="carousel-slider-control prev control-2">‹</label>
						
        				<label for="carousel-slider-3" class="carousel-slider-control next control-2">›</label>
        				<label for="carousel-slider-2" class="carousel-slider-control prev control-3">‹</label>
						<label for="carousel-slider-1" class="carousel-slider-control next control-3">›</label> -->
						

        				<!-- <ol class="carousel-slider-indicators">
            				<li>
                				<label for="carousel-slider-1" class="carousel-slider-bullet">•</label>
            				</li>
            				<li>
                				<label for="carousel-slider-2" class="carousel-slider-bullet">•</label>
	            			</li>
    	        			<li>
        	        			<label for="carousel-slider-3" class="carousel-slider-bullet">•</label>
							</li>
							<li>
        	        			<label for="carousel-slider-4" class="carousel-slider-bullet">•</label>
				            </li>
			    	    </ol> -->
    				</div>
				</div>

			</div>
		</section>
		<!-- <div class="mb-5">

		</div> -->
		<?php
			$doctor1 = get_option('siteurl');
			$doctor1 .= '/wp-content/uploads/2019/02/doctor1.jpg';

		?>
		<?php
			$doctor2 = get_option('siteurl');
			$doctor2 .= '/wp-content/uploads/2019/02/doctor2.jpg';

		?>
		<section class="-bg-color-salt-gray">
			<div class="container">
				<div class="leads leads-heading">
						<p class="leads-p" >
							Over 10,000 integrative healthcare providers on WeWell
						</p>
				</div>
				
				<div class="row wow animated fadeInUp  slower">
					<div class="col-lg-12 col-sm-12 col-md-12 text-center leads-doctor">
					<img class="doctor-image" src="<?php echo $doctor1 ?>">
						<div class="leads">
							<div class="text-center">
							Lorie Chan, ND
							</div>
							<div  class="text-center">
								Naturopathic Doctor
							</div>
						</div>
						<div class="leads-data text-center">
							“ WeWell makes it intuitive and easy for me to establish my 
							reputation and connect with my patients beyond the clinic setting. ”

						</div>

					</div>
					<div class="col-lg-12 col-sm-12 col-md-12 text-center leads-doctor">
					<img class="doctor-image" src="<?php echo $doctor2 ?>">
						<div class="leads">
							<div class="text-center">
							Stephen Young, TCMD, R.Ac
							</div>
							<div class="text-center">
							BM (China), MPH
							</div>
						</div>


						<div class="leads-data text-center">
							“  WeWell continues to be the most reliable source of referrals. ”
						</div>

					</div>
				</div>
			</div>
		</section>
		<!-- <section class="container mt-5 mb-4 lede">
			<h3 class="client-data text-center mb-5">
			Over 10,000 natural healthcare providers on WeWell
			</h3>
			<div class="row lede">

				<div class="section-data1 col-lg-6 col-md-6 col-sm-12" >
					<h3 class="client-data">Naturopathic Doctor</h3>
					<p>
					“ I get patients who travel to my practice from from fairly far away for specific
						treatments because they found my on RealSelf ”
					</p>
				</div>
				<?php
					$site = get_option('siteurl');
					$site .= '/wp-content/uploads/2019/02/doctor1.jpg';
					// echo $url;
				?>
				<div class="section-data2 col-lg-6 col-md-6  col-sm-12">
					<img src="<?php /* echo $site */ ?>">
				</div>
			</div>

		</section>
		<section class="container mt-5 mb-4">
			<div class="row">
				<?php
					$site = get_option('siteurl');
					$site .= '/wp-content/uploads/2019/02/doctor2.jpg';
					// echo $url;
				?>
				<div class="section-data2 col-lg-6 col-md-6  col-sm-12">
					<img src="<?php /* echo $site */ ?>">
				</div>
				<div class="section-data1 col-lg-6 col-md-6 col-sm-12" >
					<h3 class="client-data">Chinese Medicine Doctor</h3>
					<p>
					“ RealSelf continues to be our most reliable sources of referrals ”
					</p>
				</div>

			</div>
		</section> -->

		<section class="link_list">
			<h2 class="link-list__headline"><span>We welcome providers in these areas</span>:</h2>
			<div class="row wow animated fadeInUp  slower">
				<ul class="col-sm-12 col-md-12 col-lg-6 link-list__wrapper js-scroll-target -active">


            		<li class="link-list__item">


						<a  href="index.php/About/" class="cta-base link-list__item-anchor">
    						<span class="cta-base__text-wrapper">
							Integrative Medicine

    						</span>
						</a>

            		</li>



            		<li class="link-list__item">


						<a  href="index.php/About/" class="cta-base link-list__item-anchor">
    						<span class="cta-base__text-wrapper">
								Naturopathy

    						</span>

						</a>

            		</li>



            		<li class="link-list__item">


						<a  href="index.php/About/" class="cta-base link-list__item-anchor">
    						<span class="cta-base__text-wrapper">
								Chinese Medicine & Acupuncture

    						</span>

						</a>

            		</li>
				

            		<li class="link-list__item">


						<a  href="index.php/About/" class="cta-base link-list__item-anchor">
    						<span class="cta-base__text-wrapper">
								Midwives & Doulas

    						</span>
						</a>

            		</li>

				</ul>
				
				<ul class="col-sm-12 col-md-12 col-lg-6 link-list__wrapper js-scroll-target -active">

            		<li class="link-list__item">


						<a  href="index.php/About/" class="cta-base link-list__item-anchor">
    						<span class="cta-base__text-wrapper">
								Nutrition

    						</span>
						</a>

					</li>
					
					<li class="link-list__item">


						<a  href="index.php/About/" class="cta-base link-list__item-anchor">
    						<span class="cta-base__text-wrapper">
								Mental Wellness

    						</span>
						</a>

					</li>
			
					<li class="link-list__item">

						<a  href="index.php/About/" class="cta-base link-list__item-anchor">
    						<span class="cta-base__text-wrapper">
								Physiotherapist

    						</span>

						</a>

					</li>
			
					<li class="link-list__item">


						<a  href="index.php/About/" class="cta-base link-list__item-anchor">
    						<span class="cta-base__text-wrapper">
								Wellness & Prevention

    						</span>

						</a>

            		</li>


				</ul>
				
				<div class="link-list__cta-wrapper">

					<a  href="index.php/About/" class="cta-base -btn-arrow">
    					<span class="cta-base__text-wrapper">
            				See all areas

                			<svg class="cta-base__arrow-icon" viewBox="0 0 6 9" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
    							<g stroke="none" stroke-width="1" fill-rule="evenodd">
        							<g transform="translate(-47.000000, -8.000000)" fill-rule="nonzero">
            							<g transform="translate(45.000000, 8.000000)">
                							<polygon points="4.80702598 4.10441657 2.02983763 1.44433857 3.41327036 0 7.63608201 4.04474128 3.44310799 8.41452745 2 7.02981112"></polygon>
            							</g>
        							</g>
    							</g>
							</svg>

    					</span>

					</a>
				</div>
			</div>
		</section>
		<section class="container margin"  id="signup-form">
			<div class="form-head">
				<h3 class="form-heading-data text-center mb-5">
					<span class="form-head">Ready to join WeWell</span>?<br> 
					<span class="form-head wow animated fadeInUp  slower">Let's get started</span>
				</h3>
			</div>
			<div class="row wow animated fadeInUp  slower">
				<div class=" col-lg-2 col-md-2 d-flex hide-image align-items-center">

					<?php
					$people1 = get_option('siteurl');
					$people1 .= '/wp-content/uploads/2019/02/woman-01.png';
					// echo $url;
					?>
					<img src="<?php echo $people1 ?>" style="background-repeat:no-repeat; background-size:contain">
				</div>
				<div class="col-sm-12 col-lg-8 col-md-8">
					<?php
						echo do_shortcode(
    						'[FC-Form id=1]');
					?>
				</div>
				<div class=" col-lg-2 col-md-2 d-flex align-items-center hide-image ">
					<?php
						$people2 = get_option('siteurl');
						$people2 .= '/wp-content/uploads/2019/02/People-04.png';
						// echo $url;
					?>
					<img src="<?php echo $people2 ?>" style="background-repeat:no-repeat; background-size:contain">

				</div>
			</div>
		</section>

		<section class="maven-signup1">
			<div class="container">
				<div class="row">
  					<div class="col-lg-2 col-sm-12 col-md-2"></div>
  					<div class="col-lg-8 col-sm-12 col-md-8 text-center">
    					<div class="content">
      						<p>
								Support for everyone, from the top care providers, when
         						you need it most.
      						</p>
    					</div>
  					</div>
 					<div class="col-lg-2 col-sm-12 col-md-2"></div>
				</div>
			</div>
		</section>

		<?php
			$premium = get_option('siteurl');
			$premium .= '/wp-content/uploads/2019/02/adult-beautiful-brunette-1549280.jpg';

		?>
		<section class="banner-img premium page-hero__bg-image -loaded" style="background-image: url(<?php echo $premium ?>);">
			<div class="flex-center ">
				<div class="wow animated fadeInUp  slower">
				<p class="premium-head ml-5 ">
	
					Invite a friend &<br> get a $25 credit


				</p>
				<p class="premium-body ml-5 ">
					Invite friends to join WeWell - for every one who claims a profile, you’ll both earn $25 in credit.
				</p>
				<div class="premium-btn ml-5 ">
					<a href="index.php/referral/" class="button mt-5">
						<span>Invite a friend</span>
					</a>
				</div>
						</div>
			</div>
		</section>

		<?php else: ?>
	<?php endif; ?>


	<?php get_sidebar('footer');?>

				<?php
					$icon = get_option('siteurl');
					$icon .= '/wp-content/uploads/2019/02/saje-sprites.png';
				?>
	<section class="helpbar">
		<div class="container">
			<div class="row text-center">

				<div class="col-lg-3 col-sm-12 col-md-6 help-data">
					<div>
						<span class="sms-img" ><span>
					</div>
					<div>
					1-800-123-WELL
					</div>
				</div>
				<div class="col-lg-3 col-sm-12 col-md-6 help-data">
				<div>
				<span class="email-img" ><span>
					</div>
					<div>
					HELLO@WEWELL.COM
				</div>
				</div>
				<div class="col-lg-3 col-sm-12 col-md-6 help-data">
				<div>
				<span class="phone-img" ><span>
					</div>
					<div>
					1-800-123-WELL
				</div>
				</div>
				<div class="col-lg-3 col-sm-12 col-md-6 help">
					<div>
					<span class="chat-img" ><span>
					</div>
					<div>
					LIVE CHAT
				</div>
				</div>
			</div>
		</div>
	</section>
	<footer id="colophon" class="back-color site-footer pb-5 pt-5">
		<div class="container">

			<p class="mb-5 text-center">
					<a href="https://wewell.typeform.com/to/ytkaLk" class="foot_body__links">
						Share WeWell.com feedback
						<i class="fa fa-comment Iperceptions--icon Icon"></i>
						<!-- <svg style="fill:#fff" class="Iperceptions--icon Icon">

						</svg> -->
					</a>
			</p>

			<div class="row">
				<div class="col-lg-3 col-sm-12 col-md-6 bottom_link">
					<p class="foot-head">
						Company
					</p>
					<div class="row">
						<div class="col-sm-12 col-md-12 col-lg-12">
							<a href="index.php/About" class="foot_body__links">
								About
							</a>
						</div>
						<div class="col-sm-12 col-md-12 col-lg-12">
							<a href="index.php/ask-a-provider" class="foot_body__links">
								Careers
							</a>
						</div>
						<div class="col-sm-12 col-md-12 col-lg-12">
							<a href="index.php/ask-a-provider" class="foot_body__links">
								Contact
							</a>
						</div>
						<div class="col-sm-12 col-md-12 col-lg-12">
							<a  href="index.php/Ask" class="foot_body__links">
								Strategic Advisory Council
							</a>
						</div>
						<div class="col-sm-12 col-md-12 col-lg-12">
							<a  href="index.php/Start" class="foot_body__links">
								Medical Reviewers
							</a>
						</div>
						<div class="col-sm-12 col-md-12 col-lg-12">
							<a  href="index.php/ask-a-provider" class="foot_body__links">
								Blog
							</a>
						</div>
						
					</div>
				</div>
				<div class="col-lg-3 col-sm-12 col-md-6 bottom_link">
					<p class="foot-head">
						What we offer
					</p>
					<div class="row">
						<div class="col-sm-12 col-md-12 col-lg-12">
							<a  href="index.php/Concerns" class="foot_body__links">
								Concerns
							</a>
						</div>
						<div class="col-sm-12 col-md-12 col-lg-12">
							<a  href="index.php/find-a-provider" class="foot_body__links">
								Find a Provider
							</a>
						</div>
						<div class="col-sm-12 col-md-12 col-lg-12">
							<a  href="index.php/ask-a-provider" class="foot_body__links">
								Ask
							</a>
						</div>
						
						<div class="col-sm-12 col-md-12 col-lg-12">
							<a  href="index.php/start" class="foot_body__links">
								Start a Review
							</a>
						</div>
						<div class="col-sm-12 col-md-12 col-lg-12">
							<a  href="index.php/request-free-consult" class="foot_body__links">
								Request free consult
							</a>
						</div>
						
					</div>
				</div>
				<div class="col-lg-3 col-sm-12 col-md-6 bottom_link">
					<p class="foot-head">
					For Practitioners
					</p>
					<div class="row">
						<div class="col-sm-12 col-md-12 col-lg-12">
							<a href="/medical#signup-form" class="foot_body__links">
								Claim your profile
							</a>
						</div>
						<div class="col-sm-12 col-md-12 col-lg-12">
							<a href="index.php/start" class="foot_body__links">
								Advertise
							</a>
						</div>
						<div class="col-sm-12 col-md-12 col-lg-12">
							<a href="index.php/ask-a-provider" class="foot_body__links">
								Insights Center
							</a>
						</div>
						<div class="col-sm-12 col-md-12 col-lg-12">
							<a href="index.php/About" class="foot_body__links">
								WeWell Top Contributors
							</a>
						</div>
						<!-- <div class="col-sm-12 col-md-12 col-lg-12">
							<a href="#" class="foot_body__links">
								WeWell Fellowship
							</a>
						</div> -->
						<div class="col-sm-12 col-md-12 col-lg-12">
							<a href="index.php/About" class="foot_body__links">
								Industry Partnerships
							</a>
						</div>
						
					</div>
				</div>
				<div class="col-lg-3 col-sm-12 col-md-6 bottom_link">
					<p class="foot-head">
						my account
					</p>
					<div class="row">
						<div class="col-sm-12 col-md-12 col-lg-12">
							<a href="/medical#signup-form" class="foot_body__links">
								Join Now
							</a>
						</div>
						<div class="col-sm-12 col-md-12 col-lg-12">
							<a href="index.php/referral" class="foot_body__links">
								Sign In
							</a>
						</div>
						<div class="col-sm-12 col-md-12 col-lg-12">
							<a href="index.php/why-wewell" class="foot_body__links">
								Help
							</a>
						</div>
						
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-12 col-md-12 col sm-12 text-center footer-social-margin">
					<div class="row footer-social">
						<div class="col-sm-12 col-md-12 col-lg-12 text-center">
							<ul class="footer__social-list">
								<li class="footer__social-item">
									<a href="#" class="footer__social-link">
										<i class="fa fa-facebook  footer__social-logo footer__social-logo--facebook" aria-hidden="true"></i>
									</a>
								</li>
								<li class="footer__social-item">
									<a href="#" class="footer__social-link">
										<i class="fa fa-google-plus  footer__social-logo footer__social-logo--google-plus" aria-hidden="true"></i>
									</a>
								</li>
								<li class="footer__social-item">
									<a href="#" class="footer__social-link">
										<i class="fa fa-instagram footer__social-logo footer__social-logo--instagram" aria-hidden="true"></i>
									</a>
								</li>
								<li class="footer__social-item">
									<a href="#" class="footer__social-link">
										<i class="fa fa-twitter footer__social-logo footer__social-logo--twitter" aria-hidden="true"></i>
									</a>
								</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-12 col-md-12 col sm-12 text-center footer-copyright-margin">
					<p class="footer-copyright">
								WeWell 2018, All rights reserved
					</p>
				</div>
			</div>
			

			<!-- <div class="row mt-5 mb-3">
				<div class="col-lg-3 col-md-6 col-sm-12 footer-about">
					<p>Company</p>
					<div class="row">
						<div class="col-sm-12 col-md-12 col-lg-12">
							<a href="#" class="footer__links-link">
							Careers
							</a>
						</div>
						
					</div>
					<div class="row">
						<div class="col-sm-12 col-md-12 col-lg-12">
						<a href="#" class="footer__links-link">
						Terms of Service
								</a>
						</div>
					</div>
					<div class="row">
						<div class="col-sm-12 col-md-6 col-lg-12">
						<a href="#" class="footer__links-link">
						Privacy Notice
								</a>
						</div>
						
					</div>
					<div class="row">
						<div class="col-sm-12 col-md-12 col-lg-12">
						<a href="#" class="footer__links-link">
						Site Map
								</a>
						</div>
						
					</div>

				</div>
				<div class="col-lg-3 col-md-6 col-sm-12">
					<p class="footer_social_head">Social Media</p>
					<div class="row">
						<div class="col-sm-12 col-md-12 col-lg-12">
							<ul class="footer__social-list ">
								<li class="footer__social-item">
									<a href="#" class="footer__social-link">
										<i class="fa fa-facebook footer__social-logo footer__social-logo--facebook" aria-hidden="true"></i>
									</a>
								</li>
								<li class="footer__social-item">
									<a href="#" class="footer__social-link">
										<i class="fa fa-google-plus footer__social-logo footer__social-logo--google-plus" aria-hidden="true"></i>
									</a>
								</li>
								<li class="footer__social-item">
									<a href="#" class="footer__social-link">
										<i class="fa fa-instagram footer__social-logo footer__social-logo--instagram" aria-hidden="true"></i>
									</a>
								</li>
								<li class="footer__social-item">
									<a href="#" class="footer__social-link">
										<i class="fa fa-twitter footer__social-logo footer__social-logo--twitter" aria-hidden="true"></i>
									</a>
								</li>
							</ul>
						</div>
					</div>
				</div>
				<div class="col-lg-3 col-md-6 col-sm-12 footer-about">
					<p>About Us</p>
					<div class="row">
						<div class="col-sm-12 col-md-12 col-lg-12">
							<a href="#" class="footer__links-link">
								Our Story
							</a>
						</div>
						
					</div>
					<div class="row">
						<div class="col-sm-12 col-md-12 col-lg-12">
						<a href="#" class="footer__links-link">
								Events
								</a>
						</div>
					</div>
					<div class="row">
						<div class="col-sm-12 col-md-6 col-lg-12">
						<a href="#" class="footer__links-link">
								Careers
								</a>
						</div>
						
					</div>
					<div class="row">
						<div class="col-sm-12 col-md-12 col-lg-12">
						<a href="#" class="footer__links-link">
								Press
								</a>
						</div>
						
					</div>
					<div class="row">
						<div class="col-sm-12 col-md-12 col-lg-12">
						<a href="#" class="footer__links-link">
								Gift Cards
						</a>
						</div>
					</div>

				</div>
				<div class="col-lg-3 col-md-6 col-sm-12 footer-about">
					<div class="row">
						<div class="col-sm-12 col-md-12 col-lg-12">
							<a href="#" class="footer__links-link">
								Shipping & Returns
							</a>
						</div>
						<div class="col-sm-12 col-md-12 col-lg-12">
							<a href="#" class="footer__links-link">
								FAQs
							</a>
						</div>
						<div class="col-sm-12 col-md-12 col-lg-12">
							<a href="#" class="footer__links-link">
								Shipping & Returns
							</a>
						</div>
						<div class="col-sm-12 col-md-12 col-lg-12">
							<a href="#" class="footer__links-link">
								Contact Us
							</a>
						</div>
						<div class="col-sm-12 col-md-12 col-lg-12">
							<a href="#" class="footer__links-link">
								Find a Store
							</a>
						</div>
					</div>
				</div>
				<div class="col-lg-12 col-md-12 col sm-12 text-center">
					<p class="footer-copyright">
								WeWell 2018, All rights reserved
					</p>
				</div>
			</div> -->


			<!-- <div class="row mt-5 mb-3">
				<?php
					$footerlogo = get_option('siteurl');
					$footerlogo .= '/wp-content/uploads/2019/02/cropped-WEWELL-Brand-Guidelines-5.png';
					?>
				<div class="col-lg-6 col-md-4 col-sm-12">
					<div class="row">
						<div class="col-lg-5 ">
							<a href="#">
								<img class="footer__logo" src="<?php echo $footerlogo ?>">
							</a>
						</div>
						<div class="col-lg-12 col-sm-12 col-md-12">
							<ul class="footer-logo-text">
								<li>
									<a href="#" class="footer__links-link">Careers</a>
								</li>
								<li>
									<a href="#" class="footer__links-link">Terms of Service</a>
								</li>
								<li>
									<a href="#" class="footer__links-link">Privacy Notice</a>
								</li>
								<li>
									<a href="#" class="footer__links-link">Site Map</a>
								</li>
							</ul>
						</div>
						<div class="col-lg-12 col-md-12 col sm-12">
							<p class="footer-copyright">
								WeWell 2018, All rights reserved
							</p>
						</div>
					</div>
				</div>
				<div class="col-lg-2 col-md-4 col-sm-12">
					<p class="footer_social_head">Social Media</p>
					<div class="row">
						<div class="col-sm-12 col-md-12 col-lg-12">
							<ul class="footer__social-list ">
								<li class="footer__social-item">
									<a href="#" class="footer__social-link">
										<i class="fa fa-facebook footer__social-logo footer__social-logo--facebook" aria-hidden="true"></i>
									</a>
								</li>
								<li class="footer__social-item">
									<a href="#" class="footer__social-link">
										<i class="fa fa-google-plus footer__social-logo footer__social-logo--google-plus" aria-hidden="true"></i>
									</a>
								</li>
								<li class="footer__social-item">
									<a href="#" class="footer__social-link">
										<i class="fa fa-instagram footer__social-logo footer__social-logo--instagram" aria-hidden="true"></i>
									</a>
								</li>
								<li class="footer__social-item">
									<a href="#" class="footer__social-link">
										<i class="fa fa-twitter footer__social-logo footer__social-logo--twitter" aria-hidden="true"></i>
									</a>
								</li>
							</ul>
						</div>
					</div>
				</div>
				<div class="col-lg-4 col-md-4 col-sm-12 footer-about">
					<p>About Us</p>
					<div class="row">
						<div class="col-sm-6 col-md-6 col-lg-4">
							<a href="#" class="footer__links-link">
								Our Story
								</a>
						</div>
						<div class="col-sm-6 col-md-6 col-lg-6">
						<a href="#" class="footer__links-link">
								Shipping & Returns
								</a>
						</div>
					</div>
					<div class="row">
						<div class="col-sm-6 col-md-6 col-lg-4">
						<a href="#" class="footer__links-link">
								Events
								</a>
						</div>
						<div class="col-sm-6 col-md-6 col-lg-6">
						<a href="#" class="footer__links-link">
								FAQs
								</a>
						</div>
					</div>
					<div class="row">
						<div class="col-sm-6 col-md-6 col-lg-4">
						<a href="#" class="footer__links-link">
								Careers
								</a>
						</div>
						<div class="col-sm-6 col-md-6 col-lg-6">
						<a href="#" class="footer__links-link">
								Contact Us
								</a>
						</div>
					</div>
					<div class="row">
						<div class="col-sm-6 col-md-6 col-lg-4">
						<a href="#" class="footer__links-link">
								Press
								</a>
						</div>
						<div class="col-sm-6 col-md-6 col-lg-6">
						<a href="#" class="footer__links-link">
								Find a Store
								</a>
						</div>
					</div>
					<div class="row">
						<div class="col-sm-6 col-md-6 col-lg-6">
						<a href="#" class="footer__links-link">
								Gift Cards
						</a>
						</div>
					</div>

				</div>
			</div> -->
			<!-- <div class="row">
				<?php /* do_action( 'airi_footer' ); */?>
			</div> -->
		</div>
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer();?>

</body>
</html>