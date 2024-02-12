<?php
require_once('AnggotaDPR.php'); // Include AnggotaDPR class

// Initialize empty array to store AnggotaDPR objects
$vec = array();

// Function to add a new AnggotaDPR object to the array
function addAnggotaDPR($id, $name, $div_name, $party_name) {
    global $vec;
    $anggotaDPR = new AnggotaDPR($id, $name, $div_name, $party_name);
    $vec[] = $anggotaDPR;
}

// Function to edit an existing AnggotaDPR object in the array
function editAnggotaDPR($id, $name, $div_name, $party_name) {
    global $vec;
    foreach ($vec as $anggotaDPR) {
        if ($anggotaDPR->getId() == $id) {
            $anggotaDPR->setName($name);
            $anggotaDPR->setDiv($div_name);
            $anggotaDPR->setParty($party_name);
            break;
        }
    }
}

// Function to delete an existing AnggotaDPR object from the array
function deleteAnggotaDPR($id) {
    global $vec;
    foreach ($vec as $key => $anggotaDPR) {
        if ($anggotaDPR->getId() == $id) {
            unset($vec[$key]);
            break;
        }
    }
}

// Add some initial AnggotaDPR objects to the array
addAnggotaDPR('1', 'Udin Syarif', 'Finance', 'Partai Komunikasi Indonesia');
addAnggotaDPR('2', 'Mr. John Wijoyo', 'Perbankan', 'Asosiasi Partai Republik Amerika');

// Perform CRUD operations
// Add new AnggotaDPR
addAnggotaDPR('3', 'Joko Waluyo', 'Healthcare', 'Organisasi Papua Maju');

echo "Basis:<br>";
foreach ($vec as $anggotaDPR) {
    echo "ID: " . $anggotaDPR->getId() . "<br> Name: " . $anggotaDPR->getName() . "<br> Division: " . $anggotaDPR->getDiv() . "<br> Party: " . $anggotaDPR->getParty() . "<br><img src='gatau.png'><br>";
}
echo "<br>Editan:<br>";
// Edit existing AnggotaDPR
editAnggotaDPR('2', 'Ahmad John Wijoyo', 'Education', 'Nasional Sosial Demokrat Asosiasi Partai');
foreach ($vec as $anggotaDPR) {
    echo "ID: " . $anggotaDPR->getId() . "<br> Name: " . $anggotaDPR->getName() . "<br> Division: " . $anggotaDPR->getDiv() . "<br> Party: " . $anggotaDPR->getParty() . "<br><img src='gatau.png'><br>";
}

echo "<br>Hapusan:<br>";
// Delete existing AnggotaDPR
deleteAnggotaDPR('1');

// Display all AnggotaDPR objects
foreach ($vec as $anggotaDPR) {
    echo "ID: " . $anggotaDPR->getId() . "<br> Name: " . $anggotaDPR->getName() . "<br> Division: " . $anggotaDPR->getDiv() . "<br> Party: " . $anggotaDPR->getParty() . "<br><img src='gatau.png'><br>";
}
?>

