<?php

require("Model/TaskManager.php");
class taskManagerLoader{
    public $taskManager;
    public function __construct() 
    {
        $this->taskManager = new taskManager();
    }
    public function display_taskManager(){  
        $taskManager = $this->taskManager->get_All_My_Tasks();
        require_once("View/taskManager.php");
        
    }
    public function addTask($title,$price,$quantity){
        $this->taskManager->addTotaskManager($title,$price,$quantity);
    }
    public function removeOne($title){
        $this->taskManager->removeOne($title);
    }
}
