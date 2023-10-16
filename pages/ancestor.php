<!doctype html>
<html lang="en">
	<?php include '../include/head.html'; ?>
	<style>
		.ancestors * { display: block; border: 2px solid lightgrey; color: lightgrey; padding: 5px; margin: 15px; }
	</style>
	<body class="container-fluid my-4">
		<fieldset>
			<legend>ancestor</legend>
			<section class="row">
				<div class="col-12">
					<ol> <b>Ancestors:</b> 
						<li>parent() ->red</li>
						<li>parents() ->blue</li>
						<li>parentsUntil() ->yellow</li>
					</ol>
				</div>
				<div class="ancestors col-4">
					<div style="width:300px;">div (great-grandparent)
						<ul>ul (grandparent)  
							<li>li (direct parent)
								<span class="parent">span</span>
							</li>
						</ul>   
					</div>
				</div>
				<div class="ancestors col-4">
					<div style="width:300px;">div (great-grandparent)
						<ul>ul (grandparent)  
							<li>li (direct parent)
								<span class="parents">span</span>
							</li>
						</ul>   
					</div>
				</div>
				<div class="ancestors col-4">
					<div style="width:300px;">div (great-grandparent)
						<ul>ul (grandparent)  
							<li>li (direct parent)
								<span class="parentsUntil">span</span>
							</li>
						</ul>   
					</div>
				</div>
			</section>
			<script>
				$(document).ready(function(){
					$(".parent").parent().css({"border": "2px solid red"});
					// $(".parents").parents().css({"border": "2px solid blue"});
					$(".parents").parents("ul").css({"border": "2px solid blue"});
					$(".parentsUntil").parentsUntil("div").css({"border": "2px solid yellow"});
				});
			</script>
		</fieldset>

		<?php
			$url = "https://www.w3schools.com/jquery/jquery_traversing_ancestors.asp";
			$url2 = "https://www.youtube.com/watch?v=t-Oi8epXEyQ&list=PLTmFffuXWQFkNYiGXr3Un6pqJZRi-eAtl&index=18";
		?>
		<a class="btn btn-outline-success" href="../index.php" arget="_blank">Back</a>
		<a class="btn btn-outline-primary" href="<?=$url?>" target="_blank">Source(Blog)</a>
		<a class="btn btn-outline-primary" href="<?=$url2?>" target="_blank">Source</a>
	</body>
</html>
