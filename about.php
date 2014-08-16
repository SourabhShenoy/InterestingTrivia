<?php
require_once('includes/no_db_header.php');
?>
<div id="aboutBanner">
	<header id="header">
        <div id="contactButton"><a href="mailto:sourabhsshenoy@gmail.com" title="Contact us">Contact Us</a></div>
        <nav id="mainMenu">
            <ul id="navUl">
                <li><a href="home.php">Home</a></li>
                <li><a href="planetbizarre.php">Planet Bizarre</a></li>
                <li><a href="shockingstories.php">Shocking Stories</a></li>
                <li><a href="interestingfacts.php">Interesting Facts</a></li>
				<li><a href="about.php" class="current">About</a></li>
				<li><a href="#" disabled>More</a>
					<ul>
						<li><a href="temp.php">Page1</a></li>
						<li><a href="temp.php">Page2</a></li>
						<li><a href="temp.php">Page3</a></li>
					</ul>
				</li>
            </ul>
        </nav>
    </header>

	<section id="midBanner">
		<img src="images/home_banner.jpg"/>
		<?php
			require_once('includes/midbanner.php');
		?>
	</section>
	
	<section id="content">
		<section id="mainContent">
			<article class="accordion vertical">
				<section id="about">
					<h2><a href="#about">About me:</a></h2>
					<img class="photo" src="images/about/sourabh.jpg" width="150" height="200" style="float:left;"/>
					<p> Sourabh Shenoy is a 2nd year engineering student at NMAMIT, Nitte. A Mangalorean by birth, his interests include Trekking, Quizzing and lately, web designing. He is willing to work on small projects related to Web Development/Poster making at a nominal fee.
					
					You can check out his facebook page <a href="http://www.facebook.com/interestingtrivia" target="_blank">Interesting Trivia</a>.
					
					He can be contacted either through mail or through his <a href="http://www.facebook.com/sourabhsshenoy?refid=46" target="_blank">Facebook Page</a>.</p>
				</section>
				<section id="contact">
					<h2><a href="#contact">About the site:</a></h2>
					<p>This site is almost entirely designed using HTML and CSS and JavaScript at one or two places. I have created this site to help improve my
			  
					Web Development skills, General Knowledge and also to keep myself occupied during my free time in the improvement of this site. I aim to keep
					adding more functionalities to this site and render it fully functional by the end of my Engineering. Currently, I am also working on <a href="http://www.nidarshan.org/labyrinth" target="_blank">Labyrinth 6.0</a>, An Online Treasure Hunt Website as a part of Anandotsav '14.</p>
				</section>
			</article>
		</section>

		<aside id="sideBar">
			<article>
				<a href="images/about/labyrinth.jpg" target="_blank"><img class="photo" src="images/about/labyrinth.jpg" width="200" height="160" /></a>
				<h3>Labyrinth</h3>
			
				<p>Labyrinth is an Online Treasure Hunt website of which Sourabh Shenoy is a co-designer.
				The 6th version of the much awaited competition will be out soon. Stay tuned at <a href="http://www.nidarshan.org/labyrinth"target="_blank">Labyrinth</a> for more details.
				</p>
			</article>
		</aside>
		<p class="clear"/>
	</section>
</div>
<?php
require_once('includes/no_db_footer.php');
?>