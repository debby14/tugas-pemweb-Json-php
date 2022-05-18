<?php 
$JSON = '{
    "LIGA_First Last_World_Cup_final":
    {
        "Year": "2022",
        "data":
        {
            "Winner": "England",
            "Score": "4-2",
            "Runner-up": "Spain"
        }
    }
}';

$outputArray = json_decode($JSON, TRUE);

print "<PRE>";
print_r($outputArray);
?>