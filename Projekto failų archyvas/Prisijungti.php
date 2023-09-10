
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
            <li class="nav-item"><a href="Prisijungti.php" class="nav-link active" aria-current="page">Prisijungti</a></li>
            <li class="nav-item"><a href="Užsiregistruoti.php" class="nav-link" >Registracija</a></li>
            

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
        <h1> Prisijungti </h1> 
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

$error='';
$paejo='';
if(isset($_POST['log_submit'])){
if(empty($_POST['El1']) || empty($_POST['Slapt1']) ){
    $error="Užpildykite visus laukelius";
}
else{
    $E1=$_POST['El1'];
  
    $Sla1=$_POST['Slapt1'];
    $con=mysqli_connect("localhost","root","", "kursinis");
    
    $query=mysqli_query($con, "select * from `registracija` WHERE `Slaptažodis`='$Sla1' AND `El.paštas`='$E1' ");
    $row=mysqli_fetch_array($query);
    if($row['El.paštas']==$E1 && $row['Slaptažodis']==$Sla1){
        $error= "Sveikiname prisijungus";
        $paejo= $row['Vardas'];
    }
    else{
        $error="Bandykite dar kartą";
    }
}
}


?>






        <div class="row du">
                                <form action="" method="POST" >
                                     
                                    <div class="col-md-6 mx-auto">
                                        <label>El.Paštas</label>
                                        <input class="form-control" type="email" name="El1">
                                    </div>
                                    
                                    <div class="col-md-6  mx-auto">
                                        <label>Slaptažodis</label>
                                        <input class="form-control " type="password" name="Slapt1" >
                                    </div>
                                    
                                    <div class="col-md-6 mx-auto mygtukas2">
                                        
                                        <input  type="submit" name="log_submit" value="Prisijungti">
                                    </div>
                                    <span><?php echo $error. ' ' .$paejo; ?> </span>
                                    </form>
        </div>



    <div class="container labas">
        <div class="labas">
        <footer class=" d-flex flex-wrap justify-content-between align-items-center py-3 my-4 border-top border-3 border-dark">
          <p class="col-md-4 mb-0 text-muted">&copy; 2021 Receptaivisiems.lt</p>
      
          <ul class="nav col justify-content-end">
            <li class="nav-item"><a href="#" class="nav-link px-3 text-muted">Facebook: Receptai visiems</a></li>
            <li class="nav-item"><a href="#" class="nav-link px-3 text-muted">Privatumo politika</a></li>
            <li class="nav-item"><a href="#" class="nav-link px-3 text-muted">Gmail: receptaivisiems@gmail.com</a></li>
          </ul>
        </footer>

        </div>
    </div>


</body>
</html>

<style>
.du{
    padding: 100px 0 0 80px;
    margin: auto;
    
    
}

.mygtukas2{

    padding: 20px 0 0 0px;

}
</style>