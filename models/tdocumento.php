<?php
class tdocumento extends DB
{
    /*
     *  obtener el registro de todos los usuarios registrados en la DB
     */
    public function get_all()
    {
        try {
            $rtd = parent::connect()->prepare("SELECT * FROM tipo_documento");
            $rtd->execute();
            return $rtd->fetchAll(PDO::FETCH_OBJ);
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }

    // public function guardar_r($nombre, $descripcion)
    // {
    //     try {
    //         $r = parent::connect()->prepare("INSERT INTO rol(nombre_rol, descripcion) VALUES (?,?)");
    //         $r->bindParam(1, $nombre, PDO::PARAM_STR);
    //         $r->bindParam(2, $descripcion, PDO::PARAM_STR);
    //         $r->execute();
    //     } catch (Exception $e) {
    //         die($e->getMessage());
    //     }
    // }

    // public function update_r($id_rol)
    // {
    //     try {
    //         $r = parent::connect()->prepare("SELECT * FROM rol WHERE id_rol = ?");
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
}