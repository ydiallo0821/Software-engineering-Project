<?php include("database.php"); ?>

<!DOCTYPE html>
<html>

<head>

<link rel="stylesheet" href="css/final.css">

</head>

<body>

<h1 class="heading">

Our <span>Products</span>

</h1>

<div class="services">

<?php

$categories=$conn->query(
"SELECT DISTINCT category FROM products"
);

while($cat=$categories->fetch_assoc()){

echo "<h2>".$cat['category']."</h2>";

echo "<ul>";

$category=$cat['category'];

$items=$conn->query(
"SELECT * FROM products
WHERE category='$category'"
);

while($row=$items->fetch_assoc()){

echo "<li>";

echo $row['product_name'];

echo "</li>";

}

echo "</ul>";

}

?>

</div>

</body>

</html>