<div>

    <div class="flex flex-row gap-4">
        <div class="flex-1 justify-center items-center content-center h-32 text-xs mt-1 rounded-lg shadow px-auto py-auto  font-black transition duration-75 group hover:bg-main-color hover:text-white  hover:fill-white dark:text-white dark:hover:bg-main-color {{ isset($statusTab) && $statusTab == 0 ? 'bg-main-color text-white fill-white' : 'bg-white text-main-color fill-main-color' }} cursor-pointer" wire:click="changeStatusTab(0) ">
            <div class="flex justify-center">
                <svg class="st-status" viewBox="0 0 27 28" xmlns="http://www.w3.org/2000/svg">
                    <path d="M0.174907 13.9729C0.174907 12.1658 0.151732 10.3587 0.182356 8.55237C0.208841 6.98201 0.44224 5.45056 1.26328 4.06149C2.4013 2.13518 4.15014 1.16664 6.3004 0.825577C7.20089 0.682366 8.10966 0.66581 9.02091 0.667465C12.3166 0.674916 15.6124 0.655876 18.9081 0.677399C20.3077 0.686505 21.6865 0.87359 22.9661 1.50438C25.1693 2.58964 26.3007 4.4307 26.6748 6.79658C26.8197 7.71131 26.8346 8.63432 26.8321 9.55899C26.8246 12.8413 26.8445 16.1244 26.8222 19.4066C26.8122 20.8205 26.621 22.2121 25.9763 23.5026C24.8863 25.6856 23.0522 26.804 20.7041 27.1756C19.7763 27.323 18.8394 27.3354 17.9008 27.3329C14.6324 27.3255 11.3648 27.3437 8.09641 27.323C6.73906 27.3147 5.39908 27.1384 4.15014 26.5482C1.86912 25.4704 0.697158 23.5978 0.323057 21.1616C0.179045 20.2195 0.16663 19.2692 0.172424 18.3172C0.1807 16.8694 0.174907 15.4207 0.174907 13.9729ZM17.3579 10.7717C18.5017 10.7717 19.6455 10.7759 20.7902 10.7701C21.3853 10.7668 21.7569 10.4224 21.7701 9.88597C21.7842 9.2974 21.4556 8.95634 20.8134 8.95386C18.539 8.94475 16.2654 8.94558 13.991 8.95303C13.3479 8.95551 13.0028 9.29326 13.0069 9.86776C13.0102 10.4207 13.3876 10.7676 14.0092 10.7709C15.1257 10.7767 16.2422 10.7726 17.3587 10.7726L17.3579 10.7717ZM17.3877 20.0366C18.5315 20.0366 19.6745 20.0432 20.8183 20.0341C21.4126 20.0291 21.7718 19.6732 21.7693 19.1252C21.7677 18.5656 21.4209 18.2237 20.82 18.2229C18.5332 18.2179 16.2455 18.2204 13.9587 18.2212C13.7642 18.2212 13.5772 18.2386 13.4067 18.3545C13.0648 18.5871 12.9167 18.9936 13.0342 19.4108C13.1319 19.7576 13.4944 20.03 13.9165 20.0333C15.0736 20.0416 16.2315 20.0358 17.3885 20.0374L17.3877 20.0366ZM6.16135 18.2245C5.77401 18.2113 5.48929 18.3586 5.33204 18.6889C5.16734 19.0349 5.15906 19.3992 5.42556 19.6964C5.7649 20.0747 6.12494 20.4373 6.49904 20.7808C6.87314 21.1252 7.4078 21.145 7.77446 20.7891C8.79247 19.8023 9.79228 18.7957 10.7838 17.7808C11.0743 17.4828 11.1 16.9919 10.9063 16.6658C10.6977 16.3148 10.3087 16.1616 9.86677 16.2527C9.62344 16.3032 9.45377 16.4646 9.28741 16.6302C8.6824 17.2328 8.06993 17.828 7.47981 18.4455C7.24641 18.6897 7.06515 18.77 6.81024 18.482C6.64057 18.2907 6.40468 18.2013 6.16052 18.2229L6.16135 18.2245ZM6.19363 8.958C5.79718 8.95469 5.48847 9.06065 5.33204 9.4017C5.17396 9.74607 5.17313 10.0962 5.41315 10.4174C5.70448 10.8065 6.09348 11.0987 6.432 11.4406C6.87645 11.8901 7.39291 11.8893 7.84895 11.4514C8.25615 11.0606 8.65343 10.6592 9.05236 10.2593C9.61682 9.69392 10.1838 9.13184 10.74 8.55816C11.0603 8.22704 11.1157 7.73118 10.898 7.38019C10.682 7.03168 10.2483 6.88433 9.8047 7.00353C9.5953 7.05983 9.4455 7.19973 9.299 7.34708C8.6766 7.97125 8.04841 8.58962 7.43346 9.22041C7.23565 9.42323 7.07591 9.49111 6.85658 9.25022C6.6745 9.04906 6.43117 8.95055 6.19446 8.95717L6.19363 8.958Z" />
                </svg>
            </div>
            <div class="text-lg font-normal text-center">ทั้งหมด</div>
            <div class="text-md font-normal text-center">(150)</div>
        </div>

        <div class="flex-1 justify-center items-center content-center h-32 text-xs mt-1  rounded-lg shadow px-auto py-auto text-main-color font-black transition duration-75 group hover:bg-main-color hover:text-white fill-main-color hover:fill-white dark:text-white dark:hover:bg-main-color {{ isset($statusTab) && $statusTab == 1 ? 'bg-main-color text-white fill-white' : 'bg-white text-main-color fill-main-color' }} cursor-pointer" wire:click="changeStatusTab(1)">
            <div class="flex justify-center">
                <svg class="st-status" viewBox="0 0 22 28" xmlns="http://www.w3.org/2000/svg">
                    <path d="M11.1048 8.33647C9.95921 8.33647 8.81102 8.33905 7.66542 8.33647C6.3521 8.33131 5.40517 7.3818 5.39742 6.0659C5.39226 5.45956 5.39226 4.85321 5.39742 4.24687C5.40517 3.65084 5.71995 3.27929 6.31339 3.20447C6.6385 3.16319 6.97134 3.15803 7.29903 3.17609C7.60865 3.19415 7.76346 3.07804 7.89505 2.79422C8.77232 0.931318 10.7513 0.175322 12.5936 0.995823C13.396 1.35189 13.9869 1.94791 14.3275 2.75551C14.4616 3.07288 14.6397 3.19673 14.9803 3.17609C15.3079 3.15544 15.6408 3.16577 15.9659 3.20963C16.4665 3.27671 16.7941 3.58376 16.8483 4.08173C16.9335 4.8945 16.9619 5.71758 16.8122 6.52518C16.6109 7.61144 15.6976 8.33131 14.5829 8.33389C13.4244 8.33905 12.2633 8.33389 11.1048 8.33389V8.33647Z" />
                    <path d="M21.9001 7.71733C21.882 5.94215 20.1455 4.39404 18.3626 4.47918C18.102 4.49209 18.0091 4.59529 18.0091 4.83525C18.0091 5.31001 18.0143 5.78476 18.0014 6.25952C17.9575 7.93148 16.6623 9.37897 14.9929 9.4796C12.5185 9.63183 10.0364 9.59829 7.56195 9.5054C5.62164 9.43316 4.45023 8.22821 4.21027 6.3008C4.15609 5.85959 4.16641 5.40289 4.19221 4.9591C4.21544 4.56433 4.05804 4.47144 3.68908 4.4766C1.9268 4.50241 0.347725 6.0531 0.339985 7.82828C0.327084 10.5168 0.337405 13.208 0.337405 15.8965C0.337405 18.1181 0.337405 20.3371 0.337405 22.5586C0.337405 22.5792 0.334824 22.5999 0.334824 22.6205V23.89C0.332244 25.7864 1.87004 27.3242 3.76648 27.3242H4.63601C6.41892 27.3242 8.20183 27.3242 9.98475 27.3242H12.6552C12.8513 27.3294 12.9855 27.3423 13.0784 27.3242H18.4839C20.3803 27.3242 21.9181 25.7864 21.9181 23.89V15.7366C21.9156 13.0635 21.9336 10.3904 21.9027 7.71991L21.9001 7.71733ZM4.37025 13.1925C4.52506 12.9577 4.75212 12.8313 5.02562 12.7926C5.16753 12.7719 5.3146 12.7719 5.45909 12.7719C9.24165 12.7719 13.0242 12.7719 16.8068 12.7719C16.9642 12.7719 17.1241 12.7745 17.279 12.8055C17.7873 12.9113 18.0504 13.2905 17.9988 13.8195C17.955 14.2762 17.6505 14.5548 17.1345 14.5548C15.1322 14.5626 13.1274 14.5574 11.1252 14.5574C9.13586 14.5574 7.14653 14.5574 5.15463 14.56C4.7805 14.56 4.48636 14.4336 4.3109 14.0878C4.15351 13.7782 4.18189 13.4763 4.37283 13.1899L4.37025 13.1925ZM5.42555 16.8796C9.23391 16.8796 13.0449 16.8796 16.8532 16.8796C17.6299 16.8796 18.0091 17.1944 18.0014 17.8162C17.9937 18.3864 17.6221 18.7141 16.9358 18.7193C15.6302 18.727 14.3246 18.7219 13.0216 18.7219C12.3766 18.7219 11.729 18.7219 11.0839 18.7219C9.19779 18.7219 7.31425 18.7219 5.42813 18.7219C4.66955 18.7219 4.18189 18.3451 4.19995 17.7827C4.21802 17.2228 4.67987 16.8796 5.42555 16.8796ZM17.0803 22.8063H5.12366C4.61278 22.8063 4.19995 22.3935 4.19995 21.8826C4.19995 21.3717 4.61278 20.9589 5.12366 20.9589H17.0803C17.5886 20.9589 18.004 21.3717 18.004 21.8826C18.004 22.3935 17.5912 22.8063 17.0803 22.8063Z" />
                </svg>
            </div>
            <div class="text-lg font-normal text-center">รายการใหม่</div>
            <div class="text-md font-normal text-center">(10)</div>
        </div>

        <div class="flex-1 justify-center items-center content-center h-32 text-xs mt-1  rounded-lg shadow px-auto py-auto text-main-color font-black transition duration-75 group hover:bg-main-color hover:text-white fill-main-color hover:fill-white dark:text-white dark:hover:bg-main-color {{ isset($statusTab) && $statusTab == 2 ? 'bg-main-color text-white fill-white' : 'bg-white text-main-color fill-main-color' }} cursor-pointer" wire:click="changeStatusTab(2)">
            <div class="flex justify-center">
                <svg class="st-status" viewBox="0 0 28 27" xmlns="http://www.w3.org/2000/svg">
                    <path d="M27.333 13.4935C27.1411 17.9798 25.162 21.6074 21.1846 24.1718C20.3592 24.7037 19.4013 24.5225 18.8903 23.7677C18.3794 23.0114 18.6144 22.1266 19.4537 21.5851C22.2705 19.7665 23.9043 17.2399 24.0638 13.9667C24.2642 9.86446 22.41 6.79261 18.7139 4.76229C17.769 4.243 16.741 3.9399 15.6659 3.76978C14.5646 3.5952 13.9982 2.98083 14.0552 2.0745C14.1068 1.25584 14.9361 0.573863 15.7784 0.677125C18.2492 0.980968 20.4456 1.91553 22.3722 3.42359C24.5917 5.16122 26.0745 7.37355 26.8436 10.0301C27.1634 11.1341 27.2713 12.2647 27.333 13.4935Z" />
                    <path d="M14.0854 26.2222C8.29311 26.1717 3.4171 22.7997 1.49198 17.7815C0.965616 16.4086 0.734416 14.9867 0.668139 13.5344C0.633459 12.7677 1.15443 12.0746 1.85728 11.9015C2.59172 11.7202 3.32771 12.0308 3.68838 12.6711C3.90725 13.0597 3.86794 13.492 3.89723 13.9058C4.19239 18.1173 6.97758 21.5353 11.1569 22.744C12.7429 23.2031 14.3667 23.2358 15.9928 22.9394C16.9115 22.7715 17.6852 23.1771 17.9434 23.978C18.217 24.8286 17.6798 25.7126 16.7789 25.9251C15.8618 26.142 14.9255 26.1643 14.0854 26.2222Z" />
                    <path d="M11.7016 2.71337C11.7062 3.42506 11.3085 3.94211 10.5109 4.22515C9.58918 4.55202 8.73529 4.99701 7.94921 5.56384C6.50883 6.60092 5.43221 7.91732 4.71241 9.50265C4.51281 9.94244 4.28315 10.3458 3.79994 10.5561C3.19189 10.8213 2.52372 10.7247 2.04668 10.2938C1.54652 9.84141 1.38776 9.20475 1.64979 8.59929C3.18187 5.06165 5.81986 2.62868 9.53986 1.28999C10.6065 0.906653 11.6939 1.63766 11.7016 2.71262V2.71337Z" />
                </svg>
            </div>
            <div class="text-lg font-normal text-center">เตรียมจัดส่ง</div>
            <div class="text-md font-normal text-center">(10)</div>
        </div>

        <div class="flex-1 justify-center items-center content-center h-32 text-xs mt-1  rounded-lg shadow px-auto py-auto text-main-color font-black transition duration-75 group hover:bg-main-color hover:text-white fill-main-color hover:fill-white dark:text-white dark:hover:bg-main-color {{ isset($statusTab) && $statusTab == 3 ? 'bg-main-color text-white fill-white' : 'bg-white text-main-color fill-main-color' }} cursor-pointer" wire:click="changeStatusTab(3)">
            <div class="flex justify-center">
                <svg class="st-status" viewBox="0 0 30 20" xmlns="http://www.w3.org/2000/svg">
                    <path d="M0.000308002 8.97025C0.000308002 6.39248 0.000308002 3.81471 0.000308002 1.23694C0.00108763 0.372372 0.357378 0.00758579 1.25005 0.0068274C6.19992 0.00151866 11.149 0.0068274 16.0981 1.88293e-06C16.7249 -0.000756508 17.1607 0.227519 17.4289 0.793278C17.7338 1.43488 18.0893 2.05372 18.3933 2.69532C18.5181 2.96 18.6896 3.02977 18.9679 3.02826C20.4359 3.0184 21.904 3.02219 23.3712 3.02446C24.3123 3.02598 24.7605 3.40366 24.6724 4.31524C24.561 5.46572 25.1394 6.38793 25.548 7.37232C25.9027 8.22702 26.2988 9.0658 26.6558 9.91899C26.804 10.2724 27.0254 10.5356 27.3458 10.7563C28.0553 11.2462 28.739 11.771 29.4414 12.2708C29.8289 12.5461 30.009 12.8889 29.9997 13.3674C29.9778 14.5171 29.995 15.6668 29.9911 16.8173C29.9887 17.5431 29.6067 17.9541 28.8684 17.9109C28.2276 17.8738 27.8611 18.0353 27.4947 18.6223C26.2551 20.61 23.2216 20.4007 22.1316 18.2924C21.9843 18.008 21.8167 17.9185 21.5056 17.9185C17.5435 17.9268 13.5814 17.9261 9.61937 17.9185C9.32701 17.9185 9.16329 17.9905 9.01984 18.2651C8.44291 19.3738 7.50034 19.9851 6.21395 19.9828C4.91119 19.9806 3.96784 19.3572 3.3878 18.2317C3.27085 18.005 3.13598 17.9139 2.88026 17.9193C2.28306 17.9314 1.68509 17.9284 1.08789 17.9208C0.3948 17.9124 0.00342652 17.531 0.00264689 16.8552C-0.00125126 14.2274 0.000308002 11.5988 0.000308002 8.97025ZM21.9757 10.5447V10.5462C22.7803 10.5462 23.5849 10.55 24.3894 10.5447C24.8923 10.5416 24.9937 10.393 24.791 9.93492C24.2538 8.7177 23.7041 7.50579 23.167 6.28782C23.05 6.02314 22.8738 5.9018 22.5706 5.90483C21.5719 5.91469 20.5724 5.91697 19.5729 5.90407C19.2111 5.89952 19.056 6.02617 19.0599 6.38944C19.0716 7.62638 19.0708 8.86331 19.0599 10.1002C19.0568 10.4286 19.194 10.5515 19.523 10.5477C20.34 10.5378 21.1579 10.5447 21.9757 10.5447ZM6.21551 17.9761C6.82674 17.9761 7.30543 17.5173 7.30933 16.9273C7.31245 16.3509 6.81271 15.8693 6.21317 15.8716C5.61598 15.8739 5.11701 16.3585 5.12247 16.9303C5.12871 17.5287 5.59571 17.9754 6.21551 17.9754V17.9761ZM25.9924 16.9205C25.9869 16.3213 25.5129 15.864 24.9063 15.8724C24.299 15.8807 23.8289 16.3464 23.8297 16.9387C23.8304 17.5279 24.3076 17.9777 24.9274 17.9754C25.5488 17.9731 25.9978 17.5279 25.9924 16.9197V16.9205Z" />
                </svg>
            </div>
            <div class="text-lg font-normal text-center">กำลังจัดส่ง</div>
            <div class="text-md font-normal text-center">(10)</div>
        </div>

        <div class="flex-1 justify-center items-center content-center h-32 text-xs mt-1  rounded-lg shadow px-auto py-auto text-main-color font-black transition duration-75 group hover:bg-main-color hover:text-white fill-main-color hover:fill-white dark:text-white dark:hover:bg-main-color {{ isset($statusTab) && $statusTab == 4 ? 'bg-main-color text-white fill-white' : 'bg-white text-main-color fill-main-color' }} cursor-pointer" wire:click="changeStatusTab(4)">
            <div class="flex justify-center">
                <svg class="st-status" viewBox="0 0 28 20" xmlns="http://www.w3.org/2000/svg">
                    <path d="M27.3265 3.29308C27.3416 2.11603 26.9167 1.24906 26.0279 0.631934C24.5635 -0.385563 23.0841 -0.18387 21.5776 1.30625C18.2601 4.58753 14.9518 7.87483 11.6856 11.2073C10.9233 11.9839 10.393 12.1134 9.61863 11.2464C8.61829 10.1266 7.51851 9.09101 6.43682 8.04341C4.89713 6.55629 2.89343 6.43889 1.61589 7.73033C0.256985 9.10305 0.356417 10.9424 1.91719 12.5228C3.96308 14.5939 6.018 16.65 8.09401 18.691C9.82955 20.3979 11.4566 20.4641 13.2223 18.7211C17.6123 14.3862 21.9331 9.98508 26.281 5.60804C26.9438 4.94275 27.3777 4.17511 27.3295 3.29308H27.3265Z" />
                </svg>
            </div>
            <div class="text-lg font-normal text-center">สำเร็จ</div>
            <div class="text-md font-normal text-center">(120)</div>
        </div>
    </div>
</div>
