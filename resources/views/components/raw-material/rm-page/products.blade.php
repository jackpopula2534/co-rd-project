<div
    class="w-full p-2 text-sm font-medium text-gray-900 bg-card-color drop-shadow-xl rounded-2xl dark:bg-gray-700 dark:border-gray-600 dark:text-white">

    <div class="flex flex-row justify-start content-center m-3  text-main-color font-black text-2xl">

        <i class="bx bxs-component  hover:text-white text-3xl"></i>
        <label class="ml-2">ผลิตภัณท์ที่ใช้สาร</label>
    </div>


    <div class="flex flex-row text-xs p-3  font-black  text-white justify-start bg-pastel-800 m-2">
        <div class="basis-1/3 ">รูปภาพ</div>
        <div
            class="basis-1/2 grid justify-items-center uppercase text-xs text-white content-center text-center hidden md:block">
            ชื่อสินค้า</div>
        <div class="basis-1/2 grid justify-items-center uppercase text-xs text-white content-center text-center">
            รหัสสูตร</div>
        <div
            class="basis-1/2 grid justify-items-center uppercase text-xs text-white content-center text-center hidden md:block">
            ปริมาณ(%)</div>
    </div>
    <div class="list">

        @if (!empty($rmDetail) && !empty($rmDetail['rm_product']))
            @foreach ($rmDetail['rm_product'] as $value)
                <div
                    class="h-28 rm-item flex flex-row justify-start text-main-color bg-white border-2 border-solid border-gray-brown-200 hover:border-2 hover:border-solid hover:border-pastel-800 hover:text-white hover:font-bold hover:bg-pastel-300 m-2 rounded-lg drop-shadow-xl">
                    <div class="h-28 basis-1/3 rounded-l-lg flex items-center w-full">
                        <img class="pb-1 h-48 w-full object-cover rounded-l-lg h-full w-48" src="{{ $value['img'] }}">
                    </div>
                    <div
                        class="{{ isset($rmDetail['id']) && $rmDetail['id'] === $value['id'] ? 'p-5' : '' }} basis-1/2 grid justify-items-center uppercase text-xs content-center text-center hidden md:block">
                        {{ $value['name'] }}</div>
                    <div
                        class="basis-1/2 grid justify-items-center uppercase text-xs content-center text-center overflow-hidden">
                        <p class="whitespace-no-wrap">
                            {{ $value['code'] }}</p>
                    </div>
                    <div
                        class="basis-1/2 grid justify-items-center uppercase text-xs content-center text-center overflow-hidden">
                        <p class="whitespace-no-wrap">
                            {{ $value['percent'] }}%</p>
                    </div>
                </div>
            @endforeach
        @else
            <x-raw-material.error.msg-error :msg="'ไม่ได้กำหนดรายการส่วนประกอบ'" />
        @endif


    </div>
</div>
