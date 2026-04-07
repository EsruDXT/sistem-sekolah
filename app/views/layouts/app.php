<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Siswa</title>
    <link rel="stylesheet" href="/css/output.css">
</head>
<body class="min-h-screen flex flex-col">
    <header class="bg-blue-500 text-white p-4">
    <div class="flex justify-between container mx-auto p-[16px] align-center">
    <a href="/students" class="font-bold text-xl">Sistem Sekolah</a>
    <a href="/students/create" class="bg-white text-blue-500 px-4 py-2 rounded-lg">+ Tambah Siswa</a>
    </div>
    </header>

    <main class="bg-gray-100 grow flex-grow">
        <?php require_once $content ?>
    </main>
</body>
</html>