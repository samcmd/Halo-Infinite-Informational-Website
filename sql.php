
<?php
include 'top.php';
?>
<main>
        <p>Create Table SQL</p>

        <pre>
        CREATE TABLE tblWildlife(
            pmkWildlifeId INT AUTO_INCREMENT PRIMARY KEY, 
            fldType VARCHAR(12),
            fldCommonName VARCHAR(20),
            fldDescription VARCHAR(1300),
            fldHabitat TEXT,
            fldReproduction TEXT,
            fldDiet TEXT,
            fldManagement TEXT,
            fldStatus TEXT,
            fldMainImage VARCHAR(30)
        )
        </pre>

        <pre>
        CREATE TABLE tblAdopter(
            pmkAdopterEmail VARCHAR(50) PRIMARY KEY, 
            fldFirstName VARCHAR(50), 
            fldLastName VARCHAR(60), 
            fldAgreedToTerms TINYINT(1) DEFAULT 1, 
            fldRecieveCommunication TINYINT(1) DEFAULT 1
        )
        </pre>

        <pre>
        CREATE TABLE tblAdopterWildlife(
            pmkDonationId INT(11) AUTO_INCREMENT PRIMARY KEY,
            fpkAdopterEmail VARCHAR(50), 
            fpkWildlifeId INT(11),
            fldDonationAmount INT(11) DEFAULT 0
        )
        </pre>

        <p>Select wildlife</p>
        <pre>
        SELECT pmkWildlifeId, fldType, fldCommonName, fldDescription, fldHabitat, fldReproduction, 
        fldDiet, fldManagement, fldStatus, fldMainImage
        FROM tblWildlife
        ORDER BY fldCommonName
        </pre>

        <p>Select adopter</p>
        <pre>
        SELECT pmkAdopterEmail, fldFirstName, fldLastName, fldAgreedToTerms, fldRecieveCommunication 
        FROM tblAdopter
        ORDER BY pmkAdopterEmail
        </pre>

        <p>Select adpoterWildlife</p>
        <pre>
        SELECT pmkDonationId, fpkAdopterEmail, fpkWildlifeId, fldDonationAmount 
        FROM tblAdopterWildlife
        ODRER BY pmkDonationId
        </pre>

</main>
<?php include 'footer.php'; ?>
</body>
</html>