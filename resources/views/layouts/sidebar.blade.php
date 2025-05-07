<div class="sidebar bg-white w-64 border-r fixed inset-y-0 left-0 z-30">
    <div class="flex flex-col h-full">
        <div class="px-4 py-6 border-b">
            <div class="flex items-center">
                <i class="fas fa-book-open text-emerald-600 text-2xl mr-3"></i>
                <h1 class="text-xl font-semibold text-gray-800">E-Library</h1>
            </div>
            <p class="text-xs text-gray-500 mt-1">Admin Dashboard</p>
        </div>
        <div class="flex-1 overflow-y-auto py-4">
            <nav class="px-2 space-y-1">
                <a href="{{  route('books.dashboard') }}" class="flex items-center px-4 py-3 text-sm font-medium rounded-md text-gray-600 hover:bg-gray-50 hover:text-gray-900">
                    <i class="fas fa-tachometer-alt mr-3 text-gray-400"></i>
                    Dashboard
                </a>
                <a href="{{ route('books.create') }}" class="flex items-center px-4 py-3 text-sm font-medium rounded-md text-gray-600 hover:bg-gray-50 hover:text-gray-900">
                    <i class="fas fa-plus-circle mr-3 text-gray-400"></i>
                    Tambah Buku
                </a>
                <a href="{{ route('books.show') }}" class="flex items-center px-4 py-3 text-sm font-medium rounded-md text-gray-600 hover:bg-gray-50 hover:text-gray-900">
                    <i class="fas fa-book mr-3 text-gray-400"></i>
                    Detail Buku
                </a>
                <a href="{{ route('books.user') }}" class="flex items-center px-4 py-3 text-sm font-medium rounded-md text-gray-600 hover:bg-gray-50 hover:text-gray-900">
                    <i class="fas fa-users mr-3 text-gray-400"></i>
                    Pengguna
                </a>
                <a href="{{ route('books.report') }}" class="flex items-center px-4 py-3 text-sm font-medium rounded-md text-gray-600 hover:bg-gray-50 hover:text-gray-900">
                    <i class="fas fa-chart-bar mr-3 text-gray-400"></i>
                    Laporan
                </a>
                <a href="{{ route('books.setting') }}" class="flex items-center px-4 py-3 text-sm font-medium rounded-md text-gray-600 hover:bg-gray-50 hover:text-gray-900">
                    <i class="fas fa-cog mr-3 text-gray-400"></i>
                    Pengaturan
                </a>
            </nav>
        </div>
        <div class="border-t px-4 py-4">
            <div class="flex items-center">
                <img src="https://randomuser.me/api/portraits/men/1.jpg" alt="Admin" class="h-8 w-8 rounded-full">
                <div class="ml-3">
                    <p class="text-sm font-medium text-gray-700">Admin User</p>
                    <p class="text-xs text-gray-500">admin@elibrary.com</p>
                </div>
            </div>
        </div>
    </div>
</div>