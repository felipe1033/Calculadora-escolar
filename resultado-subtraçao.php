<?php
 
if($_POST) {
 
    $subtracao1 = $_POST['subtracao1'];
    $subtracao2 = $_POST['subtracao2'];
  
    $mensagem = ""; 
 
    if (is_numeric($subtracao2) && is_numeric($subtracao1)){
        if (($subtracao1 > -1) && ($subtracao2 > -1)) {
 
            $resultado = $subtracao1 - $subtracao2;
           
  
            $mensagem.= "<div class='alert alert-success'>";
            $mensagem.= "Resultado da soma:";
            $mensagem.= "<ul>";
            $mensagem.= "<li><b>Resultado:</b> ".$resultado."</li>";
            $mensagem.= "</ul>";
            $mensagem.= "</div>";
        } else {
            $mensagem.= "<div class='alert alert-warning'>";
            $mensagem.= "<b>O valor da soma deve ser maior que 1 negativo.</b>";
            $mensagem.= "</div>";
        }
    } else {
        $mensagem.= "<div class='alert alert-danger'>";
        $mensagem.= "<b>O valor recebido não é numérico</b>";
        $mensagem.= "</div>";
    }
} else {
    $mensagem = "<div class='alert alert-secondary'>";
    $mensagem.= "<b>Nenhum dado foi recebido pelo formulário</b>";
    $mensagem.= "</div>";
}
 
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">   
    <title>Resultado da soma</title>

    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>
<body>  
    <main>
        <div class="painel">
            <h2>Resultado do cálculo da adição</h2>
            <div class="conteudo-painel"> 
                <?php
                echo $mensagem;
                ?>
                <a class="botao" href="calculadora-(-).php">Voltar</a>
            </div>            
        </div>  
    </main>  
</body>
</html>