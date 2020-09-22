<?php
// Include config file
require_once "config.php";
  
// Define variables and initialize with empty values
$name = $position = $nopol = "";
$name_err = $position_err = $nopol_err = "";
  
// Processing form data when form is submitted
if(isset($_POST["id"]) && !empty($_POST["id"])){
    // Get hidden input value
    $id = $_POST["id"];
     
    // Validate name
    $input_name = trim($_POST["name"]);
    if(empty($input_name)){
        $name_err = "Please enter a name.";
    } elseif(!filter_var($input_name, FILTER_VALIDATE_REGEXP, array("options"=>array("regexp"=>"/^[a-zA-Z\s]+$/")))){
        $name_err = "Please enter a valid name.";
    } else{
        $name = $input_name;
    }
     
    // Validate address address
    $input_position = trim($_POST["position"]);
    if(empty($input_position)){
        $position_err = "Please enter Jabatan.";     
    } else{
        $position = $input_position;
    }
     
    // Validate nopol
    $input_nopol = trim($_POST["nopol"]);
    if(empty($input_nopol)){
        $nopol_err = "Please enter Nomor Polisi";     
    } else{
        $nopol = $input_nopol;
    }
     
    // Check input errors before inserting in database
    if(empty($name_err) && empty($address_err) && empty($salary_err)){
        // Prepare an update statement
        $sql = "UPDATE karyawan SET name=?, position=?, nopol=? WHERE id=?";
          
        if($stmt = mysqli_prepare($link, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "sssi", $param_name, $param_position, $param_nopol, $param_id);
             
            // Set parameters
            $param_name = $name;
            $param_position = $position;
            $param_nopol = $nopol;
            $param_id = $id;
             
            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                // Records updated successfully. Redirect to landing page
                header("location: data-karyawan.php");
                exit();
            } else{
                echo "Something went wrong. Please try again later.";
            }
        }
          
        // Close statement
        mysqli_stmt_close($stmt);
    }
     
    // Close connection
    mysqli_close($link);
} else{
    // Check existence of id parameter before processing further
    if(isset($_GET["id"]) && !empty(trim($_GET["id"]))){
        // Get URL parameter
        $id =  trim($_GET["id"]);
         
        // Prepare a select statement
        $sql = "SELECT * FROM karyawan WHERE id = ?";
        if($stmt = mysqli_prepare($link, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "i", $param_id);
             
            // Set parameters
            $param_id = $id;
             
            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                $result = mysqli_stmt_get_result($stmt);
     
                if(mysqli_num_rows($result) == 1){
                    /* Fetch result row as an associative array. Since the result set contains only one row, we don't need to use while loop */
                    $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
                     
                    // Retrieve individual field value
                    $name = $row["name"];
                    $position = $row["position"];
                    $nopol = $row["nopol"];
                } else{
                    // URL doesn't contain valid id. Redirect to error page
                    header("location: error.php");
                    exit();
                }
                 
            } else{
                echo "Oops! Something went wrong. Please try again later.";
            }
        }
         
        // Close statement
        mysqli_stmt_close($stmt);
         
        // Close connection
        mysqli_close($link);
    }  else{
        // URL doesn't contain id parameter. Redirect to error page
        header("location: error.php");
        exit();
    }
}
?>
  
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Update Record</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <style type="text/css">
        .wrapper{
            width: 500px;
            margin: 0 auto;
        }
    </style>
</head>
<body>
    <div class="wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="page-header">
                        <h2>Update Record</h2>
                    </div>
                    <p>Please edit the input values and submit to update the record.</p>
                    <form action="<?php echo htmlspecialchars(basename($_SERVER['REQUEST_URI'])); ?>" method="post">
                        <div class="form-group <?php echo (!empty($name_err)) ? 'has-error' : ''; ?>">
                            <label>Name</label>
                            <input type="text" name="name" class="form-control" value="<?php echo $name; ?>">
                            <span class="help-block"><?php echo $name_err;?></span>
                        </div>
                        <div class="form-group <?php echo (!empty($position_err)) ? 'has-error' : ''; ?>">
                            <label>Jabatan</label>
                            <textarea name="position" class="form-control"><?php echo $position; ?></textarea>
                            <span class="help-block"><?php echo $position_err;?></span>
                        </div>
                        <div class="form-group <?php echo (!empty($nopol_err)) ? 'has-error' : ''; ?>">
                            <label>Nomor Polisi</label>
                            <input type="text" name="nopol" class="form-control" value="<?php echo $nopol; ?>">
                            <span class="help-block"><?php echo $nopol_err;?></span>
                        </div>
                        <input type="hidden" name="id" value="<?php echo $id; ?>"/>
                        <input type="submit" class="btn btn-primary" value="Submit">
                        <a href="data-karyawan.php" class="btn btn-default">Cancel</a>
                    </form>
                </div>
            </div>        
        </div>
    </div>
</body>
</html>