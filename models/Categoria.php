<?php


class Categoria extends Conectar {

   public function get_categoria(){
        $conectar=parent::conexion();
        parent::set_name();
        $sql="SELECT * FROM CATEGORY WHERE estado=1";
        $sql=$conectar->prepare($sql);
        $sql->execute();
        return $resultado=$sql->fetchAll(PDO::FETCH_ASSOC);
    }


   public function get_categoria_id($id){
        $conectar=parent::conexion();
        parent::set_name();
        $sql="SELECT * FROM CATEGORY WHERE estado=1 AND id=?";
        $sql=$conectar->prepare($sql);
        $sql->bindValue(1,$id);
        $sql->execute();
        return $resultado=$sql->fetchAll(PDO::FETCH_ASSOC);

    }

      public function insert_categoria($nom,$descri){
        $conectar=parent::conexion();
        parent::set_name();
        $sql="INSERT INTO CATEGORY(id,nombre,descripcion,estado) VALUES(NULL,?,?,1)";
        $sql=$conectar->prepare($sql);
        $sql->bindValue(1,$nom);
        $sql->bindValue(2,$descri);
        $sql->execute();
        return $resultado=$sql->fetchAll(PDO::FETCH_ASSOC);
    }


       public function update_categoria($id,$nom,$descrip){
        $conectar=parent::conexion();
        parent::set_name();
        $sql="UPDATE CATEGORY set nombre=?, descripcion=? WHERE id=?";
        $sql=$conectar->prepare($sql);
        $sql->bindValue(1,$nom);
        $sql->bindValue(2,$descrip);
        $sql->bindValue(3,$id);
        $sql->execute();
        return $resultado=$sql->fetchAll(PDO::FETCH_ASSOC);



    }


        public function delete_categoria($id){
        $conectar=parent::conexion();
        parent::set_name();
        $sql="UPDATE CATEGORY set estado=0  WHERE id=?";
        $sql=$conectar->prepare($sql);
        $sql->bindValue(1,$id);
        $sql->execute();
        return $resultado=$sql->fetchAll(PDO::FETCH_ASSOC);

    }

}

?>