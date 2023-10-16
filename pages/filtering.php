<!doctype html>
<html lang="en">
	<?php include '../include/head.html'; ?>
	<style>
		.target{ border: 1px solid black; padding: 5px; margin: 2px; }
	</style>
	<body class="container-fluid my-4">
		<fieldset>
			<legend>filtering</legend>
			<section class="row">
				<div class="col-4">
					<ol> <b>filtering:</b> 
						<li>first()</li>
						<li>last()</li>
						<li>eq()</li>
						<li>filter()</li>
						<li>not()</li>
					</ol>
					<b>Note: All include bellow js.</b>
				</div>
				<div class="col-8"> 
					<div class="target">
						<p>A paragraph in a div (index 0).</p>
						<p>Another paragraph in a div (index 1).</p>
					</div> <br>
					

					<div class="target">
						<p class="intro">A paragraph in a div (index 0).</p>
						<p>Another paragraph in a div (index 1).</p>
					</div> <br>

					<div class="target">
						<p>A paragraph in a div (index 0).</p>
						<p class="intro">Another paragraph in a div (index 1).</p>
					</div> <br>					
				</div>
			</section>
			<script>
				$(".target").first().css("background-color", "yellow");
				// $(".target").last().css("background-color", "yellow");
				// $("p").eq(1).css("background-color", "yellow");
				// $("p").filter(".intro").css("background-color", "yellow");
				// $("p").not(".intro").css("background-color", "yellow");
			</script>
		</fieldset>

		<?php
			$url = "https://www.w3schools.com/jquery/jquery_traversing_filtering.asp";
			$url2 = "https://www.youtube.com/watch?v=MthfZa94O2w&list=PLTmFffuXWQFkNYiGXr3Un6pqJZRi-eAtl&index=21";
		?>
		<a class="btn btn-outline-success" href="../index.php" arget="_blank">Back</a>
		<a class="btn btn-outline-primary" href="<?=$url?>" target="_blank">Source(Blog)</a>
		<a class="btn btn-outline-primary" href="<?=$url2?>" target="_blank">Source</a>
	</body>
</html>
