<?php

    define('db_server','localhost');
    define('db_user','root');
    define('db_pass','');
    define('db_name','php');

    class db_con{

        function __construct() {
            $conn = mysqli_connect(db_server,db_user,db_pass,db_name);
            $this->dbcon = $conn;

            if (mysqli_connect_errno()){
                echo "Failed toconnect to Mysqli : " . mysqli_connect_error();
            }
        }

////////////tbuser
        // public function insertus($datelend,$datesent,$number_user,$id_prefix,$name,$address,$phone,$year,$id_sex,$id_position,$id_faculty,$id_book){
        //     $result = mysqli_query($this->dbcon,"INSERT INTO tbuser( datelend, datesent,number_user, id_prefix, name, address, phone, year, id_sex, id_position, id_faculty, id_book)
        //     values('$datelend','$datesent','$number_user','$id_prefix','$name','$address','$phone','$year','$id_sex','$id_position','$id_faculty','$id_book' )");
        //     return $result;
        // }
        

        // SELECT * FROM tbuser
        public function fetchdatauser(){
                $result = mysqli_query($this->dbcon,"SELECT u.id, u.name, u.description , u.price , p.name , u.created , u.modified
                                            
                                                    FROM categories as p

                                                    INNER JOIN products as u ON p.category_id = u.category_id
                                                    where u.id IS NOT NULL ORDER BY u.id");
                                                     return $result;
        }
    
        // public function fetchonerecord($userid){
        //     $result = mysqli_query($this->dbcon,"SELECT * FROM tbuser WHERE id_user = '$userid'");
        //     return $result ;
        // }

        // public function updateus($id_user,$datelend,$datesent,$number_user,$id_prefix,$name,$address,$phone,$year,$id_sex,$id_position,$id_faculty,$id_book,$userid) {
        //         $result = mysqli_query($this->dbcon,"UPDATE tbuser SET
        //              id_user ='$id_user',
        //             datelend ='$datelend',
        //             datesent ='$datesent',
        //              number_user ='$number_user',
        //              id_prefix ='$id_prefix',
        //              name ='$name',
        //              address ='$address',
        //              phone = '$phone',
        //              year = '$year',
        //              id_sex = '$id_sex',
        //              id_position = '$id_position',
        //              id_faculty = '$id_faculty',
        //              id_book = '$id_book'
        //              WHERE id_user = '$userid'
        //         ");
        //         return $result ;
        // }

        // public function delete($userid){
        //     $deleterecord = mysqli_query($this->dbcon, "DELETE FROM tbuser WHERE id_user = '$userid'");
        //     return $deleterecord;
        // }




    }
?>