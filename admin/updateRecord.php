<?php
include 'top.php';

function getData($field) {
    if (!isset($_POST[$field])) {
        $data = "";
    }
    else {
        $data = trim($_POST[$field]);
        $data = htmlspecialchars($data, ENT_QUOTES);
    }
    return $data;
}

$wName = '';
$desc = '';
$use = '';
$img = '';

print '<main>';
print '<h2>Update weapon record</h2>';

if (isset($_POST['btnSubmit'])) {
    $wName = getData('fldWeaponName');
    $desc = getData('fldDescription');
    $use = getData('fldUsage');
    $img = getData('fldWeaponImage');
    $id = (int) getData('pmkWeaponId');

    $sql = 'UPDATE tblWeapons SET ';
    $sql .= 'fldWeaponName = ?, ';
    $sql .= 'fldDescription = ?, ';
    $sql .= 'fldUsage = ?, ';
    $sql .= 'fldWeaponImage = ? ';
    $sql .= 'WHERE pmkWeaponId = ?';

    $data = array();
    $data[] = $type;
    $data[] = $wName;
    $data[] = $desc;
    $data[] = $use;
    $data[] = $img;
    $data[] = $id;

    if (DEBUG) {
        print $thisDatabaseReader->displayQuery($sql, $data);
    }

    try {
        $thisDatabaseWriter->insert($sql, $data);
        print '<p>Record was successfully updated.</p>';
    } catch (PDOException $e) {
        print '<p>Couldn\'t update the record.</p>';
    }
}
?>

<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" id="frmUpdate" method="post">
        <fieldset>
            <p>
                <label for="pmkWeaponId">Wildlife ID (required)</label>
                <input type="text" name="pmkWeaponId" id="pmkWeaponId" minlength="1" maxlength="3" pattern="\d*" title="Numbers only." value="<?php print $id; ?>">
            </p>
            <p>
                <label for="fldType">Type</label>
                <input type="text" name="fldType" id="fldType" maxlength="20" pattern="[A-Za-z]+" title="Letters only." value="<?php print $type; ?>">
            </p>
            <p>
                <label for="fldWeaponName">Weapon Name</label>
                <input type="text" name="fldWeaponName" id="fldWeaponName" maxlength="30" pattern="[A-Za-z]+" title="Letters only." value="<?php print $wName?>">
            </p>
            <p>
                <label for="fldDescription">Description</label>
                <input type="text" name="fldDescription" id="fldDescription" maxlength="500" pattern="[a-zA-Z0-9-_.]+" title="Letters, numbers, hyphens, underscores, and periods only." value="<?php print $desc; ?>">
            </p>
            <p>
                <label for="fldUsage">Usage</label>
                <input type="text" name="fldUsage" id="fldUsage" maxlength="500" pattern="[a-zA-Z0-9-_.]+" title="Letters, numbers, hyphens, underscores, and periods only." value="<?php print $use; ?>">
            </p>
            
            <p>
                <label for="fldWeaponImage">Weapon Image</label>
                <input type="text" name="fldWeaponImage" id="fldWeaponImage" maxlength="30" pattern="[a-zA-Z0-9-_.]+" title="Letters, numbers, hyphens, underscores, and periods only." value="<?php print $img; ?>">
            </p>
        </fieldset>
        <fieldset>
            <p><input type="submit" value="Update" tabindex="999" name="btnSubmit"></p>
        </fieldset>
    </form>

</main>

<?php include 'footer.php'; ?>