<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Receptai visiems</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    
    <link rel="stylesheet" href="stilius1.css">

</head>
<body>


    <div class="container">
        <header class="d-flex flex-wrap justify-content-center py-3 mb-4 border-bottom border-3 border-dark">
          <a class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-dark text-decoration-none">
            <svg class="bi me-2" width="40" height="32"></svg>
            <div class="Pavadinimas">
                <span class="fs-4 fw-bold"> RECEPTAI VISIEMS </span>
          </div>
        </a>
    
          <ul class="nav nav-pills ">
            <li class="nav-item"><a href="index1.php" class="nav-link">Pagrindinis</a></li>
            <li class="nav-item"><a href="Pasiulyti recepta1.html" class="nav-link">Pasiūlyti receptą</a></li>
            <li class="nav-item"><a href="receptai1.html" class="nav-link">Receptai</a></li>
            <li class="nav-item"><a href="Kategorijos1.html" class="nav-link">Kategorijos</a></li>
            <li class="nav-item"><a href="parduotuve.php" class="nav-link">Parduotuvė</a></li>
            <li class="nav-item"><a href="Prisijungti.php" class="nav-link">Prisijungti</a></li>
            <li class="nav-item"><a href="Užsiregistruoti.html" class="nav-link active" aria-current="page">Registracija</a></li>
            

          </ul>
        </header>
      </div>

    <div class="container">
        <div class="row py-1 ps-5">

        <div class="col  m-5 rounded " >
        <div class="logo">
        <img src="black logo.svg" class="rounded m-1  " alt="Obouliu pyragas" width="200" height="200">
        </div>
        </div>

        <div class="col  m-5 rounded  text-center ps-5">

        <div class="Pavadinimas1 ">
        <h1> Registracija </h1> 
        </div>
        </div>


        <div class="col m-5 rounded ">

        </div>

        </div>
    </div>



      <?php
include_once('duomenu baze.php');



if(!$con){
    echo 'Not Connected to server';
}



if(isset($_POST['V']) && isset($_POST['P']) && isset($_POST['El']) && isset($_POST['Tel']) 
&& isset($_POST['Slapt']) && isset($_POST['Slapt2'])){
    $Va=$_POST['V'];
    $Pa=$_POST['P'];
    $E=$_POST['El'];
    $Te=$_POST['Tel'];
    $Sla=$_POST['Slapt'];
    $Sla2=$_POST['Slapt2'];

    }
    $a=0;
    $b=0;
    $c=0;
    $k=0;

if(isset($_POST['registracija_submit'])){


    if(empty($Va) || empty($Pa) || empty($E) || empty($Te) || empty($Sla) || empty($Sla2)){
        $error_tuscia="Prašome užpildyti visus laukelius";
        $k=1;
    }

    elseif(isset($Va) and isset($Pa) and isset($E) and isset($Te) and isset($Sla) and isset($Sla2)){
       
        if ($Te!=is_numeric($Te) ){
            $u= "Neteisingai įvestas telefono numeris/ 86******* ";
            $a=1;
    
        }
        elseif (strlen(trim($Te))< 9 && strlen(trim($Te))> 9){
            $g= "Neteisingai įvestas telefono numeris/ 86******* ";
            $b=1;
        }  

        elseif($Sla!=$Sla2){
            $f="Slaptažodžiai turi sutapti";
            $c=1;
         }
      
        elseif($a==0){
            $sql="INSERT INTO `registracija`(`Vardas`, `Pavardė`, `El.paštas`, `Telefonas`, `Slaptažodis`, `Slaptažodis 2`)
     VALUES ('$Va', '$Pa', '$E', '$Te', '$Sla', '$Sla2')";
  
        if(mysqli_query($con,$sql)){
            $u= "Registracija sėkminga";
        }
        
  
        }
    
    }
  

    elseif(empty($Va) || empty($Pa) || empty($E) || empty($Te) || empty($Sla) || empty($Sla2)){
    $error_tuscia="Prašome užpildyti visus laukelius";
    }
}

?>


    <div class="row lygiai">
                                    <form action="" method="POST">
                                            <div class="col-md-6 mx-auto">
                                            <label>Vardas</label>
                                            <input class="form-control" type="text" name="V">
                                        </div>
                                        <div class="col-md-6 mx-auto">
                                            <label>Pavardė</label>
                                            <input class="form-control" type="text" name="P">
                                        </div>
                                        <div class="col-md-6 mx-auto">
                                            <label>El.Paštas</label>
                                            <input class="form-control" type="email" name="El">
                                        </div>
                                        <div class="col-md-6 mx-auto">
                                            <label>Telefono nr.</label>
                                            <input class="form-control" type="number" name="Tel">
                                        </div>
                                        <div class="col-md-6 mx-auto">
                                            <label>Slaptažodis</label>
                                            <input class="form-control" type="password" name="Slapt">
                                        </div>
                                        <div class="col-md-6 mx-auto">
                                            <label>Pakartokite slaptažodį</label>
                                            <input class="form-control" type="password" name="Slapt2">
                                        </div>
                                        <div class="col-md-6 mx-auto mygtukas3">
                                            
                                            <input  type="submit" name="registracija_submit" value="Registruotis">
                                        </div>
                                        <div class="col-md-6 mx-auto text-color:danger">
                                            <?php
                                            if($a==1){
                                                echo $u. '<br>';
                                            }
                                            if($b==1){
                                                echo $g. '<br>';
                                            }
                                            if($c==1){
                                                echo $f. '<br>';
                                            }
                                            if($k==1){
                                                echo $error_tuscia. '<br>';
                                            }
                                            
                                            ?>
                                            
                                        </div>
                                        </form>
    </div>
      <!-- </div>-->
    

    <div class="container labas">

        <footer class="d-flex flex-wrap justify-content-between align-items-center py-3 my-4 border-top border-3 border-dark">
          <p class="col-md-4 mb-0 text-muted">&copy; 2021 Receptaivisiems.lt</p>
      
          <ul class="nav col justify-content-end">
            <li class="nav-item"><a href="#" class="nav-link px-3 text-muted">Facebook: Receptai visiems</a></li>
            <li class="nav-item"><a href="#" class="nav-link px-3 text-muted">Privatumo politika</a></li>
            <li class="nav-item"><a href="#" class="nav-link px-3 text-muted">Gmail: receptaivisiems@gmail.com</a></li>
          </ul>
        </footer>

    </div>



</body>
</html>

<style>

.lygiai{
    padding: 100px 0 0 80px;
    margin: auto;
    
    
}

.mygtukas3{

    padding: 20px 0 0 0px;

}
</style>