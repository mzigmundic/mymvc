<?php

class Pages extends Controller {

	public function __construct() {

	}

	public function index() {
		$data = [
			'title' => 'MVC Framework',
		];
		$this->view('pages/index', $data);
	}

}