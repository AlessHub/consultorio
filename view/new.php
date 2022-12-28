<?php require "layout/header.php";
?>
<div class="container my-5">
        <h2>New Appointment</h2>
        <form method="get">
            <div class="row mb-3">
                <label class="col-sm-3 col-form-label">
                    Name
                </label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" name="name">
                </div>
            </div>
            <div class="row mb-3">
                <label class="col-sm-3 col-form-label">
                    Email
                </label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" name="email">
                </div>
            </div>
            <div class="row mb-3">
                <label class="col-sm-3 col-form-label">
                    Reason
                </label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" name="reason">
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