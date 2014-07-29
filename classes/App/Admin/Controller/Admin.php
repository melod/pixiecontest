<?php
namespace App\Admin\Controller;

class Admin extends \App\Page {

	public function action_index(){
		$this->view->subview = 'helloadmin';
		$this->view->message = "Hello !";
	}
	
}