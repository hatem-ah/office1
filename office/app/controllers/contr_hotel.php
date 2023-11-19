<?php


class contr_hotel{ 
private $model;

    public function __construct($model) {
        $this->model = $model;
    }

    public function get_hotel() {
        $hotels = $this->model->get_hotel();
        $response = [
            'status' => 'success',
            'message' => 'true',
            'data' => $hotels
        ];
        header('Content-Type: application/json');
        echo json_encode($response);

      
    }

    public function add_hotel() {
        
        $info['name']= $_POST ['   name'];
        $info['phone']= $_POST ['phone'];
        $info['city_id']= $_POST ['city_id'];
        $info['location']= $_POST ['location'];
        
       if($hotels= $this->model->add_hotel($info)){
        $response = [
            'status' => 'success',
            'message' => 'true',
            'data'=> $hotels
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

    public function update_hotel() {
        
        $info['name']= $_POST ['   name'];
        $info['phone']= $_POST ['phone'];
        $info['city']= $_POST ['city'];
        $info['location']= $_POST ['location'];
        
            $id=$_GET['id'];
   if($hotels=     $this->model->update_hotel($id, $info)){
        
        $response = [
            'status' => 'success',
            'message' => 'true',
            'data'=> $hotels
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
    
    public function delete_hotel() {
        $id = $_GET["id"];
      if(  $this->model->delete_hotel($id)){
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




