
<?php
    if(isset($_POST['admin_submit'])){
        if(empty($_POST['admin']) || empty($_POST['admin_slapt']) ){
            $error="Užpildykite visus laukelius";
        }

        else{
            $Admin=$_POST['admin'];
            $Slapt=$_POST['admin_slapt'];
          
            
            $con=mysqli_connect("localhost","root","", "kursinis");
            
            $query=mysqli_query($con, "select * from `admin` WHERE `Vardas`='$Admin' AND `Slaptažodis`='$Slapt' ");
            
            $row=mysqli_fetch_array($query);
            if($row['Vardas']==$Admin && $row['Slaptažodis']==$Slapt){
                $error= "Sveikiname prisijungus";
                header("Location: adminlogai.php");
            }
            else{
                $error="Bandykite dar kartą";
            }
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   
    <title>ADMIN</title>
</head>
<body>
    
<div >
                                <form action="" method="POST" >
                                     
                                   
                                        
                                       <p>Prisijungimo vardas <input  type="text" name="admin"></p>
                                    
                                    
                                    
                                       <p>Slaptažodis <input  type="password" name="admin_slapt"></p>
                                   
                                        
                                        <input  type="submit" name="admin_submit" value="Prisijungti">
                                    
                                    
                                    </form>
        </div>

</body>
</html>