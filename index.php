<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <title>TZOKER GAME</title>
</head>
<body>
    <div class="container">
        <H3 align="center"> 
            TZOKER GAME SIMULATOR
        </H3>
        <div class="box">
            <img src="images/logo.jpg" class="d-block mx-auto col-sm-8" alt="logo">
        </div>
        <form action="" method="post">
            <div class='col-sm-10'>
                <label for="title" class="for">Type 5 Numbers between 1 and 45</label>
            </div>
            <div class="form-group">
                <input type="text" class="col-sm-2" name="number-1" required>
                <input type="text" class="col-sm-2" name="number-2" required>
                <input type="text" class="col-sm-2" name="number-3" required>
                <input type="text" class="col-sm-2" name="number-4" required>
                <input type="text" class="col-sm-2" name="number-5" required>
            </div>
            <div class='form-group'>
                <label for="title" class="col-sm-10">Type 1 Number between 1 and 20</label>
                <input type="text" class="col-sm-10" name="tzoker" required>
            </div>
            <div class='form-group'>
                <input class = 'btn btn-primary col-sm-5' type = 'submit' name = 'play' value = 'PLAY TZOKER'>
                <input class = 'btn btn-primary col-sm-5' type = 'submit' name = 'info' value = 'ABOUT' onclick='about()'>
            </div>
        </form>
    </div>
    <div class="container">
        <footer class="bg-light text-center text-lg-start">
            <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2)">
                © <?php echo date("Y"); ?> Created by Nikolaos Psaltakis
            </div>
        </footer>
    </div>
        <script>
            function about() {
                $message1 = "TZOKER SIMULATOR.\n";
                $message2 = "The user choose 5 numbers betwwen 1 and 45 \n and 1 number between 1 and 20.\n This is created for education proposes";
                $message3 = "Programmer : Nikolaos Psaltakis";
                alert($message1 + $message2 + $message3);
            }
        </script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>
</body>
</html>