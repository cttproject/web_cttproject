<?php
defined('BASEPATH') OR exit('No direct script access allowed');

require(APPPATH . '/libraries/REST_Controller.php');

class Web_service extends REST_Controller {

	protected $api_key = "226792b977667175299f64d3b3a3a91f95b8a6b6";

	// http://localhost/webService/web_service/insert_user?key=226792b977667175299f64d3b3a3a91f95b8a6b6&user_name=ekk&salary=5000&gender=M
	
	public function index_get()
	{
		$this->load->model("model_web_service");
		$data = $this->model_web_service->get_user();


		// pre(json_encode($data));
		$result =json_encode($data);
		
		// pre($result);
		$this->output->set_output($result);
		
		// $this->response($result);
	}


	// public function get_claim_get(){

	// 	$get = $this->input->get();
	// 	$result = "";

	// 	if(!empty($get)){

	// 		if(!empty($get["param"])) {
	// 			$this->load->model("model_web_service");
	// 			$data = $this->model_web_service->get_claim();

	// 			$result = json_encode($data); 
	// 		}else{
				
	// 			$test = array(
	// 				"respon" => "parameter bukan param"
	// 				);

	// 			$result = json_encode($test);
	// 		}
			
	// 		// $result = json_encode($data);
	// 		// $result = json_encode($get);
	// 	}

		
	// 	$this->output->set_content_type('application/json')->set_output($result);

	// }

/*
	public function test_post(){

		$post = $this->input->post();

		$get = $this->input->get();


		$abc = "tidak ada";
		
		if(isset($post)){
			if(!empty($post)){

				$abc = "bisa";
			}else{

				$abc = "ada tapi param kosong";	
			}
		}

		if(!empty($get)){
			$abc = "masuk get";
		}

			$test = array(
				"status"	=> $abc
				);
		


		$result = json_encode($test);
		$this->output->set_content_type('application/json')->set_output($result);

	}
*/


	

	// public function get_claim_param_post(){

	// 	$post = $this->input->post();

	// 	$parameter_data = array(
	// 		// "param"	=> !empty($post["param"])?$post["param"]:""
	// 		"param"	=> $post["param"]
	// 		);


	// 	$this->load->model("model_web_service");
	// 	$data = $this->model_web_service->get_claim($parameter_data);

	// 	$result = json_encode($data);

	// 	// if(!empty($post)){
	// 	// 	$string = "param: {$post['param']}";
	// 	// 	echo $string;
	// 	// }


	// 	$this->output->set_content_type('application/json')->set_output($result);

	// }

	// public function getUserWithParam_get(){

	// 	$get = $this->input->get();

	// 	if(!empty($get)){

			
	// 		// pre("asd");
	// 		$key = $get["key"];

	// 		if($key!=$this->api_key){ 
	// 			echo "invalid api key"; exit;
	// 		}

	// 		$user_name = !empty($get["user_name"])?$get["user_name"]:"";
	// 		$salary = !empty($get["salary"])?$get["salary"]:"";;
	// 		$gender = !empty($get["gender"])?$get["gender"]:"";;

	// 		if(!empty($user_name) && !empty($salary) && !empty($gender)){

	// 			$data = array(
	// 				"user_name" => $user_name,
	// 				"salary"	=> $salary,
	// 				"gender"	=> $gender
	// 			);

	// 			pre($get);

	// 			$this->load->model("model_web_service");
	// 			$data = $this->model_web_service->get_user();
	// 		}else{
				
	// 			echo "test";
	// 		}
			


	// 	}else{

	// 		$error = array(
	// 			"text" => "error 500",
	// 			"type" => "danger"
	// 			);


	// 		return $this->output->set_content_type("application/json")->set_output(json_encode($error));
	// 	}

		

	// }

	// public function insert_user_get(){

	// 	$get = $this->input->get();

	// 	if(!empty($get)){

			
	// 		// pre("asd");


	// 		$key = $get["key"];

	// 		if($key!=$this->api_key){ 
	// 			echo "invalid api key"; exit;
	// 		}

	// 		$user_name = !empty($get["user_name"])?$get["user_name"]:"";
	// 		$salary = !empty($get["salary"])?$get["salary"]:"";;
	// 		$gender = !empty($get["gender"])?$get["gender"]:"";;

	// 		if(!empty($user_name) && !empty($salary) && !empty($gender)){

	// 			$data = array(
	// 				"user_name" => $user_name,
	// 				"salary"	=> $salary,
	// 				"gender"	=> $gender
	// 			);

	// 			// pre($data);

	// 			$this->load->model("model_web_service");
	// 			$return = $this->model_web_service->insert_user($data);

	// 			echo $return;
	// 		}else{
				
	// 			echo "test";
	// 		}
			


	// 	}else{

	// 		$error = array(
	// 			"text" => "error 500",
	// 			"type" => "danger"
	// 			);


	// 		return $this->output->set_content_type("application/json")->set_output(json_encode($error));
	// 	}


	// }


/*
	public function test_get(){

		//next example will insert new conversation
			$service_url = 'http://localhost/webService/web_service/insert_new';
			$curl = curl_init($service_url);
			$curl_post_data = array(
				"user_name" => "han",
				"salary"	=> "9000",
				"gender"	=>	"M"
			);
			curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
			curl_setopt($curl, CURLOPT_POST, true);
			curl_setopt($curl, CURLOPT_POSTFIELDS, $curl_post_data);
			$curl_response = curl_exec($curl);
			if ($curl_response === false) {
			    $info = curl_getinfo($curl);
			    curl_close($curl);
			    die('error occured during curl exec. Additioanl info: ' . var_export($info));
			}
			curl_close($curl);
			$decoded = json_decode($curl_response);
			if (isset($decoded->response->status) && $decoded->response->status == 'ERROR') {
			    die('error occured: ' . $decoded->response->errormessage);
			}
			echo 'response ok!';
			


	}

*/

	public function insert_new_post(){

			$post = $this->input->post();

			// pre($post);
			$user_name = !empty($post["username"])?$post["username"]:"";
			$password = !empty($post["password"])?$post["password"]:"";
			$email = !empty($post["email"])?$post["email"]:"";

			if(!empty($user_name) && !empty($salary) && !empty($gender)){

				$data = array(
					"username" => $user_name,
					"password"	=> $password,
					"email"	=> $email
				);

				// pre($data);

				$this->load->model("model_web_service");
				$return = $this->model_web_service->insert_user($data);

				echo $return;
			}else{
				
				echo "test";
			}
	}


	// public function delete_user_post(){

	// 			$post = $this->input->post();

	// 			// pre($post);
	// 			$user_name = !empty($post["username"])?$post["username"]:"";
	// 			$password = !empty($post["password"])?$post["password"]:"";
	// 			$email = !empty($post["email"])?$post["email"]:"";

	// 			if(!empty($user_name) && !empty($salary) && !empty($gender)){

	// 				$data = array(
	// 					"username" => $user_name,
	// 					"password"	=> $password,
	// 					"email"	=> $email
	// 				);

	// 				// pre($data);

	// 				$this->load->model("model_web_service");
	// 				$return = $this->model_web_service->insert_user($data);

	// 				echo $return;
	// 			}else{
					
	// 				echo "test";
	// 			}
	// 	}

/*

	public function test_insert_claim_get(){

		//next example will insert new conversation
			$service_url = 'http://localhost/webService/web_service/insert_claim';
			$curl = curl_init($service_url);
			$curl_post_data = array(
				"claim_date" => "Y-m-d H:i:s",
				"activity_id"	=> "",
				"gender"	=>	"M"
			);
			curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
			curl_setopt($curl, CURLOPT_POST, true);
			curl_setopt($curl, CURLOPT_POSTFIELDS, $curl_post_data);
			$curl_response = curl_exec($curl);
			if ($curl_response === false) {
			    $info = curl_getinfo($curl);
			    curl_close($curl);
			    die('error occured during curl exec. Additioanl info: ' . var_export($info));
			}
			curl_close($curl);
			$decoded = json_decode($curl_response);
			if (isset($decoded->response->status) && $decoded->response->status == 'ERROR') {
			    die('error occured: ' . $decoded->response->errormessage);
			}
			echo 'response ok!';
			
	}
*/

	// public function insert_claim_post(){

	// 	// $post = $this->input->post();
		
	// 	$post = json_decode(trim(file_get_contents('php://input')), true);

	// 	$return_message = array();

	// 	if(!empty($post)){

	// 		if(!empty($post["key"]) && $post["key"]==$this->api_key){

	// 			if(empty($post["activity_id"]) || empty($post["employee_number"])){

	// 				$return_message["error"] = "activity_id and employee_number can't be null";

	// 			}else{

	// 				$date_time_now = date("Y-m-d H:i:s");

	// 				$data = array(
	// 					"claim_date"		=>	!empty($post["claim_date"])?$post["claim_date"]:"",
	// 					"activity_id"		=>	!empty($post["activity_id"])?$post["activity_id"]:"",
	// 					"employee_number"	=>	!empty($post["employee_number"])?$post["employee_number"]:"",
	// 					"toll"				=>	!empty($post["toll"])?$post["toll"]:"",
	// 					"milleage"			=>	!empty($post["milleage"])?$post["milleage"]:"",
	// 					"parking"			=>	!empty($post["parking"])?$post["parking"]:"",
	// 					"taxi_from"			=>	!empty($post["taxi_from"])?$post["taxi_from"]:"",
	// 					"taxi_to"			=>	!empty($post["taxi_to"])?$post["taxi_to"]:"",
	// 					"taxi_time"			=>	!empty($post["taxi_time"])?$post["taxi_time"]:"",
	// 					"taxi_voucher_no"	=>	!empty($post["taxi_voucher_no"])?$post["taxi_voucher_no"]:"",
	// 					"taxi_amount"		=>	!empty($post["taxi_amount"])?$post["taxi_amount"]:"",
	// 					"dinner"			=>	!empty($post["dinner"])?$post["dinner"]:"",
	// 					"status"			=>	!empty($post["status"])?$post["status"]:"",
	// 					// "created_by"		=>	!empty($post["created_by"])?$post["created_by"]:"",
	// 					// "creation_date"		=>	!empty($post["creation_date"])?$post["creation_date"]:"",
	// 					"creation_date"		=>	$date_time_now,
	// 					// "last_update_by"	=>	!empty($post["last_update_by"])?$post["last_update_by"]:"",
	// 					// "last_update_date"	=>	!empty($post["last_update_date"])?$post["last_update_date"]:"",
	// 					"last_update_date"	=>	$date_time_now,
	// 					// "last_update_login"	=>	!empty($post["last_update_login"])?$post["last_update_login"]:""
	// 					);

	// 				// pre($date_time_now);
	// 				$this->load->model("model_web_service");
	// 				$return = $this->model_web_service->insert_trx_claim($data);

	// 				$return_message["notes"] = $return;
	// 			}


				
	// 		}else{

	// 			$return_message["error"] = "invalid api key";
	// 		}


	// 	}else{

	// 		$return_message["error"] = "data not found";

	// 	}

	// 	return $this->output->set_content_type("application/json")->set_output(json_encode($return_message));

	// }


	// public function get_claim_with_param_get(){

	// 	$get = $this->input->get();

	// 	$return_message = array();
	// 	$data = array();

	// 	if(!empty($get)){

	// 			if(!empty($get["batch_id"])){

	// 				$data["batch_id"] = $get["batch_id"];
					
	// 				$this->load->model("model_web_service");
	// 				$result = $this->model_web_service->get_claim($data);

	// 				$return_message = $result;
	// 			}else{

	// 				$return_message = "parameter isn't found";
	// 			}


	// 	}else{

	// 		$return_message = "parameter isn't found";

	// 	}

		

	// 	return $this->output->set_content_type("application/json")->set_output(json_encode($return_message));
	// }




	public function update_username_byid_post(){


		$post = $this->input->post();

		

		$return_message = array();

		if(!empty($post)){

			if(!empty($post["key"]) && $post["key"]==$this->api_key){

				if(empty($post["username"]) && empty($post["username_where"]) ){

					$return_message["error"] = "status can't be null";

				}else{

					

					$data = array(
						"username" => $post["username"],
						"username_where" => $post["username_where"]
						);

					// pre($date_time_now);
					$this->load->model("model_web_service");
					$return = $this->model_web_service->update_username_byid($data);

					$return_message["notes"] = $return;
				}

			}else{

				$return_message["error"] = "invalid api key";
			}


		}else{

			$return_message["error"] = "data not found";

		}
		return $this->output->set_content_type("application/json")->set_output(json_encode($return_message));
	}


	public function delete_username_byid_delete(){


		$delete = $this->delete();

		$return_message = array();

		if(!empty($delete)){

			if(!empty($delete["key"]) && $delete["key"]==$this->api_key){

				if(empty($delete["username_where"]) ){

					$return_message["error"] = "status can't be null";

				}else{

					

					$data = array(
						"username_where" => $delete["username_where"]
						);

					// pre($date_time_now);
					$this->load->model("model_web_service");
					$return = $this->model_web_service->delete_user($data);

					$return_message["notes"] = $return;
				}

			}else{

				$return_message["error"] = "invalid api key";
			}


		}else{

			$return_message["error"] = "data not found";

		}
		return $this->output->set_content_type("application/json")->set_output(json_encode($return_message));
	}



	// public function update_trx_claim_batchid_get(){


	// 	$get = $this->input->get();

		

	// 	$return_message = array();

	// 	if(!empty($get)){



	// 		if(empty($get["batch_id"])){

	// 			$return_message = "batch_id can't be null";

	// 		}else{

				
	// 			$data = array(
	// 				"batch_id" => $get["batch_id"]
	// 				);

	// 			// pre($date_time_now);
	// 			$this->load->model("model_web_service");
	// 			$return = $this->model_web_service->update_trx_claim_batchid($data);

	// 			$return_message = $return;
	// 		}

			
	// 	}else{

	// 		$return_message = "parameter not found";

	// 	}
	// 	return $this->output->set_content_type("application/json")->set_output(json_encode($return_message));
	// }

	public function get_userbyid_get(){


		$get = $this->input->get();

		

		$return_message = array();

		if(!empty($get)){



			if(empty($get["id"])){

				$return_message = "id can't be null";

			}else{

				
				$data = array(
					"id" => $get["id"]
					);

				// pre($date_time_now);
				$this->load->model("model_web_service");
				$return = $this->model_web_service->get_user_param($data);

				$return_message = $return;
			}

			
		}else{

			$return_message = "parameter not found";

		}
		return $this->output->set_content_type("application/json")->set_output(json_encode($return_message));
	}



	// public function get_project_master_get(){


	// 	$this->load->model("model_web_service");
	// 	$data = $this->model_web_service->get_project_master();

	// 	$result = json_encode($data);
	// 	$this->output->set_output($result);

	// }

	
}