<?php
$mysqli = new mysqli("localhost", "root", "", "updated_mdq");

// Check connection
if ($mysqli->connect_error) {
    die("Connection failed: " . $mysqli->connect_error);
}

// Retrieve all $table2Ids from your_table1 (replace 'your_table1' and 'your_column' with your actual table and column names)
$sqlTable1 = "SELECT id FROM application_web";
$resultTable1 = $mysqli->query($sqlTable1);


if ($resultTable1->num_rows > 0) {
    while ($rowTable1 = $resultTable1->fetch_assoc()) {
        $table2Id = $rowTable1['id'];

        // Retrieve the row from application_web using the obtained $table2Id
        $sqlApplicationWeb = "SELECT * FROM application_web WHERE id = $table2Id";
        $resultApplicationWeb = $mysqli->query($sqlApplicationWeb);

        if ($resultApplicationWeb->num_rows > 0) {
            $rowApplicationWeb = $resultApplicationWeb->fetch_assoc();

            // Get foreign key IDs as an array
            $foreignKeysArray = explode(',', $rowApplicationWeb['technology']);

            // Use the foreign key IDs as needed
            foreach ($foreignKeysArray as $foreignKeyId) {
                // Retrieve data from technology_name using $foreignKeyId
                $sqlTable2 = "SELECT technology FROM technology_name WHERE id = '$foreignKeyId'";
                $resultTable2 = $mysqli->query($sqlTable2);

                if ($resultTable2->num_rows > 0) {
                    $rowTable2 = $resultTable2->fetch_assoc();
                    // Access data from technology_name, for example, $rowTable2['technology']
                    echo implode(',', $rowTable2) . ',';
                }
            }
        } else {
            echo "No results found in application_web for ID $table2Id";
        }
    }
    // echo json_encode($data);
} else {
    echo "No results found in your_table1";
}

$mysqli->close();
?>
