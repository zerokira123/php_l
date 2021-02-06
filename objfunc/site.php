<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>php</title>
</head>

<body>
    <?php
    //error_reporting(E_ERROR | E_PARSE);
    //error_reporting(E_ALL ^ E_WARNING); 

        class Student{
            var $name;
            var $major;
            var $gpa;
            function __construct($name, $major, $gpa){
                $this->name =$name;
                $this->major = $major;
                $this->gpa = $gpa;
            }

            function hasHonors(){
                if($this->gpa >=  3.5){
                    return "true";
                }else {
                    return "false";
                }
            }
        }

        $Student1 = new Student("jim", "Bussiness", 2.8);
        $Student2 = new Student("pam","Art",3.6);


        echo $Student1->hasHonors();
        echo  $Student2->hasHonors();
 
    ?>
</body>
</html>