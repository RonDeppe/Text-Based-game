<?php
include 'dbconnection.php';
// Check if a button was clicked
$id = $_GET['vraag'];
$sql = "SELECT * FROM message WHERE id = '$id'";
$result = $conn->query($sql);
$row = $result->fetch(PDO::FETCH_ASSOC);
$vraag_text = $row["vraag"];
$antwoord1_text = $row["antwoord1_text"];
$antwoord2_text = $row["antwoord2_text"];
$antwoord1_id = $row["antwoord1_id"];
$antwoord2_id = $row["antwoord2_id"];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    echo "$vraag_text";
    echo "<button onclick='Answer($antwoord1_id)'>$antwoord1_text</button>";
    echo "<button onclick='Answer($antwoord2_id)'>$antwoord2_text</button>";
    ?>
    
    <script>
        function Answer(id){
            window.location.href = "http://localhost/text-based-game/text.php?vraag=" + id;
        }
    </script>
</body>
</html>
