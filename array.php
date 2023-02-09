<?php
$title = "Exercise 5";
include "header.php" ?>
<h2>1.  Write a php script to display courses as list. Use <li>
$courses=array("PHP", "HTML", "JavaScript", "CMS", "Project")
</h2>

<?php
$courses = array("PHP", 1, "CMS", "Finnish 3");
for ($i = 0; $i < count($courses); $i++) {
    echo $courses[$i] . "<br>";
}

?>

<h2>2. The unset() function is used to remove element from the array. The var_dump() function is used to dump information about a variable.  array_values() is an inbuilt function that returns all the values of an array and not the keys.
Delete an element from the array below:
$courses1=array("PHP", "HTML", "JavaScript", "CMS", "Project"); <br> <br>
Delete an element from the array below: <br> $courses1=array("PHP", "HTML", "JavaScript", "CMS", "Project");

</h2> <br>

<?php
$courses1 = array("PHP", "HTML", "JavaScript", "CMS", "Project");
unset($courses1[2]);
for ($i = 0; $i < count($courses1); $i++) {
    echo $courses1[$i]. "<br>";
}
?>
<br>
<h2>Sort the following array 
$courses3=array("PHP", "HTML", "JavaScript", "CMS", "Project");
a) ascending order sort by value
b) ascending order sort by Key
c) descending order sort by Value
d) descending order sort by Key
</h2>
<br>
<h1>a)</h1>
<?php
$courses3 = array("a" => "PHP","b" => "HTML","c" => "JavaScript","d" => "CMS","e" => "Project");
asort($courses3);
foreach ($courses3 as $key => $val) {
    echo "$key = $val\n". "<br>";
}
?>

<h1>b)</h1>
<?php
$courses3 = array("a" => "PHP","b" => "HTML","c" => "JavaScript","d" => "CMS","e" => "Project");
ksort($courses3);
foreach ($courses3 as $key => $val) {
    echo "$key = $val\n". "<br>";
}
?>

<h1>c)</h1>
<?php
$courses3 = array("a" => "PHP","b" => "HTML","c" => "JavaScript","d" => "CMS","e" => "Project");
arsort($courses3);
foreach ($courses3 as $key => $val) {
    echo "$key = $val\n". "<br>";
}
?>

<h1>d)</h1>
<?php
$courses3 = array("a" => "PHP","b" => "HTML","c" => "JavaScript","d" => "CMS","e" => "Project");
krsort($courses3);
foreach ($courses3 as $key => $val) {
    echo "$key = $val\n". "<br>";
}
?>
<br>
<h2>4. Change the following array's all values to upper case. <br>  $courses4=array("php", "html", "javascript", "cms", "project");
 <h2>
List all your favorite colors and their hexadecimal equivalents. (associative arrays)

</h2> <br>

<?php
$courses4 = array("PHP", "HTML", "JavaScript", "CMS", "Project");
for ($i = 0; $i < count($courses4); $i++) {
    echo strtoupper($courses4[$i]). "<br>";
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



<?php include "footer.php" ?>