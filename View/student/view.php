<div class="container">
<h2 class="text-center">Student information</h2>
<a class="btn btn-success btn-sm" href="index.php?action=add">Add New Student</a>
<a class="btn btn-danger btn-sm float-right" href="index1.php?action=class_view">view class</a>
<table class="table table-border mt-4">
    <thead>
        <tr>
            <th>ID</th>
            <th>Firstname</th>
            <th>LastName</th>
            <th>Class</th>
            <th>Email</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        <?php $id = 1; if(isset($data['view'])) {
            foreach($data['view'] as $student) {
        ?>
            <tr>
            <td><?php echo $id;  ?></td>
            <td><?php echo $student['FirstName'] ?></td>
            <td><?php echo $student['LastName'] ?></td>
            <td>
                <?php if($student['class_name'] == null){
                ?>
                    <p>No Class</p>
                <?php 
                }else {
                    echo $student['class_name'];
                } ?>
            </td>
            <td><?php echo $student['email'] ?></td>
            <td>
                <a href="index.php?action=edit&id =<?php echo $student['id'] ?> ">Edit</a>
            </td>
            </tr>
        <?php
           $id++; }
        } ?>
    </tbody>
</table>
</div>