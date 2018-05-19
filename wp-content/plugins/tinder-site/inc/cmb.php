<?php

add_filter( 'rwmb_meta_boxes', 'fionahoward_meta_boxes' );
function fionahoward_meta_boxes($meta_boxes) {
  $prefix = '_FH_';

/*----------
*  Pages
----------*/

    /**
     * Home
     */
    $meta_boxes[] = array(
        'title'      => __( 'Row One', 'FH' ),
        'post_types' => 'page',
        'include'    => array(
            'template'   => array( 'page-home.php' ),
        ),
        'fields'     => array(
            // 1
            array(
                'id'   => $prefix . 'row_one_image_one',
                'name' => __( 'Image (Left)', 'FH' ),
                'desc' => 'Recommended dimensions: <br /> 500px (width) by 600px (height)',
                'type' => 'image_advanced',
            ),
            array(
                'id'   => $prefix . 'row_one_title_one',
                'name' => __( '&nbsp;', 'FH' ),
                'desc' => 'Page Title',
                'type' => 'text',
            ),
            array(
                'id'   => $prefix . 'row_one_link_one',
                'name' => __( '&nbsp;', 'FH' ),
                'desc' => 'Link to page',
                'type' => 'text',
            ),
            // 2
            array(
                'id'   => $prefix . 'row_one_testimonial',
                'name' => __( 'Testimonial', 'FH' ),
                'desc' => 'Add a testimonial',
                'type' => 'wysiwyg',
            ),
            array(
                'id'   => $prefix . 'row_one_testimonial_person',
                'name' => __( '&nbsp;', 'FH' ),
                'desc' => 'Person',
                'type' => 'text',
            ),
            array(
                'id'   => $prefix . 'row_one_testimonial_position',
                'name' => __( '&nbsp;', 'FH' ),
                'desc' => 'Position',
                'type' => 'text',
            ),
            array(
                'id'   => $prefix . 'row_one_testimonial_company',
                'name' => __( '&nbsp;', 'FH' ),
                'desc' => 'Company',
                'type' => 'text',
            ),
            // 3
            array(
                'id'   => $prefix . 'row_one_image_three',
                'name' => __( 'Image (Right)', 'FH' ),
                'desc' => 'Recommended dimensions: <br /> 700px (width) by 400px (height)',
                'type' => 'image_advanced',
            ),
            array(
                'id'   => $prefix . 'row_one_title_three',
                'name' => __( '&nbsp;', 'FH' ),
                'desc' => 'Page Title',
                'type' => 'text',
            ),
            array(
                'id'   => $prefix . 'row_one_link_three',
                'name' => __( '&nbsp;', 'FH' ),
                'desc' => 'Link to page',
                'type' => 'text',
            ),
            array(
                'id'   => $prefix . 'row_one_video_three',
                'name' => __( '&nbsp;', 'FH' ),
                'desc' => 'Vimeo Link <br />(this is the set of numbers at the end of the URL)',
                'type' => 'text',
            ),
        )
    );
    $meta_boxes[] = array(
        'title'      => __( 'Row Two', 'FH' ),
        'post_types' => 'page',
        'include'    => array(
            'template'   => array( 'page-home.php' ),
        ),
        'fields'     => array(
            //1
            array(
                'id'   => $prefix . 'row_two_image_one',
                'name' => __( 'Image (Left)', 'FH' ),
                'desc' => 'Recommended dimensions: <br /> 350px (width) by 350px (height)',
                'type' => 'image_advanced',
            ),
            array(
                'id'   => $prefix . 'row_two_title_one',
                'name' => __( '&nbsp;', 'FH' ),
                'desc' => 'Page Title',
                'type' => 'text',
            ),
            array(
                'id'   => $prefix . 'row_two_link_one',
                'name' => __( '&nbsp;', 'FH' ),
                'desc' => 'Link to page',
                'type' => 'text',
            ),
            // 2
            array(
                'id'   => $prefix . 'row_two_image_three',
                'name' => __( 'Image (Right)', 'FH' ),
                'desc' => 'Recommended dimensions: <br /> 600px (width) by 440px (height)',
                'type' => 'image_advanced',
            ),
            array(
                'id'   => $prefix . 'row_two_title_three',
                'name' => __( '&nbsp;', 'FH' ),
                'desc' => 'Page Title',
                'type' => 'text',
            ),
            array(
                'id'   => $prefix . 'row_two_link_three',
                'name' => __( '&nbsp;', 'FH' ),
                'desc' => 'Link to page',
                'type' => 'text',
            ),
        )
    );
    $meta_boxes[] = array(
        'title'      => __( 'Row Three', 'FH' ),
        'post_types' => 'page',
        'include'    => array(
            'template'   => array( 'page-home.php' ),
        ),
        'fields'     => array(
            // 1
            array(
                'id'   => $prefix . 'row_three_image_one',
                'name' => __( 'Image (Left)', 'FH' ),
                'desc' => 'Recommended dimensions: <br /> 450px (width) by 810px (height)',
                'type' => 'image_advanced',
            ),
            array(
                'id'   => $prefix . 'row_three_title_one',
                'name' => __( '&nbsp;', 'FH' ),
                'desc' => 'Page Title',
                'type' => 'text',
            ),
            array(
                'id'   => $prefix . 'row_three_link_one',
                'name' => __( '&nbsp;', 'FH' ),
                'desc' => 'Link to page',
                'type' => 'text',
            ),
            // 2
            array(
                'id'   => $prefix . 'row_three_image_two',
                'name' => __( 'Image (Centre)', 'FH' ),
                'desc' => 'Recommended dimensions: <br /> 600px (width) by 440px (height)',
                'type' => 'image_advanced',
            ),
            array(
                'id'   => $prefix . 'row_three_title_two',
                'name' => __( '&nbsp;', 'FH' ),
                'desc' => 'Page Title',
                'type' => 'text',
            ),
            array(
                'id'   => $prefix . 'row_three_link_two',
                'name' => __( '&nbsp;', 'FH' ),
                'desc' => 'Link to page',
                'type' => 'text',
            ),
            // 3
            array(
                'id'   => $prefix . 'row_three_image_three',
                'name' => __( 'Image (Overlay)', 'FH' ),
                'desc' => 'Recommended dimensions: <br /> 300px (width) by 220px (height)',
                'type' => 'image_advanced',
            ),
            array(
                'id'   => $prefix . 'row_three_title_three',
                'name' => __( '&nbsp;', 'FH' ),
                'desc' => 'Page Title',
                'type' => 'text',
            ),
            array(
                'id'   => $prefix . 'row_three_link_three',
                'name' => __( '&nbsp;', 'FH' ),
                'desc' => 'Link to page',
                'type' => 'text',
            ),
        )
    );
    $meta_boxes[] = array(
        'title'      => __( 'Row Four', 'FH' ),
        'post_types' => 'page',
        'include'    => array(
            'template'   => array( 'page-home.php' ),
        ),
        'fields'     => array(
            // 1
            array(
                'id'   => $prefix . 'row_four_image_one',
                'name' => __( 'Image (Left)', 'FH' ),
                'desc' => 'Recommended dimensions: <br /> 450px (width) by 620px (height)',
                'type' => 'image_advanced',
            ),
            array(
                'id'   => $prefix . 'row_four_title_one',
                'name' => __( '&nbsp;', 'FH' ),
                'desc' => 'Page Title',
                'type' => 'text',
            ),
            array(
                'id'   => $prefix . 'row_four_link_one',
                'name' => __( '&nbsp;', 'FH' ),
                'desc' => 'Link to page',
                'type' => 'text',
            ),
            // 2
            array(
                'id'   => $prefix . 'row_four_image_two',
                'name' => __( 'Image (Right)', 'FH' ),
                'desc' => 'Recommended dimensions: <br /> 600px (width) by 440px (height)',
                'type' => 'image_advanced',
            ),
            array(
                'id'   => $prefix . 'row_four_title_two',
                'name' => __( '&nbsp;', 'FH' ),
                'desc' => 'Page Title',
                'type' => 'text',
            ),
            array(
                'id'   => $prefix . 'row_four_link_two',
                'name' => __( '&nbsp;', 'FH' ),
                'desc' => 'Link to page',
                'type' => 'text',
            ),
        )
    );
    $meta_boxes[] = array(
        'title'      => __( 'Row Five', 'FH' ),
        'post_types' => 'page',
        'include'    => array(
            'template'   => array( 'page-home.php' ),
        ),
        'fields'     => array(
            // 1
            array(
                'id'   => $prefix . 'row_five_testimonial',
                'name' => __( 'Testimonial', 'FH' ),
                'desc' => 'Add a testimonial',
                'type' => 'wysiwyg',
            ),
            array(
                'id'   => $prefix . 'row_five_testimonial_person',
                'name' => __( '&nbsp;', 'FH' ),
                'desc' => 'Person',
                'type' => 'text',
            ),
            array(
                'id'   => $prefix . 'row_five_testimonial_position',
                'name' => __( '&nbsp;', 'FH' ),
                'desc' => 'Position',
                'type' => 'text',
            ),
            array(
                'id'   => $prefix . 'row_five_testimonial_company',
                'name' => __( '&nbsp;', 'FH' ),
                'desc' => 'Company',
                'type' => 'text',
            ),
            // 2
            array(
                'id'   => $prefix . 'row_five_image_one',
                'name' => __( 'Image (Left)', 'FH' ),
                'desc' => 'Recommended dimensions: <br /> 500px (width) by 500px (height)',
                'type' => 'image_advanced',
            ),
            array(
                'id'   => $prefix . 'row_five_title_one',
                'name' => __( '&nbsp;', 'FH' ),
                'desc' => 'Page Title',
                'type' => 'text',
            ),
            array(
                'id'   => $prefix . 'row_five_link_one',
                'name' => __( '&nbsp;', 'FH' ),
                'desc' => 'Link to page',
                'type' => 'text',
            ),

            array(
                'id'   => $prefix . 'row_five_video_one',
                'name' => __( '&nbsp;', 'FH' ),
                'desc' => 'Vimeo Link <br />(this is the set of numbers at the end of the URL)',
                'type' => 'text',
            ),
        )
    );

    /**
     * About
     */
    $meta_boxes[] = array(
        'title'      => __( 'Images', 'FH' ),
        'post_types' => 'page',
        'include'    => array(
            'template'   => array( 'page-about.php' ),
        ),
        'fields'     => array(
            array(
                'id'   => $prefix . 'about__image',
                'name' => __( '&nbsp;'),
                'desc' => 'These will go below the "Featured Image"',
                'type' => 'image_advanced',
            ),
        ),
    );

    /**
     * Exhibitions
     */
    $meta_boxes[] = array(
        'title'      => __( 'Images', 'FH' ),
        'post_types' => 'page',
        'include'    => array(
            'template'   => array( 'page-exhibitions.php' ),
        ),
        'fields'     => array(
            array(
                'id'   => $prefix . 'exhibit__image',
                'name' => __( '&nbsp;'),
                'desc' => 'These will go below the "Featured Image"',
                'type' => 'image_advanced',
            ),
        ),
    );

    /**
     * Contact
     */
    $meta_boxes[] = array(
        'title'      => __( 'UK Studio', 'FH' ),
        'post_types' => 'page',
         'include'    => array(
            'template'   => array( 'page-contact.php' ),
         ),         
        'fields'     => array(
            array(
                'id'   => $prefix . 'uk_location',
                'name' => __( 'Location', 'FH' ),
                'type' => 'text',
            ),
            array(
                'id'   => $prefix . 'uk_address',
                'name' => __( 'Address', 'FH' ),
                'type' => 'wysiwyg',
            ),
            array(
                'id'   => $prefix . 'uk_tel',
                'name' => __( 'Phone', 'FH' ),
                'type' => 'text',
            ),
            array(
                'id'   => $prefix . 'uk_email',
                'name' => __( 'Email', 'FH' ),
                'type' => 'text',
            ),
        )
    );    

    $meta_boxes[] = array(
        'title'      => __( 'LA Studio', 'FH' ),
        'post_types' => 'page',
         'include'    => array(
            'template'   => array( 'page-contact.php' ),
         ),         
        'fields'     => array(
            array(
                'id'   => $prefix . 'la_location',
                'name' => __( 'Location', 'FH' ),
                'type' => 'text',
            ),
            array(
                'id'   => $prefix . 'la_address',
                'name' => __( 'Address', 'FH' ),
                'type' => 'wysiwyg',
            ),
            array(
                'id'   => $prefix . 'la_tel',
                'name' => __( 'Phone', 'FH' ),
                'type' => 'text',
            ),
            array(
                'id'   => $prefix . 'la_email',
                'name' => __( 'Email', 'FH' ),
                'type' => 'text',
            ),
        )
    );   


/**
 * Clients
 */

    $meta_boxes[] = array(
        'title'      => __( 'Top Block', 'FH' ),
        'post_types' => 'page',
        'include'    => array(
            'template'   => array( 'page-clients.php' ),
        ),
        'fields'     => array(
            array(
                'id'   => $prefix . 'client__1_top',
                'name' => __( 'Client Image Block (Left)'),
                'type' => 'image_advanced',
            ),
            array(
                'name'          => __( '&nbsp;'),
                'id'            => $prefix . 'client__1_top_colour_',
                'type'          => 'color',
                'desc'          => 'Client Name',
                'alpha_channel' => true,
                'js_options'    => array(
                    'palettes'  => array( '#125', '#459', '#78b', '#ab0', '#de3', '#f0f' )
                ),
            ),
            array(
                'id'   => $prefix . 'client__2_top',
                'name' => __( '&nbsp;'),
                'type' => 'image_advanced',
            ),
            array(
                'name'          => __( '&nbsp;'),
                'id'            => $prefix . 'client__2_top_colour',
                'desc'          => 'Client Name',
                'type'          => 'color',
                'alpha_channel' => true,
                'js_options'    => array(
                    'palettes'  => array( '#125', '#459', '#78b', '#ab0', '#de3', '#f0f' )
                ),
            ),
            array(
                'id'   => $prefix . 'client__3_top',
                'name' => __( '&nbsp;'),
                'type' => 'image_advanced',
            ),
            array(
                'name'          => __( '&nbsp;'),
                'id'            => $prefix . 'client__3_top_colour',
                'desc'          => 'Client Name',
                'type'          => 'color',
                'alpha_channel' => true,
                'js_options'    => array(
                    'palettes'  => array( '#125', '#459', '#78b', '#ab0', '#de3', '#f0f' )
                ),
            ),
        ),
    );



// Left Block
    $meta_boxes[] = array(
        'title'      => __( 'Left Block', 'FH' ),
        'post_types' => 'page',
        'include'    => array(
            'template'   => array( 'page-clients.php' ),
        ),
        'fields'     => array(
            array(
                'id'     => $prefix . 'testimonial_block_left',
                'type'   => 'group',
                'sort_clone' => true,
                'clone' => true,
                'fields' => array(
                    // First Block
                    array(
                        'id'   => $prefix . 'client__1_left',
                        'name' => __( 'Client Image Block (Left)'),
                        'type' => 'image_advanced',
                    ),
                    array(
                        'name'          => __( '&nbsp;'),
                        'id'            => $prefix . 'client__1_left_colour_',
                        'type'          => 'color',
                        'desc'          => 'Client Name',
                        'alpha_channel' => true,
                        'js_options'    => array(
                            'palettes'  => array( '#125', '#459', '#78b', '#ab0', '#de3', '#f0f' )
                        ),
                    ),
                    array(
                        'id'   => $prefix . 'client__2_left',
                        'name' => __( '&nbsp;'),
                        'type' => 'image_advanced',
                    ),
                    array(
                        'name'          => __( '&nbsp;'),
                        'id'            => $prefix . 'client__2_left_colour',
                        'desc'          => 'Client Name',
                        'type'          => 'color',
                        'alpha_channel' => true,
                        'js_options'    => array(
                            'palettes'  => array( '#125', '#459', '#78b', '#ab0', '#de3', '#f0f' )
                        ),
                    ),
                    array(
                        'id'   => $prefix . 'client__3_left',
                        'name' => __( '&nbsp;'),
                        'type' => 'image_advanced',
                    ),
                    array(
                        'name'          => __( '&nbsp;'),
                        'id'            => $prefix . 'client__3_left_colour',
                        'type'          => 'color',
                        'desc'          => 'Client Name',
                        'alpha_channel' => true,
                        'js_options'    => array(
                            'palettes'  => array( '#125', '#459', '#78b', '#ab0', '#de3', '#f0f' )
                        ),
                    ),
                    array(
                        'name'          => __( '&nbsp;'),
                        'id'   => $prefix . 'client_testimonial_left',
                        'desc' => 'Add a testimonial',
                        'type' => 'wysiwyg',
                    ),
                    array(
                        'name'          => __( '&nbsp;'),
                        'id'   => $prefix . 'client_testimonial_left_person',
                        'desc' => 'Person',
                        'type' => 'text',
                    ),
                    array(
                        'name'          => __( '&nbsp;'),
                        'id'   => $prefix . 'client_testimonial_left_position',
                        'desc' => 'Position',
                        'type' => 'text',
                    ),
                    array(
                        'name'          => __( '&nbsp;'),
                        'id'   => $prefix . 'client_testimonial_left_company',
                        'desc' => 'Company',
                        'type' => 'text',
                    ),
                    array(
                        'id'   => $prefix . 'client_image_left',
                        'name' => __( '&nbsp;'),
                        'desc' => 'Product Image',
                        'type' => 'image_advanced',
                    ),
                    array(
                        'id'   => $prefix . 'client_image_left_buyer',
                        'name' => __( '&nbsp;'),
                        'desc' => 'Product Buyer',
                        'type' => 'text',
                    ),
                ),
            ),
        ),
    );


// Right Block
    $meta_boxes[] = array(
        'title'      => __( 'Right Block', 'FH' ),
        'post_types' => 'page',
        'include'    => array(
            'template'   => array( 'page-clients.php' ),
        ),
        'fields'     => array(
            array(
                'id'     => $prefix . 'testimonial_block_right',
                'type'   => 'group',
                'sort_clone' => true,
                'clone' => true,
                'fields' => array(
                    // First Block
                    array(
                        'id'   => $prefix . 'client_image_right',
                        'name' => __( '&nbsp;'),
                        'desc' => 'Product Image',
                        'type' => 'image_advanced',
                    ),
                    array(
                        'id'   => $prefix . 'client_image_right_buyer',
                        'name' => __( '&nbsp;'),
                        'desc' => 'Product Buyer',
                        'type' => 'text',
                    ),
                    array(
                        'name' => __( 'Client Image Block (Right)'),
                        'id'   => $prefix . 'client_testimonial_right',
                        'desc' => 'Add a testimonial',
                        'type' => 'wysiwyg',
                    ),
                    array(
                        'name'          => __( '&nbsp;'),
                        'id'   => $prefix . 'client_testimonial_right_person',
                        'desc' => 'Person',
                        'type' => 'text',
                    ),
                    array(
                        'name'          => __( '&nbsp;'),
                        'id'   => $prefix . 'client_testimonial_right_position',
                        'desc' => 'Position',
                        'type' => 'text',
                    ),
                    array(
                        'name'          => __( '&nbsp;'),
                        'id'   => $prefix . 'client_testimonial_right_company',
                        'desc' => 'Company',
                        'type' => 'text',
                    ),
                    array(
                        'id'   => $prefix . 'client__1_right',
                        'name' => __( '&nbsp;'),
                        'type' => 'image_advanced',
                    ),
                    array(
                        'name'          => __( '&nbsp;'),
                        'id'            => $prefix . 'client__1_right_colour',
                        'type'          => 'color',
                        'desc'          => 'Client Name',
                        'alpha_channel' => true,
                        'js_options'    => array(
                            'palettes'  => array( '#125', '#459', '#78b', '#ab0', '#de3', '#f0f' )
                        ),
                    ),
                    array(
                        'id'   => $prefix . 'client__2_right',
                        'name' => __( '&nbsp;'),
                        'type' => 'image_advanced',
                    ),
                    array(
                        'name'          => __( '&nbsp;'),
                        'id'            => $prefix . 'client__2_right_colour',
                        'desc'          => 'Client Name',
                        'type'          => 'color',
                        'alpha_channel' => true,
                        'js_options'    => array(
                            'palettes'  => array( '#125', '#459', '#78b', '#ab0', '#de3', '#f0f' )
                        ),
                    ),
                    array(
                        'id'   => $prefix . 'client__3_right',
                        'name' => __( '&nbsp;'),
                        'type' => 'image_advanced',
                    ),
                    array(
                        'name'          => __( '&nbsp;'),
                        'id'            => $prefix . 'client__3_right_colour',
                        'type'          => 'color',
                        'desc'          => 'Client Name',
                        'alpha_channel' => true,
                        'js_options'    => array(
                            'palettes'  => array( '#125', '#459', '#78b', '#ab0', '#de3', '#f0f' )
                        ),
                    ),
                ),
            ),
        ),
    );


//// Left Block
//$meta_boxes[] = array(
//        'title'      => __( 'Left Block', 'FH' ),
//        'post_types' => 'page',
//         'include'    => array(
//            'template'   => array( 'page-clients.php' ),
//         ),
//        'fields'     => array(
//        array(
//            'id'     => $prefix . 'testimonial_block_left',
//            'type'   => 'group',
//            'sort_clone' => true,
//            'clone' => true,
//            'fields' => array(
//                // First Block
//                array(
//                    'id'   => $prefix . 'client__1_left',
//                    'name' => __( 'Client Image Block (Left)'),
//                    'type' => 'image_advanced',
//                ),
//                array(
//                    'name'          => __( '&nbsp;'),
//                    'id'            => $prefix . 'client__1_left_colour_',
//                    'type'          => 'color',
//                    'desc'          => 'Client Name',
//                    'alpha_channel' => true,
//                    'js_options'    => array(
//                        'palettes'  => array( '#125', '#459', '#78b', '#ab0', '#de3', '#f0f' )
//                    ),
//                ),
//                array(
//                    'id'   => $prefix . 'client__2_left',
//                    'name' => __( '&nbsp;'),
//                    'type' => 'image_advanced',
//                ),
//                array(
//                    'name'          => __( '&nbsp;'),
//                    'id'            => $prefix . 'client__2_left_colour',
//                    'desc'          => 'Client Name',
//                    'type'          => 'color',
//                    'alpha_channel' => true,
//                    'js_options'    => array(
//                        'palettes'  => array( '#125', '#459', '#78b', '#ab0', '#de3', '#f0f' )
//                    ),
//                ),
//                array(
//                    'id'   => $prefix . 'client__3_left',
//                    'name' => __( '&nbsp;'),
//                    'type' => 'image_advanced',
//                ),
//                array(
//                    'name'          => __( '&nbsp;'),
//                    'id'            => $prefix . 'client__3_left_colour',
//                    'type'          => 'color',
//                    'desc'          => 'Client Name',
//                    'alpha_channel' => true,
//                    'js_options'    => array(
//                        'palettes'  => array( '#125', '#459', '#78b', '#ab0', '#de3', '#f0f' )
//                    ),
//                ),
//                array(
//                    'id'   => $prefix . 'client_image_left',
//                    'name' => __( '&nbsp;'),
//                    'desc' => 'Product Image',
//                    'type' => 'image_advanced',
//                ),
//                array(
//                    'id'   => $prefix . 'client_image_left_buyer',
//                    'name' => __( '&nbsp;'),
//                    'desc' => 'Product Buyer',
//                    'type' => 'text',
//                ),
//                // Second Block
//                array(
//                    'id'   => $prefix . 'client__1_left_lower',
//                    'name' => __( '&nbsp;'),
//                    'type' => 'image_advanced',
//                ),
//                array(
//                    'name'          => __( '&nbsp;'),
//                    'id'            => $prefix . 'client__1_left_colour_lower',
//                    'type'          => 'color',
//                    'desc'          => 'Client Name',
//                    'alpha_channel' => true,
//                    'js_options'    => array(
//                        'palettes'  => array( '#125', '#459', '#78b', '#ab0', '#de3', '#f0f' )
//                    ),
//                ),
//                array(
//                    'id'   => $prefix . 'client__2_left_lower',
//                    'name' => __( '&nbsp;'),
//                    'type' => 'image_advanced',
//                ),
//                array(
//                    'name'          => __( '&nbsp;'),
//                    'id'            => $prefix . 'client__2_left_colour_lower',
//                    'desc'          => 'Client Name',
//                    'type'          => 'color',
//                    'alpha_channel' => true,
//                    'js_options'    => array(
//                        'palettes'  => array( '#125', '#459', '#78b', '#ab0', '#de3', '#f0f' )
//                    ),
//                ),
//                array(
//                    'id'   => $prefix . 'client__3_left_lower',
//                    'name' => __( '&nbsp;'),
//                    'type' => 'image_advanced',
//                ),
//                array(
//                    'name'          => __( '&nbsp;'),
//                    'id'            => $prefix . 'client__3_left_colour_lower',
//                    'type'          => 'color',
//                    'desc'          => 'Client Name',
//                    'alpha_channel' => true,
//                    'js_options'    => array(
//                        'palettes'  => array( '#125', '#459', '#78b', '#ab0', '#de3', '#f0f' )
//                    ),
//                ),
//                array(
//                    'name'          => __( '&nbsp;'),
//                    'id'   => $prefix . 'client_testimonial_left',
//                    'desc' => 'Add a testimonial',
//                    'type' => 'wysiwyg',
//                ),
//                array(
//                    'name'          => __( '&nbsp;'),
//                    'id'   => $prefix . 'client_testimonial_left_person',
//                    'desc' => 'Person',
//                    'type' => 'text',
//                ),
//                array(
//                    'name'          => __( '&nbsp;'),
//                    'id'   => $prefix . 'client_testimonial_left_position',
//                    'desc' => 'Position',
//                    'type' => 'text',
//                ),
//                array(
//                    'name'          => __( '&nbsp;'),
//                    'id'   => $prefix . 'client_testimonial_left_company',
//                    'desc' => 'Company',
//                    'type' => 'text',
//                ),
//            ),
//        ),
//    ),
//);
//
//
//// Right Block
//    $meta_boxes[] = array(
//        'title'      => __( 'Right Block', 'FH' ),
//        'post_types' => 'page',
//        'include'    => array(
//            'template'   => array( 'page-clients.php' ),
//        ),
//        'fields'     => array(
//            array(
//                'id'     => $prefix . 'testimonial_block_right',
//                'type'   => 'group',
//                'sort_clone' => true,
//                'clone' => true,
//                'fields' => array(
//                    // First Block
//                    array(
//                        'name' => __( 'Client Image Block (Right)'),
//                        'id'   => $prefix . 'client_testimonial_right',
//                        'desc' => 'Add a testimonial',
//                        'type' => 'wysiwyg',
//                    ),
//                    array(
//                        'name'          => __( '&nbsp;'),
//                        'id'   => $prefix . 'client_testimonial_right_person',
//                        'desc' => 'Person',
//                        'type' => 'text',
//                    ),
//                    array(
//                        'name'          => __( '&nbsp;'),
//                        'id'   => $prefix . 'client_testimonial_right_position',
//                        'desc' => 'Position',
//                        'type' => 'text',
//                    ),
//                    array(
//                        'name'          => __( '&nbsp;'),
//                        'id'   => $prefix . 'client_testimonial_right_company',
//                        'desc' => 'Company',
//                        'type' => 'text',
//                    ),
//                    array(
//                        'id'   => $prefix . 'client__1_right',
//                        'name' => __( '&nbsp;'),
//                        'type' => 'image_advanced',
//                    ),
//                    array(
//                        'name'          => __( '&nbsp;'),
//                        'id'            => $prefix . 'client__1_right_colour',
//                        'type'          => 'color',
//                        'desc'          => 'Client Name',
//                        'alpha_channel' => true,
//                        'js_options'    => array(
//                            'palettes'  => array( '#125', '#459', '#78b', '#ab0', '#de3', '#f0f' )
//                        ),
//                    ),
//                    array(
//                        'id'   => $prefix . 'client__2_right',
//                        'name' => __( '&nbsp;'),
//                        'type' => 'image_advanced',
//                    ),
//                    array(
//                        'name'          => __( '&nbsp;'),
//                        'id'            => $prefix . 'client__2_right_colour',
//                        'desc'          => 'Client Name',
//                        'type'          => 'color',
//                        'alpha_channel' => true,
//                        'js_options'    => array(
//                            'palettes'  => array( '#125', '#459', '#78b', '#ab0', '#de3', '#f0f' )
//                        ),
//                    ),
//                    array(
//                        'id'   => $prefix . 'client__3_right',
//                        'name' => __( '&nbsp;'),
//                        'type' => 'image_advanced',
//                    ),
//                    array(
//                        'name'          => __( '&nbsp;'),
//                        'id'            => $prefix . 'client__3_right_colour',
//                        'type'          => 'color',
//                        'desc'          => 'Client Name',
//                        'alpha_channel' => true,
//                        'js_options'    => array(
//                            'palettes'  => array( '#125', '#459', '#78b', '#ab0', '#de3', '#f0f' )
//                        ),
//                    ),
//                    array(
//                        'id'   => $prefix . 'client__4_right',
//                        'name' => __( '&nbsp;'),
//                        'type' => 'image_advanced',
//                    ),
//                    array(
//                        'name'          => __( '&nbsp;'),
//                        'id'            => $prefix . 'client__4_right_colour',
//                        'type'          => 'color',
//                        'desc'          => 'Client Name',
//                        'alpha_channel' => true,
//                        'js_options'    => array(
//                            'palettes'  => array( '#125', '#459', '#78b', '#ab0', '#de3', '#f0f' )
//                        ),
//                    ),
//                    array(
//                        'id'   => $prefix . 'client__5_right',
//                        'name' => __( '&nbsp;'),
//                        'type' => 'image_advanced',
//                    ),
//                    array(
//                        'name'          => __( '&nbsp;'),
//                        'id'            => $prefix . 'client__5_right_colour',
//                        'type'          => 'color',
//                        'desc'          => 'Client Name',
//                        'alpha_channel' => true,
//                        'js_options'    => array(
//                            'palettes'  => array( '#125', '#459', '#78b', '#ab0', '#de3', '#f0f' )
//                        ),
//                    ),
//                    // Second Block
//                    array(
//                        'id'   => $prefix . 'client_image_right',
//                        'name' => __( '&nbsp;'),
//                        'desc' => 'Product Image',
//                        'type' => 'image_advanced',
//                    ),
//                    array(
//                        'id'   => $prefix . 'client_image_right_buyer',
//                        'name' => __( '&nbsp;'),
//                        'desc' => 'Product Buyer',
//                        'type' => 'text',
//                    ),
//                    array(
//                        'id'   => $prefix . 'client__1_right_lower',
//                        'name' => __( '&nbsp;'),
//                        'type' => 'image_advanced',
//                    ),
//                    array(
//                        'name'          => __( '&nbsp;'),
//                        'id'            => $prefix . 'client__1_right_colour_lower',
//                        'type'          => 'color',
//                        'desc'          => 'Client Name',
//                        'alpha_channel' => true,
//                        'js_options'    => array(
//                            'palettes'  => array( '#125', '#459', '#78b', '#ab0', '#de3', '#f0f' )
//                        ),
//                    ),
//                    array(
//                        'id'   => $prefix . 'client__2_right_lower',
//                        'name' => __( '&nbsp;'),
//                        'type' => 'image_advanced',
//                    ),
//                    array(
//                        'name'          => __( '&nbsp;'),
//                        'id'            => $prefix . 'client__2_right_colour_lower',
//                        'desc'          => 'Client Name',
//                        'type'          => 'color',
//                        'alpha_channel' => true,
//                        'js_options'    => array(
//                            'palettes'  => array( '#125', '#459', '#78b', '#ab0', '#de3', '#f0f' )
//                        ),
//                    ),
//                    array(
//                        'id'   => $prefix . 'client__3_right_lower',
//                        'name' => __( '&nbsp;'),
//                        'type' => 'image_advanced',
//                    ),
//                    array(
//                        'name'          => __( '&nbsp;'),
//                        'id'            => $prefix . 'client__3_right_colour_lower',
//                        'type'          => 'color',
//                        'desc'          => 'Client Name',
//                        'alpha_channel' => true,
//                        'js_options'    => array(
//                            'palettes'  => array( '#125', '#459', '#78b', '#ab0', '#de3', '#f0f' )
//                        ),
//                    ),
//                    array(
//                        'id'   => $prefix . 'client__4_right_lower',
//                        'name' => __( '&nbsp;'),
//                        'type' => 'image_advanced',
//                    ),
//                    array(
//                        'name'          => __( '&nbsp;'),
//                        'id'            => $prefix . 'client__4_right_colour_lower',
//                        'type'          => 'color',
//                        'desc'          => 'Client Name',
//                        'alpha_channel' => true,
//                        'js_options'    => array(
//                            'palettes'  => array( '#125', '#459', '#78b', '#ab0', '#de3', '#f0f' )
//                        ),
//                    ),
//                    array(
//                        'id'   => $prefix . 'client__5_right_lower',
//                        'name' => __( '&nbsp;'),
//                        'type' => 'image_advanced',
//                    ),
//                    array(
//                        'name'          => __( '&nbsp;'),
//                        'id'            => $prefix . 'client__5_right_colour_lower',
//                        'type'          => 'color',
//                        'desc'          => 'Client Name',
//                        'alpha_channel' => true,
//                        'js_options'    => array(
//                            'palettes'  => array( '#125', '#459', '#78b', '#ab0', '#de3', '#f0f' )
//                        ),
//                    ),
//                ),
//            ),
//        ),
//    );


/*-------
*  CPT
-------*/
/**
 * Portfolio
 */
   $meta_boxes[] = array(
       'title'      => __( 'Portfolio Piece', 'FH' ),
       'post_types' => 'portfolio-pieces',
       'fields'     => array(
           array(
               'id'   => $prefix . 'portfolio_piece',
               'name' => __( 'Piece', 'FH' ),
               'desc' => 'Recommended dimensions: <br /> 1250px (width) by 2014px (height)',
               'type' => 'image_advanced'
           ),      
       ),
   ); 

/**
 * Exhibitions
 */
   $meta_boxes[] = array(
       'title'      => __( 'Exhibition Link', 'FH' ),
       'post_types' => 'exhibitions',
       'fields'     => array(
           array(
               'id'   => $prefix . 'exhibition_link_to',
               'name' => __( 'Link to Exhibition', 'FH' ),
               'type' => 'text'
           ),      
       ),
   );          

    return $meta_boxes;
}    
