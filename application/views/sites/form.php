<div class="container">
  
<?php
echo validation_errors('<div class="alert alert-danger">','</div>'); 
echo form_open_multipart('sites/add');
?>
<center><h2>CADASTRE A SUA IGREJA</h2></center>
      <center>
                    <?php 
                    if (isset($_SESSION['feedback'])) {
                        echo $_SESSION['feedback'];
                        unset($_SESSION['feedback']);
                    }
                    ?>
                </center>

<div class="row">
 <div class="form-group col-md-6">
  <label for="author">Seu Nome</label>
  <input name="author" type="text" class="form-control" value="<?= set_value('author') ?>">
</div>
<div class="form-group col-md-6">
  <label for="name">Nome da Igreja</label>
  <input name="name" type="text" class="form-control" value="<?= set_value('name') ?>">
</div>
<div class="form-group col-md-6">
  <label for="state" >Estado da Igreja</label>
  <select class="form-control" id="state" name="state">
    <option value="acre">Acre</option>
    <option value="alagoas">Alagoas</option>
    <option value="amapa">Amapá</option>
    <option value="amazonas">Amazonas</option>
    <option value="bahia">Bahia</option>
    <option value="ceara">Ceará</option>
    <option value="distritofederal">Distrito Federal</option>
    <option value="espiritosanto">Espírito Santo</option>
    <option value="goias">Goiás</option>
    <option value="maranhao">Maranhão</option>
    <option value="matogrosso">Mato Grosso</option>
    <option value="matogrossodosul">Mato Grosso do Su</option>
    <option value="minasgerais">Minas Gerais</option>
    <option value="para">Pará</option>
    <option value="paraiba">Paraíba</option>
    <option value="parana">Paraná</option>
    <option value="pernambuco">Pernambuco</option>
    <option value="piaui">Piauí</option>
    <option value="riodejaneiro">Rio de Janeiro</option>
    <option value="riograndedonorte">Rio Grande do Norte</option>
    <option value="riograndedosul">Rio Grande do Sul</option>
    <option value="rondonia">Rondônia</option>
    <option value="roraima">Roraima</option>
    <option value="santacatarina">Santa Catarina</option>
    <option value="saopaulo">São Paulo</option>
    <option value="sergipe">Sergipe</option>
    <option value="tocantins">Tocantins</option>
  </select>
</div>
<div class="form-group col-md-6">
  <label for="city" >Cidade da Igreja</label>
  <input name="city" type="text" class="form-control" value="<?= set_value('city') ?>">
</div>
<div class="form-group col-md-6">
  <label for="image" >Foto da Igreja</label>
  <input type="file" name="image" class="form-control"/>
</div>
<div class="form-group col-md-6">
  <label for="video" >Link Vídeo da Igreja (opcional)</label>
  <input name="video" type="text" class="form-control" value="<?= set_value('video') ?>">
</div>
<div class="form-group col-md-12">
  <label for="description">Descrição</label>
  <textarea class="form-control" id="description" name="description" rows="3"></textarea>
</div>
<div class="form-group">
  <button type="submit" name="submit"class="button medium"">CADASTRAR</button>
</div>
</div>
</form>




</div>