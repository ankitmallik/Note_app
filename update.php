<?php

include('config.php');


$id = $_GET['updateid'];
if (isset($_POST['submit'])) {
    $note = $_POST['name'];
    $upd = "UPDATE `data` SET `notes`='$note' WHERE id ='$id'";
    $result = mysqli_query($conn, $upd);
    // $row = mysqli_fetch_assoc($result);
    if ($result) {
        echo '<script>alert("Updated")</script>';
        header('location:index.php');
    }
}
?>


<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <h1>My Notes</h1>



        <form action="" method="post">

            <div class="form-floating">
                <textarea class="form-control" name="name" placeholder="Leave a comment here" id="floatingTextarea"></textarea>
                <label for="floatingTextarea">Write Something</label>

                <button class="btn btn-primary my-4" type="submit" name="submit">Update</button>
            </div>

        </form>

    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>