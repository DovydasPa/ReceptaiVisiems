<html lang="en">
<head>

<?php

session_start();
include_once("duomenu baze.php");


?>
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
            <li class="nav-item"><a href="receptai1.html" class="nav-link " >Receptai</a></li>
            <li class="nav-item"><a href="Kategorijos1.html" class="nav-link">Kategorijos</a></li>
            <li class="nav-item"><a href="parduotuve.php" class="nav-link active" aria-current="page">Parduotuvė</a></li>
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
                  <h1> Parduotuvė </h1> 
                  </div>
                  </div>
                
                <div class="col  m-5 rounded ">

                  </div>

            </div>





<div class="containeris border border-3 border border border-dark p-2">
<div class="row g-0">
    <div class="col-sm-6 col-md-8">
    <form>
                <input type="search"  placeholder="Search..." aria-label="Search">
                <input type="submit" placeholder="Search" name="search1" value="Ieškoti">
    </form>
        
    </div>

    <div class="col-6 col-md-4 "> 

        
                  <div class="dropdown mygtukas1">
                      <button class="btn btn-light  dropdown-toggle  " type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                        Rūšiavimas
                      </button>
                      <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                        <form method='post'>
                        <li> <input class="dropdown-item" type="submit"  name="asc_submit" value="Kaina: min-max"> </li>
                        <li> <input class="dropdown-item" type="submit"  name="desc_submit" value="Kaina: max-min"> </li>
                        </form>
                      </ul>
                    </div>
                    </div>

    
</div>




<div class="container">
    <div class="row">
    
    <div class="col-2  sidebar pt-3 text:center">
    <form method='post' class="sidebar">
    
    <input class="sidebar" type="submit" name="submit_mesa"  value="Mėsa"  /> <br>
    <input  class="sidebar" type="submit" name="submit_suris"  value="Sūris"  /> <br>
    <input  class="sidebar" type="submit" name="submit_prieskoniai"  value="Prieskoniai"  /> <br>



    </form>
    </div>

    <div class="col-10 ">
        <div class="row">
                <?php 
                // $result = mysqli_query($con,"SELECT * FROM `produktai`");
                        
                if(isset($_POST['asc_submit'])){
                    $queryasc="select * from produktai order by price asc";
                    $result=filtras($queryasc);
                }
                elseif(isset($_POST['desc_submit'])){
                    $querydesc="select * from produktai order by price desc";
                    $result=filtras($querydesc);
                
                }
                elseif(isset($_POST['submit_mesa'])){
                    
                   
                        $querydov="SELECT * FROM `produktai` WHERE `code`='mesa'";
                     $result=filtras($querydov);
                
                }
                elseif(isset($_POST['submit_suris'])){
                    $querykvep="SELECT * FROM `produktai` WHERE `code`='suris'";
                    $result=filtras($querykvep);
                
                }
                elseif(isset($_POST['submit_prieskoniai'])){
                    $querymak="SELECT * FROM `produktai` WHERE `code`='prieskoniai'";
                    $result=filtras($querymak);
                
                }
                else{
                    $queryid="select * from produktai order by id asc"; 
                    $result=filtras($queryid);
                
                }
                
                
                
                
                function filtras($query){
                 $con= mysqli_connect("localhost","root","","kursinis");
                 $result=mysqli_query($con,$query);
                 
                 return $result;
                }

                    if ($result->num_rows>0) {      
                       while ($row=$result->fetch_assoc( )){
           
                ?>

                   
                

                    <div class="col-3 langas">
                        <form method='post' action="" class="langoimg">
                           
                          <div><p><?php echo $row['pavadinimas']; ?></p></div>
                            
                          <div><img src="image/<?php echo $row['foto']; ?>" alt="Product Image"></div>
                          <div><p><?php echo number_format($row['price'],1 ) ?> €</p></div>
                            
                            
                          <input type="text" class="product-quantity" name="quantity" value="1" size="2" />
                           
                          <a class="btn krepselis" href="cart.php?id=<?php echo $row['id']; ?>">Į kepšelį </a>
                          </form>
                    </div>
                  <?php
              
                      }
                         }
      
                    ?>
        </div>
    </div>
    
    </div>
  </div>
</div>



    
</div>
    </div>
</div>







    <div class="container pt-5">

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
.mygtukas1{

  padding-left: 220px;

}
  
.langas{
    
    border:1px solid black;
    padding:10px;
    margin:40px;
     
}

.langoimg img{
    width:100px;
    display: block;
    margin-left: auto;
    margin-right: auto;
}

.langoimg p{
    text-align:center;
    margin:auto;
    padding-bottom:10px;
}

.krepselis{
  display: block;
  margin-left: auto;
  margin-right: auto;
  border: 1px solid black;
  width:100px;
}

.krepselis:hover{

  color:red;

}

.sidebar{

color:black;
width:100px;
margin-right:50px;
padding-left:10px;
text-decoration: none;
text-align:center;
width:150px;
}

.sidebar:hover{

  color:red;
}

.img{
    height:80px;
    margin-left:30px;
}
</style>






