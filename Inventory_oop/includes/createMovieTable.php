<!DOCTYPE html>
<html>
    <head>
        <title>create Movie Table</title>
</head>
<body>
    <?php
    require_once("includes/bootstrap");
    $dbc=new PDO("mysql:host=".DB_NAME.;dbname=".DB_NAME,DB_USER,DB_PASSWORD);
    //create sql query
    $query = "CREATE  TABLE  `movies`  (`id` INT UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY, 
    `title` varchar(255), `production_company` varchar(255),
     `year_released` year(4), 
     `director` varchar(255))"; 
     //run the query
     $result=$PDO->query($query);
     //did query successfully run
     if($result == TRUE){
        echo "query was executed successfully";

     }else{
        echo "query could not be executed successfully" .$dbc->errorInfo()[2];
     }
    ?>
</body>
</html>