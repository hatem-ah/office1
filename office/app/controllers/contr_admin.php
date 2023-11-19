<?php

/*

class contr_admin {
    private $model;
   

    public function __construct($model) {
        $this->model = $model;
    }

    public function get_admin(){
        $admins = $this->model->get_admin();
        echo json_encode($admins);
}


    public function add_admin(){
      
            $info['name'] = $_POST['name'];
            $info['email'] = $_POST['email'];
           
            $info['password'] = $_POST['password'];

            $this->model->add_admin($info);
      
    }

    public function update_admin(){
        $info['name'] = $_POST['name'];
        $info['email'] = $_POST['email'];
       
        $info['password'] = $_POST['password'];

        $id=$_GET['id'];
            $this->model->update_admin( $info , $id);
               
        
    }

    public function delete_admin() {
        $id= $_GET['id'];    
        if($this->model->delete_admin($id))
            {
                echo "admin deleted successfully!";
                header('Location:'.BASE_BATH);
            }else{
                echo "Faled to delete Admin";
            }
    }


}*/
class contr_admin {
    private $model;
   

    public function __construct($model) {
        $this->model = $model;
    }

    public function get_admin(){
        $admins = $this->model->get_admin();
        $response = [
            'status' => 'success',
            'message' => 'true',
            'data' => $admins
        ];
        header('Content-Type: application/json');
        echo json_encode($response);
    }


    public function add_admin(){
        $info['name'] = $_POST['name'];
        $info['email'] = $_POST['email'];
        $info['password'] = $_POST['password'];

        if ($admins=$this->model->add_admin($info)) {
            $response = [
                'status' => 'success',
                'message' => '  true',
                'data' => $admins
            ];
        } else {
            $response = [
                'status' => 'error',
                'message' => 'fales '
            ];
        }

        header('Content-Type: application/json');
        echo json_encode($response);
    }

    public function update_admin(){
        $info['name'] = $_POST['name'];
        $info['email'] = $_POST['email'];
        $info['password'] = $_POST['password'];

        $id = $_GET['id'];

        if ($admins=$this->model->update_admin($info, $id)) {
            $response = [
                'status' => 'success',
                'message' => 'true',
                'data'=> $admins
            ];
        } else {
            $response = [
                'status' => 'error',
                'message' => 'fales '
            ];
        }

        header('Content-Type: application/json');
        echo json_encode($response);
    }

    public function delete_admin() {
        $id = $_GET['id'];    
        if ($this->model->delete_admin($id)) {
            $response = [
                'status' => 'success',
                'message' => 'true  '
            ];
        } else {
            $response = [
                'status' => 'error',
                'message' => ' fales'
            ];
        }

        header('Content-Type: application/json');
        echo json_encode($response);
    }

    public function check_admin()
    {
        $email=$_POST['email'];
        $password=$_POST['password'];
        var_dump($this->model->check_admin($email,$password));
        if(!empty($this->model->check_admin($email,$password)))
        {
            
            $_SESSION['validation']='admin';
        }
        else
            
            unset($_SESSION['validation']);
    }
}