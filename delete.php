<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>Home</title>
    <style>
        body {
        height: 100vh;
    }
    </style>

<?php
    $isbnToDelete = $_POST['isbn'];
    $isexist = 0;
    $json = file_get_contents('books.json');
    $books = json_decode($json, true);
    // Search for the book with the given ISBN and remove it from the array
    foreach ($books as $key => $book) {
        if ($book['isbn'] === $isbnToDelete) {
            unset($books[$key]);
            $isexist = 1;
            // echo "nourin2<br>";
            break; 
        }
    }
   
    if($isexist>0){
        $updatedJson = json_encode(array_values($books), JSON_PRETTY_PRINT);
        file_put_contents('books.json', $updatedJson);
        // header('Location: delete.php'); 
        echo "Book deleted successfuly.";

        // exit();
    }
    else 
        echo 'ISBN not found.';

    
?>
</head>
<body>
    <!-- <button class="custom-button" onclick="location.href='home.php'">Home</button>
    <button class="custom-button" onclick="location.href='home.php'">Home</button> -->
    <div class="button-container">
        <!-- <div class="button-row">
            <button class="custom-button" onclick="location.href='deleteform.php'">Go back</button>
        </div> -->
        <div class="button-row">
            <button class="custom-button" onclick="location.href='home2.php'">Home</button>
            <!-- <button class="custom-button" onclick="location.href='read.php'">Read all Books</button> -->
        </div>
    </div>
</body>
</html>


