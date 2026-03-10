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
        <div class="bg-white shadow rounded-lg container mx-auto p-4 mt-4">
            <h1 class="text-2xl font-bold mb-4">Daftar Siswa</h1>
            <p class="text-blue-500">Menampilkan daftar siswa.</p>
        </div>

        <div class="container mx-auto p-4 mt-4">
            <table class="min-w-full bg-white shadow rounded-lg">
                <thead>
                    <tr>
                        <th class="py-2 px-4 border-b">ID</th>
                        <th class="py-2 px-4 border-b">Nama</th>
                        <th class="py-2 px-4 border-b">Kelas</th>
                        <th class="py-2 px-4 border-b">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <!-- Contoh data siswa -->
                    <tr>
                        <td class="py-2 px-4 border-b">1</td>
                        <td class="py-2 px-4 border-b">Budi Santoso</td>
                        <td class="py-2 px-4 border-b">XII RPL 1</td>
                        <td class="py-2 px-4 border-b">
                            <a href="/students/1" class="text-blue-500 hover:underline">Lihat Detail</a>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </main>

    <footer class="bg-gray-400">
        <div class="text-center p-4">
            &copy; <?php echo date("Y"); ?> Sistem Sekolah SMK KRISTEN IMMANUEL.
        </div>
    </footer>
</body>
</html>