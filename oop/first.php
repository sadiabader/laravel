<?php

// oop object oriented programing
// oop pillars 
// inheritence
// encapsulation
// polymorphism
// abstraction

//classes

// class names{
//     public $a, $b;

//     public function display(){
//         echo "welcome to my website <br>";
//         echo "$this-> a and $this->b";
//     }
// }
// $obj = new names();
// $obj-> a = "sadia";
// $obj-> a = "bader";
// $obj->display();
// $obj-> a = "suhaib";
// $obj-> a = "shazil";
// ?>

<form action="first.php" method="POST">
    <div class="form-group">
        <label for="fname" class="form-label"> First Name</label>
<input type="text" class="form-control" name="fname">
<br><br>
<label for="lname" class="form-label"> last Name</label>
<input type="text" class="form-control" name="lname">
<br><br>
<button type="submit" class="btn btn-primary" value="submit">submit</button>
</div>
</form>
<?php

if(isset($_POST['submit'])){

    $firstname = $_POST['fname'];
    $lasttname = $_POST['lname'];

    class submit{
        public $fname,$lname;

        public function display(){
            echo "$this->fname and $this->lname";
        }
    }

    $obj =  new submit();
    $obj-> fname = "firstname";
    $obj-> lname = "lasttname";
    $obj-> display(;)
}
?>

