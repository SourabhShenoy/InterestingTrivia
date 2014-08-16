<?php
require_once('includes/header.php');
?>
<div id="planetBanner">
	<header id="header">
        <div id="contactButton"><a href="mailto:sourabhsshenoy@gmail.com" title="Contact us">Contact Us</a></div>
        <nav id="mainMenu">
            <ul id="navUl">
                <li><a href="home.php">Home</a></li>
                <li><a href="planetbizarre.php" class="current">Planet Bizarre</a></li>
                <li><a href="shockingstories.php">Shocking Stories</a></li>
                <li><a href="interestingfacts.php">Interesting Facts</a></li>
				<li><a href="about.php">About</a></li>
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
			<?php
		$result=mysql_query("Select * from triviatable ORDER BY PostNo DESC",$db);
		if(!$result)
		{
			die("Database Query failed: " . mysql_error());
		}
	?>
	<?php 
	while($row= mysql_fetch_array($result))
	 {
			if($row['PageName']=="Planet_Bizarre" && $row['Visibility']==1)
			{
				require('includes/Retrieve_from_db.php');			
			}
	}
	?>
		</section>
		
		
		<aside id="sideBar">
			<article>
				<h3> Sidebar Content</h3>
				<p> Content Here</p>
			</article>
		</aside>
		<p class="clear"/>
	</section>
</div>
<?php
require_once('includes/footer.php');
?>