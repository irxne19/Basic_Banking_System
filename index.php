<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    
    <title>Brickfield Bank</title>
  </head>
  <style>
.intro{
	background: linear-gradient(to right, #b993d6, #8ca6db);
}
  </style>


  <body>
  <?php
  include 'navbar.php';
  ?>
  
      <div class="container-fluid">
      <!-- Introduction section -->
            <div class="row intro py-1">
              <div class="col-sm-12 col-md">
                <div class="heading text-center my-5">
                  <h3>Welcome to</h3>
                  <h1>BRICKFIELD BANK</h1>
                  <h4 style="font-family:'lucida handwriting',cursive">Build A Better Life Around Us!</h4>
                </div>
              </div>
              <div class="col-sm-10 col-md img text-center">
                <img src="img/wallet.webp" class="img-fluid pt-2">
              </div>
            </div>

      <!-- Activity section -->
            <div class="row activity text-center">
                  <div class="col-md act">
                  <img src="img/cash1.jpeg" width="215px" height="176px" style="margin:20px;" class="img-fluid">
                    <br>
                    <a href="transfermoney.php"><button>Make a Transaction</button></a>
                  </div>
                  <div class="col-md act">
                    <img src="img/trans1.jpeg" width="215px" height="176px" style="margin:20px;" class="img-fluid">
                    <br>
                    <a href="transactionhistory.php"><button>View Transaction History</button></a>
                  </div>
            </div>
      </div>
      <footer class="text-center mt-5 py-2">
        <p>&copy 2021 Made by <b>Irene Ann Mathew</b> <br> The Sparks Foundation</p>
      </footer>
      <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
  </body>
</html>
