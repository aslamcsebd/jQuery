<!doctype html>
<html lang="en">
	<?php include '../include/head.html'; ?>

	<body class="container-fluid my-4">
		<fieldset>
			<legend>Selector</legend>

			<section>
				<p>This normal selector</p>
				<h4>Selector bold</h4>
				<p id="newId">Id selector</p>
				<p class="newClass">Class selector</p>
				<div class="parent">
					<p class="child">
					<h4>This is nested selector</h4>
					</p>
				</div>
			</section>

			<script>
				$("p").text("This normal selector2");
				$("h4").html("<b>Selector bold2</b>");
				$("#newId").html("<b>Id selector2</b>");
				$(".newClass").html("<b>Class selector2</b>");
				$(".parent .child h4").html("<b>This is nested selector2</b>");
			</script>
		</fieldset>

		<?php
			$url = "https://www.youtube.com/watch?v=fYHwZSBeRr4&list=PLTmFffuXWQFkNYiGXr3Un6pqJZRi-eAtl&index=4&ab_channel=learnwithfiz";			
		?>
		<a class="btn btn-outline-primary" href="<?=$url?>" target="_blank">Source</a>
	</body>
</html>
