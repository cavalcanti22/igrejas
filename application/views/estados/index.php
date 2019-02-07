
<div class="row">
	<?php foreach ($igrejas as $igreja): ?>
<?php if ($igreja->status == 1): ?>

		<div class="col-md-4" >
			<div class="card">
				<img class="card-img-top" src="<?=base_url().$igreja->image;?>" alt="Card image cap" style="height:15em;">
				<div class="card-body">
					<h5 class="card-title"><?=$igreja->name;?></h5>
					<p class="card-text"><?=$igreja->city;?></p>
					<a href="<?=base_url()?>cidade/<?=md5($igreja->id)?>" class="btn btn-primary">Ver</a>
				</div>
			</div>
		</div>
<?php endif ?>
		
	<?php endforeach ?>
</div>



