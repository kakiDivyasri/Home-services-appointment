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

    if ($_POST['action'] == "add") {
        $sql = $conn->query("INSERT INTO services VALUES ('$ServiceID','$ServiceName','$PricePerHour')");
        echo '<script type="text/javascript">window.PricePerHour="services.php?act=1";</script>';
    } else if ($_POST['action'] == "update") {
        $ServiceID = mysqli_real_escape_string($conn, $_POST['ServiceID']);
        $sql = $conn->query("UPDATE services SET ServiceName = '$ServiceName', PricePerHour = '$PricePerHour' WHERE ServiceID = '$ServiceID'");
        echo '<script type="text/javascript">window.PricePerHour="services.php?act=2";</script>';
    }
}

if (isset($_GET['action']) && $_GET['action'] == "delete") {
    $conn->query("delete from services WHERE ServiceID='" . $_GET['ServiceID'] . "'");
    header("PricePerHour: services.php?act=3");
}

$action = "add";
if (isset($_GET['action']) && $_GET['action'] == "edit") {
    $ServiceID = isset($_GET['ServiceID']) ? mysqli_real_escape_string($conn, $_GET['ServiceID']) : '';

    $sqlEdit = $conn->query("SELECT * FROM services WHERE ServiceID='" . $ServiceID . "'");
    if ($sqlEdit->num_rows) {
        $rowsEdit = $sqlEdit->fetch_assoc();
        extract($rowsEdit);
        $action = "update";
    } else {
        $_GET['action'] = "";
    }
}

if (isset($_REQUEST['act']) && @$_REQUEST['act'] == "1") {
    $errormsg = "<div class='alert alert-success'><strong>Success!</strong> services Added successfully</div>";
} else if (isset($_REQUEST['act']) && @$_REQUEST['act'] == "2") {
    $errormsg = "<div class='alert alert-success'><strong>Success!</strong> services Edited successfully</div>";
} else if (isset($_REQUEST['act']) && @$_REQUEST['act'] == "3") {
    $errormsg = "<div class='alert alert-success'><strong>Success!</strong> services Deleted successfully</div>";
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
            background-image: url('services.jpg');
            background-size: cover; /* This will make the image cover the entire background */
            background-repeat: no-repeat; /* Prevent the image from repeating */
        }



 tr {
            border:3px solid #141414;
            
        }

    </style>


</head>

<body>
                    <h1 class="page-head-line">Services's Form
                        <?php
                        echo (isset($_GET['action']) && @$_GET['action'] == "add" || @$_GET['action'] == "edit") ? ' <a href="services.php" class="btn btn-primary btn-sm pull-right">Back <i class="glyphicon glyphicon-arrow-right"></i></a>' : '<a href="services.php?action=add" class="btn btn-primary btn-sm pull-right"> </a>';
                        ?>
                    </h1>

                    <?php
                    echo $errormsg;
                    ?>
                </div>

                <?php
                if (isset($_GET['action']) && @$_GET['action'] == "add" || @$_GET['action'] == "edit") {
                ?>
                    <div class="row">
                        <div class="col-md-8 offset-md-2" >
                            <div class="panel panel-primary">
                                <div class="panel-heading">
                                    <?php echo ($action == "add") ? "Add services" : "Edit services"; ?>
                                </div>
                                <form action="services.php" method="post" id="signupForm1" class="form-horizontal">
                                    <div class="panel-body">
                                        <div class="form-group">
                                            <label class="col-sm-2 control-label" for="Old">ServiceID</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" id="ServiceID" name="ServiceID" value="<?php echo $ServiceID; ?>" />
                                            </div>
                                        </div>
                                        <div class "form-group">
                                            <label class="col-sm-2 control-label" for="Password"> services name </label>
                                            <div class="col-sm-10">
                                                <textarea class="form-control" id="ServiceName" name="ServiceName"><?php echo $ServiceName; ?></textarea>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-sm-2 control-label" for "PricePerHour">PricePerHour</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" id="PricePerHour" name="PricePerHour" value="<?php echo $PricePerHour; ?>" />
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="col-sm-8 col-sm-offset-2">
                                                <input type="hidden" name="id" value="<?php echo $ServiceID; ?>">
                                                <input type="hidden" name="action" value="<?php echo $action; ?>">
                                                <button type="submit" name="save" class="btn btn-primary">Save</button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                <?php
                } else {
                ?>
                    <div >
                        
                        <div class="panel-body">
    <div style="float: left; width: 80%;">
<a href="services.php?action=add" class="btn btn-primary btn-sm"><i class="glyphicon glyphicon-plus"></i> Add</a> <!-- Move the "Add" button here -->
        <table class="table table-bordered table-hover" id="tSortable22" style="width: 60%;">
            <thead>
                <tr>
                    <th style="border:2px solid #000;">ServiceID</th>
                    <th style="border:2px solid #000;">ServiceName</th>
                    <th style="border:2px solid #000;">PricePerHour</th>
                    <th style="border:2px solid #000;">Action</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $sql = "select * from services ";
                $q = $conn->query($sql);
                while ($r = $q->fetch_assoc()) {
                    echo '<tr>
                    <td style="border:2px solid #000;">' . $r['ServiceID'] . '</td>
                    <td style="border:2px solid #000;">' . $r['ServiceName'] . '</td>
                    <td style="border:2px solid #000;">' . $r['PricePerHour'] . '</td>
                    <td>
                        <a href="services.php?action=edit&ServiceID=' . $r['ServiceID'] . '" class="btn btn-success btn-xs"><span class="glyphicon glyphicon-edit"></span></a>
                        <a onclick="return confirm(\'Are you sure you want to delete this record\');" href="services.php?action=delete&ServiceID=' . $r['ServiceID'] . '" class="btn btn-danger btn-xs"><span class="glyphicon glyphicon-remove"></span></a>
                    </td>
                </tr>';
                }
                ?>
            </tbody>
        </table>
    </div>
</div>
 </div>
                <?php
                }
                ?>
            </section>
        </div>

        <!-- Add your scripts here -->
    </div>
</body>
</html>

