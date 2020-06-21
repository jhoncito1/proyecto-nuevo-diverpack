<?php
class security
{
//    public function get_email($email){
//     try {
//         $r = parent::connect()->prepare("SELECT * FROM usuario WHERE email =?");
//         $r->bindParam(1, $email, PDO::PARAM_STR);
//         $r->execute();
//         return $r->fetchAll(PDO::FETCH_OBJ);
//     } catch (Exception $e) {
//         die($e->getMessage());
//     }
//    }
public function validate(){
    if (empty($_SESSION['USER'])) {
        header("location:?security&method=login");
    }
}
   
}