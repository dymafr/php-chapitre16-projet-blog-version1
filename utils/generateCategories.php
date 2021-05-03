<?php
$availableCategories = require 'availableCategories.php';

foreach ($availableCategories as $cat) {
    echo '<option ' 
    . (!$category || $category === $cat ? 'selected ' : '') 
    . 'value=' . $cat . '>' 
    . mb_convert_case($cat, MB_CASE_TITLE) 
    . "</option>";
}