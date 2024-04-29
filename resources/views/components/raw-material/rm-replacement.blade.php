<div>
    <ul>
        <li class="w-full px-4 py-2 mt-1 rounded-md text-main-color font-black text-lg">

            <div class="flex flex-row justify-start content-center">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                    style="fill: #048482;transform: ;msFilter:;">
                    <path
                        d="m20.895 7.553-2-4A1.001 1.001 0 0 0 18 3h-5c-.379 0-.725.214-.895.553L10.382 7H6c-.379 0-.725.214-.895.553l-2 4a1 1 0 0 0 0 .895l2 4c.17.338.516.552.895.552h4.382l1.724 3.447A.998.998 0 0 0 13 21h5c.379 0 .725-.214.895-.553l2-4a1 1 0 0 0 0-.895L19.118 12l1.776-3.553a1 1 0 0 0 .001-.894zM13.618 5h3.764l1.5 3-1.5 3h-3.764l-1.5-3 1.5-3zm-8.5 7 1.5-3h3.764l1.5 3-1.5 3H6.618l-1.5-3zm12.264 7h-3.764l-1.5-3 1.5-3h3.764l1.5 3-1.5 3z">
                    </path>
                </svg>
                <label class="ml-2">สารที่สามารถทดแทน หรือ มีคุณสมบัติใกล้เคียง</label>
            </div>

        </li>

        <li class="w-full px-4 py-2 rounded-t-lg text-main-color font-medium text-xs">
            @if (!empty($rmDetail))
                @if (!empty($rmDetail['replacement']))
                    @foreach ($rmDetail['replacement'] as $value)
                        <div class="grid md:grid-cols-2 gap-2 pb-1">
                            <div class="relative z-0 w-full group">
                                <div class="flex flex-row justify-start content-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24" style="fill: #ffc2b8;transform: ;msFilter:;">
                                        <path
                                            d="M4 11h6a1 1 0 0 0 1-1V4a1 1 0 0 0-1-1H4a1 1 0 0 0-1 1v6a1 1 0 0 0 1 1zm10 0h6a1 1 0 0 0 1-1V4a1 1 0 0 0-1-1h-6a1 1 0 0 0-1 1v6a1 1 0 0 0 1 1zM4 21h6a1 1 0 0 0 1-1v-6a1 1 0 0 0-1-1H4a1 1 0 0 0-1 1v6a1 1 0 0 0 1 1zm13 0c2.206 0 4-1.794 4-4s-1.794-4-4-4-4 1.794-4 4 1.794 4 4 4z">
                                        </path>
                                    </svg>
                                    <label class="ml-2 mt-1 text-md">ชื่อสาร</label>
                                </div>
                            </div>
                            <div class="relative z-0 w-full group">
                                <label class=""> {{ $value['name'] }} </label>
                            </div>
                        </div>
                    @endforeach
                @else
                    <x-raw-material.error.msg-error :msg="'ไม่ได้กำหนดรายการสารทดแทน'" />

                @endif
            @else
                <x-raw-material.error.msg-error :msg="'ไม่ได้กำหนดรายการสารทดแทน'" />

            @endif
        </li>
    </ul>
</div>
