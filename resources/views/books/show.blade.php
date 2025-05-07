@extends('layouts.app')
@section('title', 'Detail - ')

@section('content')
    <div class="bg-white shadow-sm">
        <div class="flex items-center justify-between px-6 py-4">
            <button id="sidebar-toggle" class="md:hidden text-gray-600 focus:outline-none">
                <i class="fas fa-bars text-xl"></i>
            </button>
            <div class="flex-1 ml-4 md:ml-0">
                <h2 class="text-xl font-semibold text-gray-800">Detail Buku</h2>
            </div>
            <div class="flex items-center">
                <a href="dashboard.html" class="text-emerald-600 hover:text-emerald-800 flex items-center mr-4">
                    <i class="fas fa-arrow-left mr-2"></i> Kembali
                </a>
                <div class="flex space-x-2">
                    <button class="px-4 py-2 bg-blue-600 text-white rounded-md hover:bg-blue-700 flex items-center">
                        <i class="fas fa-edit mr-2"></i> Edit
                    </button>
                    <button class="px-4 py-2 bg-red-600 text-white rounded-md hover:bg-red-700 flex items-center">
                        <i class="fas fa-trash mr-2"></i> Hapus
                    </button>
                </div>
            </div>
        </div>
    </div>

    <!-- Book Detail Content -->
    <div class="p-6">
        <div class="bg-white rounded-lg shadow overflow-hidden mb-6">
            <div class="md:flex">
                <!-- Book Cover -->
                <div class="md:w-1/3 p-6 flex justify-center">
                    <div class="w-48 h-64 bg-gray-200 rounded-lg shadow-md overflow-hidden relative">
                        <img src="https://images-na.ssl-images-amazon.com/images/I/81m1s4wIPML.jpg" alt="Harry Potter and the Philosopher's Stone" class="w-full h-full object-cover">
                        <div class="absolute top-2 right-2 bg-emerald-500 text-white text-xs px-2 py-1 rounded-full">
                            Tersedia
                        </div>
                    </div>
                </div>
                
                <!-- Book Info -->
                <div class="md:w-2/3 p-6 border-t md:border-t-0 md:border-l">
                    <h1 class="text-2xl font-bold text-gray-900 mb-2">Harry Potter and the Philosopher's Stone</h1>
                    <p class="text-sm text-gray-500 mb-4">Oleh J.K. Rowling</p>
                    
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mb-6">
                        <div>
                            <h3 class="text-sm font-medium text-gray-500">Penerbit</h3>
                            <p class="text-base text-gray-900">Bloomsbury Publishing</p>
                        </div>
                        <div>
                            <h3 class="text-sm font-medium text-gray-500">Tahun Terbit</h3>
                            <p class="text-base text-gray-900">1997</p>
                        </div>
                        <div>
                            <h3 class="text-sm font-medium text-gray-500">ISBN</h3>
                            <p class="text-base text-gray-900">9780747532743</p>
                        </div>
                        <div>
                            <h3 class="text-sm font-medium text-gray-500">Jumlah Halaman</h3>
                            <p class="text-base text-gray-900">223</p>
                        </div>
                        <div>
                            <h3 class="text-sm font-medium text-gray-500">Kategori</h3>
                            <p class="text-base text-gray-900">Fiksi, Fantasi</p>
                        </div>
                        <div>
                            <h3 class="text-sm font-medium text-gray-500">Bahasa</h3>
                            <p class="text-base text-gray-900">Inggris</p>
                        </div>
                        <div>
                            <h3 class="text-sm font-medium text-gray-500">Stok</h3>
                            <p class="text-base text-gray-900">15 buku</p>
                        </div>
                        <div>
                            <h3 class="text-sm font-medium text-gray-500">Dipinjam</h3>
                            <p class="text-base text-gray-900">87 kali</p>
                        </div>
                    </div>
                    
                    <div class="mb-6">
                        <h3 class="text-sm font-medium text-gray-500 mb-2">Rating</h3>
                        <div class="flex items-center">
                            <div class="flex text-yellow-400">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star-half-alt"></i>
                            </div>
                            <span class="ml-2 text-gray-600">4.5/5 (120 ulasan)</span>
                        </div>
                    </div>
                    
                    <div>
                        <h3 class="text-sm font-medium text-gray-500 mb-2">Lokasi</h3>
                        <div class="flex flex-wrap gap-2">
                            <span class="px-3 py-1 bg-gray-100 text-gray-800 text-sm rounded-full">Rak A</span>
                            <span class="px-3 py-1 bg-gray-100 text-gray-800 text-sm rounded-full">Lantai 2</span>
                            <span class="px-3 py-1 bg-gray-100 text-gray-800 text-sm rounded-full">Seksi Fiksi</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Book Description -->
        <div class="bg-white rounded-lg shadow overflow-hidden mb-6">
            <div class="px-6 py-4 border-b">
                <h3 class="text-lg font-semibold text-gray-800">Deskripsi</h3>
            </div>
            <div class="p-6">
                <p class="text-gray-700 leading-relaxed">
                    Harry Potter and the Philosopher's Stone adalah novel fantasi karya penulis Inggris J. K. Rowling yang merupakan novel pertama dalam seri Harry Potter dan novel debut Rowling. Novel ini mengisahkan tentang Harry Potter, seorang anak yatim piatu yang mengetahui bahwa ia adalah penyihir pada ulang tahunnya yang kesebelas, ketika ia menerima undangan untuk menghadiri Sekolah Sihir Hogwarts.
                </p>
                <p class="text-gray-700 leading-relaxed mt-4">
                    Harry membuat teman dekat dan beberapa musuh selama tahun pertamanya di sekolah, dan dengan bantuan teman-temannya, ia menghadapi penyihir jahat Voldemort, yang berusaha mendapatkan kembali kekuatannya dan kembali ke bentuk fisiknya setelah bertahun-tahun dalam bentuk yang lemah. Buku ini menerima pujian kritis yang sebagian besar positif dan memenangkan beberapa penghargaan di Inggris.
                </p>
                <p class="text-gray-700 leading-relaxed mt-4">
                    Buku ini telah diterjemahkan ke dalam lebih dari 80 bahasa dan telah diadaptasi menjadi film dengan judul yang sama, yang dirilis pada tahun 2001 dan menjadi film pertama dari seri film Harry Potter. Buku ini telah terjual lebih dari 120 juta kopi di seluruh dunia, menjadikannya salah satu buku terlaris sepanjang masa.
                </p>
            </div>
        </div>
        
        <!-- Borrowing History -->
        <div class="bg-white rounded-lg shadow overflow-hidden mb-6">
            <div class="px-6 py-4 border-b">
                <h3 class="text-lg font-semibold text-gray-800">Riwayat Peminjaman</h3>
            </div>
            <div class="overflow-x-auto">
                <table class="min-w-full divide-y divide-gray-200">
                    <thead class="bg-gray-50">
                        <tr>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Tanggal Pinjam</th>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Tanggal Kembali</th>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Peminjam</th>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Status</th>
                        </tr>
                    </thead>
                    <tbody class="bg-white divide-y divide-gray-200">
                        <tr>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">2023-05-10</td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">2023-05-24</td>
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
                            <td class="px-6 py-4 whitespace-nowrap">
                                <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">
                                    Dikembalikan
                                </span>
                            </td>
                        </tr>
                        <tr>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">2023-04-15</td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">2023-04-29</td>
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
                            <td class="px-6 py-4 whitespace-nowrap">
                                <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-yellow-100 text-yellow-800">
                                    Terlambat
                                </span>
                            </td>
                        </tr>
                        <tr>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">2023-03-22</td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">2023-04-05</td>
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
                            <td class="px-6 py-4 whitespace-nowrap">
                                <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">
                                    Dikembalikan
                                </span>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="px-6 py-4 border-t">
                <a href="#" class="text-emerald-600 hover:text-emerald-800">Lihat semua riwayat peminjaman</a>
            </div>
        </div>
        
        <!-- Related Books -->
        <div class="bg-white rounded-lg shadow overflow-hidden">
            <div class="px-6 py-4 border-b">
                <h3 class="text-lg font-semibold text-gray-800">Buku Terkait</h3>
            </div>
            <div class="p-6">
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
                    <div class="bg-gray-50 rounded-lg p-4">
                        <div class="flex flex-col items-center">
                            <div class="w-24 h-36 bg-gray-200 rounded-md mb-4 overflow-hidden">
                                <img src="https://images-na.ssl-images-amazon.com/images/I/81OthjkJBuL.jpg" alt="Harry Potter and the Chamber of Secrets" class="w-full h-full object-cover">
                            </div>
                            <h4 class="text-sm font-medium text-gray-900 text-center">Harry Potter and the Chamber of Secrets</h4>
                            <p class="text-xs text-gray-500 mt-1">J.K. Rowling</p>
                            <div class="flex text-yellow-400 text-xs mt-2">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="far fa-star"></i>
                            </div>
                        </div>
                    </div>
                    <div class="bg-gray-50 rounded-lg p-4">
                        <div class="flex flex-col items-center">
                            <div class="w-24 h-36 bg-gray-200 rounded-md mb-4 overflow-hidden">
                                <img src="https://images-na.ssl-images-amazon.com/images/I/81lAPl9Fl0L.jpg" alt="Harry Potter and the Prisoner of Azkaban" class="w-full h-full object-cover">
                            </div>
                            <h4 class="text-sm font-medium text-gray-900 text-center">Harry Potter and the Prisoner of Azkaban</h4>
                            <p class="text-xs text-gray-500 mt-1">J.K. Rowling</p>
                            <div class="flex text-yellow-400 text-xs mt-2">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star-half-alt"></i>
                            </div>
                        </div>
                    </div>
                    <div class="bg-gray-50 rounded-lg p-4">
                        <div class="flex flex-col items-center">
                            <div class="w-24 h-36 bg-gray-200 rounded-md mb-4 overflow-hidden">
                                <img src="https://images-na.ssl-images-amazon.com/images/I/81t2CVWEsUL.jpg" alt="Harry Potter and the Goblet of Fire" class="w-full h-full object-cover">
                            </div>
                            <h4 class="text-sm font-medium text-gray-900 text-center">Harry Potter and the Goblet of Fire</h4>
                            <p class="text-xs text-gray-500 mt-1">J.K. Rowling</p>
                            <div class="flex text-yellow-400 text-xs mt-2">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </div>
                        </div>
                    </div>
                    <div class="bg-gray-50 rounded-lg p-4">
                        <div class="flex flex-col items-center">
                            <div class="w-24 h-36 bg-gray-200 rounded-md mb-4 overflow-hidden">
                                <img src="https://images-na.ssl-images-amazon.com/images/I/91TpLHDnuFL.jpg" alt="Fantastic Beasts and Where to Find Them" class="w-full h-full object-cover">
                            </div>
                            <h4 class="text-sm font-medium text-gray-900 text-center">Fantastic Beasts and Where to Find Them</h4>
                            <p class="text-xs text-gray-500 mt-1">J.K. Rowling</p>
                            <div class="flex text-yellow-400 text-xs mt-2">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="far fa-star"></i>
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
    </script>
@endpush