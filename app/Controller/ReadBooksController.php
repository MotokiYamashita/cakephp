<?php 
class ReadBooksController extends AppController{
  public function index(){
      $read_books = $this->ReadBook->find('all');
      $this->set('read_books',$read_books);
  }
}
 ?>