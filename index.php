<?php
   $conn = mysqli_connect("localhost", "root","1q2w3e");
    mysqli_select_db($conn,"onpentutorials");
    $result = mysqli_query($conn,"SELECT * FROM topic");
?>


<!DOCTYPE html>
<html lang="ko">

<head>
    <meta charset="UTF-8">
    <title>index</title>
    <link rel="stylesheet" type="text/css" href="http://localhost/style.css">
</head>

<body id="ta">
    <header>
        <h1><a href="index.php">JSP</a></h1>
        <img src="myimg/log.png" alt="로고" />
    </header>

    <nav>
        <ol>
            <?php
    while($ro = mysqli_fetch_assoc($result)){
    echo '<li><a href="http://localhost/index.php?id='.$ro['id'].'">'.htmlspecialchars($ro['title']).'</a></li>'."\n";
}
            ?>
        </ol>
    </nav>
    <div id="control">
        <input type="button" value="white" onclick="document.getElementById('ta').className='white'" />
        <input type="button" value="balck" onclick="document.getElementById('ta').className='black'" />
        <a href="http://localhost/write.php">쓰기</a>
        <a href="http://localhost/ohhoho.php">ohhoho</a>
    </div>
    <article>
        <?php
        if(empty($_GET['id']) === false){
        $sql = 'SELECT * FROM topic WHERE id ='.$_GET['id'];
        $result = mysqli_query($conn,$sql);
        $ro = mysqli_fetch_assoc($result);
        echo '<h2>'.htmlspecialchars($ro['title']).'</h2>';
        echo strip_tags($ro['description'].'<a><h1><h2><h3><4><h5><ul><ol><li>');
        }
    ?>


    </article>
</body>

</html>
