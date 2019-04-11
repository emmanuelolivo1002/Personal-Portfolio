<?php
/*
Template Name: Front
*/
get_header(); ?>

<section id="front-hero">
	<div class="left-content">
		<span class="greeting">Hi!</span>
		<h1>My name is <span class="green-text">Emmanuel</span></h1>
		<p class="description">I'm a full stack Web Developer, iOS Developer, Wordpress Developer</p>
		<span class="scroll">Scroll Down</span>
	</div>
	<div class="right-content">
		<img src="https://picsum.photos/500/?random" alt="Emmanuel Olivo | Full Stack Web Developer">
	</div>
</section>

<section id="projects">
	<h2>Projects</h2>
</section>

<section id="experience">
	<h2>&lt;Experience&gt;</h2>
	<div class="timeline " >
		<div class="Year y2016"><span class="timeline__year">2016</span></div>
		<div class="Year y2017"><span class="timeline__year">2017</span></div>
		<div class="Year y2018"><span class="timeline__year">2018</span></div>
		<div class="Year y2019"><span class="timeline__year">2019</span></div>
		<div class="Divider timeline__divider"></div>
		<div class="TechCtrl">
			<div class="timeline__title">
				<h3>TechCtrl</h3>
			</div>
			<div class="timeline__content">
				<span class="timeline__content__position">Lead Developer & Computer Technician</span>
				<ul class="timeline__content__list">
					<li>Developed websites for multiple local clients. </li>
					<li>Utilized knowledge of the repair process in order to provide customer feedback.</li>
				</ul>
			</div>
		</div>
		<div class="ValleyTech">
			<div class="timeline__title">
				<h3>Valley Technical Academy</h3>
			</div>
			<div class="timeline__content">
				<span class="timeline__content__position">Website Developer and Teacher Assistant/Tutor</span>
				<ul class="timeline__content__list">
					<li>Assisted and tutored students enrolled in a Full Stack Web Development and User Experience Design course.</li>
					<li>Taught a series of workshops in Web Development and iOS development.</li>
				</ul>
			</div>
		</div>
		<div class="Cultura">
			<div class="timeline__title">
				<h3>Cultura Agency</h3>
			</div>
			<div class="timeline__content">
				<span class="timeline__content__position">Lead Developer</span>
				<ul class="timeline__content__list">
					<li>Developed websites for multiple local clients.</li>
				</ul>
			</div>
		</div>
		<div class="IIS">
			<div class="timeline__title">
				<h3>Imagine It Studios</h3>
			</div>
			<div class="timeline__content">
				<span class="timeline__content__position">Developer/Tech Department</span>
				<ul class="timeline__content__list">
					<li>Developed websites for multiple clients that ranged from blog sites to e-commerce platforms.</li>
					<li>Provided Search Engine Optimization and maintenance to approximately 20 clients’ websites.</li>
				</ul>
			</div>
		</div>
		<div class="Unknown">
			<div class="timeline__title">
				<h3>???</h3>
			</div>
		</div>
	</div>
</section>

<section id="about">
	<h2>About Me</h2>
</section>

<section id="contact">
	<h2>Contact Me</h2>
</section>


<?php get_footer();
