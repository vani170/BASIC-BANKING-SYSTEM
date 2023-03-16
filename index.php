<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Slab:wght@800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    
    <!-- linking css files -->
    <style>
      <?php include "css/style.css" ?>
      <?php include "css/navbar.css" ?>
    </style>

    <title>Basic Banking System</title>
  </head>

  <body>
    <!-- linking navbar -->
    <?php
    include 'navbar.php';
    ?>
  
    <div class="container-fluid">
      
      <!-- intro -->
      <div class="row intro py-1">
        <div class="col-sm-12 col-md" id="heading">
          <div class="heading text-center my-5">
            <h3>Welcome to</h3>
            <h1>SPARKS BANK</h1>
          </div>
          
          <marquee>
            <pre>Welcome! To the bank of SPARKS!                                               You can see Transaction History!                                               You can Transact!</pre>
          </marquee>
        </div>
      </div>

      <br>
      <br>
      <br>

      <!-- actions -->
      <h3 class="action" ><span style="font-family: 'Roboto Slab', serif">CHOOSE AN ACTION</h3></span>
      <div class="column activity text-center">
        <div class="col-md act">
          <br>
          <br>
          <a href="transactionhistory.php"><button>Transfer History</button></a>
          <a href="transfermoney.php"><button>Transfer Money</button></a>
        </div>
      </div>
    </div>

    <br>

    <!-- footer -->
    <footer class="text-center mt-5 py-2">
      <p>A Project by <b>Vani TELAGADE</b> <br> </p>
    </footer>
    
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
  </body>
</html>