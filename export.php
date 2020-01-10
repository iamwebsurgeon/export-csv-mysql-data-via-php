<?php
//include database configuration file
include_once 'db.php';

//get records from database
$query = "SELECT * FROM users ORDER BY id ASC";
$runQuery = mysqli_query($conn, $query);

if(mysqli_num_rows($runQuery) > 0){
    $delimeter = ",";
    $filename = "users_". date('Y-m-d'). ".csv";


    //create a file pointer
    $f = fopen('php://memory', 'w');
    
    //set column headers
    $fields = array('ID', 'Name', 'Email', 'Phone', 'Status');
    fputcsv($f, $fields, $delimeter);
    
    //output each row of the data, format line as csv and write to file pointer
    // while($row = $query->fetch_assoc()){
    while($row = mysqli_fetch_assoc($runQuery)){
    

        $status = ($row['is_active'] == '1')?'Active':'Inactive';
        $lineData = array($row['id'], $row['full_name'], $row['email'], $row['phone'], $status);
        fputcsv($f, $lineData, $delimeter);
    }
    
    //move back to beginning of file
    fseek($f, 0);
    
    //set headers to download file rather than displayed
    header('Content-Type: text/csv');
    header('Content-Disposition: attachment; filename="' . $filename . '";');
    
    //output all remaining data on a file pointer
    fpassthru($f);
}

exit();
// $query = $db->query("SELECT * FROM users ORDER BY id DESC");

// if($query->num_rows > 0){
//     $delimiter = ",";
//     $filename = "users_" . date('Y-m-d') . ".csv";
    
    
// }


?>