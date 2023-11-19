<?php
class contr_booking{
private $model;
public function __construct($model){
    $this->model=$model;
}
public function get_booking(){
    $booking=$this->model->get_booking();
    $response = [
        'status' => 'success',
        'message' => 'true',
        'data' => $booking
    ];
    header('Content-Type: application/json');
    echo json_encode($response);
    

}
public function add_booking(){
$info['customers_id']=$_POST['customers_id'];
$info['ticket_id']=$_POST['ticket_id'];
$info['hotel_id']=$_POST['hotel_id'];
$info['date']=date("Y-m-d H:i:s", time());
//$info['status']="pending";

if($booking=$this->model->add_booking($info)){
$response = [
    'status' => 'success',
    'message' => '  true',
    'data' => $booking
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
public function update_booking(){
    $info['customers_id']=$_POST['customers_id'];
    $info['ticket_id']=$_POST['ticket_id'];
    $info['hotel_id']=$_POST['hotel_id'];
    $info['date']=date("Y-m-d H:i:s", time());
    $id=$_GET['id'];
    if($booking=$this->model->update_booking($info,$id)){
        $response = [
            'status' => 'success',
            'message' => '  true',
            'data' => $booking
        ];
    }
 else {
$response = [
    'status' => 'error',
    'message' => 'fales '
];
}

header('Content-Type: application/json');
echo json_encode($response);



}
public function delet_booking() {
        $id= $_GET['id'];  
        if($this->model->delet_booking($id))  {
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


}