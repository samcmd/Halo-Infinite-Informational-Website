<?php
include 'top.php';

print '<main>';

$sql = 'SELECT tblAdopter.fldFirstName, tblAdopter.fldLastName, tblWildlife.fldCommonName, ';
$sql .= 'tblAdopterWildlife.fldDonationAmount, SUM(tblAdopterWildlife.fldDonationAmount) AS totalDono ';
$sql .= 'FROM tblAdopter JOIN tblAdopterWildlife ON tblAdopter.pmkAdopterEmail = tblAdopterWildlife.fpkAdopterEmail ';
$sql .= 'JOIN tblWildlife ON tblAdopterWildlife.fpkWildlifeId = tblWildlife.pmkWildlifeId ';
$sql .= 'GROUP BY tblWildlife.fldCommonName, tblAdopterWildlife.fldDonationAmount, tblAdopter.fldFirstName, '; 
$sql .= 'tblAdopter.fldLastName ORDER BY tblWildlife.fldCommonName;';

$data = '';
$critters = $thisDatabaseReader->select($sql,$data);

print '<table>';
print '<tr>';
print '<th>Adopter First Name</th>';
print '<th>Adopter Last Name</th>';
print '<th>Common Name</th>';
print '<th>Donation Amount</th>';
print '<th>Total Donation Amount</th>';
print '</tr>';

if (is_array($critters)) {
    foreach($critters as $critter) {
        print '<tr>';
        print '<td>' . $critter['fldFirstName'] . '</td>';
        print '<td>' . $critter['fldLastName'] . '</td>';
        print '<td>' . $critter['fldCommonName'] . '</td>';
        print '<td>' . $critter['fldDonationAmount'] . '</td>';
        print '<td>' . $critter['totalDono'] . '</td>';
        print '</tr>';
    }
}

print '</table>';

print '</main>';

include 'footer.php';
?>
