<?php
include("./include/conn.php");
session_start();
 
$errormsg = '';
$action = "add";

$ServiceID = '';
$ServiceName = '';
$PricePerHour = '';

if (isset($_POST['save'])) {
    $ServiceID = mysqli_real_escape_string($conn, $_POST['ServiceID']);
    $ServiceName = mysqli_real_escape_string($conn, $_POST['ServiceName']);
    $PricePerHour = mysqli_real_escape_string($conn, $_POST['PricePerHour']);
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <?php
    include_once 'include/head.php';
    ?>
    <link rel="shortcut icon" href="./dist/img/AdminLTELogo.png">
    <link rel="icon" href="./dist/img/AdminLTELogo.png" type="image/x-icon">
<style>
    body {
        background: url('image26.jpg') no-repeat center center fixed;
        background-size: cover;
        background-color: #f2f2f2; /* Background color behind the image */
    }
</style>

</head>


                        <div class="panel-heading" style="font-size:50px;">
                            Services
                        </div>
                        <div class="panel-body">
    <div style="float:left; width: 80%;">

        <table class="table table-bordered table-hover" id="tSortable22" style="width: 60%;">
            <thead>
                                        <tr>
                                            <th style="border:3px solid #000;">ServiceID</th>
                                            <th style="border:3px solid #000;">ServiceName</th>
                                            <th style="border:3px solid #000;">PricePerHour</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        $sql = "select * from services ";
                                        $q = $conn->query($sql);
                                        while ($r = $q->fetch_assoc()) {
                                            echo '<tr>
                                                <td style="border:3px solid #000;">' . $r['ServiceID'] . '</td>
                                                <td style="border:3px solid #000;">' . $r['ServiceName'] . '</td>
                                                <td style="border:3px solid #000;">' . $r['PricePerHour'] . '</td>
                                            </tr>';
                                        }
                                        ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
</body>

</html>

