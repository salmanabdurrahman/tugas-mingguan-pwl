<?php
session_start();
include "./includes/header.php";
include "./includes/config.php";

$sql = "SELECT * FROM user";
$query = mysqli_query($config, $sql);

echo "<div class='container mt-5'>";
echo "<div class='row'>";
echo "<div class='col-md-12'>";
echo "<h2 class='text-center display-4'>Data User</h2>";
echo "<table class='table table-striped table-hover'>";
echo "<thead class='thead-dark'>";
echo "<tr>";
echo "<th>ID</th>";
echo "<th>Username</th>";
echo "<th>Password</th>";
echo "<th>Nama</th>";
echo "<th>Level</th>";
echo "</tr>";
echo "</thead>";
echo "<tbody>";
while ($row = mysqli_fetch_assoc($query)) {
    echo "<tr>";
    echo "<td>" . $row['id'] . "</td>";
    echo "<td>" . $row['username'] . "</td>";
    echo "<td>" . $row['password'] . "</td>";
    echo "<td>" . $row['nama'] . "</td>";
    echo "<td>" . $row['level'] . "</td>";
    echo "</tr>";
}
echo "</tbody>";
echo "</table>";
echo "</div>";
echo "</div>";
echo "</div>";

include "./includes/footer.php";
