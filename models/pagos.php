<?php
class pagos extends DB
{
    /*
     *  obtener el registro de todos los usuarios registrados en la DB
     */
    public function get_all()
    {
        try {
            $r = parent::connect()->prepare("SELECT * FROM tipo_pago");
            $r->execute();
            return $r->fetchAll(PDO::FETCH_OBJ);
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }

    public function guardarp($siglas, $tpago)
    {
        try {
            $r = parent::connect()->prepare("INSERT INTO tipo_pago(siglas, nombre_tipo_pago) VALUES (?,?)");
            $r->bindParam(1, $siglas, PDO::PARAM_STR);
            $r->bindParam(2, $tpago, PDO::PARAM_STR);
            $r->execute();
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }

    public function deletep($id_tpago)
    {
        try {
            $r = parent::connect()->prepare("DELETE FROM tipo_pago WHERE id_tpago = ?");
            $r->bindParam(1, $id_tpago, PDO::PARAM_INT);
            $r->execute();
            //$r->execute(array(':id_producto'=> $id_producto));
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }
}
