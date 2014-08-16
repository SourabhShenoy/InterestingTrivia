<?php 
			echo "<article>
				<details open>
			<summary><h1 style='display:inline';>".$row['Title']." </h1></summary>
			<h2>".$row['Subtitle']."</h2>";
			if($row['ImageUrl']!=''){
			echo "
			<a href='".$row['ImageUrl']."' target='_blank'>
			<img class='photo' src='".$row['ImageUrl']."' width=150 height=160 style='float:left;'/>
			</a>";
			}
			if($row['ImageUrl2']!=''){
			echo "
			<a href='".$row['ImageUrl2']."' target='_blank'>
			<img class='photo' src='".$row['ImageUrl2']."' width=150 height=160 style='float:left'/>
			</a>";
			}
			echo "
			<p class='clear'/>
			<p>
				 ".$row['Content']."
			</p>
			</details>
			<br />
			</article>";
?>