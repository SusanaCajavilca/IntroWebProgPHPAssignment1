<?php
// adding the php code to connect our database
require_once ('database.php');
$res = $database->read();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Add our required metadata -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Assignment One | Introduction to Web Programming using PHP</title>
    <meta name="description" content="This is the Assignment One for Introduction to Web Programming using PHP Course - View Page ">
    <meta name="robots" content="noindex, nofollow">
    <!-- Add our fonts : Raleway, Roboto, Montserrat-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;700&family=Raleway:wght@400;500;700&family=Roboto:wght@300;400;700&display=swap" rel="stylesheet">
    <!-- Add our jQuery (https://releases.jquery.com/ ) -->
    <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
    <!-- Add Bootstrap (https://getbootstrap.com/) -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <!-- Add our own CSS -->
    <link rel="stylesheet" href="./css/style.css">
</head>
<body>
<!-- The view page allows user to see the database of all the order received so far-->
<!-- In other words, this page is the database shown in the website-->
<header>
    <nav class="navbar navbar-dark bg-success">
        <div class="container-fluid">
            <a class="navbar-brand" href="index.php"><img src="./img/logo_pizza.png" alt="logo_pizza"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item"><a class="nav-link active" aria-current="page" href="index.php">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="view.php">View List of Orders Submited</a></li>
                </ul>
            </div>
        </div>
    </nav>
</header>
<main>
    <div class="container">
        <div class="row">
            <table class="table">
                <tr>
                    <!-- There are 15 items for each pizza order -->
                    <th>#</th>
                    <th>Full Name</th>
                    <th>Full Address</th>
                    <th>Phone</th>
                    <th>Email</th>
                    <th>Size</th>
                    <th>Dough</th>
                    <th>Base Cheese</th>
                    <th>Base Sauce</th>
                    <th>Veggie Topping</th>  <!--  <-This is an array converted to a string-->
                    <th>Meat Topping</th>    <!--  <-This is an array converted to a string-->
                    <th>Cheese Topping</th>  <!--  <-This is an array converted to a string-->
                    <th>Quantity</th>
                    <th>Sides</th>           <!--  <-This is an array converted to a string-->
                    <th>Drink</th>
                    <th>Dipping Sauce</th>   <!--  <-This is an array converted to a string-->
                </tr>
                <?php
                // adding php code here, so we can display the content of the database in the table pf the page
                while($r=mysqli_fetch_assoc($res))
                {
                    ?>

                    <tr>
                        <!-- Add our 15 values for recollected from the form -->
                        <td><?php echo $r['id']; ?></td>
                        <td><?php echo $r['fullname']; ?></td>
                        <td><?php echo $r['fulladdress']; ?></td>
                        <td><?php echo $r['phonenumber']; ?></td>
                        <td><?php echo $r['email']; ?></td>
                        <td><?php echo $r['size']; ?></td>
                        <td><?php echo $r['dough']; ?></td>
                        <td><?php echo $r['base_cheese']; ?></td>
                        <td><?php echo $r['base_sauce']; ?></td>
                        <td><?php echo $r['veggieTopping']; ?></td>  <!--  <-This is an array converted to a string-->
                        <td><?php echo $r['meatTopping']; ?></td>    <!--  <-This is an array converted to a string-->
                        <td><?php echo $r['cheeseTopping']; ?></td>  <!--  <-This is an array converted to a string-->
                        <td><?php echo $r['quantity']; ?></td>
                        <td><?php echo $r['sides']; ?></td>          <!--  <-This is an array converted to a string-->
                        <td><?php echo $r['drink']; ?></td>
                        <td><?php echo $r['dippingSauce']; ?></td>   <!--  <-This is an array converted to a string-->

                    </tr>
                    <?php
                }
                ?>


            </table>
        </div>
    </div>
    <div class="final">
        <img src="./img/pizza_view_order.jpg" alt="pizza image">
    </div>
</main>
<footer>
    <div>
        <h5>Database End</h5>
    </div>
    <div>
        <a href="view.php"><img src="./img/logo_pizza.png" alt="logo_pizza"></a>
    </div>
</footer>
</body>
</html>