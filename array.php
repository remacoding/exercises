<?php
$title = "Exercise 5";
include "header.php" ?>
<h2>1. Write a php script to display courses as list. Use <li>
        $courses=array("PHP", "HTML", "JavaScript", "CMS", "Project")
</h2>

<?php
$courses = array("PHP", 1, "CMS", "Finnish 3");
for ($i = 0; $i < count($courses); $i++) {
    echo $courses[$i] . "<br>";
}

?>
<br>
<h2>2. The unset() function is used to remove element from the array. The var_dump() function is used to dump
    information about a variable. array_values() is an inbuilt function that returns all the values of an array and not
    the keys.
    Delete an element from the array below:
    $courses1=array("PHP", "HTML", "JavaScript", "CMS", "Project"); <br> <br>
    Delete an element from the array below: <br> $courses1=array("PHP", "HTML", "JavaScript", "CMS", "Project");

</h2> <br>

<?php
$courses1 = array("PHP", "HTML", "JavaScript", "CMS", "Project");
unset($courses1[2]);
for ($i = 0; $i < count($courses1); $i++) {
    echo $courses1[$i] . "<br>";
}
?>
<br>
<h2>3. Sort the following array
    $courses3=array("PHP", "HTML", "JavaScript", "CMS", "Project");
    a) ascending order sort by value
    b) ascending order sort by Key
    c) descending order sort by Value
    d) descending order sort by Key
</h2>
<br>
<h1>a)</h1>
<?php
$courses3 = array("a" => "PHP", "b" => "HTML", "c" => "JavaScript", "d" => "CMS", "e" => "Project");
asort($courses3);
foreach ($courses3 as $key => $val) {
    echo "$key = $val\n" . "<br>";
}
?>

<h1>b)</h1>
<?php
$courses3 = array("a" => "PHP", "b" => "HTML", "c" => "JavaScript", "d" => "CMS", "e" => "Project");
ksort($courses3);
foreach ($courses3 as $key => $val) {
    echo "$key = $val\n" . "<br>";
}
?>

<h1>c)</h1>
<?php
$courses3 = array("a" => "PHP", "b" => "HTML", "c" => "JavaScript", "d" => "CMS", "e" => "Project");
arsort($courses3);
foreach ($courses3 as $key => $val) {
    echo "$key = $val\n" . "<br>";
}
?>

<h1>d)</h1>
<?php
$courses3 = array("a" => "PHP", "b" => "HTML", "c" => "JavaScript", "d" => "CMS", "e" => "Project");
krsort($courses3);
foreach ($courses3 as $key => $val) {
    echo "$key = $val\n" . "<br>";
}
?>
<br>
<h2>4. Change the following array's all values to upper case. <br> $courses4=array("php", "html", "javascript", "cms",
    "project");
    <h2>
        List all your favorite colors and their hexadecimal equivalents. (associative arrays)

    </h2> <br>

    <?php
    $courses4 = array("PHP", "HTML", "JavaScript", "CMS", "Project");
    for ($i = 0; $i < count($courses4); $i++) {
        echo strtoupper($courses4[$i]) . "<br>";
    }
    ?>
    <br>
    <h2>
        5. List all your favorite colors and their hexadecimal equivalents. (associative arrays)
    </h2> <br>
    <?php
    echo hexdec("red") . "<br>";
    echo hexdec("blue") . "<br>";
    echo hexdec("green") . "<br>";
    echo hexdec("brown");
    ?>
    <br>
    <br>
    <h2>6. PHP script to calculate and display average temperature, five lowest and highest temperatures.</h2>
    <br>

    <?php
    $month_temp = "78, 60, 62, 68, 71, 68, 73, 85, 66, 64, 76, 63, 81, 76, 73,
    68, 72, 73, 75, 65, 74, 63, 67, 65, 64, 68, 73, 75, 79, 73";
    // what is explode and what does the below code do? : 
    // it is an built in function with PHP that splits a string
    // in different strings. in this code it separates individual temparates
    // into their own string "every temparature has its own string".
    
    $temp_array = explode(',', $month_temp);
    $tot_temp = 0;
    // What is count?
    // it returns a number of elements in an array.
    
    $temp_array_length = count($temp_array);
    foreach ($temp_array as $temp) {
        $tot_temp += $temp;
    }
    $avg_high_temp = $tot_temp / $temp_array_length;
    echo "Average Temperature is : " . $avg_high_temp . "
    ";
    // what does sort do?
    // The sort command arranges data alphabetically or 
    // numerically in ascending or descending order.
    

    sort($temp_array);
    echo " List of five lowest temperatures :";
    for ($i = 0; $i < 5; $i++) {
        echo $temp_array[$i] . ", ";
    }
    echo "List of five highest temperatures :";
    // explain the following loop
    // it gets the arrays lenght and then substract 5 from it.
    // then it makes sure that the value gotten is less than the total
    // array length. Then it prints the value gotten.

    for ($i = ($temp_array_length - 5); $i < ($temp_array_length); $i++) {
        echo $temp_array[$i] . ", ";
    }
    ?>


    <?php include "footer.php" ?>