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
         <?php   $district=ucwords(str_replace("-"," ",$district));
			$state=ucwords(str_replace("-"," ",$state)); 
			?>
        <section class="content-wrapper">
			
			<h1>Corona Virus Live - <?php echo ucfirst($district); ?></h1>
			<p>This <?php echo $district; ?> is located in  <?php echo $state;?> City ,  india  .We provide current active covid-19 cases recorded in <?php echo $district;?> . 
			</p>
				  
			<div class="form-wrap-right">
              <div  class="ads">
			   <br>
       <?php include 'common/adscenter3.php';?>
   <br>
</div>
            </div>
				
			
		
			<h2>Coronavirus Cases in <?php echo ucfirst($district); ?> in  <?php echo $state;?></h2>
			<p>Below is the details of  <?php echo $district; ?>  Coronavirus cases. We provide detailed information like confirmed covid-19 cases in <?php echo ucfirst($district); ?>,active covid-19 cases in <?php echo ucfirst($district); ?>,recovered covid-19 cases in <?php echo ucfirst($district); ?>,deaths covid-19 cases in <?php echo ucfirst($district); ?></p>
			<h6 style="color:#28a745;">Last Updated :<?php echo "<b>".date('l\, F jS\, Y ')."</b>"; ?> </h6>
			 <h3 style="color:#28a745;">about 1 mins ago</h3>
			<div class="form-wrap-right">
              <div  class="ads">
			   <br>
       <?php include 'common/adscenter3.php';?>
   <br>
</div>
            </div>
				
		
			<?php if($covidbranches){
				
		?>
			
			
			<table class="table">
  <thead>
    <tr>
      <th colspan="2"> <h2>CoronaVirus Live Update <?php echo ucfirst($district); ?> </h2> </th>   </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">State</th>
      <td><?php echo $covidbranches->state; ?></td>
      
    </tr>
    <tr>
      <th scope="row">Confirmed</th>
      <td><?php echo $covidbranches->confirmed; ?></td>
      
    </tr>
     <tr>
      <th scope="row">Today Confirmed</th>
      <td><?php echo $covidbranches->delta_confirmed; ?></td>
      
    </tr>
	  
  </tbody>
</table>
			
			
			<?php } ?>
			
	
			
<p><Here is the list of all  other Coronavirus cases recorded in <?php echo $district;?>  District . We keep updating the  covid19 india cases . Below is the list of  district other then <?php echo $district;?> where covid-19 india cases is recorded. </p>
			
			<div class="form-wrap-right">
              <div  class="ads">
			  <br> 
       <?php include 'common/adscenter3.php';?>
   <br> 
</div>
            </div>
			 
				
			
			<?php 
			
			
			if($coronadistrict){?>
				<ul>
			<?php foreach($coronadistrict as $coronadistrict1){	
			if($district!=$coronadistrict1['district']){
			?>
			
			<li>
				<a  href="<?php echo base_url();?>coronavirus/<?php echo strtolower($state); ?>/<?php echo str_replace(" ","-",strtolower($coronadistrict1['district'])); ?>" title="<?php echo $coronadistrict1['district'] ?>">
				<?php echo $coronadistrict1['district'] ?>
				</a>
			
			</li>
			
			
			<?php } } ?> </ul><?php  } ?>
			
		
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