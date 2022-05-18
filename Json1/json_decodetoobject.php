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

$outputObject = json_decode($JSON);

print "<PRE>";
print_r($outputObject);
?>