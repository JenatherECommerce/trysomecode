<?php

session_start();

if (isset($_SESSION['id']) && isset($_SESSION['username'])) {
    ?>

<html lang="en">
<head>
    <title>Document</title>
</head>
<body>
    <h1> Hello <?php echo $_SESSION['name']; ?></h1>
    
</body>
</html>

<?php

}else {
    header('Location');
}