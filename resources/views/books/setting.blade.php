@extends('layouts.app')
@section('title', 'Setting - ')

@section('content')
    <div class="bg-white shadow-sm">
        <div class="flex items-center justify-between px-6 py-4">
            <button id="sidebar-toggle" class="md:hidden text-gray-600 focus:outline-none">
                <i class="fas fa-bars text-xl"></i>
            </button>
            <div class="flex-1 ml-4 md:ml-0">
                <h2 class="text-xl font-semibold text-gray-800">Pengaturan</h2>
            </div>
            <div class="flex items-center">
                <button class="ml-4 px-4 py-2 bg-emerald-600 text-white rounded-md hover:bg-emerald-700 flex items-center">
                    <i class="fas fa-save mr-2"></i> Simpan Perubahan
                </button>
            </div>
        </div>
    </div>

    <div class="p-6">
        <!-- Settings Tabs -->
        <div class="bg-white rounded-lg shadow overflow-hidden">
            <div class="border-b">
                <nav class="flex -mb-px">
                    <a href="#" class="border-b-2 border-emerald-500 text-emerald-600 py-4 px-6 font-medium text-sm" aria-current="page">
                        <i class="fas fa-sliders-h mr-2"></i> Umum
                    </a>
                    <a href="#" class="border-b-2 border-transparent hover:border-gray-300 text-gray-500 hover:text-gray-700 py-4 px-6 font-medium text-sm">
                        <i class="fas fa-user-circle mr-2"></i> Profil
                    </a>
                    <a href="#" class="border-b-2 border-transparent hover:border-gray-300 text-gray-500 hover:text-gray-700 py-4 px-6 font-medium text-sm">
                        <i class="fas fa-bell mr-2"></i> Notifikasi
                    </a>
                    <a href="#" class="border-b-2 border-transparent hover:border-gray-300 text-gray-500 hover:text-gray-700 py-4 px-6 font-medium text-sm">
                        <i class="fas fa-shield-alt mr-2"></i> Keamanan
                    </a>
                    <a href="#" class="border-b-2 border-transparent hover:border-gray-300 text-gray-500 hover:text-gray-700 py-4 px-6 font-medium text-sm">
                        <i class="fas fa-database mr-2"></i> Backup
                    </a>
                </nav>
            </div>

            <!-- General Settings -->
            <div class="p-6">
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <!-- Library Settings -->
                    <div>
                        <h3 class="text-lg font-medium text-gray-900 mb-4">Pengaturan Perpustakaan</h3>
                        
                        <div class="space-y-4">
                            <div>
                                <label for="library-name" class="block text-sm font-medium text-gray-700 mb-1">Nama Perpustakaan</label>
                                <input type="text" id="library-name" name="library-name" value="E-Library" class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-emerald-500 focus:border-transparent">
                            </div>
                            
                            <div>
                                <label for="library-address" class="block text-sm font-medium text-gray-700 mb-1">Alamat</label>
                                <textarea id="library-address" name="library-address" rows="3" class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-emerald-500 focus:border-transparent">Jl. Perpustakaan No. 123, Jakarta Pusat</textarea>
                            </div>
                            
                            <div>
                                <label for="library-email" class="block text-sm font-medium text-gray-700 mb-1">Email Kontak</label>
                                <input type="email" id="library-email" name="library-email" value="contact@elibrary.com" class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-emerald-500 focus:border-transparent">
                            </div>
                            
                            <div>
                                <label for="library-phone" class="block text-sm font-medium text-gray-700 mb-1">Nomor Telepon</label>
                                <input type="text" id="library-phone" name="library-phone" value="021-1234567" class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-emerald-500 focus:border-transparent">
                            </div>
                        </div>
                    </div>
                    
                    <!-- System Settings -->
                    <div>
                        <h3 class="text-lg font-medium text-gray-900 mb-4">Pengaturan Sistem</h3>
                        
                        <div class="space-y-4">
                            <div>
                                <label for="max-borrow-days" class="block text-sm font-medium text-gray-700 mb-1">Maksimal Hari Peminjaman</label>
                                <input type="number" id="max-borrow-days" name="max-borrow-days" value="14" class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-emerald-500 focus:border-transparent">
                            </div>
                            
                            <div>
                                <label for="max-books" class="block text-sm font-medium text-gray-700 mb-1">Maksimal Buku per Peminjaman</label>
                                <input type="number" id="max-books" name="max-books" value="3" class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-emerald-500 focus:border-transparent">
                            </div>
                            
                            <div>
                                <label for="late-fee" class="block text-sm font-medium text-gray-700 mb-1">Denda Keterlambatan per Hari (Rp)</label>
                                <input type="number" id="late-fee" name="late-fee" value="5000" class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-emerald-500 focus:border-transparent">
                            </div>
                            
                            <div class="flex items-center">
                                <input type="checkbox" id="enable-email" name="enable-email" class="h-4 w-4 text-emerald-600 focus:ring-emerald-500 border-gray-300 rounded" checked>
                                <label for="enable-email" class="ml-2 block text-sm text-gray-700">Aktifkan notifikasi email</label>
                            </div>
                            
                            <div class="flex items-center">
                                <input type="checkbox" id="enable-sms" name="enable-sms" class="h-4 w-4 text-emerald-600 focus:ring-emerald-500 border-gray-300 rounded">
                                <label for="enable-sms" class="ml-2 block text-sm text-gray-700">Aktifkan notifikasi SMS</label>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Appearance Settings -->
                <div class="mt-8">
                    <h3 class="text-lg font-medium text-gray-900 mb-4">Tampilan</h3>
                    
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div>
                            <label for="theme" class="block text-sm font-medium text-gray-700 mb-1">Tema</label>
                            <select id="theme" name="theme" class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-emerald-500 focus:border-transparent">
                                <option value="light">Light</option>
                                <option value="dark">Dark</option>
                                <option value="system">Ikuti Sistem</option>
                            </select>
                        </div>
                        
                        <div>
                            <label for="primary-color" class="block text-sm font-medium text-gray-700 mb-1">Warna Utama</label>
                            <select id="primary-color" name="primary-color" class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-emerald-500 focus:border-transparent">
                                <option value="emerald">Emerald</option>
                                <option value="blue">Blue</option>
                                <option value="purple">Purple</option>
                                <option value="amber">Amber</option>
                                <option value="red">Red</option>
                            </select>
                        </div>
                        
                        <div>
                            <label for="language" class="block text-sm font-medium text-gray-700 mb-1">Bahasa</label>
                            <select id="language" name="language" class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-emerald-500 focus:border-transparent">
                                <option value="id">Bahasa Indonesia</option>
                                <option value="en">English</option>
                            </select>
                        </div>
                        
                        <div>
                            <label for="items-per-page" class="block text-sm font-medium text-gray-700 mb-1">Item per Halaman</label>
                            <select id="items-per-page" name="items-per-page" class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-emerald-500 focus:border-transparent">
                                <option value="10">10</option>
                                <option value="25">25</option>
                                <option value="50">50</option>
                                <option value="100">100</option>
                            </select>
                        </div>
                    </div>
                </div>
                
                <!-- Backup & Restore -->
                <div class="mt-8">
                    <h3 class="text-lg font-medium text-gray-900 mb-4">Backup & Restore</h3>
                    
                    <div class="space-y-4">
                        <div class="flex items-center justify-between p-4 bg-gray-50 rounded-lg">
                            <div>
                                <h4 class="text-sm font-medium text-gray-900">Backup Database</h4>
                                <p class="text-xs text-gray-500 mt-1">Backup terakhir: 15 Mei 2023, 08:30</p>
                            </div>
                            <button class="px-4 py-2 bg-emerald-600 text-white rounded-md hover:bg-emerald-700 flex items-center">
                                <i class="fas fa-download mr-2"></i> Backup Sekarang
                            </button>
                        </div>
                        
                        <div class="flex items-center justify-between p-4 bg-gray-50 rounded-lg">
                            <div>
                                <h4 class="text-sm font-medium text-gray-900">Restore Database</h4>
                                <p class="text-xs text-gray-500 mt-1">Kembalikan database dari file backup</p>
                            </div>
                            <button class="px-4 py-2 bg-gray-600 text-white rounded-md hover:bg-gray-700 flex items-center">
                                <i class="fas fa-upload mr-2"></i> Upload Backup
                            </button>
                        </div>
                        
                        <div class="flex items-center justify-between p-4 bg-gray-50 rounded-lg">
                            <div>
                                <h4 class="text-sm font-medium text-gray-900">Backup Otomatis</h4>
                                <p class="text-xs text-gray-500 mt-1">Jadwalkan backup otomatis</p>
                            </div>
                            <div class="flex items-center">
                                <select class="mr-2 px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-emerald-500 focus:border-transparent">
                                    <option value="daily">Harian</option>
                                    <option value="weekly">Mingguan</option>
                                    <option value="monthly">Bulanan</option>
                                </select>
                                <div class="relative inline-block w-12 mr-2 align-middle select-none">
                                    <input type="checkbox" id="auto-backup" name="auto-backup" class="toggle-checkbox absolute block w-6 h-6 rounded-full bg-white border-4 appearance-none cursor-pointer" checked/>
                                    <label for="auto-backup" class="toggle-label block overflow-hidden h-6 rounded-full bg-gray-300 cursor-pointer"></label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('scripts')
    <script>
        // Toggle sidebar on mobile
        document.getElementById('sidebar-toggle').addEventListener('click', function() {
                document.querySelector('.sidebar').classList.toggle('active');
            });

            // Close sidebar when clicking outside on mobile
            document.addEventListener('click', function(event) {
                const sidebar = document.querySelector('.sidebar');
                const sidebarToggle = document.getElementById('sidebar-toggle');
                
                if (window.innerWidth < 768 && 
                    !sidebar.contains(event.target) && 
                    !sidebarToggle.contains(event.target) && 
                    sidebar.classList.contains('active')) {
                    sidebar.classList.remove('active');
                }
            });

            // Toggle checkbox styling
            document.head.insertAdjacentHTML('beforeend', `
                <style>
                    .toggle-checkbox:checked {
                        right: 0;
                        border-color: #10b981;
                    }
                    .toggle-checkbox:checked + .toggle-label {
                        background-color: #10b981;
                    }
                </style>
            `);        
    </script>  
@endpush