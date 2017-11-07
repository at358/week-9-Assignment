<?php
class User {
  private $ID;
  private $Email;
  private $fname;
  private $lname;
  private $Phone;
  private $Birthday;
  private $Gender;
  private $Password;
  public function __get($user) {
   public function setID($ID){
        $this->id = $ID;
    }
    public function setEmail($Email){
        $this->email = $Email;
    }
    public function setFname($fname){
        $this->fname = $fname;
    }
    public function setLName($lname){
        $this->lname = $lname;
    }
    public function setPhone($Phone){
        $this->phone = $Phone;
    }
    public function setBirthday($Birthday){
        $this->birthday = $Birthday;
    }
     public function setGender($Gender){
        $this->gender = $Gender;
    }
     public function setPassword($Password){
        $this->password = $Password;
    }
    public function getID(){
        return $this->id;
    }
    public function getEmail(){
        return $this->email;
    }
    public function getFname(){
        return $this->fname;
    }
     public function getLname(){
        return $this->lname;
    }
     public function getPhone(){
        return $this->phone;
    }
     public function getBirthday(){
        return $this->birthday;
    }
     public function getGender(){
        return $this->gender;
    }
     public function getPassword(){
        return $this->password;
    }
    return $this;
  }
}
?>
