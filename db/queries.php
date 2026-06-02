<?php

require_once 'dbfunctions.php';

// Get current status of controls
function getControls() {
    return run_query("
    SELECT * FROM Controls LIMIT 1;
    ");
}

// Turn (off/on) a (specified control) - heating, lighting, water, windows
function setControl($control, $value) {

}

// Get current/30day (make the 30 day per day not time in last 30 days) humidity/temperature data - in one using nested (temp, humid, temp[], humid[])?
// No - should be separated
function getOutsideTemperature() {

}

function getInsideTemperature() {

}

function getPlantTemperature($plant) {

}

// get average humidity across all plants
function getHumidity() {

}

function getPlantHumidity($plant) {

}

// Change control mode (mode)
function changeMode($newMode) {
    
}