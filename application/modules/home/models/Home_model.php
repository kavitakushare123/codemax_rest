<?php

//error_reporting(0);

class Home_model extends CI_Model {

    function __construct() {
        parent::__construct();
    }
    
   
	public function login_insert($username,$Password,$email)	
	{
		$data = array(
		
			'username'=> $username,
			'pass'=>$Password,
			'email'=>$email
			
		);
		//print_r($data);die;
		 $this->db->insert('users', $data);
		 return true;
    }
    
    public function product_insert($var)	
	{
		$data = array(
		
			'pname'=> $var['pname'],
			'description'=>$var['desc'],
            'amount'=>$var['amount'],
			'quantity'=>$var['quantity'],
			'images'=>$var['img'],
			'userid'=>$var['id'],
			
		);
		 $this->db->insert('product', $data);
	}
	function agent_login($username, $password )
	{
		
		$pass=trim($password);
		$this->db->select('tbl_login.*,tbl_agent.status,tbl_agent.country,tbl_credit.credit_limit');
        $this->db->from('tbl_login');
		$this->db->join('tbl_agent','tbl_agent.user_id = tbl_login.id','inner');
		$this->db->join('tbl_credit','tbl_agent.user_id = tbl_credit.user_id','inner');
        $this->db->where('tbl_login.username', $username);
        $this->db->where('tbl_login.password', md5($pass));
        $sel = $this->db->get();
        return $sel->row();
	}

	 
	function  username_exist($username)
	{
		$this->db->select('*');
		$this->db->from('tbl_agent');
		$this->db->where('username', trim($username));
	//	$this ->db -> where('id != ', $userId);
		$query = $this->db->get();
		if($query -> num_rows() == 1)
		{
			return $query->row();
		}
		else
		{
			return false;
		}
		
	}
	function  email_exist($email)
	{
		$this->db->select('*');
		$this->db->from('tbl_agent');
		$this->db->where('email', $email);
		$query = $this->db->get();
		if($query -> num_rows() == 1)
		{
			return $query->row();
		}
		else
		{
			return false;
		}
		
	}
	public function get_mail($id){
		
		$this->db->select('*');
        $this->db->from('email_detail');
        $this->db->where('id', $id);
        $sel = $this->db->get();
        return $sel->row();
	}
	
    
    public function user_login($name, $pass) {
        $this->db->select('*');
        $this->db->from('users');
        $this->db->where('username', $name);
        if($pass != '') {
            $this->db->where('pass', $pass);
        }
        $sel = $this->db->get();
        return $sel->row();
    }
    
   
 	function get_product() {
        $select_query = "select * from product order by id desc";
        $sel = $this->db->query($select_query);
        if ($sel->num_rows() > 0) {
            $res = $sel->result();
            return $res;
        } else {
            return false;
        }
    }
	
   
}

