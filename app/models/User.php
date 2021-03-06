<?php
    class User{
        private $db;

        public function __construct(){
            $this->db = new Database();
        }

        //Register user
        public function register($data){
            $this->db->query('INSERT INTO users (name, email, password) VALUES(:name, :email, :password)');
            $this->db->bind(':name', $data['name']);
            $this->db->bind(':email', $data['email']);
            $this->db->bind(':password', $data['password']);

            //Execute
            if($this->db->execute()){
                return true;
            }else{
                return false;
            }

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

        //Find user by id
        public function getUserById($id){
            $this->db->query('Select * From users WHERE id = :id');

            //bind value
            $this->db->bind(':id', $id);

            $row = $this->db->singleResult();

            return $row;
        }

        public function login($email, $password){
            $this->db->query('SELECT * FROM users WHERE email =:email');
            $this->db->bind(':email', $email);

            $row = $this->db->singleResult();
            $hashed_password = $row->password;
            
            if(password_verify($password, $hashed_password)){
                return $row;
            }else{
                return false;
            }
        }
    }
?>