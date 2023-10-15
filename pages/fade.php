<!doctype html>
<html lang="en">
	<?php include '../include/head.html'; ?>

	<body class="container-fluid my-4">
		<fieldset>
			<legend>fade</legend>
			<style>
				p{
					width: 200px;
					height: 200px;
					background-color: salmon;
				}
			</style>
			<section>
				<button class="start btn btn-outline-primary">Start</button>				
				<p class="mt-2">Fade(in, out, toggle, to)</p>
			</section>

			<script>
				// $(selector).fade(speed, opacity, callback)
				$(".start").click(function() {
					// $("p").fadeIn(); // css display: none
					// $("p").fadeOut(3000);
					// $("p").fadeToggle(3000);
					$("p").fadeTo(2000, '0.15', function(){
						alert('FadeTo working fine');
					});
				});
			</script>
		</fieldset>

		<?php
			$url = "https://www.youtube.com/watch?v=yJPWhL3iyi8&list=PLTmFffuXWQFkNYiGXr3Un6pqJZRi-eAtl&index=13";
		?>
		<a class="btn btn-outline-success" href="../index.php" arget="_blank">Back</a>
		<a class="btn btn-outline-primary" href="<?=$url?>" target="_blank">Source</a>
	</body>
</html>
