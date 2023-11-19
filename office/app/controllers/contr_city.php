<?php


class contr_city {
    private $model;
   

    public function __construct($model) {
        $this->model = $model;
    }

    public function get_city(){
        $cities = $this->model->get_city();
        $response = [
            'status' => 'success',
            'message' => 'true',
            'data' => $cities
        ];
        header('Content-Type: application/json');
        echo json_encode($response);

}


    public function add_city(){
       
            $info['name'] = $_POST['name'];
            $info['country'] = $_POST['country'];

         
             
        if ($cities=$this->model->add_city($info)) {
            $response = [
                'status' => 'success',
                'message' => '  true',
                'data' => $cities
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

    public function update_city(){
      
        $info['name'] = $_POST['name'];
        $info['country'] = $_POST['country'];
         $id=$_GET['id'];
       

         if ($cities=$this->model->update_cities($info, $id)) {
            $response = [
                'status' => 'success',
                'message' => 'true',
                'data'=> $cities
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

    public function delete_city() {
        $id= $_GET['id'];    
      if ($this->model->delete_cities($id)) {
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
