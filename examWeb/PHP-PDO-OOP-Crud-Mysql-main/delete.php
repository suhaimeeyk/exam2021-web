<?php 
include_once 'dbconfig.php';
if(isset($_POST['btn-del'])) {
    $id = $_GET['delete_id'];
    $crud->delete($id);
    header("location: delete.php?firstname");
}
else
{
    echo "no post delete";
}
?>
<?php include_once 'header.php'; ?>
<div class="clearfix"></div>
<div class="container">
    <?php
    if(isset($_GET['firstname'])) {    
    ?>
    <div class="alert alert-success">
        <strong>Success!</strong> Record was successully deleted!
    </div>
    <?php
    } else {
    ?>
    <div class="alert alert-danger">
        <strong>Sure !</strong> to remove the following record ?
    </div>
    <?php
    }
    ?>
</div>
<div class="clearfix"></div>
<div class="container">
    <?php 
    if(isset($_GET['firstname'])) {  
    ?>
    <table class="table table-bordered">
        <tr>
            <th>#</th>
            <th>First Name</th>
            <th>Last Name</th>
            <th>E-Mail</th>
            <th>Gender</th>
        </tr>
        <?php
        $stmt = $dbc->prepare("SELECT * FROM testpdo WHERE firstname=:firstname");
        $stmt->execute(array(":firstname"=>$_GET['firstname']));
        while($row=$stmt->fetch(PDO::FETCH_BOTH)) {  
        ?>
        <tr>
            <!-- <td><?php print($row['id']); ?></td> -->
            <td><?php print($row['firstname']); ?></td>
            <td><?php print($row['lastname']); ?></td>
            <td><?php print($row['email']); ?></td>
            <td><?php print($row['contact']); ?></td>
        </tr>
        <?php
        }
        ?>
    </table>
    <?php
    }
    ?>
</div>
<div class="container">
<p>
<?php
if(isset($_GET['firstname'])) {
?>
    <form method="post">
        <input type="hidden" name="firstname" value="<?php echo $row['firstname']; ?>" />
        <button class="btn btn-large btn-primary" type="submit" name="btn-del"><i class="glyphicon glyphicon-trash"></i>&nbsp;YES</button>
        <a href="selectdata.php" class="btn btn-large btn-success"><i class="glyphicon glyphicon-backward"></i>&nbsp;NO</a>
    </form>
<?php
} else {
?>
    <a href="selectdata.php" class="btn btn-large btn-success"><i class="glyphicon glyphicon-backward"></i>&nbsp;Back to index</a>
<?php
}
?>
</p>
</div>
<?php include_once 'footer.php'; ?>