








<script id="wpcp_disable_Right_Click" type="text/javascript">
    //<![CDATA[
    document.ondragstart = function() { return false;}
   
        function nocontext(e) {
           return false;
        }
        document.oncontextmenu = nocontext;
    //]]>
</script>

<script id="wpcp_css_disable_selection" type="text/javascript">
var e = document.getElementsByTagName('body')[0];
if(e)
{
    e.setAttribute('unselectable',on);
}
</script>



































<?php 

if(isset($_GET['error'])) { ?> 

<p class="error"><?php echo $_GET['error']; ?></p>
<?php 
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
width: 300px;
height: 320px;
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
    <title>Document</title>
</head>
<body>

<div class="zoomreverse">
<div class="pythonfun">
<img src="background/phpphp.png" alt="avatar" class="avatar">


<form action="homepage.php" method="POST" style="max-width:500px;margin:auto">


<div class="javascript">
<i class="fa fa-user icon"></i>
<input class="htmlclass" type="text" name="cedula" placeholder="Cedula" required="cedula">
</div>


<div class="javascript">
<i class="fa fa-envelope icon"></i>
<input class="htmlclass" type="text" name="contraseña" placeholder="Contraseña" required="contraseña">
</div>

<button class="btn" type="submit">Iniciar Sesion</button>
<a href="consulta.php">¿Olvidaste la contraseña? </a>
</div>





</form>




    
</body>
</html>








































