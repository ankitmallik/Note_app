<?php
session_start();
include('config.php');
?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <!-- <style>
        * {
            border: 2px solid red;
        }
    </style> -->

</head>

<body>
    <div class="container">
        <div class="d-flex align-items-center justify-content-between my-2">
            <h1> Notes</h1>
            <a href="./logout.php" class="btn border border-primary btn-primary my-4 btn-lg float-right">
                <i class="fa-solid fa-right-from-bracket text-white "></i>
    </a>
        </div>

        <form action="mynotes.php" method="post">

            <div class="form-floating">
                <textarea class="form-control" name="name" placeholder="Leave a comment here" id="floatingTextarea"></textarea>
                <label for="floatingTextarea">Write Something</label>

                <button class="btn btn-primary my-4" type="submit" name="submit">Add Notes</button>
            </div>

        </form>

        <!-- show notes -->

        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Id</th>
                    <th scope="col">Notes</th>
                    <th scope="col">Delete</th>
                    <th scope="col">Update</th>

                </tr>
            </thead>
            <tbody>




                <?php
                if ($_SESSION['admin']) {
                    $id = $_SESSION['admin'];

                    $sql = "SELECT * FROM data WHERE user_id = '$id'";
                    $result = mysqli_query($conn, $sql);
                    if ($result) {
                        while ($row = mysqli_fetch_assoc($result)) {
                            echo '    <tr>
            <th scope="row">' . $row['id'] . '</th>
            <td>' . $row['notes'] . '</td>
            <td><button class="btn btn-danger"><a href="delete.php?deleteid=' . $row['id'] . '"><i class="fa-solid fa-trash text-white"></i></a></button></td>
            <td><button class="btn btn-success"><a href="update.php?updateid=' . $row['id'] . '"><i class="fa-solid fa-pen text-white"></i></a></button></td>
            
        </tr>';
                        }
                    }
                }

                ?>


            </tbody>
        </table>


    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>