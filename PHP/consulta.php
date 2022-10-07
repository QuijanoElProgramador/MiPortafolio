<?php
    include "conexion.php";
    if (isset($_POST['accion2']) == 'delete_') {
        $elid = $_POST['ladata'];
        $objeconectar = new Conexion();

        $objeconectar = new Conexion();
        $delete_img = "SELECT imagen from proyectos where id = $elid";
        $res = $objeconectar->Consulta_A_Bd($delete_img);
        unlink("../IMG/".$res[0]['imagen']);
        $sqlDe = "DELETE FROM `proyectos` WHERE `proyectos`.`id` = $elid";
        $objeconectar->InUpDelete($sqlDe);
    }else if (isset($_FILES['img'])) {
        $titulo = $_POST['pt'];
        $fecha = new DateTime();
        $img = $fecha->getTimestamp()."_".$_FILES["img"]['name'];
        $img_tmp = $_FILES['img']['tmp_name'];
        $L = move_uploaded_file($img_tmp,"../IMG/".$img);
        $description = $_POST['desc'];
        $link_p = $_POST['link'];
        

        $objeconectar = new Conexion();
        $sqlUp = "INSERT INTO proyectos(id,imagen,titulo,descripcion,enlace)VALUE(null,'$img','$titulo','$description','$link_p')";
        $objeconectar->InUpDelete($sqlUp);
    }else {
        $objeconectar = new Conexion();
        $sql = "SELECT * FROM proyectos";
        $res = $objeconectar->Consulta_A_Bd($sql);
        $transformado = json_encode($res);
        echo $transformado;
    }
    
    