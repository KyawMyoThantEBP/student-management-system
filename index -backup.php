<?php
    require_once("vendor/autoload.php");

    use App\Ultis\Database;

    $db = new Database();

    // retrieve data 
    // $result = Student::get();

    // $students = Student::all();
    // dd($students);

    // $student = Student::find(31);
    // dd($student);

    $results = $db -> index();


    //create data

    // first method 
    // $student = new Student();
    // $student -> name = "John Doe";
    // $student -> email = "john@gmail.com";
    // $student -> gender = "male";
    // $student -> dob = "2012-02-03";
    // $student -> age = 18;
    // $student -> save();

    // second method 
    // $student = Student::create([
    //     'name' => "Marry",
    //     'email' => "marry@gmail.com",
    //     'gender' => "female",
    //     'dob' => "2012-02-03",
    //     'age' => "18",
    // ]);

    // update data 
    // $student = Student::find(31);
    // $student -> age = 90;
    // $student -> save();

    // many update data 
    // Student::where('age', ">=", 25 )->update([
    //     'age' => 22
    // ]);

    // delete data 
    // $student = Student::find(37);
    // $student -> delete();
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
                <?php foreach($results as $value): ?>
                <div class="col-12 col-md-3 col-lg-4 ">
                    <div class="card mb-3" style="width: 18rem;">
                        <img class="card-img-top" src="https://media.istockphoto.com/id/1327592506/vector/default-avatar-photo-placeholder-icon-grey-profile-picture-business-man.jpg?s=612x612&w=0&k=20&c=BpR0FVaEa5F24GIw7K8nMWiiGmbb8qmhfkpXcp1dhQg=" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title"><?php echo $value -> name; ?></h5>
                            <p class="card-text"><?php echo $value-> email; ?></p>
                            <p class="card-text"><span>dob:</span><?php  echo $value->dob; ?></p>
                            <p class="card-text"><span>Age:</span><?php echo $value->age; ?></p>
                            <a href="details.php?id=<?php echo $value->id; ?>" class="btn btn-primary">view Profile</a>
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