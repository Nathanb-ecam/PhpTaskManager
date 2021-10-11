<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style.css">
    <title>Gestionnaire de taches</title>
</head>
<body>
    <?php 
    if(sizeof($taskManager)!=0){
        require("header.php");
        echo "<div class='main'>";
        $count = 0;
        $n=0;
        echo "<table class='content-table'>";
        echo "<thead>";
        echo "<tr>";
        echo "<th>Name</th>";
        echo "<th>Price</th>";
        echo "<th>Quantity</th>";
        echo "<th></th>";
        echo "</tr>";
        echo "</thead>";
        echo "<tbody>";

        foreach($taskManager as $Task){
            $n++;
            echo "<tr>";
            echo "<td> $Task->title</td>";
            echo "<td> $Task->price </td>";
            echo "<td> $Task->quantity </td>";
            echo "<td><a href='index.php?deleteOne=$Task->title'>DEL</a></td>";
            echo "</tr>";
            $count += ($Task->price*$Task->quantity);
        }
        echo "</tbody>";
        echo "</table>";
        echo "<div class='total-box'>";
        echo "<div><h3>Total : $count</h3></div>";
        echo "<div><a href='View/addTask.php' class='btn'>Add Task</a>";
        echo "<a href='index.php?del' class='btn'>Reset</a></div>";
        echo "</div>";
        


    
    }
    else{
        require("header.php");
        echo "<div class='container'><div class='empty'><h2>Gestionnaire de taches vide</h2>";
        echo "<a class='btn' href='View/addTask.php'>Ajouter des taches</a></div></div>";
    }
    ?>
</body>
</html>
