<?php
/*
Template Name: Front
*/
get_header(); ?>

<section id="front-hero">
	<div class="grid-container">
		<div class="grid-x grid-margin-x grid-margin-y">
			<div class="cell small-12 large-6 small-order-2 large-order-1 left-content">
				<span class="greeting">Hi!</span>
				<h1>My name is <span class="green-text">Emmanuel</span></h1>
				<p class="description">I'm a full stack Web Developer, iOS Developer and Wordpress Developer</p>
				<a href="#projects" class="scroll" data-smooth-scroll>Scroll Down <span class="arrow"><i class="fas fa-long-arrow-alt-down"></i></span></a>
			</div>
			<div class="cell small-12 large-6 small-order-1 large-order-2 right-content">
				<img src="/wp-content/themes/EmmanuelOlivoPortfolio/dist/assets/images/hero.jpg" alt="Emmanuel Olivo | Full Stack Web Developer" class="front-hero-img grayscale-img" data-aos="hero-image-animation">
			</div>
		</div>
	</div>
</section>

<section id="projects">
	<h2>&lt;Projects&gt;</h2>
		<?php
			$args = array(
				'post_type'   => 'project',
				'post_status' => 'publish',
				'posts_per_page' => '-1'
			);
			
			$projects = new WP_Query( $args );
			if( $projects->have_posts() ) :
			?>
				<div class="projects-grid" data-aos="fade-up" >
					<?php
						while( $projects->have_posts() ) :
							$projects->the_post();
							$featured_img_url = get_the_post_thumbnail_url(get_the_ID(),'full'); 
							$number = get_field('number');
							?>
								<?php  
									echo '<a href="'.get_permalink().'" class="project project-'.$number.'" style="background: url('.esc_url($featured_img_url).' ); background-size: cover; background-position: center">
										<div class="project__content">
											<h3 class="project__name">'.get_the_title().'</h3>
										</div>	
									</a>';
								?>

							<?php
						endwhile;
						wp_reset_postdata();
					?>
				</div>
			<?php
			else :
				esc_html_e( 'Updating projects. Come back later!', 'text-domain' );
			endif;
		?>
</section>

<section id="experience">
	<h2>&lt;Experience&gt;</h2>
	<div class="timeline " >
		<div class="Year y2016"><span class="timeline__year">2016</span></div>
		<div class="Year y2017"><span class="timeline__year">2017</span></div>
		<div class="Year y2018"><span class="timeline__year">2018</span></div>
		<div class="Year y2019"><span class="timeline__year">2019</span></div>
		<div class="Divider timeline__divider"></div>
		<div class="TechCtrl" data-aos="fade-right" data-aos-anchor-placement="top-bottom" data-aos-duration="1000">
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
		<div class="ValleyTech" data-aos="fade-right" data-aos-anchor-placement="top-bottom" data-aos-duration="1000" data-aos-delay="100">
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
		<div class="Cultura" data-aos="fade-right" data-aos-anchor-placement="top-bottom" data-aos-duration="1000">
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
		<div class="IIS" data-aos="fade-right" data-aos-anchor-placement="top-bottom" data-aos-duration="1000" data-aos-delay="200">
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
		<div class="Unknown" data-aos="fade-right" data-aos-anchor-placement="top-bottom" data-aos-duration="1000" data-aos-delay="300">
			<div class="timeline__title">
				<h3>???</h3>
			</div>
		</div>
	</div>
	<div class="resume-button-container">
		<a href="/wp-content/uploads/2019/04/RESUME_FINAL.pdf" target="_blank" class="big-button" data-aos="fade-up"><i class="far fa-file-alt"></i> View Full Resume</a>
	</div>
</section>

<section id="about" class="about">
	<div class="Heading"><h2>&lt;About Me&gt;</h2></div>
	<div class="about__content Intro">
		<!-- <h3>I'm a Full Stack Web Developer</h3> -->
		<p>Hello! My name is Emmanuel Olivo a.k.a. “Emmanuel Con Dos Emes”. I’m a full stack web developer as well as an iOS developer.</p>
		<p>I’m originally from Veracruz, Mexico and have been living in South Texas since 2012. I got my Bachelor’s degree in Computer Engineering from The University of Texas Rio Grande Valley in 2016.</p>
		<p>Ever since I was little I developed (see what I did there?) a passion for video games and computers leading to me starting to make my first text adventure games when I learned Pascal in high school. And later when I learned Visual Basic, I started creating my very first apps for school projects.</p>
		<p>Years and tons of stack overflow searches later I’m now a full stack/iOS developer with the capabilities of creating multiple apps that I could only draw in my notebook when I was a kid.</p>
	</div>
	<div class="about__image grayscale-img IntroImg" data-aos="fade-up" data-aos-anchor-placement="top-bottom" data-aos-duration="1000" data-aos-delay="100"></div>
	<div class="about__image grayscale-img SkillsImg" data-aos="fade-up" data-aos-anchor-placement="top-bottom" data-aos-duration="1000" data-aos-delay="100"></div>
	<div class="about__content Skills">
		<h3>Skills</h3>
		<div class="Skills__bars">
			<div class="skill">
				<div class="skill__data">
					<span class="skill__data__name">html5</span>
					<span class="skill__data__value">90%</span>
				</div>
				<div class="progress">
					<div class="progress-meter" style="width: 90%" data-aos="progress-animation" data-aos-once="true" >
					</div>
				</div>
			</div>
			<div class="skill">
				<div class="skill__data">
					<span class="skill__data__name">css3</span>
					<span class="skill__data__value">90%</span>
				</div>
				<div class="progress">
					<div class="progress-meter" style="width: 90%" data-aos="progress-animation" data-aos-once="true">
					</div>
				</div>
			</div>
			<div class="skill">
				<div class="skill__data">
					<span class="skill__data__name">js</span>
					<span class="skill__data__value">80%</span>
				</div>
				<div class="progress">
					<div class="progress-meter" style="width: 80%" data-aos="progress-animation" data-aos-once="true">
					</div>
				</div>
			</div>
			<div class="skill">
				<div class="skill__data">
					<span class="skill__data__name">React</span>
					<span class="skill__data__value">70%</span>
				</div>
				<div class="progress">
					<div class="progress-meter" style="width: 70%" data-aos="progress-animation" data-aos-once="true">
					</div>
				</div>
			</div>
			<div class="skill">
				<div class="skill__data">
					<span class="skill__data__name">php</span>
					<span class="skill__data__value">60%</span>
				</div>
				<div class="progress">
					<div class="progress-meter" style="width: 60%" data-aos="progress-animation" data-aos-once="true">
					</div>
				</div>
			</div>
			<div class="skill">
				<div class="skill__data">
					<span class="skill__data__name">swift</span>
					<span class="skill__data__value">50%</span>
				</div>
				<div class="progress">
					<div class="progress-meter" style="width: 50%" data-aos="progress-animation" data-aos-once="true">
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="about__content Facts">
		<h3>Fun Facts</h3>
		<ul>
			<li>I'm 100% Fluent in Spanish</li>
			<li>I can solve a Rubik’s cube in less than 30 seconds</li>
			<li>Sometimes I play the Ukulele</li>
			<li>I'm a Nintendo Fanboy</li>
			<li>I like long walks on the beach and rainy days</li>
		</ul>
	</div>
	<div class="about__image grayscale-img FactsImg" data-aos="fade-up" data-aos-anchor-placement="top-bottom" data-aos-duration="1000" data-aos-delay="100"></div>
</section>

<section id="contact">
	<h2>&lt;Contact Me&gt;</h2>
	<div class="grid-container">
		<div class="grid-x grid-margin-x grid-margin-y">
			<div class="cell small-12 large-6">
				<div class="contact-form-container">
					<?php echo do_shortcode('[wpforms id="8" title="false" description="false"]') ?>
				</div>
			</div>
			<div class="cell small-12 large-6 info-container">
				<p>Whether you need somebody to develop an app or you want a brand new website for your business.</p>
				<p>Don't stay quiet! If you have an idea for a project? Let me know!</p>
				<h3>Follow Me!</h3>
				<div class="links-container">
					<ul>
						<li class="button-link">
							<a href="https://github.com/emmanuelolivo1002" target="_blank"><i class="fab fa-github"></i></a>
						</li>
						<li class="button-link">
							<a href="https://www.linkedin.com/in/emmanuel-olivo/" target="_blank"><i class="fab fa-linkedin-in"></i></a>
						</li>
						<li class="button-link">
							<a href="https://www.instagram.com/emmanuelcondosemes/" target="_blank"><i class="fab fa-instagram"></i></a>
						</li>
						<li class="button-link">
							<a href="https://twitter.com/EmmConDosEmes" target="_blank"><i class="fab fa-twitter"></i></a>
						</li>
					</ul>
				</div>
			</div>			
		</div>
	</div>
</section>


<?php get_footer();
