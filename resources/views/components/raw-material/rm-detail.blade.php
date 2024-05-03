               <li
                   class="w-full px-4 py-2 border-b border-gray-200 rounded-t-lg dark:border-gray-600 text-main-color font-medium text-xs">
                   <div class="grid md:grid-cols-2 gap-2 pb-1">
                       <div class="relative z-0 w-full group">
                           <label class="">Name : </label>
                       </div>
                       <div class="relative z-0 w-full group">
                           <label class=""> {{ $rmDetail['name'] ?? '-' }} </label>
                       </div>
                   </div>
                   <div class="grid md:grid-cols-2 gap-2 pb-1">
                       <div class="relative z-0 w-full group">
                           <label class="">CAS number : </label>
                       </div>
                       <div class="relative z-0 w-full group">
                           <label class=""> {{ $rmDetail['rm_cas_number'] ?? '-' }} </label>
                       </div>
                   </div>
                   <div class="grid md:grid-cols-2 gap-2 pb-1">
                       <div class="relative z-0 w-full group">
                           <label class="">Origin(s) : </label>
                       </div>
                       <div class="relative z-0 w-full group">
                           <label class=""> {{ $rmDetail['rm_origin'] ?? '-' }} </label>
                       </div>
                   </div>
                   <div class="grid md:grid-cols-2 gap-2 pb-1">
                       <div class="relative z-0 w-full group">
                           <label class="">Other Languages : </label>
                       </div>
                       <div class="relative z-0 w-full group">
                           <label class=""> {{ $rmDetail['other_languages'] ?? '-' }} </label>
                       </div>
                   </div>
                   <div class="grid md:grid-cols-2 gap-2 pb-1">
                       <div class="relative z-0 w-full group">
                           <label class="">INCI Name : </label>
                       </div>
                       <div class="relative z-0 w-full group">
                           <label class=""> {{ $rmDetail['inci_name_head']['inci_name_line']['name'] ?? '-' }} </label>
                       </div>
                   </div>
                   <div class="grid md:grid-cols-2 gap-2 pb-1">
                       <div class="relative z-0 w-full group">
                           <label class="">EINECS/ELINCS number: </label>
                       </div>
                       <div class="relative z-0 w-full group">
                           <label class=""> {{ $rmDetail['einecs_elincs'] ?? '-' }} </label>
                       </div>
                   </div>
                   <div class="grid md:grid-cols-2 gap-2 pb-1">
                       <div class="relative z-0 w-full group">
                           <label class="">Food additive : </label>
                       </div>
                       <div class="relative z-0 w-full group">
                           <label class="">  {{ $rmDetail['food_additive'] ?? '-' }}  </label>
                       </div>
                   </div>
                   <div class="grid md:grid-cols-2 gap-2 pb-1">
                       <div class="relative z-0 w-full group">
                           <label class="">Classification : </label>
                       </div>
                       <div class="relative z-0 w-full group">
                           <label class="">  {{ $rmDetail['classification'] ?? '-' }} </label>
                       </div>
                   </div>
               </li>
