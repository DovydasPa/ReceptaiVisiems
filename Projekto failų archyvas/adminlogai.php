

<?php
include_once('duomenu baze.php');

if(!$con){
    echo 'Not Connected to server';
}



if(isset($_POST['log_name']) && isset($_POST['pasv']) ){
    $Va=$_POST['log_name'];
    $Pa=$_POST['pasv'];
    

    }
    
    
    
    $k=0;

if(isset($_POST['submit'])){


    if(empty($Va) || empty($Pa) ){
        $error_tuscia="Prašome užpildyti visus laukelius";
        $k=1;
    }

    elseif(isset($Va) and isset($Pa) ){
       
            $sql="INSERT INTO `admin`(`Vardas`, `Slaptažodis`)
     VALUES ('$Va', '$Pa')";
  
        if(mysqli_query($con,$sql)){
            $u= "Registracija sėkminga";
        }
        
  
        
    
    }
  

    
}

?>
<div class="logoff">
 
 <a href="adminas.php"><input  type="submit" name="logoff" value="Atsijungti">  </a>
</div>

<div >
<h1> Prijunkite naują administratorių </h1>
                                <form action="" method="POST">
                                        
                                        <label>Vardas</label>
                                        <input  type="text" name="log_name">
                                        <label>Slaptažodis</label>
                                        <input type="password" name="pasv">   
                                        <input  type="submit" name="submit" value="Registruotis">
                                    
                                    <div class="col-md-12">
                                        <?php
                                        if($k==1){
                                            echo $error_tuscia. '<br>';
                                        }
                                        ?>
                                        
                                    </div>
<div >
                                  
    <h1> Peržiūrėkite vartotojų duomenis </h1>
    <form action="" method="POST">
    <input type="text" name="search" placeholder="search for admin"> 
    <input type="submit" name="sub" value=">>"> 
    </form>
        
                <table class="lentele">
                    <tr>
                        <th>ID</th>

                        <th>Vardas</th>
                        <th>Pavardė</th>
                        <th>El. paštas</th>
                        <th>Telefono nr.</th>
                        <th>Slaptažodis</th>
                        
                        <th>Trinti</th>
                        
                    </tr>
                    <?php


        $query="SELECT * FROM `registracija`";
        $result=mysqli_query($con,$query);
  
$i=0;
        
        while ($row=mysqli_fetch_array( $result)){
            $id=$row['id'];
          
                                            ?>
            <form action="" method="POST">
                    <tr>
                        <!-- <td><?php echo $row['id']; ?></td> -->
                        <td><?php echo $row['id']; ?></td>

                        <td><?php echo $row['Vardas']; ?></td>
                        <td><?php echo $row['Pavardė']; ?></td>
                        <td><?php echo $row['El.paštas']; ?></td>
                        <td><?php echo $row['Telefonas']; ?></td>
                        <td><?php echo $row['Slaptažodis']; ?></td>
                        
                 

                        <td><a href="istrinti.php?id=<?php echo $row["id"]; ?>"><img class="imgsize" src="trinti.png" alt="ismesti"> </a></td>
            
                    </tr>
                     <?php
        $i++;

} 




             ?>
                 </table>  
                                            
             </form>     
            
 </div>
 <div>
 <?php
if(isset($_POST['title']) && isset($_POST['foto']) && isset($_POST['code']) && isset($_POST['code2']) 
&& isset($_POST['price'])){
    $title=$_POST['title'];
    $foto=$_POST['foto'];
    $code=$_POST['code'];
    $code2=$_POST['code2'];
    $price=$_POST['price'];
    }
$k=0;
$a=0;
    if(isset($_POST['prek_submit'])){


        if(empty($title) || empty($foto) || empty($code) || empty($code2) || empty($price)){
            $error_tuscia="Prašome užpildyti visus laukelius";
            $k=1;
        }
    
        elseif(isset($title) && isset($foto) && isset($code) && isset($code2) && isset($price)){
           
                $sql="INSERT INTO `produktai`(`id`, `pavadinimas`, `price`, `foto`, `code`, `code2`)
         VALUES ('', '$title', '$price', '$foto', '$code', '$code2')";
      
            if(mysqli_query($con,$sql)){
                $a=1;
                $u= "Prekė įkelta";
            }
        }   
    }   
 ?>
<h1>Pridėti naują prekę </h1>

<form action="" method="POST">
                                        <div class="col-md-6">
                                        <label>Prekės aprašymas</label>
                                        <input class="form-control" type="text" name="title">
                                    </div>
                                    <div class="col-md-6">
                                        <label>Nuotraukos pavadinimas</label>
                                        <input class="form-control" type="text" name="foto">
                                    </div>
                                    <div class="col-md-6">
                                        <label>Code</label>
                                        <input class="form-control" type="text" name="code">
                                    </div>
                                    <div class="col-md-6">
                                        <label>Code2</label>
                                        <input class="form-control" type="text" name="code2">
                                    </div>
                                    <div class="col-md-6">
                                        <label>Kaina</label>
                                        <input class="form-control" type="number" name="price">
                                    </div>
                                    
                                    <div class="col-md-12">
                                        
                                        <input  type="submit" name="prek_submit" value="Pridėti prekę">
                                    </div>
                                    <div class="col-md-12">
                                        <?php
                                        if($a==1){
                                            echo $u. '<br>';
                                        }
                                       
                                        if($k==1){
                                            echo $error_tuscia. '<br>';
                                        }
                                        
                                        ?>
                                        
                                    </div>
                                    </form>


 </div>

<style>
.lentele tr, th, td{
    border: 1px solid black;
}
.imgsize{
    height:30px;
}
.logoff{
    margin: auto;
}
</style>
