<?php

return array(

	/*
	* Edit this file to add widget sidebars to your theme. 
	* Place WordPress default settings for sidebars.
	* Add as many as you want, watch-out your commas!
	*/
	array(

		'name'			=> __('First sidebar', THEMOSIS_THEME_TEXTDOMAIN),
		'id'			=> 'first-sidebar',
		'description'	=> __('Area of first sidebar', THEMOSIS_THEME_TEXTDOMAIN),
		'before_widget'	=> '<div>',
		'after_widget'	=> '</div>',
		'before_title'	=> '<h5>',
		'after_title'	=> '</h5>'

	)

);