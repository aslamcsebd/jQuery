<!doctype html>
<html lang="en">
	<?php include '../include/head.html'; ?>

	<body class="container-fluid my-4">
		<fieldset>
			<legend>Event</legend>
			<div class="text-center">
				<b>click(), dblclick(), mouseenter(), mouseleave(), mousedown(), mouseup(), hover(), focus(), blur(), on()</b>
			</div>

			<section>
				<p>
					<button class="click btn btn-primary px-4">Click()</button>
				</p>
				<p>
					<button class="dblclick btn btn-primary px-4">Double click()</button>
				</p>
				<p>
					<button class="mouseEL btn btn-outline-primary px-4">Mouse(enter=red, leave=green)</button>
				</p>
				<p>
					<button class="mouseDU btn btn-primary px-4">Mouse(down=green, up=red)</button>
				</p>
				<p>
					<button class="hover">Mouse(hover=yellow)</button>
				</p>
				<p>
					<input class="focus" type="text" placeholder="click in+out(yellow+blue) focus()">
				</p>
				<p class="on border">Click & color change is on()</p>
			</section>

			<script>
				// document.querySelector("button").addEventListener('click', function(){ // old
				$(".click").click(function(){
					alert('Click working');
				});

				$(".dblclick").dblclick(function(){
					alert('Double click working');
				});

				$(".mouseEL").mouseenter(function(){
					$(".mouseEL").css("background", 'red');
				});
				$(".mouseEL").mouseleave(function(){
					$(".mouseEL").css("background", 'green');
				});

				$(".mouseDU").mousedown(function(){
					$(".mouseDU").css("background", 'green');
				});
				$(".mouseDU").mouseup(function(){
					$(".mouseDU").css("background", 'red');
				});

				$(".hover").hover(function(){
					$(".hover").css("background", 'yellow');
				});

				$(".focus").focus(function(){
					$(".focus").css("background", 'yellow');
				});
				$(".focus").blur(function(){
					$(".focus").css("background", 'blue');
				});		

				$(".on").on('click', function(){
					$(".on").css("background", 'blue');
				});				
			</script>
		</fieldset>

		<?php
			$url = "https://www.youtube.com/watch?v=rFMzT7Iccqw&list=PLTmFffuXWQFkNYiGXr3Un6pqJZRi-eAtl&index=6";
		?>
		<a class="btn btn-outline-primary" href="<?=$url?>" target="_blank">Source</a>
	</body>
</html>
