<div class="navbar navbar-fixed-top">
  <div class="navbar-inner">
    <div class="container">
      <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </a>
      <a class="brand" href="#">Project name</a>
      <div class="nav-collapse">
        <ul class="nav">
          <li class="active"><a href="#">Home</a></li>
          <li><a href="#about">About</a></li>
          <li><a href="#contact">Contact</a></li>
        </ul>
      </div><!--/.nav-collapse -->
    </div>
  </div>
</div>

<div class="container">

  <!-- Main hero unit for a primary marketing message or call to action -->
  <div class="hero-unit">
    <h1>Hello, world!</h1>
	<p><?php
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
	 * @package       Cake.View.Pages
	 * @since         CakePHP(tm) v 0.10.0.1076
	 * @license       MIT License (http://www.opensource.org/licenses/mit-license.php)
	 */
	if (Configure::read('debug') == 0):
		throw new NotFoundException();
	endif;
	App::uses('Debugger', 'Utility');
	?>

	<?php
		if (version_compare(PHP_VERSION, '5.2.8', '>=')):
			echo '<span class="btn">';
				echo __d('cake_dev', 'Your version of PHP is 5.2.8 or higher.');
			echo '</span>';
		else:
			echo '<span class="btn btn-danger">';
				echo __d('cake_dev', 'Your version of PHP is too low. You need PHP 5.2.8 or higher to use CakePHP.');
			echo '</span>';
		endif;
	?>
	</p>
	<p>
		<?php
			if (is_writable(TMP)):
				echo '<span class="btn">';
					echo __d('cake_dev', 'Your tmp directory is writable.');
				echo '</span>';
			else:
				echo '<span class="btn btn-danger">';
					echo __d('cake_dev', 'Your tmp directory is NOT writable.');
				echo '</span>';
			endif;
		?>
	</p>
	<p>
		<?php
			$settings = Cache::settings();
			if (!empty($settings)):
				echo '<span class="btn">';
					echo __d('cake_dev', 'The %s is being used for core caching. To change the config edit APP/Config/core.php ', '<em>'. $settings['engine'] . 'Engine</em>');
				echo '</span>';
			else:
				echo '<span class="btn btn-danger">';
					echo __d('cake_dev', 'Your cache is NOT working. Please check the settings in APP/Config/core.php');
				echo '</span>';
			endif;
		?>
	</p>
	<p>
		<?php
			$filePresent = null;
			if (file_exists(APP . 'Config' . DS . 'database.php')):
				echo '<span class="btn">';
					echo __d('cake_dev', 'Your database configuration file is present.');
					$filePresent = true;
				echo '</span>';
			else:
				echo '<span class="btn btn-danger">';
					echo __d('cake_dev', 'Your database configuration file is NOT present.');
					echo '<br/>';
					echo __d('cake_dev', 'Rename APP/Config/database.php.default to APP/Config/database.php');
				echo '</span>';
			endif;
		?>
	</p>
	<?php
	if (isset($filePresent)):
		App::uses('ConnectionManager', 'Model');
		try {
			$connected = ConnectionManager::getDataSource('default');
		} catch (Exception $connectionError) {
			$connected = false;
		}
	?>
	<p>
		<?php
			if ($connected && $connected->isConnected()):
				echo '<span class="btn">';
		 			echo __d('cake_dev', 'Cake is able to connect to the database.');
				echo '</span>';
			else:
				echo '<span class="btn btn-danger">';
					echo __d('cake_dev', 'Cake is NOT able to connect to the database.');
					echo '<br /><br />';
					echo $connectionError->getMessage();
				echo '</span>';
			endif;
		?>
	</p>
	<?php endif;?></p>
    <p>This is a template for a simple marketing or informational website. It includes a large callout called the hero unit and three supporting pieces of content. Use it as a starting point to create something more unique.</p>
    <p><a class="btn btn-primary btn-large">Learn more &raquo;</a></p>
  </div>

  <!-- Example row of columns -->
  <div class="row">
    <div class="span4">
      <h2>Heading</h2>
       <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
      <p><a class="btn" href="#">View details &raquo;</a></p>
    </div>
    <div class="span4">
      <h2>Heading</h2>
       <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
      <p><a class="btn" href="#">View details &raquo;</a></p>
   </div>
    <div class="span4">
      <h2>Heading</h2>
      <p>Donec sed odio dui. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Vestibulum id ligula porta felis euismod semper. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
      <p><a class="btn" href="#">View details &raquo;</a></p>
    </div>
  </div>

  <hr>

  <footer>
    <p>&copy; Company 2012</p>
  </footer>

</div> <!-- /container -->