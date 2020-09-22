<?php
// Include config file
require_once "config.php";
  
// Define variables and initialize with empty values
$name = $position = $nopol = "";
$name_err = $position_err = $nopol_err = "";
  
// Processing form data when form is submitted
if($_SERVER["REQUEST_METHOD"] == "POST"){
    // Validate name
    $input_name = trim($_POST["name"]);
    if(empty($input_name)){
        $name_err = "Please enter a name.";
    } elseif(!filter_var($input_name, FILTER_VALIDATE_REGEXP, array("options"=>array("regexp"=>"/^[a-zA-Z\s]+$/")))){
        $name_err = "Please enter a valid name.";
    } else{
        $name = $input_name;
    }
     
    // Validate position
    $input_position = trim($_POST["position"]);
    if(empty($input_position)){
        $position_err = "Masukkan Jabatan Karyawan";     
    } else{
        $position = $input_position;
    }
     
    // Validate nopol
    $input_nopol = trim($_POST["nopol"]);
    if(empty($input_nopol)){
        $nopol_err = "Masukkan Nomor Polisi";     
    } else{
        $nopol = $input_nopol;
    }
     
    // Check input errors before inserting in database
    if(empty($name_err) && empty($position_err) && empty($nopol_err)){
        // Prepare an insert statement
        $sql = "INSERT INTO karyawan (name, position, nopol) VALUES (?, ?, ?)";
          
        if($stmt = mysqli_prepare($link, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "sss", $param_name, $param_position, $param_nopol);
             
            // Set parameters
            $param_name = $name;
            $param_position = $position;
            $param_nopol = $nopol;
             
            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                // Records created successfully. Redirect to landing page
                mysqli_stmt_store_result($stmt);
                header("location: data-karyawan.php");
                if(mysqli_stmt_num_rows($stmt) == 1){
                    $name_err = "you've already submitted a request.";
                } else{
                    $name = trim($_POST["name"]);
                }
            } else{
                echo "Execute query error: " . mysqli_stmt_error($stmt);
            }
            mysqli_stmt_close($stmt); 
        }else{
            echo "Prepare statement error: " . mysqli_error($link);
        }
    }
     
    // Close connection
    mysqli_close($link);
}

?>
  
 <!-- Modal Add Karyawan -->
 <div class="modal fade" id="addkaryawan" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header text-center">
        <h4 class="modal-title w-100 font-weight-bold">Form Add Employee</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body mx-3">
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
            <div class="md-form mb-5 <?php echo (!empty($name_err)) ? 'has-error' : ''; ?>">
                <i class="fas fa-envelope prefix grey-text"></i>
                <input type="text" name="name" id="defaultForm-email" class="form-control validate" value="<?php echo $name; ?>">
                <span class="help-block"><?php echo $name_err;?></span>
                <label data-error="wrong" data-success="right" for="defaultForm-email">Nama</label>
            </div>

            <div class="md-form mb-4 <?php echo (!empty($position_err)) ? 'has-error' : ''; ?>">
                <i class="fas fa-lock prefix grey-text"></i>
                <input type="text" name="position" id="defaultForm-pass" class="form-control validate" value="<?php echo $position; ?>">
                <span class="help-block"><?php echo $position_err;?></span>
                <label data-error="wrong" data-success="right" for="defaultForm-pass">Jabatan</label>
            </div>

            <div class="md-form mb-4 <?php echo (!empty($nopol_err)) ? 'has-error' : ''; ?>">
                <i class="fas fa-lock prefix grey-text"></i>
                <input type="text" name="nopol" id="defaultForm-pass" class="form-control validate" value="<?php echo $nopol; ?>">
                <span class="help-block"><?php echo $nopol_err;?></span>
                <label data-error="wrong" data-success="right" for="defaultForm-pass">Nomor Polisi</label>
            </div>
            <div class="modal-footer d-flex justify-content-center">
                <button class="btn btn-default">Add Employee</button>
            </div>
        </form>
        </div>
  </div>
</div>
</div>