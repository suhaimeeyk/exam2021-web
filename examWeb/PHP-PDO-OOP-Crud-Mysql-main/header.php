<!DOCTYPE html
    PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>PDO OOP CRUD using Bootstrap</title>
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script>
    $(document).ready(function() {
        $("#hide").click(function() {
            $("table").hide();
        });
        $("#show").click(function() {
            $("table").show();
        });
    });
    </script>

    <style>
    h1 {
        text-align: center;
    }
    </style>

</head>

<body>
    <div class="navbar navbar-default navbar-static-top" role="navigation">
            <h1><font color="#37E646">HOME</font></h1>
    </div>