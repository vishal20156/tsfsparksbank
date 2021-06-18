<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Create User</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="css/table.css">
  <link rel="stylesheet" type="text/css" href="css/createuser.css">

  <link rel="stylesheet" type="text/css" href="css/style.css">
  <link rel="stylesheet" type="text/css" href="css/navbar_new.css">
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500&display=swap" rel="stylesheet">
</head>

<body style="background:linear-gradient(57deg,#00c6a7,#1e4d92);">
  <?php
  $inserted = false;
  include 'misc/config.php';
  if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $balance = $_POST['balance'];
    $sql = "insert into users(name,email,balance) values('{$name}','{$email}','{$balance}')";
    $result = mysqli_query($conn, $sql);
    if($result){
      $inserted = true;
    }
  }
  ?>

  <?php
  include 'misc/navbar.php';
  ?>
  <?php
  if ($inserted) {
    echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
    <strong>Congratulations! </strong>Your account is now created
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
      <span aria-hidden="true">&times;</span>
    </button>
  </div>';
  }
  ?>


  <br>

  <div class="background">
    <div class="container mt-4">
      <div class="row">
        <div class="col-sm-12 col-md text-center d-flex align-items-center">


          <div class="text__left">
            <h1 class="text-white" style = "margin-top:25%";>Create an account now to get access to our services</h1>
          </div>

        </div>

        <div class="col-sm-12 col-md">
          <form class="m-4"  method = "POST">
            <div class="img text-center">
              <img src="img/create_user.png" height="200" alt="">
            </div>
            <div class="form-group">
              <label for="exampleInputEmail1">Name</label>
              <input type="text" name="name" class="form-control input-lg" id="exampleInputEmail1" aria-describedby="emailHelp">

            </div>
            <div class="form-group">
              <label for="exampleInputPassword1">Email</label>
              <input type="email" name="email" class="form-control input-lg" id="exampleInputPassword1">
            </div>
            <div class="form-group">
              <label class="" for="balance">Balance</label>
              <input type="number" name="balance" class="form-control input-lg" id="balance">

            </div>
            <div class="sub_btn text-center">
            <button type="submit" name = "submit" class="btn btn-primary">Submit</button>
            </div>
         
          </form>
        </div>
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
      <span>Reach out to me<a href="http://www.linkedin.com/in/vishal171"  style = "text-decoration:none"> <img src="./img/linkedin.png" alt=""></a></span>
    </div>
  </footer>
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</body>

</html>