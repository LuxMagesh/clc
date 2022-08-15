<?php
// include mysql database configuration file
include_once './inc/dbcon.php';
 
if (isset($_POST['submit']))
{
 
    // Allowed mime types
    $fileMimes = array(
        'text/x-comma-separated-values',
        'text/comma-separated-values',
        'application/octet-stream',
        'application/vnd.ms-excel',
        'application/x-csv',
        'text/x-csv',
        'text/csv',
        'application/csv',
        'application/excel',
        'application/vnd.msexcel',
        'text/plain'
    );
 
    // Validate whether selected file is a CSV file
    if (!empty($_FILES['file']['name']) && in_array($_FILES['file']['type'], $fileMimes))
    {
 
            // Open uploaded CSV file with read-only mode
            $csvFile = fopen($_FILES['file']['tmp_name'], 'r');
 
            // Skip the first line
            fgetcsv($csvFile);
 
            // Parse data from CSV file line by line
             // Parse data from CSV file line by line
            while (($getData = fgetcsv($csvFile, 10, ",")) !== FALSE)
            {

               
                // Get row data
                $f_name = $getData[0];
                $l_name = $getData[1];
                $abrev = $getData[2];
                $age = $getData[3];
                $dob = $getData[4];

                $query = "SELECT * FROM users";
 
                $check = mysqli_query($conn, $query);
                
 
                if ($check->num_rows > 0)
                {
                    mysqli_query($conn, "INSERT INTO users (`f_name`, `l_name`, `abrev`, `age`, `dob`) VALUES ('$f_name','$l_name','$abrev','$age','$dob')");
                   
                }

               
 
            }
 
            // Close opened CSV file
            fclose($csvFile);
 
            header("Location: index.php");
         
    }
    else
    {
        echo "Please select valid file";
    }
}