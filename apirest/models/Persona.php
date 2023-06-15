<?php


class Persona extends Conectar{
    

    public function get_persona()
    {
        $conectar = parent::Conexion();
        parent::set_name();
        $stm = $conectar->prepare("SELECT * FROM Persona");
        $stm -> execute();
        return $stm->fetchAll(PDO::FETCH_ASSOC); 
    }

    public function get_persona_id($id_persona)
    {
        $conectar = parent::Conexion();
        parent::set_name();
        $stm = $conectar ->prepare("SELECT * FROM Persona WHERE id_persona=?");
        $stm -> bindValue(1,$id_persona);
        $stm -> execute();
        return $stm->fetchAll(PDO::FETCH_ASSOC); 
    }

    public function insert_persona($id_persona,$nombre,$telefono,$correo, $foto, $documento, $tipo_documento, $tipo_persona){
        $conectar=parent::Conexion();
        parent::set_name();
        $stm="INSERT INTO Persona(id_persona,nombre,telefono,correo,foto,documento,tipo_documento, tipo_persona) VALUES(?,?,?,?,?,?,?,?)";
        $stm=$conectar->prepare($stm);
        $stm->bindValue(1,$id_persona);
        $stm->bindValue(2,$nombre);
        $stm->bindValue(3,$telefono);
        $stm->bindValue(4,$correo);
        $stm->bindValue(5,$foto);
        $stm->bindValue(6,$documento);
        $stm->bindValue(7,$tipo_documento);
        $stm->bindValue(8,$tipo_persona);
        $stm->execute();
        return $stm->fetchAll(PDO::FETCH_ASSOC);

    }

}

?>