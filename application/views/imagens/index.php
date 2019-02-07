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
                        <h4 class="card-title">Lista de Imagens</h4>
                        <div class="toolbar">
                            <!--        Here you can write extra buttons/actions for the toolbar              -->
                        </div>
                        <div class="material-datatables">
                            <table id="datatables" class="table table-striped table-no-bordered table-hover" cellspacing="0" width="100%" style="width:100%">
                                <thead>
                                    <tr>
                                        <!-- <th>Foto</th> -->
                                        <th>Título</th>
                                        <th>Link</th>
                                        <th>Imagem</th>
                                        <th class="disabled-sorting text-right">Ação</th>
                                    </tr>
                                </thead>
                                <tfoot>
                                    <tr>
                                        <!-- <th>Foto</th> -->
                                        <th>Título</th>
                                        <th>Link</th>
                                        <th>Imagem</th>
                                        <th class="text-right">Ação</th>
                                    </tr>
                                </tfoot>
                                <tbody>
                                    <?php foreach ($imagens as $imagem): ?>
                                        <tr>
                                            <td><?=$imagem->titulo?></td>
                                            <td><?=$imagem->link?></td>
                                                <td>
                                                  <?php  if($imagem->imagem == ''){ ?>
                                                    <img src="<?=base_url()?>/assets/admin/img/sem_foto.png" alt="$imagem->nome" style="width:8em;height: auto;">

                                                <?php } else{ ?>

                                                    <img src="<?=base_url().$imagem->imagem?>" style="width:8em;height: auto;">       

                                                <?php }  ?>
                                            </td>
                                            <td class="text-right">
                                                <a href="<?=base_url()?>Imagens/edit/<?=md5($imagem->id)?>/<?=limpar($imagem->titulo) ?>" class="btn btn-simple btn-warning btn-icon">
                                                 <i class="material-icons">border_color</i>
                                             </a>
                                               <a href="<?=base_url()?>imagens/remove/<?=md5($imagem->id)?>/<?=limpar($imagem->titulo) ?>" class="btn btn-simple btn-danger btn-icon"><i class="material-icons">close</i></a>
                                            </td>
                                        </tr>
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