<?php
	class functions {

		public static function robots_meta_tag($index = false,$follow = false){
			$index_rule = ($index == true ? "index" : "noindex");
	
			$follow_rule = ($follow == true ? "follow" : "nofollow");
	
			return '<meta name="robots" content="'.$index_rule.','.$follow_rule.'">';
		}
	}
	
	functions::robots_meta_tag(); // returns default <meta name="robots" content="noindex,nofollow">
	
	functions::robots_meta_tag(true,true); // returns <meta name="robots" content="index,follow">
	
	functions::robots_meta_tag(true,false); // returns <meta name="robots" content="index,nofollow">
	
	functions::robots_meta_tag(false,true); // returns <meta name="robots" content="noindex,follow">	
?>