<?php
require("Task.php");
session_start();
 


class TaskManager { 
    public function get_All_My_tasks(){
        if(!isset($_SESSION['taskManager-content'])){
            $_SESSION['taskManager-content']= [];
        }
        return $_SESSION['taskManager-content'];
    }
    public function addTotaskManager($title,$price,$quantity){
        if(!isset($_SESSION['taskManager-content'])){
            $_SESSION['taskManager-content']= [];
        }
        $task_titles= [];
        foreach($_SESSION['taskManager-content'] as $e){
            array_push($task_titles,$e->title);
        }
        if(!in_array($title,$task_titles)){
            array_push($_SESSION['taskManager-content'],new Task($title,$price,$quantity));  
        } 
    }
    public function removeOne($title){
        $taskManager = $this->get_All_My_tasks();
        $i = 0;
        foreach($taskManager as $task){
            if($task->title==$title){
                unset($_SESSION['taskManager-content'][$i]);
                echo "<script>console.log('$task->title')</script>";
                echo "<script>console.log('$i')</script>";
                echo "<script>console.log('$title')</script>";

            }
            $i++;

        }
    }
}
