<?php
$availableCategories = ['nature', 'politique', 'géographie', 'technologie', 'histoire', 'littérature', 'philosophie', 'économie'];
$coll = collator_create('fr_FR');
uasort($availableCategories, fn ($a, $b) => collator_compare($coll, $a, $b));

return $availableCategories;
