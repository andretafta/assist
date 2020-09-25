<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="admin.css">
    <link rel="stylesheet" type="text/css" href="bootstrap/css/mdb.css">
    <link rel="stylesheet" type="text/css" href="fontawesome/css/all.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script type="text/javascript" src="sensor.js"></script>
 
    
    <title>Hello, Bapak Zafran!</title>
  </head>
  <body>
  <!-- Navbar -->
  <div class="top-navbar"> 
      <nav class="navbar navbar-expand-lg navbar-light bg-white fixed-top">
                <button class="navbar-toggler" data-toggle="collapse" data-target="#collapse_target">
                <span class="navbar-toggle-icon"><i class="fas fa-bars" style="font-size: 20px;"></i></span>
                </button>
                <ul class="nav ml-4"><h5>Nama Produk | <b>Monitoring Drivers Fatigue</b></h5></ul>
                <div class="collapse navbar-collapse" id="collapse_target">
                    <form class="form-inline my-2 my-lg-0 ml-auto">
                    <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-dark my-2 my-sm-0" type="submit">Search</button>
                    </form>
                    <div class="icon ml-4">
                        <h5>
                        <i class="far fa-envelope mr-3" data-toggle="tooltip" data-placement="bottom" title="Chat Us"></i> 
                        <i class="fas fa-user-cog mr-3" data-toggle="tooltip" data-placement="bottom" title="Change Password"></i>
                        <i class="fas fa-sign-out-alt mr-3" data-toggle="tooltip" data-placement="bottom" title="Log Out"></i>
                        </h5>
                    </div>
                </div>
        </nav>
    </div>
    <!-- Grid Layout -->
    <div class="row no-gutters mt-5"  style="height:100%;">

        <!-- SideBar -->
        <div class="col-md-2 bg-dark mt-2 pr-3 pt-4">
            <div class="navigation">
                <ul class="nav flex-column ml-3 mb-5">
                    <li class="nav-item">
                        <a class="nav-link active text-white" href="dashboard.php"><i class="fas fa-tachometer-alt mr-2"></i>Dashboard</a><hr class="bg-secondary">
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="data-karyawan.php"><i class="fas fa-user mr-2"></i>Data Karyawan</a><hr class="bg-secondary">
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="data-jadwal.php"><i class="fas fa-list mr-2"></i>Jadwal Karyawan</a><hr class="bg-secondary">
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="history.php"><i class="fas fa-history mr-2"></i>History Detection</a><hr class="bg-secondary">
                    </li>
                </ul>
            </div>
        </div>

        <!-- Layout Utama -->
        <div class="col-md-10 mt-3">
            <nav class="navbar navbar-light justify-content-center"     style="background-color:#f2f2f2">
                <span class="navbar-brand"><b>Dashboard</b></span>
            </nav>

        <!-- Search Nama -->
        
        <div class="container">
         <div class="row">
         <div class="col-sm-12 mt-3 mr-3 ml-3">
          <h6>Record Detection :</h6>  
          <form class="form-inline my-2 my-lg-0">
              <input type="text" name="namakaryawan" id="namakaryawan" class="form-control" placeholder="Masukkan Nama Karyawan" style="width: 950px;" />
              <button class="btn btn-outline-success ml-4" type="submit">Save</button>  
          </form>
          <div id="namaList"></div>
        </div>
    
    </div>
    </div>

            <!-- Card -->
            <div class="row">
                <div class="col-md-6">
                    <div class="card">
                    <h5 class="card-header text-center bg-dark text-white">Fatigue Status</h5>
                        <div class="card-body">
                            <h2 class="card-title d-flex justify-content-center text-success mt-2">Normal</h2>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card">
                    <h5 class="card-header text-center bg-dark text-white">Rate Heart (BPM)</h5>
                        <div class="card-body">
                        <h2 class="card-title d-flex justify-content-center text-primary mt-2"><span id="rate_heart"></span></h2>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card">
                    <h5 class="card-header text-center bg-dark text-white">Alcohol Level</h5>
                        <div class="card-body">
                        <h2 class="card-title d-flex justify-content-center text-success mt-2">Low</h2>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card">
                    <h5 class="card-header text-center bg-dark text-white">Psychological Score</h5>
                        <div class="card-body">
                        <h2 class="card-title d-flex justify-content-center text-success mt-2">Low</h2>
                        </div>
                    </div>
                </div>

                            <!-- Layout Grafik -->
                
                <?php include('grafik.php'); ?> 

            </div>
        </div>
        


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js@2.8.0"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.devbridge-autocomplete/1.4.7/jquery.autocomplete.min.js"></script>
    <script type="text/javascript" src="admin.js"></script>
    <script type="text/javascript" src="searchname.js"></script>

  </body>

</html>