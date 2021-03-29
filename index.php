
<?php
require 'db.php';
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Földházi Márton</title>
        <link href="stilus.css" rel="stylesheet" type="text/css"/>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="feldolgoz.js" type="text/javascript"></script>
    </head>
    <body>
        <div class="kozepre">
            <h1 style="text-align: center;color: #404040;" >TODO lista</h1>

            <input type="text" id="nev" name="nev"></input>
            <input type="date" id="datum" name="nev"></input>
        
            <select id="rendezesek">
                <?php
                $sql = "SHOW COLUMNS FROM todok";
                $talalat = $mysqli->query($sql);

                while ($sor = $talalat->fetch_row()) {
                    echo '<option name="rendezes" value="' . $sor[0] . '">' . $sor[0] . '</option>';
                }
                ?> 


            </select> 
            <br><button id="elkuld">+Add</button>
            <button id="betolt">Betöltés</button>
            <table style="width: 20%;margin-top: 20px;">
                <tr>


                </tr>
            </table>
        </div>
    </body>
</html>
