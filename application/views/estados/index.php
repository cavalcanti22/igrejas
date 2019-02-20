

<!-- BEGIN Content -->
<div class="inner-bg"></div>
<div id="content-wrapper">
    <div class="container">
    	<div class="sixteen columns">
            <div id="content-top">
                <ul id="breadcrumb" class="twelve columns alpha">
                    <li><a href="<?=base_url()?>">Home</a></li>
                    <li style="text-transform: capitalize;"><?=$titulo?></li>
                </ul>
            </div>
            <div class="medium_separator"></div>
            <div class="white_space10"></div>
        </div>  
        
        <?php foreach ($igrejas as $igreja): ?>
            <div class="service-block four columns">

                <?php if ($igreja->status == 1): ?>
                    
                    <center><h2 style="text-transform: capitalize;"><?=$igreja->name;?></h2></center>
                    <a href="<?=base_url()?>cidades/<?=limpar($igreja->city)?>/<?=md5($igreja->id)?>/<?=$igreja->state?>"><h3 style="background-image:url('<?=base_url().$igreja->image;?>');height: 100px;"></h3></a>
                    <p style="text-transform: capitalize;"><center><?=$igreja->city;?></center>
                    </p>
                  <center>
                        <p class="left"><a href="<?=base_url()?>cidades/<?=limpar($igreja->city)?>/<?=md5($igreja->id)?>/<?=$igreja->state?>" class="button">Saiba Mais</a></p>
                  </center>

                <?php endif ?>
            </div>

        <?php endforeach ?>

        <div class="clear"></div>          
        <div class="big_separator"></div>     


        <div class="clear"></div>

    </div>    
</div>
<!-- END Content -->