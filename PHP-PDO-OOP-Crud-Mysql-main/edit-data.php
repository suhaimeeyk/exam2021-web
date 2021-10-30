<?php
include_once 'dbconfig.php';
if(isset($_POST['btn-update'])) {
    $id = $_GET['firstname'];
    $fname = $_POST['firstname'];
    $lname = $_POST['lastname'];
    $email = $_POST['email'];
    $contact = $_POST['contact'];
    
    if($crud->update($id, $fname, $lname, $email, $contact)) {
        echo "<script>alert ('Update successfully')</script>";
        echo "<script>window.location.href='selectdata.php'</script>";
    } else {
        echo "<script>alert('Something went wrong! Please try again!')</script>";
    }
}
if(isset($_GET['firstname'])) {
    $id = $_GET['firstname'];
    $res =  $crud->getID($id);
//     ใช้สร้างตัวแปรจาก array โดย index จะกลายเป็นชื่อตัวแปร
// และจะคืนค่าจำนวนของตัวแปรที่เกิดขึ้น ( ไม่สามารถใช้ได้กับตัวแปรที่มี key เป็นตัวเลข )
}
?>
<?php include_once 'header.php'; ?>
<div class="clearfix"></div>
<div class="container">
</div>
<div class="clearfix"></div><br/>
<div class="container">
    <form method="post">
        <table class="table table-bordered">
            <tr>
                <td>First Name</td>
                <td>
                    <input type="text" name="firstname" class="form-control" value="<?php echo $res['firstname']; ?>" required />
                </td>
            </tr>
            <tr>
                <td>Last Name</td>
                <td>
                    <input type="text" name="lastname" class="form-control" value="<?php echo $res['lastname']; ?>" required />
                </td>
            </tr>
            <tr>
                <td>E-Mail</td>
                <td>
                    <input type="text" name="email" class="form-control" value="<?php echo $res['email']; ?>" required />
                </td>
            </tr>
            <tr>
                <td>Contact No</td>
                <td>
                    <input type="text" name="contact" class="form-control" value="<?php echo $res['contact']; ?>" required />
                </td>
            </tr>
            <tr>
                <td colspan="2">
                    <button type="submit" class="btn btn-primary" name="btn-update">
                        <span class="glyphicon glyphicon-edit"></span>Update this record
                    </button>
                    <a href="selectdata.php" class="btn btn-large btn-success"><i class="glyphicon glyphicon-backward"></i>&nbsp; CANCEL</a>
                </td>
            </tr>
        </table>
    </form>
</div>
<?php include_once 'footer.php'; ?>