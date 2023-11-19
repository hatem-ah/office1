<?php


class contr_company {
    private $model;
    

    public function __construct($model) {
        $this->model = $model;
    }

    public function get_company(){
        $companies = $this->model->get_company();
        $response = [
            'status' => 'success',
            'message' => 'true',
            'data' => $companies
        ];
        header('Content-Type: application/json');
        echo json_encode($response);

}


    public function add_company(){
        
            $info['name'] = $_POST['name'];
            $info['phone'] = $_POST['phone'];

           

       if($companies=     $this->model->add_company($info)){
            $response = [
                'status' => 'success',
                'message' => '  true',
                'data' => $companies
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

    public function update_company(){
   
        $info['name'] = $_POST['name'];
        $info['phone'] = $_POST['phone'];
        $id = $_GET["id"];
       if($companies= $this->model->update_company($id, $info)){
        $response = [
            'status' => 'success',
            'message' => 'true',
            'data'=> $companies
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

    public function delete_company() {
        $id= $_GET['id'];    
        if($this->model->delete_company($id)){
        $response = [
            'status' => 'success',
            'message' => 'true',
            
            ];
            }else{
                $response = [
                    'status' => 'error',
                    'message' => 'false',
                   
                    ];
                    }
                    header('Content-Type: application/json');
                    echo json_encode($response);
                
    }
}