<?php 

    $connect = new PDO("mysql:host=localhost;dbname=php", "root", "" );
    $receiced_data = json_decode(file_get_contents("php://input"));
    $data = array();

    if ($receiced_data->action == "fetchall") {
        $query = "SELECT * FROM products";
        $statement = $connect->prepare($query);
        $statement->execute();
        while($row = $statement->fetch(PDO::FETCH_ASSOC)) {
            $data[] = $row;
        }
        echo json_encode($data);
    }

    if ($receiced_data->action == 'insert') {
        $data = array(
            ':name' => $receiced_data->name,
            ':description' => $receiced_data->description,
            ':price' => $receiced_data->price,
            ':category_id' => $receiced_data->category_id,
            ':created' => $receiced_data->created,
        );

        $query = " INSERT INTO products(name, description, price , category_id , created)
                    VALUES (:name, :description ,:price , :category_id , :created)";
        
        $statement = $connect->prepare($query);
        $statement -> execute($data);
        $output = array(
            'message' => 'Data Inserted'
        );
        
        echo json_encode($output);
    }

    if ($receiced_data->action == 'fetchSingle') {
        $query = "SELECT * FROM products WHERE id = '".$receiced_data->id."' " ;
        $statement = $connect->prepare($query);
        $statement -> execute();
        $result = $statement->fetchAll();

        foreach($result as $row) {
            $data['id'] = $row['id'];
            $data['name'] = $row['name'];
            $data['description'] = $row['description'];
            $data['price'] = $row['price'];
            $data['category_id'] = $row['category_id'];
            $data['created'] = $row['created'];
        }
        echo json_encode($data);
    }

    if($receiced_data->action == 'update') {
        $data = array(
            ':name' => $receiced_data->name,
            ':description' => $receiced_data->description,
            ':price' => $receiced_data->price,
            ':category_id' => $receiced_data->category_id,
            ':created' => $receiced_data->created,
            ':id' => $receiced_data->hiddenId,
        );

        $query = "UPDATE products SET name = :name, description = :description,
                  price = :price, category_id = :category_id, created = :created WHERE id = :id ";

        $statement = $connect->prepare($query);
        $statement -> execute($data);
        $output = array(
            'message' => 'Data updated'
        );
        echo json_encode($output);
    }

    if ($receiced_data->action =='delete') {
        $query = "DELETE FROM products WHERE id = '".$receiced_data->id."' ";

        $statement = $connect->prepare($query);
        $statement ->execute();

        $output = array(
            'message' => 'Delete data'
        );
        echo json_encode($output);
    }
?>