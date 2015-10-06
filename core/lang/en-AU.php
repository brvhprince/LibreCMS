<?php
function lang($phrase1,$phrase2=null){
	static $_L=[
		'lang'						=>'English (Australia)',
		'Accounts'				=>'Accounts',
		'accounts'				=>[	'options0'			=>'Add/Remove Content',
													'options1'			=>'Edit Content',
													'options2'			=>'Add/Edit Bookings',
													'options3'			=>'Message Viewing/Editing',
													'options4'			=>'Orders Viewing/Editing',
													'options5'			=>'User Accounts Viewing/Editing',
													'options6'			=>'SEO Viewing/Editing',
													'options7'			=>'Preferences Viewing/Editing'
								],
		'Activity'				=>'Activity',
		'Administration'		=>'Administration',
		'Bookings'				=>'Bookings',
		'Business'				=>'Business',
		'confirmed'				=>'Confirmed',
		'Content'				=>'Content',
		'Delete'				=>'Delete',
		'End'					=>'End',
		'Front'					=>'Front',
		'Login'					=>'Login',
		'Logout'				=>'Logout',
		'Media'					=>'Media',
		'Messages'				=>'Messages',
		'none'					=>'None',
		'Orders'				=>'Orders',
		'Pages'					=>'Pages',
		'Preferences'			=>'Preferences',
		'Published'				=>'Published',
		'Start'					=>'Start',
		'Statistics'			=>'Statistics',
		'unconfirmed'			=>'Unconfirmed',
		'Unpublished'			=>'Unpublished',
		'button'				=>[	'add'				=>'Add',
									'all'				=>'All',
									'approve'			=>'Approve',
									'article'			=>'Article',
									'back'				=>'Back',
									'booking'			=>'Booking',
									'browse_image'		=>'Browse for Image',
									'browse_uploaded'	=>'Browse Uploaded Images',
									'cards'				=>'Cards',
									'delete'			=>'Delete',
									'edit'				=>'Edit',
									'event'				=>'Event',
									'inventory'			=>'Inventory',
									'gallery'			=>'Gallery',
									'list'				=>'List',
									'login'				=>'Login',
									'news'				=>'News',
									'portfolio'			=>'Portfolio',
									'proof'				=>'Proof',
									'purge'				=>'Purge',
									'restore'			=>'Restore',
									'schemablogpost'	=>'for Articles',
									'schemacreativework'=>'for Portfolio/Proofs',
									'schemaevent'		=>'for Events',
									'schemaimagegallery'=>'for Gallery Images',
									'schemanewsarticle'	=>'for News',
									'schemaproduct'		=>'for Inventory',
									'schemareview'		=>'for Testimonials',
									'schemaservice'		=>'for Services',
									'service'			=>'Service',
									'show'				=>'Show',
									'testimonial'		=>'Testimonial',
									'upload'			=>'Upload'
								],
		'error'					=>[	'problem'			=>'There was a problem!'
								],
		'info'					=>[	'cover_0'			=>'Editing a URL Image will retreive the image to the server for Editing.',
									'cover_1'			=>'Uploaded Images take Precedence over URL\'s.',
									'edited'			=>'Edited: ',
									'fccif'				=>' for more information or to look up an FCC ID.',
									'gravatar'			=>' Link will override any image uploaded as your Avatar.'
								],
		'label'					=>[	'about'				=>'About',
									'active'			=>'Active',
									'address'			=>'Address',
									'aperture'			=>'Aperture',
									'author'			=>'Author',
									'avatar'			=>'Avatar',
									'barcode'			=>'Barcode',
									'bookable'			=>'Bookable',
									'booked'			=>'Booked',
									'bookedfor'			=>'Booked For',
									'bookingend'		=>'Booking End',
									'brand'				=>'Brand',
									'business'			=>'Business',
									'camera'			=>'Camera',
									'caption'			=>'Enter a Caption...',
									'categoryprimary'	=>'Category Primary',
									'categorysecondary'	=>'Category Secondary',
									'city'				=>'City',
									'client'			=>'Client',
									'code'				=>'Code',
									'comment'			=>'Comment',
									'comments'			=>'Comments',
									'contenttype'		=>'contentType',
									'cost'				=>'Cost',
									'cover'				=>'Cover',
									'created'			=>'Created',
									'edited'			=>'Edited',
									'email'				=>'Email',
									'eventend'			=>'Event End',
									'eventstart'		=>'Event Start',
									'fccid'				=>'FCC ID',
									'featured'			=>'Featured',
									'focallength'		=>'Focal Length',
									'gravatar'			=>'Gravatar',
									'iso'				=>'ISO',
									'image'				=>'Image',
									'internal'			=>'Internal',
									'keywords'			=>'Keywords',
									'language'			=>'Language',
									'lens'				=>'Lens',
									'menu'				=>'Menu',
									'mobile'			=>'Mobile',
									'name'				=>'Name',
									'network'			=>'Network',
									'notes'				=>'Notes',
									'originalfilename'	=>'Orig. Filename',
									'password'			=>'Password',
									'phone'				=>'Phone',
									'postcode'			=>'Postcode',
									'quantity'			=>'Quantity',
									'rank'				=>'Rank',
									'schematype'		=>'schemaType',
									'showcost'			=>'Show Cost',
									'shutterspeed'		=>'Shutter Speed',
									'seocaption'		=>'SEO Caption',
									'seodescription'	=>'SEO Description',
									'seokeywords'		=>'SEO Keywords',
									'seotitle'			=>'SEO Title',
									'state'				=>'State',
									'status'			=>'Status',
									'suburb'			=>'Suburb',
									'tags'				=>'Tags',
									'taken'				=>'Taken',
									'title'				=>'Title',
									'thumb'				=>'Thumb',
									'url'				=>'URL',
									'username'			=>'Username',
									'views'				=>'Views'
								],
		'placeholder'			=>[	'address'			=>'Enter an Address...',
									'aperture'			=>'Enter Aperture/FStop...',
									'barcode'			=>'Enter a Barcode...',
									'brand'				=>'Enter a Brand...',
									'business'			=>'Enter a Business...',
									'camera'			=>'Enter Camera Brand...',
									'caption'			=>'Enter a Caption...',
									'category'			=>'Enter a Category/Select from List...',
									'city'				=>'Enter a City...',
									'code'				=>'Enter a Code...',
									'comment'			=>'Enter a Comment...',
									'cost'				=>'Enter a Cost...',
									'cover'				=>'Enter Cover URL...',
									'email'				=>'Enter an Email...',
									'fccid'				=>'Enter an FCC ID...',
									'focallength'		=>'Enter Focal Length...',
									'iso'				=>'Enter ISO...',
									'gravatar'			=>'Enter Gravatar Link...',
									'keywords'			=>'Enter Keywords...',
									'lens'				=>'Enter Lens...',
									'mobile'			=>'Enter a Mobile Number...',
									'name'				=>'Enter a Name...',
									'originalfilename'	=>'Original Filename...',
									'password'			=>'Enter a Password...',
									'phone'				=>'Enter a Phone Number...',
									'postcode'			=>'Enter a Postcode...',
									'quantity'			=>'Enter a Quantity...',
									'search'			=>'Search...',
									'selectclient'		=>'Select a Client...',
									'selectdate'		=>'Select a Date/Time...',
									'selectitem'		=>'Select an Item...',
									'seocaption'		=>'Enter a Caption...',
									'seodescription'	=>'Enter a Description...',
									'seokeywords'		=>'Enter Keywords...',
									'seotitle'			=>'Enter an SEO Title...',
									'shutterspeed'		=>'Enter Shutter Speed...',
									'state'				=>'Enter a State...',
									'suburb'			=>'Enter a Suburb...',
									'tags'				=>'Enter Tags...',
									'taken'				=>'Select the Date/Time Image was Taken...',
									'title'				=>'Enter a Title...',
									'url'				=>'Enter a URL...',
									'username'			=>'Enter a Username...'
								],
		'popover'				=>[	'nullcontent'		=>'Working on the Content',
									'nulltitle'			=>'Working on a Title'
								],
		'rank'					=>[ '0'					=>'visitor',
									'visitor'			=>'Visitor',
									'100'				=>'subscriber',
									'subscriber'		=>'Subscriber',
									'200'				=>'member',
									'member'			=>'Member',
									'300'				=>'client',
									'client'			=>'Client',
									'400'				=>'contributor',
									'contributor'		=>'Contributor',
									'500'				=>'author',
									'author'			=>'Author',
									'600'				=>'editor',
									'editor'			=>'Editor',
									'700'				=>'moderator',
									'moderator'			=>'Moderator',
									'800'				=>'manager',
									'manager'			=>'Manager',
									'900'				=>'administrator',
									'administrator'		=>'Administrator',
									'1000'				=>'developer',
									'developer'			=>'Developer'
								],
		'stats'					=>[	'title'				=>'In Site Analytics',
									'comments'			=>'New Comments!',
									'messages'			=>'New Messages!',
									'orders'			=>'Pending Orders!',
									'bookings'			=>'New Bookings!',
									'visits'			=>'Total Visits!',
									'visits_today'		=>'Today',
									'visits_yesterday'	=>'Yesterday',
									'visits_last7days'	=>'Last 7 Days',
									'visits_last30days'	=>'Last 30 Days',
									'unique_visitors'	=>'Unique Browser Visitors!',
									'os'				=>'Operating Systems!',
									'ga_title'			=>'Google Analytics',
									'Authorising'		=>'Authorising!',
									'ga_sessions'		=>'Sessions!',
									'ga_countrysessions'=>'Top Sessions by Country!',
									'ga_topbrowsers'	=>'Top Browsers!',
									'ga_trafficsources'	=>'Traffic Sources!',
									'ga_userflow'		=>'User Flow!'
								],
		'title'					=>[	'account_permissions'=>'Editing Permissions',
									'comments'			=>'Comments',
									'content_attribution'=>'Content Attribution',
									'cover'				=>'Cover',
									'cover/avatar'		=>'Cover/Avatar',
									'exif'				=>'EXIF Image Information',
									'image'				=>'Image',
									'image_attribution'	=>'Image Attribution',
									'login'				=>'Login',
									'social_networking'	=>'Social Networking'
								],
		'tooltip'				=>[	'nulltitle'			=>'Working on the Tooltip Content.',
									'add'				=>'Add Items by Content Type.',
									'approve'			=>'Approve',
									'back'				=>'Back',
									'comments'			=>'Comments',
									'delete'			=>'Delete',
									'edit'				=>'Edit',
									'items'				=>'Show Items by Content Type.',
									'layout_calendar'	=>'Display as Calendar.',
									'layout_card'		=>'Display as Cards.',
									'layout_list'		=>'Display as List.',
									'pin'				=>'Pin/Unpin to Top',
									'purge'				=>'Purge',
									'restore'			=>'Restore',
									'resize'			=>'Drag to Change Order',
									'schematype'		=>'Schema for Microdata Content.',
									'selectdate'		=>'Select a Date/Time...',
									'views'				=>'Views'
								]
	];
	if(isset($phrase2)&&$phrase2!='')
		echo(!array_key_exists($phrase1,$_L))?$phrase2:$_L[$phrase1][$phrase2];
	else
		echo(!array_key_exists($phrase1,$_L))?$phrase1:$_L[$phrase1];
}