<!doctype html>
<html lang="en">
	<?php include '../include/head.html'; ?>

	<body class="container-fluid my-4">
		<fieldset>
			<legend>hide-show</legend>
			<section>
				<p>
					This line will be hide-show
				</p>
				<button class="hide btn btn-outline-success">hide</button>
				<button class="show btn btn-outline-primary">Show</button>
				<button class="toggle btn btn-outline-success">Toggle(hide-show)</button>
			</section>
			
			<script>
				$(".hide").click(function(){
					$("p").hide();
					// $("p").hide('slow');
					// $("p").hide(1500);
				});
				$(".show").click(function(){
					$("p").show();
					// $("p").show('fast');
					// $("p").show(2000);
				});
				$(".toggle").click(function(){
					// $("p").toggle();
					$("p").toggle(2000);
				});
			</script>
		</fieldset>

		<?php
			$url = "https://www.youtube.com/watch?v=eSAo854g_Dc&list=PLTmFffuXWQFkNYiGXr3Un6pqJZRi-eAtl&index=8";
		?>
		<div class="text-center">
			<a class="btn btn-outline-success" href="../index.php" arget="_blank">Back</a>
			<a class="btn btn-outline-primary" href="<?=$url?>" target="_blank">Source</a>
		</div>
	</body>
</html>
