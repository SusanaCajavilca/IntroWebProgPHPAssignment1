<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Add our required metadata -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Assignment One | Introduction to Web Programming using PHP</title>
    <meta name="description" content="This is the Assignment One for Introduction to Web Programming using PHP Course - Index Page ">
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
<!-- The index page allows user to input the specifications of the pizza order and submit them-->
<!-- If the data is complete and correct, it will display the order specifications below the submit button -->
<!-- If the data is incomplete or not valid, it will display messages saying so and telling user to do it again... -->
<header>
    <nav class="navbar navbar-dark bg-success">
        <div class="container-fluid">
            <a class="navbar-brand" href="index.php"><img src="./img/logo_pizza.png" alt="logo_pizza"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item"><a class="nav-link active" aria-current="page" href="#">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="view.php">View List of Orders Submited</a></li>
                </ul>
            </div>
        </div>
    </nav>
</header>
<section class="masthead">
    <div>
        <!-- Here goes the Masthead Image and Title  -->
        <h1>ORDER YOUR PIZZA!!</h1>
    </div>
</section>
<main class="container">
    <section>
        <h2>Build your pizza order</h2>
    </section>
    <!-- The form will have 15 fields: 10 required and 5 optional -->
    <!-- 1 -Name - TextBox -->
    <!-- 2 -Address - TextBox  -->
    <!-- 3 -Phone - Type tel  -->
    <!-- 4 -Email - Type email  -->
    <!-- 5 -Pick the Size - Select menu list Dropdown- 4 options-->
    <!-- 6 -Pick the Dough - Select menu list Dropdown- 4 options-->
    <!-- 7 -Pick the Cheese-Base - Select menu list Dropdown- 4 options -->
    <!-- 8 -Pick the Sauce-Base- Select menu list Dropdown- 5 options-->
    <!-- 9 -Pick the Veggie Toppings - Checkbox list - 6 options (this is optional)-->
    <!-- 10 -Pick the Meat Toppings - Checkbox list - 6 options (this is optional)-->
    <!-- 11 -Pick the Cheese Toppings - Checkbox list - 4 options (this is optional)-->
    <!-- 12 -Quantity - Select menu list Dropdown- 10 options from 1 to 10-->
    <!-- 13 -Pick the Sides - Checkbox list - 4 options (this is optional)-->
    <!-- 14 -Pick your drink (2L Bottle) - Select menu list Dropdown- 3 options-->
    <!-- 15 -Pick sauces for dipping - Checkbox list (this is optional)- 3 options-->

    <!-- Form of the pizza order-->
    <section class="form-row row justify-content-center">
        <form method="post" class="form-horizontal col-md-6 col-md-offset-3">
            <!-- 1 -Name - TextBox -->
            <div class="form-group">
                <label for="input1" class="col-sm-6 control-label">Enter your full name</label>
                <div class="col-sm-10">
                    <input type="text" name="fullname" class="form-control" id="input1">
                </div>
            </div>
            <!-- 2 -Address - TextBox  -->
            <div class="form-group">
                <label for="input2" class="col-sm-6 control-label">Enter your full address</label>
                <div class="col-sm-10">
                    <input type="text" name="fulladdress" class="form-control" id="input2">
                </div>
            </div>
            <!-- 3 -Phone - TextBox, type tel  -->
            <div class="form-group">
                <label for="input3" class="col-sm-6 control-label">Enter your phone number, follow the format</label>
                <div class="col-sm-10">
                    <input type="tel" name="phonenumber" pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}" placeholder="705-123-4567" class="form-control" id="input3">
                </div>
            </div>
            <!-- 4 -Email - TextBox, type email  -->
            <div class="form-group">
                <label for="input4" class="col-sm-6 control-label">Enter your email</label>
                <div class="col-sm-10">
                    <input type="email" name="email" class="form-control" id="input4">
                </div>
            </div>
            <!-- 5 -Pick the Size - Select menu list - 4 options-->
            <div class="form-group">
                <label for="input4" class="col-sm-6 control-label">Pick the Size</label>
                <div class="col-sm-10">
                    <select name="size" class="form-control">
                        <option>Select the Size</option>
                        <option value="Small">SMALL-(6 SLICES)</option>
                        <option value="Medium">MEDIUM-(8 SLICES)</option>
                        <option value="Large">LARGE-(10 SLICES)</option>
                        <option value="XLarge">X-LARGE-(12 SLICES)</option>
                    </select>
                </div>
            </div>
            <!-- 6 -Pick the Dough - Select menu list - 4 options-->
            <div class="form-group">
                <label for="input3" class="col-sm-6 control-label">Pick the Dough</label>
                <div class="col-sm-10">
                    <select name="dough" class="form-control">
                        <option>Select the Dough</option>
                        <option value="Regular">REGULAR</option>
                        <option value="Thin Crust">THIN CRUST</option>
                        <option value="Thick Crust">THICK CRUST</option>
                        <option value="Stuffed Mozzarella Crust">STUFFED MOZZARELLA CRUST</option>
                    </select>
                </div>
            </div>
            <!-- 7 -Pick the Cheese-Base - Select menu list - 4 options-->
            <div class="form-group">
                <label for="input2" class="col-sm-6 control-label">Pick the Cheese for Base</label>
                <div class="col-sm-10">
                    <select name="base_cheese" class="form-control">
                        <option>Select Cheese for Base</option>
                        <option value="No cheese">NO CHEESE</option>
                        <option value="Regular">REGULAR</option>
                        <option value="Mozzarella">MOZZARELLA</option>
                        <option value="Dairy-free">DAIRY-FREE</option>
                    </select>
                </div>
            </div>
            <!-- 8 -Pick the Sauce-Base- Select menu list - 5 options-->
            <div class="form-group">
                <label for="input1" class="col-sm-6 control-label">Pick the Sauce for Base</label>
                <div class="col-sm-10">
                    <select name="base_sauce" class="form-control">
                        <option>Select Sauce for Base</option>
                        <option value="No sauce">NO SAUCE</option>
                        <option value="Tomato sauce">TOMATO SAUCE</option>
                        <option value="Alfredo sauce">ALFREDO SAUCE</option>
                        <option value="BBQ sauce">BBQ SAUCE</option>
                        <option value="Buffalo sauce">BUFALO SAUCE</option>
                    </select>
                </div>
            </div>
            <!-- 9 -Pick the Veggie Toppings - Checkbox list - 6 options-->
            <!-- We have to use an array to store all the options checked-->
            <!-- That is why the name is veggieTopping[] -->
            <div class="form-group">
                <h3>Pick your Veggie Toppings (optional)</h3>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="veggieTopping[]" value="Mushrooms" id="input9">
                    <label class="form-check-label" for="input9">MUSHROOMS</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="veggieTopping[]" value="Onions" id="input10">
                    <label class="form-check-label" for="input10">ONIONS</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="veggieTopping[]" value="Tomatoes" id="input11">
                    <label class="form-check-label" for="input11">TOMATOES</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="veggieTopping[]" value="Peppers" id="input12">
                    <label class="form-check-label" for="input12">PEPPERS</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="veggieTopping[]" value="Black olives" id="input13">
                    <label class="form-check-label" for="input13">BLACK OLIVES</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="veggieTopping[]" value="Pineapple" id="input14">
                    <label class="form-check-label" for="input14">PINEAPPLE</label>
                </div>
            </div>
            <!-- 10 -Pick the Meat Toppings - Checkbox list - 6 options-->
            <!-- We have to use an array to store all the options checked-->
            <!-- That is why the name is meatTopping[] -->
            <div class="form-group">
                <h3>Pick your Meat Toppings (optional)</h3>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="meatTopping[]" value="Pepperoni" id="input15">
                    <label class="form-check-label" for="input15">PEPPERONI</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="meatTopping[]" value="Bacon strips" id="input16">
                    <label class="form-check-label" for="input16">BACON STRIPS</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="meatTopping[]" value="Chicken strips" id="input17">
                    <label class="form-check-label" for="input17">CHICKEN STRIPS</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="meatTopping[]" value="Italian ham" id="input18">
                    <label class="form-check-label" for="input18">ITALIAN HAM</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="meatTopping[]" value="Salami" id="input19">
                    <label class="form-check-label" for="input19">SALAMI</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="meatTopping[]" value="Sausages" id="input20">
                    <label class="form-check-label" for="input20">SAUSAGES</label>
                </div>
            </div>
            <!-- 11 -Pick the Cheese Toppings - Checkbox list - 4 options-->
            <!-- We have to use an array to store all the options checked-->
            <!-- That is why the name is cheeseTopping[] -->
            <div class="form-group">
                <h3>Pick your Cheese Toppings (optional)</h3>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="cheeseTopping[]" value="Parmesan" id="input21">
                    <label class="form-check-label" for="input21">PARMESAN</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="cheeseTopping[]" value="Feta" id="input22">
                    <label class="form-check-label" for="input22">FETA</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="cheeseTopping[]" value="Provolone" id="input23">
                    <label class="form-check-label" for="input23">PROVOLONE</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="cheeseTopping[]" value="Cheddar" id="input24">
                    <label class="form-check-label" for="input24">CHEDDAR</label>
                </div>
            </div>
            <!-- 12 -Quantity - Select menu list - 10 options from 1 to 10-->
            <div class="form-group">
                <label for="input24" class="col-sm-6 control-label">Pick Quantity</label>
                <div class="col-sm-10">
                    <select name="quantity" class="form-control">
                        <option>Select Quantity</option>
                        <option value="1">01</option>
                        <option value="2">02</option>
                        <option value="3">03</option>
                        <option value="4">04</option>
                        <option value="5">05</option>
                        <option value="6">06</option>
                        <option value="7">07</option>
                        <option value="8">08</option>
                        <option value="9">09</option>
                        <option value="10">10</option>
                    </select>
                </div>
            </div>
            <!-- 13 -Pick the Sides - Checkbox list - 4 options-->
            <!-- We have to use an array to store all the options checked-->
            <!-- That is why the name is sides[] -->
            <div class="form-group">
                <h3>Pick your Sides (optional)</h3>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="sides[]" value="Chicken nuggets" id="input26">
                    <label class="form-check-label" for="input26">CHICKEN NUGGETS X 8</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="sides[]" value="BBQ wings" id="input27">
                    <label class="form-check-label" for="input27">BBQ WINGS X 10</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="sides[]" value="Bread sticks" id="input28">
                    <label class="form-check-label" for="input28">BREAD STICKS X 6</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="sides[]" value="Bread stuffed cheese" id="input29">
                    <label class="form-check-label" for="input29">BREAD STUFFED CHEESE X 4</label>
                </div>
            </div>
            <!-- 14 -Pick your drink (2L Bottle) - Select menu list - 3 options-->
            <div class="form-group">
                <label for="input29" class="col-sm-6 control-label">Pick your drink</label>
                <div class="col-sm-10">
                    <select name="drink" class="form-control">
                        <option>Select your Drink</option>
                        <option value="Coke">COKE</option>
                        <option value="Pepsi">PEPSI</option>
                        <option value="Sprite">SPRITE</option>
                    </select>
                </div>
            </div>
            <!-- 15 -Pick sauces for dipping - Checkbox list - 3 options-->
            <!-- We have to use an array to store all the options checked-->
            <!-- That is why the name is dippingSauce[] -->
            <div class="form-group">
                <h3>Pick your Dipping Sauces (optional)</h3>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="dippingSauce[]" value="Garlic dipping sauce" id="input31">
                    <label class="form-check-label" for="input31">GARLIC DIPPING SAUCE</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="dippingSauce[]" value="Ranch cup" id="input32">
                    <label class="form-check-label" for="input32">RANCH CUP</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="dippingSauce[]" value="Marinara cup" id="input33">
                    <label class="form-check-label" for="input33">MARINARA CUP</label>
                </div>
            </div>
            <div class="form-group">
                <input type="submit" class="btn btn-success col-md-2 col-md-offset-10" value="Submit">
            </div>
        </form>
        <div class="form-group submit-message">
            <?php

            // adding our code here
            require_once ('database.php'); // for the database data - creation and capturing data
            require_once ('validate.php'); // for the validation of the data

            $valid = new validate();

            if(isset($_POST)& !empty($_POST)) {
                $fullname = $database->sanitize($_POST['fullname']);

                $fulladdress = $database->sanitize($_POST['fulladdress']);

                $phonenumber = $database->sanitize($_POST['phonenumber']);

                $email = $database->sanitize($_POST['email']);

                $size = $database->sanitize($_POST['size']);

                $dough = $database->sanitize($_POST['dough']);

                $base_cheese = $database->sanitize($_POST['base_cheese']);

                $base_sauce = $database->sanitize($_POST['base_sauce']);

                //In the case of an input from a multiple checkbox, I have to create a temporary variable
                // then, I use the 'implode' function to concatenate the values in one string
                // and finally, sanitize the temporary value and assign it to the final variable
                $subveggie = implode(', ', $_POST['veggieTopping']);
                $veggieTopping = $database->sanitize($subveggie);

                //In the case of an input from a multiple checkbox, I have to create a temporary variable
                // then, I use the 'implode' function to concatenate the values in one string
                // and finally, sanitize the temporary value and assign it to the final variable
                $submeat = implode(', ', $_POST['meatTopping']);
                $meatTopping = $database->sanitize($submeat);

                //In the case of an input from a multiple checkbox, I have to create a temporary variable
                // then, I use the 'implode' function to concatenate the values in one string
                // and finally, sanitize the temporary value and assign it to the final variable
                $subcheese = implode(', ', $_POST['cheeseTopping']);
                $cheeseTopping = $database->sanitize($subcheese);

                $quantity = $database->sanitize($_POST['quantity']);

                //In the case of an input from a multiple checkbox, I have to create a temporary variable
                // then, I use the 'implode' function to concatenate the values in one string
                // and finally, sanitize the temporary value and assign it to the final variable
                $subside = implode(', ', $_POST['sides']);
                $sides = $database->sanitize($subside);

                $drink = $database->sanitize($_POST['drink']);

                //In the case of an input from a multiple checkbox, I have to create a temporary variable
                // then, I use the 'implode' function to concatenate the values in one string
                // and finally, sanitize the temporary value and assign it to the final variable
                $subdipp = implode(', ', $_POST['dippingSauce']);
                $dippingSauce = $database->sanitize($subdipp);

                // Then, we have to validate the input data from the 6 select list options
                // if I don't validate it, it could save to the database the phrase 'Select xxxxxx'
                $checkSize = $valid->validSize($size);
                $checkDough = $valid->validDough($dough);
                $checkBaseCheese = $valid->validCheeseBase($base_cheese);
                $checkBaseSauce = $valid->validSauceBase($base_sauce);
                $checkQuantity = $valid->validQuantity($quantity);
                $checkDrink = $valid->validDrink($drink);

                // Then, we have to check if the personal data is empty or not
                $msg =$valid->checkEmpty($_POST,array('fullname','fulladdress','phonenumber','email'));

                if($msg !=null)
                {
                    echo "<p>$msg</p>";

                }
                elseif (!$checkSize)
                   {   // if Size have not been properly selected
                       echo "<p>You forgot to select the size, do it all again</p>";
                   }
                elseif (!$checkDough)
                  {   // if Dough have not been properly selected
                      echo "<p>You forgot to select the dough, do it all again</p>";
                  }
                elseif (!$checkBaseCheese)
                 {   // if Cheese Base have not been properly selected
                     echo "<p>You forgot to select the cheese base, do it all again</p>";
                 }
                elseif (!$checkBaseSauce)
                 {   // if Sauce Base have not been properly selected
                     echo "<p>You forgot to select the sauce base, do it all again</p>";
                 }
                elseif (!$checkQuantity)
                 {   // if Quantity have not been properly selected
                     echo "<p>You forgot to select the quantity, do it all again</p>";
                 }
                elseif (!$checkDrink)
                 {   // if Drink have not been properly selected
                     echo "<p>You forgot to select the drink, do it all again</p>";
                 }
                else {

                    //after validating everything

                    $res = $database->create($fullname, $fulladdress, $phonenumber, $email, $size, $dough, $base_cheese, $base_sauce, $veggieTopping, $meatTopping, $cheeseTopping, $quantity, $sides, $drink, $dippingSauce);

                    if ($res) {
                        echo "<p>Record Added</p>";
                        echo "<p>&nbsp;</p>";
                        //after adding the record, we display in this page the specifications of the order below the form
                        echo "<p>This is your Order</p>";
                        echo "<table>
                            <tr>
                            <th>Full Name</th>
                            <td>$fullname</td>
                            </tr>
                            <tr>
                            <th>Full Address</th>
                            <td>$fulladdress</td>
                            </tr>
                            <tr>
                            <th>Phone number</th>
                            <td>$phonenumber</td>
                            </tr>
                            <tr>
                            <th>Email</th>
                            <td>$email</td>
                            </tr>
                            <tr>
                            <th>Size</th>
                            <td>$size</td>
                            </tr>
                            <tr>
                            <th>Dough</th>
                            <td>$dough</td>
                            </tr>
                            <tr>
                            <th>Base Cheese</th>
                            <td>$base_cheese</td>
                            </tr>
                            <tr>
                            <th>Base Sauce</th>
                            <td>$base_sauce</td>
                            </tr>
                            <tr>
                            <th>&nbsp;Veggie Topping&nbsp;</th>
                            <td>$veggieTopping</td>
                            </tr>
                            <tr>
                            <th>Meat Topping</th>
                            <td>$meatTopping</td>
                            </tr>
                            <tr>
                            <th>&nbsp;Cheese Topping&nbsp;</th>
                            <td>$cheeseTopping</td>
                            </tr>
                            <tr>
                            <th>Quantity</th>
                            <td>$quantity</td>
                            </tr>
                            <tr>
                            <th>Sides</th>
                            <td>$sides</td>
                            </tr>
                            <tr>
                            <th>Drink</th>
                            <td>$drink</td>
                            </tr>
                            <tr>
                            <th>Dipping Sauce</th>
                            <td>&nbsp;$dippingSauce</td>
                            </tr>
                        
                          </table>";


                    } else {
                        // this will happen if the user leave empty the name, address, phonenumber and email
                        echo "<p>Could not add record: complete the missing fields</p>";
                    }
                }
            }

            ?>
        </div>
    </section>
</main>
<footer>
    <div>
        <h5>End of Form</h5>
    </div>
    <div>
        <a href="index.php"><img src="./img/logo_pizza.png" alt="logo_pizza"></a>
    </div>
</footer>
</body>
</html>
