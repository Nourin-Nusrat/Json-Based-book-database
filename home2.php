<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>Document</title>

</head>
<body>
    <h1>Book Management System</h1>

    <div class="button-container">
        <button class="custom-button" onclick="location.href='read.php'">Read Books</button>
    </div>
    <br>
    <div class="form-row">
    <form method="post" action="search.php" class="side-by-side-form">
        <div class="form-group">
            <label for="isbn">ISBN :</label>
            <input type="number" name="isbn" id="isbn" placeholder="Enter ISBN" required>
        </div>
        <div class="form-group">
            <input type="submit" value="Search Book">
        </div>
    </form>
    <form method="post" action="delete.php" class="side-by-side-form">
        <div class="form-group">
            <label for="isbn">ISBN :</label>
            <input type="number" name="isbn" id="isbn" placeholder="Enter ISBN to delete" required>
        </div>
        <div class="form-groupdel">
            <input type="submit" value="Delete Book">
        </div>
    </form>
    </div>

    <h3>Give book details</h3>

    <form method="get" action="test.php">
        <div class="form-group">
            <label for="title">Title :</label>
            <input type="text" name="title" id="title" placeholder="Type Title" size="40" required>
        </div>

        <div class="form-group">
            <label for="author">Author :</label>
            <input type="text" name="author" id="author" placeholder="Type Author" size="40" required >
        </div>

        <div class="form-group">
            <label for="available">Available :</label>
            <input type="text" name="available" id="available" placeholder="Type Availability" size="40" required >
        </div>

        <div class="form-group">
            <label for="pages">Pages :</label>
            <input type="number" name="pages" id="pages" placeholder="Type Pages" size="40" required >
        </div>

        <div class="form-group">
            <label for="isbn">ISBN :</label>
            <input type="number" name="isbn" id="isbn" placeholder="Type ISBN" size="40" required >
        </div>

        <input type="submit" value="Add" >
        <!-- <input type="submit" value="Home" class="custom-button" onclick="location.href='home.php'"> -->
        <!-- <button class="custom-button" onclick="location.href='home.php'">home</button> -->
    </form>
</body>
</html>
