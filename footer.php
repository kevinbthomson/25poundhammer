	<footer class="do-not-print">
		<p>&copy;<?php echo date("Y"); echo " "; bloginfo('name'); ?><br/>
		<a href="#" id="top">Back to Top</a></p>

		<?php wp_nav_menu(array('menu' => 'Main Nav Menu')); ?>

	</footer>

</div><!-- /#wrapper -->

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>

	<?php wp_footer(); ?>
	
	<!-- Don't forget analytics -->
	
</body>

</html>
