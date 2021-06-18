<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <link rel="stylesheet" type="text/css" href="css/navbar_new.css">
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500&display=swap" rel="stylesheet">

  <title>Basic Banking System</title>
</head>

<body>
  <?php
  include 'misc/navbar.php';
  ?>

  <div class="container-fluid">
    <!-- Introduction section -->
    <div class="row intro bg-new py-1 d-flex align-items-center flex-wrap justify-content-center cs-bg">
      <div class="col-sm-12 col-md-6">
        <img src="./img/bank__left.png" alt="" srcset="" class="img-fluid">
      </div>
      <div class="col-sm-12 col-md-6">
        <h1 class="text-white">Welcome to TSF Bank</h1>
        <button class="header__button mt-3"><a style="text-decoration:none; color:white;" href="#services">Get Started</a></button>
      </div>

    </div>

    <!-- Activity section -->
    <div class="container mt-2">
      <h1 class = "text-center">Our Services</h1>
      <div class="row activity text-center" id="services">

        <div class="col-md  rounded-lg mr-3">

          <img src="img/users_final.png" height = "200">
          <br>
          <a href="createuser.php"><button class="cus-button">Create a User</button></a>
        </div>
        <div class="col-md  p-2 rounded-lg">
          <img src="img/transfer_final.png" height = "200">

          <br>
          <a href="transfer_money.php"><button class="cus-button">Transfer Money</button></a>
        </div>
        <div class="col-md   p-2 rounded-lg ml-3">

          <img src="img/transaction_history_final.png" height = "200">
          <br>
          <a href="transaction_history.php"><button class="cus-button">Transaction History</button></a>
        </div>
      </div>
    </div>
  </div>

  <footer class="text-center mt-5 py-2 d-flex justify-content-around">
    <div class="text__left">
      <p>Made by <b>Vishal </b> | The Sparks Foundation</p>
    </div>
    <div class="text__right px-2">
      <span>Source<a href="https://github.com/vishal20156/sparksbank" style = "text-decoration:none"> <img src="./img/github.png" alt=""></a></span>
      <span>Reach out to me<a href="https://www.linkedin.com/in/vishal171"  style = "text-decoration:none"> <img src="./img/linkedin.png" alt=""></a></span>
    </div>
  </footer>
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</body>

</html>