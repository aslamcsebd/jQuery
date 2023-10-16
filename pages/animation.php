<!doctype html>
<html lang="en">
	<?php include '../include/head.html'; ?>

	<body class="container-fluid my-4">
		<fieldset>
			<legend>animation</legend>
			<style>
				p{
					width: 200px;
					height: 200px;
					background-color: salmon;
				}
			</style>
			<section>
				<button class="start btn btn-outline-primary">Start</button>				
				<p class="mt-2">animation</p>
			</section>

			<script>
				// $(selector).animate({params}, speed, callback);
				$("button").click(function(){
					$("p").animate({
						width: '300px',
						height: '300px',
						marginLeft: '100px'
					}, 2000, function(){
						alert("animation working");
					});
				});

			</script>
		</fieldset>

		<?php
			$url = "https://www.youtube.com/watch?v=n6Vf-sbflSs&list=PLTmFffuXWQFkNYiGXr3Un6pqJZRi-eAtl&index=14";
		?>
		<a class="btn btn-outline-success" href="../index.php" arget="_blank">Back</a>
		<a class="btn btn-outline-primary" href="<?=$url?>" target="_blank">Source</a>
	</body>
</html>
