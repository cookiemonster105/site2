<footer>
	<div class = "inner-footer">
	<h2>JOIN US:</h2>

		<?php dynamic_sidebar('sidebar-footer'); ?>
	</div>

	<div class = "inner-footer">
		<ul>
			<li> Copyright &copy; <?php echo date('Y') ;?></li>
			<li> All Rights Reserved</li>
			<li> <a href="http://validator.w3.org/check?uri=referer">Vaild HTML</a></li>
			<li> <a href="http://jigsaw.w3.org/css-validator/check/referer">Vaild CSS</a></li>
		</ul>

	</div>
    
</footer><!-- end footer -->

        <script>
		$(document).ready(function(){
			$(".nav-button").click(function () {
			$(".nav-button,.primary-nav").toggleClass("open");
			});    
		});
		</script>
  
</body>
</html>