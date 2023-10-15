<!doctype html>
<html lang="en">
	<?php include '../include/head.html'; ?>

	<body class="container-fluid my-4">
		<fieldset>
			<legend>dimensions</legend>
			<style>
				div{
					border: 10px solid green;
				}
				p{
					margin: 15px;
					padding: 10px;
					width:250px;
					height:40px;
					background-color: salmon;
				}
			</style>
			<section>
				<div>
					<p>All dimention add hear</p>
				</div>
				<button class="size btn btn-success mt-1">Size</button>
				<br>
				<span class="info"></span>
			</section>
			<img class="float-end" src="../assets/img/dimensions.png" alt="Img not found" width="400">

			<script>
				var w = $("div").width();
				var h = $("div").height();
				var iW = $("div").innerWidth();
				var iH = $("div").innerHeight();
				var oW = $("div").outerWidth();
				var oH = $("div").outerHeight();

				var final = ' width:'+ w + 
							'; height:'+ h +
							'; innerWidth:'+ iW +
							'; innerHeight:'+ iH +
							'; outerWidth:'+ oW +
							'; outerHeight:'+ oH;

				$(".size").click(function(){
					// $("div").width(200).height(200);
					// alert(final);
					$(".info").append(final);
				});
			</script>
		</fieldset>

		<?php
			$url = "https://www.youtube.com/watch?v=gEDnwrTMzx4&list=PLTmFffuXWQFkNYiGXr3Un6pqJZRi-eAtl&index=10";
		?>
		<a class="btn btn-outline-success" href="../index.php" arget="_blank">Back</a>
		<a class="btn btn-outline-primary" href="<?=$url?>" target="_blank">Source</a>
	</body>
</html>
