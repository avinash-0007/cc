<?php class Covid_model extends CI_Model {

    var $title   = '';
    var $content = '';
    var $date    = '';

    function __construct()
    {
        // Call the Model constructor
        parent::__construct();
    }
	
	function getcovidcasesworld($tdate)
	{
		$this->db->select('*');
		$this->db->from("`covid_countries`");		
		$this->db->where('total_cases_1Mpop!=',"") ;
		$this->db->where('country!=',"World") ;	
		$this->db->where('corona_date',"$tdate") ;		 
		$query = $this->db->get();	
	
		$count=$query->num_rows();
		if($count>0)
		{			
			return $query->result_array();
		}
		else
		{
			return false;
		}
	}	
	
	function getcovidcasescountry($country)
	{
		$this->db->select('*');
		$this->db->from("`covid_countries`");		
		$this->db->where('total_cases_1Mpop!=',"") ;
		$this->db->where('country',"$country") ;	
		$this->db->order_by("id", "desc");
		$query = $this->db->get();	
	
		$count=$query->num_rows();
		if($count>0)
		{			
			return $query->result_array();
		}
		else
		{
			return false;
		}
	}	
	
	function getcovidcasesus()
	{
		$this->db->select('*');
		$this->db->from("`covid_us`");			
		
		$query = $this->db->get();	
	
		$count=$query->num_rows();
		if($count>0)
		{			
			return $query->result_array();
		}
		else
		{
			return false;
		}
	}	
	
	function getdatewisecovidcases()
	{
		$this->db->select('*');
		$this->db->from("`covid_cases_time_series`");		
			 
		$query = $this->db->get();	
	
		$count=$query->num_rows();
		if($count>0)
		{			
			return $query->result_array();
		}
		else
		{
			return false;
		}
	}	
	
	
	function getstates()
	{
		$this->db->select('*');
		$this->db->from("`covid_statewise`");		
		$this->db->order_by("active", "desc");	 
		$query = $this->db->get();	
	
		$count=$query->num_rows();
		if($count>0)
		{			
			return $query->result_array();
		}
		else
		{
			return false;
		}
	}	
	function getdistrictbystates($statename)
	{
		$this->db->select('*');
		$this->db->from("`covid_district`");		
		$this->db->where('state',"$statename") ;	 
		$query = $this->db->get();	
		
		$count=$query->num_rows();
		if($count>0)
		{			
			return $query->result_array();
		}
		else
		{
			return false;
		}
	}	
	function getdistrictdata($statename,$district)
	{
		$this->db->select('*');
		$this->db->from("`covid_district`");		
		$this->db->where('state',"$statename") ;	
		$this->db->where('district',"$district") ;	
		$query = $this->db->get();	
		
		$count=$query->num_rows();
		if($count>0)
		{			
			return $query->row();
		}
		else
		{
			return false;
		}
	}	
	function getuniquestates()
	{
		$this->db->select('*');
		$this->db->from("`covid_district`");
		 $this->db->group_by('state');
		$query = $this->db->get();	
		
		$count=$query->num_rows();
		if($count>0)
		{			
			return $query->result_array();
		}
		else
		{
			return false;
		}
	}
	
}
?>