<?php
use StudentApp\Student;
$data=[
    ["klase"=>"5c","vardas"=>"Simonas","pavarde"=>"Paulius","pazymiai"=>[5,8,9]],
    ["klase"=>"5c","vardas"=>"Paulius","pavarde"=>"Simonas","pazymiai"=>[2,2,2]],
    ["klase"=>"5d","vardas"=>"Jonas","pavarde"=>"Jonaitis","pazymiai"=>[5,10,9]],
    ["klase"=>"5e","vardas"=>"Petras","pavarde"=>"Petraitis","pazymiai"=>[2,5,4]],
];
$students=[];
foreach ($data as $val){
        $student=new Student($val['klase'],$val['vardas'],$val['pavarde'],$val['pazymiai']);
        array_push($students,$student->showList());
}



?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <link type="text/css" rel="stylesheet" href="assets/style.css" >
    <title>Document</title>
</head>
<body>
<table class="table">
    <thead>
    <tr>
        <th class="hide">Klasė</th>
        <th>Kodas</th>
        <th>Vardas</th>
        <th>Pavardė</th>
        <th>Kontrolinių darbų vidurkis</th>
        <th>Duomenų formavimo data</th>
    </tr>
    </thead>
    <?php foreach($students as $stud): ?>
        <tr>
            <?php foreach($stud as $value):?>
            <td><?=$value?></td>
            <?php endforeach;?>
        </tr>
    <?php endforeach; ?>
</table>
</body>
</html>

