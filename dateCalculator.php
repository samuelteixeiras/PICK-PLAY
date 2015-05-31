<?php
	
	/*
	Date Calculation - PHP
	The Irish lottery draw takes place twice weekly on a 
	Wednesday and a Saturday at 8pm. 
	Write a PHP function that calculates and returns 
	the next valid draw date based on the current date and time and 
	also on an optional supplied date.
	*/
	class DateCalculator
	{

		public static function getNextValidDate(){

			$currentTime = strtotime("now");

			// check time , past 20 (8pm) get next Saturday
			if( date("w",$currentTime) > 3 ||
				(date("w",$currentTime) == 3 && date("H",$currentTime)>=20) ){
				
				return strtotime("next Saturday 20 hours");
			}else {
				return strtotime("next Wednesday 20 hours");
			}

		}

		public static function getSuppliedDate(){
			
			$currentTime = strtotime("now");

			// check time , past 20 (8pm) , get next Wednesday (Supplied Date)
			if( date("w",$currentTime) > 3 ||
				(date("w",$currentTime) == 3 && date("H",$currentTime)>=20) ){
				
				return strtotime("next Wednesday 20 hours");

			}else {
				return strtotime("next Saturday 20 hours");
			}

		}

	}

	
	$test = DateCalculator::getNextValidDate();
	echo date("j F, Y", $test),"<br>";

	$test = DateCalculator::getSuppliedDate();
	echo date("j F, Y", $test),"<br>";

?>