
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
            <h1>Coronavirus Cases in <?php echo $countryname;?></h1>
		
		<p>Coronavirus cases in <?php echo $countryname;?> is keep increasing each seconds . We try to provide you the updated informatipn for our best sources. Coronavirus live cases are provided here.</p>
		<h2>Coronavirus Cases in <?php echo $countryname;?></h2>
		<p><?php echo $covidcountry[0]['total_cases'];?></p>	
		<h2>Coronavirus Deaths in <?php echo $countryname;?></h2>
		<p><?php echo $covidcountry[0]['total_deaths'];?></p>	
		<h2>Coronavirus Recovered in <?php echo $countryname;?></h2>
		<p><?php echo $covidcountry[0]['total_recovered'];?></p>	
		<h2>Today Coronavirus Cases in <?php echo $countryname;?></h2>
		<p><?php echo $covidcountry[0]['new_cases'];?></p>
		<h2>Today Coronavirus Deaths in <?php echo $countryname;?></h2>
		<p><?php echo $covidcountry[0]['new_deaths'];?></p>
            
		<?php if(count($covidus)>0){ ?>
		<p>We provide updated Covid-19 Count Tracker In <?php echo $countryname;?>, You can find the latest covid confirmed cases recorded in <?php echo $countryname;?> on most fastest way.</p>
            <div class="featured">
			<h6 style="color:#28a745;">Last Updated :<?php echo "<b>".date('l\, F jS\, Y ')."</b>"; ?> </h6>
			 <h3 style="color:#28a745;">about 1 mins ago</h3>
        
    <caption><strong>Coronavirus Live Update - <?php echo $countryname;?></strong></caption>
	
                <table class="table table-condenced">		
    <thead>
		<tr>
			<th style="text-align:left;"><b>State</b></th>
			<th><b>Confirmed</b></th>
			<th><b>Active</b></th>
			
			<th><b>Death</b></th>
			<!--<th><b>Today-Active</b></th>
			<th><b>Today-Confirmed</b></th>
			<th><b>Today-Recovered</b></th>
			<th><b>Today-Death</b></th> -->
		</tr>
    </thead>
    <tbody>
	<?php 
		$i=1;
		$ttotal=count($covidus)-1;
	while($ttotal>$i){
	?>
        <tr>
			<td style="text-align:left;"><strong><?php echo $covidus[$i]['state'];?></strong></td>
			<td><?php if($covidus[$i]['new_cases']!=0){?><span style="font-size:10px;color:red;"> &#8593; <?php echo $covidus[$i]['new_cases'];?></span> <?php }?><?php echo $covidus[$i]['total_cases'];?></td>
			<td><?php echo $covidus[$i]['active_cases'];?></td>
			
			<td><?php if($covidus[$i]['new_deaths']!=0){?><span style="font-size:10px;color:red;"> &#8593; <?php echo $covidus[$i]['new_deaths'];?></span> <?php }?><?php echo $covidus[$i]['total_deaths'];?></td>
		<?php /* ?>	<td><?php echo $states[$i]['delta_active'];?></td>
			<td><?php echo $states[$i]['delta_confirmed'];?></td>
			<td><?php echo $states[$i]['delta_recovered'];?></td>
			<td><?php echo $states[$i]['delta_deaths'];?></td> ><?php */ ?>
        </tr>
	<?php $i++; } ?>
			
        <tr>
			<td style="text-align:left;color:#28a745;"><strong><?php echo $covidus[$ttotal]['state'];?></strong></td>
			<td><?php if($covidus[$ttotal]['new_cases']!=0){?><span style="font-size:10px;color:red;"> &#8593; <?php echo $covidus[$ttotal]['new_cases'];?></span> <?php }?><?php echo $covidus[$ttotal]['total_cases'];?></td>
			<td><?php echo $covidus[$ttotal]['active_cases'];?></td>
			
			<td><?php if($covidus[$ttotal]['new_deaths']!=0){?><span style="font-size:10px;color:red;"> &#8593; <?php echo $covidus[$ttotal]['new_deaths'];?></span> <?php }?><?php echo $covidus[$ttotal]['total_deaths'];?></td>
			<?php /* ?>	 <td><?php echo $states[0]['delta_active'];?></td>
			<td><?php echo $states[0]['delta_confirmed'];?></td>
			<td><?php  echo$states[0]['delta_recovered'];?></td>
			<td><?php echo $states[0]['delta_deaths'];?></td><?php */ ?>
        </tr>
	
    </tbody>
</table>
<?php	} ?>			

		 
				 <div  class="ads">
       <?php include 'common/adscenter3.php';?>
  
</div>
            </div>
           
		
		
        </section>

            <div class="content-wrapper main-content clear-fix">
                






				<div class="container">
					<section class="row">
					  
						<h2>Total Coronavirus Cases in the <?php echo $countryname;?></h2>
						<canvas id="line-chart" width="800" height="450"></canvas>
					
						<div  class="ads">
								<h6>sponsored links</h6>
						   
						</div>        
								
					 
					</section>

					<section class="row">
					  
						<h2>Total Coronavirus Death in the <?php echo $countryname;?></h2>
						<canvas id="line-chart-death" width="800" height="450"></canvas>
					
						<div  class="ads">
								<h6>sponsored links</h6>
						   
						</div>        
								
					 
					</section>
					
					
					<section class="row">
					  
						<h2>Total Coronavirus Active Cases in the <?php echo $countryname;?></h2>
						<canvas id="line-chart-activecases" width="800" height="450"></canvas>
					
						<div  class="ads">
								<h6>sponsored links</h6>
						   
						</div>        
								
					 
					</section>
					
					
					<section class="row">
					  
						<h2>Daily Coronavirus New Cases in the <?php echo $countryname;?></h2>
						<canvas id="line-chart-newcases" width="800" height="450"></canvas>
					
						<div  class="ads">
								<h6>sponsored links</h6>
						   
						</div>        
								
					 
					</section>
					
					
					
					<section class="row">
					  
						<h2>Daily Coronavirus Death in the <?php echo $countryname;?></h2>
						<canvas id="line-chart-dailydeath" width="800" height="450"></canvas>
					
						<div  class="ads">
								<h6>sponsored links</h6>
						   
						</div>        
								
					 
					</section>
					
					
					

					

				</div>

            </div>
        </main>
        <?php include ('common/footer.php'); ?>
		<?php
		$total=count($covidcountry);
		$datesstr='';
		$total_cases_str='';
		$total_death_str='';
		$total_active_str='';
		$daily_new_str='';
		$daily_death_str='';
		while($total>0){
		$corona_date=$covidcountry[$total-1]['corona_date'];
		$total_cases=$covidcountry[$total-1]['total_cases'];
		$total_deaths=$covidcountry[$total-1]['total_deaths'];
		$active_cases=$covidcountry[$total-1]['active_cases'];
		$new_cases=$covidcountry[$total-1]['new_cases'];
		$new_deaths=$covidcountry[$total-1]['new_deaths'];
		$total_cases=str_replace(',','',$total_cases);
		$total_deaths=str_replace(',','',$total_deaths);
		$active_cases=str_replace(',','',$active_cases);
		$new_cases=str_replace(',','',$new_cases);
		$new_deaths=str_replace(',','',$new_deaths);
		$new_cases=str_replace('+','',$new_cases);
		$new_deaths=str_replace('+','',$new_deaths);
		
		
		$dateform=date('M j Y',strtotime($corona_date));
			if($total==1){
				$datesstr.="'".$dateform."'";	
				$total_cases_str.=$total_cases;	
				$total_death_str.=$total_deaths;	
				$total_active_str.=$active_cases;	
				$daily_new_str.=$new_cases;	
				$daily_death_str.=$new_deaths;	
			
			}else{
				$datesstr.="'".$dateform."'".',';
				$total_cases_str.=$total_cases.',';
				$total_death_str.=$total_deaths.',';
				$total_active_str.=$active_cases.',';
				$daily_new_str.=$new_cases.',';
				$daily_death_str.=$new_deaths.',';
				
			}		
		$total--;
		}	
		?>
		<script src = "https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>	
	<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.5.0/Chart.min.js"></script>
        <script>
		new Chart(document.getElementById("line-chart"), {
  type: 'line',
  data: {
    labels: [<?php echo $datesstr;?>],
    datasets: [{ 
        data: [<?php echo $total_cases_str;?>],
        label: "<?php echo $countryname;?>",
        borderColor: "#3e95cd",
        fill: false
      }
    ]
  },
  options: {
    title: {
      display: true,
      text: "Total Coronavirus Cases in the <?php echo $countryname;?>"
    }
  }
});


		new Chart(document.getElementById("line-chart-death"), {
  type: 'line',
  data: {
    labels: [<?php echo $datesstr;?>],
    datasets: [{ 
        data: [<?php echo $total_death_str;?>],
        label: "<?php echo $countryname;?>",
        borderColor: "#3e95cd",
        fill: false
      }
    ]
  },
  options: {
    title: {
      display: true,
      text: "Total Coronavirus Death in the <?php echo $countryname;?>"
    }
  }
});



		new Chart(document.getElementById("line-chart-activecases"), {
  type: 'line',
  data: {
    labels: [<?php echo $datesstr;?>],
    datasets: [{ 
        data: [<?php echo $total_active_str;?>],
        label: "<?php echo $countryname;?>",
        borderColor: "#3e95cd",
        fill: false
      }
    ]
  },
  options: {
    title: {
      display: true,
      text: "Total Coronavirus Active Cases in the <?php echo $countryname;?>"
    }
  }
});



		new Chart(document.getElementById("line-chart-newcases"), {
  type: 'line',
  data: {
    labels: [<?php echo $datesstr;?>],
    datasets: [{ 
        data: [<?php echo $daily_new_str;?>],
        label: "<?php echo $countryname;?>",
        borderColor: "#3e95cd",
        fill: false
      }
    ]
  },
  options: {
    title: {
      display: true,
      text: "Daily Coronavirus New Cases in the <?php echo $countryname;?>"
    }
  }
});



		new Chart(document.getElementById("line-chart-dailydeath"), {
  type: 'line',
  data: {
    labels: [<?php echo $datesstr;?>],
    datasets: [{ 
        data: [<?php echo $daily_death_str;?>],
        label: "<?php echo $countryname;?>",
        borderColor: "#3e95cd",
        fill: false
      }
    ]
  },
  options: {
    title: {
      display: true,
      text: "Daily Coronavirus Death in the <?php echo $countryname;?>"
    }
  }
});
		</script>
            
    </body>


</html>