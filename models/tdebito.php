<?php
class tdebito extends DB
{
    /*
     *  obtener el registro de todos los usuarios registrados en la DB
     */
    public function get_all()
    {
        try {
            $r = parent::connect()->prepare("SELECT * FROM tarjeta_debito");
            $r->execute();
            return $r->fetchAll(PDO::FETCH_OBJ);
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }

    // public function guardar_td($nombre, $apellido, $banco , $numero_t )
    // {
    //     try {
    //         $r = parent::connect()->prepare("INSERT INTO tarjeta_debito(nombre, apellido, nombre_banco, numero_de_tarjeta) VALUES (?,?,?,?)");
    //         $r->bindParam(1, $nombre, PDO::PARAM_STR);
    //         $r->bindParam(2, $apellido, PDO::PARAM_STR);
    //         $r->bindParam(3, $banco, PDO::PARAM_STR);
    //         $r->bindParam(4, $numero_t, PDO::PARAM_STR);
    //         $r->execute();
    //     } catch (Exception $e) {
    //         die($e->getMessage());
    //     }
    // }

    // public function delete_product($id_producto)
    // {
    //     try {
    //         $r = parent::connect()->prepare("DELETE FROM tipo_producto WHERE id_producto = ?");
    //         $r->bindParam(1, $id_producto, PDO::PARAM_INT);
    //         $r->execute();
    //         //$r->execute(array(':id_producto'=> $id_producto));
    //     } catch (Exception $e) {
    //         die($e->getMessage());
    //     }
    // }
}