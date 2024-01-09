<!-- <?php
class employee{
    public $name,$age,$salary;
    function __construct($name,$age,$salary){
        echo "<h3>Employee Profile</h3>";
        $this->name=$name;
        $this->age=$age;
        $this->salary=$salary;
    }
    function info(){
        echo "Employee Name = ".$this->name;
        echo "<br>Employee Age = ".$this->age;
        echo "<br>Employee Salary = ".$this->salary;
    }
}
class manager extends employee{
    function __construct($name,$age,$salary){
        echo "<h3>Manager Profile</h3>";
        $this->name=$name;
        $this->age=$age;
        $this->salary=$salary;
    }
}
$emp=new employee("rahul",19,20000);
$emp->info();
$manager=new manager("yash",20,100000);
$manager->info();
?> -->