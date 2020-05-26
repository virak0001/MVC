<?php
     $data = array();
     function get_action(&$data){
         $function = "view";
         if (isset($_GET['action'])) {
             $action = $_GET['action'];
             $function = $action;
         }
         $function($data);
     }
     get_action($data);

     // view class
    function class_view(&$data){
        $data['view'] = m_view();
        $data['page'] = "class/view";
    }
?>