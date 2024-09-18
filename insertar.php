<?php

include 'dbcon.php';


$fname=$_POST["fname"];
$lname=$_POST["lname"];
$area=$_POST["id_area"];
$fecha=date();

//declarando la consulta

//antes de insertar los datos se debe validar si el registro ya existe ese registro

$selectquery="select * from queja where fname='$fname' and lname='$lname'";

//se ejecuta la consulta
$res2=mysqli_query($con1,$insertsql);

if(mysqli_num_rows($res2)>0)
{
    echo "Ya se registro la queja";
}
else {
    $insertsql="insert into queja(fname,lname,area,fecha)values('$fname','$lname','$area','$fecha')";
//ejecutando
$res=mysqli_query($con1,$insertsql);

if ($res)
{
    echo "Los datos fueron insertados";
    //siempre que hago una insercion o consulta debo cerrar la conexion con la db
    mysqli_close($con1);

    //una buena practica cuando el usuario final termian de hacer la operacion
    //insertar o consultar es redirigido a otra pagina y mostrarle
    //un aviso de que todo salio bien
    header("location:thankyo.html");
}
else {
    echo "Los datos no fueron insertados";
}


}

?>