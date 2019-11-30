<!DOCTYPE html>
 <head>
    <title>Rohan Pankaj MD5 Hash hacker </title>
</head>
<body>
    <h1>MD5 Hask Haker </h1>
    <p>This program takes am MD% hash of a four character lower case string and attempts to hask all the two character combinations to determine the original four characters</p>
    <pre>
        Debug Output:
        <?php
         $goodtext = "Not found";
         if (isset($_GET['md5'])){
            $time_pre = microtime(true);
            $md5 = $_GET['md5'];

            $numbers = "0123456789";
            $show = 15;

            for($i=0; $i<strlen($numbers);$i++) {
                $character1 = $numbers[$i];

                for($j=0; $j<strlen($numbers); $j++){
                    $character2 = $numbers[$j];

                    for ($k=0; $k<strlen($numbers); $k++){
                        $character3 = $numbers[$k];

                        for ($l=0; $l<strlen($numbers); $l++){
                            $character4 = $numbers[$l];

                            $attempt = $character1.$character2.$character3.$character4;


                            $check = hash('md5', $attempt);
                            if ($check == $md5) {
                                $goodtext = $attempt;
                                break; 
                                
                            }
                            if($show > 0){
                                print "\n$check $attempt";
                                $show = $show-1;
                            }
                        }
                    }
                }
            }
            $time_past = microtime(true);
                            print "\nElapsed time: ";
                            print $time_past-$time_pre;
                            print "\n";
         }
        ?>
    </pre>

    <p>
        Original Text: <?= htmlentities($goodtext); ?> 
    </p>
    <form>
        <input type = "text" name = "md5" size = "60"/>
        <input type = "submit" vale="Crack MD5"/>
    </form>
    
</body>


