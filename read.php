<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>Book List</title>
    <style>
         body {
            background-color: aliceblue;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            height: 100vh;
            margin: 0;
            overflow-y: auto;
        } 
    </style>
</head>
<body>
    <?php
        $json = file_get_contents('books.json');
        $books = json_decode($json, true);
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
        $c = 1;
        foreach ($books as $book) {
            echo '<tr>';
            echo '<td>' . $c . '</td>';
            $c++;
            foreach ($book as $val) {
                echo '<td>' . $val . '</td>';
            }
            echo '</tr>';
        }
        echo '</table>';
        echo '</div>';
    ?>
    <br>
   <div class="button-container">
        <div class="button-row">
            <button class="custom-button" onclick="location.href='home2.php'">Home</button>
            <!-- <button class="custom-button" onclick="location.href='search.php'">search Books</button> -->
        </div>
    </div>
</body>
</html>
