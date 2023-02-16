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

    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card mt-4">
                    <div class="card-header">
                        <h4> </h4>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-7">

                                <form action="" method="GET">
                                    <div class="input-group mb-3">
                                        <input type="text" name="search" required value="<?php if(isset($_GET['search'])){echo $_GET['search']; } ?>" class="form-control" placeholder="Search data">
                                        <button type="submit" class="btn btn-primary">Search</button>
                                    </div>
                                </form>

                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-12">
                <div class="card mt-4">
                    <div class="card-body">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Email ID</th>
                                    <th>Contact Number</th>
                                    <th>State</th>
                                    <th>Blood Group</th>
                                    <th>Emergency Notes</th>
                                </tr>
                            </thead>
                            <tbody>
                              

                            <?php

                             if(isset($_POST['search']))
                             {
                                 $valueToSearch = $_POST['valueToSearch'];
                                 // search in all table columns
                                 // using concat mysql function
                                 $query = "SELECT * FROM `requestblood` WHERE CONCAT(`name`, `phone_no`, `email_id`, `state`,`city`,`blood_group`,`gender`) LIKE '%".$valueToSearch."%'";
                                 //  = filterTable(query: $query);
                                 
                             }
                              else {
                                 $query = "SELECT * FROM `requestblood`";
                                 $search_result = filterTable($query);
                             }
                             
                             // function to connect and execute the query
                             function filterTable($query)
                             {
                                 $connect = mysqli_connect("bmlib1ur00odiqdqc7ib-mysql.services.clever-cloud.com", "uoujjceivrkjxpup", "ZIrMPvojvGmxOC1bpMfF", "bmlib1ur00odiqdqc7ib");
                                 $filter_Result = mysqli_query($connect, $query);
                                 return $filter_Result;
                             }
                             
                             ?>

<?php while($row = mysqli_fetch_array($search_result)):?>
                <tr>
                    <td><?php echo $row['rname'];?></td>
                    <td><?php echo $row['remail'];?></td>
                    <td><?php echo $row['rphone'];?></td>
                    <td><?php echo $row['rstate'];?></td>
                    <td><?php echo $row['rbloodgroup'];?></td>
                    <td><?php echo $row['rnotes'];?></td>
                </tr>
                <?php endwhile;?>
            </table>
        </form>
                               
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

