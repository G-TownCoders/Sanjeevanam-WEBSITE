<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SANJEEVANAM</title>
    <link rel="stylesheet" href="/code/css2/donatepage.css">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
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
              <a class="nav-link active" aria-current="page" href="/code/index.html "><b>HOME</b> </a>
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

    <!--searchbar-->

    <!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>SANJEEVANAM</title>
</head>
<body>
  <div class="container-fluid">
    <div class="row justify-content-center">
      <div class="col-md-10 bg-light mt-2 rounded pb-3">
       
          <hr>
          <div class="form-inline">
            <label for="search" class="font-weight-bold lead text-dark">
              <h2 style="margin-left : 400px"> <b>CHECK FOR AVAILABLE BLOOD BANKS</b></h2><br></label>&nbsp;;
              <input type="text" name="search" id="search_text" class="form-control form-control-lg rounded-0 border-primary" autocomplete="off" placeholder= "Search...">
            </div>
            <hr>
          </div>
        </div>
      </div>

            <div class="col-md-12">
                <div class="card mt-4">
                    <div class="card-body">
                        <table class="table table-bordered" id="table-data">
                            <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>State</th>
                                    <th>City</th>
                                    <th>Phone No.</th>
                                    <th>Email ID</th>
                                    <th>Category</th>
                                </tr>
                            </thead>
                            <tbody>
                              

                            <?php
                            include 'config.php';
                            $stmt=$conn->prepare("SELECT * FROM bloodbanks");
                            $stmt->execute();
                            $result=$stmt->get_result();
                            ?>

<?php while($row=$result->fetch_assoc()){ ?>
                <tr>
                    <td><?php echo $row['fname'];?></td>
                    <td><?php echo $row['bstate'];?></td>
                    <td><?php echo $row['city'];?></td>
                    <td><?php echo $row['phone_no'];?></td>
                    <td><?php echo $row['email_id'];?></td>
                    <td><?php echo $row['category'];?></td>
                </tr>
                <?php } ?>
            </table>
        </form>
                               
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script type="text/javascript">
         $(document).ready(function(){
          $("#search_text").keyup(function(){
            var search = $(this).val();
            $.ajax({
              url: 'action.php',
              method: 'POST',
              data: {query: search},
              success: function(response){
                $("#table-data").html(data)
                $("#table-data").show()
              }
            });
          });
        });
      </script>
</body>
</html>
