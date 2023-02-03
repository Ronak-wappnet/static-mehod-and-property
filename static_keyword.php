<?php 
    /*This module gives the count of daily total aadharcard change request and gives the 
    applicant's aadhar number*/

    class AadharUpdation{ // stores the information about person.
        public $person_name;
        public $aadhar_number;
        public $updation_type;
        public static $daily_count=0; //store the daily updation application count
        public static $all_names=array();//store the aadhar number of applicant's.
        
        function __construct($person_name,$aadhar_number,$updation_type)
        {
            self::$daily_count++;
            $this->person_name=$person_name;
            $this->aadhar_number=$aadhar_number;
            $this->updation_type=$updation_type;
            self::addUsers($aadhar_number);
        }
        /* function taking 1 param and reurn void param.this function is
         for adding aadhar number in static array */ 

         public static function addUsers($aadhar_number) //Todo -> add user aadhar name and number in associative array 
        {
            //$all_names[$user_name]=$aadhar_number;
            array_push(self::$all_names,$aadhar_number);
        }
        public static function daily_record() // static method for printing daily record
        {
            echo "Total applications for updation : ".self::$daily_count."<br><br><br>";
            echo "Aadhar card numbers <br><br>";             
            print_r(self::$all_names);  // Todo -> print data in systametic mennaer
        }
    }
    $ronak=new AadharUpdation("Ronak Rathod",666576182343,"Biometric update");
    $vishvash=new AadharUpdation("vishvash solanki",888576182343,"phone Number updation");
    $meet=new AadharUpdation("meet joshi",932396182343,"Biometric update");
    AadharUpdation::daily_record(); //calling static method for daily record

?>