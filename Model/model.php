<?php
    function m_view(){
        include("connection.php");
        $query = "SELECT * FROM student st 
        LEFT JOIN class cl 
        ON st.class_id = cl.id";
        $result = mysqli_query($connection, $query);
        $rows = [];
        if($result && mysqli_num_rows($result) > 0){
            foreach ($result as $value) {
                $rows[] = $value;
            }
        }
        return $rows;
    }

    // add class
    function m_add(){
        include("connection.php");
        $query = "SELECT * FROM class st";
        $result = mysqli_query($connection, $query);
        $rows = [];
        if($result && mysqli_num_rows($result) > 0){
            foreach ($result as $value) {
                $rows[] = $value;
            }
        }
        return $rows;
    }

    // store data
    function m_store(){
        include("connection.php");
        $firstname = $_POST['Firstname'];
        $lastname = $_POST['Lastname'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $class_id = $_POST['class'];

        $result = mysqli_query($connection, "
            INSERT INTO student (Firstname, Lastname, pwd, email, class_id)
            VALUES ('$firstname', '$lastname', '$password', '$email', $class_id);
            ");
        return $result;
    }

    //edit student
    function m_edit(){
        $id = $_GET['id'];
        var_dump($id);
    }
?>