<?php
$title = "Exercise 3";
include "header.php" ?>


<h3>1. Write a script that gets the current month and prints one of the following responses, depending on whether it's
    August or not: It's August, so it's still holiday. Not August, this is Month-name so I don't have any holidays</h3>
<br>
<?php
$august = "august";
switch ($august) {
    case "august":
        echo "It's August, so it's still holiday.";
        break;
    case "not august":
        echo "Not August, this is July so I don't have any holidays";
        break;
}
?>
<br>
<br>
<h3>2. Assign colour red to a variable name $color and check to print one the following responses (if else statement)
</h3>
<?php

$colour = "red";

if ($colour == "red") {
    echo "The colour is red";
} else {
    echo "The colour is not red";
}
?>
<br>
<br>
<h3>3. Write a program to grade students based on their total score for a subject. Use variable to hold the total score.
    The grading scheme is:</h3>

<?php
$average = 75;
switch (true) {
    case ($average < 50):
        echo "Grade: Fail";
        break;
    case ($average > 50 && $average < 60):
        echo "Grade: Pass";
        break;
    case ($average > 60 && $average < 70):
        echo "Grade: Good";
        break;
    case ($average > 70 && $average < 80):
        echo "Grade: Great";
        break;
    case ($average > 80):
        echo "Grade: Excellent";
        break;
}
?>

<br>
<h3><br>
    4. Write a program to get inputs (age and name) from the user and based on their age, decide if he/she is eligible
    for
    voting. (18 or more than 18 years is eligible for voting,)
    <br>
</h3>
<br>

<?php
$age = 18;
$name = "Mika";

if ($age >= 18) {
    echo "$name is eligible for voting.";
} else if ($age < 18) {
    echo "$name is not eligible for voting.";
}

?>
<br>
<br>
<h3>5. In task 5, you used $_SERVER['HTTP_USER_AGENT']; to get the browser name. Use Switch statement with strops
    function to print the name of the browser as below: If someone is using Chrome it should print, you are using Goolge
    Chrome….</h3>


<?php
$arr_browsers = ["Opera", "Edg", "Chrome", "Safari", "Firefox", "MSIE", "Trident"];

$agent = $_SERVER['HTTP_USER_AGENT'];

$user_browser = '';
foreach ($arr_browsers as $browser) {
    if (strpos($agent, $browser) !== false) {
        $user_browser = $browser;
        break;
    }
}

switch ($user_browser) {
    case 'MSIE':
        $user_browser = 'Internet Explorer';
        break;

    case 'Trident':
        $user_browser = 'Internet Explorer';
        break;

    case 'Edg':
        $user_browser = 'Microsoft Edge';
        break;
}

echo "You are using " . $user_browser . " browser";

?>
<?php include "footer.php" ?>