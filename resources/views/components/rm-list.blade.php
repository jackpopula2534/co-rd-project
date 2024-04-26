<div>

    @if ($type == 1)

        <div class="flex flex-row text-xs p-3  font-black  text-white justify-start bg-pastel-800 m-2">
            <div class="basis-1/3 ">รูปภาพ</div>
            <div class="basis-1/2 grid justify-items-center uppercase text-xs text-white content-center text-center">
                ชื่อสาร</div>
        </div>


        <div class="list">
            @foreach ($rmList as $value)
                <div class="h-28 rm-item flex flex-row justify-start bg-white m-2 rounded-lg drop-shadow-xl">
                    <div class="basis-1/3 rounded-l-lg">
                        <img class="h-28 w-30 rounded-l-lg" src="{{ $value['img'] }}">
                    </div>
                    <div
                        class="p-5 basis-1/2 grid justify-items-center uppercase text-xs text-main-color content-center text-center">
                        {{ $value['name'] }}</div>
                </div>
            @endforeach
        </div>
    @else
        <div class="flex flex-row text-xs p-3  font-black  text-white justify-start bg-pastel-800 m-2">
            <div class="basis-1/3 ">รูปภาพ</div>
            <div class="basis-1/2 grid justify-items-center uppercase text-xs text-white content-center text-center">
                รหัสสาร</div>
            <div class="basis-1/2 grid justify-items-center uppercase text-xs text-white content-center text-center">
                ชื่อสาร</div>
            <div class="basis-1/2 grid justify-items-center uppercase text-xs text-white content-center text-center">
                ชื่อสถานะ ( สไลด์ )</div>
        </div>


        <div class="list">
            @foreach ($rmList as $value)
                <div class="h-28 rm-item flex flex-row justify-start bg-white m-2 rounded-lg drop-shadow-xl">
                    <div class="h-28 basis-1/3 rounded-l-lg flex items-center w-full">
                        <img class="h-full flex-shrink-0 object-cover rounded-l-lg" src="{{ $value['img'] }}">
                    </div>
                    <div
                        class="p-5 basis-1/2 grid justify-items-center uppercase text-xs text-main-color content-center text-center">
                        {{ $value['code'] }}</div>
                    <div
                        class="p-5 basis-1/2 grid justify-items-center uppercase text-xs text-main-color content-center text-center">
                        {{ $value['name'] }}</div>
                    <div
                        class="p-1 basis-1/2 grid justify-items-center uppercase text-xs text-main-color content-center text-center">

                        <div class="flex flex-row">
                            @if (is_array($value['slide']) && count($value['slide']) > 0)
                                @foreach ($value['slide'] as $index => $slide)
                                    {{-- ถ้ารายการมากกว่า 2 ภาษาจะไม่โชว --}}

                                    @if ($index == 2)
                                        <div class="z-40">
                                            <button id="dropdownMenuIconButton" data-dropdown-toggle="dropdownDots"
                                                data-dropdown-placement="right"
                                                class="pt-2 text-xsinline-flex items-centerfont-medium text-center text-gray-400 bg-white rounded-lg hover:bg-gray-100 hover:text-green-tea-600 focus:ring-4 focus:outline-none dark:text-white focus:ring-gray-50 dark:bg-gray-800 dark:hover:bg-gray-700 dark:focus:ring-gray-600"
                                                type="button">
                                                <svg class="w-3 h-3" aria-hidden="true"
                                                    xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                                                    viewBox="0 0 4 15">
                                                    <path
                                                        d="M3.5 1.5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0Zm0 6.041a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0Zm0 5.959a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0Z" />
                                                </svg>
                                            </button>

                                            <!-- Dropdown menu -->
                                            <div id="dropdownDots"
                                                class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700 dark:divide-gray-600">
                                                <ul class="py-2 text-sm text-gray-700 dark:text-gray-200"
                                                    aria-labelledby="dropdownMenuIconButton">

                                                    @foreach ($value['slide'] as $index => $slide)
                                                        @if ($index == 2)
                                                            <li>
                                                                <a href="#"
                                                                    class="block px-4 py-2 hover:bg-green-tea-600 hover:text-white dark:hover:bg-gray-600 dark:hover:text-white">{{ $slide['language_code'] }}</a>
                                                            </li>
                                                        @endif
                                                    @endforeach
                                            </div>
                                        </div>
                                    @endif


                                    @break($index > 1)
                                    <div
                                        class="mr-1 ml-1 basis-1/2 flex flex-row {{ $slide['file_path'] ? 'bg-green-tea-600' : 'bg-gray-400' }} rounded-full p-1">
                                        <div>
                                            @if ($slide['file_path'])
                                                <span
                                                    class="mr-1 ml-1 text-xs inline-flex items-center bg-white justify-center rounded-full dark:bg-white dark:text-green-tea-600">
                                                    <svg class="w-2.5 h-2.5 m-1" aria-hidden="true"
                                                        xmlns="http://www.w3.org/2000/svg" fill="none"
                                                        viewBox="0 0 16 12">
                                                        <path stroke="currentColor" stroke-linecap="round"
                                                            stroke-linejoin="round" stroke-width="2"
                                                            d="M1 5.917 5.724 10.5 15 1.5" />
                                                    </svg>
                                                </span>
                                            @else
                                                <span
                                                    class="mr-1 ml-1 text-xs inline-flex items-center border border-bg-gray-900 bg-gray-400 justify-center rounded-full dark:bg-white dark:text-bg-gray-400">
                                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none"
                                                        viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                                                        class="w-2.5 h-2.5 m-0.5 text-gray-400">
                                                        <path stroke-linecap="round" stroke-linejoin="round"
                                                            d="M12 9v3.75m9-.75a9 9 0 1 1-18 0 9 9 0 0 1 18 0Zm-9 3.75h.008v.008H12v-.008Z" />
                                                    </svg>
                                                </span>
                                            @endif

                                        </div>
                                        <label
                                            class="text-xs text-white uppercase pr-2">{{ $slide['language_code'] }}</label>
                                    </div>
                                @endforeach
                            @endif
                        </div>


                    </div>
                </div>
            @endforeach
        </div>

    @endif


</div>
