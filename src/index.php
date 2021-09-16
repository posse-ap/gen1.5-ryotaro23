<?php
include($_SERVER['DOCUMENT_ROOT']."/include/db_connect.php");
$number = $_GET['page_id'];
$sql = "SELECT* FROM question WHERE question.id = $number";
$stmt = $db ->query($sql)->fetchAll(PDO::FETCH_ASSOC);
// 選択肢
$sql2 = "SELECT* FROM choices WHERE choices.question_id = $number";
$stmt2 = $db ->query($sql2)->fetchAll(PDO::FETCH_ASSOC);
// 答え
$sql3 = "SELECT* FROM choices WHERE choices.valid = 1 AND question_id = $number";
$stmt3 = $db ->query($sql3)->fetchAll(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html lang="ja">
<head>
    <link rel="stylesheet" href="./styleseet.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
 <div class="mainvisual">
    <h1><?php echo $stmt[0]['name'] ?></h1> 
    <div>
        <h2> <span class="under"> 1. この地名はなんて読む？</span></h2>
      
        <div class="picture">
        <img src="./img/<?php echo $number; ?>picture.png" alt="画像">
        </div>
        <ul>
        <?php foreach($stmt2 as $choice) : ?>
            <li id='s<?php echo $choice['id']%3?>' class="button"data-number="<?php echo $choice['valid']?>"><b><?php echo $choice['name'] ?></b></li>
            <?php endforeach;?>
        </ul>
        <div id="hako">
        <p id="torf"></p>
        <p id="seikai">正解は「<?php echo $stmt3[0]['name']?>」です！</p>
        </div>
    </div>
  
  <script src="./script.js"></script>
</div>     

</body>
</html>