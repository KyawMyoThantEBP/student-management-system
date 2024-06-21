
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

    <div class="container">
        <div class="my-5">
            <div class="row">
                <div class="col-12 col-md-6 m-auto bg-light py-3 px-5 border rounded-2">
                    <h4>Create New Student</h4>
                    <form action="store.php" method="POST">
                        <div class="mt-5">
                            <label for="name" class="form-label">Name</label>
                            <input type="text" placeholder="name" name="name" class="form-control">
                        </div>
                        <div class="mt-5">
                            <label for="email" class="form-label">Email</label>
                            <input type="text" placeholder="email" name="email" class="form-control">
                        </div>
                        <div class="mt-5">
                            <label for="gender" class="form-label">Gender</label>
                            <select name="gender" class="form-select">
                                <option disabled selected>Choose One</option>
                                <option value="male">Male</option>
                                <option value="female">Female</option>
                                <option value="other">Other</option>
                            </select>
                        </div>
                        <div class="mt-5">
                            <label for="date" class="form-label">Date of Birth</label>
                            <input type="date" placeholder="Date of Birth" name="dob" class="form-control">
                        </div>
                        <div class="mt-5">
                            <label for="age" class="form-label">Age</label>
                            <input type="number" placeholder="age" name="age" class="form-control">
                        </div>
                        <div class="mt-5">
                            <button class="btn btn-outline-primary">Create New Student</button>
                            <a href="index.php" class="btn btn-outline-info">Home</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>