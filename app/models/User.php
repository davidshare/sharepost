<?php
    class User{
        private $db;

        public function __construct(){
            $this->db = new Database();
        }

        //Find user by email
        public function findUserByEmail($email){
            $this->db->query('Select * From users WHERE email = :email');
            $this->db->bind(':email', $email);

            $row = $this->db->singleResult();

            //Check row
            if($this->db->rowCount()>0){
                return true;
            }else{
                return false;
            }
        }
    }
?>