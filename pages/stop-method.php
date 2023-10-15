<!doctype html>
<html lang="en">
	<?php include '../include/head.html'; ?>

	<body class="container-fluid my-4">
		<fieldset>
			<legend>stop-method</legend>
			<style>
				p{
					width: 200px;
					height: 200px;
					background-color: salmon;
				}
			</style>
			<section>
				<button class="start btn btn-outline-primary">Start</button>
				<button class="stop btn btn-outline-primary">Stop</button>
				
				<p class="mt-2">Click start & stop</p>
			</section>

			<script>
				$(".start").click(function() {
					$("p").slideUp(5000);
				});

				$(".stop").click(function() {
					$("p").stop();
				});
			</script>
		</fieldset>

		<?php
			$url = "https://www.youtube.com/watch?v=apXd0TTz8C8&list=PLTmFffuXWQFkNYiGXr3Un6pqJZRi-eAtl&index=12";
		?>
		<a class="btn btn-outline-success" href="../index.php" arget="_blank">Back</a>
		<a class="btn btn-outline-primary" href="<?=$url?>" target="_blank">Source</a>
	</body>
</html>
