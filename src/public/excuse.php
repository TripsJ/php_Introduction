<!-- name of the child
Gender of the child (girl or boy)
name of the teacher
a reason for the absence to be chosen among options (radio type input):
illness
death of the pet (or a family member)
significant extra-curricular activity
any other excuse of your choice -->
<?php

date_default_timezone_set('Europe/Berlin');
$today = date("D d-m-y");
$child = $_GET['child'];
if (!isset($child)) {
    $excuse = "please indicate the Name of your child";
} elseif (!isset($teach)){
    $excuse = "please indicate the Name of a teacher";
} elseif (!isset($reason)){
    $excuse = "please indicate a reason for your absence";
} elseif ($child == "Gollum"){
    $excuse = "Wheres my precious?";
}
else{
    $teach = $_GET['teacher'];
    $reason = $_GET['reason'];
    $prefix = "{$today} <br> Dear {$teach},<br> my child, {$child}, will be absent today for the following reason: ";
    $suffix = "<br>Thank you for your understanding";
    switch($reason){
        case 2:
            $excuse = " a member of our familly died.";
            break;
        case 1; 
            $excuse = " the child is sick.";
            break;
        case 3:
            $excuse = " the child is busy elsewhere.";
            break;
        case 4:
            $excuse = " an important toy got lost.";
            break;
    }
}
?>
<form method="get" action="excuse.php">
	<label for="child"> Name of the  Child</label>
	<input type="text" name="child">
    <label for="child"> Name of the  Teacher</label>
    <input type="text" name="teacher">
    <label for="1"> Illness </label>
	<input type= "radio" name="reason" id="1" value="1">
    <label for="2"> Death of a pet </label>
    <input type= "radio" name="reason" id="2" value="2">
    <label for="3"> Extracurricular activity</label>
    <input type= "radio" name="reason" id="3" value="3">
    <label for="4"> Loss of a Toy</label>
    <input type= "radio" name="reason" id="4" value="4">
	
    
	<input type="submit" name="submit" value="Generate">
</form>
<br>
<br> 
<p>Your excuse has been generated and is displayed below:<br>
<br>
<?php echo $prefix, $excuse, $suffix  ?> </p>