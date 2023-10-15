<!doctype html>
<html lang="en">
	<?php include '../include/head.html'; ?>

	<body class="container-fluid my-4">
		<fieldset>
			<legend>Add css</legend>

			<section>
				<h2>Single CSS, Multiple line</h2>
				<h3>Multiple CSS, single line</h3>
				<p>External CSS add Multiple line</p>
				<span>External CSS add single line</span>
			</section>

			<script>
				$("h2").css("color", "gray");
				$("h2").css("font-style", "italic");

				$("h3").css({
					"color": "blue",
					"font-style": "italic"
				});
				$("p").addClass("addCSS");
				$("p").addClass("addCSS2");

				$("span").addClass("addCSS addCSS2");
			</script>
		</fieldset>

		<?php
			$url = "https://www.youtube.com/watch?v=YR6u1Mnw3RU&list=PLTmFffuXWQFkNYiGXr3Un6pqJZRi-eAtl&index=6&ab_channel=learnwithfiz";
		?>
		<a class="btn btn-outline-success" href="../index.php" arget="_blank">Back</a>
		<a class="btn btn-outline-primary" href="<?=$url?>" target="_blank">Source</a>
	</body>
</html>
