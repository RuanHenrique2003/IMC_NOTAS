<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" a href="form_notas_css.css">
    <title>Calculadora de média</title>
</head>

    <body>
        <center>
            <form action="resultado_notas_med.php" method="GET"><br>
                <fieldset><legend>Calculadora de Média</legend>
                    <br><br><br><br>
                        <label for="nome"> Digite o nome do Aluno: </label>
                        <input type="text" id="nome" name="nome" placeholder="Nome*" required>
                                <br><br>
                        <label for="nota1"> Digite a 1ª Nota: </label>
                        <input type="text" id="nota1" name="nota1" placeholder="1º Nota*" required>
                                <br><br>
                        <label for="nota2">Digite a 2ª Nota: </label>
                        <input type="text" id="nota2" name="nota2" placeholder="2º Nota*" required>
                                <br><br><br>
                        <input type="submit" id="botao" value="Calcular Média">
                                <br><br><br>
                </fieldset>      
            </form>
        </center>    
    </body>
</html>