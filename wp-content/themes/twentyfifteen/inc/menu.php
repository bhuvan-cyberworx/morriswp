
<div class="main-menu" id="main-menu">
	<!-- <div class="flamingo">
		<img src="assets/images/logo1.png" alt="">
	</div> -->
	<ul class="menu-list list-unstyled">
		<li class="menu-item list-unstyled-item">
			<a href="">Investment Banking</a>
			<span class="sub">Launchpad for tech startups</span>
		</li>
		<li class="menu-item list-unstyled-item">
			<a href="">Media & Entertainment</a>
			<span class="sub">Launchpad for tech startups</span>
		</li>
		<li class="menu-item list-unstyled-item">
			<a href="">Commodity Trading</a>
			<span class="sub">Launchpad for tech startups</span>
		</li>
		<li class="menu-item list-unstyled-item">
			<a href="">About Us</a>
			<span class="sub">Launchpad for tech startups</span>
		</li>
		<!-- <li class="menu-item list-unstyled-item">
			<a href="">Blog & Reports</a>
			<span class="sub">Launchpad for tech startups</span>
		</li>
		<li class="menu-item list-unstyled-item">
			<a href="">Press Release</a>
			<span class="sub">Launchpad for tech startups</span>
		</li>
		<li class="menu-item list-unstyled-item">
			<a href="">Find Us</a>
			<span class="sub">Launchpad for tech startups</span>
		</li> -->

		<?php 

		$menuLocations = get_nav_menu_locations(); 
		$menuID = $menuLocations['header-menu']; // Get the *primary* menu ID
		$primaryNav = wp_get_nav_menu_items($menuID); // Get the array of wp objects, the nav items for our queried location.

		foreach ( $primaryNav as $navItem ) {
		    echo '<li class="menu-item list-unstyled-item"><a href="'.$navItem->url.'" title="'.$navItem->title.'">'.$navItem->title.'</a>
				<span class="sub"> '.$navItem->description.'</span>
		    </li>';
		}

		?>
	</ul>
</div>


<div id="nav-icon3" class="nav-icon3">
  <span></span>
  <span></span>
  <span></span>
  <span></span>
</div>