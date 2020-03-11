<?php

// app.php

/*$arr = array('a' => 1, 'b' => 2, 'c' => 3, 'd' => 4, 'e' => 5);
 echo 'array data format<br>';
            foreach($arr as $result):                
             echo'<pre>';
                    print_r($result);
                echo '</pre>';
            endforeach;
echo json_encode($result);*/

$arr = array('Millie' => 'Eleven', 
            'Mike' => 'Finn', 
            'Gaten' => 'Dustin', 
            'Noah' => 'Will'); 
print_r($arr);

echo "<br>";echo json_encode($arr);