<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cálculadora de subtração</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <main>
        <div class="painel">
            <h2>Cálculadora de <i>Subtração</i></h2>
            <div>
                <form action="resultado-subtraçao.php" method='POST'>
                <div class="row">
                    <div class="col">
                     <input type="number" class="form-control" name="subtracao1" required />                    
                    </div>
                    <h2>-</h2>
                    <div class="col">
                    <input type="number" class="form-control" name="subtracao2" required />
                    </div>
                    <div class="col">
                    <button class="btn btn-outline-primary" type="submit">Subtrair</button>
                    </div>

                </div>
                    
                </form>
                <br>
                <h4><a class="btn btn-outline-success" href="index.php">Voltar para o inicio</a></h4>
            </div>
        </div>
    </main>
</body>
</html>