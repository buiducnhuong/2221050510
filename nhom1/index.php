<h1>day la file php</h1>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php-Buoi 1 </title>
</head>
<body>
    <?php 
    // 1 . cu phap in ra man hinh 
    echo "hello world! <br>";
    echo "php <br>";
    //2 .bien
    // cu phap : $ + ten cua bien = gia tri cua bien 
    $ten = "nhuong duc";
    $tuoi = "28"; 
    echo "xin chao " . $ten . " " . $tuoi . " " . "tuoi" ."<br>";
    //3.hang
    define("sopi" , "3,14");
    echo sopi . "<br>";
    //4 phan biet (') va (")
    echo '$ten' . "<br>";
    echo "$ten" . "<br>";
    //5 chuoi 
    //5.1 kiem tra do dai cua chuoi
    echo strlen($ten) . "<br>";
    //5.2 diem so tu 
    echo str_word_count($ten) . "<br>";
    //5.3 tim kiem ky tu trong chuoi 
    echo strpos($ten,"h") . "<br>";
    // 5.4 thay the ki tu trong chuoi
    echo str_replace("duc","bui",($ten) . "<br>");
    //6 toan tu 
    $sothunhat = 10;
    $sothuhai = 5;
    // + - * /
    echo $sothunhat + $sothuhai . "<br>";
    // 
    //echo $sothunhat %= $sothuhai . "<br>";
    // cau dk
    // kiem tra tong sothunhat va sothuhai 
    // neu < 15, thi hien thi tong la ... nho hon 15  
    // neu = 15, thi hien thi tong la 15 
    // neu > 15 thi hien thi la .... lon hon 15 
    $tong = $sothunhat + $sothuhai;

    // Bắt đầu kiểm tra điều kiện
    if ($tong < 15) {
        echo "Tổng là " . $tong . " nhỏ hơn 15";
    } 
    elseif ($tong == 15) {
        echo "Tổng là 15";
    } 
    else { 
        echo "Tổng là " . $tong . "lớn hơn 15";
    }
    // 8.swith case
    $color = "red";
    switch ($color){
        case "red":
            echo "in red";
            break;
        case "black":
            echo "in black";
            break;
        default :
            echo "no color";
            break;   
    }
    //9 .for
    for ($i=0; $i < 100; $i++){
        echo $i . "<br>";
    }
    

    ?>
    
</body>
</html>