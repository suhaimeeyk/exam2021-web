<?php
include_once 'dbconfig.php';
?>
<?php include_once 'header.php'; ?>

<div class="clearfix"></div>

<div class="container">
    <a href="add-data.php" class="btn btn-success"><i class="glyphicon glyphicon-plus"></i> &nbsp; Add
        Records</a>
</div>

<div class="clearfix"></div><br />

<div class="container">

    <table class='table table-bordered table-responsive'>
        <tr>
            <th>First Name</th>
            <th>Last Name</th>
            <th>E-mail ID</th>
            <th>Contact No</th>
            <th colspan="2" align="center">Actions</th>
        </tr>
        <?php
        $stmt =  $crud->selectdata();
    //     $results = array();
    //     $results =  $stmt->fetch(PDO::FETCH_ASSOC);
    //     print_r($results);
    //   foreach($results as  $res)
        while($row = $stmt->fetch(PDO::FETCH_ASSOC)){
        
        
        ?>
        <tr>
            <td><?php echo $row['firstname'] ?></td>
            <td><?php echo $row['lastname'] ?></td>
            <td><?php echo $row['email'] ?></td>
            <td><?php echo $row['contact'] ?></td>
            <td><a href="edit-data.php?firstname=<?php echo $row['firstname']; ?>"
                    class="btn btn-primary center-block btn-sm">แก้ไข</a></td>
            <td><a href="deletedata.php?firstname=<?php echo $row['firstname']; ?>" onclick="return confirm_delete()"
                    class="btn btn-danger center-block btn-sm">ลบ</a></td>
        </tr>
        <?php
            }
        ?>
        
    </table>
    
    <button id="hide">Hide</button>
    <button id="show">Show</button>


</div>
<br>
<script type="text/javascript">
function confirm_delete() {
    return confirm('are you sure?');
}
</script>

<?php include_once 'footer.php'; ?>