<head>
<meta charset="utf-8">    
    <title> 44社聯尋寶大賽</title>
</head>

<body>

<?php 
$password = $_GET["password"];
$index_url = 'https://www.youtube.com/';
$passwordarray = array('郎窯紅穿帶瓶','侍衛','JAY','The ship repairer is actually a spy from B chamber of commerce.');
$img_src = array(0=>array(1=>'/i.imgur.com/AHvrGdu.png',2=>'/i.imgur.com/fh3gJBY.png'),
                 1=>array(1=>'/i.imgur.com/F0QIFuw.png',2=>'/i.imgur.com/G1NyXIO.png'),
                 2=>array(1=>'/i.imgur.com/6g5OGd3.png',2=>'/i.imgur.com/Qr0MyZR.png'),
                 3=>array(1=>'/i.imgur.com/srPtUge.png',2=>'/i.imgur.com/dIrGQLS.png'),
                 4=>array(1=>'/i.imgur.com/qCyNVhZ.jpg',2=>'/i.imgur.com/e4N2dMF.jpg')
                );
for($i=0;$i<6;$i++){
    if($i<=4 & $password!=''){
        if ($password == $passwordarray[$i]){
            echo "<img src= ","\"https:","/" , $img_src[$i][1],"\"","width=600><br>";
            echo "<img src= ","\"https:","/" , $img_src[$i][2],"\"","width=600><br>";
            exit();
        }
    }
    else{
        echo "<script>alert('Error')</script>";
        echo "<script>history.go(-1)</script>";
        exit();
    }    
}
?>

</body>

</html>

