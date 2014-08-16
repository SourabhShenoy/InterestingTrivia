	<div id="tfheader">
		<form name="search" onsubmit="return validateForm()" id="tfnewsearch" method="get" action="http://www.google.com"  target="_blank">
			<div id="search2">
				<input type="text" id="tfq" class="searchtbox" name="q" size=21 maxlength=120 placeholder="Search on Google" autocomplete='off' />
				<input type="image" src="images/search.png" value="submit" class="searchbtn" id="searchbtn1"/>
			</div>
			<div id="search1">
				<img src="images/error.png" class="errimg" id="ab"/>
				<label id="label1">Search field can't be blank!</label>
			</div>
		</form>
	</div>