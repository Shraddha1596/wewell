<?php
/*
Template Name: Search Page
*/
?>
<?php
get_header(); ?>


<?php

global $query_string;

wp_parse_str( $query_string, $search_query );
$search = new WP_Query( $search_query );

?>

<div class="wrap">
	<div id="primary" class="content-area">
		<main id="container main" class="site-main" role="main">
			<div class="row">
				
				<div class=" col-xs-12 col-lg-10 col-lg-offset-1 form-page" >
					<h3><span  class="health-concern">What is your health concern</span><span>?</span></h3>
					<form role="search" method="get" class=" row search-form" onsubmit="myFunction()" action="<?php get_permalink(); ?>">
						<label class="col-sm-12 col-md-5 col-lg-5 search-margin">
							<span class="screen-reader-text">Search for:</span>
							<input type="search" class="search-field" style="font-family: FontAwesome, Arial; font-style: normal" placeholder="health concern, treatment, doctor name.." value="" name="query">
						</label>
						<label class="col-sm-12 col-md-5 col-lg-5">
							<span class="screen-reader-text">Search for:</span>
							<input type="search" class="search-field" style="font-family: FontAwesome, Arial; font-style: normal" placeholder="zip code or city" value="" name="query1">
						</label>
						<label class="col-md-2 col-lg-2 ">
							<!-- <button><i class="fa fa-search  search-submit"></i></button> -->
							<input type="submit" class="lappy search-submit"  style="font-family: FontAwesome, Arial; font-style: normal" value="&#xf002;">
							<input type="submit" class="phone search-submit" value="Search">
						</label>
						
					</form>
				
			
				
				<?php
				// echo $_REQUEST[ 'query' ].'xxx';

				if ( isset( $_REQUEST['query'] ) ) {
					  // run search query
					  query_posts( array(
						 's' => $_REQUEST[ 'query' ],
						 'post_type' => $_REQUEST[ 'post_type' ],
						 'paged' => $paged
						 )
					  );
					 
					  	if(!$_REQUEST['query']==''){
							echo"
							 		<div class='search-result'>
							 			<p>Coming-Soon<p>
							 		</div>
							 	";
						}
						elseif(!$_REQUEST['query1']==''){
							echo"
							 		<div class='search-result'>
							 			<p>Coming-Soon<p>
							 		</div>
							 	";
						}
						elseif($_REQUEST['query']=='' && $_REQUEST['query1']==''){
							echo"
								<div class='search-result-blank'>
						 				<p>
						 				Please type something into the search box
						 				</p>		
								 </div>
							";
						}

					  	// if($_REQUEST['query']==''){
						// 	echo"
						// 		<div class='search-result-blank'>
						// 			<p>
						// 				Please type something into the search box
						// 			</p>		
						// 		</div>
						// 	";
						//   }
						//   elseif($_REQUEST['query1']==''){
						// 	echo"
						// 		<div class='search-result-blank'>
						// 			<p class='query1'>
						// 				Please type something into the search box
						// 			</p>		
						// 		</div>
						// 	";
					  	// }
					  	// else{
						// 	echo"
						// 		<div class='search-result'>
						// 			<p>Coming-Soon<p>
						// 		</div>
						// 	";
						//   }
						
					  
					  
					// // loop
					// if ( have_posts() ) : while ( have_posts() ) : 

						
					// 	// loop through results here
					// endwhile; endif;
					
					// // return to original query
					// wp_reset_query();
					?> 
				
				
					<?php
				}
				?>




				
					<!-- <form> -->
					<?php /* get_search_form(); */ ?>
					<!-- </form> -->
				</div>
			</div>

		</main><!-- #main -->
	</div><!-- #primary -->
</div><!-- .wrap -->

<?php get_footer();