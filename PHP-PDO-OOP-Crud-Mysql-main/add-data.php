<?php
include_once 'dbconfig.php';
if(isset($_POST['btn-save'])) {
    $fname = $_POST['first_name'];
    $lname = $_POST['last_name'];
    $email = $_POST['email_id'];
    $contact = $_POST['contact_no'];
    
    if($crud->create($fname, $lname, $email, $contact)) {
        // header("location: add-data.php?inserted");
        echo "<script>alert('Inserted Succesfully')</script>";
        echo "<script>window.location.href='selectdata.php'</script>";
    } else {
        // header("location: add-data.php?failure");
        echo "<script>alert('Something went wrong! Please try again')</script>";
    }
}
?>
<?php include_once 'header.php'; ?>
<div class="clearfix"></div>
<?php
if(isset($_GET['inserted'])) {  
?>
<div class="container">
    <div class="alert alert-info">
        <strong>Yesh!</strong>Successfully inserted<a href="index.php">&nbsp;HOME</a>!
    </div>
</div>
<?php 
} else if(isset($_GET['failure'])) {
?>
<div class="container">
    <div class="alert alert-warning">
        <strong>Opp!</strong>Error while inserting data!
    </div>
</div>
<?php
}
?>
<div class="clearfix"></div><br/>
<div class="container">
    <form method="post">
        <table class="table table-bordered">
            <tr>
                <td>First Name</td>
                <td><input type="text" name="first_name" class="form-control" required /></td>
            </tr>
            <tr>
                <td>Last Name</td>
                <td><input type="text" name="last_name" class="form-control" required /></td>
            </tr>
            <tr>
                <td>E-Mail</td>
                <td><input type="text" name="email_id" class="form-control" required /></td>
            </tr>
            <tr>
                <td>Contact No</td>
                <td><input type="text" name="contact_no" class="form-control" required /></td>
            </tr>
            <tr>
                <td colspan="2"><button type="submit" class="btn btn-primary" name="btn-save">
                <span class="glyphicon glyphicon-plus"></span>Create New Record
                </button>
                    <a href="selectdata.php" class="btn btn-large btn-success"><i class="glyphicon glyphicon-backward"></i>&nbsp;Back to index</a>
                </td>
            </tr>
        </table>
    </form>
</div>
<?php include_once 'footer.php'; ?>
