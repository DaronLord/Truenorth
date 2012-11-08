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
if (Configure::read('debug') > 0):
	Debugger::checkSecurityKeys();
endif;
?>
	<div id="container">
        <div class="hero-unit">
          <h1>Daron Lord</h1>
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
                Gilvus hos foras pala damnum dolus nullus usitas qui iusto consectetuer si. Refero pagus sed verto suscipit vulpes elit erat dolus, euismod ratis. Comis populus luptatum vel hendrerit paulatim interdico abdo neo duis mos valetudo. Appellatio nulla proprius ad, tincidunt mauris, luptatum veniam. 
                <br/><br/>
                Rusticus ullamcorper aliquip magna esca tation damnum occuro. Enim praesent iaceo, utinam eum nostrud. Defui minim euismod enim nobis tincidunt. Tamen metuo, genitus pagus abbas aliquam praemitto at, transverbero torqueo imputo, occuro. Neque delenit, sino secundum ea, ratis. 
                <br/><br/>
                Abico volutpat aliquam validus, nullus duis ibidem populus hendrerit luctus in. Indoles proprius ne sudo zelus nonummy. Luptatum tation humo vero multo natu, odio accumsan, ideo. Ne roto letatio natu sit transverbero probo oppeto delenit refero suscipere. Feugiat bene ille consectetuer ullamcorper, enim duis vicis eum dolore delenit tation iaceo. 
                <br/><br/>
                Nulla paratus eros ad vel esse haero ea ut ex nisl nulla cogo nulla. Regula quae, brevitas nullus dignissim populus aliquam, zelus tation opes enim. 
                <br/><br/>
                Augue reprobo abigo vero vulputate duis uxor suscipit, sudo capio. Iaceo delenit ex facilisi pecus, illum nunc jumentum zelus. Tum secundum feugait lobortis et singularis gravis odio opes appellatio. Huic adsum, amet amet mara exputo. Roto quis sed tego elit ibidem. Eum nutus hendrerit natu transverbero et ut scisco premo. Vel, exerci patria blandit dolore euismod qui abluo vulputate blandit quibus turpis olim. 
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

