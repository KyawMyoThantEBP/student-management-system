<?php
namespace App\Ultis;
use Illuminate\Database\Capsule\Manager as DB;

class Database
{
    protected $pdo;

    public function __construct() 
    {
        $db = new DB;

        $db->addConnection([
            'driver' => 'mysql',
            'host' => 'localhost',
            'database' => 'school',
            'username' => 'root',
            'password' => 'kmt',
            'charset' => 'utf8',
            'collation' => 'utf8_unicode_ci',
            'prefix' => '',
        ]);


        // Make this Capsule instance available globally via static methods... (optional)
        $db->setAsGlobal();

        // Setup the Eloquent ORM... (optional; unless you've used setEventDispatcher())
        $db->bootEloquent();
    }   

    public function index()
    {
        
        $students = DB::table("students")->get();
        return $students;
    }



    public function show($id)
    {
        $student = DB::table('students')->where('id', $id)->first();
        return $student;
    }


    public function update($data)
    {
        $updateStudent = DB::table('students')
              ->where('id', $data['id'])
              ->update([
                'name' => $data['name'],
                'email' => $data['email'],
                'gender' => $data['gender'],
                'dob' => $data['dob'],
                'age' => $data['age'],
              ]);

        if($updateStudent) {
            header("Location: index.php");
        }      
    }


    public function delete($id)
    {
        $student = DB::table('students')->where('id', $id)->delete();
        if($student) {
            header("Location: index.php");
        }
    }


    public function store($data)
    {
        $insertStudent = DB::table('students')->insert([
            'name' => $data['name'],
            'email' => $data['email'],
            'gender' => $data['gender'],
            'dob' => $data['dob'],
            'age' => $data['age'],
        ]);

        if($insertStudent) {
            header("Location: index.php");
        }
    }
}




