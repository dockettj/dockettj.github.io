<?php $root = $_SERVER['DOCUMENT_ROOT']."/../../../"; ?>
<div id="menu">
	<div id="menu-container">
		<a href="<?php echo $root; ?>">
			<span id="logo">
				<span>JD</span><br/>Jesse Dockett
			</span>
		</a>
		<div class="menu-item first">
			<a href="<?php echo $root; ?>"><span>A<br/></span>About</a>
		</div>
		<!--<div class="menu-item">
			<a href="<?php echo $root . 'about/'; ?>">About</a>
		</div>-->
		<div class="menu-item">
			<a href="<?php echo $root . 'work/'; ?>"><span>W<br/></span>Work</a>
		</div>
		<!--<div class="menu-item">
			<a href="http://medium.com/@jdockett" target="_blank"><span>B<br/></span>Blog</a>
		</div>-->
		<div class="menu-item">
			<a href="<?php echo $root . 'contact/'; ?>"><span>C<br/></span>Contact</a>
		</div>
	</div>
</div>