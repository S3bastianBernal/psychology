<?php
if (isset($_POST['subir'])) {
    require_once("../../../../../apirest/models/personas.php");

    $categoria = new Categoria();

    $categoria-> setNombre($_POST['nombre1']);
    $categoria-> setDescripcion($_POST['descripcion']);

    $categoria-> insertData();

    echo "<script>alert('Los datos fueron guardados satisfactoriamente');document.location='categorias.php'</script>";
}
?>