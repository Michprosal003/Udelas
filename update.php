<?php 
require_once("connection.php");
if(isset($_POST['update']))

{

    $ID=$_GET['ID'];
    $Codigo=$_POST['Codigo']; 
    $Materia=$_POST['Materia']; 
    $Nota=$_POST['Nota']; 
    $Grupo=$_POST['Grupo'];
    $Jornada=$_POST['Jornada'];
    $Estado=$_POST['Estado'];
    $query="UPDATE Smallville SET Codigo='".$Codigo."',  Materia='".$Materia."', Nota='".$Nota."', Grupo='".$Grupo."', Jornada='".$Jornada."', Estado ='".$Estado."' WHERE ID='".$ID."'";
    $result=mysqli_query($conn,$query);
    if($result)
    {
        header("location:view.php");
    }

    else 
    {
        echo"Revisa tu query nuevamente";
    }
}


else 
{
header("location:welcome.php");
}
    
 


    



?>