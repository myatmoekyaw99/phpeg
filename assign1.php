<!DOCTYPE html>
<html>
    <head><title>Student Registration</title>
<body>
    <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
    Name: <input type="text" name="name"> <br><br>
    E-mail: <input type="email" name="mail"> <br><br>
    Phone: <input type="phone" name="phone"> <br><br>
    
    Township:
    <select name="township">
            <option value="">Select...</option>
            <option value="insein">Insein</option>
            <option value="kamayut">Kamayut</option>
            <option value="baham">Baham</option>
    </select> <br><br>

    Grade:
    <input type="radio" name="grade" value="fourth">Fourth year
    <input type="radio" name="grade" value="fifth">Fifth year
    <br><br>

    Subject:
    <input type="checkbox" name="sub[]" value="501">501
    <input type="checkbox" name="sub[]" value="502">502
    <input type="checkbox" name="sub[]" value="503">503
    <input type="checkbox" name="sub[]" value="501">501
    <br><br>
    <input type="submit" name="submit" value="Submit"> 

    </form>
    <hr>
    <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
        
            $name = $_POST['name'];
            $mail = $_POST['mail'];
            $phone = $_POST['phone'];
            $township=$_POST['township'];
            $grade=$_POST['grade'];
            $subject=$_POST['sub'];

            if (empty($name)) {
              echo "Name is empty";
            } else {
              echo "Name : ".$name,"<br>";
            }

            if (empty($mail)) {
                echo "E-mail is empty";
              } else {
                echo "E-mail : ".$mail,"<br>";
              }
            
            if (empty($phone)) {
                echo "Phone is empty";
            } else {
                echo "Phone No : ".$phone,"<br>";
            }

            if (empty($township)) {
                echo "Township is empty";
            } else {
                echo "Township : ".$township,"<br>";
            }

            if (empty($grade)) {
                echo "Grade is empty";
            } else {
                echo "Grade : ".$grade,"<br>";
            }

            if(empty($subject)) 
                {
                    echo("You didn't select any subjects.");
                } 
                else 
                {
                    $sub = count($subject);

                    echo("You selected $sub subjects: ");
                    for($i=0; $i < $sub; $i++)
                    {
                    echo($subject[$i] . " ");
                    }
            }


          }
    ?>

</body>
</html>
