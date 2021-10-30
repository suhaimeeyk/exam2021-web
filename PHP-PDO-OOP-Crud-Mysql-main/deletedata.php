<?php
include_once 'dbconfig.php';
//  require('functionfix.php');
//  $deletedata = new fixasset();
if(isset($_GET['firstname'])) {
    $id = $_GET['firstname'];
    $crud->delete($id);
    if($crud){
        echo "<script>alert ('Delete Succesfully')</script>";
        echo "<script>window.location.href='selectdata.php'</script>";
    }
    // header("location: delete.php?deleted");
    else{
        echo "<script>alert('Something went wrong! Please try again!')</script>";
        echo "<script>window.location.href='selectdata.php'</script>";
    }
}
else
{
    echo "no post delete";
}
?>