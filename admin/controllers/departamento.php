<?php
require_once(__DIR__."/sistema.php");

class Departamento extends Sistema
{
    public function get($id = null)
    {
        $this->db();
        if (is_null($id)) {
            $sql = "select * from departamento";
            $st = $this->db->prepare($sql);
            $st->execute();
            $data = $st->fetchAll(PDO::FETCH_ASSOC);
        } else {
            $sql = "select * from departamento where id_departamento = :id";
            $st = $this->db->prepare($sql);
            $st->bindParam(":id", $id, PDO::PARAM_INT);
            $st->execute();
            $data = $st->fetchAll(PDO::FETCH_ASSOC);
            $_COOKIE=$st->fetchAll(PDO::FETCH_ASSOC);
        }
        return $data;
    }
    public function new ($data)
    {
        $this->db();
        try{
            $this->db->beginTransaction();
            $sql = "insert into departamento (departamento) values (:departamento)";
            $st = $this->db->prepare($sql);
            $st->bindParam(":departamento", $data['departamento'], PDO::PARAM_STR);
            $st->execute();
            $rc = $st->rowCount();
            $this->db->commit();
        }catch(PDOException $Exception){
            $rc=0;
            $this->db->rollBack();
        }
        return $rc;
    }
    public function edit($id, $data)
    {
        $this->db();
        $sql = "update departamento set departamento = :departamento where id_departamento = :id";
        $st = $this->db->prepare($sql);
        $st->bindParam(":id", $id, PDO::PARAM_INT);
        $st->bindParam(":departamento", $data['departamento'], PDO::PARAM_STR);
        $st->execute();
        $rc = $st->rowCount();
        return $rc;
    }
    public function delete($id)
    {
        $this->db();
        $sql = "delete from departamento where id_departamento = :id";
        $st = $this->db->prepare($sql);
        $st->bindParam(":id", $id, PDO::PARAM_INT);
        $st->execute();
        $rc = $st->rowCount();
        return $rc;
    }


}
$departamento = new Departamento;
?>

