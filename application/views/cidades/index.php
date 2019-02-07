<?php if ($igreja->status == 1): ?>
	<div class="row col-md-12" >
		<div class="col-md-12">
			<h2>Igreja: <?=$igreja->name?></h2>
		</div>	
		<div class="col-md-12">
			<h3>Cidade: <?=$igreja->city ?></h3>
			
		</div>
		<div class="col-md-12">
			<img src="<?=base_url().$igreja->image;?>" style="width: 70%;">
		</div>

		<div class="col-md-6">
			<p>Enviado por: <?=$igreja->author ?></p>
		</div>
		<div class="col-md-6">

			<p>Enviado em: <?=$igreja->sentTime ?></p>
		</div>
		<div class="col-md-12">
			<p>Cidade: <?=$igreja->description ?></p>
		</div>
		<div class="col-md-12">

			<div class="embed-responsive embed-responsive-16by9">
				<iframe class="embed-responsive-item" src="https://www.youtube.com/embed/zpOULjyy-n8?rel=0" allowfullscreen></iframe>
			</div>
		</div>
	</div>
<?php endif ?>
