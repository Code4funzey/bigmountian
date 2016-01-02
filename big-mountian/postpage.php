<?php require_once('header.php'); ?>
    
<main>
	<div class="row">
		<div class="large-8 medium-8 columns whole-blog-post"> <!-- contains entire blog roll -->
			<div class="large-12 columns blogroll-container"><!-- blogroll-container large-12 -->
				<div class="blogroll-container-featured-image"> <!-- blogroll-container-featured-image -->
					<img src="img/featured3.jpg" alt="featured image">
				</div><!-- blogroll-container-featured-image -->
				<div class="large-12 columns blogroll-post-textarea"><!-- blogroll-port-textarea -->
					<div class="post-date"><!-- post-date -->
						<p><i class="fa fa-comment"></i> <a href="#">1 Comment</a></p>
						<p><i class="fa fa-clock-o"></i> Updated on October 13th, 2015</p>
					</div><!-- post-date -->
					<h2 class="headline"><a href="#">This is a sample post page.</a></h2>
					<div class="post-author"> <!-- post-author -->
						<p>by <a href="#">Alex Hunt</a></p>					
					</div> <!-- post-author -->
					<p><span>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rerum nobis animi doloremque cumque cum ipsa dicta eaque placeat, tempore repellendus eum dolor, suscipit obcaecati tempora ullam nostrum dolorum laudantium delectus.</span>
					<span>Laudantium sint magnam qui, quasi assumenda aspernatur quia, praesentium soluta ea incidunt corrupti, similique minus. Dolorem, fuga, voluptate. Eveniet inventore, culpa possimus nam neque excepturi harum enim commodi est obcaecati.</span>
					<span>Debitis neque molestias labore optio alias veritatis aliquam architecto aut cumque, ea quidem nulla tempore expedita sed voluptatibus iure, quaerat, ipsa cum aliquid ipsum modi molestiae sapiente. Voluptas odio, eos.</span>
					<span>Doloribus, aperiam vitae odio ipsam necessitatibus saepe. Praesentium, distinctio, ipsa. Provident libero at eius commodi, blanditiis dignissimos sed reiciendis possimus eum labore eaque voluptatem, ut facilis modi asperiores repellendus explicabo!</span>
					<span>Sed itaque veritatis asperiores eos, temporibus magnam accusamus praesentium id incidunt quaerat iste repudiandae quas dicta iure delectus aperiam dolorem possimus officiis numquam consequatur rem illo. Nobis consectetur, atque. Officiis!</span>
					<span>Deserunt aperiam a porro impedit aliquam similique, error architecto illum natus, earum vero mollitia! Nulla qui modi quae dolorum impedit itaque, minima, dolor, assumenda illo aliquid libero distinctio, voluptatem quasi!</span></p>
					<div class="post-meta">
						<p><i class="fa fa-bars"></i> Catagory: <a href="#">Blog&nbsp;</a> <i class="fa fa-tags"></i> Tags: <a href="#">Mountian</a></p>
					</div>
					<div class="post-navigation">
						<div class="previous-post">
							← <a href="#">Big Mountian Makes a Million Bucks!</a>
						</div>
						<div class="next-post">
							
						</div>
					</div>
				</div><!-- blogroll-port-textarea -->
			</div> <!--blogroll-container large-12 -->
			<div class="large-12 columns comments"><!-- comments -->
				<h2 class="headline">Leave a comment</h2>
				<p>Your email address will not be published. Required fields are marked*</p>
				<form action="" method="post">
					<p>
						<label for="name">Name*</label>
						<input type="text" value="" name="name">
					</p>
					<p>
						<label for="email">Email*</label>
						<input type="email" value="" name="email">
					</p>
					<p>
						<label for="website">Website</label>
						<input type="text" value="" name="website">
					</p>
					<p>
						<label for="comment">Comment*</label>
						<textarea value="" name="comment" rows="8"></textarea><br>
						<input type="submit" value="Post Comment" name="submit"><br>
					</p>
					<p>
						<input type="checkbox" value="subscribe" name="subscribe_commnets">
						<label for="subscribe_comments">Notify me of follow-up comments by email.</label>
						<br>
						<input type="checkbox" value="subscribe" name="subscribe_blog">
						<label for="subscribe_blog">Notify me of new posts by email.</label>
					</p>

				</form>
			</div><!-- comments -->
		</div> <!-- contains entire blog roll -->


<?php require_once('sidebar.php'); ?>
	</div> <!-- .row -->
</main>
  
<?php require_once('footer.php'); ?>
