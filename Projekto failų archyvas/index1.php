<html lang="en">

<?php

include_once('duomenu baze.php');



if(!$con){
    echo 'Not Connected to server';
}


?>

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
            <li class="nav-item "><a href="index1.php" class="nav-link active" aria-current="page">Pagrindinis</a></li>
            <li class="nav-item "><a href="Pasiulyti recepta1.html" class="nav-link ">Pasiūlyti receptą</a></li>
            <li class="nav-item"><a href="receptai1.html" class="nav-link">Receptai</a></li>
            <li class="nav-item"><a href="Kategorijos1.html" class="nav-link">Kategorijos</a></li>
            <li class="nav-item"><a href="parduotuve.php" class="nav-link">Parduotuvė</a></li>
            <li class="nav-item"><a href="Prisijungti.php" class="nav-link">Prisijungti</a></li>
            <li class="nav-item"><a href="Užsiregistruoti.php" class="nav-link">Registracija</a></li>
            

          </ul>
        </header>
      </div>


<div class="container">

            <div class="row py-1">

                <div class="col  m-5 rounded " >
                    <div class="logo">
                    <img src="black logo.svg" class="rounded m-1  " alt="Obouliu pyragas" width="200" height="200">
                </div>
                </div>

                <div class="col  m-5 rounded  text-center ">
               
                <div class="Pavadinimas1 ">
                <h1> Receptai visiems </h1> 
                </div>
                </div>
                
                
                <div class="col m-5 rounded ">
                
                </div>

            </div>

            <div class="row py-3 ">
        
                <div class="col  m-5 rounded" >
                    <img src="obuoliu pyragas.jpg" class="rounded m-1 border border-3 border border border-dark" alt="Obouliu pyragas" width="300" height="250">
                    <div class="text-center fw-bold">
                        <p>Obuolių pyragas</p> 
                    </div>
                </div>
                
                <div class="col  m-5 rounded">
                    <div class="kugelis">
                    <img src="kugelis.jpg" class="rounded m-1 border border-3 border border border-dark" alt="Purus kugelis" width="300" height="250">
                    </div>
                    <div class="text-center fw-bold">
                        
                        <p>Purus kugelis</p>
                        
                    </div>
                </div>
                <div class="col  m-5 rounded">
                    <img src="lazanija.jpg" class="rounded m-1 border border-3 border border border-dark" alt="Lazanija" width="300" height="250">
                    <div class="text-center fw-bold">
                        <p>Lazanija su malta jautiena</p> 
                    </div>
                </div>
            </div>

            <div class="row py-3">
                <div class="col  m-5 rounded">
                    <img src="cezario salotos.jpg" class="rounded m-1 border border-3 border border border-dark" alt="Cezario salotos" width="300" height="250">
                    <div class="text-center fw-bold">
                        <p>Cezario salotos</p> 
                    </div>
                </div>
                <div class="col  m-5 rounded">
                    <img src="moliugu sriuba.jpg" class="rounded m-1 border border-3 border border border-dark" alt="Moliugu sriuba" width="300" height="250">
                    <div class="text-center fw-bold">
                        <p>Moliūgų sriuba</p> 
                    </div>
                </div>
                <div class="col m-5 rounded">
                    <img src="meksikietiska.jpg" class="rounded m-1 border border-3 border border-dark" alt="Meksikietiska" width="300" height="250">
                    <div class="text-center fw-bold">
                        <p>Meksikietiška sriuba su pupelėm</p> 
                    </div>
                </div>
            </div> 
      <!-- </div>-->
    </div>

    <div class="container">

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