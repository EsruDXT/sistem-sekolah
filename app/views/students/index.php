    <?php require_once '../app/views/layouts/partials/header.php'; ?>
    <main class="bg-gray-100 grow py-6">
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
                        <?php foreach ($data['students'] as $index => $student) : ?>
                                                        <tr>
                                <td class="py-2 px-4 text-left"><?= $index + 1 ?></td>
                                <td class="py-2 px-4 text-left"><?= $student['name'] ?></td>
                                <td class="py-2 px-4 text-left"><?= $student['nis'] ?></td>
                                <td class="py-2 px-4 text-left"><?= $student['class'] ?></td>
                                <td class="py-2 px-4 text-left"><?= $student['phone_number'] ?></td>
                                <td class="py-2 px-4 text-center">
                                    <div class="flex items-center justify-center gap-4">
                                        <a href="/students/<?= $student['id'] ?>" class="text-green-500 hover:underline">Detail</a>
                                        <a href="/students/<?= $student['id'] ?>/edit" class="text-yellow-500 hover:underline">Edit</a>
                                        <a href="" class="text-red-500 hover:underline">Hapus</a>
                    
                    <!-- Contoh data siswa -->
                            </div>
                        </td>
                    </tr>
                        <?php endforeach; ?>

                </tbody>
            </table>
        </div>
    </main>
<?php require_once '../app/views/layouts/partials/footer.php'; ?>