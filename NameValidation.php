<?php

// Defining Validation Class Of First Name And Last Name

    class NameValidation {

// Defining private and public properties and methods 

        private $data;
        private $errors = [];
        private static $fields = ['fname', 'lname'];

        public function __construct($post_data) {

            $this->data = $post_data;
        }

// Validating Form - Whether the fields are correct And Call Functions Which Validate First & Last Name

        public function validateForm() {

            foreach(self::$fields as $field) {
                if (!array_key_exists($field, $this->data)) {
                    trigger_error("$field is not present in data");
                    return;
                }
            }
            $this->validateFirstName();
            $this->validateLastName();
            return $this->errors;

        }

// Validating First Name - Alphabetic input ONLY

        private function validateFirstName() {

            $val = trim($this->data['fname']);

            if(empty($val)) {
                $this->addError('fname', 'First Name Cannot Be Empty And/Or Contain Empty Spaces');
            }
            else {
                if (!preg_match("/^[a-zA-Z-']*$/",$val)) {
                    $this->addError('fname', 'Only Alphabets Are Allowed And No Empty Spaces');
                }
            }

        }

// Validating Last Name - Alphabetic input ONLY

        private function validateLastName() {

            $val = trim($this->data['lname']);

            if(empty($val)) {
                $this->addError('lname', 'Last Name Cannot Be Empty And/Or Contain Empty Spaces');
            }
            else {
                if (!preg_match("/^[a-zA-Z-']*$/",$val)) {
                    $this->addError('lname', 'Only Alphabets Are Allowed And No Empty Spaces');
                }
            }

        }

// Function which displays the respective errors 

        private function addError($key, $val) {

            $this->errors[$key] = $val;

        }

    }

?>