<?php

$users = [
    [1, "Anil", "anil@gmail.com"],
    [2, "Suhana", "suhana@gmail.com"],
    [3, "Anaya", "anaya@gmail.com"],
    [4, "Shanil", "shanaya@gmail.com"],
    [5, "Ananya", "ananya@gmail.com"],
];

echo "<table border='1'>";

// Table Header
echo "<tr>
        <th>S.NO.</th>
        <th>NAME</th>
        <th>EMAIL ID</th>
      </tr>";

// Table Body
for ($i = 0; $i < count($users); $i++) {
    echo "<tr>";
    for ($j = 0; $j < count($users[$i]); $j++) {
        echo "<td>";
        echo $users[$i][$j];
        echo "</td>";
    }
    echo "</tr>";
}

echo "</table>";
?>
