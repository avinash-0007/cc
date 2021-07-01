<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */

	public function index()
	{
		
		$data['descriptionhtml']='Coronavirus Live Update India  is a tool to track current updated corona patient in india .We provide detail about each city and subcity Covid-19 Patients';
		$data['datewisestates']=$this->Covid_model->getdatewisecovidcases();
		$data['states']=$this->Covid_model->getstates();
		$data['uniquestates']=$this->Covid_model->getuniquestates();
		$data['titlehtml']='Coronavirus (Live) Update India : '.$data['states'][0]['confirmed'].' Corona Cases in India';
		$this->load->view('homeHTML',$data);
	}
	
	public function privacypolicy()
	{
		$data['states']=$this->Covid_model->getstates();
		$data['titlehtml']='Privacy Policy-Coronavirus Live Update | Coronavirus India';
		$data['descriptionhtml']='Coronavirusliveupdate.in is a best,secure and reliable online service to track coronavirus cases in india. It also provide all the important details related to coronavirus like coronavirus symptoms, corona virus map, coronavirus news, corona virus vaccine.';
		$this->load->view('privacypolicyHTML',$data);
	}
	public function aboutus()
	{
		$data['states']=$this->Covid_model->getstates();
		$data['states']=$this->Covid_model->getstates();
		$data['titlehtml']='About Us-Coronavirus Live Update  | Coronavirus India';
		$data['descriptionhtml']='Coronavirusliveupdate.in is a best,secure and reliable online service to track coronavirus cases in india. It also provide all the important details related to coronavirus like coronavirus symptoms, corona virus map, coronavirus news, corona virus vaccine.';
		$this->load->view('aboutusHTML',$data);
	}
	public function contactus()
	{
		$data['states']=$this->Covid_model->getstates();
		$data['titlehtml']='Contact Us-Covid-19 Count Tracker | Corona Cases India';
		$data['descriptionhtml']='Get in touch with our staff for any query and feedback using our contact us form .';
		$data['msg']='';
		if($_POST){
		$name=$_REQUEST['name'];		
		$email=$_REQUEST['email'];
		$msg=$_REQUEST['msg'];
		
    if (($name=="")||($email=="")||($msg=="") )
        {
		$data['msg']="All fields are required, please fill <a href=\"\">the form</a> again.";
		
	    }
    else{		
	    //$from="From: $name<$email>\r\nReturn-path: $email";
        $subject="Covid19-Message sent using your contact form";
		$message="Name : $name <br> Email : $email <br> Message : $msg <br> ";
		$headers = "From: " . strip_tags($email) . "\r\n";
		$headers .= "Reply-To: ". strip_tags($email) . "\r\n";
		$headers .= "MIME-Version: 1.0\r\n";
		$headers .= "Content-Type: text/html; charset=UTF-8\r\n";
				
		mail("no1kws@gmail.com", $subject, $message,$headers);
		$data['msg']="We have received your message and we will reply by email as soon as possible.";
	
	    }
		}
		
		$this->load->view('contactusHTML',$data);
	}
	public function coronavirus()
	{
			$total =$data['totalview']= $this->uri->total_segments();
			if($total==2){
				$statename2=$data['state']=urldecode($this->uri->segment(2)); 
				$statename=str_replace("-"," ",ucwords($statename2));
			
				$data['coronadistrict']=$this->Covid_model->getdistrictbystates(ucwords($statename));	
				
				$statename1=$statename;
				$data['titlehtml']=' Corona Virus Live Update in '.$statename1.' -Corona Virus Tracker  | Corona Virus India';
				$data['descriptionhtml']='Corona Virus in '.$statename1.' district for Corona Virus Cases in India and Corona Virus .'.$statename1.'   have detail count of corona cases .  You can find the Confirmed , Active , Death and Recoverd corona cases in '.$statename1.' , India';
				$data['keywordhtml']='All Corona Virus Cases in '.$statename1.' ,'.$statename1.' Corona Virus Cases,'.$statename1.'  Corona Virus Tracker ,'.$statename1.'  Corona Virus Active Cases,'.$statename1.'Covid 19 Cases ,'.$statename1.'  Covid19 Live Tracker, '.$statename1.' Covid19 Live Update, '.$statename1.'  Corona Virus Live Update, Track Corona Virus in '.$statename1.' ,Coronavirus in india,All Corona Virus Cases in '.$statename1.'';
				
				$data['uniquestates']=$this->Covid_model->getuniquestates();
				$data['states']=$this->Covid_model->getstates();
				$this->load->view('coronabystatesHTML',$data);
				
			}else if($total==3){
				 $statename2=$data['state']=urldecode($this->uri->segment(2));
				 $statename=str_replace("-"," ",strtoupper($statename2));
				 $district2=$data['district']=urldecode($this->uri->segment(3));
				 $district=str_replace("-"," ",strtoupper($district2));
				 $data['covidbranches']=$this->Covid_model->getdistrictdata(($statename2),ucwords($district));	
					$data['coronadistrict']=$this->Covid_model->getdistrictbystates(ucwords($statename));	
				$data['titlehtml']=' Corona Virus Live Update in '.$district.' -Corona Virus Tracker  | Corona Virus India';
				$data['descriptionhtml']='Corona Virus in '.$district.' district for Corona Virus Cases in India and Corona Virus .'.$district.'   have detail count of corona cases .  You can find the Confirmed , Active , Death and Recoverd corona cases in '.$district.' , India';
				$data['keywordhtml']='All Corona Virus Cases in '.$district.' ,'.$district.' Corona Virus Cases,'.$district.'  Corona Virus Tracker ,'.$district.'  Corona Virus Active Cases,'.$district.'Covid 19 Cases ,'.$district.'  Covid19 Live Tracker, '.$district.' Covid19 Live Update, '.$district.'  Corona Virus Live Update, Track Corona Virus in '.$district.' ,Coronavirus in india,All Corona Virus Cases in '.$district.'';
				
				$data['states']=$this->Covid_model->getstates();
				$this->load->view('coronadetailsHTML',$data);
			}
		}
	
	
}
