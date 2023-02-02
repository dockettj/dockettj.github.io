<?php $root = $_SERVER['DOCUMENT_ROOT']."/../../../"; ?>
<div id="menu">
	<div id="menu-container">
		<div class="hamburger_menu" onclick="menuToggler(this)">
			<ul>
				<li class="menu_line">
				</li>
				<li class="menu_line">
				</li>
				<li class="menu_line">
				</li>
			</ul>
			<div class="menu_name">
			Menu
			</div>
		</div>
		<a href="<?php echo $root; ?>">
			<span id="logo">
			</span>
		</a>	
	</div>
</div>
<div id="menu_drawer" class="inactive">
	<ul>
		<li>
			<a href="<?php echo $root; ?>"><i class="fa fa-home"></i>  Home</a>
		</li>
		<!--<li>
			<a href="<?php echo $root . 'about/'; ?>">About</a>
		</li>-->
		<li>
			<a href="<?php echo $root . 'work/'; ?>"><i class="fa fa-paint-brush"></i> Work</a>
		</li>
		<!--<li>
			<a href="http://medium.com/@jdockett" target="_blank"><i class="fa fa-medium"></i> Blog</a>
		</li>-->
		<li>
			<a href="<?php echo $root . 'contact/'; ?>"><i class="fa fa-envelope"></i> Contact</a>
		</li>
	</ul>
</div>