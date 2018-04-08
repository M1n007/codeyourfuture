<!DOCTYPE html>
<html>
<head>
    <title>Generate</title>
</head>
<body>

    <form action="" method="post">
        
        <button name="generate">Generate License</button>
    </form>


</body>
</html>
<?php

    if (isset($_POST['generate'])) {
 
        $tokens = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789';
        $segment_chars = 4;
        $num_segments = 4;
        $key_string = '';
     
        for ($i = 0; $i < $num_segments; $i++) {
     
            $segment = '';
     
            for ($j = 0; $j < $segment_chars; $j++) {
                    $segment .= $tokens[rand(0, 35)];
            }
     
            $key_string .= $segment;
     
            if ($i < ($num_segments - 1)) {
                    $key_string .= '-';
            }
     
        }

     
     $e = $key_string;

     echo $e;
    }


?>