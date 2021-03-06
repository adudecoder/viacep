<?php

    require_once __DIR__."/vendor/autoload.php";

    // DEPENDÊNCIAS
    use \App\WebService\ViaCEP;

    // EXECUTA A CONSULTA DE CEPS
    $dadosCEP = ViaCEP::consultarCEP("01001000");

    // IMPRIME O RESULTADO
    //print_r($dadosCEP);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Via CEP</title>

    <!-- CSS STYLE -->
    <link rel="stylesheet" href="css/style.css" />

    <!-- CDN BOOTSTRAP AND JQUERY SCRIPT -->
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js" defer></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js" defer></script>

</head>
<body>

    <form method="POST" action="cep.php" class="form-horizontal">

        <fieldset>
            <div class="panel panel-primary">
                <div class="panel-heading">Consultar CEP</div>
                
                <div class="panel-body">
            <div class="form-group">
            
            <div class="col-md-11 control-label">
                <p class="help-block"><h11>*</h11> Campo Obrigatório </p>
            </div>
            </div>

            <!-- Search input-->
            <div class="form-group">
            <label class="col-md-2 control-label" for="CEP">CEP <h11>*</h11></label>
            <div class="col-md-2">
                <input id="cep" name="cep" placeholder="Apenas números" class="form-control input-md" required="" value="" type="search" maxlength="8" pattern="[0-9]+$">
            </div>
            <div class="col-md-2">
                <button type="button" class="btn btn-primary">Pesquisar</button>
                </div>
            </div>

            <!-- Prepended text-->
            <div class="form-group">
            <label class="col-md-2 control-label" for="prependedtext">Endereço</label>
            <div class="col-md-4">
                <div class="input-group">
                <span class="input-group-addon">Rua</span>
                <input id="rua" name="rua" class="form-control" placeholder="" required="" readonly="readonly" type="text" value="<?=$dadosCEP['logradouro'] ?>">
                </div>
                
            </div>
                <div class="col-md-2">
                <div class="input-group">
                <span class="input-group-addon">Nº <h11>*</h11></span>
                <input id="numero" name="numero" class="form-control" placeholder="" required=""  type="text">
                </div>
                
            </div>
            
            <div class="col-md-3">
                <div class="input-group">
                <span class="input-group-addon">Bairro</span>
                <input id="bairro" name="bairro" class="form-control" placeholder="" required="" readonly="readonly" type="text" value="<?=$dadosCEP['bairro'] ?>">
                </div>
                
            </div>
            </div>

            <div class="form-group">
            <label class="col-md-2 control-label" for="prependedtext"></label>
            <div class="col-md-4">
                <div class="input-group">
                <span class="input-group-addon">Cidade</span>
                <input id="cidade" name="cidade" class="form-control" placeholder="" required=""  readonly="readonly" type="text" value="<?=$dadosCEP['localidade'] ?>">
                </div>
                
            </div>
            
            <div class="col-md-2">
                <div class="input-group">
                <span class="input-group-addon">Estado</span>
                <input id="estado" name="estado" class="form-control" placeholder="" required=""  readonly="readonly" type="text" value="<?=$dadosCEP['uf'] ?>">
                </div>
                
            </div>
            </div>
        </fieldset>

    </form>
    
</body>
</html>