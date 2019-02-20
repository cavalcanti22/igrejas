

<!-- BEGIN Content -->
<div class="inner-bg"></div>
<?php if ($igreja->status == 1): ?>

    <div id="content-wrapper">
        <div id="content" class="container">
         <div class="sixteen columns">
            <div id="content-top">
                <ul id="breadcrumb" class="twelve columns alpha">
                    <li><a href="<?=base_url()?>">Home</a></li>
                    <li><?=$igreja->city?></li>
                </ul>
            </div>
            <div class="medium_separator"></div>
            <div class="white_space10"></div>
        </div>       
    <?php endif ?>

    <?php 
    $originalDate = $igreja->sentTime;
    $newDate = date("d-m-Y", strtotime($originalDate));
    ?>
    <div class="twelve columns">
        <div class="post-block inner-block">
            <h3><?=$igreja->name?></h3>
            <time datetime="2012-09-12"  class="post-date"><?=$newDate?></time>
            <div class="five columns alpha">
             <div class="featured-image">
                <a href=""><img src="<?=base_url().$igreja->image;?>" alt="" width="260"/></a> 
            </div>
            <p class="post-author"><a><?=$igreja->author?></a></p>
            <div class="clear"></div> 
            <div class="bottom10"></div>                              
        </div>
        <div class="seven columns last">               	
         <p class="bottom20">
            <?=$igreja->description?></p>
            <div class="clear"></div>
        </div>
        <div class="clear"></div>
        <div class="bottom10"></div>
    </div>

    <div class="clear"></div>
    <div class="bottom20"></div>


    <div class="clear"></div>


</div>

<aside class="four columns">
 <h4 style="text-transform: capitalize;">Mais Igrejas : <?=$igreja->city ?></h4>
 <div class="widget">
    <ul class="tabs">
        <li style="text-transform: capitalize;"><a class="" href="#"><?=$igreja->city ?></a></li>
        <li style="text-transform: capitalize;"><a class="" href="#"><?=$igreja->state ?></a></li>
    </ul>
    <div class="clear"></div>
    <div class="panes">
        <div class="pane">
            <ul class="widget-post-list">
              <?php foreach ($lastigrejas as $lastigreja): ?>
                <li>
                    <div class="wpl-image">
                        <a href="<?=base_url()?>cidades/<?=limpar($lastigreja->city)?>/<?=md5($lastigreja->id)?>/<?=$lastigreja->state?>"><img src="<?=base_url().$lastigreja->image?>" style="height:40px;width:40px;" alt=""  /></a>
                    </div>
                    <div class="wpl-desc">
                       <p><?=$lastigreja->name?></p>
                   </div>
                   <div class="clear"></div>	
               </li>
           <?php endforeach ?>
       </ul>
   </div>
   <div class="pane">
    <ul class="widget-post-list">
        <?php foreach ($lastigrejasStates as $lastigrejasState): ?>

        <li>
            <div class="wpl-image">
                 <a href="<?=base_url()?>cidades/<?=limpar($lastigrejasState->city)?>/<?=md5($lastigrejasState->id)?>/<?=$lastigrejasState->state?>"><img src="<?=base_url().$lastigrejasState->image?>" style="height:40px;width:40px;" alt=""  /></a>
            </div>
            <div class="wpl-desc">
               <p><?=$lastigrejasState->city?></p>
           </div>
           <div class="clear"></div>	
       </li>
   <?php endforeach ?>

</ul>
</div>
</div>
</div>


</aside>
<div class="clear"></div>

</div>
</div>
<!-- END Content -->

