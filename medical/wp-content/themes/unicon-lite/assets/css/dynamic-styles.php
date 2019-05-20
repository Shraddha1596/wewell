<?php
	function unicon_lite_register_dynamic_fonts() {

		$unicon_lite_body_font = get_theme_mod( 'unicon_lite_body_font', 'Roboto' );
		$unicon_lite_heading_font = get_theme_mod( 'unicon_lite_heading_font', 'Roboto' );
		$unicon_lite_menu_font = get_theme_mod( 'unicon_lite_menu_font', 'Poppins' );

		if( $unicon_lite_body_font || $unicon_lite_heading_font || $unicon_lite_menu_font ) {
			$all_fonts = $unicon_lite_body_font . '|' . $unicon_lite_heading_font . '|' . $unicon_lite_menu_font;

	        wp_register_style('unicon-lite-dynamic-font', '//fonts.googleapis.com/css?family='.esc_attr($all_fonts));
	        wp_enqueue_style( 'unicon-lite-dynamic-font');
	    }
	}

	add_action( 'wp_head', 'unicon_lite_register_dynamic_fonts' );

        function unicon_lite_dynamic_styles() {
            $tpl_color = sanitize_hex_color(get_theme_mod( 'unicon_lite_tpl_color', '#92c330' ));
            $rgbs = unicon_lite_hex2rgb($tpl_color);
            
            $custom_css = "
	            a,
	            a:hover, a:focus, a:active,
	            .unicon-services-section .serviceswrap .item-icon,
	            .unicon-services-section .item-box:hover .item-id,
	            .unicon-services-section .item-vertical-line:after,
	            button:hover, input[type=\"button\"]:hover,
	            input[type=\"reset\"]:hover,
	            input[type=\"submit\"]:hover,
	            .blog-section .blogsinfo .blog-info a:hover,
	            .blog-section .blogsinfo .blog-info a:after,
	            .blog-section .blogsinfo .blog-info a:hover,
	            .site-footer .footer-widgetswrap .widget ul li:hover a,
	            .site-footer .footer-widgetswrap .widget ul li:hover,
	            .page_header_wrap #unicon-breadcrumb a,
	            .widget-area ul li:hover > a,
	            .widget_recent_entries ul li:hover > a,
	            .widget_pages ul li:hover > a,
	            .widget_meta ul li:hover > a,
	            .widget_archive ul li:hover > a,
	            .widget_categories ul li:hover > a,
	            .widget_nav_menu ul li:hover > a,
	            .widget_recent_comments ul li:hover > a,
	            .widget_recent_comments ul li .comment-author-link:hover a,
	            .widget-area ul li:hover > a:before,
	            .widget_recent_entries ul li:hover > a:before,
	            .widget_pages ul li:hover > a:before,
	            .widget_meta ul li:hover > a:before,
	            .widget_archive ul li:hover > a:before,
	            .widget_categories ul li:hover > a:before,
	            .widget_nav_menu ul li:hover > a:before,
	            .content-blog .main-blog-right .title-text:hover,
	            .content-blog .main-blog-right .btn-readmore a:hover,
	            .content-blog .main-blog-right .metadata li:hover a,
	            .content-blog .metadata .comment:hover,
	            .content-blog .main-blog-right .btn-readmore a:after,
	            .content-blog .main-blog-right .title-text:hover,
	            .content-blog .main-blog-right .btn-readmore a:hover,
	            .pagination .current,
	            .nav-links a:hover,
	            .backtohome a:hover,
	            .comment-left a:hover,
	            .comment-left a:hover:before,
	            .comment-wrapper .media-body a:hover{
	            	color: {$tpl_color};
	            }";

            $custom_css .= "
            	.mainbanner-button-wrap .first-button.kr-styleone a,
            	.mainbanner-button-wrap .first-button a:hover,
            	.about-section .readmore a:hover,
            	.unicon-services-section .serviceswrap .item-box:before,
            	.unicon-services-section .serviceswrap .item-box:after,
            	.pagination .current,
            	.nav-links a,
            	.backtohome a,
            	.nav-links a:hover,
            	.backtohome a:hover,
            	button, input[type=\"button\"], input[type=\"reset\"], input[type=\"submit\"]{
            		border-color: {$tpl_color};
            	}";

        	$custom_css .= "
        		.mainbanner-button-wrap .first-button.kr-styleone a:after,
        		.mainbanner-button-wrap .first-button a:hover:after,
        		.mainbanner-button-wrap .first-button a:after,
        		.about-content-wrapper .about-content h3:after,
        		.lSSlideOuter .aboutservices h4:after,
        		.about-section .readmore a:hover,
        		.about-content-wrapper .about-content h3:after,
        		.lSSlideOuter .aboutservices h4:after,
        		.section-title h2:after,
        		.unicon-counter-section .counter:after,
        		.sucess-content-wrapper h4:after,
        		.unicon-counter-section,
        		.team-section .lSSlideOuter .lSPager.lSpg > li:hover a,
        		.team-section .lSSlideOuter .lSPager.lSpg > li.active a,
        		.testimonial-section .lSSlideOuter .lSPager.lSpg > li:hover a,
        		.testimonial-section .lSSlideOuter .lSPager.lSpg > li.active a,
        		.partners-section .partners-wrapper h3:before,
        		.blog-section .blogsinfo .blog-image .blogtime,
        		.site-footer .footer-widgetswrap .widget-title:before,
        		.scrollup,
        		.widget_search .search-form .search-submit,
        		.widget-area .widget .widget-title:before,
        		.nav-links a,
        		.backtohome a,
        		button, input[type=\"button\"], input[type=\"reset\"], input[type=\"submit\"]{
        			background: {$tpl_color};
        		}";

    		/** Lighter Background **/
    		$custom_css .= "
    			.works-section .ourworkwrap:after,
    			.widget_search .search-form .search-submit:hover{
    				background: rgba({$rgbs[0]}, {$rgbs[1]}, {$rgbs[2]}, 0.79);
    			}";

			/** Typography Settings **/
				$unicon_lite_body_font = get_theme_mod( 'unicon_lite_body_font', 'Roboto' );
				$unicon_lite_heading_font = get_theme_mod( 'unicon_lite_heading_font', 'Roboto' );
				$unicon_lite_menu_font = get_theme_mod( 'unicon_lite_menu_font', 'Poppins' );

				$custom_css .= "
					body, body p {
						font-family: {$unicon_lite_body_font};
					}";

				$custom_css .= "
					h1, h2, h3, h4, h5, h6 {
						font-family: {$unicon_lite_heading_font};
					}";

				$custom_css .= "
					.menulink ul li a {
						font-family: {$unicon_lite_menu_font};
					}";

            wp_add_inline_style( 'unicon-lite-style', $custom_css );
        }

        add_action( 'wp_enqueue_scripts', 'unicon_lite_dynamic_styles' );

        function unicon_lite_hex2rgb($hex) {
		    $hex = str_replace("#", "", $hex);

		    if (strlen($hex) == 3) {
		        $r = hexdec(substr($hex, 0, 1) . substr($hex, 0, 1));
		        $g = hexdec(substr($hex, 1, 1) . substr($hex, 1, 1));
		        $b = hexdec(substr($hex, 2, 1) . substr($hex, 2, 1));
		    } else {
		        $r = hexdec(substr($hex, 0, 2));
		        $g = hexdec(substr($hex, 2, 2));
		        $b = hexdec(substr($hex, 4, 2));
		    }
		    $rgb = array($r, $g, $b);
		    //return implode(",", $rgb); // returns the rgb values separated by commas
		    return $rgb; // returns an array with the rgb values
		}