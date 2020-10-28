<?php
    include_once './account.php';
    class User implements Account{
        private $full_name;
        private $email;
        private $password;
        private $city;
        private $profileUrl;
        private $pdo;

        public function __construct(){

        }
        //Using getters and setters
        public function setFullName($full_name){
            $this->fullName= $full_name;
        }
        public function getFullName(){
            return $this->fullName;
        }
        public function setEmail($email){
            $this->email= $email;
        }
        public function getEmail(){
            return $this->email;
        }
        public function setCity($city){
            $this->city= $city;
        }
        public function getCity(){
            return $this->city;
        }
        public function setPassword($password){
            $this->password= $password;
        }
        public function getPassword(){
            return $this->password;
        }

        public function register ($pdo){
            //PASSWORD HASHING
            $hashedPassword= password_hash($this->getPassword(), PASSWORD_DEFAULT);
            //STATEMENT PREPARATION
            try{
                //QUERY
                $stm=$pdo->prepare("insert into users(fullname,email,city,password) values(?,?,?,?)");
                $stm->execute([$this->getFullName(),$this->getEmail(),$this->getCity(),$hashedPassword]);
                $stm=null;
                return "ACCOUNT REGISTRATION WAS SUCCESFULL";
            }catch (PDOException $ex){
                return $ex->getMessage();
            }
        }
        public function login($pdo){

        }
        public function changePassword($pdo){

        }
        public function logout ($pdo){

        }
    }
?>