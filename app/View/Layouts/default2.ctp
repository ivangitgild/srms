<?php
/**
 *
 * PHP 5
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright 2005-2012, Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright 2005-2012, Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       Cake.View.Layouts
 * @since         CakePHP(tm) v 0.10.0.1076
 * @license       MIT License (http://www.opensource.org/licenses/mit-license.php)
 */

$cakeDescription = __d('cake_dev', 'CakePHP: the rapid development php framework');
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<?php echo $this->Html->charset(); ?>
	<title>
		<?php echo $cakeDescription ?>:
		<?php echo $title_for_layout; ?>
	</title>
	<?php
		echo $this->Html->meta('icon');

		echo $this->Html->css('cake.style');

		echo $this->fetch('meta');
		echo $this->fetch('css');
		echo $this->fetch('script');
	?>
</head>
<body>
	<header>
		<section>
			
			<?php echo $this->Html->image('logo.png', array('alt' => 'CakePHP' ,'url'=> 'http://#'))?>
			<nav>
				<ul>
					<li class="active"><a href="#">MENU 1</a></li>
					<li><a href="#">MENU 2</a></li>
					<li><a href="#">MENU 3</a></li>
				</ul>
			</nav>
		</section>
	</header>
	<aside>
		<section>
			<p>Contact Us <span>000 000 0000</span> , <a href="#">info@ripe.com</a> or follow us at <a href="#">Twitter</a> or <a href="#">Facebook</a></p>
		</section>
	</aside>
	<section>
		<?php echo $content_for_layout ?>
		<div class="clear">
			&nbsp;
		</div>
		<footer>
			<h6>Copyright &copy; 2012 Ripe Concepts. All rights reserved.</h6>
		</footer>
	<section>
</body>
</html>
