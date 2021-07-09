<div>
    <!-- Sidebar -->
    <div class="lg:w-64">

        <!-- Sidebar backdrop (mobile only) -->
        <div class="fixed inset-0 bg-gray-900 bg-opacity-30 z-40 lg:hidden lg:z-auto transition-opacity duration-200" :class="sidebarOpen ? 'opacity-100' : 'opacity-0 pointer-events-none'" aria-hidden="true" x-cloak></div>

        <!-- Sidebar -->
        <nav
            id="sidebar"
            class="absolute z-40 left-0 top-0 lg:static lg:left-auto lg:top-auto lg:translate-x-0 transform h-screen overflow-y-scroll lg:overflow-y-auto no-scrollbar w-64 flex-shrink-0 bg-gray-800 p-4 transition-transform duration-200 ease-in-out"
            :class="sidebarOpen ? 'translate-x-0' : '-translate-x-64'"
            @click.away="sidebarOpen = false"
            @keydown.escape.window="sidebarOpen = false"
            x-cloak="lg"
        >

            <!-- Sidebar header -->
            <div class="flex justify-between mb-10 pr-3 sm:px-2">
                <!-- Close button -->
                <button
                    class="lg:hidden text-gray-500 hover:text-gray-400"
                    @click.stop="sidebarOpen = !sidebarOpen"
                    aria-controls="sidebar"
                    :aria-expanded="sidebarOpen"
                >
                    <span class="sr-only">Close sidebar</span>
                    <svg class="w-6 h-6 fill-current" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path d="M10.7 18.7l1.4-1.4L7.8 13H20v-2H7.8l4.3-4.3-1.4-1.4L4 12z" />
                    </svg>
                </button>
                <!-- Logo -->
                <a class="block" href="{{ route('dashboard') }}">
                    <x-jet-application-mark class="block h-9 w-auto" />
                </a>
            </div>

            <!-- Links -->
            <div>
                <h3 class="text-xs uppercase text-gray-500 font-semibold pl-3">Pages</h3>
                <ul class="mt-3">
                    <!-- Dashboard -->
                    <li class="px-3 py-2 rounded-sm mb-0.5 last:mb-0" :class="page === 'dashboard' && 'bg-gray-900'">
                        <a class="block text-gray-200 hover:text-white transition duration-150" :class="page === 'dashboard' && 'hover:text-gray-200'" href="{{ route('dashboard') }}">
                            <div class="flex flex-grow flex-inline">
                                <i class="far fa-compass ">
                                <span class="text-sm font-medium ml-2">Dashboard</span>
                                </i>
                            </div>
                        </a>
                    </li>
                </ul>
            </div>
        </nav>
    </div>
</div>
