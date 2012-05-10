<?php
class FileUploadController extends FileUploadAppController {

	public function beforeFilter() {
		parent::beforeFilter();
		$this->Auth->allow("*");
	}

	public function index() {
		
	}
}