<?php
function disqus_embed($disqus_shortname) {
global $post;
wp_enqueue_script('disqus_embed','http://'.$disqus_shortname.'.disqus.com/embed.js');
echo '<div id=”disqus_thread”></div>
<script type=”text/javascript”>
var disqus_shortname = '.$disqus_shortname.';
var disqus_title = '.$post->post_title.';
var disqus_url = '.get_permalink($post->ID).';
var disqus_identifier = '.$disqus_shortname.'-'.$post->ID.';
</script>';
}
if ( file_exists(  __DIR__ . '/cmb2/init.php' ) ) {

	require_once  __DIR__ . '/cmb2/init.php';

} elseif ( file_exists(  __DIR__ . '/CMB2/init.php' ) ) {

	require_once  __DIR__ . '/CMB2/init.php';

}



function cmb2_hide_if_no_cats( $field ) {

	// Don't show this field if not in the cats category

	if ( ! has_tag( 'cats', $field->object_id ) ) {

		return false;

	}

	return true;

}


add_filter( 'cmb2_meta_boxes', 'cmb2_sample_metaboxes' );

function cmb2_sample_metaboxes( array $meta_boxes ) {

	$prefix = '';

    	//////////////////////////////////////
    
    	// show online
    
    	//////////////////////////////////////
    
    	$meta_boxes['seoMachine'] = array(
    
    		'id'            => 'seoMachine',
    
    		'title'         => __( 'Arshive Settings', 'cmb' ),
    
    		'object_types'  => array( 'post' , 'page', 'matches', ), // Post type
    
    		'context'       => 'normal',
    
    		'priority'      => 'high',
    
    		'show_names'    => true, // Show field names on the left
    
    		'fields'     => array(
    			array(
    				'name' => 'Topic Title',
    				'id'   => 'name_seo',
    				'type' => 'text',
    			),
    			array(
    				'name' => 'Topic Description',
    				'id'   => 'desc_seo',
    				'type' => 'textarea',
    			),
    			array(
    				'name' => 'Topic Tags',
    				'id'   => 'tags_seo',
    				'type' => 'text',
    			),
    
    			array(
    				'name' => 'Share Image',
    				'id'   => 'img_social',
    				'type' => 'file',
    			),
    		),
    	);
    
    	//////////////////////////////////////
    
    	// show online
    
    	//////////////////////////////////////

    	$meta_boxes['video_optWs'] = array(

		'id'            => 'video_optWs',

		'title'         => __( 'Video Settings', 'cmb' ),

		'object_types'  => array( 'post' ), // Post type

		'context'       => 'normal',

		'priority'      => 'high',

		'show_names'    => true, // Show field names on the left

		'fields'     => array(

			array(

				'name' => __('Video Embed Code' , 'YourColor'),

				'id' => $prefix . 'embedCode' ,

				'type' => 'textarea_code',

			),
			array(

				'name' => __('Album' , 'YourColor'),

				'id' => $prefix . 'album' ,

				'type' => 'file_list',

			),
            array(

                'name' => __('News Title' , 'YourColor'),

                'id' => $prefix . 'latest-news' ,

                'type' => 'text',

            ),
            array(

                'name' => __('Read Latest News' , 'YourColor'),

                'id' => $prefix . 'newsHead' ,

                'type' => 'textarea_code',

            ),

		),

	);

    	$meta_boxes['servers_replace_option'] = array(

		'id'            => 'servers_replace_option',

		'title'         => __( 'Replaceing Settings', 'cmb' ),

		'object_types'  => array( 'servers' ), // Post type

		'context'       => 'normal',

		'priority'      => 'high',

		'show_names'    => true, // Show field names on the left

		'fields'     => array(

			array(

				'name' => __('Main Video Link' , 'YourColor'),

				'id' => $prefix . 'original_url' ,

				'type' => 'text_url',

			),

			array(

				'id'          => 'replaces',

				'type'        => 'group',

				'options'     => array(

					'group_title'   => __( 'كلمة رقم {#}', 'cmb2' ), // {#} gets replaced by row number

					'add_button'    => __( 'Add New Replacement', 'cmb2' ),

					'remove_button' => __( 'Remove Replacement', 'cmb2' ),

					'sortable'      => false, // beta

				),

				// Fields array works the same, except id's only need to be unique for this group. Prefix is not needed.

				'fields'      => array(

					array(

						'name' => 'Word To Remove ',

						'id'   => 'gene',

						'type' => 'text',

					),

				),

			),

		),

	);


        $meta_boxes['album_fileds_post'] = array(
        
        'id'            => 'album_fileds_post',
        
        'title'         => __( 'Album Info', 'cmb' ),
        
        'object_types'  => array( 'album', ), // Post type
        
        'context'       => 'normal',
        
        'priority'      => 'high',
        
        'show_names'    => true, // Show field names on the left
        
        'fields'     => array(
        				array(
        				'id'          => 'watch',
        				'type'        => 'group',
        				'options'     => array(
        				'group_title'   => __( 'معلومات اضافية {#}', 'cmb2' ), // {#} gets replaced by row number
        				'add_button'    => __( 'اضافة معلومات ', 'cmb2' ),
        				'remove_button' => __( 'ازالة المعلومات', 'cmb2' ),
        				'sortable'      => true, // beta
        				),
        				// Fields array works the same, except id's only need to be unique for this group. Prefix is not needed.
        				'fields'      => array(
        				array(
        				'name' => 'Title',
        				'id'   => 'albumTitle',
        				'type' => 'text',
        				),
        			    array(
        				'name' => 'Details',
        				'id'   => 'albumDetails',
        				'type' => 'textarea',
        				),
        				),
        				),
        			),
        
        
        
        
        );
        
        $meta_boxes['album_fileds_post1'] = array(
        
        'id'            => 'album_fileds_post1',
        
        'title'         => __( 'Team Work Info', 'cmb' ),
        
        'object_types'  => array( 'teamwork' ), // Post type
        
        'context'       => 'normal',
        
        'priority'      => 'high',
        
        'show_names'    => true, // Show field names on the left
        
        'fields'     => array(
            				array(
            				'id'          => 'teamData',
            				'type'        => 'group',
            				'options'     => array(
            				'group_title'   => __( 'معلومات اضافية {#}', 'cmb2' ), // {#} gets replaced by row number
            				'add_button'    => __( 'Add Info', 'cmb2' ),
            				'remove_button' => __( 'Remove Info', 'cmb2' ),
            				'sortable'      => true, // beta
            				),
            				// Fields array works the same, except id's only need to be unique for this group. Prefix is not needed.
            				'fields'      => array(
            				array(
            				'name' => 'Title',
            				'id'   => 'albumTitle',
            				'type' => 'text',
            				),
            			    array(
            				'name' => 'Details',
            				'id'   => 'albumDetails',
            				'type' => 'text',
            				),
            				),
            				),
            			),
        
        
        
        
        );
        
        // Add other metaboxes as needed
        
        $meta_boxes['clients_post'] = array(
        
        'id'            => 'clients_post',
        
        'title'         => __( 'Client Info', 'cmb' ),
        
        'object_types'  => array( 'client' ), // Post type
        
        'context'       => 'normal',
        
        'priority'      => 'high',
        
        'show_names'    => true, // Show field names on the left
        
        'fields'     => array(
        
        array(
        
        'name' => __('Client Name' , 'YourColor'),
        
        'id' => 'clientName' ,
        
        'type' => 'text',
        
        ),
        array(
        
        'name' => __('Job Title' , 'YourColor'),
        
        'id' =>'clientJob' ,
        
        'type' => 'text',
        
        ),
        
        ),
        
        
        );
        
        $meta_boxes['client_image_post'] = array(
        
        'id'            => 'client_image_post',
        
        'title'         => __( 'Photo', 'cmb' ),
        
        'object_types'  => array( 'client','teamwork' ), // Post type
        
        'context'       => 'normal',
        
        'priority'      => 'high',
        
        'show_names'    => true, // Show field names on the left
        
        'fields'     => array(
        array(
        'name'    => 'Client Photo',
        'id'      => 'client_image',
        'type'    => 'file',
        // Optional:
        'options' => array(
        'url' => false, // Hide the text input for the url
        ),
        'text'    => array(
        'add_upload_file_text' => 'Add File' // Change upload button text. Default: "Add or Upload File"
        ),
        // query_args are passed to wp.media's library query.
        'query_args' => array(
        'type' => 'application/pdf', // Make library only display PDFs.
        // Or only allow gif, jpg, or png images
        // 'type' => array(
        // 	'image/gif',
        // 	'image/jpeg',
        // 	'image/png',
        // ),
        ),
        ),
        
        
        
        ),
        
        
        );
        
        $meta_boxes['teamwork_post'] = array(
        
        'id'            => 'teamwork_post',
        
        'title'         => __( 'Team Work Info', 'cmb' ),
        
        'object_types'  => array( 'teamwork' ), // Post type
        
        'context'       => 'normal',
        
        'priority'      => 'high',
        
        'show_names'    => true, // Show field names on the left
        
        'fields'     => array(
        
            array(
            
            'name' => __('Name' , 'YourColor'),
            
            'id' => 'teamName' ,
            
            'type' => 'text',
            
            ),
            array(
            
            'name' => __('Job Title' , 'YourColor'),
            
            'id' =>'job' ,
            
            'type' => 'text',
            
            ),
             		 array(
            
            'name' => __('Facebook Link' , 'YourColor'),
            
            'id' =>'facebook' ,
            
            'type' => 'text',
            
            ),
             		 			 array(
            
            'name' => __('Twitter Link' , 'YourColor'),
            
            'id' =>'twitter' ,
            
            'type' => 'text',
            
            ),
             		 			 			 array(
            
            'name' => __('Youtube Link' , 'YourColor'),
            
            'id' =>'youtube' ,
            
            'type' => 'text',
            
            ),
             		 			 			 			 array(
            
            'name' => __('Google Plus Link' , 'YourColor'),
            
            'id' =>'لخخلمثحمعس' ,
            
            'type' => 'text',
            
            ),
        
        ),
        
        );
        
        $meta_boxes['slider_post'] = array(
        
        'id'            => 'slider_post',
        
        'title'         => __( 'Article Link', 'cmb' ),
        
        'object_types'  => array( 'slider' ), // Post type
        
        'context'       => 'normal',
        
        'priority'      => 'high',
        
        'show_names'    => true, // Show field names on the left
        
        'fields'     => array(
        array(
        
        'name' => __('First Link Name' , 'YourColor'),
        
        'id' => 'slider_url_1_name' ,
        
        'type' => 'text',
        
        ),
        array(
        
        'name' => __('First Link' , 'YourColor'),
        
        'id' => 'slider_url_1' ,
        
        'type' => 'text_url',
        
        ),
        array(
        
        'name' => __('Second Link Name' , 'YourColor'),
        
        'id' => 'slider_url_2_name' ,
        
        'type' => 'text',
        
        ),
        array(
        
        'name' => __('Second Link' , 'YourColor'),
        
        'id' => 'slider_url_2' ,
        
        'type' => 'text_url',
        
        ),
        
        
        ),
        
        );
        
        $meta_boxes['album_client_post'] = array(
        
        'id'            => 'album_client_post',
        
        'title'         => __( 'Client Info', 'cmb' ),
        
        'object_types'  => array( 'album' ), // Post type
        
        'context'       => 'normal',
        
        'priority'      => 'high',
        
        'show_names'    => true, // Show field names on the left
        
        'fields'     => array(
            array(
            'name' => __('Album' , 'YourColor'),
            'id' => $prefix . 'album' ,
            'type' => 'file_list',
            ),
            array(
            'name' => __('Client Name' , 'YourColor'),
            'id' => 'client_name' ,
            'type' => 'text',
            ),
    		array(
                'name' => __('Sharing Date' , 'YourColor'),
                'id' =>'album_time' ,
                'type' => 'text',
                
                ),
                
        ),
        
        );

///////////////////////////////////////////// offer Form ////////////////////////////////////////

        $meta_boxes['offer_post'] = array(
        
        'id'            => 'offer_post',
        
        'title'         => __( 'Your Order Info', 'cmb' ),
        
        'object_types'  => array( 'offer' ), // Post type
        
        'context'       => 'normal',
        
        'priority'      => 'high',
        
        'show_names'    => true, // Show field names on the left
        
        'fields'     => array(
        
            array(
            
            'name' => __('Project name  ' , 'YourColor'),
            
            'id' => 'projectname' ,
            
            'type' => 'text',
            
            ),
            array(
            
            'name' => __('Client name' , 'YourColor'),
            
            'id' =>'clientname' ,
            
            'type' => 'text',
            
            ),
            array(
            
            'name' => __('Rooms#' , 'YourColor'),
            
            'id' =>'rooms' ,
            
            'type' => 'text',
            
            ),
            array(
            
            'name' => __('Number of doors' , 'YourColor'),
            
            'id' =>'numofdoors' ,
            
            'type' => 'text',
            
            ),
            array(
            
            'name' => __('Area of windows in m2' , 'YourColor'),
            
            'id' =>'areawindows' ,
            
            'type' => 'text',
            
            ),
            array(
            
            'name' => __('% with order' , 'YourColor'),
            
            'id' =>'orderpercent' ,
            
            'type' => 'text',
            
            ),
            array(
            
            'name' => __('% after delivery' , 'YourColor'),
            
            'id' =>'deliverypercent' ,
            
            'type' => 'text',
            
            ),
            array(
            
            'name' => __('% after finishing' , 'YourColor'),
            
            'id' =>'finishingpercent' ,
            
            'type' => 'text',
            
            ),
            array(
            
            'name' => __('Delivery in weeks' , 'YourColor'),
            
            'id' =>'deliveryweeks' ,
            
            'type' => 'text',
            
            ),
            array(
            
            'name' => __('Enosh Panel pounds' , 'YourColor'),
            
            'id' =>'enoshpanel1' ,
            
            'type' => 'text',
            
            ),
            array(
            
            'name' => __('Enosh Panel piasters' , 'YourColor'),
            
            'id' =>'enoshpanel2' ,
            
            'type' => 'text',
            
            ),
            array(
            
            'name' => __('Enosh Wall pounds' , 'YourColor'),
            
            'id' =>'enoshwall1' ,
            
            'type' => 'text',
            
            ),
            array(
            
            'name' => __('Enosh Wall piasters' , 'YourColor'),
            
            'id' =>'enoshwall2' ,
            
            'type' => 'text',
            
            ),
            array(
            
            'name' => __('Enosh Ceiling pounds' , 'YourColor'),
            
            'id' =>'enoshceiling1' ,
            
            'type' => 'text',
            
            ),
            array(
            
            'name' => __('Enosh Ceiling piasters' , 'YourColor'),
            
            'id' =>'enoshceiling2' ,
            
            'type' => 'text',
            
            ),
            array(
            
            'name' => __('Enosh Ceiling Tiles pounds' , 'YourColor'),
            
            'id' =>'enoshceilingtiles1' ,
            
            'type' => 'text',
            
            ),
            array(
            
            'name' => __('Enosh Ceiling Tiles piasters' , 'YourColor'),
            
            'id' =>'enoshceilingtiles2' ,
            
            'type' => 'text',
            
            ),
            array(
            
            'name' => __('Enosh Painting pounds' , 'YourColor'),
            
            'id' =>'enoshpainting1' ,
            
            'type' => 'text',
            
            ),
            array(
            
            'name' => __('Enosh Painting piasters' , 'YourColor'),
            
            'id' =>'enoshpainting2' ,
            
            'type' => 'text',
            
            ),
            array(
            
            'name' => __('Acoustic Window pounds' , 'YourColor'),
            
            'id' =>'acousticwindow1' ,
            
            'type' => 'text',
            
            ),
            array(
            
            'name' => __('Acoustic Window piasters' , 'YourColor'),
            
            'id' =>'acousticwindow2' ,
            
            'type' => 'text',
            
            ),
            array(
            
            'name' => __('Isolation of Floor pounds' , 'YourColor'),
            
            'id' =>'isolationfloor1' ,
            
            'type' => 'text',
            
            ),
            array(
            
            'name' => __('Isolation of Floor piasters' , 'YourColor'),
            
            'id' =>'isolationfloor2' ,
            
            'type' => 'text',
            
            ),
            array(
            
            'name' => __('Enosh Door pounds' , 'YourColor'),
            
            'id' =>'enoshdoor1' ,
            
            'type' => 'text',
            
            ),
            array(
            
            'name' => __('Enosh Door piasters' , 'YourColor'),
            
            'id' =>'enoshdoor2' ,
            
            'type' => 'text',
            
            ),
            
        ),
        
        );



///////////////////////////////////////////// offer Total Area  ////////////////////////////////////////

         $meta_boxes['Total Area (m2)'] = array(
        
        'id'            => 'Total Area (m2)',
        
        'title'         => __( 'مTotal Area (m2)', 'cmb' ),
        
        'object_types'  => array( 'offer' ), // Post type
        
        'context'       => 'normal',
        
        'priority'      => 'high',
        
        'show_names'    => true, // Show field names on the left
        
        'fields'     => array(
        
            array(
            
            'name' => __('Wall Area' , 'YourColor'),
            
            'id' => 'wallarea' ,
            
            'type' => 'text',
            
            ),
            array(
            
            'name' => __('Ceiling Area' , 'YourColor'),
            
            'id' =>'ceilingarea' ,
            
            'type' => 'text',
            
            ),

        ),
        
        );


///////////////////////////////////////////// offer Room Dimensions ////////////////////////////////////////


          $meta_boxes['Room Dimensions'] = array(
        
        'id'            => 'Room Dimensions',
        
        'title'         => __( 'Room Dimensions', 'cmb' ),
        
        'object_types'  => array( 'offer' ), // Post type
        
        'context'       => 'normal',
        
        'priority'      => 'high',
        
        'show_names'    => true, // Show field names on the left
        
        'fields'     => array(
        
            array(
            
            'name' => __('Height' , 'YourColor'),
            
            'id' => 'height' ,
            
            'type' => 'text',
            
            ),
            array(
            
            'name' => __('Width' , 'YourColor'),
            
            'id' =>'width' ,
            
            'type' => 'text',
            
            ),
            array(
            
            'name' => __('Length' , 'YourColor'),
            
            'id' =>'length' ,
            
            'type' => 'text',
            
            ),
        
        ),
        
        );

        
	return $meta_boxes;

}

