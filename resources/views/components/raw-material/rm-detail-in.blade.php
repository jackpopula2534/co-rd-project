            <ul>

                <li
                    class="w-full px-4 py-2 border-b border-gray-200 rounded-t-lg dark:border-gray-600 text-main-color font-medium text-xs">

                    <div class="grid md:grid-cols-2 gap-2 pb-1">
                        <div class="relative z-0 w-full group">
                            <div class="flex flex-row justify-start content-center">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                    style="fill: #e0715e;transform: ;msFilter:;">
                                    <path
                                        d="M4 11h6a1 1 0 0 0 1-1V4a1 1 0 0 0-1-1H4a1 1 0 0 0-1 1v6a1 1 0 0 0 1 1zm10 0h6a1 1 0 0 0 1-1V4a1 1 0 0 0-1-1h-6a1 1 0 0 0-1 1v6a1 1 0 0 0 1 1zM4 21h6a1 1 0 0 0 1-1v-6a1 1 0 0 0-1-1H4a1 1 0 0 0-1 1v6a1 1 0 0 0 1 1zm13 0c2.206 0 4-1.794 4-4s-1.794-4-4-4-4 1.794-4 4 1.794 4 4 4z">
                                    </path>
                                </svg>
                                <label class="ml-2 mt-1 text-md">รหัสสาร</label>
                            </div>
                        </div>
                        <div class="relative z-0 w-full group">
                            <label class="">{{ $rmDetail['code'] ?? '-' }}</label>
                        </div>
                    </div>

                    <div class="grid md:grid-cols-2 gap-2 pb-1">
                        <div class="relative z-0 w-full group">
                            <div class="flex flex-row justify-start content-center">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" style="fill: #e0715e;transform: ;msFilter:;">
                                    <path
                                        d="M4 11h6a1 1 0 0 0 1-1V4a1 1 0 0 0-1-1H4a1 1 0 0 0-1 1v6a1 1 0 0 0 1 1zm10 0h6a1 1 0 0 0 1-1V4a1 1 0 0 0-1-1h-6a1 1 0 0 0-1 1v6a1 1 0 0 0 1 1zM4 21h6a1 1 0 0 0 1-1v-6a1 1 0 0 0-1-1H4a1 1 0 0 0-1 1v6a1 1 0 0 0 1 1zm13 0c2.206 0 4-1.794 4-4s-1.794-4-4-4-4 1.794-4 4 1.794 4 4 4z">
                                    </path>
                                </svg>
                                <label class="ml-2 mt-1 text-md">ชื่อสาร</label>
                            </div>
                        </div>
                        <div class="relative z-0 w-full group">
                            <label class="">{{ $rmDetail['name'] ?? '-' }}</label>
                        </div>
                    </div>

                </li>
            </ul>
