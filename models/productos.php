<?php
class productos extends DB
{
    /*
     *  obtener el registro de todos los usuarios registrados en la DB
     */
    public function get_all()
    {
        try {
            $r = parent::connect()->prepare("SELECT * FROM tipo_producto");
            $r->execute();
            return $r->fetchAll(PDO::FETCH_OBJ);
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }

    public function guardar_producto($nombre, $descripcion, $precio)
    {
        try {
            $r = parent::connect()->prepare("INSERT INTO tipo_producto(nomb_producto, descripcion, precio) VALUES (?,?,?)");
            $r->bindParam(1, $nombre, PDO::PARAM_STR);
            $r->bindParam(2, $descripcion, PDO::PARAM_STR);
            $r->bindParam(3, $precio, PDO::PARAM_STR);
            $r->execute();
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }

    public function delete_product($id_producto)
    {
        try {
            $r = parent::connect()->prepare("DELETE FROM tipo_producto WHERE id_producto = ?");
            $r->bindParam(1, $id_producto, PDO::PARAM_INT);
            $r->execute();
            //$r->execute(array(':id_producto'=> $id_producto));
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }
}
