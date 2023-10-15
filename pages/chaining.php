<!doctype html>
<html lang="en">
	<?php include '../include/head.html'; ?>

	<body class="container-fluid my-4">
		<fieldset>
			<legend>chaining</legend>
			<style>
				p{
					width: 200px;
					height: 200px;
					background-color: salmon;
				}
			</style>
			<section>
				<p>This is slide up-down</p>
				<button class="btn btn-outline-primary">Click</button>
			</section>

			<script>
				$("button").click(function() {
					// $("p").slideUp(2000);					
					//$("p").slideDown(2000);		// css: display: none			
					
					// $("p").slideUp(2000).slideDown(2000);
					$("p").slideToggle(2000);					
				});
			</script>
		</fieldset>

		<?php
			$url = "https://www.youtube.com/watch?v=A0f_AKkuaOs&list=PLTmFffuXWQFkNYiGXr3Un6pqJZRi-eAtl&index=11";
		?>
		<a class="btn btn-outline-success" href="../index.php" arget="_blank">Back</a>
		<a class="btn btn-outline-primary" href="<?=$url?>" target="_blank">Source</a>
	</body>
</html>
