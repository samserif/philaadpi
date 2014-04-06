<?php
/*
Template Name: Home Page
*/
?>

<?php get_header(); ?>

			<div id="content">

				<div id="inner-content" class="wrap clearfix">

					<div id="main" class="eightcol first clearfix" role="main">
						<section id="main-text">
							<h1>Welcome to GPAA</h1>
							<p>The Greater Philadelphia Alumnae Association is home to Pi sisters from Berks, Chester, Delaware, Lancaster, Montgomery and Philadelphia Counties. Pi sisters from all over the country have come home to the GPAA!</p>
						</section>
						<div id="inner-main">
							<img class="hero-pic" src="<?php echo get_template_directory_uri(); ?>/library/img/fotolia_60006915.jpg" alt="philly skyline">
							<div  id="joinbutton" class="shadow">
								<h2>Become a Member</h2>
							</div>
						</div>
						<section class="perksection">	
							<div class="perk1">
								<img src="<?php echo get_template_directory_uri(); ?>/library/img/icon_cal.png" alt="icon">
								<h2>We Live For Each Other</h2>
								<p>We live for each other. All Day everyday.</p>
							</div>
							<div class="perk2">
								<img src="<?php echo get_template_directory_uri(); ?>/library/img/icon_cal.png" alt="icon">
								<h2>Ladies of the Evening</h2>
								<p>Sisters grow in numbers everyday. Join us! </p>
							</div>
							<div class="perk3">
								<img src="<?php echo get_template_directory_uri(); ?>/library/img/icon_cal.png" alt="icon">
								<h2>Boom BOom I wanna go Adpi</h2>
								<p>Monthly dinners, weekend outings like Bingo in teh city.</p>
							</div>
						</section>
						<hr>
						<h2 class="events">Upcoming Events</h2>
						<article class="post">
							<div class="date">
								<p><strong>Mar</br>15</strong></p>
							</div>
							<h3><strong>Monthly Dinner Club</strong></h3>
							<p class="post-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Doloribus, saepe, eveniet id repellat voluptate enim deserunt excepturi alias similique asperiores repellendus cumque accusamus veritatis ab reprehenderit nihil dicta minima sed. this is the next event coming up in Philly</p>
							<span class="more"><a href="">Read More</a></span>
						</article>
						<article class="post">
							<div class="date">
								<p><strong>Jun</br>15</strong></p>
							</div>
							<h3><strong>Summer Formal</strong></h3>
							<p class="post-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corporis, laborum, dolor minus a maiores magni ipsam modi accusantium ea quae veritatis culpa asperiores illum enim voluptates aliquid dignissimos? Ea, fugiat. this is the next event coming up in Philly</p>
							<span class="more"><a href="">Read More</a></span>
						</article>
						<article class="post">
							<div class="date">
								<p><strong>Aug</br>15</strong></p>
							</div>
							<h3><strong>Bowling Night at North Bowl</strong></h3>
							<p class="post-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Veniam, id, suscipit, sunt sint sed laboriosam quas at consectetur harum nostrum doloremque vel molestias soluta provident dolore eius eveniet consequuntur quibusdam. this is the next event coming up in Philly</p>
							<span class="more"><a href="">Read More</a></span>
						</article>
						<?php get_sidebar(); ?>	
					</div>

				</div>

			</div>

<?php get_footer(); ?>
