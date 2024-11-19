<?php
// Defining the Book class
class Book {
    // Properties
    public $title;
    public $author;
    public $price;

    // Constructor
    public function __construct($title, $author, $price) {
        $this->title = $title;
        $this->author = $author;
        $this->price = $price;
    }

    // Method to display book details
    public function displayDetails() {
        echo "Title: {$this->title}<br>";
        echo "Author: {$this->author}<br>";
        echo "Price: Rs{$this->price}<br>";  // Added dollar sign for price formatting
    }
}

// Creating an object for the Book class
$book1 = new Book("Dairy of an young girl", "Anne Frank", 250);
$book2 = new Book ("My Experiment with truth" , "Mahatama Gandhi" , "320");

// Displaying the details of the book
$book1->displayDetails();
$book2->displayDetails();
?>
