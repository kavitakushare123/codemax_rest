<?php

//error_reporting(0);
//error_reporting(e_all);
defined('BASEPATH') OR exit('No direct script access allowed');
require APPPATH . 'libraries/REST_Controller.php';
require APPPATH . 'libraries/ImplementJWT.php';

class Home extends REST_Controller {

    function __construct() {
        parent::__construct();

        $this->impjwt = new ImplementJWT();

        $this->load->helper('url');
        $this->load->library('session');
        $this->load->model('home/Home_model');
        if (isset($_SERVER['HTTP_ORIGIN'])) {
            header("Access-Control-Allow-Origin: {$_SERVER['HTTP_ORIGIN']}");
            header('Access-Control-Allow-Credentials: true');
            header('Access-Control-Max-Age: 86400');    // cache for 1 day
        }
        if ($_SERVER['REQUEST_METHOD'] == 'OPTIONS') {

            if (isset($_SERVER['HTTP_ACCESS_CONTROL_REQUEST_METHOD']))
                header("Access-Control-Allow-Methods: POST, POST, OPTIONS");

            if (isset($_SERVER['HTTP_ACCESS_CONTROL_REQUEST_HEADERS']))
                header("Access-Control-Allow-Headers: {$_SERVER['HTTP_ACCESS_CONTROL_REQUEST_HEADERS']}");

            exit(0);
        }
    }

   
   
    public function registration_post() {
        $postdata = file_get_contents("php://input");
        if (isset($postdata)) {
            $request = json_decode($postdata);
            $request = (array) $request;
            $user = $this->Home_model->login_insert($request['username'], md5($request['password']), $request['email']);
        }
        if ($user) {
            $data = array('message' => "Successfully Registered .Please Login here and continue");
            return $this->response($data, REST_Controller::HTTP_OK);
            exit();
        }
        else
             return $this->response("Error", REST_Controller::HTTP_OK);
    }


    public function product_post() {
        $postdata = file_get_contents("php://input");
        if (isset($postdata)) {
            $request = json_decode($postdata);
            $request = (array) $request;

            $folderPath = APPPATH."../upload/";
            $image_parts = explode(";base64,", $request['fileSource']);
            $image_type_aux = explode("image/", $image_parts[0]);
            $image_type = $image_type_aux[1];
            $image_base64 = base64_decode($image_parts[1]);
            $fname = uniqid() . '.png';
            $file = $folderPath .$fname;
            $request['img']  = $fname;
            file_put_contents($file, $image_base64);

            $userdata =$this->get_token();
            $request['id']= $userdata['id'];
            $prod = $this->Home_model->product_insert($request);
            $data = array('message' => "Product added successfully.");
            return $this->response($data, REST_Controller::HTTP_OK);
            exit();
        }
    }

    public function get_token()
    {
        $recived_token = $this->input->request_headers('Authorization');
       /// print_r($recived_token['Authorization']); exit();
        try{
            $jwdData = $this->impjwt->DecodeToken($recived_token['Authorization']);
           // echo json_decode($jwdData);
           return $jwdData;
        }
        catch (Exception $e)
        {
            http_response_code('401');
            echo json_encode(array("status"=>false, "message"=>$e->getMessage()));
        }

    }
    public function user_login_post() {
        $postdata = file_get_contents("php://input");
        if (isset($postdata)) {
            $request = json_decode($postdata);
            $request = (array) $request;
        }
        $result = $this->Home_model->user_login($request['user_name'], MD5($request['password']));
        if (isset($result->id) && $result->id != '') {
            //allow to login     
            $token['id'] = $result->id;  //From here
            $token['username'] = $result->username;
            $date = new DateTime();

            $output['token'] =  $this->impjwt->GenerateToken($token);
            return $this->response($output, REST_Controller::HTTP_OK);




           /* $res = array("msg" => "Login success",
                "userid" => $result->id,
                "username" => $result->username,
                "token" => rand(1000, 9000)
            );
            return $this->response($res, 200);*/
        } else {
            //do not allow to login.
            // $this->session->set_flashdata('msg','<p>Invalid Username and Password</p>');
            $res = array("msg" => "Invalid credentials",
                "userid" => '',
                "username" => '',
                "token" => ''
            );
            return $this->response($res, 200);
        }
    }
    public function product_list_get() {

        $product = $this->Home_model->get_product();
        return $this->response($product, 200);
    }
    



}
