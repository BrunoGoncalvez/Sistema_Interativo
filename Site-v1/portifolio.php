<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfólio - WebProgram Development</title>

    <script src="https://kit.fontawesome.com/05bbd2c08b.js" crossorigin="anonymous"></script>

    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="shortcut icon" href="img/icon.png">
    <!-- CSS Bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
        integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <!-- JQuery Bootstrap -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous">
    </script>

    <style>
        .bold-text{
            font-weight: bold;
        }
    </style>

</head>

<body>

    <?php
        require('nav.php');
    ?>

    <div class="container">

        <div class="row" style="height: 30px;"></div>

        <div class="row justify-content-center align-items-center text-center proj-destaque">
            <div class="col-md-12">
                <h3 style="color: #fff;">Grand Forest</h3>
                <br>
                <div style="border: 2px #0000FF solid;">
                    <img src="img/promo_game.png">
                </div>
                <br>
                <h6 style="color: #0000FF;" class="bold-text">Veja a demonstração do nosso novo jogo</h6>
                <h4 class="name-cliente mb-3">
                    <a href="grand_forest.php" style="text-decoration: none;">Acesse Grand Forest</a>
                </h4>
                <a href="Download/grand_forest_game.zip" download="Download/grand_forest_game.zip" class="btn btn-success">Download for Windows</a>
            </div>
        </div>

        <div class="row" style="height: 50px;"></div>

        <div class="row">
            <div class="col-md-4 text-center">
                <div class="card-proj">
                    <img src="img/treasure_hunter.jpg">
                    <h5 class="name-cliente bold-text">Treasure Hunter</h5>
                    <h5>Em desenvolvimento</h5>
                </div>
            </div>
            <div class="col-md-4 text-center">
                <div class="card-proj">
                    <img src="img/divine_game.jpg">
                    <h5 class="name-cliente bold-text">Divide and Conquer</h5>
                    <h5>Em desenvolvimento</h5>
                </div>
            </div>
            <div class="col-md-4 text-center">
                <div class="card-proj">
                    <img src="img/arcade_game.jpg">
                    <h5 class="name-cliente bold-text">Arcade Zone</h5>
                    <h5>Em desenvolvimento</h5>
                </div>
            </div>
        </div>

    </div>

    <?php
        require('footer.html');
    ?>
</body>

</html>