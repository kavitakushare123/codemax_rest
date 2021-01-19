<?php
require APPPATH .'./libraries/JWT.php';
class ImplementJWT
{
    PRIVATE $key = "codemax";
    public function GenerateToken($data)
    {
        $jwt = JWT::encode($data,$this->key);
        return $jwt;
    }
     public function DecodeToken($data)
    {
        $decode = JWT::decode($data,$this->key,array('HS256'));
        $decode = (array) $decode;
        return $decode;
    }
}
?>