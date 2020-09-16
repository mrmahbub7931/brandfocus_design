<?php if ( ! defined( 'ABSPATH' ) ) { die; } // Cannot access pages directly.\


// Control core classes for avoid errors
if( class_exists( 'CSF' ) ) {

    //
    // Set a unique slug-like ID
    $prefix = 'tm_marketing';
  
    //
    // Create options
    CSF::createOptions( $prefix, array(
        'menu_title'      => 'Techmix Panel',
        'menu_type'       => 'menu', // menu, submenu, options, theme, etc.
		'menu_slug'       => 'tm-panel',
		'menu_icon'		  => 'dashicons-dashboard',
        'ajax_save'       => true,
        'show_reset_all'  => false,
        'framework_title' => 'Techmix panel <small>by <a href="https://techmix.xyz/" rel="nofollow">Techmix</a></small>',
    ) );
  
    //
    // Create a section
    CSF::createSection( $prefix, array(
      'title'  => 'Header option',
      'fields' => array(
        array(
            'id'        => '_want_logo',
            'type'      => 'switcher',
            'default'   => false,
            'title' => esc_html__('Do you want to show logo?','tm'),
        ),
        array(
            'id'    => 'logo',
            'type'  => 'upload',
            'title' => esc_html__('Upload Logo','tm'),
            'dependency'   => array( '_want_logo', '==', true ),
        ),
        array(
            'id'    => 'logo_text',
            'type'  => 'text',
            'title' => esc_html__('Enter your logo text','tm'),
            'dependency'   => array( '_want_logo', '!=', true ),
        ),
        
      )
    ) );
  
    //
    // Create a section
    CSF::createSection( $prefix, array(
      'title'  => 'Home page',
      'fields' => array(
  
		array(
			'id'        => 'slides',
			'type'      => 'group',
			'title'     => 'Slider',
			'fields'    => array(
			  array(
				'id'    => 'slide-bg',
				'type'  => 'upload',
				'title' => 'Upload Slide Background Image',
			  ),
			  array(
				'id'    => 'slide-heading',
				'type'  => 'text',
				'title' => 'Headline',
			  ),
			  array(
				'id'    => 'slide-para',
				'type'  => 'textarea',
				'title' => 'Slide Paragraph',
			  ),
			  array(
				'id'    => 'slide-btn-text',
				'type'  => 'text',
				'title' => 'Buttonn Text',
			  ),
			  array(
				'id'    => 'slide-btn-url',
				'type'  => 'text',
				'title' => 'Buttonn Url',
			  ),

			),
		),

        // A Category field
        array(
            'id'          => 'home-post-cats',
            'type'        => 'select',
            'title'       => 'Select Category For Home page',
            'chosen'      => true,
            'multiple'    => true,
            'placeholder' => 'Select Category',
            'options'     =>'categories',
		),
		array(
			'id'        => 'parallax',
			'type'      => 'group',
			'title'     => 'Slider',
			'fields'    => array(
				array(
					'id'	=>	'parallax_bg',
					'type'	=>	'upload',
					'title'	=>	'Parallax Background'
				),
				array(
					'id'    => 'parallax-heading',
					'type'  => 'text',
					'title' => 'Headline',
				),
				array(
					'id'    => 'parallax-btn-text',
					'type'  => 'text',
					'title' => 'Buttonn Text',
				),
				array(
					'id'    => 'parallax-btn-url',
					'type'  => 'text',
					'title' => 'Buttonn Url',
				),

			),
		),
		
      )
    ) );

    // Create a section
    CSF::createSection( $prefix, array(
        'title'  => 'Footer option',
        'fields' => array(
          
			array(
				'id'        => 'footer_contact',
				'type'      => 'group',
				'title'     => 'Footer First Block',
				'fields'    => array(
				  array(
					'id'    => 'f-logo',
					'type'  => 'upload',
					'title' => 'Footer Logo',
				  ),
				  array(
					'id'    => 'f-desc',
					'type'  => 'textarea',
					'title' => 'Company Short Description',
				  ),
				  array(
					'id'        => 'footer_social',
					'type'      => 'group',
					'title'     => 'Footer Social',
					'fields'	=>	array(
						array(
							'id'          => 's_url',
							'type'        => 'text',
							'title'       => 'Social Url',
						),
						array(
							'id'          => 's_icon',
							'type'        => 'icon',
							'title'       => 'Social icon',
						),
	
					)
				),
				  
	
				),
			),
			array(
				'id'          => 'widget_title_1',
                'type'        => 'text',
                'title'       => 'Widget Title',
			),
			array(
                'id'          => 'fservice_menu',
                'type'        => 'select',
                'title'       => 'Footer Service menu',
                'placeholder' => 'Select a Menu',
                'options'     =>  'menus',
			),
			array(
				'id'          => 'widget_title_2',
                'type'        => 'text',
                'title'       => 'Widget Title',
			),
			array(
                'id'          => 'flink_menu',
                'type'        => 'select',
                'title'       => 'Important menu',
                'placeholder' => 'Select a Menu',
                'options'     =>  'menus',
			),
			array(
				'id'          => 'widget_title_3',
                'type'        => 'text',
                'title'       => 'Widget Title',
			),

			array(
				'id'        => 'footer_contact_info',
				'type'      => 'group',
				'title'     => 'Footer Contact info',
				'fields'	=>	array(
					array(
						'id'          => 'contact_desc',
						'type'        => 'textarea',
						'title'       => 'Contact Description',
					),
					array(
						'id'          => 'f_location',
						'type'        => 'text',
						'title'       => 'Location',
					),
					
					array(
						'id'          => 'f_number',
						'type'        => 'text',
						'title'       => 'Phone number',
					),
					
					array(
						'id'          => 'f_mail',
						'type'        => 'text',
						'title'       => 'Email Address',
					),


				)
			),
         
        )
      ) );
      

  
  }
  


