<?php
// class ,method and Object
// start 
// class Person {
//     // property
//     public $name = "hasan";
//     public $age  = 21;
//     // methods
//     public function fullName($fName){
//         echo "My name is : " . $fName;
//     }

// }

// $obj  = new Person();
// print_r($obj) ;
// echo "</br>";
// echo $obj->name;
// echo "</br>";
// $obj->fullName("mahdi hasan Rafi");


// end


// $this Keyword

// class Student{
    // public $name ;
    // public $age;
    // public $profession;
// 
    // set
    // public function setName($name){
        // $this->name = $name;
// 
    // }
    //  public function setAge($age){
        //    $this->age  = $age;
    //    } 
    //   public function setProfession($pro){
        //  return $this->profession  = $pro;
    //   } 
    //   
// 
// 
// 
// 
    // get
    // function getName(){
        // return $this->name;
    // }
    // public function getAge(){
        // echo $this->age;
    // }
    // public function getProfession(){
        // return $this->profession;
    // }
// }
// $obj = new Student();
// 
// 
// set
// $obj->setName("Mahdi");
// $obj->setAge(18);
// $obj->setProfession("Student");
// 
// 
// 
// 
// get
// echo $obj->getName();echo "<br>";
//  $obj->getAge();echo "<br>";
// echo $obj->getProfession();echo "<br>";
// 
// 
// 











// Inheritance

// class ParentClass {
//     public $name = "mahdi";
//     public $age  = 20;
//     public function raceName(){
//         return $rName = "Fokir";
//     }
// }

// class ChildClass extends ParentClass {
   
//     public function name(){
//         echo $this->name;
//     }
// }


// $obj = new ParentClass();

// echo (new ChildClass)->raceName();echo "<br>";
// (new ChildClass)->name()












// Access Modifier

// public private protected



// class AccessModifier{
//     public $name  = "I am public" ; //can access to anywher
//     private $age = "50";//can't access anywwher but i can access via public method ;;only access from own class
//     protected $nname = "I am Proteted"; //own class and sub class 


//     public function age(){
//         return $this->age; //can access from outside
//     }
//     private function privateAge(){
//         return $this->age; //can't access 
//     }

//     protected function p(){
//         return $this->nname;
//     }
// }



// // echo (new AccessModifier())->age();
// // echo (new AccessModifier())->privateAge();
// // echo (new AccessModifier())->p();



// class ChildClass extends AccessModifier{
//     public function u(){
//        return $this->nname;
//     }
// }
// echo (new ChildClass)->u(); //sub class access










// //class Constant

// class TestConst{
//     protected const NAME = "Mahdi Hasan Rafi";

//     public function gAccess(){
//         return self::NAME;
//     }
//     protected function getName(){
//        echo self::NAME;

//     }
// }

// class Child extends TestConst{
//     public function gName(){
//         return self::NAME;
//     }
// }

// echo (new Child())->gName();//for sub class, protected give to access
// echo "<br>";
// echo (new TestConst())->gAccess(); 



// 









//prevanting method overload in child class

// class preventOverride{
//     public final function name(){
//         return "my name is rafi";
//     } //if write final can't override from sub classs otherwise possible
// }

// class Child extends preventOverride{
//     public function name(){
//         return "M";
//     } 
// }

// echo (new Child())->ndame()







//construct method


// class Student{
//     protected $name;
//     protected $age;

//     function __construct($name,$age){
//         echo $name;
//         echo "<br>";
//         echo $age; 
//         echo "<br>";
//         $this->name($name);
        
//     }

//     public function name($name){
//       echo $this->name = $name;
//     }
// }
// $obj = new Student("hasan", 16);























// pass data to parent from child



class Student{
    public $name;
    function __construct($name){
        $this->name = $name;
    }
}


class Child extends Student{
    public $name;
    function __construct($name){

       Parent::construct('adfa');
    }
}
new Child("mahdi");












?>