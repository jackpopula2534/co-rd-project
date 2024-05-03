<li class="w-full px-4 py-2 mt-2 rounded-md text-main-color font-black text-xs">
    <label>This ingredient is present in 7.01% of cosmetics.</label>

    <ul class="mt-2 pl-2 mb-3 w-full space-y-2 dark:text-gray-900 font-normal text-gray-900 text-xs">

        @if (!empty($rmDetail) && !empty($rmDetail['rm_product']))
            @foreach ($rmDetail['rm_product'] as $value)
                <li>
                    <label class="p-2 rounded-md text-xs"
                        style="display: block; background: linear-gradient(90deg, #ffc2b8 {{ $value['percent'] }}%, transparent {{ $value['percent'] }}%, transparent 100%);">
                        {{ $value['name'] }} ({{ $value['percent'] }}%)</label>
                </li>
            @endforeach
        @else
            <x-raw-material.error.msg-error :msg="'ไม่ได้กำหนดรายการส่วนประกอบ'" />
        @endif
    </ul>
</li>
