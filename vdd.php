<?php
// khai báo lớp.
class Animal {
    public $name = "";
    Protected $age = "";
    private $gender = "";

    //phương thúc  thiết lập giá trị thuộc tính  name.
    function setName($ts_name){
        $this->name = $ts_name;
    }
    // trả về giá trị thuộc tính name.
    function getName(){
        return $this->name;
    }
    //phương thức giá trị thiết lập giá trị thuộc tính age.
    function setAge($ts_age){
        $this->age = $ts_age;
    }
    //trả về giá trị thuộc tính age.
    function getAge(){
        return $this->age;
    }
    //phương thức trả về giá trị thuộc tính gender.
    function setGender($ts_gender){
        $this->gender = $ts_gender; 
    }
    //trả về giá trị thuộc tính gender.
    function getGender(){
        return $this->gender;
    }
}
//khởi tạo đối tượng.
 $dog = new Animal ();

 //gọi tới phương thúc giá trị thuộc tính name.

 $dog->setName("Tuan");

 //gọi tới phương thưc thiết lập giá trị thuộc tính age.

 $dog->setAge(17);

 //gọi tới phương thúc thiết lập giá trị là gender.

 $dog->setGender("Nam");

//  echo "<pre>";
//  echo print_r($dog);
//  echo "</pre>";

 //gọi tới phương thức trả về giá trị thuộc tính name.
 echo $dog->getName();
 echo "<br>";
 //gọi tới phương thức trả về giá trị thuộc tính age.
 echo $dog->getAge();
echo "<br>";
 //gọi tới phương thúc trả về giá trị thuộc tính gender.
 echo $dog->getGender();