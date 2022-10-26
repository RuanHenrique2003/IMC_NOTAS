<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" a href="resultado_notas_css.css">
    <title>Resultado da média</title>
</head>
<body>
    <?php

        $nome = ($_GET["nome"]);
        $nota1 = floatval($_GET["nota1"]);
        $nota2 = floatval($_GET["nota2"]);

        if (strpos($nota2, ',') !== false){
            $nota2 = floatval(str_replace(",",".", $nota2));
        } else {
            $nota2 = floatval($nota2);
        }

        $media = round(($nota1 + $nota2) / 2,2);

        $situacao = " ";

        if ($media < 4){
            $situacao = ' <b style = "background-color : red ; padding :5px; ">REPROVADO</b>';
        } else if ($media >= 4 && $media < 6){
            $situacao = '<b style = "background-color : #51d1f6 ; padding :5px; ">EXAME FINAL</b>';
        } else {
            $situacao = ' <b style = "background-color : #7fff00 ; padding :5px; "  > APROVADO </b>';
        }
 
    ?>

        <center>
           
                <p>Resultado</p>
                    <div>
                        <table>
                            <th>
                                NOME
                            </th>
                            <th>
                                MÉDIA
                            </th>
                            <th>
                                SITUAÇÃO
                            </th>
                                <tr>
                                    <td >
                                        <?php echo $nome ?>
                                    </td>
                                    <td >
                                        <?php echo $media ?>
                                    </td>
                                    <td >
                                        <?php echo $situacao ?>
                                    </td>
                                </tr>
                        </table>        
                    </div>
            
        </center>
        
        
    
</body>
</html>