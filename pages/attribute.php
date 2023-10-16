<!doctype html>
<html lang="en">
	<?php include '../include/head.html'; ?>

	<body class="container-fluid my-4">
		<fieldset>
			<legend>attribute</legend>			
			<section>
				<button class="btn btn-outline-primary">Change link</button>				
				<a href="https://www.google.com" title="google">Google</a>
			</section>

			<script>
				$("button").click(function(){
					$("a").attr({
						href: 'https://www.youtube.com',
						title: 'youtube'
					});
				});

			</script>
		</fieldset>

		<?php
			$url = "https://www.youtube.com/watch?v=ZCmF0ypUsJo&list=PLTmFffuXWQFkNYiGXr3Un6pqJZRi-eAtl&index=15";
		?>
		<a class="btn btn-outline-success" href="../index.php" arget="_blank">Back</a>
		<a class="btn btn-outline-primary" href="<?=$url?>" target="_blank">Source</a>
	</body>
</html>
