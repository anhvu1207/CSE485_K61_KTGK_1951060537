<?php
// Include config file
require_once "config.php";
global $conn;

// Define variables and initialize with empty values
$name = $ngaysinh = $gioitinh = $trinhdo = $chuyenmon = $hocham = $hocvi = $coquan = "";
$name_err = $ngaysinh_err = $gioitinh_err = $trinhdo_err = $chuyenmon_err = $hocham_err = $hocvi_err = $coquan_err = "";

// Processing form data when form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $input_name = trim($_POST["hoten"]);
    if (empty($input_name)) {
        $name_err = "Please enter a name.";
    } else {
        $name = $input_name;
    }


    $input_ngaysinh = trim($_POST["ngaysinh"]);
    if (empty($input_ngaysinh)) {
        $ngaysinh_err = "Please enter an ngaysinh.";
    } else {
        $ngaysinh = $input_ngaysinh;
    }


    $input_gioitinh = trim($_POST["gioitinh"]);
    if (empty($input_gioitinh)) {
        $gioitinh_err = "Please enter the gioitinh.";
    } else {
        $gioitinh = $input_gioitinh;
    }

    $input_trinhdo = trim($_POST["trinhdo"]);
    if (empty($input_trinhdo)) {
        $trinhdo_err = "Please enter the trinhdo.";
    } else {
        $trinhdo = $input_trinhdo;
    }

    $input_chuyenmon = trim($_POST["chuyenmon"]);
    if (empty($input_chuyenmon)) {
        $chuyenmon_err = "Please enter the chuyenmon.";
    } else {
        $chuyenmon = $input_chuyenmon;
    }

    $input_hocham = trim($_POST["hocham"]);
    if (empty($input_hocham)) {
        $hocham_err = "Please enter the hocham.";
    } else {
        $hocham = $input_hocham;
    }

    $input_hocvi = trim($_POST["hocvi"]);
    if (empty($input_hocvi)) {
        $hocvi_err = "Please enter the hocvi.";
    } else {
        $hocvi = $input_hocvi;
    }

    $input_coquan = trim($_POST["coquan"]);
    if (empty($input_coquan)) {
        $coquan_err = "Please enter the coquan.";
    } else {
        $coquan = $input_coquan;
    }


    // Check input errors before inserting in database
    if (empty($name_err) && empty($ngaysinh_err) && empty($gioitinh_err) && empty($trinhdo_err) && empty($chuyenmon_err) && empty($hocham_err) && empty($hocham_err) &&empty($coquan_err)) {
        // Prepare an insert statement
        $sql = "INSERT INTO giangvien ( null ,hovaten, ngaysinh, gioitinh, trinhdo, chuyenmon, hocham, hocvi, coquan)) VALUES (?, ?, ? ,?, ?, ?,?,?)";

        if ($stmt = mysqli_prepare($conn, $sql)) {
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "ssssssss", $param_name, $param_ngaysinh, $param_gioitinh,
                $param_trinhdo,$param_chuyenmon,$param_hocham,$param_hocvi,$param_coquan);

            // Set parameters
            $param_name = $name;
            $param_ngaysinh = $ngaysinh;
            $param_gioitinh = $gioitinh;
            $param_trinhdo = $trinhdo;
            $param_chuyenmon = $chuyenmon;
            $param_hocham =$hocham;
            $param_hocvi = $hocvi;
            $param_coquan = $coquan;


            if (mysqli_stmt_execute($stmt)) {

                header("location: index.php");
                exit();
            } else {
                header("location: index.php");
                echo "Oops! Something went wrong. Please try again later.";
            }
        }


        mysqli_stmt_close($stmt);

    }


    mysqli_close($conn);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Create Record</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        .wrapper {
            width: 600px;
            margin: 0 auto;
        }
    </style>
</head>
<body>
<div class="wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <h2 class="mt-5">Create</h2>
                <p>Dien thong tin</p>
                <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
                    <div class="form-group">
                        <label>HoTen</label>
                        <input type="text" name="hoten"
                               class="form-control <?php echo (!empty($name_err)) ? 'is-invalid' : ''; ?>"
                               value="<?php echo $name; ?>">
                        <span class="invalid-feedback"><?php echo $name_err; ?></span>
                    </div>
                    <div class="form-group">
                        <label>NgaySinh</label>
                        <input type="text" name="ngaysinh"
                               class="form-control <?php echo (!empty($ngaysinh_err)) ? 'is-invalid' : ''; ?>"
                               value="<?php echo $ngaysinh; ?>">
                        <span class="invalid-feedback"><?php echo $name_err; ?></span>
                    </div>
                    <div class="form-group">
                        <label>GioiTinh</label>
                        <input type="text" name="gioitinh"
                               class="form-control <?php echo (!empty($gioitinh_err)) ? 'is-invalid' : ''; ?>"
                               value="<?php echo $gioitinh; ?>">
                        <span class="invalid-feedback"><?php echo $gioitinh_err; ?></span>
                    </div>
                    <div class="form-group">
                        <label>TrinhDo</label>
                        <input type="text" name="trinhdo"
                               class="form-control <?php echo (!empty($trinhdo_err)) ? 'is-invalid' : ''; ?>"
                               value="<?php echo $trinhdo; ?>">
                        <span class="invalid-feedback"><?php echo $trinhdo_err; ?></span>
                    </div>
                    <div class="form-group">
                        <label>ChuyenMon</label>
                        <input type="text" name="chuyenmon"
                               class="form-control <?php echo (!empty($chuyenmon_err)) ? 'is-invalid' : ''; ?>"
                               value="<?php echo $chuyenmon; ?>">
                        <span class="invalid-feedback"><?php echo $chuyenmon_err; ?></span>
                    </div>
                    <div class="form-group">
                        <label>HocHam</label>
                        <input type="text" name="hocham"
                               class="form-control <?php echo (!empty($hocham_err)) ? 'is-invalid' : ''; ?>"
                               value="<?php echo $hocham; ?>">
                        <span class="invalid-feedback"><?php echo $hocham_err; ?></span>
                    </div>
                    <div class="form-group">
                        <label>HocVi</label>
                        <input type="text" name="hocvi"
                               class="form-control <?php echo (!empty($hocvi_err)) ? 'is-invalid' : ''; ?>"
                               value="<?php echo $hocvi; ?>">
                        <span class="invalid-feedback"><?php echo $hocvi_err; ?></span>
                    </div>
                    <div class="form-group">
                        <label>CoQuan</label>
                        <input type="text" name="coquan"
                               class="form-control <?php echo (!empty($coquan_err)) ? 'is-invalid' : ''; ?>"
                               value="<?php echo $coquan; ?>">
                        <span class="invalid-feedback"><?php echo $coquan_err; ?></span>
                    </div>
                    <input type="submit" class="btn btn-primary" value="Submit">
                    <a href="index.php" class="btn btn-secondary ml-2">Cancel</a>
                </form>
            </div>
        </div>
    </div>
</div>
</body>
</html>