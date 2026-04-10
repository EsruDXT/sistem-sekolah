<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Siswa</title>
    <link rel="stylesheet" href="/css/output.css">
</head>
<body class="min-h-screen flex flex-col">
    <?php require_once '../app/views/layouts/partials/header.php' ?>

    <main class="bg-gray-100 grow flex-grow">
        <?php require_once $content ?>
    </main>
</body>
</html>