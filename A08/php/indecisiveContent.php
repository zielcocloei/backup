<?php
$personalityContentQuery = "SELECT ip.*, ic.islandContentID, ic.islandOfPersonalityID,
                    ic.image AS contentImage, ic.content, ic.color AS contentColor
                    FROM islandsofpersonality ip 
                    JOIN islandcontents ic ON ip.islandOfPersonalityID = ic.islandOfPersonalityID
                    WHERE ic.islandOfPersonalityID = 2";
$personalityContentResult = executeQuery($personalityContentQuery);

$personalitiesContent = array();
$titles = array(
    'College Course | Difficult to choose college course',
    'Needs and Wants | Cannot decide what to pick',
    'Food | Difficult to pick what to eat',
    
);
$c = 0;

while ($personalityContent = mysqli_fetch_assoc($personalityContentResult)) {

    $personalitiesContent[$c] = array(
        $personalityContent['islandOfPersonalityID'],
        $personalityContent['contentImage'],
        $personalityContent['content'],
        $personalityContent['contentColor']
    );

    $c++;
}
?>