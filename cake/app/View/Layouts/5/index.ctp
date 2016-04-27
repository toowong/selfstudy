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
 
$cakeDescription = __d('cake_dev', '顧客管理システム');
?>
<!DOCTYPE html>
<html>
<head>
	<?php echo $this->Html->charset(); ?>
	<title>
		<?php echo $cakeDescription ?>:
		<?php echo $title_for_layout; ?>
	</title>
	<?php
		echo $this->Html->meta('icon');
		
		/** jQueryの読込 */
		echo $this->Html->script('jquery-1.7.2.min');
		
		/** BootStrapの読込 */
		echo $this->Html->script('bootstrap.min');
		echo $this->Html->script('bootstrap-dropdown');
		
		/** CSSの読込 */
		echo $this->Html->css('bootstrap.min');
		echo $this->Html->css('bootstrap-responsive.min');
		
		echo $this->fetch('meta');
		echo $this->fetch('css');
		echo $this->fetch('script');
	?>
	<script type="text/javascript">
		$(window).load(function() {
			$('.dropdown-toggle').dropdown();
		});
	</script>
</head>
<body>
	<div class="navbar navbar-fixed-top">
		<div class="navbar-inner">
			<div class="container">
				<a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</a>
				<?php 
					echo $this->Html->link(
						$cakeDescription,
						array('controller' => 'customers',
						'action' => 'index'),
						array('class' => 'brand')
					);
				?>
				<div class="nav-collapse">
					<ul class="nav">
						<li><?php echo $this->Html->link(__('顧客'), array('controller' => 'customers', 'action' => 'index')); ?></li>
					</ul>
					<?php echo $this->element('menu'); ?>
			</div>
		</div>
	</div>
	<div id="container" class="container">
		<div id="content">
			<div id="message">
				<?php echo $this->Session->flash(); ?>
			</div>
			<?php echo $this->fetch('content'); ?>
		</div>
		<div id="footer"></div>
	</div>
</body>
</html>
