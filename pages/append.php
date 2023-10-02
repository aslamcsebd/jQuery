<!doctype html>
<html lang="en">
	<?php include '../include/head.html'; ?>

	<body class="container-fluid my-4">
		<fieldset>
			<legend>Append, Prepend, Before, After</legend>

			<section>
				<span>Append</span>
				<p class="append">2+4 = </p>

				<span>Prepend</span>
				<p class="prepend"> = 8</p>

				<span>Before</span>
				<p class="before">8+2 = 10</p>

				<span>After</span>
				<p class="after">4+2 = 6</p>
			</section>

			<script>
				$(".append").append("<b>6</b>");
				$(".prepend").prepend("<b>6+2</b>");
	
				var value = $("<p></p>").html("<b>6+2=8</b>");
				$(".before").before(value);
	
				var value2 = $("<p></p>").html("<b>6+2=8</b>");
				$(".after").after(value2);
			</script>
		</fieldset>

		<?php
			$url = "https://www.youtube.com/watch?v=XjRQ5HRffN8&list=PLTmFffuXWQFkNYiGXr3Un6pqJZRi-eAtl&index=5&ab_channel=learnwithfiz";
		?>
		<a class="btn btn-outline-primary" href="<?=$url?>" target="_blank">Source</a>
	</body>
</html>
