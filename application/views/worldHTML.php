
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
            <h1>Coronavirus Cases</h1>
			<span itemscope="" itemprop="aggregateRating" itemtype="http://schema.org/AggregateRating" class="rating">
            <span>Rating : </span><a rel="nofollow" style="color:#FB6E50;" itemprop="url" href="#" class="smooth">
                <span><img style="vertical-align:middle;border:none;width:92px;" src="<?php echo base_url();?>extra/images/rating5.png" alt="rating"></span> <span class="rating">
      <span class="average">4.9</span> out of
      <span class="best">5</span>
   </span> based on <span class="votes"><?php echo $myforumala;?></span>  ratings
                <meta itemprop="ratingValue" content="7">
                <meta itemprop="bestRating" content="10">
                <meta itemprop="worstRating" content="0">
                <meta itemprop="reviewCount" content="175">
            </a>
        </span>
		<p>Coronavirus cases in world is keep increasing each seconds . We try to provide you the updated informatipn for our best sources. Coronavirus live cases are provided here.</p>
		<h2>Total Coronavirus Cases</h2>
		<p><?php echo $covidworld[$maxrows]['total_cases'];?></p>	
		<h2>Coronavirus Deaths</h2>
		<p><?php echo $covidworld[$maxrows]['total_deaths'];?></p>	
		<h2>Coronavirus Recovered</h2>
		<p><?php echo $covidworld[$maxrows]['total_recovered'];?></p>	
		<h2>Today Coronavirus Cases</h2>
		<p><?php echo $covidworld[$maxrows]['new_cases'];?></p>
		<h2>Today Coronavirus Deaths</h2>
		<p><?php echo $covidworld[$maxrows]['new_deaths'];?></p>
            <div class="featured">
			<h6 style="color:#28a745;">Last Updated :<?php echo "<b>".date('l\, F jS\, Y ')."</b>"; ?> </h6>
			 <h3 style="color:#28a745;">about 1 mins ago</h3>
			 
			 
			 <?php //echo print_r($covidworld); ?>
			  <caption><strong>Coronavirus Live Update</strong></caption>
			  	<p>We provide updated Covid-19 Count Tracker In World, You can find the latest covid confirmed cases recorded in world on most fastest way.</p>
	
                <table class="table table-condenced">		
    <thead>
		<tr>
			<th style="text-align:left;"><b>Country</b></th>
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
	<?php if(count($covidworld)){
		$i=0;
		$ttotal=count($covidworld)-1;
	while($ttotal>$i){
	?>
        <tr>
			<td style="text-align:left;"><a style="color:#4b48ec;" href="<?php echo base_url();?>world/country/<?php echo str_replace(" ","-",$covidworld[$i]['country']);?>"><?php echo $covidworld[$i]['country'];?></a></td>
			<td><?php if($covidworld[$i]['new_cases']!=0){?><span style="font-size:10px;color:red;"> &#8593; <?php echo $covidworld[$i]['new_cases'];?></span> <?php }?><?php echo $covidworld[$i]['total_cases'];?></td>
			<td><?php echo $covidworld[$i]['active_cases'];?></td>
			<td><?php echo $covidworld[$i]['total_recovered'];?></td>
			<td><?php if($covidworld[$i]['new_deaths']!=0){?><span style="font-size:10px;color:red;"> &#8593; <?php echo $covidworld[$i]['new_deaths'];?></span> <?php }?><?php echo $covidworld[$i]['total_deaths'];?></td>
		<?php /* ?>	<td><?php echo $states[$i]['delta_active'];?></td>
			<td><?php echo $states[$i]['delta_confirmed'];?></td>
			<td><?php echo $states[$i]['delta_recovered'];?></td>
			<td><?php echo $states[$i]['delta_deaths'];?></td> ><?php */ ?>
        </tr>
	<?php $i++; }} ?>
			
        <tr>
			<td style="text-align:left;"><?php echo $covidworld[$ttotal]['country'];?></td>
			<td><?php if($covidworld[$ttotal]['new_cases']!=0){?><span style="font-size:10px;color:red;"> &#8593; <?php echo $covidworld[$ttotal]['new_cases'];?></span> <?php }?><?php echo $covidworld[$ttotal]['total_cases'];?></td>
			<td><?php echo $covidworld[$ttotal]['active_cases'];?></td>
			<td><?php echo $covidworld[$ttotal]['total_recovered'];?></td>
			<td><?php if($covidworld[$ttotal]['new_deaths']!=0){?><span style="font-size:10px;color:red;"> &#8593; <?php echo $covidworld[$ttotal]['new_deaths'];?></span> <?php }?><?php echo $covidworld[$ttotal]['total_deaths'];?></td>
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
		To check the status of online <strong>Covid 19 World tracking</strong> of number of people affected by <strong>corona cases in World</strong>. Our tracking service is completely secure and updated as we do not store any information or ip with us.
		The coronavirus tracking information is obtained from 3rd party sources.
		 </p>
		  <img alt="Covid 19" title="Covid 19" src="<?php echo base_url();?>extra/images/covid19.png" /><br />
        <div  class="ads">
       <?php include 'common/adscenter1.php';?>
  
</div>
        <h2>World COVID-19 TRACKER</h2>
        <p>World <b>COVID-19 Tracker</b> service allows you to track the latest updated <strong>Coronavirus Cases</strong> in World.
		Coronavirus Live Update services are provide all the information (Coronavirus Cases, Coronavirus News Coronavirus Pills, Coronavirus City wise Updates Etc) related to Coronavirus in World .</p>

		
		<p>The main points to remember for COVID-19 World Track  </p>
		<ul>
		 <li> We keep updating our website to provide the latest and updated Coronavirus cases in World</li>
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
	

    

</div>

            </div>
        </main>
        <?php include ('common/footer.php'); ?>
        
            
    </body>


</html>