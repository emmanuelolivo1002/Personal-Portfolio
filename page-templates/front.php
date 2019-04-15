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

<section class="about">
	<h2>About Me</h2>
	<div class="about__content Intro">
		<h3>I'm a Full Stack Web Developer</h3>
		<p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Nihil ullam voluptatum natus illo delectus aliquam placeat vel, corrupti rem, eaque reiciendis aspernatur quibusdam reprehenderit ad sint vero, minus nemo doloremque?</p>
	</div>
	<div class="about__image IntroImg">
		<img src="https://picsum.photos/1000/?random" alt="Emmanuel Olivo | Full Stack Web Developer">
	</div>
	<div class="about__image SkillsImg">
		<img src="https://picsum.photos/1000/?random" alt="Emmanuel Olivo | Full Stack Web Developer">
	</div>
	<div class="about__content Skills">
		<h3>Skills</h3>
		<div class="Skills__bars">
			<div class="skill">
				<div class="skill__data">
					<span class="skill__data__name">html5</span>
					<span class="skill__data__value">90%</span>
				</div>
				<div class="progress">
					<div class="progress-meter" style="width: 90%">
					</div>
				</div>
			</div>
			<div class="skill">
				<div class="skill__data">
					<span class="skill__data__name">css3</span>
					<span class="skill__data__value">90%</span>
				</div>
				<div class="progress">
					<div class="progress-meter" style="width: 90%">
					</div>
				</div>
			</div>
			<div class="skill">
				<div class="skill__data">
					<span class="skill__data__name">js</span>
					<span class="skill__data__value">80%</span>
				</div>
				<div class="progress">
					<div class="progress-meter" style="width: 80%">
					</div>
				</div>
			</div>
			<div class="skill">
				<div class="skill__data">
					<span class="skill__data__name">php</span>
					<span class="skill__data__value">60%</span>
				</div>
				<div class="progress">
					<div class="progress-meter" style="width: 60%">
					</div>
				</div>
			</div>
			<div class="skill">
				<div class="skill__data">
					<span class="skill__data__name">swift</span>
					<span class="skill__data__value">50%</span>
				</div>
				<div class="progress">
					<div class="progress-meter" style="width: 50%">
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="about__content Facts">
		<h3>Fun Facts</h3>
		<ul>
			<li>100% Fluent in Spanish</li>
			<li>Can solve a Rubik’s cube in less than 30 seconds</li>
			<li>Play the Ukulele</li>
			<li>Like long walks on the beach and rainy days</li>
		</ul>
	</div>
	<div class="about__image FactsImg">
		<img src="https://picsum.photos/1000/?random" alt="Emmanuel Olivo | Full Stack Web Developer">
	</div>
</section>

<section id="contact">
	<h2>Contact Me</h2>
	<div class="grid-container">
		<div class="grid-x grid-margin-x grid-margin-y">
			<div class="cell small-12 large-6">
				<div class="contact-form-container">
					<?php echo do_shortcode('[wpforms id="8" title="false" description="false"]') ?>
				</div>
			</div>
			<div class="cell small-12 large-6 info-container">
				<p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Optio facilis eos ipsa quibusdam temporibus. Asperiores.</p>
				<p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Optio facilis eos ipsa quibusdam temporibus. Asperiores.</p>
				<h3>Follow Me!</h3>
				<div class="links-container">
					<ul>
						<li class="button-link">
							<a href="#"><i class="fab fa-github"></i></a>
						</li>
						<li class="button-link">
							<a href="#"><i class="fab fa-instagram"></i></a>
						</li>
						<li class="button-link">
							<a href="#"><i class="fab fa-twitter"></i></a>
						</li>
						<li class="button-link">
							<a href="#"><i class="fab fa-linkedin-in"></i></a>
						</li>
					</ul>
				</div>
			</div>			
		</div>
	</div>
</section>


<?php get_footer();
