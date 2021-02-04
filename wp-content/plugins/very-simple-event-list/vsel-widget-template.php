<?php
// disable direct access
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

// event container
$output .= '<div id="event-'.get_the_ID().'" class="vsel-content '.vsel_event_cats().vsel_event_status().'">';
	// meta section
	$output .= '<div class="vsel-meta">';
		// title
		if ($vsel_widget_atts['title_link'] == 'false') {
			$output .= '<h3 class="vsel-meta-title">' . get_the_title() . '</h3>';
		} else {
			if ($widget_link_title != 'yes') {
				$output .= '<h3 class="vsel-meta-title">' . get_the_title() . '</h3>';
			} else {
				$output .=  '<h3 class="vsel-meta-title"><a href="'. get_permalink() .'" rel="bookmark" title="'. get_the_title() .'">'. get_the_title() .'</a></h3>';
			}
		}
		// date format
		if ( !empty($vsel_widget_atts['date_format']) ) {
			$date_format = $vsel_widget_atts['date_format'];
		}
		// date
		if ( ($widget_date_hide != 'yes') ) {
			if ( empty($widget_start_date) || empty($widget_end_date) || ($widget_start_date > $widget_end_date) ) {
				$output .= '<p class="vsel-meta-date vsel-meta-error-date">';
				$output .= esc_attr__( 'Error: please reset date.', 'very-simple-event-list' );
				$output .= '</p>';
			} elseif ($widget_end_date > $widget_start_date) {
				if ($widget_date_combine == 'yes') {
					$output .= '<p class="vsel-meta-date vsel-meta-combined-date">';
					$output .= sprintf(esc_attr($widget_start_label), '<span>'.wp_date( esc_attr($date_format), esc_attr($widget_start_date), $utc_time_zone ).'</span>' );
					$output .= $sep;
					$output .= sprintf(esc_attr($widget_end_label), '<span>'.wp_date( esc_attr($date_format), esc_attr($widget_end_date), $utc_time_zone ).'</span>' );
					$output .= '</p>';
				} else {
					$output .= '<p class="vsel-meta-date vsel-meta-start-date">';
					$output .= sprintf(esc_attr($widget_start_label), '<span>'.wp_date( esc_attr($date_format), esc_attr($widget_start_date), $utc_time_zone ).'</span>' );
					$output .= '</p>';
					$output .= '<p class="vsel-meta-date vsel-meta-end-date">';
					$output .= sprintf(esc_attr($widget_end_label), '<span>'.wp_date( esc_attr($date_format), esc_attr($widget_end_date), $utc_time_zone ).'</span>' );
					$output .= '</p>';
				}
			} elseif ($widget_end_date == $widget_start_date) {
				$output .= '<p class="vsel-meta-date vsel-meta-single-date">';
				$output .= sprintf(esc_attr($widget_date_label), '<span>'.wp_date( esc_attr($date_format), esc_attr($widget_end_date), $utc_time_zone ).'</span>' );
				$output .= '</p>';
			}
		}
		// time
		if ($widget_time_hide != 'yes') {
			if (!empty($widget_time)){
				$output .= '<p class="vsel-meta-time">';
				$output .= sprintf(esc_attr($widget_time_label), '<span>'.esc_attr($widget_time).'</span>' );
				$output .= '</p>';
			}
		}
		// location
		if ($widget_location_hide != 'yes') {
			if (!empty($widget_location)){
				$output .= '<p class="vsel-meta-location">';
				$output .= sprintf(esc_attr($widget_location_label), '<span>'.esc_attr($widget_location).'</span>' );
				$output .= '</p>';
			}
		}
		// include acf fields
		if( class_exists('acf') && ($widget_acf_hide != 'yes') ) {
			include 'vsel-acf.php';
		}
		// more info link
		if ($widget_link_hide != 'yes') {
			if (!empty($widget_link)){
				$output .= '<p class="vsel-meta-link">';
				$output .= sprintf( '<a href="%1$s"'. $widget_link_target .'>%2$s</a>', esc_url($widget_link), esc_attr($widget_link_label) );
				$output .= '</p>';
			}
		}
		// categories
		if ( ($widget_cats_hide != 'yes') ) {
			$cats_raw = wp_strip_all_tags( get_the_term_list( get_the_ID(), 'event_cat', '<span>', ' | ', '</span>' ) );
			$cats = get_the_term_list( get_the_ID(), 'event_cat', '<span>', ' | ', '</span>' );
			if( has_term( '', 'event_cat', get_the_ID() ) ) {
				if ($widget_link_cat != 'yes') {
					$output .= '<p class="vsel-meta-cats">';
					$output .= $cats_raw;
					$output .= '</p>';
				} else {
					$output .= '<p class="vsel-meta-cats">';
					$output .= $cats;
					$output .= '</p>';
				}
			}
		}
	// end meta section
	$output .= '</div>';
	// image info section
	if ( ($widget_image_hide == 'yes') && ($widget_info_hide == 'yes') ) {
		$output .= '';
	} else {
		$output .= '<div class="vsel-image-info">';
			// featured image
			if ($vsel_widget_atts['featured_image'] != 'false') {
				if ($widget_image_hide != 'yes') {
					if ( has_post_thumbnail() ) {
						$image_attributes = wp_get_attachment_image_src( get_post_thumbnail_id( get_the_ID() ), $widget_image_source );
						$image_title = get_the_title( get_post_thumbnail_id( get_the_ID() ) );
						if ($widget_link_image != 'yes') {
							$output .= '<img class ="'.$widget_img_class.'" src="'.$image_attributes[0].'" width="'.$image_attributes[1].'" height="'.$image_attributes[2].'" '.$widget_image_max_width.' alt="'.$image_title.'" />';
						} else {
							$output .=  '<a href="'. get_permalink() .'"><img class ="'.$widget_img_class.'" src="'.$image_attributes[0].'" width="'.$image_attributes[1].'" height="'.$image_attributes[2].'" '.$widget_image_max_width.' alt="'.$image_title.'" /></a>';
						}
					}
				}
			}
			// info
			if ($widget_info_hide != 'yes') {
				$output .= '<div class="vsel-info">';
					if ($widget_excerpt != 'yes') {
						$output .= apply_filters( 'the_content', get_the_content() );
					} elseif (!empty($widget_summary)) {
						$output .= apply_filters( 'the_excerpt', $widget_summary );
					}  else {
						$output .= apply_filters( 'the_excerpt', get_the_excerpt() );
					}
				$output .= '</div>';
			}
		// end image info section
		$output .= '</div>';
	}
// end event container
$output .= '</div>';
