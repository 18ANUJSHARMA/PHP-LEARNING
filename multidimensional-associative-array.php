<?php


$users = [
    ["name"=>"ananya","age"=>25,"city"=>"ghaziabad"],
    ["name"=>"aditi","age"=>25,"city"=>"delhi"],
    ["name"=>"anaya","age"=>25,"city"=>"noida"],
    ["name"=>"shanaya","age"=>25,"city"=>"gurgoan"],
    ["name"=>"suhana","age"=>25,"city"=>"bangalore"],
    
];

echo "<table border = 1";

echo "<tr>
        <th>Name</th>;
        <th>Age</th>;
        <th>City</th>;
        </tr>
";

foreach($users as $user){
    echo "<tr>";
    // print_r($user);
    // echo "<br>";
    // echo "<td>";
    echo "<td>{$user['name']}</td>";
    echo "<td>{$user['age']}</td>";
    echo "<td>{$user['city']}</td>";
    // echo "</td>";

    echo "</tr>";
}




echo "</table>";

?>