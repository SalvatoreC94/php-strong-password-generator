<?php
// Includi il file delle funzioni
include 'functions.php';

// Controlla se è stata inviata una lunghezza della password
if (isset($_GET['length']) && is_numeric($_GET['length'])) {
    $length = intval($_GET['length']);
    $generatedPassword = generatePassword($length);
}
?>

<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Generatore di Password Sicure</title>
</head>
<body>
    <div class="container d-flex justify-content-center align-items-center vh-100">
        <div class="text-center">
            <h1>Generatore di Password Sicure</h1>
            <form action="" method="GET">
                <div class="mb-3">
                    <label for="length" class="form-label">Lunghezza della Password:</label>
                    <input type="number" id="length" name="length" class="form-control" required min="1">
                </div>
                <button type="submit" class="btn btn-primary">Genera Password</button>
            </form>
            <?php if (isset($generatedPassword)): ?>
                <h2 class="mt-4">Password Generata:</h2>
                <p class="alert alert-success"><?php echo htmlspecialchars($generatedPassword); ?></p>
            <?php endif; ?>
        </div>
    </div>

    
</body>
</html>
