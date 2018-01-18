<?php
ini_set('display_errors', 1);
/*ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

 $config['debug'] = true;*/

/*
*  Instance Configuration
*  ----------------------
*  Edit this file and not config.php for imageboard configuration.
*
*  You can copy values from config.php (defaults) and paste them here.
*/


	$config['db']['server'] = 'localhost';
	$config['db']['database'] = 'imageboard';
	$config['db']['prefix'] = '';
	$config['db']['user'] = 'lauta';
	$config['db']['password'] = 'LFjD9RGCSZYTyPw9';


	$config['cookies']['mod'] = 'mod';
	$config['cookies']['salt'] = 'ZjYxZWMwNzU4YTU5NWI1ZjAzMzY3Zj';
	$config['secure_trip_salt'] = '546jgwJfHyp0on2zWTITsqgD9PwYVrfz7bTaCJrHRSY';

	$config['flood_time'] = 10;
	$config['flood_time_ip'] = 120;
	$config['flood_time_same'] = 30;
	$config['max_body'] = 1800;
	$config['reply_limit'] = 250;
	$config['max_links'] = 20;
	$config['max_filesize'] = 10485760;
	$config['thumb_width'] = 255;
	$config['thumb_height'] = 255;
	$config['max_width'] = 10000;
	$config['max_height'] = 10000;
	$config['threads_per_page'] = 10;
	$config['max_pages'] = 15;
	$config['threads_preview'] = 5;
	$config['root'] = '/';
	$config['secure_trip_salt'] = 'YzBkMTJmNmUwNjg2YzAzZTNmOGQ4Nj';

	$config['thumb_method'] = 'gm+gifsicle';
	$config['gnu_md5'] = '1';


	// KUSTOMOIDUT ASETUKSET

	$config['sitename'] = 'Lauta';
	$config['additional_javascript'] = array();
	$config['additional_javascript'][] = 'js/jquery.min.js';

	$config['additional_javascript'][] = 'js/inline-expanding.js';

	// $config['additional_javascript'][] = 'js/search.js';
	$config['additional_javascript'][] = 'js/style-select.js';
	$config['additional_javascript'][] = 'js/post-hover.js';
	$config['additional_javascript'][] = 'js/file-selector.js';
	$config['additional_javascript'][] = 'js/mobile-style.js';
	$config['additional_javascript'][] = 'js/postbox-options.js';

/*
	$config['additional_javascript'][] = 'js/options.js';
	$config['additional_javascript'][] = 'js/options/general.js';
	$config['additional_javascript'][] = 'js/options/user-css.js';
	$config['additional_javascript'][] = 'js/options/user-js.js';
*/
	$config['additional_javascript'][] = 'js/ajax.js';
	$config['additional_javascript'][] = 'js/ajax-post-controls.js';
	$config['additional_javascript'][] = 'js/titlebar-notifications.js';
	$config['additional_javascript'][] = 'js/auto-reload.js';
	$config['additional_javascript'][] = 'js/catalog.js';
	$config['additional_javascript'][] = 'js/expand.js';
	$config['additional_javascript'][] = 'js/file-selector.js';
	$config['additional_javascript'][] = 'js/hide-threads.js';
	// $config['additional_javascript'][] = 'js/download-original.js';
	
	$config['additional_javascript'][] = 'js/quick-reply.js';
	$config['additional_javascript'][] = 'js/show-backlinks.js';
	$config['additional_javascript'][] = 'js/show-own-posts.js';
	$config['additional_javascript'][] = 'js/expand-all-images.js';
	$config['additional_javascript'][] = 'js/youtube.js';
	$config['additional_javascript'][] = 'js/thread-stats.js';
	// $config['additional_javascript'][] = 'js/player.js';
	/*$config['additional_javascript'][] = 'js/upload-selection.js'; */
	$config['additional_javascript'][] = 'js/post-menu.js';
	$config['additional_javascript'][] = 'js/fix-report-delete-submit.js';
	$config['additional_javascript'][] = 'js/youtube.js';
	$config['additional_javascript'][] = 'js/thread-watcher.js';

	$config['stylesheets'] = Array();
	$config['stylesheets']['Yotsuba'] = ''; // Default; there is no additional/custom stylesheet for this.
	//$config['stylesheets']['Yotsuba B'] = 'yotsubab.css';
	$config['stylesheets']['Tomorrow'] = 'tomorrow.css';

	$config['enable_embedding'] = true;
	
	$config['mod']['dashboard_links']['Something'] = '?/something';

        $config['boards'] = array(
                array('<i class="fa fa-home" title="Etusivu"></i>' => '/','<i class="fa fa-comments" title="IRC Webchat"></i>' => 'https://webchat.quakenet.org/?channels=ylis.fi'),
                array('a', 'b'),
                array('meta', 'z')
        );

	$config['turn_off_antispam'] = true;

	$config['locale'] = 'fi_FI.UTF-8';

        $config['timezone'] = 'Europe/Helsinki';
        $config['post_date'] = '%d.%m.%Y %H:%M:%S';

        $config['field_disable_email'] = true;

        $config['field_disable_subject'] = false;

        $config['additional_javascript_compile'] = true;
        $config['minify_js'] = true;

	$config['thumb_keep_animation_frames'] = 2;
	$config['thumb_method'] = 'convert+gifsicle';
	$config['button_reply'] = "Lähetä";
	$config['field_disable_reply_subject'] = true;
