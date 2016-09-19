<?php

class model_web_service extends CI_Model {


 
    public function list_emp(){
		$final = array();
        $intdb = $this->load->database('intproj',TRUE);
        $intdb->select('emp_name,no_hp');
        $intdb->where('flag',1);
        
        $result = $intdb->get('emp')->result_array();
        
        $final["employee"] = $result;
        return $final;
	}

    public function get_user(){

    
        $result = $this->db->get("sys_user")->result_array();

        return $result;
    }

    public function insert_user($data){

       
        $this->db->insert("sys_user",$data);

        return ($this->db->affected_rows() != 1) ? "INSERT GAGAL" : "INSERT BERHASIL";
        
    }

    // public function insert_trx_claim($pass_data=array()){

    //     $data = array(

    //         "claim_date"        =>  $pass_data["claim_date"],
    //         "activity_id"       =>  $pass_data["activity_id"],
    //         "employee_number"   =>  $pass_data["employee_number"],
    //         "toll"              =>  $pass_data["toll"],
    //         "milleage"          =>  $pass_data["milleage"],
    //         "parking"           =>  $pass_data["parking"],
    //         "taxi_from"         =>  $pass_data["taxi_from"],
    //         "taxi_to"           =>  $pass_data["taxi_to"],
    //         "taxi_time"         =>  $pass_data["taxi_time"],
    //         "taxi_voucher_no"   =>  $pass_data["taxi_voucher_no"],
    //         "taxi_amount"       =>  $pass_data["taxi_amount"],
    //         "dinner"            =>  $pass_data["dinner"],
    //         "status"            =>  $pass_data["status"],
    //         // "created_by"        =>  $pass_data["created_by"],
    //         "creation_date"     =>  $pass_data["creation_date"],
    //         // "last_update_by"    =>  $pass_data["last_update_by"],
    //         "last_update_date"  =>  $pass_data["last_update_date"],
    //         // "last_update_login" =>  $pass_data["last_update_login"]
    //     );

    //     $this->db->insert("trx_claim",$data);
    //     return ($this->db->affected_rows() != 1) ? "insert failed" : "insert success";


    // }

    // public function get_claim($pass_data=array()){

    //     if(!empty($pass_data["param"])){

    //         $this->db->where("id",$pass_data["param"]);
    //     }

    //     $result = $this->db->get("sys_user", array("id"=>$pass_data["id"]), "json")->result_array();

    //     return $result;
    // }

    public function update_username_byid($pass_data=array()){

        $data = array(
            "username"    => $pass_data["username"]
            );

        $this->db->where("id",$pass_data["username_where"]);
        $result = $this->db->update("sys_user",$data);

        return ($this->db->affected_rows() > 0) ? "update success" : "update failed";

    }

    // public function update_trx_claim_batchid($pass_data=array()){


    //     $data = array(
    //         "batch_id"    => $pass_data["batch_id"]
    //         );


    //     $this->db->where("id",$data["batch_id"]);
    //     $result = $this->db->get("sys_user",$data)->result_array();

    //     // return ($this->db->affected_rows() > 0) ? "success" : "failed";
    //     return $result;

    // }

    // public function get_project_master(){

    //     $result = $this->db->get("ts_project_master")->result_array();

    //     return $result;
    // }

    public function delete_user($pass_data=array()){

        $this->db->where("id",$pass_data["username_where"]);
        $result = $this->db->delete("sys_user");

        return ($this->db->affected_rows() > 0) ? "DELETE success" : "DELETE failed";
    }


    public function get_user_param($pass_data=array()){

        $data = array(
            "id"    => $pass_data["id"]
            );


        $this->db->where("id",$data["id"]);
        $result = $this->db->get("sys_user",$data)->result_array();

        return $result;
    }

}


?>