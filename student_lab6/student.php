<?php
   class Student {
      protected $id;
      protected $fistname;
      protected $lastname;
      protected $credits;            

    public function __construct($id,$firstname,$lastname,$credits){
        $this->id = $id;        
        $this->firstname = $firstname;
        $this->lastname = $lastname;
        $this->credits = $credits;
    }
  
	function geId(){
        return $this->id;
    } 

	function getFirstName(){
        return $this->firstname;
    } 
    
	function getLastName(){
        return $this->lastname;
    }     
    
	function getCredits(){    
        return $this->credits;
    }    

	function setId(){
				$this->id = $id;
    }
       
	function setFirstname($firstname){
				$this->firstname = $firstname;
    }
     
	function setLastname($lastname){
				$this->lastname = $lastname;
	} 
		
	function setCredits($credits){
				$this->credits = $credits;
	} 		  
       
	function classStanding($credits){

        if ($credits < 30) {
            return "freshman";
        } elseif ($credits < "60") {
            return "sophomore";
        } elseif ($credits < "90") {
            return "junior";            
        } else {
            return "senior";
        }
	}      
	
	function formatStudentInfo(){
	    
	    return $this->id. " " . $this->firstname . " " . $this->lastname . " has " . $this->credits . " credits and is a " .  $this->classStanding($this->credits) . ".";

	}   	
	
       
   }
?>