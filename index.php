<?php $lists = json_decode(file_get_contents('include/lists.json')); ?>
<!doctype html>
<html lang="en">

	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<!-- <meta http-equiv="refresh" content="5"> -->
		<title>Work list</title>
		<link rel="stylesheet" href="assets/bootstrap.min.css">
		<link rel="stylesheet" href="assets/style.css">
		
		<script src="assets/jquery.min.js"></script>
		<script src="assets/bootstrap.min.js"></script>
	</head>

	<body class="container-fluid text-center my-4">
		<fieldset class="form-group">
			<legend class="mb-0">jQuery list (<?=count($lists)?>)</legend>
			<div>
				<ul class="nav nav-pills justify-content-end" id="pills-tab" role="tablist">
					<li class="nav-item">
						<a class="nav-link p-1 mx-2 active" id="grid-tab" data-bs-toggle="pill" data-bs-target="#grid" type="button">
							<img src="assets/img/grid.png" alt="Img not found">
						</a>
					</li>
					<li class="nav-item">
						<a class="nav-link p-1 mx-2" id="list-tab" data-bs-toggle="pill"	data-bs-target="#list" type="button">
							<img src="assets/img/list.png" alt="Img not found">
						</a>
					</li>
				</ul>
				<div class="tab-content" id="pills-tabContent">
					<div class="tab-pane fade show active" id="grid">
						<div class="row justify-content-center">
							<?php
							foreach ($lists as $key => $list) { ?>
								<div class="col-3">
									<div class="input-group p-2">
										<span class="input-group-text"> <?= ++$key ?> </span>
										<a class="form-control btn link border" href="<?= $list->url; ?>"><?= $list->name; ?></a>
									</div>
								</div>
							<?php } ?>
						</div>
					</div>
					<div class="tab-pane fade" id="list">
						<div>
							<?php
								foreach ($lists as $key => $list) { ?>
									<li class="list-group-item p-1 d-grid gap-2 col-6 mx-auto">
										<a class="btn btn-outline-secondary fw-bold" href="<?= $list->url; ?>">
											<?= ++$key ?>) <?= $list->name; ?>
										</a>
									</li>
							<?php } ?>
						</div>
					</div>
				</div>
			</div>
		</fieldset>

		<fieldset class="form-group">
			<legend class="mb-0">jQuery Effects</legend>
			<?php
				$effects = array('hide/show', 'fade', 'slide', 'animate', 'stop()', 'callback', 'chaining');
				$i=1;
				foreach($effects as $effect){ ?>
					<span class="px-1">
						<?=$i.") ".$effect; $i++;?>
					</span>					
				<?php } ?>
		</fieldset>
	</body>
</html>