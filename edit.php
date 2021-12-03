


<?php 
require_once("connection.php");
$ID=$_GET['GetID'];
$query="SELECT * FROM Smallville WHERE ID='".$ID."'";
$result=mysqli_query($conn,$query);


while($row=mysqli_fetch_assoc($result))
{
        
    
        $ID=$row['ID'];
        $Codigo=$row['Codigo']; 
        $Materia=$row['Materia']; 
        $Nota=$row['Nota']; 
        $Grupo=$row['Grupo'];
        $Jornada=$row['Jornada'];
        $Estado=$row['Estado'];
}



?>



















<style>

body{
margin:0;
padding:0;
background-color: teal;

}





.javascript{
display: flex;
width: 100%;
margin-bottom: 15px;



}

.icon {
padding:15px;
background:darkred;
color:white;
min-width: 50px;
text-align: center;

}


.htmlclass{
padding:15px;
width: 100%;
outline:none;



}

.htmlclass:focus{

border: 1px solid darkblue;


}

.btn{
background:black;
border:none;
color:white;
cursor:pointer;
padding:15px 20px;
width: 100%;
opacity:0.9;
margin-bottom: 15px;




}

.btn:hover {
opacity:1;



}

.zoomreverse{
position:absolute;
top:50%;
left:50%;
transform:translate(-50%,-50%);
padding:80px 40px;
width: 350px;
height: 600px;
background: rgba(0,0,0,0.5);







}



img.avatar{
width: 50%;
border-radius:50%;
margin-bottom: 15px;



}


.pythonfun {
margin:15px 0 0;
position: relative;
text-align: center;





}


a {
color: white;




}

</style>











<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Actualizar</title>
</head>
<body>

<div class="zoomreverse">
<div class="pythonfun">
<img src="background/Logo.jpg" alt="avatar" class="avatar">


<form action="update.php?ID=<?php echo $ID?>" method="POST" style="max-width:500px;margin:auto">


<div class="javascript">
<i class="fa fa-user icon"></i>
<input class="htmlclass" type="text" name="Codigo" placeholder="Codigo" value="<?php echo $Codigo?>">
</div>


<div class="javascript">
<i class="fa fa-envelope icon"></i>
<input class="htmlclass" type="text" name="Materia" placeholder="Materia" value="<?php echo $Materia?>">
</div>






<div class="javascript">
<i class="fa fa-envelope icon"></i>
<input class="htmlclass" type="text" name="Nota" placeholder="Nota"   value="<?php echo $Nota?>">
</div>


<div class="javascript">
<i class="fa fa-envelope icon"></i>
<input class="htmlclass" type="text" name="Grupo" placeholder="Grupo"   value="<?php echo $Grupo?>">
</div>


<div class="javascript">
<i class="fa fa-envelope icon"></i>
<input class="htmlclass" type="text" name="Jornada" placeholder="Jornada"   value="<?php echo $Jornada?>">
</div>


<div class="javascript">
<i class="fa fa-envelope icon"></i>
<input class="htmlclass" type="text" name="Estado" placeholder="Estado"   value="<?php echo $Estado?>">
</div>


<button class="btn" name="update">Actualizar</button>

</div>





</form>




    
</body>
</html>
























































