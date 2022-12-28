<?php require "layout/header.php"?>

<div class="container my-5">
    <h2>Appointments</h2>
    <a class="btn btn-primary" href="index.php?m=new" role="button">New Appointment</a>
    <br>
    <table class="table">
        <thead>
            <tr>
                <th>Id</th>
                <th>Name</th>
                <th>Email</th>
                <th>Reason</th>
                <th>Date</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php
            if(!empty($data)) {
                foreach($data as $key => $value) {
                    foreach($value as $v):
            ?>
            <tr>
                <td><?php echo $v['id']?></td>
                <td><?php echo $v['name']?></td>
                <td><?php echo $v['email']; ?></td>
                <td><?php echo $v['reason']; ?></td>
                <td><?php echo $v['created_at']; ?></td>
                <td>
                    <a class='btn btn-primary btn-sm' href='index.php?m=edit&id=<?php echo $v['id']; ?>'>Edit</a>
                    <a class='btn btn-danger btn-sm' href='index.php?m=delete&id=<?php echo $v['id']; ?>' onclick="return confirm('Are you sure?'); false">Delete</a>
                </td>
            </tr>
            <?php 
                    endforeach;
                }
            } else {
            ?>
                <tr>
                    <td colspan="3">No appointments</td>
                </tr>
            <?php 
            }
            ?>
        </tbody>
    </table>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<?php require "layout/footer.php"; ?>
