<div class="breadcrumb-wrap">
	<div class="container">
		<nav aria-label="breadcrumb">
			<ol class="breadcrumb">
				<?php foreach ($baseFunctions->breadCrumb as $key => $value): ?>
					<?php if ($value['active']=='active'): ?>
						<li class="breadcrumb-item active" aria-current="page"><?php echo $value['text']; ?></li>
					<?php else: ?>
						<li class="breadcrumb-item">
							<a href="<?php echo $value['url']; ?>"><?php echo $value['text']; ?></a>
						</li>
					<?php endif ?>
					
				<?php endforeach ?>
			</ol>
		</nav>
	</div>
</div>