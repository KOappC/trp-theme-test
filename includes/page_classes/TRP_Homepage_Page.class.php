<?php
class TRP_Homepage_Page extends _Page_Template {

	// get hero image
	public function get_hero_image() {
		return get_field('field_5b476e7d31ea3', $this->get_id());
	}

	// get hero heading
	public function get_hero_heading() {
		return get_field('field_5b47880062665', $this->get_id());
	}

	// get spotlight heading
	public function get_spotlight_heading () {
		return get_field('field_5b476f2167330', $this->get_id());
	}

	// get spotlight content
	public function get_spotlight_content () {
		return get_field('field_5b476f3867331', $this->get_id());
	}

	// get spotlight image
	public function get_spotlight_image () {
		return get_field('field_5b4785348bff6', $this->get_id());
	}

	// get game one image
	public function get_game_one_image () {
		return get_field('field_5b476fbb1dd99', $this->get_id());
	}

	// get game one heading
	public function get_game_one_heading () {
		return get_field('field_5b476ff519749', $this->get_id());
	}

	// get game one content
	public function get_game_one_content () {
		return get_field('field_5b4770061974a', $this->get_id());
	}

	// get game two image
	public function get_game_two_image () {
		return get_field('field_5b4770382c387', $this->get_id());
	}

	// get game two heading
	public function get_game_two_heading () {
		return get_field('field_5b4770572c388', $this->get_id());
	}

	// get game two content
	public function get_game_two_content () {
		return get_field('field_5b47707c2c389', $this->get_id());
	}

	// get game three image
	public function get_game_three_image () {
		return get_field('field_5b4770892c38a', $this->get_id());
	}

	// get game three heading
	public function get_game_three_heading () {
		return get_field('field_5b4770942c38b', $this->get_id());
	}

	// get game three content
	public function get_game_three_content () {
		return get_field('field_5b4770a12c38c', $this->get_id());
	}

}