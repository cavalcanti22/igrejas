  <div class="row">
    <div class="col-sm-8 col-sm-offset-2">
      <!--      Wizard container        -->
      <div class="wizard-container">
        <div class="card wizard-card" data-color="rose" id="wizardProfile">

          <!--        You can switch " data-color="purple" "  with one of the next bright colors: "green", "orange", "red", "blue"       -->
          <div class="wizard-header">
            <h3 class="wizard-title">
              <?=$igreja->name?>
            </h3>
            <h5>Informações da igreja.</h5>
          </div>
          <div class="wizard-navigation" >
            <ul>
              <li>
                <a href="form-wizard.html#about" data-toggle="tab">Sobre</a>
              </li>
            </ul>
          </div>
          <div class="tab-content">
            <div class="tab-pane" id="about">
              <div class="row">
                <h4 class="info-text">Informações Básicas</h4>
                <div class="col-sm-4 col-sm-offset-1">
                    <center><legend>Foto Igreja</legend></center>
                  <div class="fileinput fileinput-new text-center" data-provides="fileinput">
                    <div class="fileinput-new thumbnail">
                      <?php  if($igreja->image == ''){ ?>
                       <img src="<?=base_url()?>/assets/admin/img/image_placeholder.jpg" alt="...">

                     <?php } else{ ?>

                      <img src="<?=base_url().$igreja->image?>" >       

                    <?php }  ?>

                  </div>
                  <div class="fileinput-preview fileinput-exists thumbnail "></div>
                </div>
              </div>
              <div class="col-sm-6">
                <div class="input-group">
                  <span class="input-group-addon">
                    <i class="material-icons">account_balance</i>
                  </span>
                  <div class="form-group label-floating">
                    <label class="control-label">Nome Igreja
                    </label>
                    <?=$igreja->name ?>
                  </div>
                </div>
                <div class="input-group">
                  <span class="input-group-addon">
                    <i class="material-icons">place</i>
                  </span>
                  <div class="form-group label-floating">
                    <label class="control-label">Estado
                    </label>
                    <?=$igreja->state ?>
                  </div>

                </div>

                <div class="input-group">
                  <span class="input-group-addon">
                    <i class="material-icons">business</i>
                  </span>
                  <div class="form-group label-floating">
                    <label class="control-label">Cidade
                    </label>
                    <?=$igreja->city ?>
                  </div>

                </div>
                <div class="input-group">
                  <span class="input-group-addon">
                    <i class="material-icons">videocam</i>
                  </span>
                  <div class="form-group label-floating">
                    <label class="control-label">Vídeo
                    </label>
                    <?=$igreja->video ?>
                  </div>
                </div>

                <div class="input-group">
                  <span class="input-group-addon">
                    <i class="material-icons">person</i>
                  </span>
                  <div class="form-group label-floating">
                    <label class="control-label">Autor
                    </label>
                    <?=$igreja->author ?>
                  </div>
                </div>
              </div>
            </div>

          </div>
               <div class="input-group col-sm-12">
                  <span class="input-group-addon">
                    <!-- <i class="material-icons">email</i> -->
                  </span>
                  <div class="form-group label-floating">
                    <label class="control-label">Descrição
                    </label>
                    <?=$igreja->description ?>
                  </div>
                </div>
          <a href="<?=base_url()?>Igrejas"><button type='button' class='btn btn-finish btn-fill btn-default pull-right' name='previous' value='Anterior' />Retornar</button></a>

          <div class="clearfix"></div>

        </div>
      </div>
      <!-- wizard container -->
    </div>
  </div>