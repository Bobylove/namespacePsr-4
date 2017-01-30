<?php 
namespace Bobylove\App\Bar;

class Client {

	public function render(){

		echo basename(dirname(__FILE__));

		
	}
}

?>