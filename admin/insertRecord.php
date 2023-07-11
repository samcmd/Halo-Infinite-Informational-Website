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
print '<h2>Insert weapon record</h2>';

if (isset($_POST['btnSubmit'])) {
    $type = getData('fldWeaponName');
    $desc = getData('fldDescription');
    $use = getData('fldUsage');
    $img = getData('fldWeaponImage');

    $sql = 'INSERT INTO tblWeapons SET ';
    $sql .= 'fldWeaponName = ?, ';
    $sql .= 'fldDescription = ?, ';
    $sql .= 'fldUsage = ?, ';
    $sql .= 'fldWeaponImage = ? ';

    $data = array();
    $data[] = $wName;
    $data[] = $desc;
    $data[] = $use;
    $data[] = $img;

    if (DEBUG) {
        print $thisDatabaseReader->displayQuery($sql, $data);
    }

    try {
        $thisDatabaseWriter->insert($sql, $data);
        print '<p>Record was successfully inserted.</p>';
    } catch (PDOException $e) {
        print '<p>Couldn\'t insert the record.</p>';
    }
}
?>

<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" id="frmInsert" method="post">
        <fieldset>
            <p>
                <label for="fldWeaponName">Weapon Name</label>
                <input type="text" name="fldWeaponName" id="fldWeaponName" minlength="3" maxlength="30" pattern="[A-Za-z]+" title="Letters only." value="<?php print $wName?>">
            </p>
            <p>
                <label for="fldDescription">Description</label>
                <input type="text" name="fldDescription" id="fldDescription" minlength="3" maxlength="500" pattern="[a-zA-Z0-9-_.]+" title="Letters, numbers, hyphens, underscores, and periods only." value="<?php print $desc; ?>">
            </p>
            <p>
                <label for="fldUsage">Usage</label>
                <input type="text" name="fldUsage" id="fldUsage" minlength="3" maxlength="500" pattern="[a-zA-Z0-9-_.]+" title="Letters, numbers, hyphens, underscores, and periods only." value="<?php print $use; ?>">
            </p>
            <p>
                <label for="fldWeaponImage">Main Image</label>
                <input type="text" name="fldWeaponImage" id="fldWeaponImage" minlength="3" maxlength="20" pattern="[a-zA-Z0-9-_.]+" title="Letters, numbers, hyphens, underscores, and periods only." value="<?php print $img; ?>">
            </p>
        </fieldset>
        <fieldset>
            <p><input type="submit" value="Insert" tabindex="999" name="btnSubmit"></p>
        </fieldset>
    </form>

</main>

<?php include 'footer.php'; ?>