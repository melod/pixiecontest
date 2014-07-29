<?php
namespace App\Admin\Controller;

class Admin extends \App\Page {

	public function action_index(){
		$this->view->subview = 'hello';
		$this->view->message = "Hello admin!";
	}
	
}