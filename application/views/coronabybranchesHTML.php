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
			<h1>Speed Post Tracking In <?php echo $speedbystates[0]['statename'];?></h1>
			<p>We have provided the list of Al Speed Post branches in  <?php echo $speedbystates[0]['statename'];?> , India for Speed Post tracking. You can find here the district in <?php echo $speedbystates[0]['statename'];?> where speed post branches exist.
			Speed Post tracking status can be  tracked by showing your slip in all the Speed post branches of <?php echo $speedbystates[0]['statename'];?> , India.
			</p>
				  
			      <div class="form-wrap-right">
              <div  class="ads">
			  <br>
       <?php include 'common/adscenter3.php';?>
  
</div>
            </div>
			 
				
			</div>
			<div class="row">
			<div class="col-lg-12">
			<h2>All Speed Post Branches in <?php echo $speedbystates[0]['statename'];?></h2>
			<p>Speed Post branches in <?php echo $speedbystates[0]['statename'];?>-Click on the district  of your choice to get the information about the Speed Post branches exist in that district for posting your courier or track speed post parcel.</p>
			
			      <div class="form-wrap-right">
              <div  class="ads">
			  <br>
       <?php include 'common/adscenter3.php';?>
  
</div>
            </div>
			 
				
			</div>
			<?php if($speedbystates){
				
			foreach($speedbystates as $speedbystates1){	?>
			
			<div class="col-lg-4">
			<p style="min-height:100px;background:#bd2821;color:#ffffff;text-align:center;">
				<a style="color:#ffffff;font-size:16px;font-weight:bold;vertial-align:middle;line-height:100px;" href="<?php echo base_url();?>speedpost-branches/<?php echo strtolower($state); ?>/<?php echo str_replace(" ","-",strtolower($speedbystates1['district'])); ?>" title="<?php echo $speedstate1['district'] ?>">
				<?php echo $speedbystates1['district'] ?>
				</a>
			
			</p>
			
			</div>
			<?php }  } ?>
			
		</div>
	</div>
	</section>

	<section id="featured"  class="content-wrapper">
	<!-- start slider -->
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<?php if($trackurl!=''){?>
					 <iframe style="width: 100%; min-height: 600px;  margin: 10px 0 0 0 ; border: none;  padding: 0;" class="professionalcourier-zoom" src="<?php echo $trackurl;?>"></iframe>
	<!-- end slider -->
		
		<?php } ?>
			<h2>Track Speed Post Status</h2>
			      <div class="form-wrap-right">
              <div  class="ads">
			  <br>
       <?php include 'common/adscenter3.php';?>
  
</div>
            </div>
				<p>India Speed Post Tracking helps you to track your parcel using your tracking number and it provides up-to-date tracking information of your consignment.</p>
				<p> 1) Enter the tracking number provided to you in consignment tracking slip.</p>
				<p> 2) Once you enter all tracking number press 'Track Your Parcel’ for speed post tracking. </p>
				<p> 3) If the Tracking number is correct then Tracking information results will be displayed instantly at the below section. </p>
				
			</div>
		</div>
	</div>	
	
	

	</section>
	
	
	<section id="content"  class="content-wrapper">
	<div class="container">
		
		<!-- Portfolio Projects -->
		<div class="row">
			<div class="col-lg-12">
			<h2>Speed Post Tracking Number Formats</h2>	
			<br>
				<?php include 'common/adscenter3.php';?>
				<p>Below we have mentioned the Speed post tracking number format ( India Post tracking number format). This format will help you to find the tracking number in the slip provided by speed post service provider. </p>
					<table class="table table-bordered table-responsive">
<tbody>
<tr>
<td><strong>Type of Service</strong></td>
<td><strong>Format of Tracking number</strong></td>
<td><strong>No. of digits</strong></td>
</tr>
<tr>
<td>Speed Post (EMS) Domestic</td>
<td>EE12348949IN</td>
<td>13</td>
</tr>
<tr>
<td>International EMS Artilces to be delivered in India</td>
<td>EE125874689XX</td>
<td>13</td>
</tr>
<tr>
<td>Electronic Money Order (eMO)</td>
<td>000000000000000000</td>
<td>18</td>
</tr>
<tr>
<td>Registered Mail</td>
<td>RX123325189IN</td>
<td>13</td>
</tr>
<tr>
<td>Express Parcel Post</td>
<td>XX000000000XX</td>
<td>13</td>
</tr>
</tbody>
</table>
			</div>
		</div>

	</div>
	</section>
	<section class="speed-post-media-trend content-wrapper">
        <h3>Latest Speed Post Tweets--Friday, <?php echo "<b>".date('l\, F jS\, Y ')."</b>"; ?></h3>

        <div class="ssb">
            <!-- Twitter -->
            <a href="http://twitter.com/home?status=<?php echo base_url(); ?>" title="Share on Twitter" target="_blank" class="btn btn-socal btn-twitter"><i class="fa fa-twitter"></i> Twitter</a>
            <!-- Facebook -->
            <a href="https://www.facebook.com/sharer/sharer.php?u=<?php echo base_url(); ?>" title="Share on Facebook" target="_blank" class="btn btn-socal btn-facebook"><i class="fa fa-facebook"></i> Facebook</a>
            <!-- Google+ -->
            <a href="https://plus.google.com/share?url=<?php echo base_url(); ?>" title="Share on Google+" target="_blank" class="btn btn-socal btn-googleplus"><i class="fa fa-google-plus"></i> Google+</a>
        </div>
        <p>
            Trending Topics : indian postal tracking, speed post courier tracking, postal tracking, speed post tracking passport, speed post status check up, India Post Tracking
        </p>

        

<?php

$my_file = $_SERVER['DOCUMENT_ROOT'].'/speedpost3.txt';
$handle = fopen($my_file, 'r');
$tweetdata = json_decode(fread($handle,filesize($my_file)));

?>	

<div class="tweets">
<p>Last Updated : <strong><time itemprop="lastReviewed" datetime="<?php date("Y-m-d"); ?>">Today</time></strong></p>
          		<?php if(count($tweetdata)>0){?>
		<ul>
		<?php 
		$x=0;
		foreach($tweetdata as $tweetdata1){	 
		$olddate=$tweetdata1->fulldate;

		$cdate = date('Y-m-d H:i:s');
		$start = new DateTime($olddate);
$end   = new DateTime($cdate);
$interval = $end->diff($start);

		  $hourdiff = round((strtotime($cdate) - strtotime($olddate))/3600);
		 $noofhours=(int)$hourdiff % 24;
		 $noofdays = (int)($hourdiff/24);
		?>
		<li><?php echo $tweetdata1->user_name; ?> : <b> <?php echo $tweetdata1->user_text; ?>  </b> <?php if($noofdays!=0){ echo $noofdays.' Days' ;} ?>  <?php echo $noofhours  ?> Hours Ago </li>
		<?php 
		$x++;
		if($x==20){
			break;
		}
		} ?> 
		
		
		</ul>
		<?php }
?></div>



    </section>
    
        	
        

        </main>
        <?php include ('common/footer.php'); ?>
        
            
    </body>


</html>