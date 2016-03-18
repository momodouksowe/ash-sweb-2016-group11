<?php
/**
*/
include_once("adb.php");
/**
*Equipment  class
*/
class equipment extends adb{
	function equipment(){
	}
	/**
	*Adds a new equipment
	*@param string equipname login name
	*@param int quantity qnty 
	*@param varchar labNumber lab number
	*@param int permission permission as an int
	
	*@return boolean returns true if successful or false 
	*/
	function addEQUIPMENT($equipserialnumber='none',$equipname,$quantity='none',$labnumber='none'){
		$strQuery="insert into equipment set
						EQUIPSERIALNUMBER='$equipserialnumber',
						EQUIPNAME='$equipname',
						QUANTITY='$quantity',
						LABNUMBER='$labnumber'";
						//echo $strQuery;
		return $this->query($strQuery);				
	}
	/**
	*gets equipment records based on the filter
	*@param string mixed condition to filter. If  false, then filter will not be applied
	*@return boolean true if successful, else false
	*/
	function getEquipment($filter=false){
		$strQuery="select EQUIPSERIALNUMBER,EQUIPNAME,QUANTITY,LABNUMBER from equipment";
		//echo $strQuery; echo "<br>";
		if($filter!=false){
			$strQuery=$strQuery . " where $filter";
		}
		return $this->query($strQuery);
	}
	
	/**
	*Searches for equipment by equipname, quantity, labNumber 
	*@param string text search text
	*@return boolean true if successful, else false
	*/
	function searchEquipment($text=false){
		$filter=false;
		if($text!=false){
			$filter=" EQUIPNAME like '%$text%' or FNAME like '%$text%' or LNAME like '%$text%' ";
		}
		
		return $this->getEquipment($filter);
	}
	
	function deleteEquipment($equipserialnumber){
		/*Compelete the function*/
		$strQuery="DELETE FROM equipment WHERE EQUIPSERIALNUMBER=$equipserialnumber";
		//echo $strQuery;
		return $this->query($strQuery);
	}
	
   
	function editEquipment($equipserialnumber,$equipname,$quantity,$labNumber){
		$strQuery="update equipment set
						EQUIPNAME='$equipname',
						QUANTITY='$quantity',
						LABNUMBER='$labNumber'
						where  EQUIPSERIALNUMBER='$equipserialnumber'";
		return $this->query($strQuery);
		}

}
/*
//search equipment r/*
//search equipment right input test code
$obj=new equipment();
if (!obj->searchEquipment(robots)){
return $this->getEquipment($filter);
	}

//search equipment wrong input test code
$obj=new equipment();
if (!obj->searchEquipment(chairs)){
return $this->getEquipment($filter);
	}

//edit equipment right input test code
$obj=new equipment();"
if (!obj->editEquipment("insert into equipment set $EQUIPSERIALNUMBER='8753245',$EQUIPNAME='multisocket',$QUANTITY='10',$LABNUMBER='2'";)){
return $this->query($strQuery);				
}

//edit equipment wrong input test code
$obj=new equipment();
if (!obj->editEquipment("$equipserialnumber='4369863',$equipname='headphones',$quantity='2',$labnumber='2')){
return $this->query($strQuery);				
}				
}

//add equipment right input test code
$obj=new equipment();
if (!obj->addEQUIPMENT("$equipserialnumber='4369863',$equipname='headphones',$quantity='2',$labnumber='2')){
return $this->query($strQuery);				
}

//add equipment wrong input test code
$obj=new equipment();
if (!obj->addEQUIPMENT("$equipserialnumber='4369863',$equipname='headphones,$quantity='2',$labnumber='two')){
return $this->query($strQuery);				
}

//delete equipment right input test code
$obj=new equipment();
if (!obj->deleteEquipment(4369863)){
return $this->query($strQuery);				
}

//delete equipment wrong input test code
$obj=new equipment();
if (!obj->deleteEquipment(0005433)){
return $this->query($strQuery);				
}
*/

//call the searchEquipment method, giving it right input, and display the final output.
//document whether the output it gave is what you expected
//call the searchEquipment method, giving it wrong input, and display the final output.
//document whether the output it gave is what you expected
*/
?>