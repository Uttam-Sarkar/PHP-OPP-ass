<?php
        require 'Book.php';
        require 'Customer.php';

        $books = [""];       


        $customer1 = new Customer(3, 'John', 'Doe', 'johndoe@mail.com');
        $customer2 = new Customer(7, 'James', 'Bond', '007@mail.com');
        $book1 = new Book("1984", "George Orwell", 9785267006323, 1);
        $book2 = new Book("To Kill a Mockingbird", "Harper Lee", 9780061120084,2);
        $books = [$book1, $book2];                
    
        echo "<b>Available Books:<br></b>";
        echo "<b>(__tooString)<br></b>";
        foreach($books as $value){
            echo $value."<br>";
        }
        echo "<br><b>(addCopy())<br></b>";
       echo "Add 5 copy of books named '1984'. Now available books of '1984': ";
       echo $book1->addCopy(5)."<br>";
       echo "<br><b>(getCopy())(getter)<br></b>";
        echo "Get a copy of '1984': ";
       if( $book1->available ){
        $book1->getCopy();
        echo "<b>It is available</b><br>";
        echo "Now available : ";
        echo $book1->addCopy(0)." copy <br>";
       }


       echo "<br><b>Customer</b>";
       $customers = [""];     
       $customer1 = new Customer(3, 'John', 'Doe', 'johndoe@mail.com');
       $customer2 = new Customer(7, 'James', 'Bond', '007@mail.com');
       $customers = [$customer1,$customer2];

       echo "<b>Available Customers:<br></b>";
       foreach($customers as $value){
           echo $value."<br>";
       }
       echo "<br><b>(__set())(__get())<br></b>";
       $customer1->email = "uttamsarkar678@gmail.com" ;
       echo "Email: ". $customer1->email."<br><br>";
       foreach($customers as $value){
        echo $value."<br>";
    }



      
?>
