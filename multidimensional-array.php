<?php

// Multidimensional associative array
$students = [
    [
        "name" => "Anaya",
        "math" => 85,
        "science" => 90
    ],
    [
        "name" => "Shanaya",
        "math" => 92,
        "science" => 88
    ],
    [
        "name" => "Manaya",
        "math" => 78,
        "science" => 80
    ]
];

echo "<h3>Using for loop:</h3>";

// Using for loop
for ($i = 0; $i < count($students); $i++) {
    echo "Name: " . $students[$i]["name"] . "<br>";
    echo "Math: " . $students[$i]["math"] . "<br>";
    echo "Science: " . $students[$i]["science"] . "<br><br>";
}


echo "<h3>Using foreach loop:</h3>";

// Using foreach loop
foreach ($students as $student) {
    echo "Name: " . $student["name"] . "<br>";
    echo "Math: " . $student["math"] . "<br>";
    echo "Science: " . $student["science"] . "<br><br>";
}

?>
