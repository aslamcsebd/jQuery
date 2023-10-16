<!doctype html>
<html lang="en">
	<?php include '../include/head.html'; ?>
	<style>
		.descendants * { display: block; border: 2px solid lightgrey; color: lightgrey; padding: 5px; margin: 15px; }
	</style>
	<body class="container-fluid my-4">
		<fieldset>
			<legend>descendants</legend>
			<section class="row">
				<div class="col-12">
					<ol> <b>descendants:</b> 
						<li>children() ->red</li>
						<li>find() ->blue</li>
					</ol>
				</div>
				<div class="descendants children col-6">div (current element) 
					<p class="first">p (child)
						<span>span (grandchild)</span>   
					</p>
					<p class="second">p (child)
						<span>span (grandchild)</span>
					</p>
				</div>
				<div class="descendants find col-6">div (current element)
					<p>p (child)
						<span>span (grandchild)</span>   
					</p>
					<p>p (child)
						<span>span (grandchild)</span>
					</p> 
				</div>
			</section>
			<script>
				$(document).ready(function(){
					$(".children").children().css({border: "2px solid red"});
					// $(".children").children("p.first").css({border: "2px solid blue"});

					$(".find").find("").css({"border": "2px solid blue"});
					// $(".find").find("*").css({"border": "2px solid blue"});
				});
			</script>
		</fieldset>

		<?php
			$url = "https://www.w3schools.com/jquery/jquery_traversing_descendants.asp";
			$url2 = "https://www.youtube.com/watch?v=wrK1APyAZRM&list=PLTmFffuXWQFkNYiGXr3Un6pqJZRi-eAtl&index=19";
		?>
		<a class="btn btn-outline-success" href="../index.php" arget="_blank">Back</a>
		<a class="btn btn-outline-primary" href="<?=$url?>" target="_blank">Source(Blog)</a>
		<a class="btn btn-outline-primary" href="<?=$url2?>" target="_blank">Source</a>
	</body>
</html>
