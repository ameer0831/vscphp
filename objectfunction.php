<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
   <?php  
   class student {
    var $name ;
    var $major;
    var $gpa;

    function __construct($name, $major, $gpa){
       
        $this->name=$name;
        $this->major=$major;
        $this->gpa=$gpa;
    }
    function hashonors(){
        if($this->gpa>=3.5){
            return "true";
        }
        return "false";
    }
   }
   $student1 = new student("ameer", "business",2.8);
   $student1 = new student("pandu", "singing",3.8);

   echo $student1->hashonors();
   ?> 
</body>
</html>