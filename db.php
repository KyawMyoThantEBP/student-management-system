<?php
class DB 
{
    protected $pdo;

    public function __construct() 
    {
        try {
            $this->pdo = new PDO("mysql:dbname=school;host=localhost", "root", "kmt");
            $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            
        } catch(PDOException $e){
            die($e -> getMessage());
        } catch (Exception $e) {
            echo $e -> getMessage();
        }
    }   

    public function index()
    {
        $statement = $this -> pdo -> query("SELECT * FROM students ORDER BY id DESC");
        if($statement) {
            return $result = $statement -> fetchAll();
        }

    }

    public function show()
    {
        $statement = $this -> pdo -> prepare("SELECT * FROM students WHERE id = :id");
        $statement -> bindParam(":id", $_GET['id']);
        if($statement -> execute()) {
            return $student = $statement -> fetch(PDO::FETCH_OBJ);
        }
    }

    public function update()
    {
        $statement = $this -> pdo -> prepare("
        UPDATE students SET name = :name, email= :email, gender = :gender, dob = :dob, age = :age WHERE id= :id ");
   
        $statement -> bindParam(":id", $_POST['id']);
        $statement -> bindParam(":name", $_POST['name']);
        $statement -> bindParam(":email", $_POST['email']);
        $statement -> bindParam(":gender", $_POST['gender']);
        $statement -> bindParam(":dob", $_POST['dob']);
        $statement -> bindParam(":age", $_POST['age']);
        
        if($statement -> execute()) {
            $student = $this -> pdo -> lastInsertId();
            header("location: edit.php?id=".$_POST['id']);
        }
    }

    public function delete()
    {
        $result = $this -> pdo -> query("
             DELETE FROM students WHERE id =".$_GET['id']);
             header("location:index.php");
    }

    public function store()
    {
        if($_POST) {
            $statement = $this -> pdo -> prepare("
                INSERT INTO students(`name`, `email`, `gender`, `dob`, `age`)VALUES(:name, :email, :gender, :dob, :age)"
            );
    
            $statement -> bindParam(":name", $_POST['name']);
            $statement -> bindParam(":email", $_POST['email']);
            $statement -> bindParam(":gender", $_POST['gender']);
            $statement -> bindParam(":dob", $_POST['dob']);
            $statement -> bindParam(":age", $_POST['age']);
                
            if($statement -> execute()) {
                header("location: index.php");
            }
        }
    }
}