
<?php require_once '../app/views/layouts/partials/header.php'; ?>
<!-- Card Header -->
    <main class="bg-gray-100 grow flex-grow">
        <div class="bg-white shadow rounded-lg container mx-auto p-4 mt-4">
            <h1 class="text-2xl font-bold mb-4">Tambah Siswa</h1>
            <p>Menampilkan form tambah siswa.</p>
        </div>
<!-- Card Content -->
        <div class="container mx-auto p-4 mt-4 bg-white shadow rounded-lg">
            <form action="/students" method="POST" class="p-4 grid grid-cols-2 gap-4">
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
                <div class="flex justify-end gap-4 col-span-2">
                <a href="/students" class="bg-gray-500 hover:bg-gray-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline w-[10%] flex items-center justify-center">
                    Kembali
                </a>
                <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline w-[10%] flex items-center justify-center ">
                    Tambah Siswa
                </button>
                </div>
            </form>
        </div>
    </main>

<?php require_once '../app/views/layouts/partials/footer.php'; ?>