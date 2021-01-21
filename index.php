<?php
    session_start();
    include "includes/functions.php";
    $_SESSION['gen_numbers'] = isset($_SESSION['gen_numbers']) ? $_SESSION['gen_numbers'] : genNumbers();
    $_SESSION['gen_tzoker'] = isset($_SESSION['gen_tzoker']) ? $_SESSION['gen_tzoker'] : genTzoker();
    $message = '';
    $message2 = '';
    $message3 = '';
    $numbers = [];
    if(isset($_POST['play'])) {
        $num1 = $_POST['number-1'];
        $num2 = $_POST['number-2'];
        $num3 = $_POST['number-3'];
        $num4 = $_POST['number-4'];
        $num5 = $_POST['number-5'];
        $tzoker = $_POST['tzoker'];
        if (($num1 <=0 || $num1 >=46) || ($num2 <=0 || $num2 >=46) || ($num3 <=0 || $num3 >=46) || ($num4 <=0 || $num4 >=46) || ($num5 <=0 || $num5 >=46) || ($tzoker <=0 || $tzoker >=26)) {
            $message = 'Out of range';
            unset($_SESSION['gen_numbers'], $_SESSION['gen_tzoker']);
        }else if ($num1 == $num2 || $num1 == $num3 || $num1 == $num4 || $num1 == $num5 || $num2 == $num3 || $num2 == $num4 || $num2 == $num5 || $num3 == $num4 || $num3 == $num5 || $num4 == $num5) {
            $message = 'You have duplicated numbers';
            unset($_SESSION['gen_numbers'], $_SESSION['gen_tzoker']);
        }else {
            array_push($numbers,$num1);
            array_push($numbers,$num2);
            array_push($numbers,$num3);
            array_push($numbers,$num4);
            array_push($numbers,$num5);
            sort($numbers);
            $message = 'The winning numbers of TZOKER are'; 
            $message2 = 'The player numbers are';
            $message3 = checkifwin($_SESSION['gen_numbers'], $_SESSION['gen_tzoker'], $numbers, $tzoker);
        }
    }
?>
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
                <label for="title" class="col-sm-10"><?php echo $message;?></label>
                <label for="title" class="col-sm-10"><?php 
                                                        if (isset($_SESSION['gen_numbers']) && isset($_SESSION['gen_tzoker'])){
                                                            foreach($_SESSION['gen_numbers'] as $n) { 
                                                                echo $n . ' ';
                                                            }
                                                            echo '<br> With Tzoker number : ' . $_SESSION['gen_tzoker'];
                                                        } 
                                                    ?></label>
                <label for="title" class="col-sm-10"><?php echo $message2;?></label>
                <label for="title" class="col-sm-10"><?php 
                                                        foreach($numbers as $n) { 
                                                            echo $n . ' ';
                                                        }
                                                        echo '<br> With Tzoker number : ' . $tzoker;
                                                        ?></label>
                <label for="title" class="col-sm-10"><?php
                                                        echo '<br>' . $message3;
                                                        unset($_SESSION['gen_numbers'], $_SESSION['gen_tzoker']);
                                                    ?></label>
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
                $info1 = "TZOKER SIMULATOR.\n";
                $info2 = "The user choose 5 numbers betwwen 1 and 45 \n and 1 number between 1 and 20.\n This is created for education proposes";
                $info3 = "Programmer : Nikolaos Psaltakis";
                alert($info1 + $info2 + $info3);
            }
        </script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>
</body>
</html>