<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" a href="result_imc_css.css">
    <title>Resultado do imc</title>
</head>

<body>
    <?php

        $peso = floatval($_GET["peso"]);
        $altura = ($_GET["altura"]);

        if (strpos($altura, ',') !== false){
            $altura = floatval(str_replace(",",".", $altura));
        } else {
            $altura = floatval($altura);
        }

        $imc = round($peso / ($altura*$altura), 2);

        if ($imc < 17){
            $situacao = 'MUITO ABAIXO DO PESO';
        } else if ($imc < 18.5){
            $situacao = 'ABAIXO DO PESO';
        } else if ($imc < 25){
            $situacao = 'PESO NORMAL';
        } else if ($imc < 30){
            $situacao = 'ACIMA DO PESO';
        } else if ($imc < 35){
            $situacao = 'OBESIDADE I';
        } else if ($imc < 40){
            $situacao = 'OBESIDADE II';
        } else {
            $situacao = 'OBESIDADE III';
        }

    ?>

        <center>
            <fieldset>
                <legend>Resultado</legend>
                    <div>

                    <table>
                        <th>
                            IMC
                        </th>
                        <th>
                            SITUAÇÃO
                        </th>
                        <tr>
                            <td>
                                <?php echo $imc ?>
                            </td>
                            <td>
                                <?php echo $situacao ?>
                            </td>
                        </tr>
                    </table>
                         
                    </div>
            </fieldset>
        </center>
    
</body>
</html>