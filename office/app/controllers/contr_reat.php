<?php
class contr_reat{
private $model;
public function __construct($model){
$this->model=$model;

}
public function get_reat(){
$reating=$this->model->get_reating();
$response = [
    'status' => 'success',
    'message' => 'true',
    'data' => $reating
];
header('Content-Type: application/json');
echo json_encode($response);


}
public function add_reat(){
$info['customers_id']=$_POST['customers_id'];
$info['star']=$_POST['star'];
$info['hotel_id']=$_POST['hotel_id'];
$info['comment']=$_POST['comment'];

if($reating=$this->model->add_reating($info)){
    $response = [
        'status' => 'success',
        'message' => 'true',
        'data' => $reating
        ];
    }
        else {
            $response = [
                'status' => 'error',
                'message' => 'fales '
            ];}
        header('Content-Type: application/json');
        echo json_encode($response);



}
public function update_reat(){
    $info['customers_id']=$_POST['customers_id'];
$info['star']=$_POST['star'];
$info['hotel_id']=$_POST['hotel_id'];
$info['comment']=$_POST['comment'];
$id=$_GET['id'];
if($reating=$this->model->update_reating($info,$id)){
    $response = [
        'status' => 'success',
        'message' => 'true',
        'data' => $reating
        ];
    }

    else {
        $response = [
            'status' => 'error',
            'message' => 'fales '
        ];
    }

}
public function delete_reat() {
    $id= $_GET['id'];    
    if($this->model->delete_reating($id)){
        $response = [
            'status' => 'success',
            'message' => 'true'
            ];
            }else{
                $response = [
                    'status' => 'error',
                    'message' => 'false'
                    ];
    }
    header('Content-Type: application/json');
    echo json_encode($response);
        
}

}