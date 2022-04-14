<!doctype html>
<html lang="en">
  

<head>
  <link rel="stylesheet" href="style.css">
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
  <link rel="stylesheet" href="style.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@300;400&display=swap" rel="stylesheet">
  <script src="https://kit.fontawesome.com/03a2fb3b55.js" crossorigin="anonymous"></script>
  <!-- Font Awesome -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" rel="stylesheet" />
  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet" />
  <!-- MDB -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.6.0/mdb.min.css" rel="stylesheet" />

  <link rel="stylesheet" href="//code.jquery.com/ui/1.13.0/themes/base/jquery-ui.css">
  <link rel="stylesheet" href="/resources/demos/style.css">
  <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
  <script src="https://code.jquery.com/ui/1.13.0/jquery-ui.js"></script>
  <script>
    $(function () {
      $("#datepicker").datepicker();
    });
  </script>
  <script>
    $(function () {
      $("#datepicker2").datepicker();
    });
  </script>
  <script>
    $(function () {
      $("#datepicker3").datepicker();
    });
  </script>
  <title>Our Helpers</title>
</head>

<style>
  
  html {
    scroll-behavior: smooth;
  }

  body {
    font-family: 'Josefin Sans', sans-serif;
  }
</style>

<body>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj"
    crossorigin="anonymous"></script>
  <!-- MDB -->
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.6.0/mdb.min.js"></script>

  <!-- This is Navbar  -->

  <nav class="navbar navbar-expand-lg navbar-dark bg-dark" id="navbars">
    <div class="container-fluid">
      <a class="navbar-brand" href="#"><img src="logo.jpg" class="logoImg" alt="logo"></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link pageColor" style="color: white;" href="#navbars">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link pageColor" style="color: white;" href="#aboutus">About</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle pageColor" style="color: white;" href="#" id="navbarDropdown"
              role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Features
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
              <li><a class="dropdown-item" href="#plumber">Plumber</a></li>
              <li><a class="dropdown-item" href="#electrician">Electrician</a></li>
              <li>
                <hr class="dropdown-divider">
              </li>
              <li><a class="dropdown-item" href="#cleaner">Cleaner</a></li>
            </ul>
          </li>
          <li class="nav-item">
            <a class="nav-link pageColor" style="color: white;" href="#contactus">Contact</a>
          </li>
          <li class="nav-item">
            <a class="nav-link pageColor" style="color: white;" href="loginpage.html">Login</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- End of Navbar  -->
  <div style="position: fixed; bottom: 40px; right: 40px; z-index: 1;">
    <a href="#navbars" style="color: #ffb268;">
      <div
        style="display: flex; justify-content: center; align-items: center; font-size: 17px; background-color: transparent; border: solid 2px #ffb268; width: 50px; height: 50px; border-radius: 100px;">
        <i class="fas fa-arrow-up"></i>
      </div>
    </a>
  </div>
  <!-- Start Slide Bar  -->

  <div class="container" id="home">
    <div class="row">
      <div class="col-md-6" style="height: 500px; display: flex; justify-content: center; align-items: center;">
        <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img src="https://source.unsplash.com/1600x1000/?plumbing" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
              <img src="https://source.unsplash.com/1600x1000/?cleaner" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
              <img src="https://source.unsplash.com/1600x1000/?carpenter" class="d-block w-100" alt="...">
            </div>
          </div>
          <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls"
            data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
          </button>
          <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls"
            data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
          </button>
        </div>
      </div>
      <div class="col-md-6"
        style="height: 500px; display: flex; flex-direction: column; justify-content: center; align-items: center;">
        <h1>Welcome to Home Care</h1>
        <h6 style="text-align: center; margin-bottom: 10px;">Hire Plumber, Hire Electrician, Hire Cleaner</h6>
        <p style="margin-top: 20px; text-align: center;">This website has a concept through which we can easily do small and big chores around the house. Work like electrician, cleaning, plumber etc. can be done on our mobile at home. If you can't find a servant then you don't have to go looking. You can call home from this website.</p>
      </div>
    </div>
  </div>


  <!-- End of slide Bar -->

  <hr>

  

  <!-- Start Section Area  -->

  <div class="container-fluid" style="margin: 100px 0px;">
    <div class="row">
      <div class="col-md-12">
        <div
          style="background-color: #ffb268; height: 200px; width: 100%; margin-top: 50px; display: flex; justify-content: center; align-items: center; flex-wrap: wrap;">
          <h2 style="margin: 10px 50px;">Want to Learn More?</h2>
          <p>Get started if you want to know how this website<br> works and get more information.</p>
          <button
            style="margin: 0px 50px; background-color: #ffb268; border: solid 2px white; border-radius: 100px; padding: 5px 30px;"
            class="btn btn-primary" id="btnHover">GET STARTED</button>
        </div>
      </div>
    </div>
  </div>
  <!-- End section area  -->

  <!-- Start Worker Area  -->

  <div class="container" style="margin-top: 50px;">
    <div class="container">
      <div class="row">
        <div class="col-md-12"
          style="display: flex; flex-direction: column; justify-content: center; align-items: center;">
          <h1 style="margin-top: 20px; text-align: center; text-decoration: underline; text-decoration-color: #ffb268;">
            Users can call our workers</h1>
          <h5 style="margin-top: 20px; text-align: center;">Select whatever type of servant you want to call here.</h5>
        </div>
      </div>
    </div>
    <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
    <div class="container" id="plumber">
      <div class="row">
        <div class="col-md-6"
          style="box-shadow: 0px 0px 15px 1px rgb(218, 217, 217); font-size: 80px; border: solid 2px #ffb268; padding: 25px 0px; display: flex; flex-direction: column; justify-content: center; align-items: center; color: red; margin-top: 40px;">
          <img src="worker1.jpg" width="140px" height="140px" style="border-radius: 100px;" alt="">
          <h6 style="color: black; margin-top: 20px;">Nitin ( Plumber )</h6>
          <h6 style="text-align: center; color: grey;">
            «Design is the method of putting form and content together; there is no single definition. Design can be
            aesthetics</h6>
        </div>
        <div class="col-md-6" style="margin-top: 40px; padding-left: 50px;">
          <h1 style="color: black; margin-top: 20px;">Contact Plumber</h1>
          
            <h5>Plumber</h5>
            <select class="form-select" id="validationCustom04" name="workersName" required>
              <option selected disabled value="">Choose...</option>
              <option value="Nitin">Nitin</option>
              <option value="Yash">Yash</option>
              <option value="Kenil">Kenil</option>
              <option value="Rahul">Rahul</option>
            </select>
            <p>Date: <input type="text" id="datepicker" name="date"></p>
            <input type="hidden" name="job" value="plumber">
            <button class="btn btn-primary"
              style="background-color: #ffb268; border: none; display: flex; justify-content:flex-start; align-items: center; width: 100px;"
              type="submit">Submit</button>
          
        </div>
      </div>
    </div>
  </form>
  <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
    <div class="container" id="electrician">
      <div class="row">
        <div class="col-md-6" style="margin-top: 40px; padding-right: 50px;">
          <h1 style="color: black; margin-top: 20px;">Contact Electrician</h1>
            <h5>Electrician</h5>
            <select class="form-select" id="validationCustom04" name="workersName" required>
              <option selected disabled value="">Choose...</option>
              <option value="Nitin">Nitin</option>
              <option value="Yash">Yash</option>
              <option value="Kenil">Kenil</option>
              <option value="Rahul">Rahul</option>
            </select>
            <p>Date: <input type="text" id="datepicker2" name="date"></p>
            <input type="hidden" name="job" value="Electrician">
            <button class="btn btn-primary"
              style="background-color: #ffb268; border: none; display: flex; justify-content:flex-start; align-items: center; width: 100px;"
              type="submit">Submit</button>
        </div>
        <div class="col-md-6"
          style=" border: solid 2px #ffb268; box-shadow: 0px 0px 15px 1px rgb(218, 217, 217); font-size: 80px;  display: flex; flex-direction: column; justify-content: center; align-items: center; color: red; margin-top: 40px;">
          <img src="worker2.jpg" width="140px" height="140px" style="border-radius: 100px;" alt="">
          <h6 style="color: black; margin-top: 20px;">Jigar ( Electrician )</h6>
          <h6 style="text-align: center; color: grey;">
            «Design is the method of putting form and content together; there is no single definition. Design can be
            aesthetics</h6>
        </div>
      </div>
    </div>
  </form>
  <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
    <div class="container" id="cleaner">
      <div class="row">
        <div class="col-md-6"
          style="box-shadow: 0px 0px 15px 1px rgb(218, 217, 217); font-size: 80px; border: solid 2px #ffb268; padding: 25px 0px; display: flex; flex-direction: column; justify-content: center; align-items: center; color: red; margin-top: 40px;">
          <img src="worker3.jpg" width="140px" height="140px" style="border-radius: 100px;" alt="">
          <h6 style="color: black; margin-top: 20px;">Neha ( Cleaner )</h6>
          <h6 style="text-align: center; color: grey;">
            «Design is the method of putting form and content together; there is no single definition. Design can be
            aesthetics.</h6>
        </div>
        <div class="col-md-6" style="margin-top: 40px; padding-left: 50px;">
          <h1 style="color: black; margin-top: 20px;">Contact Cleaner</h1>
            <h5>Cleaner</h5>
            <select class="form-select" id="validationCustom04" name="workersName" required>
              <option selected disabled value="">Choose...</option>
              <option value="Nitin">Nitin</option>
              <option value="Yash">Yash</option>
              <option value="Kenil">Kenil</option>
              <option value="Rahul">Rahul</option>
            </select>
            <p>Date: <input type="text" id="datepicker3" name="date"></p>
            <input type="hidden" name="job" value="Cleaner">
            <button class="btn btn-primary"
              style="background-color: #ffb268; border: none; display: flex; justify-content:flex-start; align-items: center; width: 100px;"
              type="submit">Submit</button>
        </div>
      </div>
    </div>
  </div>
</form>

  <!-- End worker Aera  -->
  <!-- Start About Page  -->

  <div class="container" id="aboutus" style="margin-top: 100px;">
    <div class="row">
      <div class="col-md-12"
        style="display: flex; flex-direction: column; justify-content: center; align-items: center;">
        <h1 style="margin-top: 20px; text-decoration: underline; text-decoration-color: #ffb268;">About us</h1>
        <h5 style="margin-top: 20px; text-align: center;">These three types of servants can be called home according to your work.</h5>
      </div>
    </div>
  </div>
  <div class="container">
    <div class="row">
      <div class="col-md-4"
        style="box-shadow: 0px 0px 15px 1px rgb(218, 217, 217); font-size: 80px; border: solid 2px #ffb268; padding: 25px 0px; display: flex; flex-direction: column; justify-content: center; align-items: center; color: #ffb268; margin-top: 40px;">
        <i class="fas fa-faucet"></i>
        <h6 style="color: black; margin-top: 20px;">Plumber</h6>
        <h6 style="text-align: center; color: grey;">Select this option if you have any problem with water in your house or water tep not work, bathroom or washroom problem.</h6>
      </div>
      <div class="col-md-4"
        style="font-size: 80px; display: flex; flex-direction: column; justify-content: center; align-items: center; color: #ffb268; margin-top: 40px;">
        <i class="fas fa-lightbulb"></i>
        <h6 style="color: black; margin-top: 20px;">Light</h6>
        <h6 style="text-align: center; color: grey;">Select this option if you have any problem of wireing in your house or the light bulb is not working and you have installed new lights in your house.</h6>
      </div>
      <div class="col-md-4"
        style="box-shadow: 0px 0px 15px 1px rgb(218, 217, 217); font-size: 80px; border: solid 2px #ffb268; padding: 25px 0px; display: flex; flex-direction: column; justify-content: center; align-items: center; color: #ffb268; margin-top: 40px;">
        <i class="fas fa-broom"></i>
        <h6 style="color: black; margin-top: 20px;">Cleaner</h6>
        <h6 style="text-align: center; color: grey;">Select this option if you want to clean or decorate your house and get the house cleaned every morning.</h6>
      </div>
    </div>
  </div>

  <!-- End About Page  -->

  <!-- Start Contact Area  -->

  <div class="container" id="contactus"
    style="border-top: #ffb268 solid 1px; border-top-left-radius: 100px; border-top-right-radius: 100px; margin-top: 100px; padding: 50px 100px; border-left: solid 1px #ffb268; border-right: solid 1px #ffb268;">
    <div class="container">
      <div class="row">
        <div class="col-md-12"
          style="display: flex; flex-direction: column; justify-content: center; align-items: center;">
          <h1 style="margin-top: 20px; text-decoration: underline; text-decoration-color: #ffb268;">Contact Us</h1>
        </div>
      </div>
    </div>
    <form class="row g-3 needs-validation mt-4" novalidate>
      <div class="col-md-4">
        <label for="validationCustom01" class="form-label">First name</label>
        <input type="text" class="form-control" id="validationCustom01" required>
        <div class="valid-feedback">
          Looks good!
        </div>
      </div>
      <div class="col-md-4">
        <label for="validationCustom02" class="form-label">Last name</label>
        <input type="text" class="form-control" id="validationCustom02" required>
        <div class="valid-feedback">
          Looks good!
        </div>
      </div>
      <div class="col-md-4">
        <label for="validationCustomUsername" class="form-label">Username</label>
        <div class="input-group has-validation">
          <span class="input-group-text" id="inputGroupPrepend">@</span>
          <input type="text" class="form-control" id="validationCustomUsername" aria-describedby="inputGroupPrepend"
            required>
          <div class="invalid-feedback">
            Please choose a username.
          </div>
        </div>
      </div>
      <div class="col-md-6">
        <label for="validationCustom03" class="form-label">State</label>
        <input type="text" class="form-control" id="validationCustom03" value="Gujrat" required>
      

        <div class="invalid-feedback">
          Please provide a valid city.
        </div>
      </div>
      <div class="col-md-3">
        <label for="validationCustom04" class="form-label">City</label>
        <select class="form-select" id="validationCustom04" required>
          <option selected disabled value="">Choose...</option>
          <option>Surat</option>
          <option>Jamnagar</option>
          <option>Rajkot</option>
          <option>Ahamdabad</option>


        </select>
        <div class="invalid-feedback">
          Please select a valid state.
        </div>
      </div>

      <div class="col-12">
        <div class="form-check">
          <input class="form-check-input" type="checkbox" value="" id="invalidCheck" required>
          <label class="form-check-label" for="invalidCheck">
            Agree to terms and conditions
          </label>
          <div class="invalid-feedback">
            You must agree before submitting.
          </div>
        </div>
      </div>
      <div class="col-12">
        <button class="btn btn-primary" style="background-color: #ffb268; border: none;" type="submit">Submit</button>
      </div>
    </form>
  </div>

  <!-- End of conatct area  -->
  <hr>

  <!-- Start of login area  -->


  <!-- End of login area  -->

<?php

$servername = "localhost";
$username = "username";
$password = "";
$dbname = "workers";

$conn = new mysqli($servername, $username, $password, $dbname);

if($_SERVER["REQUEST_METHOD"]=="POST")
    {
    if(isset($_POST['job']) && !empty($_POST['job'])) {
      

        $sql="INSERT INTO assign_job VALUES('".$_POST['assign_job']."')";
       
        $result = $conn->query($sql);
    }
    }

?>


</body>

</html>