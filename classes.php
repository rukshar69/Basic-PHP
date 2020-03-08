<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title></title>

</head>

<body>

<?php
 class Book{
     var $title;
     var $author;
     var $pages;

     function __construct($aTitle, $aAuthor, $aPages)
     {
         echo "New book created <br>";
         $this->title = $aTitle;
         $this->author = $aAuthor;
         $this->pages = $aPages;
     }
 }

 class Student{
     var $name;
     var $major;
     var $gpa;

     function __construct($name, $major, $gpa)
     {
         $this->name = $name;
         $this->major = $major;
         $this->gpa = $gpa;
     }

     function  hasHomors(){
         if ($this->gpa >= 3.5){
             return "true";
         }
         return "false";
     }
 }

 class Movie{
     private $title;
     private $rating;
     function __construct($title, $rating)
     {
         $this->title = $title;
         $this->rating = $rating;
     }

     function getRating(){
         return $this->rating;
     }

     function getTitle(){
         return $this->title;
     }

     function setRating($newRating){
        // $this->rating = $newRating;
        if($newRating == "G" || $newRating == "PG" || $newRating == "PG-13"|| $newRating=="R"||$newRating=="NR"){
            $this->rating = $newRating;
        }
        else{
            $this->rating = "invalid";
        }
     }

     function setTitle($newTitle){
         $this->title = $newTitle;
     }
 }

 $avenges = new Movie("Avengers","PG-13");
// echo $avenges->title;
 echo  $avenges->getRating();
echo  $avenges->getTitle();
 //$book1 = new Book("Haary Potter", "JK Rowling", 500);
// $book1->title = "Harry Potter";
// $book1->author = "JK Rowling";
// $book1->pages = 400;

//$book2 = new Book("Lord of The Rings","Tolkien",4000);
//$book2->title = "Lord of The Rings";
//$book2->author = "Tolkien";
//$book2->pages = 4000;

//echo "$book2->title <br>";
//echo "$book2->author <br>";
//echo "$book2->pages <br>";

//$student1 = new Student("Abir","Science",3.4);
//$student2 = new Student("Esmeralda","Arts",3.9);

//echo $student2->hasHomors();
?>
</body>

</html>
