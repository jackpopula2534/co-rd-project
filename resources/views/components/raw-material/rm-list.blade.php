<div>

    @if ($type == 1)

        <div class="flex flex-row text-xs p-3  font-black  text-white justify-start bg-pastel-800 m-2">
            <div class="basis-1/3 ">รูปภาพ</div>
            <div class="basis-1/2 grid justify-items-center uppercase text-xs text-white content-center text-center">
                ชื่อสาร</div>
        </div>

        <div class="list">
            @foreach ($rmList as $value)
                <div class=" {{ !empty($rmDetail) ? 'h-28' : 'h-40' }} rm-item flex flex-row justify-start {{ isset($rmDetail['id']) && $rmDetail['id'] === $value['id'] ? 'font-bold text-main-color bg-pastel-300 border-2 border-solid border-pastel-800' : 'text-main-color bg-white border-2 border-solid border-gray-brown-200' }} hover:border-2 hover:border-solid hover:border-pastel-800 hover:text-white hover:font-bold hover:bg-pastel-300 m-2 rounded-lg drop-shadow-xl"
                    wire:click="getDetail('{{ json_encode($value) }}')">
                    <div
                        class="{{ !empty($rmDetail) ? 'h-28' : 'h-40' }} basis-1/3 rounded-l-lg flex items-center w-full">
                        <img class="pb-1 w-full object-cover rounded-l-lg h-full" src="{{ $value['img'] }}">
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
            <div
                class="basis-1/2 grid justify-items-center uppercase text-xs text-white content-center text-center hidden md:block">
                รหัสสาร</div>
            <div class="basis-1/2 grid justify-items-center uppercase text-xs text-white content-center text-center">
                ชื่อสาร</div>
            <div
                class="basis-1/2 grid justify-items-center uppercase text-xs text-white content-center text-center hidden md:block">
                ชื่อสถานะ ( สไลด์ )</div>
        </div>
        <div class="list">
            @foreach ($rmList as $value)
                <div class="h-28 rm-item flex flex-row justify-start {{ isset($rmDetail['id']) && $rmDetail['id'] === $value['id'] ? 'font-bold text-main-color bg-pastel-300 border-2 border-solid border-pastel-800' : 'text-main-color bg-white border-2 border-solid border-gray-brown-200' }} hover:border-2 hover:border-solid hover:border-pastel-800 hover:text-white hover:font-bold hover:bg-pastel-300 m-2 rounded-lg drop-shadow-xl"
                    wire:click="getDetail('{{ json_encode($value) }}')">
                    <div class="h-28 basis-1/3 rounded-l-lg flex items-center w-full">
                        <img class="pb-1 h-48 w-full object-cover rounded-l-lg h-full w-48" src="{{ $value['img'] }}">
                    </div>
                    <div
                        class="{{ isset($rmDetail['id']) && $rmDetail['id'] === $value['id'] ? 'p-5' : '' }} basis-1/2 grid justify-items-center uppercase text-xs content-center text-center hidden md:block">
                        {{ $value['code'] }}</div>
                    <div
                        class="basis-1/2 grid justify-items-center uppercase text-xs content-center text-center overflow-hidden">
                        <p class="whitespace-no-wrap">
                            {{ $value['name'] }}</p>
                    </div>
                    <div
                        class="p-1 basis-1/2 grid justify-items-center uppercase text-xs content-center text-main-color text-center hidden md:block">

                        <div class="flex flex-row">
                            @if (is_array($value['slide']) && count($value['slide']) > 0)
                                @foreach ($value['slide'] as $index_slide => $slide)
                                    {{-- ถ้ารายการมากกว่า 2 ภาษาจะไม่โชว --}}

                                    @if ($index_slide == 2)
                                        <div class="z-40">
                                            <button
                                                id="dropdownMenuIconButton-{{ $index_slide . '-' . $slide['language_code'] }}"
                                                data-dropdown-toggle="dropdownDots-{{ $index_slide . '-' . $slide['language_code'] }}"
                                                data-dropdown-offset-distance="35" data-dropdown-offset-skidding="0"
                                                data-dropdown-placement="top" onclick="event.stopPropagation();"
                                                class="pt-2 pb-2 text-xsinline-flex items-centerfont-medium text-center text-gray-400 bg-white rounded-lg hover:bg-gray-100 hover:text-green-tea-600 focus:ring-4 focus:outline-none dark:text-white focus:ring-gray-50 dark:bg-gray-800 dark:hover:bg-gray-700 dark:focus:ring-gray-600"
                                                type="button">
                                                <svg class="w-3 h-3" aria-hidden="true"
                                                    xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                                                    viewBox="0 0 4 15">
                                                    <path
                                                        d="M3.5 1.5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0Zm0 6.041a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0Zm0 5.959a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0Z" />
                                                </svg>
                                            </button>
                                            <div class="absolute">
                                                <div id="dropdownDots-{{ $index_slide . '-' . $slide['language_code'] }}"
                                                    class="z-10 hidden bg-gray-brown-500 divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700">

                                                    <ul class="py-2 text-sm  dark:text-gray-200"
                                                        aria-labelledby="dropdownMenuIconButton-{{ $index_slide . '-' . $slide['language_code'] }}">

                                                        @foreach ($value['slide'] as $index => $slide)
                                                            @if ($index_slide >= 2)
                                                                <li>
                                                                    <a href="#"
                                                                        class="block px-4 py-2 text-white hover:bg-green-tea-600 hover:text-white dark:hover:bg-gray-600 dark:hover:text-white">{{ $slide['language_code'] }}</a>
                                                                </li>
                                                            @endif
                                                        @endforeach
                                                    </ul>
                                                </div>
                                            </div>

                                        </div>
                                    @endif


                                    @break($index_slide > 1)
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
