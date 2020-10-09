<?php


class User
{
public $username;
public $email;
public $numberPhone;
public function __construct($_username,$_email,$_numberPhone)
{
    $this->username = $_username;
    $this->email = $_email;
    $this->numberPhone = $_numberPhone;
}
public function getUsername(){
    return $this->username;
}
public function getEmail(){
    return $this->email;
}
public function getNumberPhone(){
    return $this->numberPhone;
}
public function setUsername($_username){
    $this->username = $_username;
}
public function setEmail($_email){
    $this->email = $_email;
}
public function setNumberPhone($_numberPhone){
    $this->numberPhone = $_numberPhone;
}
}