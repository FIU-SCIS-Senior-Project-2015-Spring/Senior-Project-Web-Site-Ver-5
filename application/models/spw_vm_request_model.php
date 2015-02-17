
<?php

class SPW_vm_request_Model extends CI_Model
{
    
    public function __construct()
    {
        parent::__construct();
    }
    
    /* function returns all requests made for a project, they 
     * could be APPROVED, DENIED, PENDING */
    public function getUserRequestsFromProject($project_id){
        
        $q = $this->db->query("SELECT OS, RAM, storage, numb_vm, status "
                            . "FROM spw_vm_request "
                            . "where project_id = $project_id");
        $requests = array();
        
        if($q->num_rows() > 0)
            foreach ($q->result() as $row)
                array_push($requests,$row);
        
        return $requests;
    }
    
    /* Returns the project requests */
    public function getUserRequests($user_id){
        /* base on user id, returns the project id associated to the user */
        $project_id = $this->getProjectId($user_id);
        /* calls helper method and returns the requests made for a project */
        return $this->getUserRequestsFromProject($project_id);
    }
    
    /* Inserts vm requests  */
    public function insertVmRequests($requests,$user_id){
        
        $project_id = $this->getProjectId($user_id);
        /* for each request insert its settings */
        foreach($requests as $request){
            $os = $request->os;
            $ram = $request->ram;
            $hdd = $request->hdd;
            $qty = $request->qty;
            $query = "insert into spw_vm_request (project_id, OS, RAM, storage, numb_vm, status) "
                    . "values ($project_id,'$os',$ram,$hdd,$qty,'PENDING')";
            $q = $this->db->query($query);
            if(!$q) return false;
        }
        return true;
    }
    
    /*checks if student is in project*/
    public function isStudentInProject($user_id,$project_id){
        $query = "select id from spw_user where id='$user_id' and project='$project_id'";
        $q = $this->db->query($query);
        return $q->num_rows() > 0;
    }
    
    /* Returns the project id where a student belongs */
    public function getProjectId($user_id){
        
        $q = $this->db->query("SELECT project "
                            . "FROM spw_user "
                            . "where id = '$user_id'");
        if($q->num_rows() > 0)
            foreach ($q->result() as $row)
                return $row->project;
        return null;
    }
    
    /* returns all pending requests made for a project, they 
     * include id project */
    public function getPendingRequestsFromProject($project_id){
        
        $q = $this->db->query("SELECT id,OS, RAM, storage, numb_vm, status "
                            . "FROM spw_vm_request "
                            . "where status = 'PENDING' AND project_id = $project_id");
        $requests = array();
        
        if($q->num_rows() > 0)
            foreach ($q->result() as $row)
                array_push($requests,$row);
        
        return $requests;
    }
    
    /* updates vm requests by project */
    public function updateRequestsFromProject($requests){
        /* for each request update its settings */
        foreach($requests as $request){
            $key = $request->key;
            $os = $request->os;
            $ram = $request->ram;
            $hdd = $request->hdd;
            $qty = $request->qty;
            $status = $request->status;
            
            $query = "update spw_vm_request "
                    . "set OS='$os',RAM=$ram,storage=$hdd,numb_vm=$qty,status='$status' "
                    . "where id = $key";
            $q = $this->db->query($query);
            if(!$q) return false;
        }
        return true;
    }
    
    /* */
    public function getProjectMembers($project_id){
        $query = "SELECT 'first_name', 'last_name', email, role " 
                ."FROM 'spw_user' " 
                ."WHERE project = $project_id AND status = 'active' ";
        
        $q = $this->db->query($query);
        
        $project_members = array();
        
        if($q->num_rows() > 0)
            foreach ($q->result() as $row)
                array_push($project_members,$row);
        
        return $project_members;
    }
    
}

