<?php include "header.php" ?>

<h3>Exercise 3. In-class Task Variable & Operators 07.02.2023 (variable.php)</h3>

<h2>Create a simple html form to get Firstname and Lastname from the user and use echo echo statement to print using
    tag: Hello …., You are welcome to my site.</h2>

<form action="action.php" method="post">
    <div class="row">

        <div class="col">
            <input type="text" name="fname" required placeholder="First name" class="form-control">
        </div>
        <div class="col">
            <input type="text" name="lname" required placeholder="Last name" class="form-control">
        </div>
        <div class="col">
        Birth Date: <input type="date" name="bdate" required placeholder="Birth Date" class="form-control">
        </div>
        <div class="col">
        Select fav Color: <input type="color" name="color" required placeholder="Select fav color" class="form-control">
        </div>

        <input type="submit" value="Submit">
    </div>

</form>

<?php include "footer.php" ?>