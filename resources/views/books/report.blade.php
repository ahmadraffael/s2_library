@extends('layouts.app')
@section('title', 'Report - ')

@section('content')
    <div class="bg-white shadow-sm">
        <div class="flex items-center justify-between px-6 py-4">
            <button id="sidebar-toggle" class="md:hidden text-gray-600 focus:outline-none">
                <i class="fas fa-bars text-xl"></i>
            </button>
            <div class="flex-1 ml-4 md:ml-0">
                <h2 class="text-xl font-semibold text-gray-800">Laporan</h2>
            </div>
            <div class="flex items-center">
                <div class="relative">
                    <select class="w-48 pl-4 pr-8 py-2 rounded-lg border border-gray-300 focus:outline-none focus:ring-2 focus:ring-emerald-500 focus:border-transparent">
                        <option value="this-month">Bulan Ini</option>
                        <option value="last-month">Bulan Lalu</option>
                        <option value="last-3-months">3 Bulan Terakhir</option>
                        <option value="this-year">Tahun Ini</option>
                        <option value="custom">Kustom</option>
                    </select>
                    <div class="absolute right-3 top-2.5 text-gray-400 pointer-events-none">
                        <i class="fas fa-chevron-down"></i>
                    </div>
                </div>
                <button class="ml-4 px-4 py-2 bg-emerald-600 text-white rounded-md hover:bg-emerald-700 flex items-center">
                    <i class="fas fa-download mr-2"></i> Export
                </button>
            </div>
        </div>
    </div>

    <div class="p-6">
        <!-- Stats Cards -->
        <div class="grid grid-cols-1 md:grid-cols-4 gap-6 mb-6">
            <div class="bg-white rounded-lg shadow p-5">
                <div class="flex items-center">
                    <div class="flex-shrink-0 bg-emerald-100 rounded-full h-12 w-12 flex items-center justify-center">
                        <i class="fas fa-book text-emerald-600 text-xl"></i>
                    </div>
                    <div class="ml-5">
                        <p class="text-gray-500 text-sm">Buku Dipinjam</p>
                        <h3 class="text-2xl font-bold text-gray-800">432</h3>
                        <p class="text-xs text-emerald-600"><i class="fas fa-arrow-up"></i> 12% dari bulan lalu</p>
                    </div>
                </div>
            </div>
            <div class="bg-white rounded-lg shadow p-5">
                <div class="flex items-center">
                    <div class="flex-shrink-0 bg-blue-100 rounded-full h-12 w-12 flex items-center justify-center">
                        <i class="fas fa-user-check text-blue-600 text-xl"></i>
                    </div>
                    <div class="ml-5">
                        <p class="text-gray-500 text-sm">Pengguna Aktif</p>
                        <h3 class="text-2xl font-bold text-gray-800">254</h3>
                        <p class="text-xs text-blue-600"><i class="fas fa-arrow-up"></i> 8% dari bulan lalu</p>
                    </div>
                </div>
            </div>
            <div class="bg-white rounded-lg shadow p-5">
                <div class="flex items-center">
                    <div class="flex-shrink-0 bg-purple-100 rounded-full h-12 w-12 flex items-center justify-center">
                        <i class="fas fa-book-reader text-purple-600 text-xl"></i>
                    </div>
                    <div class="ml-5">
                        <p class="text-gray-500 text-sm">Buku Dikembalikan</p>
                        <h3 class="text-2xl font-bold text-gray-800">387</h3>
                        <p class="text-xs text-purple-600"><i class="fas fa-arrow-up"></i> 5% dari bulan lalu</p>
                    </div>
                </div>
            </div>
            <div class="bg-white rounded-lg shadow p-5">
                <div class="flex items-center">
                    <div class="flex-shrink-0 bg-amber-100 rounded-full h-12 w-12 flex items-center justify-center">
                        <i class="fas fa-clock text-amber-600 text-xl"></i>
                    </div>
                    <div class="ml-5">
                        <p class="text-gray-500 text-sm">Keterlambatan</p>
                        <h3 class="text-2xl font-bold text-gray-800">24</h3>
                        <p class="text-xs text-red-600"><i class="fas fa-arrow-up"></i> 3% dari bulan lalu</p>
                    </div>
                </div>
            </div>
        </div>
        

        <!-- Charts -->
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-6">
            <div class="bg-white rounded-lg shadow p-5">
                <h3 class="text-lg font-semibold text-gray-800 mb-4">Aktivitas Peminjaman</h3>
                <div class="h-80">
                    <canvas id="borrowingChart"></canvas>
                </div>
            </div>
            <div class="bg-white rounded-lg shadow p-5">
                <h3 class="text-lg font-semibold text-gray-800 mb-4">Kategori Buku Populer</h3>
                <div class="h-80">
                    <canvas id="categoryChart"></canvas>
                </div>
            </div>
        </div>

        <!-- Recent Activities -->
        <div class="bg-white rounded-lg shadow overflow-hidden mb-6">
            <div class="flex items-center justify-between px-6 py-4 border-b">
                <h3 class="text-lg font-semibold text-gray-800">Aktivitas Terbaru</h3>
                <a href="#" class="text-emerald-600 hover:text-emerald-800">Lihat Semua</a>
            </div>
            <div class="overflow-x-auto">
                <table class="min-w-full divide-y divide-gray-200">
                    <thead class="bg-gray-50">
                        <tr>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Tanggal</th>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Pengguna</th>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Buku</th>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Aktivitas</th>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Status</th>
                        </tr>
                    </thead>
                    <tbody class="bg-white divide-y divide-gray-200">
                        <tr>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">2023-05-15</td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <div class="flex items-center">
                                    <div class="flex-shrink-0 h-8 w-8">
                                        <img class="h-8 w-8 rounded-full" src="https://randomuser.me/api/portraits/women/12.jpg" alt="">
                                    </div>
                                    <div class="ml-4">
                                        <div class="text-sm font-medium text-gray-900">Sarah Johnson</div>
                                    </div>
                                </div>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">Harry Potter and the Philosopher's Stone</td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">Peminjaman</td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">
                                    Selesai
                                </span>
                            </td>
                        </tr>
                        <tr>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">2023-05-14</td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <div class="flex items-center">
                                    <div class="flex-shrink-0 h-8 w-8">
                                        <img class="h-8 w-8 rounded-full" src="https://randomuser.me/api/portraits/men/15.jpg" alt="">
                                    </div>
                                    <div class="ml-4">
                                        <div class="text-sm font-medium text-gray-900">Michael Brown</div>
                                    </div>
                                </div>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">To Kill a Mockingbird</td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">Pengembalian</td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-yellow-100 text-yellow-800">
                                    Terlambat
                                </span>
                            </td>
                        </tr>
                        <tr>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">2023-05-14</td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <div class="flex items-center">
                                    <div class="flex-shrink-0 h-8 w-8">
                                        <img class="h-8 w-8 rounded-full" src="https://randomuser.me/api/portraits/women/22.jpg" alt="">
                                    </div>
                                    <div class="ml-4">
                                        <div class="text-sm font-medium text-gray-900">Emily Davis</div>
                                    </div>
                                </div>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">Pride and Prejudice</td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">Peminjaman</td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">
                                    Selesai
                                </span>
                            </td>
                        </tr>
                        <tr>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">2023-05-13</td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <div class="flex items-center">
                                    <div class="flex-shrink-0 h-8 w-8">
                                        <img class="h-8 w-8 rounded-full" src="https://randomuser.me/api/portraits/men/32.jpg" alt="">
                                    </div>
                                    <div class="ml-4">
                                        <div class="text-sm font-medium text-gray-900">David Wilson</div>
                                    </div>
                                </div>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">1984</td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">Pengembalian</td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">
                                    Selesai
                                </span>
                            </td>
                        </tr>
                        <tr>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">2023-05-12</td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <div class="flex items-center">
                                    <div class="flex-shrink-0 h-8 w-8">
                                        <img class="h-8 w-8 rounded-full" src="https://randomuser.me/api/portraits/women/45.jpg" alt="">
                                    </div>
                                    <div class="ml-4">
                                        <div class="text-sm font-medium text-gray-900">Olivia Martinez</div>
                                    </div>
                                </div>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">The Great Gatsby</td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">Peminjaman</td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-red-100 text-red-800">
                                    Dibatalkan
                                </span>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="px-6 py-4 border-t">
                <div class="flex items-center justify-between">
                    <div class="text-sm text-gray-500">
                        Menampilkan 1 - 5 dari 100 aktivitas
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

        <!-- Top Books -->
        <div class="bg-white rounded-lg shadow overflow-hidden">
            <div class="flex items-center justify-between px-6 py-4 border-b">
                <h3 class="text-lg font-semibold text-gray-800">Buku Terpopuler</h3>
                <a href="#" class="text-emerald-600 hover:text-emerald-800">Lihat Semua</a>
            </div>
            <div class="p-6">
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
                    <div class="bg-gray-50 rounded-lg p-4">
                        <div class="flex items-center mb-4">
                            <div class="flex-shrink-0 h-12 w-10 bg-gray-200 rounded-md flex items-center justify-center">
                                <i class="fas fa-book text-gray-500"></i>
                            </div>
                            <div class="ml-4">
                                <h4 class="text-sm font-medium text-gray-900">Harry Potter and the Philosopher's Stone</h4>
                                <p class="text-xs text-gray-500">J.K. Rowling</p>
                            </div>
                        </div>
                        <div class="flex items-center justify-between">
                            <div class="text-sm text-gray-500">Dipinjam</div>
                            <div class="text-sm font-medium text-gray-900">87 kali</div>
                        </div>
                        <div class="mt-2 w-full bg-gray-200 rounded-full h-2">
                            <div class="bg-emerald-600 h-2 rounded-full" style="width: 87%;"></div>
                        </div>
                    </div>
                    <div class="bg-gray-50 rounded-lg p-4">
                        <div class="flex items-center mb-4">
                            <div class="flex-shrink-0 h-12 w-10 bg-gray-200 rounded-md flex items-center justify-center">
                                <i class="fas fa-book text-gray-500"></i>
                            </div>
                            <div class="ml-4">
                                <h4 class="text-sm font-medium text-gray-900">To Kill a Mockingbird</h4>
                                <p class="text-xs text-gray-500">Harper Lee</p>
                            </div>
                        </div>
                        <div class="flex items-center justify-between">
                            <div class="text-sm text-gray-500">Dipinjam</div>
                            <div class="text-sm font-medium text-gray-900">72 kali</div>
                        </div>
                        <div class="mt-2 w-full bg-gray-200 rounded-full h-2">
                            <div class="bg-emerald-600 h-2 rounded-full" style="width: 72%;"></div>
                        </div>
                    </div>
                    <div class="bg-gray-50 rounded-lg p-4">
                        <div class="flex items-center mb-4">
                            <div class="flex-shrink-0 h-12 w-10 bg-gray-200 rounded-md flex items-center justify-center">
                                <i class="fas fa-book text-gray-500"></i>
                            </div>
                            <div class="ml-4">
                                <h4 class="text-sm font-medium text-gray-900">1984</h4>
                                <p class="text-xs text-gray-500">George Orwell</p>
                            </div>
                        </div>
                        <div class="flex items-center justify-between">
                            <div class="text-sm text-gray-500">Dipinjam</div>
                            <div class="text-sm font-medium text-gray-900">65 kali</div>
                        </div>
                        <div class="mt-2 w-full bg-gray-200 rounded-full h-2">
                            <div class="bg-emerald-600 h-2 rounded-full" style="width: 65%;"></div>
                        </div>
                    </div>
                    <div class="bg-gray-50 rounded-lg p-4">
                        <div class="flex items-center mb-4">
                            <div class="flex-shrink-0 h-12 w-10 bg-gray-200 rounded-md flex items-center justify-center">
                                <i class="fas fa-book text-gray-500"></i>
                            </div>
                            <div class="ml-4">
                                <h4 class="text-sm font-medium text-gray-900">Pride and Prejudice</h4>
                                <p class="text-xs text-gray-500">Jane Austen</p>
                            </div>
                        </div>
                        <div class="flex items-center justify-between">
                            <div class="text-sm text-gray-500">Dipinjam</div>
                            <div class="text-sm font-medium text-gray-900">58 kali</div>
                        </div>
                        <div class="mt-2 w-full bg-gray-200 rounded-full h-2">
                            <div class="bg-emerald-600 h-2 rounded-full" style="width: 58%;"></div>
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

        // Borrowing Chart
        const borrowingCtx = document.getElementById('borrowingChart').getContext('2d');
        const borrowingChart = new Chart(borrowingCtx, {
            type: 'line',
            data: {
                labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'],
                datasets: [{
                    label: 'Peminjaman',
                    data: [65, 59, 80, 81, 56, 55, 40, 45, 60, 70, 85, 90],
                    fill: false,
                    borderColor: '#10b981',
                    tension: 0.1
                }, {
                    label: 'Pengembalian',
                    data: [45, 50, 75, 78, 52, 50, 35, 40, 55, 65, 80, 85],
                    fill: false,
                    borderColor: '#8b5cf6',
                    tension: 0.1
                }]
            },
            options: {
                responsive: true,
                maintainAspectRatio: false,
                scales: {
                    y: {
                        beginAtZero: true
                    }
                }
            }
        });

        // Category Chart
        const categoryCtx = document.getElementById('categoryChart').getContext('2d');
        const categoryChart = new Chart(categoryCtx, {
            type: 'doughnut',
            data: {
                labels: ['Fiksi', 'Non-Fiksi', 'Pendidikan', 'Sejarah', 'Sains', 'Lainnya'],
                datasets: [{
                    label: 'Kategori Buku',
                    data: [35, 25, 15, 10, 10, 5],
                    backgroundColor: [
                        '#10b981',
                        '#3b82f6',
                        '#8b5cf6',
                        '#f59e0b',
                        '#ef4444',
                        '#6b7280'
                    ],
                    hoverOffset: 4
                }]
            },
            options: {
                responsive: true,
                maintainAspectRatio: false,
                plugins: {
                    legend: {
                        position: 'right',
                    }
                }
            }
        });
    </script>
@endpush