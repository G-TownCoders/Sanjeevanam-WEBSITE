<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SANJEEVANAM</title>
    <link rel="stylesheet" href="/code/css2/style10.css">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    
<style>
  form {
        height:350px;
        display: inline-block;
        padding: 20px;
        background-color: #f2f2f2;
        border: 1px solid #ccc;
        border-radius: 5px;
        margin-left: 738px;
        margin-right: 750px;
        margin-top: 146px;
    } 
      label {
        display: block;
        margin-bottom: 10px;
      }
      
      select {
        width: 100%;
        padding: 10px;
        border-radius: 5px;
        border: 1px solid #ccc;
        background-color: #fff;
        font-size: 16px;
        font-family: sans-serif;
        margin-bottom: 20px;
      }
      .submit{
        background-color: #00bbf9;
        border: none;
        color: #fff;
        padding: 10px 20px;
        text-decoration: none;
        display: inline-block;
        text-align: center;
        border-radius: 70px;
        margin-left:225px;
        margin-top:10px;
      }
      button {
        background-color: #4CAF50;
        border: none;
        color: #fff;
        padding: 10px 20px;
        text-align: center;
        text-decoration: none;
        display: inline-block;
        font-size: 16px;
        border-radius: 5px;
        cursor: pointer;
      }
      
      button:hover {
        background-color: #3e8e41;
      }

</style>

</head>
<body>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>

   <div class="heading1">
    <div class="leftnav">
      <div class="logo">
        <img src="/img/logo.png" height="100px" alt="Logo">
      </div>
      <div class="logoword">
        <!-- Sanजीवनम् -->
        <h2><b>SANJEEVANAM </b></h2>
      </div>
    </div>
    
    <div class="rightnav"><b>|| रक्तदान – जिंदगी का महादान ||</b></div>
   </div>

  <!--NAVBAR-->

    <nav class="navbar navbar-expand-lg sticky-lg-top bg-light">
      <div class="container-fluid" >
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="/index.html"><b>HOME</b> </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#mail">CONTACT US</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/code/html/nearby.html">NEARBY</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                LOGIN
              </a>
              <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                <li><a class="dropdown-item" href="/code/html/user-login.html">USER LOGIN</a></li>
                <li><a class="dropdown-item" href="/code/html/san-login.html">SANJEEVANAM LOGIN</a></li>
                <li><a class="dropdown-item" href="/code/bb-reg.html">REGISTER BLOOD BANK</a></li>
              </ul>
            </li>
          </ul>
        </div>
      </div>
    </nav>



  </head>
  <body>
    
    <form action="" method="GET">
        <h1 style="font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;">CHECK AVAILABILITY</h1>  
        <label for="state">Select your state:</label>
        <select id="state" name="astate">
        <option value="">--Please select--</option>
        <option value="Andhra Pradesh">Andhra Pradesh</option>
        <option value="Arunachal Pradesh">Arunachal Pradesh</option>
        <option value="Assam">Assam</option>
        <option value="Bihar">Bihar</option>
        <option value="Chhattisgarh">Chhattisgarh</option>
        <option value="Goa">Goa</option>
        <option value="Gujarat">Gujarat</option>
        <option value="Haryana">Haryana</option>
        <option value="Himachal Pradesh">Himachal Pradesh</option>
        <option value="Jharkhand">Jharkhand</option>
        <option value="Karnataka">Karnataka</option>
        <option value="Kerala">Kerala</option>
        <option value="Madhya Pradesh">Madhya Pradesh</option>
        <option value="Maharashtra">Maharashtra</option>
        <option value="Manipur">Manipur</option>
        <option value="Meghalaya">Meghalaya</option>
        <option value="Mizoram">Mizoram</option>
        <option value="Nagaland">Nagaland</option>
        <option value="Odisha">Odisha</option>
        <option value="Punjab">Punjab</option>
        <option value="Rajasthan">Rajasthan</option>
        <option value="Sikkim">Sikkim</option>
        <option value="Tamil Nadu">Tamil Nadu</option>
        <option value="Telangana">Telangana</option>
        <option value="Tripura">Tripura</option>
        <option value="Uttar Pradesh">Uttar Pradesh</option>
        <option value="Uttarakhand">Uttarakhand</option>
        <option value="West Bengal">West Bengal</option>
      </select>
      <label for="blood-group">Blood Group :</label>
      <select id="blood-group" name="blood-group">
        <option value="">Select a blood group</option>
        <option value="A+">A+</option>
        <option value="A-">A-</option>
        <option value="B+">B+</option>
        <option value="B-">B-</option>
        <option value="AB+">AB+</option>
        <option value="AB-">AB-</option>
        <option value="O+">O+</option>
        <option value="O-">O-</option>
      </select>
      <a class="submit" href="/code/html/check.php" target="_blank">Submit
      </a>
    </form>
    
  </body>
</html>

