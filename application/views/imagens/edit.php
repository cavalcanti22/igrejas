 <center>
     <div class="col-md-12 col-sm-4">
         <?php echo validation_errors(); ?>
         <?php echo form_open_multipart('Imagens/saveImagem/'.md5($imagem->id));?>

         <legend>Atualizar Imagem</legend>
         <div class="fileinput fileinput-new text-center" data-provides="fileinput">
            <div class="fileinput-new thumbnail">
           

 <?php  if($imagem->imagem == ''){ ?>
 <img src="<?=base_url()?>/assets/admin/img/image_placeholder.jpg" alt="...">

<?php } else{ ?>
        
        <img src="<?=base_url().$imagem->imagem?>" >       
    
<?php }  ?>
                            
                         

            </div>
            <div class="fileinput-preview fileinput-exists thumbnail"></div>
            <div>
                <span class="btn btn-round btn-file">
                    <span class="fileinput-new">Escolha a Imagem</span>
                    <span class="fileinput-exists">Trocar</span>
                    <input type="file" name="imagem" />

                </span>
                   <a href="<?=base_url()?>Imagens/removeImagem/<?=md5($imagem->id)?>"><span class="fileinput-new"><i class="material-icons">delete_forever</i>Imagem</span></a>
                <a href="advanced-elements.html#pablo" class="btn btn-danger btn-round fileinput-exists" data-dismiss="fileinput"><i class="fa fa-times"></i> Remove</a>

                <div class="form-group">
                    <label for="titulo">Título</label><br>
                    <input type="text" name="titulo" class="form-control" value="<?=$imagem->titulo ?>"/><br />
                </div>
                <div class="form-group">
                    <label for="link">Link</label><br>
                    <input type="text" name="link" class="form-control" value="<?=$imagem->link ?>" /><br />
                </div>


                <input type="hidden" name="<?=md5($imagem->id)?>" class="form-control" value="<?=md5($imagem->id)?>"/><br />

                <input type="submit" class="btn btn-primary" name="submit" 
                value="Atualizar" style="width:100%;margin-bottom:1%" />

            </div>
        </div>
    </div>
</form>
</center>





