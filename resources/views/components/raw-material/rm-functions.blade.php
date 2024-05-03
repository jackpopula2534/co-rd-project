                <li
                    class="w-full px-4 pb-3 py-2 border-b border-gray-200 rounded-t-lg dark:border-gray-600 text-main-color font-black text-xs">
                    <label class="">Its functions (INCI) </label>

                    <ul
                        class="mt-2 pl-3 w-full space-y-1 list-disc list-inside dark:text-gray-400 font-normal text text-xs">

                        @if (!empty($rmDetail) && !empty($rmDetail['rm_functions']))
                            @foreach ($rmDetail['rm_functions'] as $value)
                                <li>
                                    <label class="font-bold">{{ $value['title'] }} :</label>
                                    {{ $value['detail'] }}
                                </li>
                            @endforeach
                        @else
                            <x-raw-material.error.msg-error :msg="'ไม่ได้กำหนดรายการส่วนประกอบ'" />
                        @endif
                    </ul>

                </li>
