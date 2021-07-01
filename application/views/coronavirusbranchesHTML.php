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
			<h1>Coronavirus Cases in India</h1>
			<p>We have provided the list of All Corona virus cases  recorded in India. You just need to click on State first then then district andthen it will show you all the details about that corona cases recorded </p>
				  
			                  <div class="form-wrap-right">
              <div  class="ads">
       <?php include 'common/adscenter3.php';?>
  
</div>
            </div>
			 
				
		
			
			<h2>Corona Virus Live Update</h2>
			<p>Below is the list of  by state-Click on the state  of your choice to get the information about the coronavirus cases in that city.</p>
			      <div class="form-wrap-right">
              <div  class="ads">
       <?php include 'common/adscenter3.php';?>
  
</div>
            </div>
			 
				
			<h6 style="color:#28a745;">Last Updated :<?php echo "<b>".date('l\, F jS\, Y ')."</b>"; ?> </h6>
			 <h3 style="color:#28a745;">about 1 mins ago</h3>
                <table class="table table-condenced">
    <caption>Corona Virus Live Update</caption>
    <thead>
		<tr>
			<th><b>State</b></th>
			<th><b>Confirmed</b></th>
			<th><b>Active</b></th>
			<th><b>Recovered</b></th>
			<th><b>Death</b></th>
			<!--<th><b>Today-Active</b></th>
			<th><b>Today-Confirmed</b></th>
			<th><b>Today-Recovered</b></th>
			<th><b>Today-Death</b></th> -->
		</tr>
    </thead>
    <tbody>
	<?php if(count($states)){
		$i=1;
	while(count($states)>$i){
		$statelink=str_replace(' ','-',strtolower($states[$i]['state']));
	?>
        <tr>
			<td><a  href="<?php echo base_url();?>coronavirus/<?php echo $statelink; ?>" title="<?php echo $states[$i]['state']; ?>">
				<?php echo $states[$i]['state'];?></a></td>
			<td><?php if($states[$i]['delta_confirmed']!=0){?><span style="font-size:10px;color:red;"> &#8593; <?php echo $states[$i]['delta_confirmed'];?></span> <?php }?><?php echo $states[$i]['confirmed'];?></td>
			<td><?php echo $states[$i]['active'];?></td>
			<td><?php echo $states[$i]['recovered'];?></td>
			<td><?php echo $states[$i]['deaths'];?></td>
		<?php /* ?>	<td><?php echo $states[$i]['delta_active'];?></td>
			<td><?php echo $states[$i]['delta_confirmed'];?></td>
			<td><?php echo $states[$i]['delta_recovered'];?></td>
			<td><?php echo $states[$i]['delta_deaths'];?></td> ><?php */ ?>
        </tr>
	<?php $i++; }} ?>
			
        <tr>
			<td><?php echo $states[0]['state'];?></td>
			<td><?php echo $states[0]['confirmed'];?></td>
			<td><?php echo $states[0]['active'];?></td>
			<td><?php echo $states[0]['recovered'];?></td>
			<td><?php echo $states[0]['deaths'];?></td>
			<?php /* ?>	 <td><?php echo $states[0]['delta_active'];?></td>
			<td><?php echo $states[0]['delta_confirmed'];?></td>
			<td><?php  echo$states[0]['delta_recovered'];?></td>
			<td><?php echo $states[0]['delta_deaths'];?></td><?php */ ?>
        </tr>
	
    </tbody>
</table>
	
	</section>

	   <section id="featured"  class="content-wrapper">
        <h2>Corona Virus Symptoms</h2>	


        <p>
            Symptoms of the COVID-19 coronavirus include cough, sore throat, pain, fever, and fatigue. 
			There are some cases are mild, like the cold, while others are more likely to cause Corona Virus.

        </p>
        <p>Corona Virus Common Symptoms are listed below:</p>
        <ul>
            <li>Fever</li>
            <li>Dry Cough</li>
            <li>Fatigue</li>
            <li>Trouble in breathing or shortness of breath</li>
			<li>Chest Pain</li>
            <li>Loss of smell</li>
            <li>Altered sense of taste</li>
			<li>Redness and swelling of the eyes (rare symptoms)</li>
			<li>Sticky discharge (rare symptoms)</li>
        </ul>
	
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


