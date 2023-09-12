<html>

<head>
    <title>
        3 ile bölünebilme örneği
    </title>
</head>

<body>
    <form action="index.php" method="post">

    <input  type="text" name="sayi" placeholder="Bir sayı giriniz" />
    <button type="submit" name="gonder">
      Gönder
    </button>
    </form>

    <?php

    
    

    function bolunme($number) {

      

        $kalan = $number % 3;
        
        if($kalan == 0) {
            
            echo $number . ' sayısı 3 ile bölünür!';
            
        } elseif($kalan % 2 == 0) 
         
                echo $number . ' sayısı 3 ile bölünmez! (Bölünebilecek ilk sayı: '.$number+1 .')';

            elseif($kalan %2 == 1)

                echo $number . ' sayısı 3 ile bölünmez! (Bölünebilecek ilk sayı: '.$number+2 .')';

    
             
    
    }

    if (!empty($_POST["sayi"])){

        $sayi = $_POST["sayi"];

        bolunme($sayi);

    }else{

        echo 'Hiçbir sayı girmediniz!';

    }
    


    ?>
</body>

</html>