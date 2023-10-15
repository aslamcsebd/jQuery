<!doctype html>
<html lang="en">
	<?php include '../include/head.html'; ?>

	<body class="container-fluid my-4">
		<fieldset>
			<legend>call-back-function</legend>

			<section>
				<p>This is call-back-function</p>
				<button class="btn btn-outline-primary">Click</button>
			</section>

			<script>
				/* $(selector).hide(speed. callback);
					This means if click button action run , and if you need another action, you need call back function.
				
					$("button").click(function(){
						$("p").hide(); // It run 2nd
						alert("It run 1st");
					});
				*/
				$("button").click(function(){
					$("p").hide(2000, function(){
						alert("It run 2nd");
						// $("p").show(2000);
					});
				});
			</script>
		</fieldset>

		<?php
			$url = "https://www.youtube.com/watch?v=U28FXO6-vpc&list=PLTmFffuXWQFkNYiGXr3Un6pqJZRi-eAtl&index=9";
		?>
		<a class="btn btn-outline-success" href="../index.php" arget="_blank">Back</a>
		<a class="btn btn-outline-primary" href="<?=$url?>" target="_blank">Source</a>
	</body>
</html>
