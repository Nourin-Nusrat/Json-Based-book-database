<?php


    if ($_SERVER["REQUEST_METHOD"] == "GET") {
        // Access form data
        $title = $_GET['title'];
        $author = $_GET['author'];
        $available = $_GET['available'];
        $pages = $_GET['pages']; 
        $isbn = $_GET['isbn']; 
    
        // Read existing JSON data
        $json = file_get_contents('books.json');
        $books = json_decode($json, true);
    
        $newBook = [
            "title" => $title,
            "author" => $author,
            "available" => $available,
            "pages" => $pages,
            "isbn" => $isbn
        ];
    
        $books[] = $newBook;
        $jsonUpdated = json_encode($books, JSON_PRETTY_PRINT);
        file_put_contents('books.json', $jsonUpdated);

        header('Location: home2.php'); 
        // echo '<pre>' . $jsonUpdated . '</pre>';
    
    }


?>