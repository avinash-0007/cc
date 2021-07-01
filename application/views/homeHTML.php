
<!DOCTYPE html>
<html lang="en-IN" itemscope="" itemtype="http://schema.org/WebPage">    

<head>
		<?php include ('common/headscript.php'); ?>
	
    </head>
    <body>
       <?php include ('common/nav.php'); ?>
        <main id="body">
           <?php 

		   $datetime1 = date_create('2018-03-30');
$datetime2 = date_create(date('Y-m-d'));
$interval = date_diff($datetime1, $datetime2);
$tdays= $interval->format('%a');
		  
		   $myforumala=7777+(7*$tdays); ?> 
        <section class="content-wrapper">
            <h1>Coronavirus Live Update </h1>

			<p>We provide updated Covid-19 Count Tracker In India, You can find the latest covid confirmed cases recorded in india on most fastest way.</p>
            <div class="featured">
			<h6 style="color:#28a745;">Last Updated :<?php echo "<b>".date('l\, F jS\, Y ')."</b>"; ?> </h6>
			 <h3 style="color:#28a745;">about 1 mins ago</h3>
               
    <caption><strong>Coronavirus Live Update - India</strong></caption>
	 <table class="table table-condenced">
    <thead>
		<tr>
			<th style="text-align:left;"><b>State</b></th>
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
	?>
        <tr>
			<td style="text-align:left;"><?php echo $states[$i]['state'];?></td>
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
			<td style="text-align:left;"><?php echo $states[0]['state'];?></td>
			<td><?php if($states[0]['delta_confirmed']!=0){?><span style="font-size:10px;color:red;"> &#8593; <?php echo $states[0]['delta_confirmed'];?></span> <?php }?><?php echo $states[0]['confirmed'];?></td>
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
				 <div  class="ads">
       <?php include 'common/adscenter3.php';?>
  
</div>
            </div>
            <div class="form-wrap-right">
             
            </div>
        </section>

            <div class="content-wrapper main-content clear-fix">
                






<div class="container">
    <section class="row">
        <p>
		To check the status of online <strong>Covid 19 India tracking</strong> of number of people affected by <strong>corona cases in india</strong>. Our tracking service is completely secure and updated as we do not store any information or ip with us.
		Please note that this is not <strong>coronavirus india</strong> .Offical website <strong><a href="https://www.mohfw.gov.in/">www.mohfw.gov.in/</a></strong> cases tracking India's official website. The coronavirus tracking information is obtained from 3rd party sources.
		 </p>
		  <img alt="Covid 19" title="Covid 19" src="<?php echo base_url();?>extra/images/covid19.png" /><br />
        <div  class="ads">
       <?php include 'common/adscenter1.php';?>
  
</div>
        <h2>INDIA COVID-19 TRACKER</h2>
        <p>India <b>COVID-19 Tracker</b> service allows you to track the latest updated <strong>Coronavirus Cases</strong> in India.
		Coronavirus Live Update services are provide all the information (Coronavirus Cases, Coronavirus News Coronavirus Pills, Coronavirus City wise Updates Etc) related to Coronavirus in India .</p>

		
		<p>The main points to remember for COVID-19 India Track  </p>
		<ul>
		 <li> We keep updating our website to provide the latest and updated Coronavirus cases in india</li>
		 <li> You can also find details information like Coronavirus cases in each state or district.</li>
		 <li>We try to provide all the corona infomation in best possible manner.</li>
		
		 </ul>
<div  class="ads">
        <h6>sponsored links</h6>
   
</div>        
        
<img alt="Covid19 Tracker" title="Covid19 Tracker" src="<?php echo base_url();?>extra/images/covid19-socialdistancing.jpg" /><br />
       
    </section>

    <section class="speedpost-tracking">
        <h2>Coronavirus Symptoms</h2>	


        <p>
            Symptoms of the COVID-19 coronavirus include cough, sore throat, pain, fever, and fatigue. 
			There are some cases are mild, like the cold, while others are more likely to cause Coronavirus.

        </p>
        <p>Coronavirus Common Symptoms are listed below:</p>
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
	    <section>
        <h2>Coronavirus By States</h2>
        <p>Coronavirus spread across india.Below is the list of cities where Coronavirus is spread:</p>
        <?php if($uniquestates){?>
				<ul><?php
			foreach($uniquestates as $uniquestates){	?>
			
			<li><a  href="<?php echo base_url();?>coronavirus/<?php echo str_replace(' ','-',strtolower($uniquestates['state'])); ?>" title="<?php echo $uniquestates['state'] ?>">
				<?php echo $uniquestates['state'] ?>
				</a></li>
			
			
			
			<?php }  ?> </ul><?php } ?>
		
	
    </section>

    

</div>

            </div>
        </main>
        <?php include ('common/footer.php'); ?>
        
            
    </body>


</html>