<?php

$pdo = new PDO("mysql:dbname=school; host=localhost", 'root', 'kmt');
$pdo -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

$statement = $pdo -> query("SELECT * FROM students WHERE id = 4");
$student = $statement -> fetch(PDO::FETCH_OBJ);

// var_dump($student);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Top</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>

    <div class="container">
        <div class="my-5">
            <div class="row">
                <div class="col-12 col-md-10 m-auto">
                    <h4>Student </h4>
                    <div class="mt-5">
                        <div class="card" style="width: 18rem;">
                            <img class="card-img-top" src="https://media.istockphoto.com/id/1327592506/vector/default-avatar-photo-placeholder-icon-grey-profile-picture-business-man.jpg?s=612x612&w=0&k=20&c=BpR0FVaEa5F24GIw7K8nMWiiGmbb8qmhfkpXcp1dhQg=" alt="Card image cap">
                            <div class="card-body">
                                <h5 class="card-title"><?php echo $student->name; ?></h5>
                                <p class="card-text"><?php echo $student->email; ?></p>
                                <p class="card-text"><span>dob:</span><?php echo $student->dob; ?></p>
                                <p class="card-text"><span>Age:</span><?php echo $student->age; ?></p>
                                <a href="#" class="btn btn-primary">view Profile</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>