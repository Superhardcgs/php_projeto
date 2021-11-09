<html>
    <?php
        $matriz = [
            [1,2,3],
            [4,5,6],
            [7,8,9],
        ];
    
    for($x=0; $x<3; $x++){
        echo "<br>";
            for($y=0; $y<3; $y++){
                echo $matriz[$x][$y];
                if($y < 2){
                    echo ", ";
                }

            }
    }
    ?>
</html>
