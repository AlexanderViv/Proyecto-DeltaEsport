<?php
include("conexion.php");

if(isset($_POST['send'])){
    if(
        /*Se agrega este bloque para verificar que el usuario no deje vacio el input por eso se agrega el condicional mayor o igual a 1 y el operador and */
        strlen($_POST['name'])>= 1 &&
        strlen($_POST['password'])>= 1 &&
        strlen($_POST['email'])>= 1 &&
        strlen($_POST['phone'])>= 1
    ) {
/*El siguiente bloque asigna los valores enviados por el formulario a traves de POST a variables locales*/
        $name=trim($_POST['name']);
        $password=trim($_POST['password']);
        $email=trim($_POST['email']);
        $phone= trim($_POST['phone']);
       $fecha = isset($_POST['fecha']) ? trim($_POST['fecha']) : '';

        $consulta="INSERT INTO datos(nombre,contraseña,email,telefono,fecha )
                    VALUES('$name','$password','$email','$phone','$fecha')";
        $resultado = mysqli_query($conex,$consulta);
        if ($resultado){
            ?>
            <h3 class="succes">Tu registro se completo exitosamente</h3>
            <?php
        }else{
            ?>
            <h3 class="error">Ocurrio un error inesperado"</h3>
            <?php
        }
    }else{
        ?>
        <h3 class="error">Llena todos los campos del formulario</h3>
        <?php
    }
}
?>