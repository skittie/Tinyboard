<?php
	$theme = Array();
	
	// Theme name
	$theme['name'] = '55ch';
	// Description (you can use Tinyboard markup here)
	$theme['description'] = 
'Baseado no Categories v0.3. Requer $config[\'categories\'].';
	$theme['version'] = 'v0.3';
	
	// Theme configuration	
	$theme['config'] = Array();
	
	$theme['config'][] = Array(
		'title' => 'Site title',
		'name' => 'title',
		'type' => 'text'
	);
	
	$theme['config'][] = Array(
		'title' => 'Slogan',
		'name' => 'subtitle',
		'type' => 'text',
		'comment' => '(optional)'
	);
	
	$theme['config'][] = Array(
		'title' => 'Main HTML file',
		'name' => 'file_main',
		'type' => 'text',
		'default' => $config['file_index'],
		'comment' => '(eg. "index.html")'
	);
	
	$theme['config'][] = Array(
		'title' => 'Sidebar file',
		'name' => 'file_sidebar',
		'type' => 'text',
		'default' => 'sidebar.html',
		'comment' => '(eg. "sidebar.html")'
	);
	
	$theme['config'][] = Array(
		'title' => 'News file',
		'name' => 'file_news',
		'type' => 'text',
		'default' => 'news.html',
		'comment' => '(eg. "news.html")'
	);
	
	// Unique function name for building everything
	$theme['build_function'] = 'ccch_build';
	$theme['install_callback'] = 'ccch_install';
	
	if (!function_exists('ccch_install')) {
		function ccch_install($settings) {
			global $config;
			
			if (!isset($config['categories'])) {
				return Array(false, '<h2>Prerequisites not met!</h2>' . 
					'This theme requires $config[\'boards\'] and $config[\'categories\'] to be set.');
			}
		}
	}
?>
