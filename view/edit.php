<?php require "layout/header.php";
?>
<div class="container my-5">
        <h2>Edit Appointment</h2>
        <form method="get">
        <?php
                foreach($data as $key => $value) {
                    foreach($value as $v):
            ?>
            <div class="row mb-3">
                <label class="col-sm-3 col-form-label">
                    Name
                </label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" name="name" value="<?php echo $v['name']?>" required>
                </div>
            </div>
            <div class="row mb-3">
                <label class="col-sm-3 col-form-label">
                    Email
                </label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" name="email" value="<?php echo $v['email']?>" required>
                </div>
            </div>
            <div class="row mb-3">
                <label class="col-sm-3 col-form-label">
                    Reason
                </label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" name="reason" value="<?php echo $v['reason']?>" required>
                </div>
            </div>
            <div class="row mb-3">
                <div class="offset-sm-3 col-sm-3 d-grid">
                    <button type="submit" name="btn" class="btn btn-primary" value="SAVE">Edit</button>
                    <input type="hidden" name="m" value="save">
                </div>
                <div class="col-sm-3 d-grid">
                    <a class="btn btn-outline-primary" href="/consultorio/" role="button">Cancel</a>
                </div>
            </div>
            <?php 
                    endforeach;
                }
            ?>
        </form>
    </div>
<?php require "layout/footer.php";
?>