@extends('layouts.app')
@section('title', 'Tambah Buku - ')

@section('content')
    <div class="bg-white shadow-sm">
        <div class="flex items-center justify-between px-6 py-4">
            <button id="sidebar-toggle" class="md:hidden text-gray-600 focus:outline-none">
                <i class="fas fa-bars text-xl"></i>
            </button>
            <div class="flex-1 ml-4 md:ml-0">
                <h2 class="text-xl font-semibold text-gray-800">Tambah Buku Baru</h2>
            </div>
            <div class="flex items-center">
                <button class="ml-4 text-gray-500 hover:text-gray-700">
                    <i class="fas fa-bell text-xl"></i>
                </button>
            </div>
        </div>
    </div>
            
    <div class="p-6">
        <div class="bg-white rounded-lg shadow overflow-hidden">
            <div class="px-6 py-4 border-b">
                <div class="flex items-center justify-between">
                    <h3 class="text-lg font-semibold text-gray-800">Form Tambah Buku</h3>
                    <a href="dashboard.html" class="text-emerald-600 hover:text-emerald-800 flex items-center">
                        <i class="fas fa-arrow-left mr-2"></i> Kembali
                    </a>
                </div>
            </div>
            <div class="p-6">
                <form id="create-book-form">
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div class="col-span-1">
                            <label for="book-title" class="block text-sm font-medium text-gray-700 mb-1">Nama Buku</label>
                            <input type="text" id="book-title" name="book-title" class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-emerald-500 focus:border-transparent" placeholder="Masukkan judul buku" required>
                        </div>
                        
                        <div class="col-span-1">
                            <label for="publisher" class="block text-sm font-medium text-gray-700 mb-1">Penerbit</label>
                            <input type="text" id="publisher" name="publisher" class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-emerald-500 focus:border-transparent" placeholder="Masukkan nama penerbit" required>
                        </div>
                        
                        <div class="col-span-1">
                            <label for="publish-year" class="block text-sm font-medium text-gray-700 mb-1">Tahun Terbit</label>
                            <input type="number" id="publish-year" name="publish-year" class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-emerald-500 focus:border-transparent" placeholder="Masukkan tahun terbit" min="1800" max="2099" required>
                        </div>
                        
                        <div class="col-span-1">
                            <label for="page-count" class="block text-sm font-medium text-gray-700 mb-1">Jumlah Halaman</label>
                            <input type="number" id="page-count" name="page-count" class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-emerald-500 focus:border-transparent" placeholder="Masukkan jumlah halaman" min="1" required>
                        </div>
                        
                        <div class="col-span-2">
                            <label for="description" class="block text-sm font-medium text-gray-700 mb-1">Deskripsi</label>
                            <textarea id="description" name="description" rows="4" class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-emerald-500 focus:border-transparent" placeholder="Masukkan deskripsi buku" required></textarea>
                        </div>
                        
                        <div class="col-span-2">
                            <label for="cover-image" class="block text-sm font-medium text-gray-700 mb-1">Cover Buku (Opsional)</label>
                            <div class="flex items-center">
                                <label class="flex flex-col items-center px-4 py-6 bg-white text-emerald-500 rounded-lg border border-dashed border-gray-300 cursor-pointer hover:bg-gray-50">
                                    <i class="fas fa-cloud-upload-alt text-2xl"></i>
                                    <span class="mt-2 text-sm text-gray-500">Klik untuk upload gambar</span>
                                    <input type="file" id="cover-image" name="cover-image" class="hidden" accept="image/*">
                                </label>
                                <div id="image-preview" class="ml-4 hidden">
                                    <div class="relative h-20 w-16 bg-gray-100 rounded-md flex items-center justify-center">
                                        <img id="preview-img" src="#" alt="Preview" class="h-full w-full object-cover rounded-md">
                                        <button type="button" id="remove-image" class="absolute -top-2 -right-2 bg-red-500 text-white rounded-full p-1 text-xs">
                                            <i class="fas fa-times"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="mt-8 flex justify-end space-x-3">
                        <a href="dashboard.html" class="px-4 py-2 bg-gray-200 text-gray-700 rounded-md hover:bg-gray-300">
                            Batal
                        </a>
                        <button type="submit" class="px-4 py-2 bg-emerald-600 text-white rounded-md hover:bg-emerald-700">
                            <i class="fas fa-save mr-2"></i> Simpan
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection

@push('scripts')
    <script>
        // Image preview functionality
        document.getElementById('cover-image').addEventListener('change', function(e) {
            const file = e.target.files[0];
            if (file) {
                const reader = new FileReader();
                reader.onload = function(e) {
                    document.getElementById('preview-img').src = e.target.result;
                    document.getElementById('image-preview').classList.remove('hidden');
                }
                reader.readAsDataURL(file);
            }
        });

        // Remove image preview
        document.getElementById('remove-image').addEventListener('click', function() {
            document.getElementById('cover-image').value = '';
            document.getElementById('image-preview').classList.add('hidden');
        });
    </script>
@endpush
