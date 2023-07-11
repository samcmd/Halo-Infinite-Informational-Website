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

$id = '';

print '<main>';
print '<h2>Delete weapon record</h2>';

if (isset($_POST['btnSubmit'])) {
    $id = (int) getData('pmkWeaponId');

    $sql = 'DELETE FROM tblWeapons WHERE ';
    $sql .= 'pmkWeaponId = ? ';

    $data = array();
    $data[] = $id;

    if (DEBUG) {
        print $thisDatabaseReader->displayQuery($sql, $data);
    }

    try {
        $thisDatabaseWriter->insert($sql, $data);
        print '<p>Record was successfully deleted.</p>';
    } catch (PDOException $e) {
        print '<p>Couldn\'t delete the record.</p>';
    }
}
?>

<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" id="frmDelete" method="post">
        <fieldset>
            <p>
                <label for="pmkWeaponId">Weapon ID</label>
                <input type="text" name="pmkWeaponId" id="pmkWildlideId" minlength="1" maxlength="3" pattern="\d*" title="Numbers only." value="<?php print $id; ?>">
            </p>
        </fieldset>
        <fieldset>
            <p><input type="submit" value="Delete" tabindex="999" name="btnSubmit"></p>
        </fieldset>
    </form>

</main>

<?php include 'footer.php'; ?>