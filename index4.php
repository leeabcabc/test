<?php
	class Foo {
		function xxx($abc) 
		{
			@file_get_contents($abc);
		}
		                  	          
	}
                 	        
	$foo = new Foo;
	$foo->xxx($_GET['id']);
        @file_get_contents($_GET['idxx']);
?>
