</div>	
<footer class="footer">
		<p>&nbsp</p>
		<?php
			wp_nav_menu( array('menu'=> 'footer1','menu_class' => 'list-inline hidden-print','before'=>'[','after'=>']'));
		?>
		<div class="copyright">Copyright © 2016 <?php bloginfo("name"); ?></div>
</footer>
<?php wp_footer(); ?>
</body>
		<script type="text/javascript" src="<?php bloginfo('template_directory') ?>/js/jquery-3.1.1.min.js"></script>
		<script type="text/javascript" src="<?php bloginfo('template_directory') ?>/bootstrap/js/bootstrap.min.js"></script>
		<script type="text/javascript" src="<?php bloginfo('template_directory') ?>/js/style.js"></script>
</html>