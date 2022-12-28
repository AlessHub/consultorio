<?php require "layout/header.php";
?>
<div class="container my-5">
        <h2>New Appointment</h2>
        <form method="get">
        <div id="alert-container"></div>
        <?php
        if (!empty($errorMessage)) {
            echo "
            <div class='alert alert-warning alert-dismissible fade show' role='alert'>
                <strong>$errorMessage</strong>
                <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
            </div>
            ";
        }
        ?>
            <div class="row mb-3">
                <label class="col-sm-3 col-form-label">
                    Name
                </label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" name="name" required>
                </div>
            </div>
            <div class="row mb-3">
                <label class="col-sm-3 col-form-label">
                    Email
                </label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" name="email" required>
                </div>
            </div>
            <div class="row mb-3">
                <label class="col-sm-3 col-form-label">
                    Reason
                </label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" name="reason" required>
                </div>
            </div>
            <div class="row mb-3">
                <div class="offset-sm-3 col-sm-3 d-grid">
                    <button type="submit" name="btn" class="btn btn-primary" value="SAVE">Submit</button>
                    <input type="hidden" name="m" value="save">
                </div>
                <div class="col-sm-3 d-grid">
                    <a class="btn btn-outline-primary" href="/consultorio/" role="button">Cancel</a>
                </div>
            </div>
        </form>
    </div>
<?php require "layout/footer.php";
?>