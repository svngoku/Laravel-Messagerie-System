<?php
class Project {
    $project = "Messagery System";
    $year = 2018;
    $auther = "Svngoku";
    $repo = "https://github.com/svngoku/Laravel-Messagerie-System";
    
    
    public function readme()
    {
      echo "Welcome to".$project." write in ".$repo ;
    }
  
  }
  
  Project::readme();
  
  
