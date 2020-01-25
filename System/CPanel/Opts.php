<?
$Opts = array();
$Opts[] = array(
	'name'   =>   'General Settings',
	'id'     =>   'General',
	'type'   =>   'title',
	'icon'   =>   'fa-dashboard',
);
$Opts[] = array(
	'name'   =>   'Dark Logo',
	'id'     =>   'logodark',
	'type'   =>   'upload',
);
$Opts[] = array(
	'name'   =>   'Light Logo',
	'id'     =>   'logoLight',
	'type'   =>   'upload',
);
$Opts[] = array(
	'name'   =>   'Loading Image',
	'id'     =>   'loading',
	'type'   =>   'upload',

);
$Opts[] = array(
	'name'   =>   'Website Fav Icon',
	'id'     =>   'favicon',
	'type'   =>   'upload',
);
$Opts[] = array(
	'name'   =>   'Website Background',
	'id'     =>   'backImg',
	'type'   =>   'upload',
);


$Opts[] = array(
	'name'   =>   'Title',
	'id'     =>   'HomeTitle',
	'type'   =>   'text',
);
$Opts[] = array(
	'name'   =>   'Title Description',
	'id'     =>   'HomeTitleDescripe',
	'type'   =>   'textarea_code',
);
$Opts[] = array(
	'name'   =>   'Content',
	'id'     =>   'HomeContent',
	'type'   =>   'textarea_code',
);
$Opts[] = array(
	'name'   =>   'Link',
	'id'     =>   'Homelink',
	'type'   =>   'text',
);
$Opts[] = array(
	'name'   =>   'Date',
	'id'     =>   'Homedate',
	'type'   =>   'text',
);
$Opts[] = array(
	'name'   =>   'Client Status',
	'id'     =>   'HomeApproval',
	'type'   =>   'text',
);
$Opts[] = array(
	'name'   =>   'Client',
	'id'     =>   'HomeCustomer',
	'type'   =>   'text',
);
$Opts[] = array(
	'name'   =>   'Client Comment',
	'id'     =>   'HomeExplain',
	'type'   =>   'textarea_code',
);
$Opts[] = array(
	'name'   =>   'Contact With Us',
	'id'     =>   'contactHeadline',
	'type'   =>   'text',
);
$Opts[] = array(
	'name'   =>   'Do not Be Ashame Of Contacting Us' ,
	'id'     =>   'contactLine',
	'type'   =>   'text',
);
$Opts[] = array(
	'name'   =>   'Contacting Text',
	'id'     =>   'contactExplain',
	'type'   =>   'textarea_code',
);
$Opts[] = array(
	'name'   =>   'Add Image',
	'id'     =>   'leftSideImg',
	'type'   =>   'upload',
);
$Opts[] = array(
	'name'   =>   'News Title',
	'id'     =>   'news-Title',
	'type'   =>   'text',
);
$Opts[] = array(
	'name'   =>   'News Description',
	'id'     =>   'read-News',
	'type'   =>   'textarea_code',
);
$Opts[] = array(
	'name'   =>   'Percent 1',
	'id'     =>   'percent1',
	'type'   =>   'text',
);
$Opts[] = array(
	'name'   =>   'Percent 2',
	'id'     =>   'percent2',
	'type'   =>   'text',
);
$Opts[] = array(
	'name'   =>   'Percent 3',
	'id'     =>   'percent3',
	'type'   =>   'text',
);
$Opts[] = array(
	'name'   =>   'Add Time',
	'id'     =>   'timenews',
	'type'   =>   'text',
);
$Opts[] = array(
	'name'   =>   'Add Icon',
	'id'     =>   'timeicon',
	'type'   =>   'text',
);
$Opts[] = array(
	'name'   =>   'Add News Title',
	'id'     =>   'image-news-title',
	'type'   =>   'text',
);
$Opts[] = array(
	'name'   =>   'Add Publisher',
	'id'     =>   'publish',
	'type'   =>   'text',
);
$Opts[] = array(
	'name'   =>   'About Company',
	'id'     =>   'about',
	'type'   =>   'text',
);
$Opts[] = array(
	'name'   =>   'Company Word',
	'id'     =>   'word',
	'type'   =>   'text',
);
$Opts[] = array(
	'name'   =>   'Company Blog',
	'id'     =>   'note-Title',
	'type'   =>   'text',
);
$Opts[] = array(
	'name'   =>   'Blog Descrription',
	'id'     =>   'note-News',
	'type'   =>   'text',
);
$Opts[] = array(
	'name'   =>   'Faqs',
	'id'     =>   'questions',
	'type'   =>   'text',
);
$Opts[] = array(
	'name'   =>   'Our Albums',
	'id'     =>   'albumTitle',
	'type'   =>   'text',
);
$Opts[] = array(
	'name'   =>   'Album Description',
	'id'     =>   'albumDefinition',
	'type'   =>   'text',
);
///////////////////////////////
///////////////////////////////
///////////////////////////////
$Opts[] = array(
	'name'   =>   'Social Settings',
	'id'     =>   'SocialNetwork',
	'type'   =>   'title',
	'icon'   =>   'fa-share',
);
///////////////////////////////
$Opts[] = array(
	'name'   =>   'Facebook',
	'id'     =>   'facebook',
	'type'   =>   'text',
);
$Opts[] = array(
	'name'   =>   'Youtube',
	'id'     =>   'youtube',
	'type'   =>   'text',
);
$Opts[] = array(
	'name'   =>   'Twitter',
	'id'     =>   'twitter',
	'type'   =>   'text',
);
$Opts[] = array(
	'name'   =>   'Google+',
	'id'     =>   'googleplus',
	'type'   =>   'text',
);
///////////////////////////////
///////////////////////////////
///////////////////////////////
$Opts[] = array(
	'name'   =>   'SEO',
	'id'     =>   'seo',
	'type'   =>   'title',
	'icon'   =>   'fa-code',
);
$Opts[] = array(
	'name'   =>   'Meta title',
	'id'     =>   'metatitle',
	'type'   =>   'text',
	'width'  =>   '80%',
	'beside' =>   array(
		array(
			'name'   =>   'Appear ?',
			'id'     =>   'show_title',
			'type'   =>   'select',
			'options'=>   array(
				'on' => 'Appear',
				'off'=> 'Hide'
			)
		),
	),
);
$Opts[] = array(
	'name'   =>   'Meta keywords',
	'id'     =>   'keywords',
	'type'   =>   'text',
	'width'  =>   '80%',
	'beside' =>   array(
		array(
			'name'   =>   'Appear ?',
			'id'     =>   'show_keywords',
			'type'   =>   'select',
			'options'=>   array(
				'on' => 'Appear',
				'off'=> 'Hide'
			)
		),
	),
);
$Opts[] = array(
	'name'   =>   'Meta description',
	'id'     =>   'description',
	'type'   =>   'text',
	'width'  =>   '80%',
	'beside' =>   array(
		array(
			'name'   =>   'Appear ?',
			'id'     =>   'show_description',
			'type'   =>   'select',
			'options'=>   array(
				'on' => 'Appear',
				'off'=> 'Hide'
			)
		),
	),
);
$Opts[] = array(
	'name'   =>   '404 Title',
	'id'     =>   'title404',
	'type'   =>   'text',
	'width'  =>   '80%',
	'beside' =>   array(
		array(
			'name'   =>   'Appear ?',
			'id'     =>   'show_title404',
			'type'   =>   'select',
			'options'=>   array(
				'on' => 'Appear',
				'off'=> 'Hide'
			)
		),
	),
);

///////////////////////////////////
		// Item Tabs Id = contact info
/////////////////////////////

$Opts[] = array(
	'name'   =>   'Contacting Info',
	'id'     =>   'contactInfo',
	'type'   =>   'title',
	'icon'   =>   'fa-th',
);

	$Opts[] = array(
		'name' => 'Address',
		'type' => 'text',
		'id'  => 'contact_id',

	);	
		$Opts[] = array(
		'name' => 'Email',
		'type' => 'text',
		 'id'  => 'contact_email',
	);	
		$Opts[] = array(
		'name' => 'Fax',
		'type' => 'text',
		 'id'  => 'contact_fax',
	);	
		$Opts[] = array(
		'name' => 'Mobile',
		'type' => 'text',
		 'id'  => 'contact_mob',
	);	
		$Opts[] = array(
		'name' => 'Website',
		'type' => 'text',
		 'id'  => 'contact_web',
	);	

///////////////////////////////
///////////////////////////////
///////////////////////////////

$Opts[] = array(
	'name'   =>   'News Page Advertisments',
	'id'     =>   'HomePage',
	'type'   =>   'title',
	'icon'   =>   'fa-th',
);
$Opts[] = array(
		'name' => 'Before Content Advertisment 720*90',
		'id' => 'SinglePages_1',
		'type' => 'textarea_code',
	);
		$Opts[] = array(
		'name' => 'Mobile Before Content Advertisment',
		'id' => 'SinglePages_1_mob',
		'type' => 'textarea_code',
	);
	 $Opts[] = array(
		'name' => 'Content End Advertisment 720*90',
		'id' => 'SinglePages_4',
		'type' => 'textarea_code',
	);
	 	 $Opts[] = array(
		'name' => 'Mobile Content End Advertisment',
		'id' => 'SinglePages_4_mob',
		'type' => 'textarea_code',
	);
	 	 $Opts[] = array(
		'name' => 'Before Comments Advertisment 720*90',
		'id' => 'SinglePages_5',
		'type' => 'textarea_code',
	);
	$Opts[] = array(
		'name' => 'Mobile Before Comments Advertisment',
		'id' => 'SinglePages_5_mob',
		'type' => 'textarea_code',
	);
	$Opts[] = array(
		'name' => 'Side List Advertisment Before Choosen Articles 300*250',
		'id' => 'SinglePages_2',
		'type' => 'textarea_code',
	);
///////////////////////////////////////////////////
	///// album single ads
	/////////////////////////////////////////////////
$Opts[] = array(
	'name'   =>   'Album Page Advertisments',
	'id'     =>   'album',
	'type'   =>   'title',
	'icon'   =>   'fa-th',
);
		$Opts[] = array(
		'name' => 'Advertisment Before Album Photos',
		'id' => 'album_1',
		'type' => 'textarea_code',
	);
	  $Opts[] = array(
		'name' => 'Advertisment After Mobile Album Photos',
		'id' => 'album_1_mob',
		'type' => 'textarea_code',
	);
	  $Opts[] = array(
		'name' => 'Advertisment After Album Photos',
		'id' => 'album_2',
		'type' => 'textarea_code',
	);
	 $Opts[] = array(
		'name' => 'Advertisment Before Mobile Album Photos',
		'id' => 'album_2_mob',
		'type' => 'textarea_code',
	);
	///////////////////////////////////////////////////
	///// service  single ads
	/////////////////////////////////////////////////
$Opts[] = array(
	'name'   =>   'Services Page Advertisments',
	'id'     =>   'service',
	'type'   =>   'title',
	'icon'   =>   'fa-th',
);
		$Opts[] = array(
		'name' => 'After Service Advertisment',
		'id' => 'service_1',
		'type' => 'textarea_code',
	);
	  $Opts[] = array(
		'name' => 'After Mobile Service Advertisment',
		'id' => 'service_1_mob',
		'type' => 'textarea_code',
	);

	///////////////////////////////////////////////////
	///// blog , archive and search ads
	/////////////////////////////////////////////////
		$Opts[] = array(
			'name'   =>   'Blog , Archiv And Blog Pages Advertisments',
			'id'     =>   'blog',
			'type'   =>   'title',
			'icon'   =>   'fa-th',
		);
		$Opts[] = array(
		'name' => 'Before Content Advertisment',
		'id' => 'blog_1',
		'type' => 'textarea_code',
	);
	  $Opts[] = array(
		'name' => 'Before Mobile Content Advertisment',
		'id' => 'blog_1_mob',
		'type' => 'textarea_code',
	);
		$Opts[]  = array(
		'name' => 'After Content Advertisment',
		'id' => 'blog_2',
		'type' => 'textarea_code',
	);
	  $Opts[]  = array(
		'name' => 'After Mobile Content Advertisment',
		'id' => 'blog_2_mob',
		'type' => 'textarea_code',
	);
/////////////////////////////////////////////////
