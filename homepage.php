<?php 
session_start();
require_once("connection.php");

if(isset($_POST['cedula']) && isset($_POST['contraseña'])) {

    function validate($data)
    {
        $data=trim($data);
        $data=stripslashes($data);
        $data=htmlspecialchars($data);
        return $data;
    }

    $cedula=validate($_POST['cedula']);
    $contraseña=validate($_POST['contraseña']);

    if(empty($cedula))
    {
        header("location:index.php?error=Ingresar una cedula");
        exit();
    }

    else 

    if(empty($contraseña))
    {
        header("location:login.php?error=Ingresar una contraseña");
        exit();
    }

    else 
    {
        $sql="SELECT * FROM way WHERE cedula='$cedula' AND contraseña='$contraseña'";
        $result=mysqli_query($conn,$sql);
        
        if(mysqli_num_rows($result)===1)

        {
            $row=mysqli_fetch_assoc($result);
            if($row['cedula']===$cedula && $row['contraseña']===$contraseña)

            {
                $_SESSION['cedula']=$row['cedula'];
                $_SESSION['nombre']=$row['nombre'];
                $_SESSION['id']=$row['id'];
                header("location:welcome.php");
                exit();
            }

        else 

            
            {
                header("location:login.php?error=cedula o contraseña incorrecta");
                exit();
            }
        }

        else 

        {
            header("location:login.php?error=cedula o contraseña incorrecta");
            exit();
        }
    }
}

else 
{
    header("location:login.php");
    exit();
}




