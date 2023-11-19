<?php
class contr_ticket{
private $model;
public function __construct($model){
$this->model=$model;
}
public function get_ticket(){
    if(
$tickets=$this->model->get_ticket()){
$response = [
    'status' => 'success',
    'message' => 'true',
    'data' => $tickets
];}
else {
    $response=[
        "status"=>"error",
        "message"=>"false",
        "data"=>[]
        ];
        }
header('Content-Type: application/json');
echo json_encode($response);


echo json_encode($tickets);

}
public function add_ticket(){
$info['company_id']=$_POST['company_id'];
$info['city_id']=$_POST['city_id'];
$info['date_s']=date("Y-m-d H:i:s", time());
$info['date_e']=date("Y-m-d H:i:s", time());
if($tickets=$this->model->add_ticket($info)){
$response = [
    'status' => 'success',
    'message' => '  true',
    'data' => $tickets
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

public function update_ticket(){
    $info['company_id']=$_POST['company_id'];
    $info['city_id']=$_POST['city_id'];
    $info['date_s']=date("Y-m-d H:i:s", time());
    $info['date_e']=date("Y-m-d H:i:s", time());
                    $id=$_GET['id'];
                    if($tickets=$this->model->update_ticket($info,$id)){
                        $response = [
                            'status' => 'success',
                            'message' => '  true',
                            'data' => $tickets
                            ];
                            }else{
                                $response = [
                                    'status' => 'error',
                                    'message' => 'fales '
                                    ];
                                    }
                                    header('Content-Type: application/json');
                                    echo json_encode($response);
                                    }
                    
        




public function delete_ticket() {
    $id= $_GET['id'];    
    if($this->model->delete_ticket($id)){
        $response=[
            "status"=>"success",
            "message"=>"true"
            ];
            }else{
                $response=[
                    "status"=>"error",
                    "message"=>"false"
                    ];
                    }
        
}


}