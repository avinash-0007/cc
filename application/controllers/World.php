<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class World extends CI_Controller {

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
/*	public function index()
	{
		$data['titlehtml']='Speed Post Tracking';
		$data['descriptionhtml']='Speed  Post Tracking  is a speed post tracking system. You can track India Speed Post parcel.';
		
		$this->load->view('homeHTML',$data);
	}*/
	public function index()
	{
		
		
		$data['descriptionhtml']='Coronavirus live tracking provides the number of confirmed cases, recovered patients,
tests and death toll due to the COVID-19 coronavirus.Live statistics of covid-19 in the world.  
Coronavirus counter provides new cases, death.We provide coronavirus historical data, charts, graph, tips and news updates.';
		$datetoday=date("Y-m-d");
		$data['covidworld']=$this->Covid_model->getcovidcasesworld($datetoday);
		$data['maxrows']=$maxrows=count($data['covidworld'])-1;
		$data['titlehtml']='Coronavirus Live Update : '.$data['covidworld'][$maxrows]['total_cases'].' Corona Cases  and '.$data['covidworld'][$maxrows]['total_deaths'].' Deaths from COVID-19';
		//echo "<pre>";
		//print_r($data['covidworld']);
		//die;
		$data['states']=$this->Covid_model->getstates();
		$this->load->view('worldHTML',$data);
	}
	
		public function country()
	{
			$total =$data['totalview']= $this->uri->total_segments();
			
			if($total==3){
				$country=urldecode($this->uri->segment(3)); 
				$data['covidus']=array();
				if($country=='USA'){
				$data['covidus']=$this->Covid_model->getcovidcasesus();	
				}	
				
				$data['countryname']=$countryname=str_replace("-"," ",$country);
			
			
		$data['descriptionhtml']='Coronavirus live tracking provides the number of confirmed cases, recovered patients,
tests and death toll due to the COVID-19 coronavirus.Live statistics of covid-19 in the world.  
Coronavirus counter provides new cases, death.We provide coronavirus historical data, charts, graph, tips and news updates.';
		$datetoday=date("Y-m-d");
		$data['covidcountry']=$this->Covid_model->getcovidcasescountry($countryname);
		
		//print_r($data['covidcountry']); die;
		$data['titlehtml']='Coronavirus Live Update -'.$countryname.' : '.$data['covidworld'][0]['total_cases'].' Corona Cases  and '.$data['covidworld'][0]['total_deaths'].' Deaths from COVID-19 in '.$countryname.'.';
	
		$data['states']=$this->Covid_model->getstates();
		$this->load->view('countryHTML',$data);
		}
	}
	
	
}
