<template>
    <div class="flex grow">
   <!-- Sidebar -->
   <div class="kt-sidebar bg-background border-e border-e-border fixed top-0 bottom-0 z-20 hidden lg:flex flex-col items-stretch shrink-0 [--kt-drawer-enable:true] lg:[--kt-drawer-enable:false]" data-kt-drawer="true" data-kt-drawer-class="kt-drawer kt-drawer-start top-0 bottom-0" id="sidebar">
    <div class="kt-sidebar-header hidden lg:flex items-center relative justify-between px-3 lg:px-6 shrink-0" id="sidebar_header">
     <a class="dark:hidden" href="/">
      <img class="default-logo min-h-[22px] max-w-none" src="assets/media/app/default-logo.svg"/>
      <img class="small-logo min-h-[22px] max-w-none" src="assets/media/app/mini-logo.svg"/>
     </a>
     <a class="hidden dark:block" href="/">
      <img class="default-logo min-h-[22px] max-w-none" src="assets/media/app/default-logo-dark.svg"/>
      <img class="small-logo min-h-[22px] max-w-none" src="assets/media/app/mini-logo.svg"/>
     </a>
     <button class="kt-btn kt-btn-outline kt-btn-icon size-[30px] absolute start-full top-2/4 -translate-x-2/4 -translate-y-2/4 rtl:translate-x-2/4" data-kt-toggle="body" data-kt-toggle-class="kt-sidebar-collapse" id="sidebar_toggle">
      <i class="ki-filled ki-black-left-line kt-toggle-active:rotate-180 transition-all duration-300 rtl:translate rtl:rotate-180 rtl:kt-toggle-active:rotate-0">
      </i>
     </button>
    </div>
    <div class="kt-sidebar-content flex grow shrink-0 py-5 pe-2" id="sidebar_content">
     <div class="kt-scrollable-y-hover grow shrink-0 flex ps-2 lg:ps-5 pe-1 lg:pe-3" data-kt-scrollable="true" data-kt-scrollable-dependencies="#sidebar_header" data-kt-scrollable-height="auto" data-kt-scrollable-offset="0px" data-kt-scrollable-wrappers="#sidebar_content" id="sidebar_scrollable">
      <!-- Sidebar Menu -->
      <div class="kt-menu flex flex-col grow gap-1" data-kt-menu="true" data-kt-menu-accordion-expand-all="false" id="sidebar_menu">
       <div class="kt-menu-item" data-kt-menu-item-toggle="accordion" data-kt-menu-item-trigger="click">
        <router-link class="kt-menu-link border border-transparent items-center grow kt-menu-item-active:bg-accent/60 dark:menu-item-active:border-border kt-menu-item-active:rounded-lg hover:bg-accent/60 hover:rounded-lg gap-[5px] ps-[10px] pe-[10px] py-[8px]" to="/" tabindex="0">
        <div class="kt-menu-link flex items-center grow cursor-pointer border border-transparent gap-[10px] ps-[10px] pe-[10px] py-[6px]" tabindex="0">
         <span class="kt-menu-icon items-start text-muted-foreground w-[20px]">
          <i class="ki-filled ki-element-11 text-lg">
          </i>
         </span>
         <span class="kt-menu-title text-sm font-medium text-foreground kt-menu-item-active:text-primary kt-menu-link-hover:!text-primary">
          Dashboards
         </span>
        </div>
        </router-link>
       </div>
       <div class="kt-menu-item pt-2.25 pb-px">
        <span class="kt-menu-heading uppercase text-xs font-medium text-muted-foreground ps-[10px] pe-[10px]">
         User
        </span>
       </div>
       <div class="kt-menu-item" data-kt-menu-item-toggle="accordion" data-kt-menu-item-trigger="click">
        <div class="kt-menu-link flex items-center grow cursor-pointer border border-transparent gap-[10px] ps-[10px] pe-[10px] py-[6px]" tabindex="0">
         <span class="kt-menu-icon items-start text-muted-foreground w-[20px]">
          <i class="ki-filled ki-profile-circle text-lg">
          </i>
         </span>
         <span class="kt-menu-title text-sm font-medium text-foreground kt-menu-item-active:text-primary kt-menu-link-hover:!text-primary">
          Public Profile
         </span>
         <span class="kt-menu-arrow text-muted-foreground w-[20px] shrink-0 justify-end ms-1 me-[-10px]">
          <span class="inline-flex kt-menu-item-show:hidden">
           <i class="ki-filled ki-plus text-[11px]">
           </i>
          </span>
          <span class="hidden kt-menu-item-show:inline-flex">
           <i class="ki-filled ki-minus text-[11px]">
           </i>
          </span>
         </span>
        </div>
        <div class="kt-menu-accordion gap-1 ps-[10px] relative before:absolute before:start-[20px] before:top-0 before:bottom-0 before:border-s before:border-border">
         <div class="kt-menu-item" data-kt-menu-item-toggle="accordion" data-kt-menu-item-trigger="click">
          <div class="kt-menu-link border border-transparent grow cursor-pointer gap-[14px] ps-[10px] pe-[10px] py-[8px]" tabindex="0">
           <span class="kt-menu-bullet flex w-[6px] -start-[3px] rtl:start-0 relative before:absolute before:top-0 before:size-[6px] before:rounded-full rtl:before:translate-x-1/2 before:-translate-y-1/2 kt-menu-item-active:before:bg-primary kt-menu-item-hover:before:bg-primary">
           </span>
           <span class="kt-menu-title text-2sm font-normal me-1 text-foreground kt-menu-item-active:text-primary kt-menu-item-active:font-medium kt-menu-link-hover:!text-primary">
            Profiles
           </span>
           <span class="kt-menu-arrow text-muted-foreground w-[20px] shrink-0 justify-end ms-1 me-[-10px]">
            <span class="inline-flex kt-menu-item-show:hidden">
             <i class="ki-filled ki-plus text-[11px]">
             </i>
            </span>
            <span class="hidden kt-menu-item-show:inline-flex">
             <i class="ki-filled ki-minus text-[11px]">
             </i>
            </span>
           </span>
          </div>
          <div class="kt-menu-accordion gap-1 relative before:absolute before:start-[32px] ps-[22px] before:top-0 before:bottom-0 before:border-s before:border-border">
           <div class="kt-menu-item">
            <router-link class="kt-menu-link border border-transparent items-center grow kt-menu-item-active:bg-accent/60 dark:menu-item-active:border-border kt-menu-item-active:rounded-lg hover:bg-accent/60 hover:rounded-lg gap-[5px] ps-[10px] pe-[10px] py-[8px]" to="/default" tabindex="0">
             <span class="kt-menu-bullet flex w-[6px] -start-[3px] rtl:start-0 relative before:absolute before:top-0 before:size-[6px] before:rounded-full rtl:before:translate-x-1/2 before:-translate-y-1/2 kt-menu-item-active:before:bg-primary kt-menu-item-hover:before:bg-primary">
             </span>
             <span class="kt-menu-title text-2sm font-normal text-foreground kt-menu-item-active:text-primary kt-menu-item-active:font-semibold kt-menu-link-hover:!text-primary">
              Default
             </span>
            </router-link>
           </div>
           <div class="kt-menu-item">
            <router-link class="kt-menu-link border border-transparent items-center grow kt-menu-item-active:bg-accent/60 dark:menu-item-active:border-border kt-menu-item-active:rounded-lg hover:bg-accent/60 hover:rounded-lg gap-[5px] ps-[10px] pe-[10px] py-[8px]" to="/creator" tabindex="0">
             <span class="kt-menu-bullet flex w-[6px] -start-[3px] rtl:start-0 relative before:absolute before:top-0 before:size-[6px] before:rounded-full rtl:before:translate-x-1/2 before:-translate-y-1/2 kt-menu-item-active:before:bg-primary kt-menu-item-hover:before:bg-primary">
             </span>
             <span class="kt-menu-title text-2sm font-normal text-foreground kt-menu-item-active:text-primary kt-menu-item-active:font-semibold kt-menu-link-hover:!text-primary">
              Creator
             </span>
            </router-link>
           </div>
           <div class="kt-menu-item">
            <router-link class="kt-menu-link border border-transparent items-center grow kt-menu-item-active:bg-accent/60 dark:menu-item-active:border-border kt-menu-item-active:rounded-lg hover:bg-accent/60 hover:rounded-lg gap-[5px] ps-[10px] pe-[10px] py-[8px]" to="/company" tabindex="0">
             <span class="kt-menu-bullet flex w-[6px] -start-[3px] rtl:start-0 relative before:absolute before:top-0 before:size-[6px] before:rounded-full rtl:before:translate-x-1/2 before:-translate-y-1/2 kt-menu-item-active:before:bg-primary kt-menu-item-hover:before:bg-primary">
             </span>
             <span class="kt-menu-title text-2sm font-normal text-foreground kt-menu-item-active:text-primary kt-menu-item-active:font-semibold kt-menu-link-hover:!text-primary">
              Company
             </span>
            </router-link>
           </div>
          </div>
         </div>
         <div class="kt-menu-item" data-kt-menu-item-toggle="accordion" data-kt-menu-item-trigger="click">
          <div class="kt-menu-link border border-transparent grow cursor-pointer gap-[14px] ps-[10px] pe-[10px] py-[8px]" tabindex="0">
           <span class="kt-menu-bullet flex w-[6px] -start-[3px] rtl:start-0 relative before:absolute before:top-0 before:size-[6px] before:rounded-full rtl:before:translate-x-1/2 before:-translate-y-1/2 kt-menu-item-active:before:bg-primary kt-menu-item-hover:before:bg-primary">
           </span>
           <span class="kt-menu-title text-2sm font-normal me-1 text-foreground kt-menu-item-active:text-primary kt-menu-item-active:font-medium kt-menu-link-hover:!text-primary">
            Projects
           </span>
           <span class="kt-menu-arrow text-muted-foreground w-[20px] shrink-0 justify-end ms-1 me-[-10px]">
            <span class="inline-flex kt-menu-item-show:hidden">
             <i class="ki-filled ki-plus text-[11px]">
             </i>
            </span>
            <span class="hidden kt-menu-item-show:inline-flex">
             <i class="ki-filled ki-minus text-[11px]">
             </i>
            </span>
           </span>
          </div>
          <div class="kt-menu-accordion gap-1 relative before:absolute before:start-[32px] ps-[22px] before:top-0 before:bottom-0 before:border-s before:border-border">
           <div class="kt-menu-item">
            <router-link class="kt-menu-link border border-transparent items-center grow kt-menu-item-active:bg-accent/60 dark:menu-item-active:border-border kt-menu-item-active:rounded-lg hover:bg-accent/60 hover:rounded-lg gap-[5px] ps-[10px] pe-[10px] py-[8px]" to="/columns-3" tabindex="0">
             <span class="kt-menu-bullet flex w-[6px] -start-[3px] rtl:start-0 relative before:absolute before:top-0 before:size-[6px] before:rounded-full rtl:before:translate-x-1/2 before:-translate-y-1/2 kt-menu-item-active:before:bg-primary kt-menu-item-hover:before:bg-primary">
             </span>
             <span class="kt-menu-title text-2sm font-normal text-foreground kt-menu-item-active:text-primary kt-menu-item-active:font-semibold kt-menu-link-hover:!text-primary">
              3 Columns
             </span>
            </router-link>
           </div>
           <div class="kt-menu-item">
            <router-link class="kt-menu-link border border-transparent items-center grow kt-menu-item-active:bg-accent/60 dark:menu-item-active:border-border kt-menu-item-active:rounded-lg hover:bg-accent/60 hover:rounded-lg gap-[5px] ps-[10px] pe-[10px] py-[8px]" to="/columns-2" tabindex="0">
             <span class="kt-menu-bullet flex w-[6px] -start-[3px] rtl:start-0 relative before:absolute before:top-0 before:size-[6px] before:rounded-full rtl:before:translate-x-1/2 before:-translate-y-1/2 kt-menu-item-active:before:bg-primary kt-menu-item-hover:before:bg-primary">
             </span>
             <span class="kt-menu-title text-2sm font-normal text-foreground kt-menu-item-active:text-primary kt-menu-item-active:font-semibold kt-menu-link-hover:!text-primary">
              2 Columns
             </span>
            </router-link>
           </div>
          </div>
         </div>
         <div class="kt-menu-item">
          <router-link class="kt-menu-link border border-transparent items-center grow kt-menu-item-active:bg-accent/60 dark:menu-item-active:border-border kt-menu-item-active:rounded-lg hover:bg-accent/60 hover:rounded-lg gap-[14px] ps-[10px] pe-[10px] py-[8px]" to="/works" tabindex="0">
           <span class="kt-menu-bullet flex w-[6px] -start-[3px] rtl:start-0 relative before:absolute before:top-0 before:size-[6px] before:rounded-full rtl:before:translate-x-1/2 before:-translate-y-1/2 kt-menu-item-active:before:bg-primary kt-menu-item-hover:before:bg-primary">
           </span>
           <span class="kt-menu-title text-2sm font-normal text-foreground kt-menu-item-active:text-primary kt-menu-item-active:font-semibold kt-menu-link-hover:!text-primary">
            Works
           </span>
          </router-link>
         </div>
         <div class="kt-menu-item">
          <router-link class="kt-menu-link border border-transparent items-center grow kt-menu-item-active:bg-accent/60 dark:menu-item-active:border-border kt-menu-item-active:rounded-lg hover:bg-accent/60 hover:rounded-lg gap-[14px] ps-[10px] pe-[10px] py-[8px]" to="/teams" tabindex="0">
           <span class="kt-menu-bullet flex w-[6px] -start-[3px] rtl:start-0 relative before:absolute before:top-0 before:size-[6px] before:rounded-full rtl:before:translate-x-1/2 before:-translate-y-1/2 kt-menu-item-active:before:bg-primary kt-menu-item-hover:before:bg-primary">
           </span>
           <span class="kt-menu-title text-2sm font-normal text-foreground kt-menu-item-active:text-primary kt-menu-item-active:font-semibold kt-menu-link-hover:!text-primary">
            Teams
           </span>
          </router-link>
         </div>
         <div class="kt-menu-item">
          <router-link class="kt-menu-link border border-transparent items-center grow kt-menu-item-active:bg-accent/60 dark:menu-item-active:border-border kt-menu-item-active:rounded-lg hover:bg-accent/60 hover:rounded-lg gap-[14px] ps-[10px] pe-[10px] py-[8px]" to="/network" tabindex="0">
           <span class="kt-menu-bullet flex w-[6px] -start-[3px] rtl:start-0 relative before:absolute before:top-0 before:size-[6px] before:rounded-full rtl:before:translate-x-1/2 before:-translate-y-1/2 kt-menu-item-active:before:bg-primary kt-menu-item-hover:before:bg-primary">
           </span>
           <span class="kt-menu-title text-2sm font-normal text-foreground kt-menu-item-active:text-primary kt-menu-item-active:font-semibold kt-menu-link-hover:!text-primary">
            Network
           </span>
          </router-link>
         </div>
         <div class="kt-menu-item">
          <router-link class="kt-menu-link border border-transparent items-center grow kt-menu-item-active:bg-accent/60 dark:menu-item-active:border-border kt-menu-item-active:rounded-lg hover:bg-accent/60 hover:rounded-lg gap-[14px] ps-[10px] pe-[10px] py-[8px]" to="/activity" tabindex="0">
           <span class="kt-menu-bullet flex w-[6px] -start-[3px] rtl:start-0 relative before:absolute before:top-0 before:size-[6px] before:rounded-full rtl:before:translate-x-1/2 before:-translate-y-1/2 kt-menu-item-active:before:bg-primary kt-menu-item-hover:before:bg-primary">
           </span>
           <span class="kt-menu-title text-2sm font-normal text-foreground kt-menu-item-active:text-primary kt-menu-item-active:font-semibold kt-menu-link-hover:!text-primary">
            Activity
           </span>
          </router-link>
         </div>
         <div class="kt-menu-item flex-col-reverse" data-kt-menu-item-toggle="accordion" data-kt-menu-item-trigger="click">
          <div class="kt-menu-link border border-transparent grow cursor-pointer gap-[14px] ps-[10px] pe-[10px] py-[8px]" tabindex="0">
           <span class="kt-menu-bullet flex w-[6px] -start-[3px] rtl:start-0 relative before:absolute before:top-0 before:size-[6px] before:rounded-full rtl:before:translate-x-1/2 before:-translate-y-1/2 kt-menu-item-active:before:bg-primary kt-menu-item-hover:before:bg-primary">
           </span>
           <span class="kt-menu-title text-2sm font-normal text-secondary-foreground">
            <span class="hidden kt-menu-item-show:!flex">
             Show less
            </span>
            <span class="flex kt-menu-item-show:hidden">
             Show more
            </span>
           </span>
           <span class="kt-menu-arrow text-muted-foreground w-[20px] shrink-0 justify-end ms-1 me-[-10px]">
            <span class="inline-flex kt-menu-item-show:hidden">
             <i class="ki-filled ki-plus text-[11px]">
             </i>
            </span>
            <span class="hidden kt-menu-item-show:inline-flex">
             <i class="ki-filled ki-minus text-[11px]">
             </i>
            </span>
           </span>
          </div>
          <div class="kt-menu-accordion gap-1">
           <div class="kt-menu-item">
            <router-link class="kt-menu-link border border-transparent items-center grow kt-menu-item-active:bg-accent/60 dark:menu-item-active:border-border kt-menu-item-active:rounded-lg hover:bg-accent/60 hover:rounded-lg gap-[14px] ps-[10px] pe-[10px] py-[8px]" to="/empty" tabindex="0">
             <span class="kt-menu-bullet flex w-[6px] -start-[3px] rtl:start-0 relative before:absolute before:top-0 before:size-[6px] before:rounded-full rtl:before:translate-x-1/2 before:-translate-y-1/2 kt-menu-item-active:before:bg-primary kt-menu-item-hover:before:bg-primary">
             </span>
             <span class="kt-menu-title text-2sm font-normal text-foreground kt-menu-item-active:text-primary kt-menu-item-active:font-semibold kt-menu-link-hover:!text-primary">
              Empty
             </span>
            </router-link>
           </div>
          </div>
         </div>
        </div>
       </div>
       
       <div class="kt-menu-item pt-2.25 pb-px">
        <span class="kt-menu-heading uppercase text-xs font-medium text-muted-foreground ps-[10px] pe-[10px]">
         Apps
        </span>
       </div>
       <div class="kt-menu-item" data-kt-menu-item-toggle="accordion" data-kt-menu-item-trigger="click">
        <div class="kt-menu-link flex items-center grow cursor-pointer border border-transparent gap-[10px] ps-[10px] pe-[10px] py-[6px]" tabindex="0">
         <span class="kt-menu-icon items-start text-muted-foreground w-[20px]">
          <i class="ki-filled ki-users text-lg">
          </i>
         </span>
         <span class="kt-menu-title text-sm font-medium text-foreground kt-menu-item-active:text-primary kt-menu-link-hover:!text-primary">
          Store - Client
         </span>
         <span class="kt-menu-arrow text-muted-foreground w-[20px] shrink-0 justify-end ms-1 me-[-10px]">
          <span class="inline-flex kt-menu-item-show:hidden">
           <i class="ki-filled ki-plus text-[11px]">
           </i>
          </span>
          <span class="hidden kt-menu-item-show:inline-flex">
           <i class="ki-filled ki-minus text-[11px]">
           </i>
          </span>
         </span>
        </div>
        <div class="kt-menu-accordion gap-1 ps-[10px] relative before:absolute before:start-[20px] before:top-0 before:bottom-0 before:border-s before:border-border">
         <div class="kt-menu-item">
          <router-link class="kt-menu-link border border-transparent items-center grow kt-menu-item-active:bg-accent/60 dark:menu-item-active:border-border kt-menu-item-active:rounded-lg hover:bg-accent/60 hover:rounded-lg gap-[14px] ps-[10px] pe-[10px] py-[8px]" to="/store/home" tabindex="0">
           <span class="kt-menu-bullet flex w-[6px] -start-[3px] rtl:start-0 relative before:absolute before:top-0 before:size-[6px] before:rounded-full rtl:before:translate-x-1/2 before:-translate-y-1/2 kt-menu-item-active:before:bg-primary kt-menu-item-hover:before:bg-primary">
           </span>
           <span class="kt-menu-title text-2sm font-normal text-foreground kt-menu-item-active:text-primary kt-menu-item-active:font-semibold kt-menu-link-hover:!text-primary">
            Home
           </span>
          </router-link>
         </div>
         <div class="kt-menu-item">
          <a class="kt-menu-link border border-transparent items-center grow kt-menu-item-active:bg-accent/60 dark:menu-item-active:border-border kt-menu-item-active:rounded-lg hover:bg-accent/60 hover:rounded-lg gap-[14px] ps-[10px] pe-[10px] py-[8px]" href="html/demo1/store-client/search-results-grid.html" tabindex="0">
           <span class="kt-menu-bullet flex w-[6px] -start-[3px] rtl:start-0 relative before:absolute before:top-0 before:size-[6px] before:rounded-full rtl:before:translate-x-1/2 before:-translate-y-1/2 kt-menu-item-active:before:bg-primary kt-menu-item-hover:before:bg-primary">
           </span>
           <span class="kt-menu-title text-2sm font-normal text-foreground kt-menu-item-active:text-primary kt-menu-item-active:font-semibold kt-menu-link-hover:!text-primary">
            Search Results - Grid
           </span>
          </a>
         </div>
         <div class="kt-menu-item">
          <a class="kt-menu-link border border-transparent items-center grow kt-menu-item-active:bg-accent/60 dark:menu-item-active:border-border kt-menu-item-active:rounded-lg hover:bg-accent/60 hover:rounded-lg gap-[14px] ps-[10px] pe-[10px] py-[8px]" href="html/demo1/store-client/search-results-list.html" tabindex="0">
           <span class="kt-menu-bullet flex w-[6px] -start-[3px] rtl:start-0 relative before:absolute before:top-0 before:size-[6px] before:rounded-full rtl:before:translate-x-1/2 before:-translate-y-1/2 kt-menu-item-active:before:bg-primary kt-menu-item-hover:before:bg-primary">
           </span>
           <span class="kt-menu-title text-2sm font-normal text-foreground kt-menu-item-active:text-primary kt-menu-item-active:font-semibold kt-menu-link-hover:!text-primary">
            Search Results - List
           </span>
          </a>
         </div>
         <div class="kt-menu-item">
          <a class="kt-menu-link border border-transparent items-center grow kt-menu-item-active:bg-accent/60 dark:menu-item-active:border-border kt-menu-item-active:rounded-lg hover:bg-accent/60 hover:rounded-lg gap-[14px] ps-[10px] pe-[10px] py-[8px]" href="html/demo1/store-client/product-details.html" tabindex="0">
           <span class="kt-menu-bullet flex w-[6px] -start-[3px] rtl:start-0 relative before:absolute before:top-0 before:size-[6px] before:rounded-full rtl:before:translate-x-1/2 before:-translate-y-1/2 kt-menu-item-active:before:bg-primary kt-menu-item-hover:before:bg-primary">
           </span>
           <span class="kt-menu-title text-2sm font-normal text-foreground kt-menu-item-active:text-primary kt-menu-item-active:font-semibold kt-menu-link-hover:!text-primary">
            Product Details
           </span>
          </a>
         </div>
         <div class="kt-menu-item">
          <a class="kt-menu-link border border-transparent items-center grow kt-menu-item-active:bg-accent/60 dark:menu-item-active:border-border kt-menu-item-active:rounded-lg hover:bg-accent/60 hover:rounded-lg gap-[14px] ps-[10px] pe-[10px] py-[8px]" href="html/demo1/store-client/shopping-cart.html" tabindex="0">
           <span class="kt-menu-bullet flex w-[6px] -start-[3px] rtl:start-0 relative before:absolute before:top-0 before:size-[6px] before:rounded-full rtl:before:translate-x-1/2 before:-translate-y-1/2 kt-menu-item-active:before:bg-primary kt-menu-item-hover:before:bg-primary">
           </span>
           <span class="kt-menu-title text-2sm font-normal text-foreground kt-menu-item-active:text-primary kt-menu-item-active:font-semibold kt-menu-link-hover:!text-primary">
            Shopping Cart
           </span>
          </a>
         </div>
         <div class="kt-menu-item">
          <a class="kt-menu-link border border-transparent items-center grow kt-menu-item-active:bg-accent/60 dark:menu-item-active:border-border kt-menu-item-active:rounded-lg hover:bg-accent/60 hover:rounded-lg gap-[14px] ps-[10px] pe-[10px] py-[8px]" href="html/demo1/store-client/wishlist.html" tabindex="0">
           <span class="kt-menu-bullet flex w-[6px] -start-[3px] rtl:start-0 relative before:absolute before:top-0 before:size-[6px] before:rounded-full rtl:before:translate-x-1/2 before:-translate-y-1/2 kt-menu-item-active:before:bg-primary kt-menu-item-hover:before:bg-primary">
           </span>
           <span class="kt-menu-title text-2sm font-normal text-foreground kt-menu-item-active:text-primary kt-menu-item-active:font-semibold kt-menu-link-hover:!text-primary">
            Wishlist
           </span>
          </a>
         </div>
         <div class="kt-menu-item" data-kt-menu-item-toggle="accordion" data-kt-menu-item-trigger="click">
          <div class="kt-menu-link border border-transparent grow cursor-pointer gap-[14px] ps-[10px] pe-[10px] py-[8px]" tabindex="0">
           <span class="kt-menu-bullet flex w-[6px] -start-[3px] rtl:start-0 relative before:absolute before:top-0 before:size-[6px] before:rounded-full rtl:before:translate-x-1/2 before:-translate-y-1/2 kt-menu-item-active:before:bg-primary kt-menu-item-hover:before:bg-primary">
           </span>
           <span class="kt-menu-title text-2sm font-normal me-1 text-foreground kt-menu-item-active:text-primary kt-menu-item-active:font-medium kt-menu-link-hover:!text-primary">
            Checkout
           </span>
           <span class="kt-menu-arrow text-muted-foreground w-[20px] shrink-0 justify-end ms-1 me-[-10px]">
            <span class="inline-flex kt-menu-item-show:hidden">
             <i class="ki-filled ki-plus text-[11px]">
             </i>
            </span>
            <span class="hidden kt-menu-item-show:inline-flex">
             <i class="ki-filled ki-minus text-[11px]">
             </i>
            </span>
           </span>
          </div>
          <div class="kt-menu-accordion gap-1 relative before:absolute before:start-[32px] ps-[22px] before:top-0 before:bottom-0 before:border-s before:border-border">
           <div class="kt-menu-item">
            <a class="kt-menu-link border border-transparent items-center grow kt-menu-item-active:bg-accent/60 dark:menu-item-active:border-border kt-menu-item-active:rounded-lg hover:bg-accent/60 hover:rounded-lg gap-[5px] ps-[10px] pe-[10px] py-[8px]" href="html/demo1/store-client/checkout/order-summary.html" tabindex="0">
             <span class="kt-menu-bullet flex w-[6px] -start-[3px] rtl:start-0 relative before:absolute before:top-0 before:size-[6px] before:rounded-full rtl:before:translate-x-1/2 before:-translate-y-1/2 kt-menu-item-active:before:bg-primary kt-menu-item-hover:before:bg-primary">
             </span>
             <span class="kt-menu-title text-2sm font-normal text-foreground kt-menu-item-active:text-primary kt-menu-item-active:font-semibold kt-menu-link-hover:!text-primary">
              Order Summary
             </span>
            </a>
           </div>
           <div class="kt-menu-item">
            <a class="kt-menu-link border border-transparent items-center grow kt-menu-item-active:bg-accent/60 dark:menu-item-active:border-border kt-menu-item-active:rounded-lg hover:bg-accent/60 hover:rounded-lg gap-[5px] ps-[10px] pe-[10px] py-[8px]" href="html/demo1/store-client/checkout/shipping-info.html" tabindex="0">
             <span class="kt-menu-bullet flex w-[6px] -start-[3px] rtl:start-0 relative before:absolute before:top-0 before:size-[6px] before:rounded-full rtl:before:translate-x-1/2 before:-translate-y-1/2 kt-menu-item-active:before:bg-primary kt-menu-item-hover:before:bg-primary">
             </span>
             <span class="kt-menu-title text-2sm font-normal text-foreground kt-menu-item-active:text-primary kt-menu-item-active:font-semibold kt-menu-link-hover:!text-primary">
              Shipping Info
             </span>
            </a>
           </div>
           <div class="kt-menu-item">
            <a class="kt-menu-link border border-transparent items-center grow kt-menu-item-active:bg-accent/60 dark:menu-item-active:border-border kt-menu-item-active:rounded-lg hover:bg-accent/60 hover:rounded-lg gap-[5px] ps-[10px] pe-[10px] py-[8px]" href="html/demo1/store-client/checkout/payment-method.html" tabindex="0">
             <span class="kt-menu-bullet flex w-[6px] -start-[3px] rtl:start-0 relative before:absolute before:top-0 before:size-[6px] before:rounded-full rtl:before:translate-x-1/2 before:-translate-y-1/2 kt-menu-item-active:before:bg-primary kt-menu-item-hover:before:bg-primary">
             </span>
             <span class="kt-menu-title text-2sm font-normal text-foreground kt-menu-item-active:text-primary kt-menu-item-active:font-semibold kt-menu-link-hover:!text-primary">
              Payment Method
             </span>
            </a>
           </div>
           <div class="kt-menu-item">
            <a class="kt-menu-link border border-transparent items-center grow kt-menu-item-active:bg-accent/60 dark:menu-item-active:border-border kt-menu-item-active:rounded-lg hover:bg-accent/60 hover:rounded-lg gap-[5px] ps-[10px] pe-[10px] py-[8px]" href="html/demo1/store-client/checkout/order-placed.html" tabindex="0">
             <span class="kt-menu-bullet flex w-[6px] -start-[3px] rtl:start-0 relative before:absolute before:top-0 before:size-[6px] before:rounded-full rtl:before:translate-x-1/2 before:-translate-y-1/2 kt-menu-item-active:before:bg-primary kt-menu-item-hover:before:bg-primary">
             </span>
             <span class="kt-menu-title text-2sm font-normal text-foreground kt-menu-item-active:text-primary kt-menu-item-active:font-semibold kt-menu-link-hover:!text-primary">
              Order Placed
             </span>
            </a>
           </div>
          </div>
         </div>
         <div class="kt-menu-item">
          <a class="kt-menu-link border border-transparent items-center grow kt-menu-item-active:bg-accent/60 dark:menu-item-active:border-border kt-menu-item-active:rounded-lg hover:bg-accent/60 hover:rounded-lg gap-[14px] ps-[10px] pe-[10px] py-[8px]" href="html/demo1/store-client/my-orders.html" tabindex="0">
           <span class="kt-menu-bullet flex w-[6px] -start-[3px] rtl:start-0 relative before:absolute before:top-0 before:size-[6px] before:rounded-full rtl:before:translate-x-1/2 before:-translate-y-1/2 kt-menu-item-active:before:bg-primary kt-menu-item-hover:before:bg-primary">
           </span>
           <span class="kt-menu-title text-2sm font-normal text-foreground kt-menu-item-active:text-primary kt-menu-item-active:font-semibold kt-menu-link-hover:!text-primary">
            My Orders
           </span>
          </a>
         </div>
         <div class="kt-menu-item">
          <a class="kt-menu-link border border-transparent items-center grow kt-menu-item-active:bg-accent/60 dark:menu-item-active:border-border kt-menu-item-active:rounded-lg hover:bg-accent/60 hover:rounded-lg gap-[14px] ps-[10px] pe-[10px] py-[8px]" href="html/demo1/store-client/order-receipt.html" tabindex="0">
           <span class="kt-menu-bullet flex w-[6px] -start-[3px] rtl:start-0 relative before:absolute before:top-0 before:size-[6px] before:rounded-full rtl:before:translate-x-1/2 before:-translate-y-1/2 kt-menu-item-active:before:bg-primary kt-menu-item-hover:before:bg-primary">
           </span>
           <span class="kt-menu-title text-2sm font-normal text-foreground kt-menu-item-active:text-primary kt-menu-item-active:font-semibold kt-menu-link-hover:!text-primary">
            Order Receipt
           </span>
          </a>
         </div>
        </div>
       </div>

       <!-- Store Admin -->
        <div class="kt-menu-item" data-kt-menu-item-toggle="accordion" data-kt-menu-item-trigger="click">
        <div class="kt-menu-link flex items-center grow cursor-pointer border border-transparent gap-[10px] ps-[10px] pe-[10px] py-[6px]" tabindex="0">
         <span class="kt-menu-icon items-start text-muted-foreground w-[20px]">
          <i class="ki-filled ki-setting text-lg">
          </i>
         </span>
         <span class="kt-menu-title text-sm font-medium text-foreground kt-menu-item-active:text-primary kt-menu-link-hover:!text-primary">
          Store - Admin
         </span>
         <span class="kt-menu-arrow text-muted-foreground w-[20px] shrink-0 justify-end ms-1 me-[-10px]">
          <span class="inline-flex kt-menu-item-show:hidden">
           <i class="ki-filled ki-plus text-[11px]">
           </i>
          </span>
          <span class="hidden kt-menu-item-show:inline-flex">
           <i class="ki-filled ki-minus text-[11px]">
           </i>
          </span>
         </span>
        </div>
        <div class="kt-menu-accordion gap-1 ps-[10px] relative before:absolute before:start-[20px] before:top-0 before:bottom-0 before:border-s before:border-border">
         <div class="kt-menu-item">
          <router-link class="kt-menu-link border border-transparent items-center grow kt-menu-item-active:bg-accent/60 dark:menu-item-active:border-border kt-menu-item-active:rounded-lg hover:bg-accent/60 hover:rounded-lg gap-[14px] ps-[10px] pe-[10px] py-[8px]" to="/products" tabindex="0">
           <span class="kt-menu-bullet flex w-[6px] -start-[3px] rtl:start-0 relative before:absolute before:top-0 before:size-[6px] before:rounded-full rtl:before:translate-x-1/2 before:-translate-y-1/2 kt-menu-item-active:before:bg-primary kt-menu-item-hover:before:bg-primary">
           </span>
           <span class="kt-menu-title text-2sm font-normal text-foreground kt-menu-item-active:text-primary kt-menu-item-active:font-semibold kt-menu-link-hover:!text-primary">
            Products
           </span>
          </router-link>
         </div>
         <div class="kt-menu-item">
          <router-link class="kt-menu-link border border-transparent items-center grow kt-menu-item-active:bg-accent/60 dark:menu-item-active:border-border kt-menu-item-active:rounded-lg hover:bg-accent/60 hover:rounded-lg gap-[14px] ps-[10px] pe-[10px] py-[8px]" to="/categories" tabindex="0">
           <span class="kt-menu-bullet flex w-[6px] -start-[3px] rtl:start-0 relative before:absolute before:top-0 before:size-[6px] before:rounded-full rtl:before:translate-x-1/2 before:-translate-y-1/2 kt-menu-item-active:before:bg-primary kt-menu-item-hover:before:bg-primary">
           </span>
           <span class="kt-menu-title text-2sm font-normal text-foreground kt-menu-item-active:text-primary kt-menu-item-active:font-semibold kt-menu-link-hover:!text-primary">
            Categories
           </span>
          </router-link>
         </div>
         <div class="kt-menu-item">
          <router-link class="kt-menu-link border border-transparent items-center grow kt-menu-item-active:bg-accent/60 dark:menu-item-active:border-border kt-menu-item-active:rounded-lg hover:bg-accent/60 hover:rounded-lg gap-[14px] ps-[10px] pe-[10px] py-[8px]" to="/brands" tabindex="0">
           <span class="kt-menu-bullet flex w-[6px] -start-[3px] rtl:start-0 relative before:absolute before:top-0 before:size-[6px] before:rounded-full rtl:before:translate-x-1/2 before:-translate-y-1/2 kt-menu-item-active:before:bg-primary kt-menu-item-hover:before:bg-primary">
           </span>
           <span class="kt-menu-title text-2sm font-normal text-foreground kt-menu-item-active:text-primary kt-menu-item-active:font-semibold kt-menu-link-hover:!text-primary">
            Brands
           </span>
          </router-link>
         </div>
         <div class="kt-menu-item">
          <router-link class="kt-menu-link border border-transparent items-center grow kt-menu-item-active:bg-accent/60 dark:menu-item-active:border-border kt-menu-item-active:rounded-lg hover:bg-accent/60 hover:rounded-lg gap-[14px] ps-[10px] pe-[10px] py-[8px]" to="/units" tabindex="0">
           <span class="kt-menu-bullet flex w-[6px] -start-[3px] rtl:start-0 relative before:absolute before:top-0 before:size-[6px] before:rounded-full rtl:before:translate-x-1/2 before:-translate-y-1/2 kt-menu-item-active:before:bg-primary kt-menu-item-hover:before:bg-primary">
           </span>
           <span class="kt-menu-title text-2sm font-normal text-foreground kt-menu-item-active:text-primary kt-menu-item-active:font-semibold kt-menu-link-hover:!text-primary">
            Units
           </span>
          </router-link>
         </div>
         
         
         
         
        </div>
       </div>
      </div>
      <!-- End of Sidebar Menu -->
     </div>
    </div>
   </div>
   <!-- End of Sidebar -->
   <!-- Wrapper -->
   <div class="kt-wrapper flex grow flex-col">
    <!-- Header -->
    <header class="kt-header fixed top-0 z-10 start-0 end-0 flex items-stretch shrink-0 bg-background" data-kt-sticky="true" data-kt-sticky-class="border-b border-border" data-kt-sticky-name="header" id="header">
     <!-- Container -->
     <div class="kt-container-fixed flex justify-between items-stretch lg:gap-4" id="headerContainer">
      <!-- Mobile Logo -->
      <div class="flex gap-2.5 lg:hidden items-center -ms-1">
       <a class="shrink-0" href="/">
        <img class="max-h-[25px] w-full" src="assets/media/app/mini-logo.svg"/>
       </a>
       <div class="flex items-center">
        <button class="kt-btn kt-btn-icon kt-btn-ghost" data-kt-drawer-toggle="#sidebar">
         <i class="ki-filled ki-menu">
         </i>
        </button>
        <button class="kt-btn kt-btn-icon kt-btn-ghost" data-kt-drawer-toggle="#mega_menu_wrapper">
         <i class="ki-filled ki-burger-menu-2">
         </i>
        </button>
       </div>
      </div>
      <!-- End of Mobile Logo -->
      <!--Megamenu Contaoner-->
      <div class="flex items-stretch" id="megaMenuContainer">
       <!--Megamenu Inner-->
       <div class="flex items-stretch [--kt-reparent-mode:prepend] [--kt-reparent-target:body] lg:[--kt-reparent-target:#megaMenuContainer] lg:[--kt-reparent-mode:prepend]" data-kt-reparent="true">
        <!--Megamenu Wrapper-->
        <div class="hidden lg:flex lg:items-stretch [--kt-drawer-enable:true] lg:[--kt-drawer-enable:false]" data-kt-drawer="true" data-kt-drawer-class="kt-drawer kt-drawer-start fixed z-10 top-0 bottom-0 w-full me-5 max-w-[250px] p-5 lg:p-0 overflow-auto" id="mega_menu_wrapper">
         <!--Megamenu-->
         <div class="kt-menu flex-col lg:flex-row gap-5 lg:gap-7.5" data-kt-menu="true" id="mega_menu">
          <!--Megamenu Item-->
          <div class="kt-menu-item active">
           <a class="kt-menu-link text-nowrap text-sm text-foreground font-medium kt-menu-item-hover:text-primary kt-menu-item-active:text-mono kt-menu-item-active:font-medium" href="/">
            <span class="kt-menu-title text-nowrap">
             Home
            </span>
           </a>
          </div>
          <!--End of Megamenu Item-->
          <!--Megamenu Item-->
          <div class="kt-menu-item" data-kt-menu-item-placement="bottom-start" data-kt-menu-item-placement-rtl="bottom-end" data-kt-menu-item-toggle="accordion|lg:dropdown" data-kt-menu-item-trigger="click|lg:hover">
           <div class="kt-menu-link text-sm text-foreground kt-menu-link-hover:text-primary kt-menu-item-active:text-mono kt-menu-item-show:text-primary kt-menu-item-here:text-mono kt-menu-item-active:font-medium kt-menu-item-here:font-medium">
            <span class="kt-menu-title text-nowrap">
             Profiles
            </span>
            <span class="kt-menu-arrow flex lg:hidden">
             <span class="kt-menu-item-show:hidden text-muted-foreground">
              <i class="ki-filled ki-plus text-xs">
              </i>
             </span>
             <span class="hidden kt-menu-item-show:inline-flex">
              <i class="ki-filled ki-minus text-xs">
              </i>
             </span>
            </span>
           </div>
           <div class="kt-menu-dropdown w-full gap-0 lg:max-w-[900px]">
            <div class="pt-4 pb-2 lg:p-7.5">
             <div class="grid lg:grid-cols-2 gap-5 lg:gap-10">
              <div class="kt-menu kt-menu-default kt-menu-fit flex-col">
               <h3 class="text-sm text-foreground font-semibold leading-none ps-2.5 mb-2 lg:mb-5">
                Profiles
               </h3>
               <div class="grid lg:grid-cols-2 lg:gap-5">
                <div class="flex flex-col gap-0.5">
                 <div class="kt-menu-item">
                  <a class="kt-menu-link" href="/default" tabindex="0">
                   <span class="kt-menu-icon">
                    <i class="ki-filled ki-badge">
                    </i>
                   </span>
                   <span class="kt-menu-title grow-0">
                    Default
                   </span>
                  </a>
                 </div>
                 <div class="kt-menu-item">
                  <a class="kt-menu-link" href="/creator" tabindex="0">
                   <span class="kt-menu-icon">
                    <i class="ki-filled ki-coffee">
                    </i>
                   </span>
                   <span class="kt-menu-title grow-0">
                    Creator
                   </span>
                  </a>
                 </div>
                 <div class="kt-menu-item">
                  <a class="kt-menu-link" href="/company" tabindex="0">
                   <span class="kt-menu-icon">
                    <i class="ki-filled ki-abstract-41">
                    </i>
                   </span>
                   <span class="kt-menu-title grow-0">
                    Company
                   </span>
                  </a>
                 </div>
                 
                 <div class="kt-menu-item">
                  <a class="kt-menu-link" href="#" tabindex="0">
                   <span class="kt-menu-icon">
                    <i class="ki-filled ki-financial-schedule">
                    </i>
                   </span>
                   <span class="kt-menu-title grow-0">
                    Freelancer
                   </span>
                   <span class="kt-menu-badge">
                    <span class="kt-badge kt-badge-sm">
                     Soon
                    </span>
                   </span>
                  </a>
                 </div>
                 <div class="kt-menu-item">
                  <a class="kt-menu-link" href="#" tabindex="0">
                   <span class="kt-menu-icon">
                    <i class="ki-filled ki-technology-4">
                    </i>
                   </span>
                   <span class="kt-menu-title grow-0">
                    Developer
                   </span>
                   <span class="kt-menu-badge">
                    <span class="kt-badge kt-badge-sm">
                     Soon
                    </span>
                   </span>
                  </a>
                 </div>
                 <div class="kt-menu-item">
                  <a class="kt-menu-link" href="#" tabindex="0">
                   <span class="kt-menu-icon">
                    <i class="ki-filled ki-users">
                    </i>
                   </span>
                   <span class="kt-menu-title grow-0">
                    Team
                   </span>
                   <span class="kt-menu-badge">
                    <span class="kt-badge kt-badge-sm">
                     Soon
                    </span>
                   </span>
                  </a>
                 </div>
                 <div class="kt-menu-item">
                  <a class="kt-menu-link" href="#" tabindex="0">
                   <span class="kt-menu-icon">
                    <i class="ki-filled ki-calendar-tick">
                    </i>
                   </span>
                   <span class="kt-menu-title grow-0">
                    Events
                   </span>
                   <span class="kt-menu-badge">
                    <span class="kt-badge kt-badge-sm">
                     Soon
                    </span>
                   </span>
                  </a>
                 </div>
                </div>
               </div>
              </div>
              <div class="kt-menu kt-menu-default kt-menu-fit flex-col">
               <h3 class="text-sm text-foreground font-semibold leading-none ps-2.5 mb-2 lg:mb-5">
                Other Pages
               </h3>
               <div class="grid lg:grid-cols-2 lg:gap-5">
                <div class="flex flex-col gap-0.5">
                 <div class="kt-menu-item">
                  <a class="kt-menu-link" href="/columns-3" tabindex="0">
                   <span class="kt-menu-icon">
                    <i class="ki-filled ki-element-6">
                    </i>
                   </span>
                   <span class="kt-menu-title grow-0">
                    Projects - 3 Columns
                   </span>
                  </a>
                 </div>
                 <div class="kt-menu-item">
                  <a class="kt-menu-link" href="/columns-2" tabindex="0">
                   <span class="kt-menu-icon">
                    <i class="ki-filled ki-element-4">
                    </i>
                   </span>
                   <span class="kt-menu-title grow-0">
                    Projects - 2 Columns
                   </span>
                  </a>
                 </div>
                 <div class="kt-menu-item">
                  <a class="kt-menu-link" href="/works" tabindex="0">
                   <span class="kt-menu-icon">
                    <i class="ki-filled ki-office-bag">
                    </i>
                   </span>
                   <span class="kt-menu-title grow-0">
                    Works
                   </span>
                  </a>
                 </div>
                 <div class="kt-menu-item">
                  <a class="kt-menu-link" href="/teams" tabindex="0">
                   <span class="kt-menu-icon">
                    <i class="ki-filled ki-people">
                    </i>
                   </span>
                   <span class="kt-menu-title grow-0">
                    Teams
                   </span>
                  </a>
                 </div>
                 <div class="kt-menu-item">
                  <a class="kt-menu-link" href="/network" tabindex="0">
                   <span class="kt-menu-icon">
                    <i class="ki-filled ki-icon">
                    </i>
                   </span>
                   <span class="kt-menu-title grow-0">
                    Network
                   </span>
                  </a>
                 </div>
                 <div class="kt-menu-item">
                  <a class="kt-menu-link" href="/activity" tabindex="0">
                   <span class="kt-menu-icon">
                    <i class="ki-filled ki-chart-line-up-2">
                    </i>
                   </span>
                   <span class="kt-menu-title grow-0">
                    Activity
                   </span>
                  </a>
                 </div>
                 
                </div>
                <div>
                 <div class="kt-menu-item">
                  <a class="kt-menu-link" href="/empty" tabindex="0">
                   <span class="kt-menu-icon">
                    <i class="ki-filled ki-file-sheet">
                    </i>
                   </span>
                   <span class="kt-menu-title grow-0">
                    Empty Page
                   </span>
                  </a>
                 </div>
                 <div class="kt-menu-item">
                  <a class="kt-menu-link" href="#" tabindex="0">
                   <span class="kt-menu-icon">
                    <i class="ki-filled ki-document">
                    </i>
                   </span>
                   <span class="kt-menu-title grow-0">
                    Documents
                   </span>
                   <span class="kt-menu-badge">
                    <span class="kt-badge kt-badge-sm">
                     Soon
                    </span>
                   </span>
                  </a>
                 </div>
                 <div class="kt-menu-item">
                  <a class="kt-menu-link" href="#" tabindex="0">
                   <span class="kt-menu-icon">
                    <i class="ki-filled ki-award">
                    </i>
                   </span>
                   <span class="kt-menu-title grow-0">
                    Badges
                   </span>
                   <span class="kt-menu-badge">
                    <span class="kt-badge kt-badge-sm">
                     Soon
                    </span>
                   </span>
                  </a>
                 </div>
                 <div class="kt-menu-item">
                  <a class="kt-menu-link" href="#" tabindex="0">
                   <span class="kt-menu-icon">
                    <i class="ki-filled ki-gift">
                    </i>
                   </span>
                   <span class="kt-menu-title grow-0">
                    Awards
                   </span>
                   <span class="kt-menu-badge">
                    <span class="kt-badge kt-badge-sm">
                     Soon
                    </span>
                   </span>
                  </a>
                 </div>
                </div>
               </div>
              </div>
             </div>
            </div>
            <div class="flex flex-wrap items-center lg:justify-between rounded-xl lg:rounded-t-none border border-border lg:border-0 lg:border-t lg:border-t-border px-4 py-4 lg:px-7.5 lg:py-5 gap-2.5 bg-muted/50">
             <div class="flex flex-col gap-1.5">
              <div class="text-base font-semibold text-mono leading-none">
               Read to Get Started ?
              </div>
              <div class="text-sm fomt-medium text-secondary-foreground">
               Take your docs to the next level of Metronic
              </div>
             </div>
             <a class="kt-btn kt-btn-mono" href="#">
              Read Documentation
             </a>
            </div>
           </div>
          </div>
          <!--End of Megamenu Item-->
          <!--Megamenu Item-->
          <div class="kt-menu-item" data-kt-menu-item-offset="-300px, 0" data-kt-menu-item-offset-rtl="300px, 0" data-kt-menu-item-overflow="true" data-kt-menu-item-placement="bottom-start" data-kt-menu-item-placement-rtl="bottom-end" data-kt-menu-item-toggle="accordion|lg:dropdown" data-kt-menu-item-trigger="click|lg:hover">
           <div class="kt-menu-link text-sm text-secondary-foreground font-medium kt-menu-link-hover:text-primary kt-menu-item-active:text-mono kt-menu-item-show:text-primary kt-menu-item-here:text-mono kt-menu-item-active:font-semibold kt-menu-item-here:font-semibold">
            <span class="kt-menu-title text-nowrap">
             My Account
            </span>
            <span class="kt-menu-arrow flex lg:hidden">
             <span class="kt-menu-item-show:hidden text-muted-foreground">
              <i class="ki-filled ki-plus text-xs">
              </i>
             </span>
             <span class="hidden kt-menu-item-show:inline-flex">
              <i class="ki-filled ki-minus text-xs">
              </i>
             </span>
            </span>
           </div>
           <div class="kt-menu-dropdown flex-col lg:flex-row gap-0 w-full lg:max-w-[1240px]">
            <div class="lg:w-[250px] mt-2 lg:mt-0 lg:border-e lg:border-e-border rounded-xl lg:rounded-l-xl lg:rounded-r-none shrink-0 px-3 py-4 lg:p-7.5 bg-muted/25">
             <h3 class="text-sm text-foreground font-semibold leading-none ps-2.5 mb-2 lg:mb-5">
              General Pages
             </h3>
             <div class="kt-menu kt-menu-default kt-menu-fit flex-col">
              <div class="kt-menu-item">
               <a class="kt-menu-link border border-transparent kt-menu-link-hover:!bg-background kt-menu-link-hover:border-border kt-menu-item-active:!bg-background kt-menu-item-active:border-border" href="html/demo1/account/integrations.html">
                <span class="kt-menu-icon">
                 <i class="ki-filled ki-technology-2">
                 </i>
                </span>
                <span class="kt-menu-title grow-0">
                 Integrations
                </span>
               </a>
              </div>
              <div class="kt-menu-item">
               <a class="kt-menu-link border border-transparent kt-menu-link-hover:!bg-background kt-menu-link-hover:border-border kt-menu-item-active:!bg-background kt-menu-item-active:border-border" href="html/demo1/account/notifications.html">
                <span class="kt-menu-icon">
                 <i class="ki-filled ki-notification-1">
                 </i>
                </span>
                <span class="kt-menu-title grow-0">
                 Notifications
                </span>
               </a>
              </div>
              <div class="kt-menu-item">
               <a class="kt-menu-link border border-transparent kt-menu-link-hover:!bg-background kt-menu-link-hover:border-border kt-menu-item-active:!bg-background kt-menu-item-active:border-border" href="html/demo1/account/api-keys.html">
                <span class="kt-menu-icon">
                 <i class="ki-filled ki-key">
                 </i>
                </span>
                <span class="kt-menu-title grow-0">
                 API Keys
                </span>
               </a>
              </div>
              <div class="kt-menu-item">
               <a class="kt-menu-link border border-transparent kt-menu-link-hover:!bg-background kt-menu-link-hover:border-border kt-menu-item-active:!bg-background kt-menu-item-active:border-border" href="html/demo1/account/appearance.html">
                <span class="kt-menu-icon">
                 <i class="ki-filled ki-eye">
                 </i>
                </span>
                <span class="kt-menu-title grow-0">
                 Appearance
                </span>
               </a>
              </div>
              <div class="kt-menu-item">
               <a class="kt-menu-link border border-transparent kt-menu-link-hover:!bg-background kt-menu-link-hover:border-border kt-menu-item-active:!bg-background kt-menu-item-active:border-border" href="html/demo1/account/invite-a-friend.html">
                <span class="kt-menu-icon">
                 <i class="ki-filled ki-user-tick">
                 </i>
                </span>
                <span class="kt-menu-title grow-0">
                 Invite a Friend
                </span>
               </a>
              </div>
              <div class="kt-menu-item">
               <a class="kt-menu-link border border-transparent kt-menu-link-hover:!bg-background kt-menu-link-hover:border-border kt-menu-item-active:!bg-background kt-menu-item-active:border-border" href="html/demo1/account/activity.html">
                <span class="kt-menu-icon">
                 <i class="ki-filled ki-support">
                 </i>
                </span>
                <span class="kt-menu-title grow-0">
                 Activity
                </span>
               </a>
              </div>
              <div class="kt-menu-item">
               <a class="kt-menu-link border border-transparent kt-menu-link-hover:!bg-background kt-menu-link-hover:border-border kt-menu-item-active:!bg-background kt-menu-item-active:border-border" href="">
                <span class="kt-menu-icon">
                 <i class="ki-filled ki-verify">
                 </i>
                </span>
                <span class="kt-menu-title grow-0">
                 Brand
                </span>
                <span class="kt-menu-badge">
                 <span class="kt-badge kt-badge-sm">
                  Soon
                 </span>
                </span>
               </a>
              </div>
              <div class="kt-menu-item">
               <a class="kt-menu-link border border-transparent kt-menu-link-hover:!bg-background kt-menu-link-hover:border-border kt-menu-item-active:!bg-background kt-menu-item-active:border-border" href="">
                <span class="kt-menu-icon">
                 <i class="ki-filled ki-euro">
                 </i>
                </span>
                <span class="kt-menu-title grow-0">
                 Get Paid
                </span>
                <span class="kt-menu-badge">
                 <span class="kt-badge kt-badge-sm">
                  Soon
                 </span>
                </span>
               </a>
              </div>
             </div>
            </div>
           </div>
          </div>
          <!--End of Megamenu Item-->
          <!--Megamenu Item-->
          <div class="kt-menu-item" data-kt-menu-item-offset="-300px, 0" data-kt-menu-item-offset-rtl="300px, 0" data-kt-menu-item-overflow="true" data-kt-menu-item-placement="bottom-start" data-kt-menu-item-placement-rtl="bottom-end" data-kt-menu-item-toggle="accordion|lg:dropdown" data-kt-menu-item-trigger="click|lg:hover">
           <div class="kt-menu-link text-sm text-secondary-foreground font-medium kt-menu-link-hover:text-primary kt-menu-item-active:text-mono kt-menu-item-show:text-primary kt-menu-item-here:text-mono kt-menu-item-active:font-semibold kt-menu-item-here:font-semibold">
            <span class="kt-menu-title text-nowrap">
             Network
            </span>
            <span class="kt-menu-arrow flex lg:hidden">
             <span class="kt-menu-item-show:hidden text-muted-foreground">
              <i class="ki-filled ki-plus text-xs">
              </i>
             </span>
             <span class="hidden kt-menu-item-show:inline-flex">
              <i class="ki-filled ki-minus text-xs">
              </i>
             </span>
            </span>
           </div>
           <div class="kt-menu-dropdown flex-col gap-0 w-full lg:max-w-[670px]">
            <div class="flex flex-col lg:flex-row">
             <div class="flex flex-col gap-5 lg:w-[250px] mt-2 lg:mt-0 lg:border-r lg:border-r-border rounded-xl lg:rounded-none lg:rounded-tl-xl shrink-0 px-3 py-4 lg:p-7.5 bg-muted/25">
              <h3 class="text-sm text-foreground font-semibold leading-none ps-2.5 h-3.5">
               General Pages
              </h3>
              <div class="kt-menu kt-menu-default kt-menu-fit flex-col">
               <div class="kt-menu-item">
                <a class="kt-menu-link border border-transparent kt-menu-link-hover:!bg-background kt-menu-link-hover:border-border kt-menu-item-active:!bg-background kt-menu-item-active:border-border" href="#">
                 <span class="kt-menu-icon">
                  <i class="ki-filled ki-flag">
                  </i>
                 </span>
                 <span class="kt-menu-title grow-0">
                  Get Started
                 </span>
                </a>
               </div>
               <div class="kt-menu-item">
                <a class="kt-menu-link border border-transparent kt-menu-link-hover:!bg-background kt-menu-link-hover:border-border kt-menu-item-active:!bg-background kt-menu-item-active:border-border" href="#">
                 <span class="kt-menu-icon">
                  <i class="ki-filled ki-users">
                  </i>
                 </span>
                 <span class="kt-menu-title grow-0">
                  Colleagues
                 </span>
                 <span class="kt-menu-badge">
                  <span class="kt-badge kt-badge-sm">
                   Soon
                  </span>
                 </span>
                </a>
               </div>
               <div class="kt-menu-item">
                <a class="kt-menu-link border border-transparent kt-menu-link-hover:!bg-background kt-menu-link-hover:border-border kt-menu-item-active:!bg-background kt-menu-item-active:border-border" href="#">
                 <span class="kt-menu-icon">
                  <i class="ki-filled ki-heart">
                  </i>
                 </span>
                 <span class="kt-menu-title grow-0">
                  Donators
                 </span>
                 <span class="kt-menu-badge">
                  <span class="kt-badge kt-badge-sm">
                   Soon
                  </span>
                 </span>
                </a>
               </div>
               <div class="kt-menu-item">
                <a class="kt-menu-link border border-transparent kt-menu-link-hover:!bg-background kt-menu-link-hover:border-border kt-menu-item-active:!bg-background kt-menu-item-active:border-border" href="#">
                 <span class="kt-menu-icon">
                  <i class="ki-filled ki-abstract-21">
                  </i>
                 </span>
                 <span class="kt-menu-title grow-0">
                  Leads
                 </span>
                 <span class="kt-menu-badge">
                  <span class="kt-badge kt-badge-sm">
                   Soon
                  </span>
                 </span>
                </a>
               </div>
              </div>
             </div>
             <!-- <div class="pt-4 pb-2 lg:p-7.5 lg:pb-5 grow">
              <div class="grid lg:grid-cols-2 gap-5">
               <div class="flex flex-col gap-5">
                <h3 class="flex items-center gap-1.5 text-sm text-foreground font-semibold leading-none ps-2.5 h-3.5">
                 User Cards
                </h3>
                <div class="kt-menu kt-menu-default kt-menu-fit flex-col">
                 <div class="kt-menu-item">
                  <a class="kt-menu-link" href="html/demo1/network/user-cards/mini-cards.html" tabindex="0">
                   <span class="kt-menu-title grow-0">
                    Mini Cards
                   </span>
                  </a>
                 </div>
                 <div class="kt-menu-item">
                  <a class="kt-menu-link" href="html/demo1/network/user-cards/team-crew.html" tabindex="0">
                   <span class="kt-menu-title grow-0">
                    Team Crew
                   </span>
                  </a>
                 </div>
                 <div class="kt-menu-item">
                  <a class="kt-menu-link" href="html/demo1/network/user-cards/nft.html" tabindex="0">
                   <span class="kt-menu-title grow-0">
                    Authors
                   </span>
                  </a>
                 </div>
                 <div class="kt-menu-item">
                  <a class="kt-menu-link" href="html/demo1/network/user-cards/social.html" tabindex="0">
                   <span class="kt-menu-title grow-0">
                    NFT Users
                   </span>
                  </a>
                 </div>
                 <div class="kt-menu-item">
                  <a class="kt-menu-link" href="#" tabindex="0">
                   <span class="kt-menu-title grow-0">
                    Social Users
                   </span>
                  </a>
                 </div>
                 <div class="kt-menu-item">
                  <a class="kt-menu-link" href="#" tabindex="0">
                   <span class="kt-menu-title grow-0">
                    Gamers
                   </span>
                   <span class="kt-menu-badge">
                    <span class="kt-badge kt-badge-sm">
                     Soon
                    </span>
                   </span>
                  </a>
                 </div>
                </div>
               </div>
               <div class="flex flex-col gap-5">
                <h3 class="flex items-center gap-1.5 text-sm text-foreground font-semibold leading-none ps-2.5 h-3.5">
                 User Base
                 <span class="left-auto kt-badge kt-badge-sm kt-badge-primary kt-badge-outline">
                  Datatables
                 </span>
                </h3>
                <div class="kt-menu kt-menu-default kt-menu-fit flex-col">
                 <div class="kt-menu-item">
                  <a class="kt-menu-link" href="html/demo1/network/user-table/team-crew.html" tabindex="0">
                   <span class="kt-menu-title grow-0">
                    Team Crew
                   </span>
                  </a>
                 </div>
                 <div class="kt-menu-item">
                  <a class="kt-menu-link" href="html/demo1/network/user-table/app-roster.html" tabindex="0">
                   <span class="kt-menu-title grow-0">
                    App Roster
                   </span>
                  </a>
                 </div>
                 <div class="kt-menu-item">
                  <a class="kt-menu-link" href="html/demo1/network/user-table/market-authors.html" tabindex="0">
                   <span class="kt-menu-title grow-0">
                    Market Authors
                   </span>
                  </a>
                 </div>
                 <div class="kt-menu-item">
                  <a class="kt-menu-link" href="html/demo1/network/user-table/saas-users.html" tabindex="0">
                   <span class="kt-menu-title grow-0">
                    SaaS Users
                   </span>
                  </a>
                 </div>
                 <div class="kt-menu-item">
                  <a class="kt-menu-link" href="html/demo1/network/user-table/store-clients.html" tabindex="0">
                   <span class="kt-menu-title grow-0">
                    Store Clients
                   </span>
                  </a>
                 </div>
                 <div class="kt-menu-item">
                  <a class="kt-menu-link" href="html/demo1/network/user-table/visitors.html" tabindex="0">
                   <span class="kt-menu-title grow-0">
                    Visitors
                   </span>
                  </a>
                 </div>
                </div>
               </div>
              </div>
             </div> -->
            </div>
            <div class="flex flex-wrap items-center lg:justify-between rounded-xl lg:rounded-t-none border border-border lg:border-0 lg:border-t lg:border-t-border px-4 py-4 lg:px-7.5 lg:py-5 gap-2.5 bg-muted/50">
             <div class="flex flex-col gap-1.5">
              <div class="text-base font-semibold text-mono leading-none">
               Read to Get Started ?
              </div>
              <div class="text-sm fomt-medium text-secondary-foreground">
               Take your docs to the next level of Metronic
              </div>
             </div>
             <a class="kt-btn kt-btn-mono" href="#">
              Read Documentation
             </a>
            </div>
           </div>
          </div>
          <!--End of Megamenu Item-->
          <!--Megamenu Item-->
          <div class="kt-menu-item" data-kt-menu-item-offset="-300px, 0" data-kt-menu-item-offset-rtl="300px, 0" data-kt-menu-item-overflow="true" data-kt-menu-item-placement="bottom-start" data-kt-menu-item-placement-rtl="bottom-end" data-kt-menu-item-toggle="accordion|lg:dropdown" data-kt-menu-item-trigger="click|lg:hover">
           <div class="kt-menu-link text-sm text-secondary-foreground font-medium kt-menu-link-hover:text-primary kt-menu-item-active:text-mono kt-menu-item-show:text-primary kt-menu-item-here:text-mono kt-menu-item-active:font-semibold kt-menu-item-here:font-semibold">
            <span class="kt-menu-title text-nowrap">
             Store
            </span>
            <span class="kt-menu-arrow flex lg:hidden">
             <span class="kt-menu-item-show:hidden text-muted-foreground">
              <i class="ki-filled ki-plus text-xs">
              </i>
             </span>
             <span class="hidden kt-menu-item-show:inline-flex">
              <i class="ki-filled ki-minus text-xs">
              </i>
             </span>
            </span>
           </div>
           <div class="kt-menu-dropdown w-full gap-0 lg:max-w-[600px]">
            <div class="pt-4 pb-2 lg:p-7.5">
             <div class="kt-menu kt-menu-default kt-menu-fit flex-col">
              <h3 class="text-sm text-foreground font-semibold leading-none ps-2.5 mb-2 lg:mb-5">
               Store - Client
              </h3>
              <div class="grid lg:grid-cols-2 lg:gap-5">
               <div class="flex flex-col gap-0.5">
                <div class="kt-menu-item">
                 <a class="kt-menu-link" href="html/demo1/store-client/home.html" tabindex="0">
                  <span class="kt-menu-icon">
                   <i class="ki-filled ki-home">
                   </i>
                  </span>
                  <span class="kt-menu-title grow-0">
                   Home
                  </span>
                 </a>
                </div>
                <div class="kt-menu-item">
                 <a class="kt-menu-link" href="html/demo1/store-client/search-results-grid.html" tabindex="0">
                  <span class="kt-menu-icon">
                   <i class="ki-filled ki-grid">
                   </i>
                  </span>
                  <span class="kt-menu-title grow-0">
                   Search Results - Grid
                  </span>
                 </a>
                </div>
                <div class="kt-menu-item">
                 <a class="kt-menu-link" href="html/demo1/store-client/search-results-list.html" tabindex="0">
                  <span class="kt-menu-icon">
                   <i class="ki-filled ki-tablet-text-up">
                   </i>
                  </span>
                  <span class="kt-menu-title grow-0">
                   Search Results - List
                  </span>
                 </a>
                </div>
                <div class="kt-menu-item">
                 <a class="kt-menu-link" href="html/demo1/store-client/product-details.html" tabindex="0">
                  <span class="kt-menu-icon">
                   <i class="ki-filled ki-picture">
                   </i>
                  </span>
                  <span class="kt-menu-title grow-0">
                   Product Details
                  </span>
                 </a>
                </div>
                <div class="kt-menu-item">
                 <a class="kt-menu-link" href="html/demo1/store-client/shopping-cart.html" tabindex="0">
                  <span class="kt-menu-icon">
                   <i class="ki-filled ki-handcart">
                   </i>
                  </span>
                  <span class="kt-menu-title grow-0">
                   Shopping Cart
                  </span>
                 </a>
                </div>
                <div class="kt-menu-item">
                 <a class="kt-menu-link" href="html/demo1/store-client/wishlist.html" tabindex="0">
                  <span class="kt-menu-icon">
                   <i class="ki-filled ki-heart">
                   </i>
                  </span>
                  <span class="kt-menu-title grow-0">
                   Wishlist
                  </span>
                 </a>
                </div>
               </div>
               <div>
                <div class="kt-menu-item">
                 <a class="kt-menu-link" href="html/demo1/store-client/checkout/order-summary.html" tabindex="0">
                  <span class="kt-menu-icon">
                   <i class="ki-filled ki-subtitle">
                   </i>
                  </span>
                  <span class="kt-menu-title grow-0">
                   Checkout - Order Summary
                  </span>
                 </a>
                </div>
                <div class="kt-menu-item">
                 <a class="kt-menu-link" href="html/demo1/store-client/checkout/shipping-info.html" tabindex="0">
                  <span class="kt-menu-icon">
                   <i class="ki-filled ki-delivery">
                   </i>
                  </span>
                  <span class="kt-menu-title grow-0">
                   Checkout - Shipping Info
                  </span>
                 </a>
                </div>
                <div class="kt-menu-item">
                 <a class="kt-menu-link" href="html/demo1/store-client/checkout/payment-method.html" tabindex="0">
                  <span class="kt-menu-icon">
                   <i class="ki-filled ki-wallet">
                   </i>
                  </span>
                  <span class="kt-menu-title grow-0">
                   Checkout - Payment Method
                  </span>
                 </a>
                </div>
                <div class="kt-menu-item">
                 <a class="kt-menu-link" href="html/demo1/store-client/checkout/order-placed.html" tabindex="0">
                  <span class="kt-menu-icon">
                   <i class="ki-filled ki-check-circle">
                   </i>
                  </span>
                  <span class="kt-menu-title grow-0">
                   Checkout - Order Placed
                  </span>
                 </a>
                </div>
                <div class="kt-menu-item">
                 <a class="kt-menu-link" href="html/demo1/store-client/my-orders.html" tabindex="0">
                  <span class="kt-menu-icon">
                   <i class="ki-filled ki-archive">
                   </i>
                  </span>
                  <span class="kt-menu-title grow-0">
                   My Orders
                  </span>
                 </a>
                </div>
                <div class="kt-menu-item">
                 <a class="kt-menu-link" href="html/demo1/store-client/order-receipt.html" tabindex="0">
                  <span class="kt-menu-icon">
                   <i class="ki-filled ki-document">
                   </i>
                  </span>
                  <span class="kt-menu-title grow-0">
                   Order Receipt
                  </span>
                 </a>
                </div>
               </div>
              </div>
             </div>
            </div>
            <div class="flex flex-wrap items-center lg:justify-between rounded-xl lg:rounded-t-none border border-border lg:border-0 lg:border-t lg:border-t-border px-4 py-4 lg:px-7.5 lg:py-5 gap-2.5 bg-muted/50">
             <div class="flex flex-col gap-1.5">
              <div class="text-base font-semibold text-mono leading-none">
               Read to Get Started ?
              </div>
              <div class="text-sm fomt-medium text-secondary-foreground">
               Take your docs to the next level of Metronic
              </div>
             </div>
             <a class="kt-btn kt-btn-mono" href="#">
              Read Documentation
             </a>
            </div>
           </div>
          </div>
          <!--End of Megamenu Item-->
          <!--Megamenu Item-->
          <!-- <div class="kt-menu-item" data-kt-menu-item-offset="-300px, 0" data-kt-menu-item-offset-rtl="300px, 0" data-kt-menu-item-overflow="true" data-kt-menu-item-placement="bottom-start" data-kt-menu-item-placement-rtl="bottom-end" data-kt-menu-item-toggle="accordion|lg:dropdown" data-kt-menu-item-trigger="click|lg:hover">
           <div class="kt-menu-link text-sm text-secondary-foreground font-medium kt-menu-link-hover:text-primary kt-menu-item-active:text-mono kt-menu-item-show:text-primary kt-menu-item-here:text-mono kt-menu-item-active:font-semibold kt-menu-item-here:font-semibold">
            <span class="kt-menu-title text-nowrap">
             Authentication
            </span>
            <span class="kt-menu-arrow flex lg:hidden">
             <span class="kt-menu-item-show:hidden text-muted-foreground">
              <i class="ki-filled ki-plus text-xs">
              </i>
             </span>
             <span class="hidden kt-menu-item-show:inline-flex">
              <i class="ki-filled ki-minus text-xs">
              </i>
             </span>
            </span>
           </div>
           <div class="kt-menu-dropdown flex-col gap-0 w-full lg:max-w-[700px]">
            <div class="flex flex-col lg:flex-row">
             <div class="pt-4 pb-2 lg:p-7.5 lg:pb-5 grow">
              <div class="grid lg:grid-cols-2 gap-5">
               <div class="flex flex-col">
                <h3 class="text-sm text-foreground font-semibold leading-none ps-2.5 mb-2 lg:mb-5">
                 Classic Layout
                </h3>
                <div class="kt-menu kt-menu-default kt-menu-fit flex-col">
                 <div class="kt-menu-item">
                  <a class="kt-menu-link" href="html/demo1/authentication/classic/sign-in.html" tabindex="0">
                   <span class="kt-menu-title grow-0">
                    Sign In
                   </span>
                  </a>
                 </div>
                 <div class="kt-menu-item">
                  <a class="kt-menu-link" href="html/demo1/authentication/classic/sign-up.html" tabindex="0">
                   <span class="kt-menu-title grow-0">
                    Sign Up
                   </span>
                  </a>
                 </div>
                 <div class="kt-menu-item">
                  <a class="kt-menu-link" href="html/demo1/authentication/classic/2fa.html" tabindex="0">
                   <span class="kt-menu-title grow-0">
                    2FA
                   </span>
                  </a>
                 </div>
                 <div class="kt-menu-item">
                  <a class="kt-menu-link" href="html/demo1/authentication/classic/check-email.html" tabindex="0">
                   <span class="kt-menu-title grow-0">
                    Check Email
                   </span>
                  </a>
                 </div>
                 <div class="kt-menu-item pt-1">
                  <span class="text-secondary-foreground font-medium text-sm p-2.5">
                   Reset Password
                  </span>
                 </div>
                 <div class="kt-menu-item">
                  <a class="kt-menu-link" href="html/demo1/authentication/classic/reset-password/enter-email.html" tabindex="0">
                   <span class="kt-menu-title grow-0">
                    Enter Email
                   </span>
                  </a>
                 </div>
                 <div class="kt-menu-item">
                  <a class="kt-menu-link" href="html/demo1/authentication/classic/reset-password/check-email.html" tabindex="0">
                   <span class="kt-menu-title grow-0">
                    Check Email
                   </span>
                  </a>
                 </div>
                 <div class="kt-menu-item">
                  <a class="kt-menu-link" href="html/demo1/authentication/classic/reset-password/change-password.html" tabindex="0">
                   <span class="kt-menu-title grow-0">
                    Change Password
                   </span>
                  </a>
                 </div>
                 <div class="kt-menu-item">
                  <a class="kt-menu-link" href="html/demo1/authentication/classic/reset-password/password-changed.html" tabindex="0">
                   <span class="kt-menu-title grow-0">
                    Password is Changed
                   </span>
                  </a>
                 </div>
                </div>
               </div>
               <div class="flex flex-col">
                <h3 class="text-sm text-foreground font-semibold leading-none ps-2.5 mb-2 lg:mb-5">
                 Branded Layout
                </h3>
                <div class="kt-menu kt-menu-default kt-menu-fit flex-col">
                 <div class="kt-menu-item">
                  <a class="kt-menu-link" href="html/demo1/authentication/branded/sign-in.html" tabindex="0">
                   <span class="kt-menu-title grow-0">
                    Sign In
                   </span>
                  </a>
                 </div>
                 <div class="kt-menu-item">
                  <a class="kt-menu-link" href="html/demo1/authentication/branded/sign-up.html" tabindex="0">
                   <span class="kt-menu-title grow-0">
                    Sign Up
                   </span>
                  </a>
                 </div>
                 <div class="kt-menu-item">
                  <a class="kt-menu-link" href="html/demo1/authentication/branded/2fa.html" tabindex="0">
                   <span class="kt-menu-title grow-0">
                    2FA
                   </span>
                  </a>
                 </div>
                 <div class="kt-menu-item">
                  <a class="kt-menu-link" href="html/demo1/authentication/branded/check-email.html" tabindex="0">
                   <span class="kt-menu-title grow-0">
                    Check Email
                   </span>
                  </a>
                 </div>
                 <div class="kt-menu-item pt-1">
                  <span class="text-secondary-foreground font-medium text-sm p-2.5">
                   Reset Password
                  </span>
                 </div>
                 <div class="kt-menu-item">
                  <a class="kt-menu-link" href="html/demo1/authentication/branded/reset-password/enter-email.html" tabindex="0">
                   <span class="kt-menu-title grow-0">
                    Enter Email
                   </span>
                  </a>
                 </div>
                 <div class="kt-menu-item">
                  <a class="kt-menu-link" href="html/demo1/authentication/branded/reset-password/check-email.html" tabindex="0">
                   <span class="kt-menu-title grow-0">
                    Check Email
                   </span>
                  </a>
                 </div>
                 <div class="kt-menu-item">
                  <a class="kt-menu-link" href="html/demo1/authentication/branded/reset-password/change-password.html" tabindex="0">
                   <span class="kt-menu-title grow-0">
                    Change Password
                   </span>
                  </a>
                 </div>
                 <div class="kt-menu-item">
                  <a class="kt-menu-link" href="html/demo1/authentication/branded/reset-password/password-changed.html" tabindex="0">
                   <span class="kt-menu-title grow-0">
                    Password is Changed
                   </span>
                  </a>
                 </div>
                </div>
               </div>
              </div>
             </div>
             <div class="lg:w-[260px] mb-4 lg:mb-0 lg:border-s lg:border-s-border rounded-xl lg:rounded-e-xl lg:rounded-l-none shrink-0 px-3 py-4 lg:p-7.5 bg-muted/25">
              <h3 class="text-sm text-foreground font-semibold leading-none ps-2.5 mb-5">
               Other Pages
              </h3>
              <div class="kt-menu kt-menu-default kt-menu-fit flex-col">
               <div class="kt-menu-item">
                <a class="kt-menu-link border border-transparent kt-menu-link-hover:!bg-background kt-menu-link-hover:border-border kt-menu-item-active:!bg-background kt-menu-item-active:border-border" href="html/demo1/authentication/welcome-message.html">
                 <span class="kt-menu-icon">
                  <i class="ki-filled ki-like-2">
                  </i>
                 </span>
                 <span class="kt-menu-title grow-0">
                  Welcome Message
                 </span>
                </a>
               </div>
               <div class="kt-menu-item">
                <a class="kt-menu-link border border-transparent kt-menu-link-hover:!bg-background kt-menu-link-hover:border-border kt-menu-item-active:!bg-background kt-menu-item-active:border-border" href="html/demo1/authentication/account-deactivated.html">
                 <span class="kt-menu-icon">
                  <i class="ki-filled ki-shield-cross">
                  </i>
                 </span>
                 <span class="kt-menu-title grow-0">
                  Account Deactivated
                 </span>
                </a>
               </div>
               <div class="kt-menu-item">
                <a class="kt-menu-link border border-transparent kt-menu-link-hover:!bg-background kt-menu-link-hover:border-border kt-menu-item-active:!bg-background kt-menu-item-active:border-border" href="html/demo1/authentication/error-404.html">
                 <span class="kt-menu-icon">
                  <i class="ki-filled ki-message-question">
                  </i>
                 </span>
                 <span class="kt-menu-title grow-0">
                  Error 404
                 </span>
                </a>
               </div>
               <div class="kt-menu-item">
                <a class="kt-menu-link border border-transparent kt-menu-link-hover:!bg-background kt-menu-link-hover:border-border kt-menu-item-active:!bg-background kt-menu-item-active:border-border" href="html/demo1/authentication/error-500.html">
                 <span class="kt-menu-icon">
                  <i class="ki-filled ki-information">
                  </i>
                 </span>
                 <span class="kt-menu-title grow-0">
                  Error 500
                 </span>
                </a>
               </div>
              </div>
             </div>
            </div>
            <div class="flex flex-wrap items-center lg:justify-between rounded-xl lg:rounded-t-none border border-border lg:border-0 lg:border-t lg:border-t-border px-4 py-4 lg:px-7.5 lg:py-5 gap-2.5 bg-muted/50">
             <div class="flex flex-col gap-1.5">
              <div class="text-base font-semibold text-mono leading-none">
               Read to Get Started ?
              </div>
              <div class="text-sm fomt-medium text-secondary-foreground">
               Take your docs to the next level of Metronic
              </div>
             </div>
             <a class="kt-btn kt-btn-mono" href="#">
              Read Documentation
             </a>
            </div>
           </div>
          </div> -->
          <!--End of Megamenu Item-->
          <!--Megamenu Item-->
          
          <!--End of Megamenu Item-->
         </div>
         <!--End of Megamenu-->
        </div>
        <!--End of Megamenu Wrapper-->
       </div>
       <!--End of Megamenu Inner-->
      </div>
     </div>
     <!-- End of Container -->
    </header>
    <!-- End of Header -->
    <!-- Content -->
    <router-view></router-view>
    <!-- End of Content -->
    <!-- Footer -->
    <footer class="kt-footer">
     <!-- Container -->
     <div class="kt-container-fixed">
      <div class="flex flex-col md:flex-row justify-center md:justify-between items-center gap-3 py-5">
       <div class="flex order-2 md:order-1 gap-2 font-normal text-sm">
        <span class="text-secondary-foreground">
         2025©
        </span>
        <a class="text-secondary-foreground hover:text-primary" href="https://keenthemes.com">
         Keenthemes Inc.
        </a>
       </div>
       <nav class="flex order-1 md:order-2 gap-4 font-normal text-sm text-secondary-foreground">
        <a class="hover:text-primary" href="https://keenthemes.com/metronic/tailwind/docs">
         Docs
        </a>
        <a class="hover:text-primary" href="https://1.envato.market/Vm7VRE">
         Purchase
        </a>
        <a class="hover:text-primary" href="https://keenthemes.com/metronic/tailwind/docs/getting-started/license">
         FAQ
        </a>
        <a class="hover:text-primary" href="https://devs.keenthemes.com">
         Support
        </a>
        <a class="hover:text-primary" href="https://keenthemes.com/metronic/tailwind/docs/getting-started/license">
         License
        </a>
       </nav>
      </div>
     </div>
     <!-- End of Container -->
    </footer>
    <!-- End of Footer -->
   </div>
   <!-- End of Wrapper -->
  </div>
  <!-- End of Main -->
  
</template>

<style scoped>
    .channel-stats-bg {
		background-image: url('assets/media/images/2600x1600/bg-3.png');
	}
	.dark .channel-stats-bg {
		background-image: url('assets/media/images/2600x1600/bg-3-dark.png');
	}
    .entry-callout-bg {
		background-image: url('assets/media/images/2600x1600/2.png');
	}
	.dark .entry-callout-bg {
		background-image: url('assets/media/images/2600x1600/2-dark.png');
	}
</style>