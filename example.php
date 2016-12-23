<?php 

class human
{
	var $hand = "hand";
	var $eye = "eye";
	public function step($hand){
		echo "$hand";
	}
	
}
$ex = new human;
echo $ex->step("hand");
?>