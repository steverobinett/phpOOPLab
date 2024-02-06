<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="layout.css" >
    <title>Document</title>
</head>
<body>
    <h3>Test Data Store</h3>


    <div class="container">
        <div class="column-left">Plceholder Left</div>
        <div class="column">


        <?php
     include "dataStore/EmployeeDataStore.php";
     $empDS = new EmployeeDataStore("data.txt");

     while ((($rec = $empDS->getNext()) != NULL)){
        
        // for($i=0; $i < count($rec); ++$i){
        //     echo "$rec[$i] --";
        // }

        foreach($rec as $field){
            echo "$field --";
        }
        
        echo "<br />";

     }

    ?>


        </div>
        <div class="column-right">Placeholder Right</div>
        
    </div>

    
    
</body>
</html>