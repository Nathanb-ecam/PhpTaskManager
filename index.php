<?php
require("Controller/taskManagerLoader.php");
$taskManager_controller = new taskManagerLoader();


if(isset($_GET['del'])){
    session_destroy();
    $taskManager_controller->display_taskManager();
}
else if(isset($_GET['form'])){
    $taskManager_controller->addTask(htmlspecialchars($_POST['title-input']),htmlspecialchars($_POST['price-input']),htmlspecialchars($_POST['quantity-input']));
    $taskManager_controller->display_taskManager();  
}
else if(isset($_GET['deleteOne'])){
    $taskManager_controller->removeOne($_GET['deleteOne']);
    $taskManager_controller->display_taskManager();
}

else{
    $taskManager_controller->display_taskManager();  
}