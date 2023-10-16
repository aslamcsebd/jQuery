<!doctype html>
<html lang="en">
	<?php include '../include/head.html'; ?>

	<body class="container-fluid my-4">
		<fieldset>
			<legend>traversing</legend>

			<div class="row justify-content-center">
				<div class="col-md-6">
					The *div* element is the parent of *ul*, and an ancestor of everything inside of it <br>
					The *ul* element is the parent of both *li* elements, and a child of *div* <br>
					The left *li* element is the parent of *span*, child of *ul* and a descendant of *div* <br>
					The *span* element is a child of the left *li* and a descendant of *ul* and *div* <br>
					The two *li* elements are siblings (they share the same parent) <br>
					The right *li* element is the parent of *b*, child of *ul* and a descendant of *div* <br>
					The *b* element is a child of the right *li* and a descendant of *ul* and *div*	<br><br>
					
					An ancestor is a parent, grandparent, great-grandparent, and so on. <b>-->*div*</b> <br>
					A descendant is a child, grandchild, great-grandchild, and so on. <b>-->*ul*</b> <br>
					Siblings share the same parent. <b>-->*span*</b>					
				</div>
				<div class="col-md-6">
					<img class="" src="../assets/img/travtree.png" alt="Img not found" width="400">			
				</div>
			</section>
			<script>
				
			</script>
		</fieldset>

		<?php
			$url = "https://www.w3schools.com/jquery/jquery_traversing.asp";
		?>
		<a class="btn btn-outline-success" href="../index.php" arget="_blank">Back</a>
		<a class="btn btn-outline-primary" href="<?=$url?>" target="_blank">Source</a>
	</body>
</html>
