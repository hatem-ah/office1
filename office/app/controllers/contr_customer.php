<?php


class contr_customer {
    private $model;
   
    public function __construct($model) {
        $this->model = $model;
    }

    public function get_customer(){
       
        $customers = $this->model->get_customer();
       $response = [
            'status' => 'success',
            'message' => 'true',
            'data' => $customers
        ];
        header('Content-Type: application/json');
        echo json_encode($response);
    

}


    public function add_customer(){
        

       
            $info['name'] = $_POST['name'];
            $info['phone'] = $_POST['phone'];
            $info['gender'] = $_POST['gender'];
            $info['email'] = $_POST['email'];
            $info['date'] =$_POST['date'] ;
            if($customers= $this->model->add_customer($info)){

            $response = [
                'status' => 'success',
                'message' => '  true',
                'data' => $customers
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

    public function update_customer(){
       
        $info['name'] = $_POST['name'];
        $info['phone'] = $_POST['phone'];
        $info['gender'] = $_POST['gender'];
        $info['email'] = $_POST['email'];
        $info['date'] = date("Y-m-d H:i:s", time());
             $id=$_GET['id'];
        
          if($customers=  $this->model->update_customer($id , $info)){
                $response = [
                    'status' => 'success',
                    'message' => 'true',
                    'data'=> $customers
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

    public function delete_customer() {
        $id= $_GET['id'];    
        if($this->model->delete_customer($id))
            { $response = [
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