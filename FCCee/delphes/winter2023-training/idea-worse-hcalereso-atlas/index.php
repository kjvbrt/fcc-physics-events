<?php
require('../../../../config.php');

$layer = 'table';
$acc = 'fcc-ee';
$evtType = 'delphes';
$genType = 'none';
$campaign = 'winter2023-training';
$det = 'idea-worse-hcalereso-atlas';

$dataFilePath = BASE_PATH . '/data/FCCee/Delphesevents_winter2023_training_IDEA_worse_HCalEReso_ATLAS.txt';
$description = 'Delphes FCCee Physics events winter2023 training production (IDEA detector with worse HCal energy resolution &mdash; ATLAS like).';
?>

<?php require(BASE_PATH . '/FCCee/page.php') ?>
