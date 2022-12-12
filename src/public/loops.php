<?php
$pronouns = array ('I', 'You', 'He/She','We', 'You', 'They');

foreach($pronouns as $pronoun){
    if($pronoun == 'He/She') {
        echo "{$pronoun} codes <br>";

    } else {
        echo "{$pronoun} code <br>";

};

};
echo "For loop <br>";

for ($num = 1; $num <= 120; $num ++){
echo "{$num} <br>";
};

echo "<br>While loop:<br>";

$num = 1;
while($num <=120){
    echo "{$num} <br>";
    $num++;

};

$students = ['Andreas', 'Anselme', 'Aurélie V', 'Aurélie W', 'Christophe', 'Colin', 'Danaé', 'David', 'Hanane', 'Igor', 'Jade', 'Jérôme', 'Khadja', 'Kimberley', 'Lauranne', 'Lisa', 'Loïc', 'Luka', 'Maxime', 'Nicolas', 'Olivia', 'Quentin', 'Romain', 'Sacha', 'Tanguy', 'Valentin', 'Vitto'];

    foreach($students as $student ){
        echo "{$student} <br>";
    };


    $countrys = [
        'BE' => "Belgium",
        "FR" => "France",
        "DE" => "Germany",
        "UK" => "Great Britan",
        "NL" => "Netherlands",
        "PL" => "Poland",
        "BR" => "Brasil",
        "AT" => "Austria",
        "AF" => "Afgahnistan",
        "BN" => "Brunei",
        "EC" => "Ecuador"
    ];

?>
<html>
<form>
    <select>
        <?php
        foreach($countrys as $code => $country){
            echo "<option value= {$code}>{$country}</option>";
        };
        ?>
    </select>
</form>
</html>