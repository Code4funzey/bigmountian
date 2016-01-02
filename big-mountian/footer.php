
<!-- Footer start -->



<div class="footer-widgets">
	<div class="row">
		<div class="large-4 medium-4 columns footer-widget-container">
			<h6 class="title">Recent Posts</h6>
			<ul>
				<li><a href="#">Have you ever tried mountians?</a></li>
				<li><a href="#">Where the wild frogs are.</a></li>
				<li><a href="#">The only lake left in the world.</a></li>
				<li><a href="#">Cat tries skydiving, saves a dogs life.</a></li>
				<li><a href="#">Hikers lost for years, eat pizza.</a></li>
			</ul>
		</div>
		<div class="large-4 medium-4 columns footer-widget-container">
			<h6 class="title">Meta Links</h6>
			<ul>
				<li><a href="#">Log in</a></li>
				<li><a href="#">Entries RSS</a></li>
				<li><a href="#">Comments RSS</a></li>
				<li><a href="#">Wordpress.org</a></li>
			</ul>
		</div>
		<div class="large-4 medium-4 columns footer-widget-container">
			<h6 class="title">Text Widget</h6>
			<p><span>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quae dolorem velit, ipsum, perferendis aperiam iusto explicabo voluptas cum labore nihil earum quos aut laborum eveniet doloribus nisi totam atque blanditiis.</span><span>Quod rem placeat distinctio amet obcaecati, vel iusto nobis porro pariatur quaerat perspiciatis tempora beatae. Dolore quaerat deleniti praesentium, nesciunt quod voluptatem voluptatum sed accusamus quis, similique, fugit fugiat ipsum.</span></p>
		</div>
	</div>
</div>
<footer>
	<div class="row">
		<div class="large-6 columns real-footer-widgets-container">
			<p>Copyright &copy; <?php echo date("Y"); ?>, All Rights Reserved, Big Mountian Theme Demo</p>
			<p>Big Mountian Theme from <a href="#">AlexHunt.org</a> </p>
		</div>
		<div class="large-6 columns real-footer-widgets-container"></div>
	</div>
</footer>

   <script src="js/vendor/jquery.js"></script>
    <script src="js/foundation.min.js"></script>
    <script>
      $(document).foundation();
    </script>
	<script src="js/parallax.min.js"></script>
	<!-- paralax script -->
	<script>
		$('.parallax-window').parallax({imageSrc: 'img/hero-bg.jpg'});
	</script>
	<!-- Navigation -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
	<script>
	  $(document).ready(function(){
	    $(".menu-trigger").click(function(){
	      $(".nav-menu").slideToggle(400, function(){
	        $(this).toggleClass("nav-expanded").css('display', '')
	      });
	    });
	  });
	</script>
  </body>
</html>
<!-- Footer end -->
