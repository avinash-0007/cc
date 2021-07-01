<?php
defined('BASEPATH') OR exit('No direct script access allowed');
function sanitize_output($buffer) {

    $search = array(
        '/\>[^\S ]+/s',  // strip whitespaces after tags, except space
        '/[^\S ]+\</s',  // strip whitespaces before tags, except space
        '/(\s)+/s'       // shorten multiple whitespace sequences
    );

    $replace = array(
        '>',
        '<',
        '\\1'
    );

    $buffer = preg_replace($search, $replace, $buffer);

    return $buffer;
}
ob_start('sanitize_output');

?>
<!DOCTYPE html>
<html lang="en-IN" itemscope="" itemtype="http://schema.org/WebPage">    

<head>
		<?php include ('common/headscript.php'); ?>
	
    </head>
    <body>
       <?php include ('common/nav.php'); ?>
        <main id="body">
           
        <section class="content-wrapper">
			<?php $statefiltered=str_replace("_"," ",strtoupper($state));
			$statefiltered=str_replace("-"," ",strtoupper($statefiltered));
			?>
			<h1>Coronavirus Live Update In <?php echo ucfirst($statefiltered);?></h1>
			<p>Below is the list provided for the Corona Virus Cases across different district in  <?php echo $statefiltered;?> . You can find here the district in <?php echo $statefiltered;?> where coronavirus cases in recorded.
			Coronavirus live update in <?php echo $statefiltered;?> , India can be found below.
			</p>		
			
			<p>Coronavirus Live Update <?php echo $statefiltered;?>-Click on the district  of your choice to get the information about the Current Coronavirus Cases exist in that district.</p>
			
			                 <div class="form-wrap-right">
              <div  class="ads">
			  <br>
       <?php include 'common/adscenter3.php';?>
  
</div>
            </div>
			 
				
		
			<?php 
			
			
			if($coronadistrict){?>
				<ul>
			<?php foreach($coronadistrict as $coronadistrict1){	?>
			
			<li>
				<a  href="<?php echo base_url();?>coronavirus/<?php echo strtolower($state); ?>/<?php echo str_replace(" ","-",strtolower($coronadistrict1['district'])); ?>" title="<?php echo $coronadistrict1['district'] ?>">
				<?php echo $coronadistrict1['district'] ?>
				</a>
			
			</li>
			
			
			<?php } ?> </ul><?php  } ?>
			
		
	</section>
		<?php 
		
		if($state=='tamil-nadu'){
			include 'city/Tamil_NaduHTML.php';
		}else if($state=='maharastra'){
			include 'city/MaharastraHTML.php';
		}else if($state=='delhi'){

			include 'city/DelhiHTML.php';
		}	?> 

	<section class="content-wrapper">
	
			
			<h2>Corona Virus Cases other then <?php echo ucfirst($statefiltered);?></h2>
			<p>List of all the states other then   <?php echo ucfirst($statefiltered);?> where coronavirus cases has been recorded :</p>
				  
			      <div class="form-wrap-right">
              <div  class="ads">
			   <br>
       <?php include 'common/adscenter3.php';?>
  
</div>
            </div>
			 
				
			
	
			             <?php if($uniquestates){?>
				<ul><?php
			foreach($uniquestates as $uniquestates){	
			if($state!=str_replace(' ','-',strtolower($uniquestates['state']))){
			?>
			
			<li><a  href="<?php echo base_url();?>coronavirus/<?php echo str_replace(' ','-',strtolower($uniquestates['state'])); ?>" title="<?php echo $uniquestates['state'] ?>">
				<?php echo $uniquestates['state'] ?>
				</a></li>
			
			
			
			<?php } }  ?> </ul><?php } ?>
			
		
	</section>
	
	<section class="content-wrapper">
	<div class="container">
		
		<!-- Portfolio Projects -->
		<div class="row">
			<div class="col-lg-12">
			<h2>CoronaVirus Map</h2>	
			 <br>
				<?php include 'common/adscenter3.php';?>
				<p>CoronaVirus Map is graphical repersentation of coronavirus cases recorded in different states or district. Also there re different coronavirus map available which provide the world-wide trend of corona virus.
				Covid19 Map Also is a realtime map which basically get updated on daily bases. This helps us to understand the current status of coronavirus in india or world.
				</p>
		</div>

	</div>
	</section>
  </main>
        <?php include ('common/footer.php'); ?>
        
            
    </body>


</html>