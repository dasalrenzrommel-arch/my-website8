?php
class Student {
    public $name;
    public $age;
    public $course;

    // Constructor to initialize properties
    public function __construct($name, $age, $course) {
        $this->name = $name;
        $this->age = $age;
        $this->course = $course;
    }

    // Method to display student details
    public function displayInfo() {
        echo "Name: " . $this->name . "\n";
        echo "Age: " . $this->age . "\n";
        echo "Course: " . $this->course . "\n";
        echo "--------------------\n";
    }
}

// Instantiate 3 Student objects
$student1 = new Student("Joshua", 20, "Computer Science");
$student2 = new Student("Mark Johnson", 22, "Mechanical Engineering");
$student3 = new Student("John Mark", 19, "Fine Arts");

// Call displayInfo() for each student object
$student1->displayInfo();
$student2->displayInfo();
$student3->displayInfo()