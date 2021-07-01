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
		
<style>
#ppBody
{
    font-size:11pt;
    width:100%;
    margin:0 auto;
    text-align:justify;
}


.ppConsistencies
{
    display:none;
}
</style>
	
    </head>
    <body>
       <?php include ('common/nav.php'); ?>
        <main id="body">
            
        <section class="content-wrapper">
  

<h1> Speedposts.in Privacy Policy</h1>
<div id='ppBody'>
    <div class='ppConsistencies'>
        <div class='col-2'>
            <div class="quick-links text-center">Information Collection</div>
        </div>
        <div class='col-2'>
            <div class="quick-links text-center">Information Usage</div>
        </div>
        <div class='col-2'></div>
        <div class='col-2'></div>
        <div class='col-2'>
            <div class="quick-links text-center">3rd Party Disclosure</div>
        </div>
        <div class='col-2'>
            <div class="quick-links text-center">3rd Party Links</div>
        </div>
        <div class='col-2'></div>
        <div class='col-2'></div>
        <div class='col-2'></div>
    </div>
    <div style='clear:both;height:10px;'></div>
    <div class='ppConsistencies'>
        <div class='col-2'>
            <div class="col-12 quick-links2 gen-text-center">Google AdSense</div>
        </div>
        <div class='col-2'>
            <div class="col-12 quick-links2 gen-text-center coppa-pad"> COPPA </div>
        </div>
        <div class='col-2'>
            <div class="quick-links2 gen-text-center">Our Contact Information<br></div>
        </div>
    </div>
    <div style='clear:both;height:10px;'></div>
    <div class='innerText'>This privacy policy has been compiled to better serve those who are concerned with how their 'Personally Identifiable Information' (PII) is being used online. PII, as described in US privacy law and information security, is information that can be
        used on its own or with other information to identify, contact, or locate a single person, or to identify an individual in context. Please read our privacy policy carefully to get a clear understanding of how we collect, use, protect or otherwise
        handle your Personally Identifiable Information in accordance with our website.<br></div><span id='infoCo'></span><br>
    <div class='grayText'><strong>What personal information do we collect from the people that visit our blog, website or app?</strong></div><br />
    <div class='innerText'>When ordering or registering on our site, as appropriate, you may be asked to enter your or other details to help you with your experience.</div><br>
    <div class='grayText'><strong>When do we collect information?</strong></div><br />
    <div class='innerText'>We collect information from you when you fill out a form or enter information on our site.</div><br> <span id='infoUs'></span><br>
    <div class='grayText'><strong>How do we use your information? </strong></div><br />
    <div class='innerText'> We may use the information we collect from you when you register, make a purchase, sign up for our newsletter, respond to a survey or marketing communication, surf the website, or use certain other site features in the following ways:<br><br></div>
    <span
        id='trDi'></span><br>
        <div class='grayText'><strong>Third-party disclosure</strong></div><br />
        <div class='innerText'>We do not sell, trade, or otherwise transfer to outside parties your Personally Identifiable Information.</div><span id='trLi'></span><br>
        <div class='grayText'><strong>Third-party links</strong></div><br />
        <div class='innerText'>Occasionally, at our discretion, we may include or offer third-party products or services on our website. These third-party sites have separate and independent privacy policies. We therefore have no responsibility or liability for the content
            and activities of these linked sites. Nonetheless, we seek to protect the integrity of our site and welcome any feedback about these sites.</div><span id='gooAd'></span><br>
        <div class='blueText'><strong>Google</strong></div><br />
        <div class='innerText'>Google's advertising requirements can be summed up by Google's Advertising Principles. They are put in place to provide a positive experience for users. https://support.google.com/adwordspolicy/answer/1316548?hl=en <br><br></div>
        <div class='innerText'>We use Google AdSense Advertising on our website.</div>
        <div class='innerText'><br>Google, as a third-party vendor, uses cookies to serve ads on our site. Google's use of the DART cookie enables it to serve ads to our users based on previous visits to our site and other sites on the Internet. Users may opt-out of the use
            of the DART cookie by visiting the Google Ad and Content Network privacy policy.<br></div>
        <div class='innerText'><br><strong>We have implemented the following:</strong></div><br>
        <div class='innerText'>We, along with third-party vendors such as Google use first-party cookies (such as the Google Analytics cookies) and third-party cookies (such as the DoubleClick cookie) or other third-party identifiers together to compile data regarding user
            interactions with ad impressions and other ad service functions as they relate to our website. </div>
        <div class='innerText'><br><strong>Opting out:</strong><br>Users can set preferences for how Google advertises to you using the Google Ad Settings page. Alternatively, you can opt out by visiting the Network Advertising Initiative Opt Out page or by using the Google
            Analytics Opt Out Browser add on.</div><span id='coppAct'></span><br>
        <div class='blueText'><strong>COPPA (Children Online Privacy Protection Act)</strong></div><br />
        <div class='innerText'>When it comes to the collection of personal information from children under the age of 13 years old, the Children's Online Privacy Protection Act (COPPA) puts parents in control. The Federal Trade Commission, United States' consumer protection
            agency, enforces the COPPA Rule, which spells out what operators of websites and online services must do to protect children's privacy and safety online.<br><br></div>
        <div class='innerText'>We market to
            <div class='innerText'>We do not collect information from children under 13</div> children under 13.</div>
        <div class='innerText'>Do we let third-parties, including ad networks or plug-ins collect PII from children under 13?</div>
        <div class='innerText'>No</div>
        <div class='innerText'><br><strong>In order to remove your child's information please contact the following personnel: </strong></div>
        <div class='innerText'><br><strong>We adhere to the following COPPA tenants: </strong></div>
        <div class='innerText'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <strong>&bull;</strong> Parents can review, delete, manage or refuse with whom their child's information is shared through contacting us directly.</div> or contacting us directly.</div><br><span id='canSpam'></span><br>
<div
    class='blueText'><strong>CAN SPAM Act</strong></div><br />
    <div class='innerText'>The CAN-SPAM Act is a law that sets the rules for commercial email, establishes requirements for commercial messages, gives recipients the right to have emails stopped from being sent to them, and spells out tough penalties for violations.<br><br></div>
    <div
        class='innerText'><strong>We collect your email address in order to:</strong></div>
        <div class='innerText'><br><strong>To be in accordance with CANSPAM, we agree to the following:</strong></div>
        <div class='innerText'><strong><br>If at any time you would like to unsubscribe from receiving future emails, you can email us at</strong></div> and we will promptly remove you from <strong>ALL</strong> correspondence.</div><br><span id='ourCon'></span><br>
        <div class='blueText'><strong>Contacting Us</strong></div><br />
        <div class='innerText'>If there are any questions regarding this privacy policy, you may contact us using the information below.<br><br></div>
        <div class='innerText'>speedposts.in</div>
        <div class='innerText'><br>Last Edited on <?php echo date('Y-m-d');?></div>
        </div>

  	
        </section>

        </main>
        <?php include ('common/footer.php'); ?>
        
            
    </body>


</html>