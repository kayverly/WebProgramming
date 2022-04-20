<!DOCTYPE html>
<html>
    <head>
        <title>Arrays and Functions</title>
    </head>
<body>
    <?php
        $topRestaurants = array("Fogo de Chao"=>"40.50", "Aviva by Kameel" => "15.00", "Bone's Restaurant" => "65.00", 
        "Umi Suhsi Buckhead" => "40.50", "Fandangles" => "30.00", "Capital Grille" => "60.50", "Canoe" => "35.50", 
        "One Flew South" => "21.00", "Fox Bros. BBQ" => "15.00", "South City Kitchen Mitown" => "29.00");
        
        echo "<h4>Top 10 Restaurants Restaurants in Atlanta</h4>";
        printTable($topRestaurants);

        echo "<br>"."Top 10 Restaurants in Atlanta ordered by Price:" . "<br><br>";
        sortByPrice($topRestaurants);

        echo "<br>"."Top 10 Restaurants in Atlanta ordered by Name:" . "<br><br>";
        sortByName($topRestaurants);

    function printTable($data) {
        $html = "<table border = 2px;";
        $html .= "<tr>";
        $html .= "<th>" . "Restaurant Name"."</th>";
        $html .= '<th>' .'Average Cost'. '</th>';
        $html .= '</tr>';

        foreach($data as $key=>$value){
            $html .= '<tr>';
            $html .= '<td>' . $key." " . '</td>';
            $html .= '<td>' . $value . '</td>';
            $html .= '</tr>';
        }

        $html .= '</table>';
        echo $html;
    }

    function sortByPrice($data){
        asort($data);
        printTable($data);
    
    }

    function sortByName($data) {
        ksort($data);
        printTable($data);
    }

        
    ?> 
</body>
</html>