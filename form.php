<?php 
include 'top.php'; 
?>

<main>

<form action="<?php print PHP_SELF . '?cid=' . $critterId; ?>" id="frmAdopt" method="post">
        <fieldset>
            <p>
                <label for="txtAdopterEmail"><h3>Email</h3></label>
                <input type="email" name="txtAdopterEmail" id="txtAdopterEmail" value="<?php print $email; ?>" tabindex="200">
            </p>
        </fieldset>
        <fieldset>
            <h3>Which Halo games have you played?</h3>
            <p>
                <input type="checkbox" name="haloCE" id="haloCE">
                <label for="haloCE">Halo CE</label>
            </p>
            <p>
                <input type="checkbox" name="halo2" id="halo2">
                <label for="halo2">Halo 2</label>
            </p>
            <p>
                <input type="checkbox" name="halo3" id="halo3">
                <label for="halo3">Halo 3</label>
            </p>
            <p>
                <input type="checkbox" name="halo3odst" id="halo3odst">
                <label for="halo3odst">Halo 3: ODST</label>
            </p>
            <p>
                <input type="checkbox" name="haloReach" id="haloReach">
                <label for="haloReach">Halo Reach</label>
            </p>
            <p>
                <input type="checkbox" name="halo4" id="halo4">
                <label for="halo4">Halo 4</label>
            </p>
            <p>
                <input type="checkbox" name="halo5" id="halo5">
                <label for="halo5">Halo 5</label>
            </p>
            <p>
                <input type="checkbox" name="haloInfinite" id="haloInfinite">
                <label for="haloInfinite">Halo Infinte</label>
            </p>
        </fieldset>
        <fieldset>
            <h3>Which Halo game is your favorite?</h3>
            <p>
                <input type="radio" name="fav" id="favHaloCE" value="favHaloCE">
                <label for="favHaloCE">Halo CE</label>
            </p>
            <p>
                <input type="radio" name="fav" id="favHalo2" value="favHalo2">
                <label for="favHalo2">Halo 2</label>
            </p>
            <p>
                <input type="radio" name="fav" id="favHalo3" value="favHalo3">
                <label for="favHalo3">Halo 3</label>
            </p>
            <p>
                <input type="radio" name="fav" id="favHalo3odst" value="favHalo3odst">
                <label for="favHalo3odst">Halo 3: ODST</label>
            </p>
            <p>
                <input type="radio" name="fav" id="favHaloReach" value="favHaloReach">
                <label for="favHaloReach">Halo Reach</label>
            </p>
            <p>
                <input type="radio" name="fav" id="favHalo4" value="favHalo4">
                <label for="favHalo4">Halo 4</label>
            </p>
            <p>
                <input type="radio" name="fav" id="favHalo5" value="favHalo5">
                <label for="favHalo5">Halo 5</label>
            </p>
            <p>
                <input type="radio" name="fav" id="favHaloInfinite" value="favHaloInfinite">
                <label for="favHaloInfinite">Halo Infinte</label>
            </p>
        </fieldset>
        <fieldset>
            <p>
                <label for="oneWeapon"><h3>If you could start a Halo match with only one standard weapon, which would it be?</h3></label>

                <select name="oneWeapon" id="oneWeapon">
                    <option value="ar">MA40 Assualt Rifle</option>
                    <option value="sidekick">MK50 Sidekick</option>
                    <option value="br">BR75 Battle Rifle</option>
                    <option value="commando">VK78 Commando</option>
                    <option value="bulldog">CQS48 Bulldog</option>
                    <option value="hydra">MLRS-2 Hydra</option>
                </select>
            </p>
        </fieldset>

        <fieldset>
            <p><input type="submit" value="Send" tabindex="999" name="btnSubmit"></p>
        </fieldset>
    </form>

<?php
    
print '</main>';

include 'footer.php'; 
?>