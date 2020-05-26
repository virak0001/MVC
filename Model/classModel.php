<?php
    function m_view(){
        include("connection.php");
        $query = "SELECT * FROM class";
        $result = mysqli_query($connection, $query);
        $rows = [];
        if($result && mysqli_num_rows($result) > 0){
            foreach ($result as $value) {
                $rows[] = $value;
            }
        }
        return $rows;
    }
?>