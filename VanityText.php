<?php
class VanityText{
	function __Construct($plainText){
		$vowels = array('a','e','i','o','u','y','A','E','I','O','U','Y');
		$this->vanityText = str_replace($vowels, '', $plainText);
	}
	function getVanityText(){
		return $this->vanityText;
	}
}
?>
