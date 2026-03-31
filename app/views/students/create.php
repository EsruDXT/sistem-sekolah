<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Siswa</title>
    <link rel="stylesheet" href="/css/output.css">
</head>
<body class="min-h-screen flex flex-col">
    <header class="bg-blue-500 text-white p-4">
    <div class="flex justify-between container mx-auto p-[16px] align-center">
    <a href="/students" class="font-bold text-xl">Sistem Sekolah</a>
    <a href="/students/create" class="bg-white text-blue-500 px-4 py-2 rounded-lg">+ Tambah Siswa</a>
    </div>
    </header>
<!-- Card Header -->
    <main class="bg-gray-100 grow flex-grow">
        <div class="bg-white shadow rounded-lg container mx-auto p-4 mt-4">
            <h1 class="text-2xl font-bold mb-4">Tambah Siswa</h1>
            <p>Menampilkan form tambah siswa.</p>
        </div>
<!-- Card Content -->
        <div class="container mx-auto p-4 mt-4 bg-white shadow rounded-lg items-center">
            <form action="/students" method="POST" class="p-4 grid grid-cols-2 gap-4" >
                <div class="mb-4">
                    <label for="name" class="block text-gray-700 text-sm font-bold mb-2">Nama:</label>
                    <input type="text" id="name" name="name" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" placeholder="Masukkan Nama">
                </div>
                <div class="mb-4">
                    <label for="nis" class="block text-gray-700 text-sm font-bold mb-2">NIS:</label>
                    <input type="text" id="nis" name="nis" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" placeholder="Masukkan NIS">
                </div>
                <div class="mb-4">
                    <label for="class" class="block text-gray-700 text-sm font-bold mb-2">Kelas:</label>
                    <input type="text" id="class" name="class" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" placeholder="Masukkan Kelas">
                </div>
                <div class="mb-4">
                    <label for="phone" class="block text-gray-700 text-sm font-bold mb-2">No Telepon:</label>
                    <input type="text" id="phone" name="phone" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" placeholder="Masukkan No Telepon">
                </div>
                <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
                    Tambah Siswa
                </button>
            </form>
        </div>
    </main>

    <footer class="bg-gray-400">
        <div class="text-center p-4">
            &copy; <?php echo date("Y"); ?> Sistem Sekolah SMK KRISTEN IMMANUEL.
        </div>
    </footer>
</body>
</html>