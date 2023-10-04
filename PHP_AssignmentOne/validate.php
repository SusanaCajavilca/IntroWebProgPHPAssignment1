<?php
class validate{

    // in this class I validate the required data: the personal data and the six inputs from select options

    // First, the personal data can not be empty
    public function checkEmpty($data,$field){
        $msg = null;
        foreach ($field as $value){
            if(empty($data[$value]))
            {
                $msg .= "<p>$value field is empty</p>";

            }
        }
        return $msg;
    }


    // Second, the six inputs from the select options
    // if I don't validate it, it could save to the database the initial phrase : 'Select xxxx'

    // validating the input for Select the Size dropdown list
    public function validSize($input1){
        if ($input1 !== 'Select the Size') {
            // Input is valid
            return true;
        } else {
            // Input is not valid
            return false;
        }
    }

    // validating the input for Select the Dough dropdown list
    public function validDough($input1){
        if ($input1 !== 'Select the Dough') {
            // Input is valid
            return true;
        } else {
            // Input is not valid
            return false;
        }
    }

    // validating the input for Select the Cheese for Base dropdown list
    public function validCheeseBase($input1){
        if ($input1 !== 'Select Cheese for Base') {
            // Input is valid
            return true;
        } else {
            // Input is not valid
            return false;
        }
    }

    // validating the input for Select the Sauce for Base dropdown list
    public function validSauceBase($input1){
        if ($input1 !== 'Select Sauce for Base') {
            // Input is valid
            return true;
        } else {
            // Input is not valid
            return false;
        }
    }

    // validating the input for Select the Quantity dropdown list
    public function validQuantity($input1){
        if ($input1 !== 'Select Quantity') {
            // Input is valid
            return true;
        } else {
            // Input is not valid
            return false;
        }
    }

    // validating the input for Select the Drink dropdown list
    public function validDrink($input1){
        if ($input1 !== 'Select your Drink') {
            // Input is valid
            return true;
        } else {
            // Input is not valid
            return false;
        }
    }

}
?>