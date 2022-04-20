<!DOCTYPE html>
<html>
    <body>
        <?php 
            include 'common.php';
            get_header(); 
        ?>
        <h1>Matches for <?php echo $_GET["name"]; ?></h1>
        <br><br>
        <div class="match">
            <?php 
            $file = fopen("./singles.csv", "r");
            $data = [];
            //Loop through the CSV rows.
            while (($member = fgetcsv($file, 0, ",")) !== FALSE) {
            //Find the user's information 
                if($member[0] == $_GET["name"]) {
                    $username = $member[0];
                    $usersex = $member[1];
                    $userage = $member[2];
                    $usertype = $member[3];
                    $useros = $member[4];
                    $userlow = $member[5];
                    $userhigh = $member[6];
                } else {
                    $data[] .= $member;
                    if($member[1] != $usersex) {
                        print_r(implode(" ", $member))."<br";
                    }
                }
                
            }

            fclose($file);
            
            ?>
            <ul>
                <li><img src="./avatar.png"></li>
            </ul>
        </div>
        <?php 
            get_footer(); 
        ?>
    </body>
</html>