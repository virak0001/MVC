<div class="container">
    <h1 class="text-center">class information</h1>
    <table class="table table-border">
        <thead>
            <tr>
                <th>ID</th>
                <th>Class_Name</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $id=1;
            foreach ($data['view'] as $class) {
            ?>
            <tr>
                <td><?php echo $id;?></td>
                <td><?php echo $class['class_name']?></td>
                <td>delete, edit</td>
            </tr>
            <?php
           $id++; }
            ?>
        </tbody>
    </table>

</div>