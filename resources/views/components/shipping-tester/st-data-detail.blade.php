<div>

    <div class="flex flex-row w-full my-4 px-4">
        @if (empty($stDetail))
        <x-raw-material.error.msg-error :msg="'ไม่ได้กำหนดรายละเอียด'" />
        @else
        <div class="flex w-full gap-4">
            <div class="basis-2/5 bg-no-repeat bg-cover bg-center rounded-lg" style="background-image: url(' {{ $stDetail['img'] ?? '-' }}')"></div>
            <div class="basis-3/5">
                <div class="st-detail1">
                    <svg class="w-4 h-4" viewBox="0 0 16 11" xmlns="http://www.w3.org/2000/svg">
                        <path d="M8.00748 0C10.3902 0 12.7737 0 15.1564 0C15.8045 0 15.9992 0.196152 15.9992 0.849165C15.9992 3.83862 15.9992 6.82808 15.9992 9.81754C15.9992 10.4705 15.8045 10.6667 15.1555 10.6667C10.3794 10.6667 5.60408 10.6667 0.827932 10.6667C0.198903 10.6667 0 10.4656 0 9.83243C0 6.83305 0 3.83366 0 0.834267C0 0.201946 0.199731 0 0.828761 0C3.22222 0 5.61485 0 8.00748 0ZM3.3109 5.34659C3.3109 4.50157 3.3109 3.65737 3.3109 2.81234C3.3109 2.51853 3.22471 2.26444 2.94293 2.12622C2.51114 1.91435 2.06527 2.22968 2.05615 2.77179C2.04289 3.60688 2.05118 4.44198 2.05118 5.27624C2.05118 6.1312 2.05118 6.98533 2.05118 7.84029C2.05118 8.14569 2.13489 8.40971 2.43324 8.5471C2.87 8.74822 3.30012 8.42792 3.30758 7.88167C3.31836 7.03665 3.31007 6.19245 3.3109 5.34742V5.34659ZM7.371 5.32011H7.37017C7.37017 6.13534 7.37017 6.95057 7.37017 7.7658C7.37017 7.91395 7.37514 8.06044 7.42818 8.20114C7.58979 8.62738 8.12434 8.73498 8.44093 8.40723C8.60502 8.23756 8.62988 8.02651 8.62988 7.80636C8.62988 6.8827 8.62988 5.95988 8.62988 5.03623C8.62988 4.29962 8.62988 3.56302 8.62988 2.82641C8.62988 2.52184 8.54618 2.25699 8.24782 2.1196C7.81107 1.91848 7.38094 2.23961 7.37348 2.78503C7.36271 3.63006 7.371 4.47425 7.371 5.31928V5.32011ZM13.948 5.34825C13.948 4.50322 13.948 3.65902 13.948 2.814C13.948 2.52018 13.8627 2.26609 13.5817 2.12705C13.1499 1.91352 12.7032 2.22968 12.6933 2.77013C12.68 3.5357 12.6883 4.3021 12.6883 5.0685C12.6883 5.99216 12.6883 6.91498 12.6883 7.83863C12.6883 8.14321 12.7712 8.40806 13.0687 8.54627C13.5047 8.74905 13.9373 8.42875 13.9439 7.88333C13.9547 7.03913 13.9472 6.1941 13.9472 5.34908L13.948 5.34825ZM5.96873 4.02401C5.96873 3.60192 5.97785 3.17982 5.96625 2.75772C5.95547 2.35134 5.69524 2.06829 5.35214 2.06001C5.00074 2.05173 4.72062 2.34389 4.71565 2.76434C4.7057 3.58867 4.7057 4.41301 4.71565 5.23734C4.72062 5.65862 4.99328 5.9516 5.34468 5.94912C5.6969 5.94664 5.95796 5.65448 5.96791 5.22989C5.97702 4.82766 5.96956 4.42542 5.96956 4.02236L5.96873 4.02401ZM10.0305 3.99587C10.0305 4.39811 10.0305 4.80035 10.0305 5.20341C10.0305 5.37308 10.0529 5.54109 10.1581 5.67848C10.328 5.90029 10.5485 6.00126 10.8302 5.91684C11.1187 5.83077 11.2819 5.60399 11.2852 5.23652C11.2927 4.42211 11.2935 3.60688 11.2852 2.79248C11.2811 2.353 11.0059 2.05091 10.6454 2.06001C10.2932 2.06911 10.0396 2.3621 10.0313 2.78834C10.023 3.19058 10.0297 3.59281 10.0297 3.99587H10.0305ZM5.95796 7.98844C5.95796 7.66235 5.65712 7.36688 5.33225 7.37267C5.01649 7.37846 4.73222 7.65986 4.72311 7.97602C4.71399 8.29963 5.00737 8.60255 5.33473 8.60669C5.66043 8.61083 5.95879 8.31536 5.95879 7.98927L5.95796 7.98844ZM10.6653 7.37267C10.3396 7.36853 10.0404 7.66483 10.0413 7.99092C10.0413 8.3046 10.3214 8.59262 10.638 8.60669C10.962 8.62076 11.267 8.33191 11.2761 8.00334C11.2852 7.6789 10.9927 7.37681 10.6653 7.37267Z" />
                    </svg>
                    รหัส : {{ $stDetail['code'] ?? '-' }}
                </div>
                <div class="st-detail1">
                    <svg class="w-4 h-4" viewBox="0 0 15 15" xmlns="http://www.w3.org/2000/svg">
                        <path d="M7.52752 14.9985C5.58423 14.9985 3.64093 14.9999 1.69764 14.9985C0.672575 14.9976 0.01116 14.3384 0.01116 13.3165C0.00982471 9.44459 0.024958 5.57269 3.25662e-05 1.70123C-0.0057537 0.767415 0.760259 -0.0382119 1.71143 0.00140179C2.65905 0.0410155 3.60977 0.00985865 4.55917 0.0103037C4.84893 0.0103037 4.85026 0.011639 4.85026 0.309409C4.85071 1.75598 4.85071 3.2021 4.85026 4.64867C4.85026 4.9046 4.88676 5.15385 5.01984 5.37596C5.23572 5.73648 5.58334 5.87714 5.97992 5.88114C6.99608 5.89182 8.01224 5.89494 9.02839 5.88114C9.73521 5.87179 10.1549 5.42136 10.1572 4.69362C10.1616 3.2475 10.1585 1.80093 10.1585 0.354364C10.1585 0.124991 10.2702 0.0101554 10.4937 0.00985865C11.4577 0.00985865 12.4223 0.00718806 13.3863 0.0107488C14.3068 0.0143096 14.9963 0.695309 14.9972 1.61087C14.9998 5.54198 15.0003 9.47308 14.9972 13.4042C14.9963 14.3059 14.305 14.9945 13.4019 14.9967C11.4439 15.0007 9.48551 14.9981 7.52752 14.9981V14.9985ZM4.83513 10.6926C5.47918 10.6926 6.12369 10.6931 6.76774 10.6926C7.21017 10.6922 7.46744 10.5075 7.47723 10.1852C7.48747 9.86031 7.21596 9.65824 6.76552 9.65824C5.46984 9.65779 4.17371 9.65868 2.87803 9.6569C2.73516 9.6569 2.59851 9.67337 2.46854 9.73658C2.28783 9.82382 2.20104 9.98405 2.19748 10.1652C2.19347 10.357 2.28383 10.5226 2.47121 10.6143C2.59406 10.6744 2.72269 10.694 2.85845 10.6935C3.51764 10.6913 4.17638 10.6926 4.83557 10.6926H4.83513ZM4.00947 12.8287C4.42386 12.8287 4.83824 12.8305 5.25263 12.8278C5.46005 12.8264 5.65233 12.7761 5.77606 12.5923C5.882 12.4348 5.90381 12.2683 5.81123 12.0898C5.70173 11.8788 5.51479 11.8049 5.29937 11.7978C4.98157 11.7871 4.66288 11.7943 4.34463 11.7943C3.81942 11.7943 3.29376 11.7854 2.76854 11.7983C2.30564 11.8094 2.05772 12.2086 2.27626 12.5718C2.39644 12.7717 2.59495 12.826 2.81038 12.8282C3.21008 12.8318 3.60977 12.8291 4.00903 12.8291L4.00947 12.8287Z" />
                        <path d="M5.88592 2.41708C5.88592 1.6978 5.8917 0.978079 5.88191 0.259247C5.87924 0.0616234 5.94601 0.00509603 6.13829 0.00687642C7.05029 0.0148882 7.96274 0.0153333 8.87475 0.00687642C9.07237 0.00509603 9.12801 0.0718607 9.12712 0.263698C9.12089 1.70982 9.12044 3.15594 9.12712 4.60206C9.12801 4.79969 9.06303 4.85622 8.87074 4.85443C7.95874 4.84642 7.04629 4.84598 6.13428 4.85443C5.93666 4.85622 5.87969 4.7899 5.88191 4.59761C5.89081 3.87077 5.88547 3.14392 5.88547 2.41753L5.88592 2.41708Z" />
                    </svg>

                    ชื่อ : {{ $stDetail['pr_name'] ?? '-' }}
                </div>
                <div class="st-detail1">
                    <svg class="w-4 h-4" viewBox="0 0 16 17" xmlns="http://www.w3.org/2000/svg">
                        <path d="M14.535 7.51971C14.535 9.75314 14.535 11.9866 14.535 14.2184C14.535 14.4182 14.6339 14.5181 14.8315 14.5181C14.9749 14.5181 15.1182 14.5165 15.2616 14.5181C15.6574 14.5279 15.9458 14.7902 15.9947 15.1811C16.0403 15.546 15.7894 15.9028 15.418 15.9891C15.3023 16.0168 15.1785 16.025 15.0596 16.025C14.0105 16.0282 12.963 16.0266 11.9139 16.025C11.5881 16.025 11.5767 16.012 11.5767 15.6764C11.5767 14.1369 11.5767 12.5975 11.5767 11.0596C11.5767 10.4683 11.3144 10.2044 10.7247 10.2044C8.90665 10.2044 7.08863 10.2044 5.2706 10.2044C4.69229 10.2044 4.42512 10.4715 4.42512 11.0433C4.42512 12.5893 4.42512 14.1369 4.42512 15.6829C4.42512 16.0136 4.41209 16.0266 4.08139 16.0266C3.01762 16.0266 1.95385 16.0299 0.890081 16.0266C0.39322 16.025 0.0885874 15.7937 0.012022 15.3783C-0.0661725 14.958 0.246606 14.5491 0.673417 14.5214C0.785822 14.5132 0.899855 14.5197 1.01226 14.5181C1.53193 14.5116 1.45699 14.5849 1.46351 14.0555C1.46351 14.0245 1.46351 13.9952 1.46351 13.9642C1.46351 9.61793 1.46351 5.27324 1.46351 0.926931C1.46351 0.267165 1.7323 0 2.40021 0C6.11934 0 9.83847 0 13.5576 0C13.67 0 13.784 0.00325766 13.8948 0.0211772C14.2972 0.0879684 14.5334 0.363278 14.535 0.772171C14.5383 1.66978 14.535 2.56739 14.535 3.46499C14.535 4.81548 14.535 6.16596 14.535 7.51645V7.51971ZM4.42187 6.9251C4.42187 7.05217 4.41861 7.18086 4.42187 7.30793C4.4349 7.67447 4.6874 7.94326 5.04905 7.98399C5.3488 8.0182 5.67787 7.79176 5.75606 7.46758C5.8424 7.11407 5.84077 6.74916 5.75769 6.39566C5.67949 6.06008 5.34228 5.83201 5.03439 5.87436C4.66785 5.92486 4.43164 6.18877 4.42024 6.56182C4.41698 6.68237 4.42024 6.80292 4.42024 6.92347L4.42187 6.9251ZM11.5718 6.9251C11.5718 6.80455 11.575 6.684 11.5718 6.56345C11.5604 6.1904 11.3242 5.92649 10.956 5.87599C10.6497 5.83364 10.3141 6.0617 10.2327 6.39729C10.1496 6.74428 10.1512 7.10104 10.2294 7.44803C10.306 7.78687 10.6351 8.01982 10.9413 7.98561C11.3128 7.94326 11.5587 7.67121 11.5701 7.28675C11.5734 7.1662 11.5701 7.04565 11.5701 6.9251H11.5718ZM4.4235 3.29231C4.4235 3.43567 4.41698 3.57903 4.4235 3.72238C4.43816 4.02376 4.65645 4.28441 4.93013 4.33817C5.27386 4.40496 5.60456 4.26323 5.7137 3.95371C5.86358 3.53179 5.86358 3.09031 5.71696 2.66839C5.60619 2.35072 5.2983 2.21714 4.93828 2.28067C4.64505 2.3328 4.43653 2.58368 4.42187 2.90786C4.41698 3.03655 4.42187 3.16362 4.42187 3.29231H4.4235ZM11.5701 3.30209C11.5701 3.16688 11.5767 3.03004 11.5701 2.89483C11.5539 2.58368 11.347 2.33606 11.0635 2.2823C10.7165 2.21714 10.4021 2.33932 10.2881 2.64069C10.1235 3.08217 10.1187 3.54482 10.293 3.98629C10.4086 4.27952 10.7475 4.40822 11.0749 4.33491C11.3405 4.27626 11.5522 4.0205 11.5685 3.73053C11.5767 3.58717 11.5685 3.44382 11.5685 3.30046L11.5701 3.30209ZM7.31832 3.2858C7.31832 3.42101 7.31506 3.55785 7.31832 3.69306C7.32972 4.07915 7.61481 4.3512 8.00252 4.34957C8.37721 4.34794 8.66392 4.07752 8.67369 3.70446C8.68021 3.44056 8.68021 3.17665 8.67369 2.91275C8.66392 2.53318 8.38535 2.27253 8.00089 2.2709C7.60503 2.26927 7.32972 2.53155 7.31669 2.92578C7.31343 3.04633 7.31669 3.16688 7.31669 3.28743L7.31832 3.2858ZM8.67532 6.93651C8.67532 6.80129 8.68021 6.66445 8.67532 6.52924C8.65903 6.16596 8.3544 5.86948 7.99927 5.86948C7.64576 5.86948 7.33461 6.16433 7.32158 6.52761C7.31181 6.79152 7.31343 7.05543 7.32158 7.31933C7.33298 7.69564 7.64902 7.99865 8.00904 7.9905C8.36743 7.98236 8.66229 7.68913 8.67695 7.32259C8.68184 7.1939 8.67695 7.06683 8.67695 6.93813L8.67532 6.93651Z" />
                        <path d="M10.187 13.8322C10.187 14.4806 10.1821 15.129 10.1903 15.7773C10.1919 15.963 10.1284 16.0331 9.94267 16.0315C8.64595 16.0282 7.34922 16.0282 6.0525 16.0315C5.87004 16.0315 5.80162 15.9679 5.80325 15.7806C5.80977 14.4692 5.80977 13.1578 5.80325 11.8464C5.80325 11.6607 5.86515 11.5923 6.05087 11.5923C7.34759 11.5972 8.64432 11.5955 9.94104 11.5923C10.1235 11.5923 10.1935 11.6558 10.1919 11.8432C10.1838 12.5062 10.1887 13.1692 10.1887 13.8339L10.187 13.8322Z" />
                    </svg>

                    บริษัท : {{ $stDetail['company']['name'] ?? '-' }}
                </div>
                <div class="st-detail1">
                    <svg class="w-4 h-4" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg">
                        <path d="M7.47471 0.00248507C7.84187 -0.00764915 8.13413 0.124096 8.37403 0.373018C9.50838 1.54922 10.6458 2.72226 11.7698 3.90859C12.3038 4.47231 12.291 5.23555 11.7521 5.80053C10.6531 6.9533 9.54857 8.101 8.44101 9.24553C7.84491 9.86182 7.13069 9.86435 6.5346 9.2487C5.44104 8.12 4.35297 6.98497 3.2655 5.8493C2.65601 5.21338 2.64931 4.49068 3.26002 3.84526C4.16361 2.89137 5.07815 1.94952 5.98843 1.00261C6.18936 0.793588 6.38725 0.582036 6.59305 0.378718C6.84574 0.131063 7.13861 -0.0215837 7.47471 0.00248507ZM5.70043 4.32283C5.70043 4.49891 5.71017 4.60532 5.6986 4.7092C5.66633 4.99739 5.77897 5.1019 6.05967 5.0962C6.3154 5.09113 6.44326 5.01323 6.41769 4.73137C6.40734 4.61672 6.41647 4.49955 6.41647 4.38364C6.41647 4.22212 6.41526 4.04794 6.59122 3.98333C6.74953 3.9257 6.82077 4.08784 6.90845 4.17779C7.5216 4.80801 8.13292 5.4395 8.73632 6.07859C8.9062 6.25847 9.02493 6.17423 9.13331 6.02791C9.2283 5.8987 9.49681 5.8113 9.27214 5.57757C8.49155 4.76367 7.71035 3.95103 6.9255 3.14219C6.78119 2.99335 6.57965 2.94078 6.42743 3.08012C6.0481 3.42849 5.5543 3.72428 5.70043 4.3222V4.32283Z" />
                        <path d="M11.7151 15.9981C10.9345 15.9981 10.1539 16.0025 9.37329 15.9968C8.56104 15.9905 8.05018 15.4553 8.04714 14.6065C8.04227 13.3093 8.05079 12.0128 8.04105 10.7156C8.03922 10.4679 8.11046 10.3273 8.34123 10.2431C8.56225 10.1627 8.73883 9.99544 8.90445 9.82126C9.29718 9.40956 9.69599 9.00419 10.0845 8.58869C10.2282 8.43477 10.3834 8.3613 10.5935 8.36256C11.7491 8.37017 12.9048 8.3613 14.0605 8.36763C14.8581 8.37207 15.3769 8.90728 15.3799 9.73259C15.386 11.3667 15.386 13.0015 15.3799 14.6356C15.3769 15.4591 14.8563 15.9873 14.0562 15.9968C13.661 16.0019 13.2653 15.9981 12.8701 15.9981C12.4847 15.9981 12.0999 15.9981 11.7144 15.9981H11.7151ZM11.2005 12.5505C11.2005 12.5505 11.2005 12.5531 11.2005 12.5543C11.424 12.5543 11.6469 12.5588 11.8703 12.5531C12.0743 12.5474 12.165 12.6367 12.1601 12.8546C12.1522 13.2346 12.1675 13.6146 12.1565 13.994C12.1492 14.2493 12.2984 14.2613 12.4737 14.2486C12.643 14.2366 12.8664 14.319 12.8646 14.0042C12.8622 13.6982 12.8646 13.3923 12.8658 13.0857C12.8664 12.5607 12.8664 12.5467 13.3603 12.5581C13.6276 12.5645 13.711 12.4714 13.7104 12.1939C13.7104 11.9159 13.6458 11.767 13.3536 11.8088C13.2939 11.8171 13.2318 11.8057 13.1709 11.8101C12.9493 11.8266 12.8585 11.7208 12.8634 11.4921C12.8713 11.1438 12.8561 10.7954 12.8677 10.4477C12.8756 10.2108 12.8074 10.1025 12.5584 10.1088C12.1626 10.119 12.1589 10.1082 12.1577 10.5338C12.1577 10.6713 12.1601 10.8081 12.1577 10.9455C12.137 11.9342 12.3319 11.7993 11.2852 11.8101C11.2651 11.8101 11.2444 11.8082 11.2243 11.8088C11.0197 11.8133 10.9552 11.7069 10.9954 11.5067C11.0599 11.1868 11.1074 10.8626 11.1835 10.5459C11.2419 10.3014 11.1902 10.1671 10.9357 10.1221C10.6946 10.0797 10.521 10.0968 10.4705 10.4033C10.3798 10.9544 10.2647 11.501 10.1691 12.0508C10.1149 12.3624 10.2501 12.5322 10.5612 12.5486C10.7737 12.5594 10.9874 12.5505 11.2005 12.5505Z" />
                        <path d="M3.64721 15.9974C2.87636 15.9974 2.10491 16.0012 1.33406 15.9967C0.504155 15.9923 0.00304442 15.4754 0.00182665 14.6229C-0.000608883 12.9976 -0.000608883 11.3724 0.00182665 9.74708C0.00304442 8.88947 0.499893 8.37072 1.32737 8.36692C2.34177 8.36249 3.35616 8.37009 4.37056 8.36185C4.58063 8.35995 4.7365 8.42963 4.88081 8.58481C5.22544 8.95724 5.58833 9.31194 5.93052 9.6869C6.24592 10.0321 6.6009 10.3 7.05635 10.3963C7.26276 10.44 7.334 10.561 7.33339 10.7744C7.32791 12.0722 7.34191 13.3707 7.32548 14.6685C7.31573 15.4564 6.77809 15.9891 6.02125 15.9961C5.23031 16.0037 4.43876 15.998 3.64721 15.998V15.9974ZM3.46028 10.1138C3.21064 10.1138 3.00667 10.1277 2.80513 10.11C2.55244 10.0885 2.46841 10.1898 2.47268 10.452C2.47694 10.7105 2.50434 10.8739 2.81487 10.8606C3.22952 10.8428 3.6466 10.8517 4.06064 10.8808C4.32429 10.8992 4.49417 11.0709 4.48138 11.3635C4.46859 11.6555 4.29019 11.7942 4.02046 11.805C3.78725 11.8145 3.55405 11.8119 3.32085 11.8113C3.08399 11.8113 2.91533 11.912 2.91107 12.1717C2.90681 12.4504 3.08278 12.5524 3.33242 12.5524C3.58571 12.5524 3.84023 12.5467 4.0923 12.5676C4.32429 12.5866 4.4619 12.7392 4.48138 12.9799C4.50208 13.237 4.37422 13.4055 4.13858 13.467C4.01254 13.4999 3.87798 13.5037 3.74707 13.5062C3.40244 13.5119 3.0572 13.5062 2.71258 13.5113C2.39108 13.5164 2.49947 13.7748 2.4812 13.954C2.46232 14.1384 2.50982 14.2568 2.72536 14.2517C3.17106 14.241 3.61859 14.2669 4.06369 14.2429C4.96666 14.1941 5.48482 13.2554 5.06043 12.4352C4.95935 12.2395 4.97031 12.1052 5.06713 11.9171C5.43002 11.2083 5.09148 10.4102 4.35047 10.1727C4.04055 10.0733 3.72576 10.1353 3.46028 10.1132V10.1138Z" />
                    </svg>

                    จำนวน : {{ $stDetail['qty'] ?? '-' }}
                </div>
                <div class="st-detail1">
                    <svg class="w-4 h-4" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg">
                        <path d="M15.9998 7.69604C15.8847 10.3878 14.6972 12.5644 12.3108 14.103C11.8155 14.4222 11.2408 14.3134 10.9342 13.8606C10.6276 13.4068 10.7687 12.8759 11.2722 12.551C12.9623 11.4598 13.9426 9.94388 14.0383 7.97998C14.1585 5.51863 13.046 3.67552 10.8283 2.45732C10.2614 2.14575 9.64458 1.96389 8.99953 1.86182C8.33876 1.75707 7.9989 1.38845 8.03311 0.844653C8.0641 0.353454 8.56164 -0.055731 9.06704 0.0062261C10.5495 0.188532 11.8673 0.749266 13.0233 1.65411C14.355 2.69668 15.2447 4.02408 15.7062 5.61803C15.8981 6.28039 15.9628 6.9588 15.9998 7.69604Z" />
                        <path d="M8.05136 15.3333C4.57596 15.303 1.65036 13.2798 0.495286 10.2689C0.179467 9.44518 0.0407473 8.59204 0.000980946 7.72063C-0.019827 7.26063 0.292755 6.84476 0.714463 6.74091C1.15513 6.63215 1.59672 6.81847 1.81312 7.20269C1.94445 7.43581 1.92086 7.69523 1.93843 7.9435C2.11553 10.4704 3.78665 12.5212 6.29424 13.2464C7.24586 13.5219 8.22013 13.5415 9.19579 13.3636C9.74697 13.2629 10.2112 13.5063 10.3661 13.9868C10.5303 14.4971 10.208 15.0276 9.66744 15.155C9.11719 15.2852 8.55537 15.2986 8.05136 15.3333Z" />
                        <path d="M6.62114 1.22797C6.62392 1.65498 6.38532 1.96522 5.90673 2.13504C5.3537 2.33116 4.84137 2.59816 4.36972 2.93825C3.50549 3.5605 2.85952 4.35034 2.42764 5.30154C2.30788 5.56542 2.17009 5.80745 1.88016 5.93359C1.51533 6.09272 1.11443 6.03477 0.828202 5.77625C0.528105 5.5048 0.432851 5.1228 0.590067 4.75953C1.50932 2.63694 3.09211 1.17716 5.32411 0.373942C5.96407 0.143943 6.61652 0.582546 6.62114 1.22752V1.22797Z" />
                    </svg>

                    สถานะ :<span class="bg-{{ $stDetail['status']['color']}} text-white text-xs font-medium me-2 px-3 py-1 rounded-full dark:bg-tomato dark:text-white">{{ $stDetail['status']['name'] ?? '-' }}</span>
                </div>
            </div>
        </div>
        @endif
    </div>
</div>