<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Dashboard</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <style>
        .wrapper{
            width: 600px;
            margin: 0 auto;
        }
        table tr td:last-child{
            width: 120px;
        }
    </style>
    <script>
        $(document).ready(function(){
            $('[data-toggle="tooltip"]').tooltip();
        });
    </script>
</head>
<body>
<div class="wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="mt-5 mb-3 clearfix">
                    <h2 class="pull-left">Thong Tin Giang Vien</h2>
                    <a href="create.php" class="btn btn-success pull-right"><i class="fa fa-plus"></i> Them moi giang vien </a>
                </div>
                <?php
                // Include config file
                require_once "config.php";
                global $conn;

                $sql = "SELECT * FROM giangvien";
                if($result = mysqli_query($conn, $sql)){
                    if(mysqli_num_rows($result) > 0){
                        echo '<table class="table table-bordered table-striped">';
                        echo "<thead>";
                        echo "<tr>";
                        echo "<th>MaGV</th>";
                        echo "<th>HoVaTen</th>";
                        echo "<th>NgaySinh</th>";
                        echo "<th>GioiTinh</th>";
                        echo "<th>TrinhDo</th>";
                        echo "<th>ChuyenMon</th>";
                        echo "<th>HocHam</th>";
                        echo "<th>HocVi</th>";
                        echo "<th>CoQuan</th>";
                        echo "<th>Action</th>";
                        echo "</tr>";
                        echo "</thead>";
                        echo "<tbody>";
                        while($row = mysqli_fetch_array($result)){
                            echo "<tr>";
                            echo "<td>" . $row['magv'] . "</td>";
                            echo "<td>" . $row['hovaten'] . "</td>";
                            echo "<td>" . $row['ngaysinh'] . "</td>";
                            echo "<td>" . $row['gioitinh'] . "</td>";
                            echo "<td>" . $row['trinhdo'] . "</td>";
                            echo "<td>" . $row['chuyenmon'] . "</td>";
                            echo "<td>" . $row['hocham'] . "</td>";
                            echo "<td>" . $row['hocvi'] . "</td>";
                            echo "<td>" . $row['coquan'] . "</td>";
                            echo "<td>";

                            echo "</td>";
                            echo "</tr>";
                        }
                        echo "</tbody>";
                        echo "</table>";
                        // Free result set
                        mysqli_free_result($result);
                    } else{
                        echo '<div class="alert alert-danger"><em>No records were found.</em></div>';
                    }
                } else{
                    echo "Loi.";
                }

                // Close connection
                mysqli_close($conn);
                ?>
            </div>
        </div>
    </div>
</div>
</body>
</html>