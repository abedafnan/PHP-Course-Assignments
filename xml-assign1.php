<?php
/**
 * Created by PhpStorm.
 * User: Afnan A. Abed
 * Date: 4/26/2019
 * Time: 4:56 PM
 */

// Add the description of the instructor (name, room, rank) and two more students
// Rewrite to show the full description of the class without attributes
$data = "
<class>
    <semester>2015-2</semester>
    <time>
        <hours> 12 </hours>
        <minutes> 30 </minutes>
        <seconds> 0 </seconds> 
    </time>
    <instructor>
        <name>Juan Perez</name>
        <room>512</room>
        <rank>Professor</rank>
    </instructor>
    <student>
        <id>0001</id>
        <name>Jessica</name>       
        <email>jessica@blue.weeg.uiowa.edu</email> 
    </student>
    <student>
        <id>0002</id>
        <name>Peter</name>
        <email>peter@icaen.uiowa.edu</email> 
    </student>
    <student>
        <id>0003</id>
        <name>Jane</name>       
        <email>Jane@jj.uiowa.edu</email> 
    </student>
    <student>
        <id>0004</id>
        <name>John</name>
        <email>John@icaen.uiowa.edu</email> 
    </student>
</class> ";

// Display the content
$xml = simplexml_load_string($data);
echo $xml->getName() . " of semester: " . $xml->semester . "<br><br>";

foreach ($xml->children() as $child) {
    if (!strcmp("time", $child->getName())) {
        echo "Time - " . $child->hours . ":" . $child->minutes . ":" . $child->seconds . "<br><br>";

    } else if (!strcmp("instructor", $child->getName())) {
        echo "Instructor - ";
        echo "<br>Name: " . $child->name;
        echo "<br>Room: " . $child->room;
        echo "<br>Rank: " . $child->rank;
        echo "<br><br>";

    } else if (!strcmp("student", $child->getName())) {
        echo "Student - ";
        echo "<br>ID: " . $child->id;
        echo "<br>Name: " . $child->name;
        echo "<br>Email: " . $child->email;
        echo "<br><br>";
    }
}

