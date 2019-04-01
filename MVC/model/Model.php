<?php 

include 'Book.php';
class Model
{
	
	public function getBookDetails()
	{
		return array(
			'morning_miracle' => new Book('morning_miracle','ella herald','motivational book'),
			'jungle_book'=> new Book('jungle_book','jamuji','children book')

			 );		
	}

	public function getbook($title)
	{
		$allbook = $this->getBookDetails();
		return $allbook[$title];
	}
}

?>