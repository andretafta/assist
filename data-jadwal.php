
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Raleway&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="admin.css">
    <link rel="stylesheet" type="text/css" href="bootstrap/css/mdb.css">
    <link rel="stylesheet" type="text/css" href="fontawesome/css/all.min.css">
    <link rel="stylesheet" type="text/css" href="bootstrap/css/datatables2.min.css">
    

    
    <title>Hello, world!</title>
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
    <div class="row no-gutters mt-5">

        <!-- SideBar -->
        <div class="col-md-2 bg-dark mt-3 pr-3 pt-4">
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
            <nav class="navbar navbar-light justify-content-center" style="background-color:#f2f2f2">
                <span class="navbar-brand" id="font1"><b>Jadwal Karyawan</b></span>
            </nav>
            <div class="col-md-12">
                        <div class="page-header clearfix">
                        <a href="create.php" class="btn btn-success float-right mt-3 mb-3" data-toggle="modal" data-target="#addkaryawan">Edit Jadwal</a> 
                        </div>
                        <table class="table table-bordered table-striped text-center">
                            <thead>
                                <tr>
                                <th scope="col">Nama</th>
                                <td colspan="3">Senin</th>
                                <td colspan="3">Selasa</th>
                                <td colspan="3">Rabu</th>
                                <td colspan="3">Kamis</th>
                                <td colspan="3">Jumat</th>
                                <td colspan="3">Sabtu</th>
                                <td colspan="3">Minggu</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                <th scope="row">Andriansyah</th>
                                <td>1</td>
                                <td>2</td>
                                <td>3</td>
                                <td>1</td>
                                <td>2</td>
                                <td>3</td>
                                <td>1</td>
                                <td>2</td>
                                <td>3</td>
                                <td>1</td>
                                <td>2</td>
                                <td>3</td>
                                <td>1</td>
                                <td>2</td>
                                <td>3</td>
                                <td>1</td>
                                <td>2</td>
                                <td>3</td>
                                <td>1</td>
                                <td>2</td>
                                <td>3</td>
                                </tr>
                                <tr>
                                <th scope="row">Lukas</th>
                                <?php 
                                for ($i=1; $i<=21; $i++){
                                echo "<td></td>";
                                }
                                ?>
                                </tr>
                                <tr>
                                <th scope="row">Syamsudin</th>
                                <?php 
                                for ($i=1; $i<=21; $i++){
                                echo "<td></td>";
                                }
                                ?>
                                </tr>
                                <tr>
                                <th scope="row">Zulaihan</th>
                                <?php 
                                for ($i=1; $i<=21; $i++){
                                echo "<td></td>";
                                }
                                ?>
                                </tr>
                                <tr>
                                <th scope="row">Khalifah</th>
                                <?php 
                                for ($i=1; $i<=21; $i++){
                                echo "<td></td>";
                                }
                                ?>
                                </tr>
                                <tr>
                                <th scope="row">Humam</th>
                                <?php 
                                for ($i=1; $i<=21; $i++){
                                echo "<td></td>";
                                }
                                ?>
                                          <tr>
                                <th scope="row">Andre</th>
                                <?php 
                                for ($i=1; $i<=21; $i++){
                                echo "<td></td>";
                                }
                                ?>
                                </tr>
                                </tr>
                            </tbody>
                        </table>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
    <script type="text/javascript" src="bootstrap/js/datatables2.min.js"></script>
    <script type="text/javascript" src="bootstrap/js/mdb.js"></script>
    <script type="text/javascript" src="admin.js"></script>

    
    <script>$(document).ready(function () {$('#dt-karyawan').DataTable();});</script>

  </body>
</html>

