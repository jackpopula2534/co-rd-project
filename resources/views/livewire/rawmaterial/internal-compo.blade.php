<div class="">

    <!-- Two columns -->
    <div class="flex flex-row rm-main">
        <div class="rm-list flex-auto w-64">

            <div class="p-2 head">
                <div id="card-chr"
                    class="text-xs mt-1 inline-flex items-center justify-center bg-white  rounded-lg shadow px-4 py-2 text-main-color font-black transition duration-75 rounded-lg group hover:bg-main-color hover:text-white dark:text-white dark:hover:bg-main-color">
                    <span class="uppercase">0-9</span>
                </div>
                @for ($i = 0; $i < 26; $i++)
                    <div id="card-chr"
                        class="text-xs mt-1 inline-flex items-center justify-center bg-white  rounded-lg shadow px-4 py-2 text-main-color font-black transition duration-75 rounded-lg group hover:bg-main-color hover:text-white dark:text-white dark:hover:bg-main-color">
                        <span class="uppercase">{{ chr($i + 97) }}</span>
                    </div>
                @endfor
            </div>

            <x-raw-material.rm-filter />

            <x-raw-material.rm-list :rm-list="$rm_list" :type="$type" :rmDetail="$rmDetail" />


        </div>

        <div class="rm-detail flex-auto w-32 hidden  {{ !empty($rmDetail) ? 'lg:flex' : '' }} p-3">
            {{-- <div class="rm-detail flex-auto w-32  p-3"> --}}

            <div class="w-full">

                {{-- // Sub Menu --}}
                <div class="flex flex-row-reverse pr-3 pb-3 gap-3">
                    <div wire:click="changePage(3)"
                        class="relative w-14 h-14 overflow-hidden {{ $subPageNumber == 3 ? 'text-white bg-pastel-600' : 'text-gray-brown-400 bg-gray-brown-200' }} rounded-full flex items-center justify-center content-center hover:bg-pastel-300 hover:text-white">
                        <i class="bx bxs-file-pdf  hover:text-white text-3xl"></i>
                    </div>
                    <div wire:click="changePage(2)"
                        class="relative w-14 h-14 overflow-hidden {{ $subPageNumber == 2 ? 'text-white bg-pastel-600' : 'text-gray-brown-400 bg-gray-brown-200' }} rounded-full flex items-center justify-center content-center hover:bg-pastel-300 hover:text-white">
                        <i class="bx bxs-component  hover:text-white text-3xl"></i>
                    </div>
                    <div wire:click="changePage(1)"
                        class="relative w-14 h-14 overflow-hidden {{ $subPageNumber == 1 ? 'text-white bg-pastel-600' : 'text-gray-brown-400 bg-gray-brown-200' }} rounded-full flex items-center justify-center content-center hover:bg-pastel-300 hover:text-white">
                        <i class="bx bx-test-tube  hover:text-white text-3xl"></i>
                    </div>
                </div>
                @switch($subPageNumber)
                    @case(2)
                        <x-raw-material.rm-page.products :rmDetail="$rmDetail" />
                    @break

                    @case(3)
                        <x-raw-material.rm-page.slides :rmDetail="$rmDetail" />
                    @break

                    @default
                        <x-raw-material.rm-page.detail :rmDetail="$rmDetail" />
                @endswitch



            </div>

        </div>
    </div>

</div>
