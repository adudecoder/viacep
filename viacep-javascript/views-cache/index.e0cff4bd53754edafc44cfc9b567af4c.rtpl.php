<?php if(!class_exists('Rain\Tpl')){exit;}?><form method="POST" action="/views/cep.html" class="form-horizontal">
    <fieldset>
    <div class="panel panel-primary">
        <div class="panel-heading">Cadastro de Cliente</div>
        
        <div class="panel-body">
    <div class="form-group">
    <!--
    <div class="form-group">   
    <div class="col-md-4 control-label">
        <img id="logo" src="http://blogdoporao.com.br/wp-content/uploads/2016/12/Faculdade-pitagoras.png"/>
    </div>
    <div class="col-md-4 control-label">
        <h1>Cadastro de Cliente</h1>
        
    </div>
    </div>
        -->
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
          <button type="button" class="btn btn-primary" onclick="pesquisacep(cep.value)">Pesquisar</button>
        </div>
    </div>
    
    </fieldset>
    </form>