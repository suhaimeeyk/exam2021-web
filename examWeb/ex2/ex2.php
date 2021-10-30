<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>learn Bootstrap</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <script>
    function changeImage() {
        var image = document.getElementById('myImage');
        if (image.src.match("bulbon")) {
            image.src = "pic_bulboff.gif";
        } else {
            image.src = "pic_bulbon.gif";
        }
    }
    </script>

    <script>
    function changeImage2() {
        var image = document.getElementById('myImage2');
        if (image.src.match("swon")) {
            image.src = "swoff.png";
        } else {
            image.src = "swon.png";
        }
    }
    </script>

</head>

<body>

<br><br><br>
    <div class="text-center">
        <img id="myImage" src="pic_bulboff.gif" width="100" height="180"><br>

        <img id="myImage2" onclick="changeImage2(); changeImage();" src="swoff.png" width="100" height="50">
    </div>



    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>


</body>

</html>