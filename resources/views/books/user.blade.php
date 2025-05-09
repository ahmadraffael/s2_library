@extends('layouts.app')
@section('title', 'User - ')

@section('content')
    <div class="bg-white shadow-sm">
        <div class="flex items-center justify-between px-6 py-4">
            <button id="sidebar-toggle" class="md:hidden text-gray-600 focus:outline-none">
                <i class="fas fa-bars text-xl"></i>
            </button>
            <div class="flex-1 ml-4 md:ml-0">
                <h2 class="text-xl font-semibold text-gray-800">Pengguna</h2>
            </div>
            <div class="flex items-center">
                <div class="relative">
                    <input type="text" placeholder="Cari pengguna..." class="w-64 pl-10 pr-4 py-2 rounded-lg border border-gray-300 focus:outline-none focus:ring-2 focus:ring-emerald-500 focus:border-transparent">
                    <div class="absolute left-3 top-2.5 text-gray-400">
                        <i class="fas fa-search"></i>
                    </div>
                </div>
                <button id="click" class="ml-4 px-4 py-2 bg-emerald-600 text-white rounded-md hover:bg-emerald-700 flex items-center">
                    <i class="fas fa-user-plus mr-2"></i> Tambah Pengguna
                </button>
            </div>
        </div>
    </div>

    <!-- User Content -->
    <div class="p-6">
        <!-- Stats Cards -->
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-6">
            <div class="bg-white rounded-lg shadow p-5">
                <div class="flex items-center">
                    <div class="flex-shrink-0 bg-emerald-100 rounded-full p-3">
                        <i class="fas fa-users text-emerald-600 text-xl"></i>
                    </div>
                    <div class="ml-5">
                        <p class="text-gray-500 text-sm">Total Pengguna</p>
                        <h3 class="text-2xl font-bold text-gray-800">854</h3>
                    </div>
                </div>
            </div>
            <div class="bg-white rounded-lg shadow p-5">
                <div class="flex items-center">
                    <div class="flex-shrink-0 bg-blue-100 rounded-full p-3">
                        <i class="fas fa-user-check text-blue-600 text-xl"></i>
                    </div>
                    <div class="ml-5">
                        <p class="text-gray-500 text-sm">Pengguna Aktif</p>
                        <h3 class="text-2xl font-bold text-gray-800">742</h3>
                    </div>
                </div>
            </div>
            <div class="bg-white rounded-lg shadow p-5">
                <div class="flex items-center">
                    <div class="flex-shrink-0 bg-purple-100 rounded-full p-3">
                        <i class="fas fa-user-plus text-purple-600 text-xl"></i>
                    </div>
                    <div class="ml-5">
                        <p class="text-gray-500 text-sm">Pengguna Baru</p>
                        <h3 class="text-2xl font-bold text-gray-800">24</h3>
                        <p class="text-xs text-purple-600">Bulan ini</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- User Table -->
        <div class="bg-white rounded-lg shadow overflow-hidden">
            <div class="flex items-center justify-between px-6 py-4 border-b">
                <h3 class="text-lg font-semibold text-gray-800">Daftar Pengguna</h3>
                <div class="flex items-center">
                    <select class="mr-4 pl-3 pr-8 py-2 rounded-lg border border-gray-300 focus:outline-none focus:ring-2 focus:ring-emerald-500 focus:border-transparent">
                        <option value="all">Semua Pengguna</option>
                        <option value="active">Aktif</option>
                        <option value="inactive">Tidak Aktif</option>
                        <option value="new">Baru</option>
                    </select>
                    <button class="px-4 py-2 bg-gray-100 text-gray-700 rounded-md hover:bg-gray-200 flex items-center">
                        <i class="fas fa-filter mr-2"></i> Filter
                    </button>
                </div>
            </div>
            <div class="overflow-x-auto">
                <table class="min-w-full divide-y divide-gray-200">
                    <thead class="bg-gray-50">
                        <tr>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">ID</th>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Nama</th>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Email</th>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Tanggal Daftar</th>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Status</th>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Buku Dipinjam</th>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Action</th>
                        </tr>
                    </thead>
                    <tbody class="bg-white divide-y divide-gray-200">
                        <tr>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">USR001</td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <div class="flex items-center">
                                    <div class="flex-shrink-0 h-10 w-10">
                                        <img class="h-10 w-10 rounded-full" src="https://randomuser.me/api/portraits/women/12.jpg" alt="">
                                    </div>
                                    <div class="ml-4">
                                        <div class="text-sm font-medium text-gray-900">Sarah Johnson</div>
                                        <div class="text-sm text-gray-500">Mahasiswa</div>
                                    </div>
                                </div>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">sarah.johnson@example.com</td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">2023-01-15</td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">
                                    Aktif
                                </span>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">3</td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">
                                <div class="flex space-x-2">
                                    <button class="text-emerald-600 hover:text-emerald-900" title="Lihat Detail">
                                        <i class="fas fa-eye"></i>
                                    </button>
                                    <button class="text-blue-600 hover:text-blue-900" title="Edit">
                                        <i class="fas fa-edit"></i>
                                    </button>
                                    <button class="text-red-600 hover:text-red-900" title="Hapus">
                                        <i class="fas fa-trash"></i>
                                    </button>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">USR002</td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <div class="flex items-center">
                                    <div class="flex-shrink-0 h-10 w-10">
                                        <img class="h-10 w-10 rounded-full" src="https://randomuser.me/api/portraits/men/15.jpg" alt="">
                                    </div>
                                    <div class="ml-4">
                                        <div class="text-sm font-medium text-gray-900">Michael Brown</div>
                                        <div class="text-sm text-gray-500">Dosen</div>
                                    </div>
                                </div>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">michael.brown@example.com</td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">2022-11-20</td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">
                                    Aktif
                                </span>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">5</td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">
                                <div class="flex space-x-2">
                                    <button class="text-emerald-600 hover:text-emerald-900" title="Lihat Detail">
                                        <i class="fas fa-eye"></i>
                                    </button>
                                    <button class="text-blue-600 hover:text-blue-900" title="Edit">
                                        <i class="fas fa-edit"></i>
                                    </button>
                                    <button class="text-red-600 hover:text-red-900" title="Hapus">
                                        <i class="fas fa-trash"></i>
                                    </button>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">USR003</td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <div class="flex items-center">
                                    <div class="flex-shrink-0 h-10 w-10">
                                        <img class="h-10 w-10 rounded-full" src="https://randomuser.me/api/portraits/women/22.jpg" alt="">
                                    </div>
                                    <div class="ml-4">
                                        <div class="text-sm font-medium text-gray-900">Emily Davis</div>
                                        <div class="text-sm text-gray-500">Mahasiswa</div>
                                    </div>
                                </div>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">emily.davis@example.com</td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">2023-02-05</td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">
                                    Aktif
                                </span>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">2</td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">
                                <div class="flex space-x-2">
                                    <button class="text-emerald-600 hover:text-emerald-900" title="Lihat Detail">
                                        <i class="fas fa-eye"></i>
                                    </button>
                                    <button class="text-blue-600 hover:text-blue-900" title="Edit">
                                        <i class="fas fa-edit"></i>
                                    </button>
                                    <button class="text-red-600 hover:text-red-900" title="Hapus">
                                        <i class="fas fa-trash"></i>
                                    </button>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">USR004</td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <div class="flex items-center">
                                    <div class="flex-shrink-0 h-10 w-10">
                                        <img class="h-10 w-10 rounded-full" src="https://randomuser.me/api/portraits/men/32.jpg" alt="">
                                    </div>
                                    <div class="ml-4">
                                        <div class="text-sm font-medium text-gray-900">David Wilson</div>
                                        <div class="text-sm text-gray-500">Staff</div>
                                    </div>
                                </div>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">david.wilson@example.com</td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">2022-09-18</td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-yellow-100 text-yellow-800">
                                    Tidak Aktif
                                </span>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">0</td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">
                                <div class="flex space-x-2">
                                    <button class="text-emerald-600 hover:text-emerald-900" title="Lihat Detail">
                                        <i class="fas fa-eye"></i>
                                    </button>
                                    <button class="text-blue-600 hover:text-blue-900" title="Edit">
                                        <i class="fas fa-edit"></i>
                                    </button>
                                    <button class="text-red-600 hover:text-red-900" title="Hapus">
                                        <i class="fas fa-trash"></i>
                                    </button>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">USR005</td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <div class="flex items-center">
                                    <div class="flex-shrink-0 h-10 w-10">
                                        <img class="h-10 w-10 rounded-full" src="https://randomuser.me/api/portraits/women/45.jpg" alt="">
                                    </div>
                                    <div class="ml-4">
                                        <div class="text-sm font-medium text-gray-900">Olivia Martinez</div>
                                        <div class="text-sm text-gray-500">Mahasiswa</div>
                                    </div>
                                </div>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">olivia.martinez@example.com</td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">2023-04-30</td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-blue-100 text-blue-800">
                                    Baru
                                </span>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">1</td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">
                                <div class="flex space-x-2">
                                    <button class="text-emerald-600 hover:text-emerald-900" title="Lihat Detail">
                                        <i class="fas fa-eye"></i>
                                    </button>
                                    <button class="text-blue-600 hover:text-blue-900" title="Edit">
                                        <i class="fas fa-edit"></i>
                                    </button>
                                    <button class="text-red-600 hover:text-red-900" title="Hapus">
                                        <i class="fas fa-trash"></i>
                                    </button>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="px-6 py-4 border-t">
                <div class="flex items-center justify-between">
                    <div class="text-sm text-gray-500">
                        Menampilkan 1 - 5 dari 854 pengguna
                    </div>
                    <div class="flex space-x-2">
                        <button class="px-3 py-1 rounded border border-gray-300 text-gray-600 hover:bg-gray-50 disabled:opacity-50" disabled>
                            <i class="fas fa-chevron-left"></i>
                        </button>
                        <button class="px-3 py-1 rounded bg-emerald-600 text-white">1</button>
                        <button class="px-3 py-1 rounded border border-gray-300 text-gray-600 hover:bg-gray-50">2</button>
                        <button class="px-3 py-1 rounded border border-gray-300 text-gray-600 hover:bg-gray-50">3</button>
                        <button class="px-3 py-1 rounded border border-gray-300 text-gray-600 hover:bg-gray-50">
                            <i class="fas fa-chevron-right"></i>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal Tambah Pengguna Sederhana -->
    <div id="tambah-pengguna-modal" class="fixed inset-0 z-50 overflow-y-auto hidden" aria-labelledby="modal-title" role="dialog" aria-modal="true">
        <div class="flex items-end justify-center min-h-screen pt-4 px-4 pb-20 text-center sm:block sm:p-0">
            <!-- Background overlay -->
            <div class="fixed inset-0 bg-gray-500 bg-opacity-75 transition-opacity" aria-hidden="true"></div>

            <!-- Modal panel -->
            <div class="inline-block align-bottom bg-white rounded-lg text-left overflow-hidden shadow-xl transform transition-all sm:my-8 sm:align-middle sm:max-w-lg sm:w-full">
                <div class="bg-white px-4 pt-5 pb-4 sm:p-6 sm:pb-4">
                    <div class="sm:flex sm:items-start">
                        <div class="mx-auto flex-shrink-0 flex items-center justify-center h-12 w-12 rounded-full bg-emerald-100 sm:mx-0 sm:h-10 sm:w-10">
                            <i class="fas fa-user-plus text-emerald-600"></i>
                        </div>
                        <div class="mt-3 text-center sm:mt-0 sm:ml-4 sm:text-left w-full">
                            <h3 class="text-lg leading-6 font-medium text-gray-900" id="modal-title">
                                Tambah Pengguna Baru
                            </h3>
                            <div class="mt-4">
                                <form action="{{ route('register') }}" method="POST" class="space-y-4 py-4">
                                    @csrf
                                
                                    <!-- Nama -->
                                    <div>
                                        <label for="name" class="block text-sm font-medium text-gray-700">Username</label>
                                        <input type="text" name="name" id="name" class="pl-2 py-1 mt-1 block w-full shadow-sm sm:text-sm border border-gray-300 rounded-md focus:ring-2 focus:ring-emerald-500" required>
                                    </div>
                                
                                    <!-- Email -->
                                    <div>
                                        <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
                                        <input type="email" name="email" id="email" class="pl-2 py-1 mt-1 block w-full shadow-sm sm:text-sm border border-gray-300 rounded-md focus:ring-2 focus:ring-emerald-500" required>
                                    </div>
                                
                                    <!-- Password -->
                                    <div>
                                        <label for="password" class="block text-sm font-medium text-gray-700">Password</label>
                                        <input type="password" name="password" id="password" class="pl-2 py-1 mt-1 block w-full shadow-sm sm:text-sm border border-gray-300 rounded-md focus:ring-2 focus:ring-emerald-500" required>
                                    </div>
                                
                                    <!-- Role -->
                                    <div>
                                        <label for="role" class="block text-sm font-medium text-gray-700">Role</label>
                                        <select name="role" id="role" class="pl-2 py-1 mt-1 block w-full shadow-sm sm:text-sm border border-gray-300 rounded-md focus:ring-2 focus:ring-emerald-500" required>
                                            <option value="">-- Pilih Role --</option>
                                            <option value="admin">Admin</option>
                                            <option value="user">User</option>
                                        </select>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="bg-gray-50 px-4 py-3 sm:px-6 sm:flex sm:flex-row-reverse">
                    <button type="button" id="submit-pengguna" class="w-full inline-flex justify-center rounded-md border border-transparent shadow-sm px-4 py-2 bg-emerald-600 text-base font-medium text-white hover:bg-emerald-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-emerald-500 sm:ml-3 sm:w-auto sm:text-sm">
                        Simpan
                    </button>
                    <button type="button" id="close-modal" class="mt-3 w-full inline-flex justify-center rounded-md border border-gray-300 shadow-sm px-4 py-2 bg-white text-base font-medium text-gray-700 hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-emerald-500 sm:mt-0 sm:ml-3 sm:w-auto sm:text-sm">
                        Batal
                    </button>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('scripts')
<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Elemen-elemen modal
        const modal = document.getElementById('tambah-pengguna-modal');
        const openModalBtn = document.querySelector('button.bg-emerald-600'); // Tombol "Tambah Pengguna" di navbar
        const closeModalBtn = document.getElementById('close-modal');
        const submitBtn = document.getElementById('submit-pengguna'); // Tombol submit
        const form = document.querySelector('form');
        const togglePasswordBtn = document.getElementById('toggle-password'); // Jika ada elemen untuk toggle password
        const passwordInput = document.getElementById('password'); // Input password

        // Buka modal
        openModalBtn.addEventListener('click', function() {
            modal.classList.remove('hidden');
            document.body.classList.add('overflow-hidden'); // Mencegah scroll pada body
        });

        // Tutup modal
        closeModalBtn.addEventListener('click', function() {
            modal.classList.add('hidden');
            document.body.classList.remove('overflow-hidden');
            form.reset();
        });

        // Tutup modal jika klik di luar modal
        modal.addEventListener('click', function(e) {
            if (e.target === modal) {
                modal.classList.add('hidden');
                document.body.classList.remove('overflow-hidden');
                form.reset();
            }
        });

        // Submit form dan tutup modal
        submitBtn.addEventListener('click', function() {
            form.submit(); // Kirimkan form
            modal.classList.add('hidden'); // Sembunyikan modal
            document.body.classList.remove('overflow-hidden'); // Izinkan scroll pada body
        });

        // Toggle password visibility
        if (togglePasswordBtn) {
            togglePasswordBtn.addEventListener('click', function() {
                const icon = this.querySelector('i');
                
                if (passwordInput.type === 'password') {
                    passwordInput.type = 'text';
                    icon.classList.remove('fa-eye');
                    icon.classList.add('fa-eye-slash');
                } else {
                    passwordInput.type = 'password';
                    icon.classList.remove('fa-eye-slash');
                    icon.classList.add('fa-eye');
                }
            });
        }
    });
</script>


    <script>
        // Script untuk menangani modal tambah akun
        document.addEventListener('DOMContentLoaded', function() {
            // Elemen-elemen modal
            const modal = document.getElementById('tambah-akun-modal');
            const openModalBtn = document.querySelector('button.bg-emerald-600'); // Tombol "Tambah Pengguna" di navbar
            const closeModalBtn = document.getElementById('close-modal');
            const submitBtn = document.getElementById('submit-akun');
            const generatePasswordBtn = document.getElementById('generate-password');
            const passwordInput = document.getElementById('password');
            const profilePictureInput = document.getElementById('profile-picture');
            const previewImage = document.getElementById('preview-image');
            const defaultIcon = document.getElementById('default-icon');

            // Buka modal
            openModalBtn.addEventListener('click', function() {
                modal.classList.remove('hidden');
                document.body.classList.add('overflow-hidden'); // Mencegah scroll pada body
            });

            // Tutup modal
            closeModalBtn.addEventListener('click', function() {
                modal.classList.add('hidden');
                document.body.classList.remove('overflow-hidden');
                document.getElementById('tambah-akun-form').reset();
                previewImage.classList.add('hidden');
                defaultIcon.classList.remove('hidden');
            });

            // Tutup modal jika klik di luar modal
            modal.addEventListener('click', function(e) {
                if (e.target === modal) {
                    modal.classList.add('hidden');
                    document.body.classList.remove('overflow-hidden');
                    document.getElementById('tambah-akun-form').reset();
                    previewImage.classList.add('hidden');
                    defaultIcon.classList.remove('hidden');
                }
            });

            // Generate password acak
            generatePasswordBtn.addEventListener('click', function() {
                const chars = 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789!@#$%^&*';
                let password = '';
                for (let i = 0; i < 10; i++) {
                    password += chars.charAt(Math.floor(Math.random() * chars.length));
                }
                passwordInput.value = password;
            });

            // Preview gambar profil
            profilePictureInput.addEventListener('change', function(e) {
                if (e.target.files && e.target.files[0]) {
                    const reader = new FileReader();
                    
                    reader.onload = function(e) {
                        previewImage.src = e.target.result;
                        previewImage.classList.remove('hidden');
                        defaultIcon.classList.add('hidden');
                    }
                    
                    reader.readAsDataURL(e.target.files[0]);
                }
            });

            // Submit form
            submitBtn.addEventListener('click', function() {
                // Validasi form
                const form = document.getElementById('tambah-akun-form');
                if (form.checkValidity()) {
                    // Di sini Anda bisa menambahkan kode untuk mengirim data ke server
                    // Untuk demo, kita hanya akan menampilkan pesan sukses
                    alert('Akun berhasil ditambahkan!');
                    modal.classList.add('hidden');
                    document.body.classList.remove('overflow-hidden');
                    form.reset();
                    previewImage.classList.add('hidden');
                    defaultIcon.classList.remove('hidden');
                } else {
                    form.reportValidity();
                }
            });
        });
    </script>
@endpush