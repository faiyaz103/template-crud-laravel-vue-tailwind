<template>
    <main class="grow pt-5" id="content" role="content">
     <!-- Container -->
     <div class="kt-container-fixed" id="contentContainer">
        
     </div>
     
     <!-- End of Container -->
     <!-- Container -->
     <div class="kt-container-fixed">
      <div class="flex flex-col items-stretch gap-7">
       <div class="flex items-center gap-3 w-full">
        <div class="kt-input w-full">
         <i class="ki-filled ki-magnifier">
         </i>
         <input placeholder="" type="text" value="Nike"/>
         <span class="kt-badge kt-badge-outline -me-1.5">
          ⌘ K
         </span>
        </div>
        <!--Filter-->
        <button class="kt-dropdown-toggle kt-btn kt-btn-secondary" data-kt-drawer-toggle="#drawers_shop_filter">
         <i class="ki-filled ki-filter">
         </i>
         Filter
        </button>
        <router-link class="kt-btn kt-btn-primary" to="/add-product">
         Add Product
        </router-link>
        <!--Product Filter-->
        <div class="hidden kt-drawer kt-drawer-end card flex-col max-w-[90%] w-[320px] top-5 bottom-5 end-5 rounded-xl border border-border" data-kt-drawer="true" data-kt-drawer-container="body" id="drawers_shop_filter">
         <div class="kt-card-header ps-5 pr-2">
          <h3 class="kt-card-title">
           Filter
          </h3>
          <button class="kt-btn kt-btn-sm kt-btn-icon kt-btn-ghost shrink-0" data-kt-drawer-dismiss="true">
           <i class="ki-filled ki-cross text-base">
           </i>
          </button>
         </div>
         <div class="kt-card-content px-0 pt-3.5 kt-scrollable-y-auto">
          <div class="flex items-center gap-1 px-5 mb-3">
           <span class="text-sm font-medium text-mono">
            Status
           </span>
           <span class="cursor-pointer" data-kt-tooltip="true" data-kt-tooltip-container="body">
            <i class="ki-filled ki-information-2 text-muted-foreground">
            </i>
            <span class="kt-tooltip" data-kt-tooltip-content="true">
             Specify product status.
            </span>
           </span>
          </div>
          <div class="px-5">
           <div class="kt-toggle-group flex">
            <label class="kt-btn">
             All
             <input name="filter-date-range" type="radio" value="all"/>
            </label>
            <label class="kt-btn">
             Sale
             <input checked="" name="filter-date-range" type="radio" value="sale"/>
            </label>
            <label class="kt-btn">
             New
             <input name="filter-date-range" type="radio" value="new"/>
            </label>
            <label class="kt-btn">
             Trend
             <input name="filter-date-range" type="radio" value="trend"/>
            </label>
           </div>
          </div>
          <div class="border-b border-border mb-4 mt-5">
          </div>
          <div class="flex flex-col gap-2.5 px-5">
           <span class="text-sm font-medium text-mono">
            Price
           </span>
           <div class="kt-input-group">
            <span class="kt-input-addon kt-input-addon-icon">
             <i class="ki-filled ki-dollar">
             </i>
            </span>
            <input class="kt-input" placeholder="" type="text" value="60">
            </input>
           </div>
           <div class="kt-input-group">
            <span class="kt-input-addon kt-input-addon-icon">
             <i class="ki-filled ki-dollar">
             </i>
            </span>
            <input class="kt-input" placeholder="" type="text" value="170">
            </input>
           </div>
          </div>
          <div class="border-b border-border mb-4 mt-5">
          </div>
          <div class="flex flex-col gap-3 px-5">
           <span class="text-sm font-medium text-mono">
            Categories
           </span>
           <div class="flex flex-wrap gap-2.5 mb-2">
            <span class="kt-badge kt-badge-outline rounded-full">
             Sneakers
            </span>
            <span class="kt-badge kt-badge-outline rounded-full">
             Running Shoes
            </span>
            <span class="kt-badge kt-badge-outline rounded-full">
             Boots
            </span>
            <span class="kt-badge kt-badge-outline rounded-full">
             Golf
            </span>
            <span class="kt-badge kt-badge-outline rounded-full">
             Sandals
            </span>
            <span class="kt-badge kt-badge-outline rounded-full">
             Work Shoes
            </span>
            <span class="kt-badge kt-badge-outline rounded-full">
             Casual Wear
            </span>
            <span class="kt-badge kt-badge-outline rounded-full">
             Outdoor Gear
            </span>
            <span class="kt-badge kt-badge-outline rounded-full">
             Sportswear
            </span>
            <span class="kt-badge kt-badge-outline rounded-full">
             Chelsea Boots
            </span>
            <span class="kt-badge kt-badge-outline rounded-full">
             Loafers
            </span>
            <span class="kt-badge kt-badge-outline rounded-full">
             Slip-On
            </span>
            <span class="kt-badge kt-badge-outline rounded-full">
             Winter
            </span>
            <span class="kt-badge kt-badge-outline rounded-full">
             Espadrilles
            </span>
            <span class="kt-badge kt-badge-outline rounded-full">
             Basketball
            </span>
           </div>
          </div>
          <div class="border-b border-border mt-3 mb-4">
          </div>
          <div class="flex flex-col gap-3 px-5 lg:mb-10">
           <span class="text-sm font-medium text-mono">
            Rating
           </span>
           <div class="flex flex-col gap-2.5">
            <div class="flex items-center gap-2">
             <label class="kt-form-label w-5">
              <input checked="" class="kt-checkbox kt-checkbox-sm" name="check" type="checkbox" value="5">
              </input>
             </label>
             <i class="ki-solid ki-star text-yellow-500 -mt-0.5">
             </i>
             <span class="text-sm font-medium text-mono">
              5
             </span>
            </div>
            <div class="flex items-center gap-2">
             <label class="kt-form-label w-5">
              <input class="kt-checkbox kt-checkbox-sm" name="check" type="checkbox" value="4">
              </input>
             </label>
             <i class="ki-solid ki-star text-yellow-500 -mt-0.5">
             </i>
             <span class="text-sm font-medium text-mono">
              4
             </span>
            </div>
            <div class="flex items-center gap-2">
             <label class="kt-form-label w-5">
              <input class="kt-checkbox kt-checkbox-sm" name="check" type="checkbox" value="3"/>
             </label>
             <i class="ki-solid ki-star text-yellow-500 -mt-0.5">
             </i>
             <span class="text-sm font-medium text-mono">
              3
             </span>
            </div>
            <div class="flex items-center gap-2">
             <label class="kt-form-label w-5">
              <input class="kt-checkbox kt-checkbox-sm" name="check" type="checkbox" value="2"/>
             </label>
             <i class="ki-solid ki-star text-yellow-500 -mt-0.5">
             </i>
             <span class="text-sm font-medium text-mono">
              2
             </span>
            </div>
            <div class="flex items-center gap-2">
             <label class="kt-form-label w-5">
              <input class="kt-checkbox kt-checkbox-sm" name="check" type="checkbox" value="1"/>
             </label>
             <i class="ki-solid ki-star text-yellow-500 -mt-0.5">
             </i>
             <span class="text-sm font-medium text-mono">
              1
             </span>
            </div>
           </div>
          </div>
         </div>
         <div class="kt-card-footer grid grid-cols-2 gap-2.5">
          <button class="kt-btn kt-btn-outline">
           Reset
          </button>
          <button class="kt-btn kt-btn-primary">
           Apply
          </button>
         </div>
        </div>
        <!--End of Filter Drawer-->
        <!--End of Filter-->
       </div>
       <!-- begin: toolbar -->
       
       <!-- end: toolbar -->
       <div class="hidden" id="shop1_grids">
        <!-- begin: grid -->
        <div class="grid sm:grid-cols-4 gap-5 mb-2">
         <div class="kt-card">
          <div class="kt-card-content flex flex-col justify-between p-2.5 gap-4">
           <div class="mb-2.5">
            <div class="kt-card flex items-center justify-center relative bg-accent/50 w-full h-[180px] mb-4 shadow-none">
             <img alt="" class="h-[180px] shrink-0 cursor-pointer" data-kt-drawer-toggle="#drawers_shop_product_details" src="assets/media/store/client/600x600/11.png"/>
            </div>
            <a class="hover:text-primary text-sm font-medium text-mono px-2.5 leading-5.5 block" data-kt-drawer-toggle="#drawers_shop_product_details" href="#">
             Cloud Shift Lightweight Runner Pro Edition
            </a>
           </div>
           <div class="flex items-center flex-wrap justify-between gap-5 px-2.5 pb-1">
            <span class="kt-badge kt-badge-warning kt-badge-sm rounded-full gap-1">
             <i class="ki-solid ki-star text-white -mt-0.5">
             </i>
             5.0
            </span>
            <div class="flex items-center flex-wrap gap-1.5">
             <span class="text-xs font-normal text-secondary-foreground line-through pt-[1px]">
             </span>
             <span class="text-sm font-medium text-mono">
              $99.00
             </span>
             <button class="kt-btn kt-btn-outline kt-btn-sm ms-1" data-kt-drawer-toggle="#drawers_shop_cart">
              <i class="ki-filled ki-handcart">
              </i>
              Add
             </button>
            </div>
           </div>
          </div>
         </div>
         <div class="kt-card">
          <div class="kt-card-content flex flex-col justify-between p-2.5 gap-4">
           <div class="mb-2.5">
            <div class="kt-card flex items-center justify-center relative bg-accent/50 w-full h-[180px] mb-4 shadow-none">
             <img alt="" class="h-[180px] shrink-0 cursor-pointer" data-kt-drawer-toggle="#drawers_shop_product_details" src="assets/media/store/client/600x600/12.png"/>
            </div>
            <a class="hover:text-primary text-sm font-medium text-mono px-2.5 leading-5.5 block" data-kt-drawer-toggle="#drawers_shop_product_details" href="#">
             Titan Edge High Impact Stability Lightweight Trainers
            </a>
           </div>
           <div class="flex items-center flex-wrap justify-between gap-5 px-2.5 pb-1">
            <span class="kt-badge kt-badge-warning kt-badge-sm rounded-full gap-1">
             <i class="ki-solid ki-star text-white -mt-0.5">
             </i>
             3.5
            </span>
            <div class="flex items-center flex-wrap gap-1.5">
             <span class="text-xs font-normal text-secondary-foreground line-through pt-[1px]">
             </span>
             <span class="text-sm font-medium text-mono">
              $65.99
             </span>
             <button class="kt-btn kt-btn-outline kt-btn-sm ms-1" data-kt-drawer-toggle="#drawers_shop_cart">
              <i class="ki-filled ki-handcart">
              </i>
              Add
             </button>
            </div>
           </div>
          </div>
         </div>
         <div class="kt-card">
          <div class="kt-card-content flex flex-col justify-between p-2.5 gap-4">
           <div class="mb-2.5">
            <div class="kt-card flex items-center justify-center relative bg-accent/50 w-full h-[180px] mb-4 shadow-none">
             <img alt="" class="h-[180px] shrink-0 cursor-pointer" data-kt-drawer-toggle="#drawers_shop_product_details" src="assets/media/store/client/600x600/13.png"/>
            </div>
            <a class="hover:text-primary text-sm font-medium text-mono px-2.5 leading-5.5 block" data-kt-drawer-toggle="#drawers_shop_product_details" href="#">
             Wave Strike Dynamic Boost Sneaker
            </a>
           </div>
           <div class="flex items-center flex-wrap justify-between gap-5 px-2.5 pb-1">
            <span class="kt-badge kt-badge-warning kt-badge-sm rounded-full gap-1">
             <i class="ki-solid ki-star text-white -mt-0.5">
             </i>
             4.7
            </span>
            <div class="flex items-center flex-wrap gap-1.5">
             <span class="text-xs font-normal text-secondary-foreground line-through pt-[1px]">
             </span>
             <span class="text-sm font-medium text-mono">
              $120.00
             </span>
             <button class="kt-btn kt-btn-outline kt-btn-sm ms-1" data-kt-drawer-toggle="#drawers_shop_cart">
              <i class="ki-filled ki-handcart">
              </i>
              Add
             </button>
            </div>
           </div>
          </div>
         </div>
         <div class="kt-card">
          <div class="kt-card-content flex flex-col justify-between p-2.5 gap-4">
           <div class="mb-2.5">
            <div class="kt-card flex items-center justify-center relative bg-accent/50 w-full h-[180px] mb-4 shadow-none">
             <span class="kt-badge kt-badge-destructive kt-badge-sm absolute top-2 end-2 uppercase">
              save 40%
             </span>
             <img alt="" class="h-[180px] shrink-0 cursor-pointer" data-kt-drawer-toggle="#drawers_shop_product_details" src="assets/media/store/client/600x600/15.png"/>
            </div>
            <a class="hover:text-primary text-sm font-medium text-mono px-2.5 leading-5.5 block" data-kt-drawer-toggle="#drawers_shop_product_details" href="#">
             Wave Strike Dynamic Boost Sneaker
            </a>
           </div>
           <div class="flex items-center flex-wrap justify-between gap-5 px-2.5 pb-1">
            <span class="kt-badge kt-badge-warning kt-badge-sm rounded-full gap-1">
             <i class="ki-solid ki-star text-white -mt-0.5">
             </i>
             3.2
            </span>
            <div class="flex items-center flex-wrap gap-1.5">
             <span class="text-xs font-normal text-secondary-foreground line-through pt-[1px]">
              $179.00
             </span>
             <span class="text-sm font-medium text-mono">
              $140.00
             </span>
             <button class="kt-btn kt-btn-outline kt-btn-sm ms-1" data-kt-drawer-toggle="#drawers_shop_cart">
              <i class="ki-filled ki-handcart">
              </i>
              Add
             </button>
            </div>
           </div>
          </div>
         </div>
         <div class="kt-card">
          <div class="kt-card-content flex flex-col justify-between p-2.5 gap-4">
           <div class="mb-2.5">
            <div class="kt-card flex items-center justify-center relative bg-accent/50 w-full h-[180px] mb-4 shadow-none">
             <span class="kt-badge kt-badge-destructive kt-badge-sm absolute top-2 end-2 uppercase">
              save 40%
             </span>
             <img alt="" class="h-[180px] shrink-0 cursor-pointer" data-kt-drawer-toggle="#drawers_shop_product_details" src="assets/media/store/client/600x600/5.png"/>
            </div>
            <a class="hover:text-primary text-sm font-medium text-mono px-2.5 leading-5.5 block" data-kt-drawer-toggle="#drawers_shop_product_details" href="#">
             Cloud Shift Lightweight Runner Pro Edition
            </a>
           </div>
           <div class="flex items-center flex-wrap justify-between gap-5 px-2.5 pb-1">
            <span class="kt-badge kt-badge-warning kt-badge-sm rounded-full gap-1">
             <i class="ki-solid ki-star text-white -mt-0.5">
             </i>
             4.1
            </span>
            <div class="flex items-center flex-wrap gap-1.5">
             <span class="text-xs font-normal text-secondary-foreground line-through pt-[1px]">
              $140.00
             </span>
             <span class="text-sm font-medium text-mono">
              $99.00
             </span>
             <button class="kt-btn kt-btn-outline kt-btn-sm ms-1" data-kt-drawer-toggle="#drawers_shop_cart">
              <i class="ki-filled ki-handcart">
              </i>
              Add
             </button>
            </div>
           </div>
          </div>
         </div>
         <div class="kt-card">
          <div class="kt-card-content flex flex-col justify-between p-2.5 gap-4">
           <div class="mb-2.5">
            <div class="kt-card flex items-center justify-center relative bg-accent/50 w-full h-[180px] mb-4 shadow-none">
             <img alt="" class="h-[180px] shrink-0 cursor-pointer" data-kt-drawer-toggle="#drawers_shop_product_details" src="assets/media/store/client/600x600/3.png"/>
            </div>
            <a class="hover:text-primary text-sm font-medium text-mono px-2.5 leading-5.5 block" data-kt-drawer-toggle="#drawers_shop_product_details" href="#">
             Titan Edge High Impact Stability Lightweight Trainers
            </a>
           </div>
           <div class="flex items-center flex-wrap justify-between gap-5 px-2.5 pb-1">
            <span class="kt-badge kt-badge-warning kt-badge-sm rounded-full gap-1">
             <i class="ki-solid ki-star text-white -mt-0.5">
             </i>
             3.5
            </span>
            <div class="flex items-center flex-wrap gap-1.5">
             <span class="text-xs font-normal text-secondary-foreground line-through pt-[1px]">
             </span>
             <span class="text-sm font-medium text-mono">
              $65.99
             </span>
             <button class="kt-btn kt-btn-outline kt-btn-sm ms-1" data-kt-drawer-toggle="#drawers_shop_cart">
              <i class="ki-filled ki-handcart">
              </i>
              Add
             </button>
            </div>
           </div>
          </div>
         </div>
         <div class="kt-card">
          <div class="kt-card-content flex flex-col justify-between p-2.5 gap-4">
           <div class="mb-2.5">
            <div class="kt-card flex items-center justify-center relative bg-accent/50 w-full h-[180px] mb-4 shadow-none">
             <span class="kt-badge kt-badge-destructive kt-badge-sm absolute top-2 end-2 uppercase">
              save 40%
             </span>
             <img alt="" class="h-[180px] shrink-0 cursor-pointer" data-kt-drawer-toggle="#drawers_shop_product_details" src="assets/media/store/client/600x600/2.png"/>
            </div>
            <a class="hover:text-primary text-sm font-medium text-mono px-2.5 leading-5.5 block" data-kt-drawer-toggle="#drawers_shop_product_details" href="#">
             Velocity Boost Xtreme High  Shock Absorbers
            </a>
           </div>
           <div class="flex items-center flex-wrap justify-between gap-5 px-2.5 pb-1">
            <span class="kt-badge kt-badge-warning kt-badge-sm rounded-full gap-1">
             <i class="ki-solid ki-star text-white -mt-0.5">
             </i>
             4.9
            </span>
            <div class="flex items-center flex-wrap gap-1.5">
             <span class="text-xs font-normal text-secondary-foreground line-through pt-[1px]">
              $315.00
             </span>
             <span class="text-sm font-medium text-mono">
              $280.00
             </span>
             <button class="kt-btn kt-btn-outline kt-btn-sm ms-1" data-kt-drawer-toggle="#drawers_shop_cart">
              <i class="ki-filled ki-handcart">
              </i>
              Add
             </button>
            </div>
           </div>
          </div>
         </div>
         <div class="kt-card">
          <div class="kt-card-content flex flex-col justify-between p-2.5 gap-4">
           <div class="mb-2.5">
            <div class="kt-card flex items-center justify-center relative bg-accent/50 w-full h-[180px] mb-4 shadow-none">
             <img alt="" class="h-[180px] shrink-0 cursor-pointer" data-kt-drawer-toggle="#drawers_shop_product_details" src="assets/media/store/client/600x600/14.png"/>
            </div>
            <a class="hover:text-primary text-sm font-medium text-mono px-2.5 leading-5.5 block" data-kt-drawer-toggle="#drawers_shop_product_details" href="#">
             Velocity Boost Xtreme High  Shock Absorbers
            </a>
           </div>
           <div class="flex items-center flex-wrap justify-between gap-5 px-2.5 pb-1">
            <span class="kt-badge kt-badge-warning kt-badge-sm rounded-full gap-1">
             <i class="ki-solid ki-star text-white -mt-0.5">
             </i>
             4.9
            </span>
            <div class="flex items-center flex-wrap gap-1.5">
             <span class="text-xs font-normal text-secondary-foreground line-through pt-[1px]">
             </span>
             <span class="text-sm font-medium text-mono">
              $110.00
             </span>
             <button class="kt-btn kt-btn-outline kt-btn-sm ms-1" data-kt-drawer-toggle="#drawers_shop_cart">
              <i class="ki-filled ki-handcart">
              </i>
              Add
             </button>
            </div>
           </div>
          </div>
         </div>
         <div class="kt-card">
          <div class="kt-card-content flex flex-col justify-between p-2.5 gap-4">
           <div class="mb-2.5">
            <div class="kt-card flex items-center justify-center relative bg-accent/50 w-full h-[180px] mb-4 shadow-none">
             <img alt="" class="h-[180px] shrink-0 cursor-pointer" data-kt-drawer-toggle="#drawers_shop_product_details" src="assets/media/store/client/600x600/8.png"/>
            </div>
            <a class="hover:text-primary text-sm font-medium text-mono px-2.5 leading-5.5 block" data-kt-drawer-toggle="#drawers_shop_product_details" href="#">
             Cloud Shift Lightweight Runner Pro Edition
            </a>
           </div>
           <div class="flex items-center flex-wrap justify-between gap-5 px-2.5 pb-1">
            <span class="kt-badge kt-badge-warning kt-badge-sm rounded-full gap-1">
             <i class="ki-solid ki-star text-white -mt-0.5">
             </i>
             5.0
            </span>
            <div class="flex items-center flex-wrap gap-1.5">
             <span class="text-xs font-normal text-secondary-foreground line-through pt-[1px]">
             </span>
             <span class="text-sm font-medium text-mono">
              $99.00
             </span>
             <button class="kt-btn kt-btn-outline kt-btn-sm ms-1" data-kt-drawer-toggle="#drawers_shop_cart">
              <i class="ki-filled ki-handcart">
              </i>
              Add
             </button>
            </div>
           </div>
          </div>
         </div>
         <div class="kt-card">
          <div class="kt-card-content flex flex-col justify-between p-2.5 gap-4">
           <div class="mb-2.5">
            <div class="kt-card flex items-center justify-center relative bg-accent/50 w-full h-[180px] mb-4 shadow-none">
             <span class="kt-badge kt-badge-destructive kt-badge-sm absolute top-2 end-2 uppercase">
              save 40%
             </span>
             <img alt="" class="h-[180px] shrink-0 cursor-pointer" data-kt-drawer-toggle="#drawers_shop_product_details" src="assets/media/store/client/600x600/4.png"/>
            </div>
            <a class="hover:text-primary text-sm font-medium text-mono px-2.5 leading-5.5 block" data-kt-drawer-toggle="#drawers_shop_product_details" href="#">
             Titan Edge High Impact Stability Lightweight Trainers
            </a>
           </div>
           <div class="flex items-center flex-wrap justify-between gap-5 px-2.5 pb-1">
            <span class="kt-badge kt-badge-warning kt-badge-sm rounded-full gap-1">
             <i class="ki-solid ki-star text-white -mt-0.5">
             </i>
             3.5
            </span>
            <div class="flex items-center flex-wrap gap-1.5">
             <span class="text-xs font-normal text-secondary-foreground line-through pt-[1px]">
              $110.00
             </span>
             <span class="text-sm font-medium text-mono">
              $46.00
             </span>
             <button class="kt-btn kt-btn-outline kt-btn-sm ms-1" data-kt-drawer-toggle="#drawers_shop_cart">
              <i class="ki-filled ki-handcart">
              </i>
              Add
             </button>
            </div>
           </div>
          </div>
         </div>
         <div class="kt-card">
          <div class="kt-card-content flex flex-col justify-between p-2.5 gap-4">
           <div class="mb-2.5">
            <div class="kt-card flex items-center justify-center relative bg-accent/50 w-full h-[180px] mb-4 shadow-none">
             <img alt="" class="h-[180px] shrink-0 cursor-pointer" data-kt-drawer-toggle="#drawers_shop_product_details" src="assets/media/store/client/600x600/9.png"/>
            </div>
            <a class="hover:text-primary text-sm font-medium text-mono px-2.5 leading-5.5 block" data-kt-drawer-toggle="#drawers_shop_product_details" href="#">
             Wave Strike Dynamic Boost Sneaker
            </a>
           </div>
           <div class="flex items-center flex-wrap justify-between gap-5 px-2.5 pb-1">
            <span class="kt-badge kt-badge-warning kt-badge-sm rounded-full gap-1">
             <i class="ki-solid ki-star text-white -mt-0.5">
             </i>
             4.7
            </span>
            <div class="flex items-center flex-wrap gap-1.5">
             <span class="text-xs font-normal text-secondary-foreground line-through pt-[1px]">
             </span>
             <span class="text-sm font-medium text-mono">
              $120.00
             </span>
             <button class="kt-btn kt-btn-outline kt-btn-sm ms-1" data-kt-drawer-toggle="#drawers_shop_cart">
              <i class="ki-filled ki-handcart">
              </i>
              Add
             </button>
            </div>
           </div>
          </div>
         </div>
         <div class="kt-card">
          <div class="kt-card-content flex flex-col justify-between p-2.5 gap-4">
           <div class="mb-2.5">
            <div class="kt-card flex items-center justify-center relative bg-accent/50 w-full h-[180px] mb-4 shadow-none">
             <img alt="" class="h-[180px] shrink-0 cursor-pointer" data-kt-drawer-toggle="#drawers_shop_product_details" src="assets/media/store/client/600x600/10.png"/>
            </div>
            <a class="hover:text-primary text-sm font-medium text-mono px-2.5 leading-5.5 block" data-kt-drawer-toggle="#drawers_shop_product_details" href="#">
             Velocity Boost Xtreme High  Shock Absorbers
            </a>
           </div>
           <div class="flex items-center flex-wrap justify-between gap-5 px-2.5 pb-1">
            <span class="kt-badge kt-badge-warning kt-badge-sm rounded-full gap-1">
             <i class="ki-solid ki-star text-white -mt-0.5">
             </i>
             4.9
            </span>
            <div class="flex items-center flex-wrap gap-1.5">
             <span class="text-xs font-normal text-secondary-foreground line-through pt-[1px]">
             </span>
             <span class="text-sm font-medium text-mono">
              $110.00
             </span>
             <button class="kt-btn kt-btn-outline kt-btn-sm ms-1" data-kt-drawer-toggle="#drawers_shop_cart">
              <i class="ki-filled ki-handcart">
              </i>
              Add
             </button>
            </div>
           </div>
          </div>
         </div>
        </div>
        <!-- end: grid -->
       </div>
       <!-- begin: list -->
       <div class="" id="shop1_lists">
        <!-- begin: grid -->
        <div class="grid grid-cols-1 gap-5">
         <div class="kt-card">
          <div class="kt-card-content flex items-center flex-wrap justify-between p-2 pe-5 gap-4.5">
           <div class="flex items-center gap-3.5">
            <div class="kt-card flex items-center justify-center bg-accent/50 h-[70px] w-[90px] shadow-none">
             <img alt="img" class="h-[70px] cursor-pointer" data-kt-drawer-toggle="#drawers_shop_product_details" src="assets/media/store/client/600x600/11.png"/>
            </div>
            <div class="flex flex-col gap-2">
             <div class="flex items-center gap-2.5 -mt-1">
              <a class="hover:text-primary text-sm font-medium text-mono leading-5.5" data-kt-drawer-toggle="#drawers_shop_product_details" href="#">
               Cloud Shift Lightweight Runner Pro Edition
              </a>
             </div>
             <div class="flex items-center flex-wrap gap-3">
              <span class="kt-badge kt-badge-warning kt-badge-sm rounded-full gap-1">
               <i class="ki-solid ki-star text-white -mt-0.5">
               </i>
               5.0
              </span>
              <div class="flex items-center flex-wrap gap-2 lg:gap-4">
               <span class="text-xs font-normal text-secondary-foreground uppercase">
                SKU:
                <span class="text-xs font-medium text-foreground">
                 SH-001-BLK-42
                </span>
               </span>
               <span class="text-xs font-normal text-secondary-foreground">
                Category:
                <span class="text-xs font-medium text-foreground">
                 Nike
                </span>
               </span>
               <span class="text-xs font-normal text-secondary-foreground">
                Category:
                <span class="text-xs font-medium text-foreground">
                 Sneakers
                </span>
               </span>
              </div>
             </div>
            </div>
           </div>
           <div class="flex items-center gap-1.5">
            <span class="text-xs font-normal text-secondary-foreground line-through">
            </span>
            <span class="text-sm font-medium text-mono">
             $99.00
            </span>
            <button class="kt-btn kt-btn-outline ms-2 shrink-0" data-kt-drawer-toggle="#drawers_shop_product_details">
             <i class="ki-filled ki-handcart">
             </i>
             Add to Cart
            </button>
           </div>
          </div>
         </div>
         <div class="kt-card">
          <div class="kt-card-content flex items-center flex-wrap justify-between p-2 pe-5 gap-4.5">
           <div class="flex items-center gap-3.5">
            <div class="kt-card flex items-center justify-center bg-accent/50 h-[70px] w-[90px] shadow-none">
             <img alt="img" class="h-[70px] cursor-pointer" data-kt-drawer-toggle="#drawers_shop_product_details" src="assets/media/store/client/600x600/12.png"/>
            </div>
            <div class="flex flex-col gap-2">
             <div class="flex items-center gap-2.5 -mt-1">
              <a class="hover:text-primary text-sm font-medium text-mono leading-5.5" data-kt-drawer-toggle="#drawers_shop_product_details" href="#">
               Titan Edge High Impact Stability Lightweight Trainers
              </a>
             </div>
             <div class="flex items-center flex-wrap gap-3">
              <span class="kt-badge kt-badge-warning kt-badge-sm rounded-full gap-1">
               <i class="ki-solid ki-star text-white -mt-0.5">
               </i>
               3.5
              </span>
              <div class="flex items-center flex-wrap gap-2 lg:gap-4">
               <span class="text-xs font-normal text-secondary-foreground uppercase">
                SKU:
                <span class="text-xs font-medium text-foreground">
                 SNK-XY-WHT-10
                </span>
               </span>
               <span class="text-xs font-normal text-secondary-foreground">
                Category:
                <span class="text-xs font-medium text-foreground">
                 Adidas
                </span>
               </span>
               <span class="text-xs font-normal text-secondary-foreground">
                Category:
                <span class="text-xs font-medium text-foreground">
                 Running Shoes
                </span>
               </span>
              </div>
             </div>
            </div>
           </div>
           <div class="flex items-center gap-1.5">
            <span class="text-xs font-normal text-secondary-foreground line-through">
            </span>
            <span class="text-sm font-medium text-mono">
             $65.99
            </span>
            <button class="kt-btn kt-btn-outline ms-2 shrink-0" data-kt-drawer-toggle="#drawers_shop_product_details">
             <i class="ki-filled ki-handcart">
             </i>
             Add to Cart
            </button>
           </div>
          </div>
         </div>
         <div class="kt-card">
          <div class="kt-card-content flex items-center flex-wrap justify-between p-2 pe-5 gap-4.5">
           <div class="flex items-center gap-3.5">
            <div class="kt-card flex items-center justify-center bg-accent/50 h-[70px] w-[90px] shadow-none">
             <img alt="img" class="h-[70px] cursor-pointer" data-kt-drawer-toggle="#drawers_shop_product_details" src="assets/media/store/client/600x600/13.png"/>
            </div>
            <div class="flex flex-col gap-2">
             <div class="flex items-center gap-2.5 -mt-1">
              <a class="hover:text-primary text-sm font-medium text-mono leading-5.5" data-kt-drawer-toggle="#drawers_shop_product_details" href="#">
               Wave Strike Dynamic Boost Sneaker
              </a>
             </div>
             <div class="flex items-center flex-wrap gap-3">
              <span class="kt-badge kt-badge-warning kt-badge-sm rounded-full gap-1">
               <i class="ki-solid ki-star text-white -mt-0.5">
               </i>
               4.7
              </span>
              <div class="flex items-center flex-wrap gap-2 lg:gap-4">
               <span class="text-xs font-normal text-secondary-foreground uppercase">
                SKU:
                <span class="text-xs font-medium text-foreground">
                 BT-A1-YLW-8
                </span>
               </span>
               <span class="text-xs font-normal text-secondary-foreground">
                Category:
                <span class="text-xs font-medium text-foreground">
                 Timberland
                </span>
               </span>
               <span class="text-xs font-normal text-secondary-foreground">
                Category:
                <span class="text-xs font-medium text-foreground">
                 Boots
                </span>
               </span>
              </div>
             </div>
            </div>
           </div>
           <div class="flex items-center gap-1.5">
            <span class="text-xs font-normal text-secondary-foreground line-through">
            </span>
            <span class="text-sm font-medium text-mono">
             $120.00
            </span>
            <button class="kt-btn kt-btn-outline ms-2 shrink-0" data-kt-drawer-toggle="#drawers_shop_product_details">
             <i class="ki-filled ki-handcart">
             </i>
             Add to Cart
            </button>
           </div>
          </div>
         </div>
         <div class="kt-card">
          <div class="kt-card-content flex items-center flex-wrap justify-between p-2 pe-5 gap-4.5">
           <div class="flex items-center gap-3.5">
            <div class="kt-card flex items-center justify-center bg-accent/50 h-[70px] w-[90px] shadow-none">
             <img alt="img" class="h-[70px] cursor-pointer" data-kt-drawer-toggle="#drawers_shop_product_details" src="assets/media/store/client/600x600/15.png"/>
            </div>
            <div class="flex flex-col gap-2">
             <div class="flex items-center gap-2.5 -mt-1">
              <a class="hover:text-primary text-sm font-medium text-mono leading-5.5" data-kt-drawer-toggle="#drawers_shop_product_details" href="#">
               Wave Strike Dynamic Boost Sneaker
              </a>
              <span class="kt-badge kt-badge-destructive kt-badge-sm uppercase">
               save %
              </span>
             </div>
             <div class="flex items-center flex-wrap gap-3">
              <span class="kt-badge kt-badge-warning kt-badge-sm rounded-full gap-1">
               <i class="ki-solid ki-star text-white -mt-0.5">
               </i>
               3.2
              </span>
              <div class="flex items-center flex-wrap gap-2 lg:gap-4">
               <span class="text-xs font-normal text-secondary-foreground uppercase">
                SKU:
                <span class="text-xs font-medium text-foreground">
                 SD-Z9-BRN-39
                </span>
               </span>
               <span class="text-xs font-normal text-secondary-foreground">
                Category:
                <span class="text-xs font-medium text-foreground">
                 Birkenstock
                </span>
               </span>
               <span class="text-xs font-normal text-secondary-foreground">
                Category:
                <span class="text-xs font-medium text-foreground">
                 Sandals
                </span>
               </span>
              </div>
             </div>
            </div>
           </div>
           <div class="flex items-center gap-1.5">
            <span class="text-xs font-normal text-secondary-foreground line-through">
             $179.00
            </span>
            <span class="text-sm font-medium text-mono">
             $140.00
            </span>
            <button class="kt-btn kt-btn-outline ms-2 shrink-0" data-kt-drawer-toggle="#drawers_shop_product_details">
             <i class="ki-filled ki-handcart">
             </i>
             Add to Cart
            </button>
           </div>
          </div>
         </div>
         <div class="kt-card">
          <div class="kt-card-content flex items-center flex-wrap justify-between p-2 pe-5 gap-4.5">
           <div class="flex items-center gap-3.5">
            <div class="kt-card flex items-center justify-center bg-accent/50 h-[70px] w-[90px] shadow-none">
             <img alt="img" class="h-[70px] cursor-pointer" data-kt-drawer-toggle="#drawers_shop_product_details" src="assets/media/store/client/600x600/5.png"/>
            </div>
            <div class="flex flex-col gap-2">
             <div class="flex items-center gap-2.5 -mt-1">
              <a class="hover:text-primary text-sm font-medium text-mono leading-5.5" data-kt-drawer-toggle="#drawers_shop_product_details" href="#">
               Cloud Shift Lightweight Runner Pro Edition
              </a>
              <span class="kt-badge kt-badge-destructive kt-badge-sm uppercase">
               save %
              </span>
             </div>
             <div class="flex items-center flex-wrap gap-3">
              <span class="kt-badge kt-badge-warning kt-badge-sm rounded-full gap-1">
               <i class="ki-solid ki-star text-white -mt-0.5">
               </i>
               4.1
              </span>
              <div class="flex items-center flex-wrap gap-2 lg:gap-4">
               <span class="text-xs font-normal text-secondary-foreground uppercase">
                SKU:
                <span class="text-xs font-medium text-foreground">
                 WRK-77-BLK-9
                </span>
               </span>
               <span class="text-xs font-normal text-secondary-foreground">
                Category:
                <span class="text-xs font-medium text-foreground">
                 Dr. Martens
                </span>
               </span>
               <span class="text-xs font-normal text-secondary-foreground">
                Category:
                <span class="text-xs font-medium text-foreground">
                 Work Shoes
                </span>
               </span>
              </div>
             </div>
            </div>
           </div>
           <div class="flex items-center gap-1.5">
            <span class="text-xs font-normal text-secondary-foreground line-through">
             $140.00
            </span>
            <span class="text-sm font-medium text-mono">
             $99.00
            </span>
            <button class="kt-btn kt-btn-outline ms-2 shrink-0" data-kt-drawer-toggle="#drawers_shop_product_details">
             <i class="ki-filled ki-handcart">
             </i>
             Add to Cart
            </button>
           </div>
          </div>
         </div>
         <div class="kt-card">
          <div class="kt-card-content flex items-center flex-wrap justify-between p-2 pe-5 gap-4.5">
           <div class="flex items-center gap-3.5">
            <div class="kt-card flex items-center justify-center bg-accent/50 h-[70px] w-[90px] shadow-none">
             <img alt="img" class="h-[70px] cursor-pointer" data-kt-drawer-toggle="#drawers_shop_product_details" src="assets/media/store/client/600x600/3.png"/>
            </div>
            <div class="flex flex-col gap-2">
             <div class="flex items-center gap-2.5 -mt-1">
              <a class="hover:text-primary text-sm font-medium text-mono leading-5.5" data-kt-drawer-toggle="#drawers_shop_product_details" href="#">
               Titan Edge High Impact Stability Lightweight Trainers
              </a>
             </div>
             <div class="flex items-center flex-wrap gap-3">
              <span class="kt-badge kt-badge-warning kt-badge-sm rounded-full gap-1">
               <i class="ki-solid ki-star text-white -mt-0.5">
               </i>
               3.5
              </span>
              <div class="flex items-center flex-wrap gap-2 lg:gap-4">
               <span class="text-xs font-normal text-secondary-foreground uppercase">
                SKU:
                <span class="text-xs font-medium text-foreground">
                 SNK-555-GRY-11
                </span>
               </span>
               <span class="text-xs font-normal text-secondary-foreground">
                Category:
                <span class="text-xs font-medium text-foreground">
                 New Balance
                </span>
               </span>
               <span class="text-xs font-normal text-secondary-foreground">
                Category:
                <span class="text-xs font-medium text-foreground">
                 Sneakers
                </span>
               </span>
              </div>
             </div>
            </div>
           </div>
           <div class="flex items-center gap-1.5">
            <span class="text-xs font-normal text-secondary-foreground line-through">
            </span>
            <span class="text-sm font-medium text-mono">
             $65.99
            </span>
            <button class="kt-btn kt-btn-outline ms-2 shrink-0" data-kt-drawer-toggle="#drawers_shop_product_details">
             <i class="ki-filled ki-handcart">
             </i>
             Add to Cart
            </button>
           </div>
          </div>
         </div>
         <div class="kt-card">
          <div class="kt-card-content flex items-center flex-wrap justify-between p-2 pe-5 gap-4.5">
           <div class="flex items-center gap-3.5">
            <div class="kt-card flex items-center justify-center bg-accent/50 h-[70px] w-[90px] shadow-none">
             <img alt="img" class="h-[70px] cursor-pointer" data-kt-drawer-toggle="#drawers_shop_product_details" src="assets/media/store/client/600x600/2.png"/>
            </div>
            <div class="flex flex-col gap-2">
             <div class="flex items-center gap-2.5 -mt-1">
              <a class="hover:text-primary text-sm font-medium text-mono leading-5.5" data-kt-drawer-toggle="#drawers_shop_product_details" href="#">
               Velocity Boost Xtreme High  Shock Absorbers
              </a>
              <span class="kt-badge kt-badge-destructive kt-badge-sm uppercase">
               save %
              </span>
             </div>
             <div class="flex items-center flex-wrap gap-3">
              <span class="kt-badge kt-badge-warning kt-badge-sm rounded-full gap-1">
               <i class="ki-solid ki-star text-white -mt-0.5">
               </i>
               4.9
              </span>
              <div class="flex items-center flex-wrap gap-2 lg:gap-4">
               <span class="text-xs font-normal text-secondary-foreground uppercase">
                SKU:
                <span class="text-xs font-medium text-foreground">
                 SH-222-BLU-40
                </span>
               </span>
               <span class="text-xs font-normal text-secondary-foreground">
                Category:
                <span class="text-xs font-medium text-foreground">
                 Puma
                </span>
               </span>
               <span class="text-xs font-normal text-secondary-foreground">
                Category:
                <span class="text-xs font-medium text-foreground">
                 Sneakers
                </span>
               </span>
              </div>
             </div>
            </div>
           </div>
           <div class="flex items-center gap-1.5">
            <span class="text-xs font-normal text-secondary-foreground line-through">
             $315.00
            </span>
            <span class="text-sm font-medium text-mono">
             $280.00
            </span>
            <button class="kt-btn kt-btn-outline ms-2 shrink-0" data-kt-drawer-toggle="#drawers_shop_product_details">
             <i class="ki-filled ki-handcart">
             </i>
             Add to Cart
            </button>
           </div>
          </div>
         </div>
         <div class="kt-card">
          <div class="kt-card-content flex items-center flex-wrap justify-between p-2 pe-5 gap-4.5">
           <div class="flex items-center gap-3.5">
            <div class="kt-card flex items-center justify-center bg-accent/50 h-[70px] w-[90px] shadow-none">
             <img alt="img" class="h-[70px] cursor-pointer" data-kt-drawer-toggle="#drawers_shop_product_details" src="assets/media/store/client/600x600/14.png"/>
            </div>
            <div class="flex flex-col gap-2">
             <div class="flex items-center gap-2.5 -mt-1">
              <a class="hover:text-primary text-sm font-medium text-mono leading-5.5" data-kt-drawer-toggle="#drawers_shop_product_details" href="#">
               Velocity Boost Xtreme High  Shock Absorbers
              </a>
             </div>
             <div class="flex items-center flex-wrap gap-3">
              <span class="kt-badge kt-badge-warning kt-badge-sm rounded-full gap-1">
               <i class="ki-solid ki-star text-white -mt-0.5">
               </i>
               4.9
              </span>
              <div class="flex items-center flex-wrap gap-2 lg:gap-4">
               <span class="text-xs font-normal text-secondary-foreground uppercase">
                SKU:
                <span class="text-xs font-medium text-foreground">
                 BT-777-BLK-9
                </span>
               </span>
               <span class="text-xs font-normal text-secondary-foreground">
                Category:
                <span class="text-xs font-medium text-foreground">
                 UGG
                </span>
               </span>
               <span class="text-xs font-normal text-secondary-foreground">
                Category:
                <span class="text-xs font-medium text-foreground">
                 Boots
                </span>
               </span>
              </div>
             </div>
            </div>
           </div>
           <div class="flex items-center gap-1.5">
            <span class="text-xs font-normal text-secondary-foreground line-through">
            </span>
            <span class="text-sm font-medium text-mono">
             $110.00
            </span>
            <button class="kt-btn kt-btn-outline ms-2 shrink-0" data-kt-drawer-toggle="#drawers_shop_product_details">
             <i class="ki-filled ki-handcart">
             </i>
             Add to Cart
            </button>
           </div>
          </div>
         </div>
         <div class="kt-card">
          <div class="kt-card-content flex items-center flex-wrap justify-between p-2 pe-5 gap-4.5">
           <div class="flex items-center gap-3.5">
            <div class="kt-card flex items-center justify-center bg-accent/50 h-[70px] w-[90px] shadow-none">
             <img alt="img" class="h-[70px] cursor-pointer" data-kt-drawer-toggle="#drawers_shop_product_details" src="assets/media/store/client/600x600/8.png"/>
            </div>
            <div class="flex flex-col gap-2">
             <div class="flex items-center gap-2.5 -mt-1">
              <a class="hover:text-primary text-sm font-medium text-mono leading-5.5" data-kt-drawer-toggle="#drawers_shop_product_details" href="#">
               Cloud Shift Lightweight Runner Pro Edition
              </a>
             </div>
             <div class="flex items-center flex-wrap gap-3">
              <span class="kt-badge kt-badge-warning kt-badge-sm rounded-full gap-1">
               <i class="ki-solid ki-star text-white -mt-0.5">
               </i>
               5.0
              </span>
              <div class="flex items-center flex-wrap gap-2 lg:gap-4">
               <span class="text-xs font-normal text-secondary-foreground uppercase">
                SKU:
                <span class="text-xs font-medium text-foreground">
                 SD-999-TAN-38
                </span>
               </span>
               <span class="text-xs font-normal text-secondary-foreground">
                Category:
                <span class="text-xs font-medium text-foreground">
                 Crocs
                </span>
               </span>
               <span class="text-xs font-normal text-secondary-foreground">
                Category:
                <span class="text-xs font-medium text-foreground">
                 Sandals
                </span>
               </span>
              </div>
             </div>
            </div>
           </div>
           <div class="flex items-center gap-1.5">
            <span class="text-xs font-normal text-secondary-foreground line-through">
            </span>
            <span class="text-sm font-medium text-mono">
             $99.00
            </span>
            <button class="kt-btn kt-btn-outline ms-2 shrink-0" data-kt-drawer-toggle="#drawers_shop_product_details">
             <i class="ki-filled ki-handcart">
             </i>
             Add to Cart
            </button>
           </div>
          </div>
         </div>
         <div class="kt-card">
          <div class="kt-card-content flex items-center flex-wrap justify-between p-2 pe-5 gap-4.5">
           <div class="flex items-center gap-3.5">
            <div class="kt-card flex items-center justify-center bg-accent/50 h-[70px] w-[90px] shadow-none">
             <img alt="img" class="h-[70px] cursor-pointer" data-kt-drawer-toggle="#drawers_shop_product_details" src="assets/media/store/client/600x600/4.png"/>
            </div>
            <div class="flex flex-col gap-2">
             <div class="flex items-center gap-2.5 -mt-1">
              <a class="hover:text-primary text-sm font-medium text-mono leading-5.5" data-kt-drawer-toggle="#drawers_shop_product_details" href="#">
               Titan Edge High Impact Stability Lightweight Trainers
              </a>
              <span class="kt-badge kt-badge-destructive kt-badge-sm uppercase">
               save %
              </span>
             </div>
             <div class="flex items-center flex-wrap gap-3">
              <span class="kt-badge kt-badge-warning kt-badge-sm rounded-full gap-1">
               <i class="ki-solid ki-star text-white -mt-0.5">
               </i>
               3.5
              </span>
              <div class="flex items-center flex-wrap gap-2 lg:gap-4">
               <span class="text-xs font-normal text-secondary-foreground uppercase">
                SKU:
                <span class="text-xs font-medium text-foreground">
                 WRK-333-GRN-10
                </span>
               </span>
               <span class="text-xs font-normal text-secondary-foreground">
                Category:
                <span class="text-xs font-medium text-foreground">
                 Caterpillar
                </span>
               </span>
               <span class="text-xs font-normal text-secondary-foreground">
                Category:
                <span class="text-xs font-medium text-foreground">
                 Work Shoes
                </span>
               </span>
              </div>
             </div>
            </div>
           </div>
           <div class="flex items-center gap-1.5">
            <span class="text-xs font-normal text-secondary-foreground line-through">
             $110.00
            </span>
            <span class="text-sm font-medium text-mono">
             $46.00
            </span>
            <button class="kt-btn kt-btn-outline ms-2 shrink-0" data-kt-drawer-toggle="#drawers_shop_product_details">
             <i class="ki-filled ki-handcart">
             </i>
             Add to Cart
            </button>
           </div>
          </div>
         </div>
         <div class="kt-card">
          <div class="kt-card-content flex items-center flex-wrap justify-between p-2 pe-5 gap-4.5">
           <div class="flex items-center gap-3.5">
            <div class="kt-card flex items-center justify-center bg-accent/50 h-[70px] w-[90px] shadow-none">
             <img alt="img" class="h-[70px] cursor-pointer" data-kt-drawer-toggle="#drawers_shop_product_details" src="assets/media/store/client/600x600/9.png"/>
            </div>
            <div class="flex flex-col gap-2">
             <div class="flex items-center gap-2.5 -mt-1">
              <a class="hover:text-primary text-sm font-medium text-mono leading-5.5" data-kt-drawer-toggle="#drawers_shop_product_details" href="#">
               Wave Strike Dynamic Boost Sneaker
              </a>
             </div>
             <div class="flex items-center flex-wrap gap-3">
              <span class="kt-badge kt-badge-warning kt-badge-sm rounded-full gap-1">
               <i class="ki-solid ki-star text-white -mt-0.5">
               </i>
               4.7
              </span>
              <div class="flex items-center flex-wrap gap-2 lg:gap-4">
               <span class="text-xs font-normal text-secondary-foreground uppercase">
                SKU:
                <span class="text-xs font-medium text-foreground">
                 SNK-888-RED-42
                </span>
               </span>
               <span class="text-xs font-normal text-secondary-foreground">
                Category:
                <span class="text-xs font-medium text-foreground">
                 Reebok
                </span>
               </span>
               <span class="text-xs font-normal text-secondary-foreground">
                Category:
                <span class="text-xs font-medium text-foreground">
                 Sneakers
                </span>
               </span>
              </div>
             </div>
            </div>
           </div>
           <div class="flex items-center gap-1.5">
            <span class="text-xs font-normal text-secondary-foreground line-through">
            </span>
            <span class="text-sm font-medium text-mono">
             $120.00
            </span>
            <button class="kt-btn kt-btn-outline ms-2 shrink-0" data-kt-drawer-toggle="#drawers_shop_product_details">
             <i class="ki-filled ki-handcart">
             </i>
             Add to Cart
            </button>
           </div>
          </div>
         </div>
         <div class="kt-card">
          <div class="kt-card-content flex items-center flex-wrap justify-between p-2 pe-5 gap-4.5">
           <div class="flex items-center gap-3.5">
            <div class="kt-card flex items-center justify-center bg-accent/50 h-[70px] w-[90px] shadow-none">
             <img alt="img" class="h-[70px] cursor-pointer" data-kt-drawer-toggle="#drawers_shop_product_details" src="assets/media/store/client/600x600/10.png"/>
            </div>
            <div class="flex flex-col gap-2">
             <div class="flex items-center gap-2.5 -mt-1">
              <a class="hover:text-primary text-sm font-medium text-mono leading-5.5" data-kt-drawer-toggle="#drawers_shop_product_details" href="#">
               Velocity Boost Xtreme High  Shock Absorbers
              </a>
             </div>
             <div class="flex items-center flex-wrap gap-3">
              <span class="kt-badge kt-badge-warning kt-badge-sm rounded-full gap-1">
               <i class="ki-solid ki-star text-white -mt-0.5">
               </i>
               4.9
              </span>
              <div class="flex items-center flex-wrap gap-2 lg:gap-4">
               <span class="text-xs font-normal text-secondary-foreground uppercase">
                SKU:
                <span class="text-xs font-medium text-foreground">
                 BT-444-BRN-7
                </span>
               </span>
               <span class="text-xs font-normal text-secondary-foreground">
                Category:
                <span class="text-xs font-medium text-foreground">
                 Columbia
                </span>
               </span>
               <span class="text-xs font-normal text-secondary-foreground">
                Category:
                <span class="text-xs font-medium text-foreground">
                 Hiking Boots
                </span>
               </span>
              </div>
             </div>
            </div>
           </div>
           <div class="flex items-center gap-1.5">
            <span class="text-xs font-normal text-secondary-foreground line-through">
            </span>
            <span class="text-sm font-medium text-mono">
             $110.00
            </span>
            <button class="kt-btn kt-btn-outline ms-2 shrink-0" data-kt-drawer-toggle="#drawers_shop_product_details">
             <i class="ki-filled ki-handcart">
             </i>
             Add to Cart
            </button>
           </div>
          </div>
         </div>
        </div>
        <!-- end: grid -->
       </div>
       <!-- end: list -->
      </div>
     </div>
     <!-- End of Container -->
    </main>
</template>