<h2> classes </h2>
<?php

// oop object oriented programing
// oop pillars 
// inheritence
// encapsulation
// polymorphism
// abstraction

//classes

class names{
    public $a, $b;

    public function display(){
        echo "welcome to my website <br>";
      //  echo "$this->a and $this-> b";
    }
}
$obj = new names();
$obj-> a = "sadia";
$obj-> b = "bader";
$obj->display();
$obj-> a = "suhaib";
$obj-> b = "shazil";
?>


  <!-- <h2>Form </h2>
<form action="first.php" method="POST">
    <div class="form-group">
        <label for="fname" class="form-label"> First Name</label>
<input type="text" class="form-control" name="fname">
<br><br>
<label for="lname" class="form-label"> last Name</label>
<input type="text" class="form-control" name="lname">
<br><br>
<button type="submit" class="btn btn-primary" value="submit" name="submit">submit</button>
</div>
</form> -->

<?php

// if(isset($_POST['submit'])){

//     $firstname = $_POST['fname'];
//     $lastname = $_POST['lname'];

//     class submit{
//         public $fname,$lname;

//         public function display(){
//             echo "$this->fname $this->lname";
//         }
//     }

//     $object =  new submit();
//     $object-> fname = $firstname;
//     $object-> lname = $lastname;
//     $object-> display(); 
// }
?>

<!-- <h2> constructor function</h2> -->
<?php
// class persons{
 
//    public $fname, $lname;

//    public function __construct($fname,$lname){
//      echo "your Firstname is : $this->fname <br> your lastname is : $this->lname <br>";
//    }
//   }
// $firstperson = new persons("sadia", "bader");
// $secondperson = new persons("suhaib", "shazil");
// $thirdperson = new persons("filza", "niwar");

?>
   <!-- <h2>Form </h2>
<form action="first.php" method="POST">
<label for="">first name</label>
<input type="text"name="fname">
<label for="">last name</label>
<input type="text"name="lname">
<input type="submit"name="register"> -->

</form>

<?php

// if(isset($_POST['submit'])){

//      $fname = $_POST['fname'];
//       $lname = $_POST['lname'];

//       class persons{
 
//     //    public $fname, $lname;
     
//         public function __construct($fname, $lname){
//           echo "your Firstname is : $fname <br> your lastname is : 
//           $lname <br>";
//         }
//       }  
     
//      $firstperson = new persons($fname,$lname);

// }


// inheritence


class parents{

  public $father;

  public function display_parent(){
    echo " i am your $this->father <br>";
    echo " parent method <br>";
  }
}

class childs extends parents{
  public function display_child(){
    echo "child method";
  }
}
$parent = new parents();
$parent->display_parent();
//$parent->father = "walid";
$child = new childs();
$child->display_parent();
$child->father = "walid"
?>











