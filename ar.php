<?php 
include 'top.php'; 
$sql = 'SELECT tblWeapons.fldWeaponName, tblWeapons.fldDescription, tblWeapons.fldUsage, ';
$sql .= 'tblWeapons.fldWeaponImage, tblWeaponsSkins.fpkSkinName, tblWeaponsSkins.fldSkinImage, ';
$sql .= 'tblWeaponsModels.fpkModelName, tblWeaponsModels.fldModelImage FROM tblWeapons ';
$sql .= 'JOIN tblWeaponsSkins ON tblWeapons.pmkWeaponID = tblWeaponsSkins.fpkWeaponID ';
$sql .= 'JOIN tblWeaponsModels ON tblWeaponsModels.fpkWeaponID = tblWeapons.pmkWeaponID ';
$sql .= 'WHERE tblWeapons.pmkWeaponID = 1 OR tblWeaponsSkins.fpkWeaponID = 1 OR tblWeaponsModels.fpkWeaponID = 1;';

$data = '';
$weapons = $thisDatabaseReader->select($sql, $data);
?>

<main>
<?php
if (is_array($weapons)) {
    $weapon1 = $weapons[0];
    $weapon2 = $weapons[1];
    $weapon3 = $weapons[2];
    $weapon4 = $weapons[4];
    print '<figure class="animal_single">';
    print '<img alt="' . $weapon1['fldWeaponName'] . '" src="images/' . $weapon1['fldWeaponImage'] . '">';
    print '<figcaption>' . $weapon1['fldWeaponName'] . '</figcaption>';
    print '</figure>';
    print '<section class="animal_info">';
    print '<h3>Description</h3>';
    print '<p>' . $weapon1['fldDescription'] . '</p>';
    print '<h3>Usage</h3>';
    print '<p>' . $weapon1['fldUsage'] . '</p>';
    print '</section>';
    print '<h3>Skins</h3>';
    print '<figure class="animal">';
    print '<img alt="' . $weapon1['fpkSkinName'] . '" src="images/' . $weapon1['fldSkinImage'] . '">';
    print '<figcaption>' . $weapon1['fpkSkinName'] . '</figcaption>';
    print '</figure>';
    print '<figure class="animal">';
    print '<img alt="' . $weapon3['fpkSkinName'] . '" src="images/' . $weapon3['fldSkinImage'] . '">';
    print '<figcaption>' . $weapon3['fpkSkinName'] . '</figcaption>';
    print '</figure>';
    print '<figure class="animal">';
    print '<img alt="' . $weapon4['fpkSkinName'] . '" src="images/' . $weapon4['fldSkinImage'] . '">';
    print '<figcaption>' . $weapon4['fpkSkinName'] . '</figcaption>';
    print '</figure>';
    print '<h3>Models</h3>';
    print '<figure class="animal">';
    print '<img alt="' . $weapon1['fpkModelName'] . '" src="images/' . $weapon1['fldModelImage'] . '">';
    print '<figcaption>' . $weapon1['fpkModelName'] . '</figcaption>';
    print '</figure>';
    print '<figure class="animal">';
    print '<img alt="' . $weapon2['fpkModelName'] . '" src="images/' . $weapon2['fldModelImage'] . '">';
    print '<figcaption>' . $weapon2['fpkModelName'] . '</figcaption>';
    print '</figure>';
}
?>
</main>