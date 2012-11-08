<?php
/**
 *
 * PHP 5
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright 2005-2011, Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright 2005-2011, Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       Cake.View.Layouts
 * @since         CakePHP(tm) v 0.10.0.1076
 * @license       MIT License (http://www.opensource.org/licenses/mit-license.php)
 */

$cakeDescription = __d('cake_dev', 'Daron Lord');
?>
<!doctype html>
<!--[if lt IE 7]><html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if IE 7]><html class="no-js lt-ie9 lt-ie8" lang="en"> <![endif]-->
<!--[if IE 8]><html class="no-js lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
<head>
	<?php echo $this->Html->charset(); ?>
	<title>
		<?php echo $cakeDescription ?>
	</title>
	<?php
		echo $this->Html->meta(array("name"=>"viewport","content"=>"width=device-width,  initial-scale=1.0"));
		echo $this->Html->meta('icon');
		
		echo $this->Html->css('bootstrap.min');
		echo $this->Html->css('bootstrap-responsive.min');
		// docs.css is only for this exapmple, remove for app dev
		echo $this->Html->css('docs');
		echo $this->fetch('meta');
		echo $this->fetch('css');
		echo $this->Html->script('libs/modernizr.min');
		echo $this->Html->script('libs/jquery');
		echo $this->Html->script('libs/bootstrap.min');
		echo $this->Html->script('bootstrap/application');
		echo $this->fetch('script');
	?>
	
</head>
<body data-spy="scroll" data-target=".subnav" data-offset="50">

	<header class="container">
    </header> <!-- /container -->
	<div id="container">
		<div id="content">
			<?php echo $this->Session->flash(); ?>
			
			<?php echo $this->element('menu/top_menu'); ?>


			<?php echo $this->fetch('content'); ?>
		</div>
	</div>
	<div id="container">
        <div class="hero-unit">
          <h1><?php echo $cakeDescription ?></h1>
          <p>Where Compliance is a Science.</p>
          <p>
            <a href="#myModal" role="button" class="btn" data-toggle="modal">Learn More</a>
             
            <!-- Modal -->
            <div id="myModal" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                <h3 id="myModalLabel">Modal header</h3>
              </div>
              <div class="modal-body">
                <p>One fine body…</p>
              </div>
              <div class="modal-footer">
                <button class="btn" data-dismiss="modal" aria-hidden="true">Close</button>
                <button class="btn btn-primary">Save changes</button>
              </div>
            </div>
          </p>
        </div>   

		<div class="alert alert-block alert-error fade in"> <button type="button" class="close" data-dismiss="alert">×</button> <h4 class="alert-heading">Oh snap! You got an error!</h4> <p>Change this and that and try again. Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Cras mattis consectetur purus sit amet fermentum.</p> <p> <a class="btn btn-danger" href="#">Take this action</a> <a class="btn" href="#">Or do this</a> </p> </div>             
        <div class="accordion" id="accordion2">
          <div class="accordion-group">
            <div class="accordion-heading">
              <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseOne">
                Was anyone injured in this accident?&nbsp;&nbsp;<span class="badge badge-success">10</span>
              </a>
            </div>
            <div id="collapseOne" class="accordion-body collapse in">
              <div class="accordion-inner lead">
                Ingenium tation ullamcorper esca erat antehabeo, tum autem illum utinam consequat valetudo hendrerit dignissim. In nimis virtus, uxor abigo pagus autem sagaciter sed pertineo et sino cogo. 
              </div>
            </div>
          </div>
          <div class="accordion-group">
            <div class="accordion-heading">
              <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseTwo">
                How many people were involved?&nbsp;&nbsp;<span class="badge badge-success">2</span>
              </a>
            </div>
            <div id="collapseTwo" class="accordion-body collapse">
              <div class="accordion-inner lead">
                Delenit usitas esse, distineo typicus appellatio. Suscipit tincidunt illum abdo foras odio facilisis delenit, autem commodo. Iriure scisco iusto refero, obruo lobortis vereor abluo pala typicus consequat vel ullamcorper indoles suscipere. In uxor turpis uxor modo opto proprius vero saepius voco, loquor. Importunus populus sed in demoveo decet vicis. Erat diam sit, vicis, illum in praesent. Refoveo premo nisl venio erat metuo praemitto usitas lobortis dignissim duis nisl. Hos, capto nostrud duis lenis acsi nibh eros foras venio jugis, gilvus, consectetuer dolore.       </div>
            </div>
          </div>
          <div class="accordion-group">
            <div class="accordion-heading">
              <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseThree">
                How many people were involved?&nbsp;&nbsp;<span class="badge badge-success">3</span>
              </a>
            </div>
            <div id="collapseThree" class="accordion-body collapse">
              <div class="accordion-inner lead">
                Delenit usitas esse, distineo typicus appellatio. Suscipit tincidunt illum abdo foras odio facilisis delenit, autem commodo. Iriure scisco iusto refero, obruo lobortis vereor abluo pala typicus consequat vel ullamcorper indoles suscipere. In uxor turpis uxor modo opto proprius vero saepius voco, loquor. Importunus populus sed in demoveo decet vicis. Erat diam sit, vicis, illum in praesent. Refoveo premo nisl venio erat metuo praemitto usitas lobortis dignissim duis nisl. Hos, capto nostrud duis lenis acsi nibh eros foras venio jugis, gilvus, consectetuer dolore.       </div>
            </div>
          </div>
        </div>
	</div>

	
	<footer class="container">
	</footer><!-- /container -->
	
	<?php echo $this->element('sql_dump'); ?>
</body>
</html>
