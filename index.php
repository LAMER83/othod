
<?php
$optionFilial = '';
$db = new PDO('sqlite:db\othod.sqlite3');
$query = $db->prepare("SELECT * FROM filial");
$query->execute();
$i = 1;
$query_pole = $db->prepare("SELECT * FROM pole");
$query_pole->execute();

$pul = [];

foreach ($filial = $query->fetchAll() as $value => $item){
    $optionFilial .= "<option value='$i'>".$item['NameFilial'].'</option>';
    $i++;
    foreach ($pole = $query_pole->fetchAll() as $value_pole => $g){
        //$pul[$item['NameFilial']] = [] [$g['NamePole']] ;
        $pul[$item['NameFilial']] = array($g['NamePole']) ;
    }
}

//$query = $db->prepare("SELECT filial.NameFilial, pole.NamePole FROM filial
//INNER JOIN pole ON filial.id = pole.ID_Filial");

//$query->execute();
echo '<pre>';
print_r($pul);
//print_r($query->fetchAll());
//INSERT INTO 'pole' ('ID','ID_Filial', 'NamePole'
//    ) VALUES (null, 3,'Каргинский');
//INNER JOIN sostoyanie ON life.id_sostoyanie = sostoyanie.id
//http://xandeadx.ru/blog/javascript/36
?>

<select name="filial" id="filial_id"> <option value="0">Выбирите филиал</option><?php echo $optionFilial;?></select>
<select name="pole" id="pole_id"> <option value="0">Выбирите поле</option></select>
<select name="kyltura" id="kyltura_id"> <option value="0">Выбирите культуру</option></select>