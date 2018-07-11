<?php
class TRP_Post_Single extends _Page_Template {
	
	public function get_post_data($post = false) {
		return parent::get_post_data($this->post);
	}

	// get post date
	public function get_date(){
		return get_the_date('F j, Y', $this->get_id());
	}

	// get permalink
	public function get_permalink() {
		return get_permalink($this->get_id());
	}

}