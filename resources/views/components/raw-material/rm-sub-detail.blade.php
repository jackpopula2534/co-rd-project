<div class="p-3">
    <div class="flex flex-row justify-start content-center pb-3">
        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24"
            style="fill: #e0715e;transform: ;msFilter:;">
            <path
                d="M20 3H4c-1.103 0-2 .897-2 2v14c0 1.103.897 2 2 2h16c1.103 0 2-.897 2-2V5c0-1.103-.897-2-2-2zM4 19V5h16l.002 14H4z">
            </path>
            <path d="M6 7h12v2H6zm0 4h12v2H6zm0 4h6v2H6z"></path>
        </svg>
        <label class="ml-2 text-main-color">รายละเอียดสาร</label>
    </div>
    <div class="max-w-md mx-auto bg-white rounded-xl shadow-md overflow-hidden md:max-w-2xl">


        @if (empty($rmDetail))
            <x-raw-material.error.msg-error :msg="'ไม่ได้กำหนดรายละเอียด'" />
        @else
            <div class="md:flex">
                <div class="md:shrink-0">
                    <img class="h-48 w-full object-cover rounded-r-lg md:h-full md:w-48"
                        src="{{ $rmDetail['img'] ?? '-' }}" alt="No Image">
                </div>
                <div class="pl-3 pr-3 flex flex-col justify-start">
                    <p class="text-xs text-main-color">
                        {{ $rmDetail['sub_detail'] ?? 'ไม่ได้ระบุรายละเอียด' }}
                    </p>

                </div>
            </div>
        @endif

    </div>

</div>
