<?php
// required headers
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");
header("Access-Control-Allow-Methods: POST");
header("Access-Control-Max-Age: 3600");
header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");
  
// get database connection
include_once '../config/database.php';
  
// instantiate product object
include_once '../objects/product.php';
  
$database = new Database();
$db = $database->getConnection();
  
$product = new Product($db);
  
// get posted data
$data = json_decode(file_get_contents("php://input"));
  
// make sure data is not empty
if(
    !empty($data->name) &&
    !empty($data->price) &&
    !empty($data->description) &&
    !empty($data->category_id)
){
  
    // set product property values
    $product->name = $data->name;
    $product->price = $data->price;
    $product->description = $data->description;
    $product->category_id = $data->category_id;
    // $product->created = date('Y-m-d H:i:s');
    $product->created = $data->created;
  
    // if($received_data->action == 'insert'){
    //     $data= array (
    //         ':name' => $received_data->name,
    //         ':description' => $received_data->description,
    //         ':price' => $received_data->price,
    //         ':category_id' => $received_data->category_id,
    //         ':created' => $received_data->created,
    //     );
        
    //     $query = "INSERT INTO products( name,description,price,category_id,created)
    //             VALUES(:name, :description,:price ,:category_id ,:created)" ;

    //     $statement = $connect->prepare($query);
    //     $statement->execute($data);
    //     $output =array(
    //         'message' => 'Data Inserted'
    //     );

    //     echo json_encode($output);
    // }


    // create the product
    if($product->create()){
  
        // set response code - 201 created
        http_response_code(201);
  
        // tell the user
        echo json_encode(array("message" => "Product was created."));
    }
  
    // if unable to create the product, tell the user
    else{
  
        // set response code - 503 service unavailable
        http_response_code(503);
  
        // tell the user
        echo json_encode(array("message" => "Unable to create product."));
    }
}
  
// tell the user data is incomplete
else{
  
    // set response code - 400 bad request
    http_response_code(400);
  
    // tell the user
    echo json_encode(array("message" => "Unable to create product. Data is incomplete."));
}
?>