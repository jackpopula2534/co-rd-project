<div>
    <button data-drawer-target="sidebar-multi-level-sidebar" data-drawer-toggle="sidebar-multi-level-sidebar"
        aria-controls="sidebar-multi-level-sidebar" type="button"
        class="inline-flex items-center p-2 mt-2 ms-3 text-sm text-gray-500 rounded-lg sm:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600">
        <span class="sr-only">Open sidebar</span>
        <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
            <path clip-rule="evenodd" fill-rule="evenodd"
                d="M2 4.75A.75.75 0 012.75 4h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 4.75zm0 10.5a.75.75 0 01.75-.75h7.5a.75.75 0 010 1.5h-7.5a.75.75 0 01-.75-.75zM2 10a.75.75 0 01.75-.75h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 10z">
            </path>
        </svg>
    </button>

    <aside id="sidebar-multi-level-sidebar"
        class="fixed top-0 left-0 z-40 w-64 h-screen transition-transform -translate-x-full sm:translate-x-0"
        aria-label="Sidebar">
        <div class="h-full px-3 py-4 overflow-y-auto bg-teal-600 dark:bg-teal-600">
            <ul class="space-y-2 font-medium">
                {{-- {{ $menus }} --}}
                @foreach ($menus as $menu)
                    <li>
                        @if (count($menu->children) > 0)
                            <button type="button"
                                class="cursor-pointer flex items-center w-full p-2 text-gray-900 {{ session()->get('activeMenu') == $menu->title ? 'bg-white text-gray-900' : 'text-white' }} transition duration-75 rounded-lg group hover:bg-gray-100 dark:text-gray-500 dark:hover:bg-gray-700"
                                aria-controls="dropdown-example-{{ $menu->id }}"
                                data-collapse-toggle="dropdown-example-{{ $menu->id }}">
                                <svg class="flex-shrink-0 w-5 h-5 transition duration-75 {{ session()->get('activeMenu') == $menu->title ? 'bg-white text-gray-900' : 'text-white' }} group-hover:text-gray-900 dark:text-gray-500 dark:group-hover:text-gray-500"
                                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="{{ $menu->icon }}" />
                                </svg>
                                <span
                                    class="flex-1 ms-3 text-left rtl:text-right whitespace-nowrap group-hover:text-gray-900 dark:text-gray-500 dark:group-hover:text-gray-500">{{ $menu->title }}</span>
                                <svg class="w-3 h-3 group-hover:text-gray-900 dark:text-gray-500 dark:group-hover:text-gray-500"
                                    aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                                    viewBox="0 0 10 6">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2" d="m1 1 4 4 4-4" />
                                </svg>
                            </button>

                            <ul id="dropdown-example-{{ $menu->id }}"
                                class="{{ session()->get('activeMenu') == $menu->title ? '' : 'hidden' }} py-2 space-y-2">
                                @foreach ($menu->children as $children)
                                    <li>
                                        <a wire:click.prevent="setActiveSubMenu('{{ $menu->title }}','{{ $children->title }}','{{ $children->link }}')"
                                            class="flex items-center w-full p-2 text-white pl-11 {{ session()->get('activeSubMenu') == $children->title ? 'bg-teal-700' : '' }} transition duration-75 rounded-lg group hover:bg-gray-100 dark:text-gray-500 dark:hover:bg-gray-700">
                                            <span
                                                class="flex-1 ms-3 text-left rtl:text-right whitespace-nowrap group-hover:text-gray-900 dark:text-gray-500 dark:group-hover:text-gray-500">{{ $children->title }}</span>

                                        </a>
                                    </li>
                                @endforeach
                            </ul>
                        @else
                            <a wire:click.prevent="setActiveMenu('{{ $menu->title }}','{{ $menu->link }}')"
                                class="cursor-pointer flex items-center w-full p-2 text-base {{ session()->get('activeMenu') == $menu->title ? 'bg-white text-gray-900' : 'text-white' }} transition duration-75 rounded-lg group hover:bg-gray-100 dark:text-gray-500 dark:hover:bg-gray-700">
                                @if ($menu->icon)
                                    <svg class="flex-shrink-0 w-5 h-5 {{ session()->get('activeMenu') == $menu->title ? 'bg-white text-gray-900' : 'text-white' }} transition duration-75 group-hover:text-gray-900 dark:text-gray-500 dark:group-hover:text-gray-500"
                                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="{{ $menu->icon }}" />
                                    </svg>
                                @endif
                                <span
                                    class="flex-1 ms-3 text-left rtl:text-right whitespace-nowrap group-hover:text-gray-900 dark:text-gray-500 dark:group-hover:text-gray-500">{{ $menu->title }}
                                </span>
                            </a>
                        @endif
                    </li>
                @endforeach
            </ul>
        </div>
    </aside>


</div>
