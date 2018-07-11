<?php
abstract class _Page_Template {

	// post object
	protected $post;

	// constructor
	public function __construct($post = null) {
		if (!empty($post)) {
			if (gettype($post) == 'integer') {
				$this->post = get_post($post);
			} else {
				$this->post = $post;
			}
		} else {
			global $post;
			$this->post = $post;
		}
	}

	// get the post_id
	public function get_id() {
		return $this->post->ID;
	}

	// get parent title
	public function get_parent_title() {
		return get_the_title($this->post->post_parent);
	}

	// get post title
	public function get_title() {
		return get_the_title($this->get_id());
	}

	// get page content
	public function get_content() {
		return apply_filters('the_content', $this->post->post_content);
	}

	public function get_excerpt_by_id($post_content, $post_id, $excerpt_length = 35){
		$the_excerpt = strip_tags(strip_shortcodes($post_content));
		$words = explode(' ', $the_excerpt, $excerpt_length + 1);

		if(count($words) > $excerpt_length) {
			array_pop($words);
			array_push($words, '&#8230;');
			$the_excerpt = implode(' ', $words);
		}

		return $the_excerpt;
	}

	/*
	// get ACF link
	public function get_ACF_link($linkACFObject)
	{
		// standardizing ACF link
		$button = $linkACFObject;
		$buttonObject = [
			"title" => "",
			"url" => "",
			"target" => "_self"
		];
		if (!empty($button)) {
			$buttonObject = [
				"title" => empty($button['title']) ? $button['url'] : $button['title'],
				"url" => $button['url'],
				"target" => empty($button['target']) ? "_self" : $button['target']
			];
		}
		return $buttonObject;
	}
	*/

}