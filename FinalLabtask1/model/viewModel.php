    <?php
        function balanceRetrive($userId,&$name,&$balance){
            $servername = "localhost";
            $username = "admin";
            $password = "";
            $dbname = "office";
            // Create connection
            $conn = new mysqli($servername, $username, $password, $dbname);
            // Check connection
            if ($conn->connect_error) {
             die("Connection failed: " . $conn->connect_error);
            }
        
        
            $sql = "SELECT name,balance FROM customer WHERE userId='".$userId."'";
            $result = $conn->query($sql);
        
            if ($result->num_rows > 0) {
            // output data of each row
                while($row = $result->fetch_assoc()){
                    $name = $row["name"];
                    $balance = $row["balance"] ; 
                }
                $conn->close();
            } 
            else {
                echo "0 results";
                $conn->close();
            }
        }

        function updateBalance($amount,$id){
            $servername = "localhost";
            $username = "admin";
            $password = "";
            $dbname = "office";
        
            // Create connection
            $conn = new mysqli($servername, $username, $password, $dbname);
            // Check connection
            if ($conn->connect_error) {
             die("Connection failed: " . $conn->connect_error);
            }
        
            $sql = "UPDATE customer SET balance='".$amount."' WHERE userId='".$id."'";
        
            if ($conn->query($sql) === TRUE) {
            echo "Record updated successfully";
            } else {
            echo "Error updating record: " . $conn->error;
            }
        
            $conn->close();
        }

        function deleteUserId($userId){
            $servername = "localhost";
            $username = "admin";
            $password = "";
            $dbname = "office";
            
            // Create connection
            $conn = new mysqli($servername, $username, $password, $dbname);
            // Check connection
            if ($conn->connect_error) {
              die("Connection failed: " . $conn->connect_error);
            }
            
            // sql to delete a record
            $sql = "DELETE FROM customer WHERE userId='".$userId."'";
            
            if ($conn->query($sql) === TRUE) {
              echo "Record deleted successfully";
            } else {
              echo "Error deleting record: " . $conn->error;
            }
            
            $conn->close();
        }


?>
    
