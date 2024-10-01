<?php
// Funzione per generare una password casuale
function generatePassword($length) {
    $lowercase = 'abcdefghijklmnopqrstuvwxyz';
    $uppercase = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $numbers = '0123456789';
    $symbols = '!@#$%^&*()-_=+[]{};:,.<>?';
    
    // Combina tutti i caratteri disponibili
    $allCharacters = $lowercase . $uppercase . $numbers . $symbols;
    
    // Genera la password
    $password = '';
    for ($i = 0; $i < $length; $i++) {
        $randomIndex = rand(0, strlen($allCharacters) - 1);
        $password .= $allCharacters[$randomIndex];
    }
    
    return $password;
}
?>
