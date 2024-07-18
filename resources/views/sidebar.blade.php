<!-- resources/views/partials/sidebar.blade.php -->

<div class="fixed top-0 left-0 w-64 h-screen bg-gray-100 shadow-md">
    <button class="bg-gray-200 hover:bg-gray-300 text-gray-800 font-bold py-2 px-4 rounded inline-flex items-center" id="sidebar-toggle">
        <i class="fas fa-bars mr-2"></i> Menu
    </button>
    <ul class="list-none mb-0 hidden md:block" id="sidebar">
        <li class="{{ Request::is('user*')? 'bg-gray-200' : '' }}">
            <a href="{{ route('user.index') }}" class="block py-2 px-4 text-gray-700 hover:text-gray-900">
                <i class="fas fa-user mr-2"></i> User
            </a>
        </li>
        <li class="{{ Request::is('bimbel*')? 'bg-gray-200' : '' }}">
            <a href="{{ route('bimbel.index') }}" class="block py-2 px-4 text-gray-700 hover:text-gray-900">
                <i class="fas fa-book mr-2"></i> Bimbel
            </a>
        </li>
    </ul>
</div>

<script>
    document.getElementById('sidebar-toggle').addEventListener('click', function() {
        document.getElementById('sidebar').classList.toggle('hidden');
    });
</script>