<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Iscrizione newsletter</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">

</head>
<body>
    
    <?php

        require __DIR__ . '/function.php';
        
        if (isset($_GET['email'])) {
            $response = checkEmail($_GET['email']);
        }
        
    ?>

    <main>
        <div class="container">

            <?php
                if (isset($response)) {
                    if ($response == true) {
                        echo '<div class="alert alert-success" role="alert">
                            Iscrizione avvenuta con successo!
                        </div>';
                    } else { 
                        echo '<div class="alert alert-danger" role="alert">
                            Indirizzo email non valido!
                        </div>'; 
                    }
                }
            ?>

            <form action="index.php" method="GET">
                <div class="mb-3">
                    <label for="email" class="form-label">Email address</label>
                    <input type="text" class="form-control" id="email" name="email">
                </div>
                <button type="submit" class="btn btn-primary">Iscrizione</button>
            </form>

        </div>
    </main>


</body>
</html>