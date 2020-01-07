<?php
require '../config/database.php';
$img_id = $_POST['img_id'];
// $stmt = $conn->prepare($sql);
// $stmt->execute();

           try {
               //Define the query
                $query = "DELETE FROM images WHERE image_id=$img_id LIMIT 1";

                //sends the query to delete the entry
                $stmt = $conn->prepare($query);
                $stmt->execute();
                header("Location: ../camera.php");
                exit();

                //if it failed
                
            } catch(PDOexception $e){
            die("Connection failed: " . $e->getMessage());
            }
                ?>