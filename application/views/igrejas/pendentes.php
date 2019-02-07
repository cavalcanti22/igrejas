         <div class="row">
          <div class="col-md-12">
            <center>
              <?php 
              if (isset($_SESSION['feedback'])) {
                echo $_SESSION['feedback'];
                unset($_SESSION['feedback']);
              }
              ?>
            </center>
            <div class="card">
              <div class="card-content">
                <h4 class="card-title">Igrejas Pendentes</h4>
                <div class="toolbar">
                  <!--        Here you can write extra buttons/actions for the toolbar              -->
                </div>
                <div class="material-datatables">
                  <table id="datatables" class="table table-striped table-no-bordered table-hover" cellspacing="0" width="100%" style="width:100%">
                    <thead>
                      <tr>
                        <!-- <th>Foto</th> -->
                        <th>Imagem</th>
                        <th>Igreja</th>
                        <th>Estado</th>
                        <th>Cidade</th>
                        <th>Autor</th>
                        <th>Data</th>
                        <th class="disabled-sorting text-right">Ação</th>
                      </tr>
                    </thead>
                    <tfoot>
                      <tr>
                        <!-- <th>Foto</th> -->
                        <th>Imagem</th>
                        <th>Igreja</th>
                        <th>Estado</th>
                        <th>Cidade</th>
                        <th>Autor</th>
                        <th>Data</th>
                        <th class="text-right">Ação</th>
                      </tr>
                    </tfoot>
                    <tbody>
                      <?php foreach ($igrejas as $igreja): ?>
                        <?php if ($igreja->status == 0): ?>
                          <tr>
                            <!-- <td><?=$igreja->foto?></td> -->

                            <td>
                              <?php  if($igreja->image == ''){ ?>
                                <img src="<?=base_url()?>/assets/admin/img/sem_foto.png" alt="$igreja->name" style="width:6em;height: auto;">

                              <?php } else{ ?>

                                <img src="<?=base_url().$igreja->image?>" style="width:6em;height: auto;">       

                              <?php }  ?>
                            </td>
                            <td><?=$igreja->name?></td>
                            <td><?=$igreja->state?></td>
                            <td><?=$igreja->city?></td>
                            <td><?=$igreja->author?></td>
                            <td> <?php 
                            $tempo = $igreja->sentTime;
                            $tempo = date("d-m-Y ");
                            echo $tempo;
                            ?></td>
                            <td class="text-right">
                              <a href="<?=base_url()?>Igrejas/getOne/<?=md5($igreja->id)?>/<?=limpar($igreja->name) ?>" class="btn btn-simple btn-info btn-icon">
                               <i class="material-icons">visibility</i>
                             </a>
                             <a href="<?=base_url()?>Igrejas/mudaStatus/<?=md5($igreja->id)?>/<?=limpar($igreja->name) ?>" class="btn btn-simple btn-success btn-icon">
                               <i class="material-icons">done</i>
                             </a>
                             <a href="<?=base_url()?>Igrejas/removePendente/<?=md5($igreja->id)?>/<?=limpar($igreja->name) ?>" class="btn btn-simple btn-danger btn-icon"><i class="material-icons">close</i></a>
                           </td>
                         </tr>
                       <?php endif ?>
                     <?php endforeach ?>
                   </tbody>
                 </table>
               </div>
             </div>
             <!-- end content-->
           </div>
           <!--  end card  -->
         </div>
         <!-- end col-md-12 -->
       </div>