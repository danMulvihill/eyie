<?php

// Custom control for carousel category
 
if (class_exists('WP_Customize_Control')) {
    class pro_blog_Customize_Category_Control extends WP_Customize_Control {
 
        public function render_content() {
   
            $dropdown = wp_dropdown_categories( 
                array(
                    'name'              => '_customize-dropdown-category-' . $this->id,
                    'echo'              => 0,
                    'show_option_none'  => __( '&mdash; Select &mdash;', 'pro-blog' ),
                    'option_none_value' => '0',
                    'selected'          => $this->value(),
                    
                )
            );
 
            $dropdown = str_replace( '<select', '<select ' . $this->get_link(), $dropdown );
  
            printf(
                '<label class="customize-control-select"><span class="customize-control-title">%s</span> %s</label>',
                $this->label,
                $dropdown
            );
        }
    }
}
 
// Register slider customizer section 
 
add_action( 'customize_register' , 'pro_blog_carousel_options' );

function pro_blog_carousel_options( $wp_customize ) {

	/* HomePage Setting Panel */
	 
	$wp_customize->add_section(
	    'carousel_section',
	    array(
			'title'			=> esc_html__( 'Featured Slider', 'pro-blog' ),
			'description'	=> esc_html__( 'Note : Only posts with images will be shown', 'pro-blog' ),
	        'capability'  	=> 'edit_theme_options',
	        'priority' 	 	=> 7.5, 
	    )
	);
	 
	/* End HomePage Setting Panel */

	/*Carousel Slider Setting Start*/

	$wp_customize->add_setting( 
		'slider',
		array(
			'default'           => 0,
			'sanitize_callback' => 'pro_blog_sanitize_checkbox',
		)
	);
	$wp_customize->add_control( 
		'slider',
		array(
			'label'    		=> esc_html__( 'Show Featured Slider', 'pro-blog' ),
			'section'  		=> 'carousel_section',
			'type'     		=> 'checkbox',
		)
	);

	$wp_customize->add_setting(
	    'carousel_setting',
	     array(
	    'default'   		=> $defaults['carousel_setting'],
		'sanitize_callback' => 'sanitize_text_field',
	  )
	);
	 
	$wp_customize->add_control(
	    new pro_blog_Customize_Category_Control(
	        $wp_customize,
	        'carousel_category',
	        array(
				'label'		=> esc_html__( 'Category', 'pro-blog' ),
	            'settings'	=> 'carousel_setting',
	            'section'	=> 'carousel_section'
	        )
	    )
	);
	 
	$wp_customize->add_setting(
	    'count_setting',
	     array(
	    'default'   		=> $defaults['count_setting'],
		'sanitize_callback' => 'sanitize_text_field',
	 
	  )
	);
	 
	$wp_customize->add_control(
	    new WP_Customize_Control(
	        $wp_customize,
	        'carousel_count',
	        array(
	            'label'          => esc_html__( 'Number of Slides', 'pro-blog' ),
	            'section'        => 'carousel_section',
	            'settings'       => 'count_setting',
	            'type'           => 'text',
	        )
	    )
	);
	}
?>