<?php
class FileUploadAppController extends AppController {
	public $components = array('FileUpload.Upload');
	public $helpers = array('FileUpload.UploadForm');
}