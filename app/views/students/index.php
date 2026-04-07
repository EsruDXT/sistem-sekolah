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
            <p>Menampilkan daftar siswa yang terdaftar.</p>
        </div>
<!-- Card Content -->
        <div class="container mx-auto p-4 mt-4 bg-white shadow rounded-lg">
            <table class="w-full ">
                <thead class="bg-gray-300">
                    <tr>
                        <th class="py-2 px-4 text-left">No</th>
                        <th class="py-2 px-4 text-left">Nama</th>
                        <th class="py-2 px-4 text-left">NIS</th>
                        <th class="py-2 px-4 text-left">Kelas</th>
                        <th class="py-2 px-4 text-left">No Telepon</th>
                        <th class="py-2 px-4">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <!-- Contoh data siswa -->
                    <tr>
                        <td class="py-2 px-4 text-left">1</td>
                        <td class="py-2 px-4 text-left">Harry Wang</td>
                        <td class="py-2 px-4 text-left">999</td>
                        <td class="py-2 px-4 text-left">XI TKJ 3</td>
                        <td class="py-2 px-4 text-left">081352689235</td>
                        <td class="py-2 px-4 text-center">
                            <div class="flex items-center justify-center gap-4">
                                <a href="/students/1" class="text-green-500 hover:underline">Detail</a>
                                <a href="/students/1/edit" class="text-yellow-500 hover:underline">Edit</a>
                                <a href="" class="text-red-500 hover:underline">Hapus</a>
                            </div>
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