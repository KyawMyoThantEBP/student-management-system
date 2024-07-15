<?php
// require_once("db.php");
// require_once("helpers.php");
require_once("vendor/autoload.php");

$db = new DB();
$result = $db -> index();

// dd(__DIR__);
// dd($result);

$hello = new Test();
dd($hello -> hello());

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
            <a href="create.php" class="btn btn-outline-primary mb-3">Create New Student</a>
            <div class="row">
                <?php foreach($result as $value): ?>
                <div class="col-12 col-md-3 col-lg-4 ">
                    <div class="card mb-3" style="width: 18rem;">
                        <img class="card-img-top" src="https://media.istockphoto.com/id/1327592506/vector/default-avatar-photo-placeholder-icon-grey-profile-picture-business-man.jpg?s=612x612&w=0&k=20&c=BpR0FVaEa5F24GIw7K8nMWiiGmbb8qmhfkpXcp1dhQg=" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title"><?php echo $value['name']; ?></h5>
                            <p class="card-text"><?php echo $value['email']; ?></p>
                            <p class="card-text"><span>dob:</span><?php  echo $value['dob']; ?></p>
                            <p class="card-text"><span>Age:</span><?php echo $value['age']; ?></p>
                            <a href="details.php?id=<?php echo $value['id']; ?>" class="btn btn-primary">view Profile</a>
                        </div>
                    </div>
                </div>
                <?php endforeach ?>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>