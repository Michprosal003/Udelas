

<style>

nav{
color:black;
background: darkred;





}


img.avatar{
width: 7%;
border-radius: 50%;
margin-bottom: 15px;





}


</style>
















<?php 
require_once("connection.php");
$query="SELECT * FROM Smallville";
$result=mysqli_query($conn,$query);


?>








<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS/bootstrap.css">
    <title>Creditos</title>
</head>
<body>


<nav>

<img src="background/phpphp.png"  alt="avatar" class="avatar">


</nav>


<table class="table table-bordered table-table-striped table-hover">
<tr>
<td>ID</td>
<td>CODIGO</td>
<td>MATERIA</td>
<td>NOTA</td>
<td>GRUPO</td>
<td>JORNADA</td>
<td>ESTADO</td>
<td>ACCION</td>
<td>ACCION</td>
</tr>



<?php 

while($row=mysqli_fetch_assoc($result))
{
        
    
        $ID=$row['ID'];
        $Codigo=$row['Codigo']; 
        $Materia=$row['Materia']; 
        $Nota=$row['Nota']; 
        $Grupo=$row['Grupo'];
        $Jornada=$row['Jornada'];
        $Estado=$row['Estado'];

?>


<tr>
<td><?php echo $ID?></td>
<td><?php echo $Codigo?></td>
<td><?php echo $Materia?></td>
<td><?php echo $Nota?></td>
<td><?php echo $Grupo?></td>
<td><?php echo $Jornada?></td>
<td><?php echo $Estado?></td>
<td><a href="edit.php?GetID=<?php echo $ID?>"class="btn btn-danger">Actualizar</a></td>
<td><a href="delete.php?Del=<?php echo $ID?>"class="btn btn-secondary">Eliminar</a></td>
</tr>

<?php
}

?>










</table>








    
</body>
</html>