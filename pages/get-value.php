<!doctype html>
<html lang="en">
	<?php include '../include/head.html'; ?>

	<body class="container-fluid my-4">
		<fieldset>
			<legend>get-value</legend>

			<section>
				<input type="text" id="input">
				<button class="btn btn-outline-primary">Submit</button>
			</section>

			<script>
				$("button").click(function(){
					var input = $("#input").val();
					alert(input);
				});
			</script>
		</fieldset>

		<?php
			$url = "https://www.youtube.com/watch?v=9Ica8d5y8Cg&list=PLTmFffuXWQFkNYiGXr3Un6pqJZRi-eAtl&index=16";
		?>
		<a class="btn btn-outline-success" href="../index.php" arget="_blank">Back</a>
		<a class="btn btn-outline-primary" href="<?=$url?>" target="_blank">Source</a>
	</body>
</html>
