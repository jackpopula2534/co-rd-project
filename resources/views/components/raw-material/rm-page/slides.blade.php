<div
    class="w-full p-2 text-sm font-medium text-gray-900 bg-card-color drop-shadow-xl rounded-2xl dark:bg-gray-700 dark:border-gray-600 dark:text-white">

    <div>
        <div class="flex flex-row justify-start content-center m-3 text-main-color font-black text-2xl">
            <i class="bx bxs-file-pdf hover:text-white text-3xl"></i>
            <label class="ml-2">สไลด์สาร</label>
        </div>
    </div>

    <div class="grow">
        <div class="flex flex-col items-stretch p-2 content-end">
            <div class="basis-1/4 p-3">
                <div class="grid grid-cols-2 gap-4">

                    @if (!empty($rmDetail) && !empty($rmDetail['slide']))
                        @foreach ($rmDetail['slide'] as $index => $slide)
                            <div class="flex flex-col">
                                <div class="relative z-0 w-full group">
                                    <div class="flex flex-row mb-5 justify-start content-center">
                                        <i class="bx bxs-copy-alt text-2xl text-pastel-600"></i>
                                        <label class="ml-2 mt-0.5 text-md text-main-color font-black">สไลด์สาร (
                                            ภาษา{{ $slide['language']['name_th'] }}
                                            )
                                            :</label>
                                    </div>
                                </div>
                                <div
                                    class="flex flex-col justify-center items-center h-48 p-5 m-2 text-gray-brown-400 {{ !empty($slide['file_name']) ? 'hover:text-red-500' : 'hover:text-gray-brown-500' }}  border-dashed rounded-lg border-gray-brown-400 border-2 rounded-2xl">
                                    <div class="flex justify-center mb-4">

                                        @if (!empty($slide['file_name']))
                                            <i class="bx bxs-file-pdf text-4xl"></i>
                                        @else
                                            <i class="bx bx-upload text-4xl"></i>
                                        @endif

                                    </div>
                                    <p
                                        class="text-gray-brown-400 {{ !empty($slide['file_name']) ? 'text-main-color' : '' }}">
                                        {{ !empty($slide['file_name']) ? $slide['file_name'] . '.PDF' : 'อัพโหลดไฟล์ PDF' }}
                                    </p>
                                </div>
                            </div>
                        @endforeach
                    @endif

                </div>
            </div>
            <div class="basis-1/2 content-end p-5">
                <button
                    class="w-full mt-auto bg-pastel-600 text-white py-2 px-4 rounded-2xl shadow-md text-base">บันทึก</button>
            </div>
        </div>
    </div>



</div>
