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
    $isbnToSearch = $_POST['isbn'];
    $isexist = 0;
    $json = file_get_contents('books.json');
    $books = json_decode($json, true);
    // Search for the book with the given ISBN and remove it from the array
    $c = 0;
    foreach ($books as $key => $book) {
        $c++;
        if ($book['isbn'] === $isbnToSearch) {
            $isexist = 1;
            echo '<div>';
            echo '<table>';
            echo '<tr>';
            echo '<th>Index</th>';
            echo '<th>Title</th>';
            echo '<th>Author</th>';
            echo '<th>Available</th>';
            echo '<th>Pages</th>';
            echo '<th>ISBN</th>';
            echo '</tr>';
                echo '<tr>';
                echo '<td>' . $c . '</td>';
            foreach ($book as $val) {
                echo '<td>' . $val . '</td>';
            }
            echo '</tr>';
            echo '</table>';
            echo '</div>';
            break; 
        }
    }
   
    if($isexist>0){
        echo "<br>Book found successfuly.";

        // exit();
    }
    else 
        echo 'ISBN having such book, not found.';

    
?>
</head>
<body>
    <!-- <button class="custom-button" onclick="location.href='home.php'">Home</button>
    <button class="custom-button" onclick="location.href='home.php'">Home</button> -->
    <div class="button-container">
        <!-- <div class="button-row">
            <button class="custom-button" onclick="location.href='searchform.php'">Go back</button>
        </div> -->
        <div class="button-row">
            <button class="custom-button" onclick="location.href='home2.php'">Home</button>
        </div>
    </div>
</body>
</html>


