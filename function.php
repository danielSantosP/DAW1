<?php
//configurações do banco
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "mydb";

if($_POST['METHOD']){
    $metodo = $_POST['METHOD']; 
} else {
    $metodo = NULL;
}
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// sql to create table
$sql = "CREATE TABLE mydb (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(30) NOT NULL,
    lastname VARCHAR(30) NOT NULL,
    tel VARCHAR(50),
    reg_date TIMESTAMP
    )";
if ($conn->query($sql) === TRUE) {
    echo "Table mydb created successfully";
} else {
    echo "Error creating table: " . $conn->error;
}

//chamar as variaveis do index por post
$nome = $_POST['name'];
$lastname = $_POST['lastname'];
$tel = $_POST['tel'];
$iduser = $_POST['id'];
if($iduser == NULL){
    $sql = "INSERT INTO mydb (nome, lastname, tel)
    VALUES ('$nome', '$lastname', '$tel')";
if ($conn->query($sql) === TRUE) {
echo "New record created successfully";
} else {
echo "Error: " . $sql . "<br>" . $conn->error;
}
}
$sql = "SELECT id, nome, lastname FROM mydb";
$result = $conn->query($sql);

if ($metodo == "delete") {
    // sql to delete a record
$sql = "DELETE FROM mydb WHERE id=$iduser";

if ($conn->query($sql) === TRUE) {
    echo "Record deleted successfully";
} else {
    echo "Error deleting record: " . $conn->error;
}
} else {
if ($result->num_rows > 0) {
    // output data of each row
    $name = "";
    while($row = $result->fetch_assoc()) {
        if($row["id"] == $iduser){
            $lastName2 = $row["lastname"];
            $firstName2 = $row["nome"];
            $sql = "UPDATE mydb SET nome='$lastName2', lastname='$firstName2'  WHERE id=$iduser";
            if ($conn->query($sql) === TRUE) {
                echo "Record updated successfully";
            } else {
                echo "Error updating record: " . $conn->error;
            }
        } 
        if($name != ""){
            
        }
    }
} else {
    $sql = "INSERT INTO mydb (nome, lastname, tel)
        VALUES ('$nome', '$lastname', '$tel')";
if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
}
}
$conn->close();
?>
