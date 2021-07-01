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
  

	  <h1>Contact Us</h1>
          <p>Just send us your questions or concerns or inquiry of your speed post parcel by using the below contact form.</p>
    <div class="form-wrap-right">
              <div  class="ads">
        <?php include 'common/adscenter3.php';?>
  
</div>
            </div>
          <div>
		  <?php if($msg!=''){?><p style="color:red;"><?php echo $msg; ?></p><?php } ?>
                <form class="form-horizontal" action="<?php echo base_url()?>contactus/" method="post">
                  <div class="form-group">
                    <label class="col-sm-2 control-label">Name</label>
                    <div class="col-sm-10">
                      <input type="text" name="name" class="form-control" placeholder="Name" required>
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-2 control-label">Email</label>
                    <div class="col-sm-10">
                      <input type="email" name="email"  class="form-control" placeholder="Email" required>
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-2 control-label">Message</label>
                    <div class="col-sm-10">
                      <textarea class="form-control" name="msg" rows="9" required></textarea>
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10">
                      <button type="submit" class="btn btn-default">Submit</button>
                    </div>
                  </div>
                </form>  
 <div class="form-wrap-right">
              <div  class="ads">
        <?php include 'common/adscenter3.php';?>
  
</div>
            </div>			
          </div>
     
      <div class="container">
	  <div class="speedposttrack">
		<h2>Speed Post Customer Care</h2>
         <p>India Post customer care support number are listed below to help you to contact there support and ask your query.If you have any query or issue related to Speed Post Delivery or parcel or want to know anything related to speed post  then you can get in touch with customer care at below mention numbers.
		 </p>
		 <div class="row">
         <?php include 'common/adscenter3.php';?>
		 </div>
		 <div class="table-responsive">
		<table class="table table-bordered table-striped">
		<thead>
			<tr>
				<th ><p><b>City</b></p></th>
				<th><p class="style5">Telephone No</p></th>
				<th ><p><b>Email id</b></p></th>
			</tr>
		</thead>
    <tbody>
    <tbody>
                
                <tr>
                    <td >
                        <p>Delhi</p>
                    </td>
                    <td >
                        <p>1800 119888</p>
                    </td>
                    
                    <td >
                        <p>
                            <a href="mailto:spc.delhi@indiapost.gov.in">spc.delhi@indiapost.gov.in</a>
                        </p>
                    </td>
                </tr>
                <tr>
                    <td >
                        <p>Mumbai</p>
                    </td>
                    <td >
                        <p>022 2615 6125</p>
                    </td>
                  
                    <td >
                        <p>
                            <a href="mailto:spc.mumbai@indiapost.gov.in">spc.mumbai@indiapost.gov.in</a>
                        </p>
                    </td>
                </tr>
                <tr>
                    <td >
                        <p>Chennai</p>
                    </td>
                    <td >
                        <p>
                            044-22313282,&nbsp;<br>
                            22313200,&nbsp;22313201
                        </p>
                    </td>
                   
                    <td class="style20" height="30" id="td_cab0_15" valign="top" width="240">
                        <p>
                            <a href="mailto:nsh.chennai@indiapost.gov.in">nsh.chennai@indiapost.gov.in</a>
                            <a href="mailto:admn.spcc.chennai@gmail.com">admn.spcc.chennai@gmail.com</a>
                        </p>
                    </td>
                </tr>
                <tr>
                    <td >
                        <p>Kolkata</p>
                    </td>
                    <td >
                        <p>033 2212 0476</p>
                    </td>
                   
                    <td >
                        <p>
                            <a href="mailto:spc.kolkata@indiapost.gov.in">spc.kolkata@indiapost.gov.in</a>
                        </p>
                    </td>
                </tr>
                <tr>
                    <td >
                        <p>Bangalore</p>
                    </td>
                    <td >
                        <p>080 2286 7302 ,22861510, 22861435</p>
                    </td>
                 
                    <td >
                        <p>
                            <a href="mailto:spc.bangalore@indiapost.gov.in">spc.bangalore@indiapost.gov.in</a>
                        </p>
                    </td>
                </tr>
                <tr>
                    <td>
                        <p>Hyderabad</p>
                    </td>
                    <td height="30" id="td_cab0_25" valign="top">
                        <p>040 2346 3925</p>
                    </td>
                 
                    <td >
                        <p>
                            <a href="mailto:spc.hyderabad@indiapost.gov.in">spc.hyderabad@indiapost.gov.in</a>
                        </p>
                    </td>
                </tr>
                <tr>
                    <td >
                        <p>Ahmedabad</p>
                    </td>
                    <td >
                        <p>1800 233 7999</p>
                    </td>
                   
                    <td>
                        <p>
                            <a href="mailto:nsh.ahmedabad@indiapost.gov.in">nsh.ahmedabad@indiapost.gov.in</a>
                        </p>
                    </td>
                </tr>
                <tr>
                    <td >
                        <p>Pune</p>
                    </td>
                    <td >
                        <p>020 2612 1570</p>
                    </td>
                   
                    <td >
                        <p>
                            <a href="mailto:spc.pune@indiapost.gov.in">spc.pune@indiapost.gov.in</a>
                        </p>
                    </td>
                </tr>
                <tr>
                    <td >
                        Kochi
                    </td>
                    <td>
                        0484 235 3486
                    </td>
                 
                    <td>
                        <p>
                            <a href="mailto:spckochi@gmail.com">spckochi@gmail.com</a>
                        </p>
                    </td>
                </tr>
            </tbody>
    </tbody>
    </table>
    </div>    
	  </div>
      </div>
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