<?php
/**
 * The main index template.
 * 
 * @package tctheme
 * @since   1.0.0
 */
?>
<?php get_header(); ?>



 
<div class="row">
 
<div class="large-9 columns" role="content">
<article>
<h3><a href="#">Blog Post Title</a></h3>
<h6>Written by <a href="#">John Smith</a> on August 12, 2012.</h6>
<div class="row">
<div class="large-6 columns">
<p>Bacon ipsum dolor sit amet nulla ham qui sint exercitation eiusmod commodo, chuck duis velit. Aute in reprehenderit, dolore aliqua non est magna in labore pig pork biltong. Eiusmod swine spare ribs reprehenderit culpa.</p>
<p>Boudin aliqua adipisicing rump corned beef. Nulla corned beef sunt ball tip, qui bresaola enim jowl. Capicola short ribs minim salami nulla nostrud pastrami.</p>
</div>
<div class="large-6 columns">
<img src="http://placehold.it/400x240&text=[img]"/>
</div>
</div>
<p>Pork drumstick turkey fugiat. Tri-tip elit turducken pork chop in. Swine short ribs meatball irure bacon nulla pork belly cupidatat meatloaf cow. Nulla corned beef sunt ball tip, qui bresaola enim jowl. Capicola short ribs minim salami nulla nostrud pastrami. Nulla corned beef sunt ball tip, qui bresaola enim jowl. Capicola short ribs minim salami nulla nostrud pastrami.</p>
<p>Pork drumstick turkey fugiat. Tri-tip elit turducken pork chop in. Swine short ribs meatball irure bacon nulla pork belly cupidatat meatloaf cow. Nulla corned beef sunt ball tip, qui bresaola enim jowl. Capicola short ribs minim salami nulla nostrud pastrami.</p>
</article>
<hr/>
<article>
<h3><a href="#">Blog Post Title</a></h3>
<h6>Written by <a href="#">John Smith</a> on August 12, 2012.</h6>
<div class="row">
<div class="large-6 columns">
<p>Bacon ipsum dolor sit amet nulla ham qui sint exercitation eiusmod commodo, chuck duis velit. Aute in reprehenderit, dolore aliqua non est magna in labore pig pork biltong. Eiusmod swine spare ribs reprehenderit culpa.</p>
<p>Boudin aliqua adipisicing rump corned beef. Nulla corned beef sunt ball tip, qui bresaola enim jowl. Capicola short ribs minim salami nulla nostrud pastrami.</p>
</div>
<div class="large-6 columns">
<img src="http://placehold.it/400x240&text=[img]"/>
</div>
</div>
<p>Pork drumstick turkey fugiat. Tri-tip elit turducken pork chop in. Swine short ribs meatball irure bacon nulla pork belly cupidatat meatloaf cow. Nulla corned beef sunt ball tip, qui bresaola enim jowl. Capicola short ribs minim salami nulla nostrud pastrami. Nulla corned beef sunt ball tip, qui bresaola enim jowl. Capicola short ribs minim salami nulla nostrud pastrami.</p>
<p>Pork drumstick turkey fugiat. Tri-tip elit turducken pork chop in. Swine short ribs meatball irure bacon nulla pork belly cupidatat meatloaf cow. Nulla corned beef sunt ball tip, qui bresaola enim jowl. Capicola short ribs minim salami nulla nostrud pastrami.</p>
</article>
</div>
 
 
<aside class="large-3 columns">
<h5>Categories</h5>
<ul class="side-nav">
<li><a href="#">News</a></li>
<li><a href="#">Code</a></li>
<li><a href="#">Design</a></li>
<li><a href="#">Fun</a></li>
<li><a href="#">Weasels</a></li>
</ul>
<div class="panel">
<h5>Featured</h5>
<p>Pork drumstick turkey fugiat. Tri-tip elit turducken pork chop in. Swine short ribs meatball irure bacon nulla pork belly cupidatat meatloaf cow.</p>
<a href="#">Read More &rarr;</a>
</div>
</aside>
 
</div>
 
 
<footer class="row">
<div class="large-12 columns">
<hr/>
<div class="row">
<div class="large-6 columns">
<p>&copy; Copyright no one at all. Go to town.</p>
</div>
<div class="large-6 columns">
<ul class="inline-list right">
<li><a href="#">Link 1</a></li>
<li><a href="#">Link 2</a></li>
<li><a href="#">Link 3</a></li>
<li><a href="#">Link 4</a></li>
</ul>
</div>
</div>
</div>
</footer>
	
	<div id="content" class="site-content">
		<p>
			This is the site content. <a href="#">This is an anchor</a> so that we can tell the Theme Customizer is working.
		</p>
				
		<div id="sample-file">
			<?php if ( '' != get_theme_mod( 'tctheme_demo_file' ) ) { ?>
				<?php echo get_theme_mod( 'tctheme_demo_file' ); ?>		
			<?php } else { ?>
				<p>There is no demo file.</p>
			<?php } ?>
		</div><!-- #sample-file -->
		
	</div><!-- #content -->
	
<?php get_footer(); ?>