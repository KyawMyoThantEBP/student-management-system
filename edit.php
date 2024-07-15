<?php
    require_once("db.php");
    $db = new DB();
    $student = $db -> show($_GET["id"]);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>

    <div class="container">
        <div class="my-5">
            <div class="row">
                <?php if($student): ?>
                <div class="col-12 col-md-6 m-auto bg-light py-3 px-5 border rounded-2">
                    <h4>Edit New Student</h4>
                    <!-- <form action="update.php?id=<?php $_GET['id']; ?>" method="POST"> -->
                    <form action="update.php" method="POST">
                        <input type="hidden" name="id" value="<?php echo $student -> id; ?>">
                        <div class="mt-5">
                            <label for="name" class="form-label">Name</label>
                            <input type="text" placeholder="name" name="name" class="form-control" value="<?php echo $student -> name; ?>">
                        </div>
                        <div class="mt-5">
                            <label for="email" class="form-label">Email</label>
                            <input type="text" placeholder="email" name="email" class="form-control" value="<?php echo $student -> email; ?>">
                        </div>
                        <div class="mt-5">
                            <label for="gender" class="form-label">Gender</label>
                            <select name="gender" class="form-select">
                                <option value="male" <?php if($student -> gender == "male") { echo "selected"; } ?>>Male</option>
                                <option value="female" <?php if($student -> gender == "female") { echo "selected"; } ?>>Female</option>
                                <option value="other">Other</option>
                            </select>
                        </div>
                        <div class="mt-5">
                            <label for="date" class="form-label">Date of Birth</label>
                            <input type="date" placeholder="Date of Birth" name="dob" class="form-control" value="<?php echo $student -> dob; ?>">
                        </div>
                        <div class="mt-5">
                            <label for="age" class="form-label">Age</label>
                            <input type="number" placeholder="age" name="age" class="form-control" value="<?php echo $student -> age; ?>">
                        </div>
                        <div class="mt-5">
                            <button class="btn btn-outline-primary">Update Student</button>
                            <a href="details.php?id=<?php echo $student -> id;  ?>" class="btn btn-outline-info">Back</a>
                        </div>
                    </form>

                </div>
                <?php else: ?>
                <h1>This data doesn't have.</h1>
                <?php endif; ?>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>