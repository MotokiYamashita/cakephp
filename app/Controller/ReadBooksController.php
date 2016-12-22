<?php
class ReadBooksController extends AppController{
	public $use = array('ReadBook');

	public function index(){
	  $read_books = $this->ReadBook->find('all');
	  $this->set('read_books',$read_books);
	}

	public function edit($id){
	}
}
 ?>
