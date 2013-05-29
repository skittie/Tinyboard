<?php
	require 'info.php';
	
	function ccch_build($action, $settings) {
		// Possible values for $action:
		//	- all (rebuild everything, initialization)
		//	- news (news has been updated)
		//	- boards (board list changed)
		
		CCch::build($action, $settings);
	}

	// Wrap functions in a class so they don't interfere with normal Tinyboard operations
	class CCch {
		public static function build($action, $settings) {
			global $config;
			
			if ($action == 'all')
				file_write($config['dir']['home'] . $settings['file_main'], CCch::homepage($settings));
			
			if ($action == 'all' || $action == 'boards')
				file_write($config['dir']['home'] . $settings['file_sidebar'], CCch::sidebar($settings));
			
			if ($action == 'all' || $action == 'news')
				file_write($config['dir']['home'] . $settings['file_news'], CCch::news($settings));
		}
		
		// Build homepage
		public static function homepage($settings) {
			global $config;
			
			return Element('themes/55ch/frames.html', Array('config' => $config, 'settings' => $settings));
		}
		
		// Build news page
		public static function news($settings) {
			global $config;
			
			$query = query("SELECT * FROM `news` ORDER BY `time` DESC") or error(db_error());
			$news = $query->fetchAll(PDO::FETCH_ASSOC);
			
			return Element('themes/55ch/news.html', Array(
				'settings' => $settings,
				'config' => $config,
				'news' => $news
			));
		}
		
		// Build sidebar
		public static function sidebar($settings) {
			global $config, $board;
			
			$categories = $config['categories'];
			
			foreach ($categories as &$boards) {
				foreach ($boards as &$board) {
					$title = boardTitle($board);
					if (!$title)
						$title = $board; // board doesn't exist, but for some reason you want to display it anyway
					$board = Array('title' => $title, 'uri' => sprintf($config['board_path'], $board));
				}
			}
			
			return Element('themes/55ch/sidebar.html', Array(
				'settings' => $settings,
				'config' => $config,
				'categories' => $categories
			));
		}
	};
	
?>
