<?php
class usuarios extends DB
{
    /*
     *  obtener el registro de todos los usuarios registrados en la DB
     */
    
    public function get_all()
    {
        try {
            $r = parent::connect()->prepare("SELECT * FROM tipo_documento join usuario WHERE fk_id_tipodoc=id_tipodoc");
            $r->execute();
            return $r->fetchAll(PDO::FETCH_OBJ);
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }

    public function get_tipodocumento()
    {
        try {
            $r = parent::connect()->prepare("SELECT * FROM tipo_documento not repeat");
            $r->execute();
            return $r->fetchAll(PDO::FETCH_OBJ);
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }

    public function guardar_u($numero_documento, $fk_id_tipodoc, $primer_nombre, $segundo_nombre, 
    $primer_apellido, $segundo_apellido, $departamento, $ciudad, $direccion, $email, $password,
     $telefono, $fk_id_rol, $estado)
    {
        try {
            $r = parent::connect()->prepare("INSERT INTO usuario(
                numero_documento,
                fk_id_tipodoc,
                primer_nombre,
                segundo_nombre,
                primer_apellido,
                segundo_apellido,
                departamento,
                ciudad,
                direccion,
                email,
                password,
                telefono,
                fk_id_rol,
                estado
                )
                 VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?)");
            $r->bindParam(1, $numero_documento, PDO::PARAM_STR);
            $r->bindParam(2, $fk_id_tipodoc, PDO::PARAM_STR);
            $r->bindParam(3, $primer_nombre, PDO::PARAM_STR);
            $r->bindParam(4, $segundo_nombre, PDO::PARAM_STR);
            $r->bindParam(5, $primer_apellido, PDO::PARAM_STR);
            $r->bindParam(6, $segundo_apellido, PDO::PARAM_STR);
            $r->bindParam(7, $departamento, PDO::PARAM_STR);
            $r->bindParam(8, $ciudad, PDO::PARAM_STR);
            $r->bindParam(9, $direccion, PDO::PARAM_STR);
            $r->bindParam(10, $email, PDO::PARAM_STR);
            $r->bindParam(11, $password, PDO::PARAM_STR);
            // $password = password_hash($_POST['password'], PASSWORD_BCRYPT);
            // $r->bindParam(':password', $password);
            $r->bindParam(12, $telefono, PDO::PARAM_INT);
            $r->bindParam(13, $fk_id_rol, PDO::PARAM_INT);
            $r->bindParam(14, $estado, PDO::PARAM_INT);
                // print_r($r);die;
            $r->execute();
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }

    // public function update_r($id_rol)
    // {
    //     try {
    //         $r = parent::connect()->prepare("SELECT * FROM usuario WHERE id_rol = ?");
    //         $r->bindParam(1, $id_rol, PDO::PARAM_INT);
    //         $r->execute();
    //         return $r->fetch(PDO::FETCH_OBJ);
    //     } catch (Exception $e) {
    //         die($e->getMessage());
    //     }
    // }

    // public function delete_r($id_rol)
    // {
    //     try {
    //         $r = parent::connect()->prepare("DELETE FROM rol WHERE id_rol = ?");
    //         $r->bindParam(1, $id_rol, PDO::PARAM_INT);
    //         $r->execute();
    //         //$r->execute(array(':id_producto'=> $id_producto));
    //     } catch (Exception $e) {
    //         die($e->getMessage());
    //     }
    // }

    // public function details_r($id)
    // {
    //     try {
    //         $r = parent::connect()->prepare("SELECT * FROM rol WHERE id_rol = ?");
    //         $r->bindParam(1, $id, PDO::PARAM_INT);
    //         $r->execute();
    //         return $r->fetch(PDO::FETCH_OBJ); // trae un solo registro
    //     } catch (Exception $e) {
    //         die($e->getMessage());
    //     }
    // }

    public function get_email($email)
    {
        try {
            $r = parent::connect()->prepare("SELECT * FROM usuario WHERE email =?");
            $r->bindParam(1, $email, PDO::PARAM_STR);
            $r->execute();
            return $r->fetch(PDO::FETCH_OBJ);
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }
}
