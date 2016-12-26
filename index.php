<?php namespace Acme;

// import class Book into php runtime space within memory.
require 'src/Book.php';
use Book;
var_dump(__NAMESPACE__);
class Person{
	function read($book){
		$book->open();
		$book->turnPage();
	}
}

(new Person)->read(new Book);
