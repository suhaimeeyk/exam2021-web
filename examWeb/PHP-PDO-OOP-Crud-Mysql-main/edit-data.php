<?php
include_once 'dbconfig.php';
if(isset($_POST['btn-update'])) {
    $id = $_GET['name'];
    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    
    if($crud->update($id, $name, $phone, $email)) {
        echo "<script>alert ('Update successfully')</script>";
        echo "<script>window.location.href='selectdata.php'</script>";
    } else {
        echo "<script>alert('Something went wrong! Please try again!')</script>";
    }
}
if(isset($_GET['name'])) {
    $id = $_GET['name'];
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
                <td>NAME</td>
                <td>
                    <input type="text" name="name" class="form-control" value="<?php echo $res['name']; ?>" required />
                </td>
            </tr>
            <tr>
                <td>PHONE</td>
                <td>
                    <input type="text" name="phone" class="form-control" value="<?php echo $res['phone']; ?>" required />
                </td>
            </tr>
            <tr>
                <td>E-Mail</td>
                <td>
                    <input type="text" name="email" class="form-control" value="<?php echo $res['email']; ?>" required />
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