<?php
$family = ["Sarah", "Olivia", "Luna", "Frederick"];
$receipes = ["Pankackes", "eggs and bacon", "Venlafaxin"];
$films = ["Matrix", "Winnie Pooh", "Hellboy"];

print_r($family);
print_r($receipes);
print_r($films[0]);

$me = [
    'name' => 'Trips',
    'firstname' => 'Jérome',
    'age' => 36,
    'season' => "spring",
    'likes socker' => false,
    'movies' => ["Matrix", "Winnie Pooh", "Hellboy"],
    'hobbys' => ['Anime','Gaming','Tabletop RPG']
];

$mother = [
    'age' => 65,
    'season' => "summer",
    'likes socker' => false,
    'movies' => ["I","really","dont","know"],
    'hobbys' => ['Kaarneval','Singing']
];

$soulmate = [
    'age' => 35,
    'season' => "summer",
    'likes socker' => false,
    'movies' => ["10 people you meetr in Heaven"],
    'hobbys' => ['Singing','boardgames','Tabletop RPG']
];


$me['mother'] = $mother;
$me['hobbys'][] = "taxidermy";
$merge = array_merge($me['hobbys'], $soulmate['hobbys']);
$intersect = array_intersect($me['hobbys'], $soulmate['hobbys']);


echo '<pre>';
print_r($me);
print_r($intersect);
print_r($merge);
echo '</pre>';

$totalhobbys = count($me['hobbys']) + count($me['mother']['hobbys']);


?>

<p><?php echo $totalhobbys?></p>

