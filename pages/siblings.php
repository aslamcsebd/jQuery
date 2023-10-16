<!doctype html>
<html lang="en">
	<?php include '../include/head.html'; ?>
	<style>
		.siblings * { display: block; border: 2px solid lightgrey; color: lightgrey; padding: 5px; margin: 15px; }
	</style>
	<body class="container-fluid my-4">
		<fieldset>
			<legend>siblings</legend>
			<section class="row">
				<div class="col-4">
					<ol> <b>descendants:</b> 
						<li>siblings()</li>
						<li>next()</li>
						<li>nextAll()</li>
						<li>nextUntil()</li>
						<li>prev()</li>
						<li>prevAll()</li>
						<li>prevUntil()</li>
					</ol>
					<b>Note: All include bellow js.</b>
				</div>
				<div class="descendants siblings col-8"> 
					<div>div (parent)
						<h6>h6</h6>
						<p>p</p>
						<span>span</span>
						<h2>h2</h2>
						<h3>h3</h3>
						<p>p</p>
						<h6>h6</h6>
					</div>
				</div>
			</section>
			<script>
				$(document).ready(function(){
					$("h2").siblings().css({border: "2px solid red"});
					// $("h2").siblings("p").css({border: "2px solid red"});

					// $("h2").next().css({border: "2px solid red"});
					// $("h2").nextAll().css({border: "2px solid red"});
					// $("h2").nextUntil("h6").css({border: "2px solid red"});

					// $("h2").prev().css({border: "2px solid red"});
					// $("h2").prevAll().css({border: "2px solid red"});
					// $("h2").prevUntil("h6").css({border: "2px solid red"});
				});
			</script>
		</fieldset>

		<?php
			$url = "https://www.w3schools.com/jquery/jquery_traversing_siblings.asp";
			$url2 = "https://www.youtube.com/watch?v=SVat1OScTKk&list=PLTmFffuXWQFkNYiGXr3Un6pqJZRi-eAtl&index=20";
		?>
		<a class="btn btn-outline-success" href="../index.php" arget="_blank">Back</a>
		<a class="btn btn-outline-primary" href="<?=$url?>" target="_blank">Source(Blog)</a>
		<a class="btn btn-outline-primary" href="<?=$url2?>" target="_blank">Source</a>
	</body>
</html>
