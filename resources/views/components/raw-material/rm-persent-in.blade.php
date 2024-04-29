<li class="w-full px-4 py-2 mt-2 rounded-md text-main-color font-black text-lg">

    <div class="flex flex-row justify-start content-center">
        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
            style="fill: #048482;transform: ;msFilter:;">
            <path
                d="m20.895 7.553-2-4A1.001 1.001 0 0 0 18 3h-5c-.379 0-.725.214-.895.553L10.382 7H6c-.379 0-.725.214-.895.553l-2 4a1 1 0 0 0 0 .895l2 4c.17.338.516.552.895.552h4.382l1.724 3.447A.998.998 0 0 0 13 21h5c.379 0 .725-.214.895-.553l2-4a1 1 0 0 0 0-.895L19.118 12l1.776-3.553a1 1 0 0 0 .001-.894zM13.618 5h3.764l1.5 3-1.5 3h-3.764l-1.5-3 1.5-3zm-8.5 7 1.5-3h3.764l1.5 3-1.5 3H6.618l-1.5-3zm12.264 7h-3.764l-1.5-3 1.5-3h3.764l1.5 3-1.5 3z">
            </path>
        </svg>
        <label class="ml-2">ส่วนประกอบสาร</label>
    </div>

    <ul class="mt-2 pl-2 mb-3 w-full space-y-2 dark:text-gray-900 font-normal text-gray-900 text-xs">

        @if (!empty($rmDetail) && !empty($rmDetail['rm_component']))
            @foreach ($rmDetail['rm_component'] as $value)
                <li>
                    <div class="progress-container">
                        <div class="progress rounded-full ">
                            <label class="progress-label text-nowrap"
                                style="width: 70%">{{ $value['name'] . ' ' . $value['percent'] }}%</label>
                            <div class="progress-bar rounded-full text-gray-700 "
                                style="width: {{ $value['percent'] ? $value['percent'] : 0 }}%"></div>
                        </div>
                    </div>

                </li>
            @endforeach
        @else
            <x-raw-material.error.msg-error :msg="'ไม่ได้กำหนดรายการส่วนประกอบ'" />
        @endif

    </ul>
</li>
