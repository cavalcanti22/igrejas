 <center>
     <?php echo validation_errors(); ?>
     <?php echo form_open_multipart('Imagens/add');?>
     <div class="col-md-12 col-sm-4">
        <legend>Imagem</legend>
        <div class="fileinput fileinput-new text-center" data-provides="fileinput">
            <div class="fileinput-new thumbnail">
                <img src="<?=base_url()?>/assets/admin/img/image_placeholder.jpg" alt="...">
            </div>
            <div class="fileinput-preview fileinput-exists thumbnail"></div>
            <div>
                <span class="btn btn-round btn-file">
                    <span class="fileinput-new">Escolha a Imagem</span>
                    <span class="fileinput-exists">Trocar</span>
                    <input type="file" name="imagem" />
                </span>
                <a href="advanced-elements.html#pablo" class="btn btn-danger btn-round fileinput-exists" data-dismiss="fileinput"><i class="fa fa-times"></i> Remove</a>

                <div class="form-group">
                    <label for="titulo">titulo</label><br>
                    <input type="text" name="titulo" class="form-control" /><br />
                </div>
                <div class="form-group">
                    <label for="link">link</label><br>
                    <input type="text" name="link" class="form-control"/><br />
                </div>

                <input type="submit" class="btn btn-primary" name="submit" 
                value="Cadastrar" style="width:100%;margin-bottom:1%" />

            </div>
        </div>
    </div>
</form>
</center>





