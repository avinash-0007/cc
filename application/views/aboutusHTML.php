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
  

    <h1>About Us</h1>
	<p>coronavirusliveupdate.in is an online portal, in which we are providing Corona Virus Live Update track. Our goal is to help customers to check the status of coronavirus in india and besides we are providing the full details of Corona Virus Cases in different states and district across india. This service is completely free.
</p>
   <div class="form-wrap-right">
              <div  class="ads">
        <?php include 'common/adscenter3.php';?>
  
</div>
            </div>

<p>Our goal is to provide user complete one stop solution for Coronavirus. If you are experiencing any problems in Corona Virus Live Update tracking in our web, then contact us via the contact form for free .
</p>
<p>Our website is not affiliated with the Offical website in any way. This is a Web application to help users. Visiting this site confirms that you are accepting all terms and conditions. We welcome you for valuable suggestions, questions or feedback. For that, you can reach us through the contact form.
</p>
<h2>About Corona Virus Live Update</h2>
<img class="img-responsive" alt="about Corona Virus Live Update" src="<?php echo base_url();?>extra/images/about-corona.jpg">
<p>
Corona cases in the world are keep growing.Almost every country in the world is getting affected by coronavirus.
We as a group of individuals are providing latest updated live information related to corona in india and rest of the world.
</p>
   <div class="form-wrap-right">
              <div  class="ads">
        <?php include 'common/adscenter3.php';?>
  
</div>
            </div>

<p>Inspirational Quote for Cornavirus -“Nothing in life is to be feared, it is only to be understood. Now is the time to understand more, so that we may fear less.”</p>

   <div class="form-wrap-right">
              <div  class="ads">
        <?php include 'common/adscenter3.php';?>
  
</div>
            </div>

  	
        </section>

        </main>
        <?php include ('common/footer.php'); ?>
        
            
    </body>


</html>
