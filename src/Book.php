<?php 

class Book{
	function __construct()
	{
		var_dump(__NAMESPACE__);;
	}
	public function open(){
		var_dump('opening the paper book.');
	}
	public function turnPage(){
		var_dump('turning the page of the paper book.');
	}


}
