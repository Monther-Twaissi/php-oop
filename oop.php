<?php
class Student
{
    protected $id;
    protected $name;
    protected $email;
    protected $mobile_number;

    public function __construct($id, $name, $email, $mobile_number)
    {
        $this->name = $name;
        $this->id = $id;
        $this->email = $email;
        $this->mobile_number = $mobile_number;
    }
    function getName()
    {
        return $this->name;
    }
    function getNumber()
    {
        return $this->mobile_number;
    }
}

class Teacher extends Student
{
    protected $salary;
    protected $subjects = [];

    public function __construct($id, $name, $email, $mobile_number, $salary, $subjects)
    {
        $this->id = $id;
        $this->name = $name;
        $this->email = $email;
        $this->mobile_number = $mobile_number;
        $this->salary = $salary;
        $this->subjects = $subjects;
    }

    function getSalary()
    {
        return $this->salary;
    }

    function getSubjects()
    {
        return $this->subjects;
    }
}

$sara = new Student(123443, "Sara", "email:eva@orange.com", "0777777777");
$sadi = new Teacher(96432, "Sadi", "adam@orange.com", "0777788888", 800, ["English", "Arabic", "Math", "science"]);
