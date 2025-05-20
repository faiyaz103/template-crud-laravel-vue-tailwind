<style>
    .hero-bg {
		background-image: url('assets/media/images/2600x1200/bg-1.png');
	}
	.dark .hero-bg {
		background-image: url('assets/media/images/2600x1200/bg-1-dark.png');
	}
</style>

<template>
    <main class="grow pt-5" id="content" role="content">
     <!-- Container -->
     <div class="kt-container-fixed" id="contentContainer">
     </div>
     <!-- End of Container -->
     
     <div class="bg-center bg-cover bg-no-repeat hero-bg">
      <!-- Container -->
      <div class="kt-container-fixed">
       <div class="flex flex-col items-center gap-2 lg:gap-3.5 py-4 lg:pt-5 lg:pb-10">
        <img class="rounded-full border-3 border-green-500 size-[100px] shrink-0" src="assets/media/avatars/300-1.png">
         <div class="flex items-center gap-1.5">
          <div class="text-lg leading-5 font-semibold text-mono">
           Jenny Klabber
          </div>
          <svg class="text-primary" fill="none" height="16" viewbox="0 0 15 16" width="15" xmlns="http://www.w3.org/2000/svg">
           <path d="M14.5425 6.89749L13.5 5.83999C13.4273 5.76877 13.3699 5.6835 13.3312 5.58937C13.2925 5.49525 13.2734 5.39424 13.275 5.29249V3.79249C13.274 3.58699 13.2324 3.38371 13.1527 3.19432C13.0729 3.00494 12.9565 2.83318 12.8101 2.68892C12.6638 2.54466 12.4904 2.43073 12.2998 2.35369C12.1093 2.27665 11.9055 2.23801 11.7 2.23999H10.2C10.0982 2.24159 9.99722 2.22247 9.9031 2.18378C9.80898 2.1451 9.72371 2.08767 9.65249 2.01499L8.60249 0.957487C8.30998 0.665289 7.91344 0.50116 7.49999 0.50116C7.08654 0.50116 6.68999 0.665289 6.39749 0.957487L5.33999 1.99999C5.26876 2.07267 5.1835 2.1301 5.08937 2.16879C4.99525 2.20747 4.89424 2.22659 4.79249 2.22499H3.29249C3.08699 2.22597 2.88371 2.26754 2.69432 2.34731C2.50494 2.42709 2.33318 2.54349 2.18892 2.68985C2.04466 2.8362 1.93073 3.00961 1.85369 3.20013C1.77665 3.39064 1.73801 3.5945 1.73999 3.79999V5.29999C1.74159 5.40174 1.72247 5.50275 1.68378 5.59687C1.6451 5.691 1.58767 5.77627 1.51499 5.84749L0.457487 6.89749C0.165289 7.19 0.00115967 7.58654 0.00115967 7.99999C0.00115967 8.41344 0.165289 8.80998 0.457487 9.10249L1.49999 10.16C1.57267 10.2312 1.6301 10.3165 1.66878 10.4106C1.70747 10.5047 1.72659 10.6057 1.72499 10.7075V12.2075C1.72597 12.413 1.76754 12.6163 1.84731 12.8056C1.92709 12.995 2.04349 13.1668 2.18985 13.3111C2.3362 13.4553 2.50961 13.5692 2.70013 13.6463C2.89064 13.7233 3.0945 13.762 3.29999 13.76H4.79999C4.90174 13.7584 5.00275 13.7775 5.09687 13.8162C5.191 13.8549 5.27627 13.9123 5.34749 13.985L6.40499 15.0425C6.69749 15.3347 7.09404 15.4988 7.50749 15.4988C7.92094 15.4988 8.31748 15.3347 8.60999 15.0425L9.65999 14C9.73121 13.9273 9.81647 13.8699 9.9106 13.8312C10.0047 13.7925 10.1057 13.7734 10.2075 13.775H11.7075C12.1212 13.775 12.518 13.6106 12.8106 13.3181C13.1031 13.0255 13.2675 12.6287 13.2675 12.215V10.715C13.2659 10.6132 13.285 10.5122 13.3237 10.4181C13.3624 10.324 13.4198 10.2387 13.4925 10.1675L14.55 9.10999C14.6953 8.96452 14.8104 8.79176 14.8887 8.60164C14.9671 8.41152 15.007 8.20779 15.0063 8.00218C15.0056 7.79656 14.9643 7.59311 14.8847 7.40353C14.8051 7.21394 14.6888 7.04197 14.5425 6.89749ZM10.635 6.64999L6.95249 10.25C6.90055 10.3026 6.83864 10.3443 6.77038 10.3726C6.70212 10.4009 6.62889 10.4153 6.55499 10.415C6.48062 10.4139 6.40719 10.3982 6.33896 10.3685C6.27073 10.3389 6.20905 10.2961 6.15749 10.2425L4.37999 8.44249C4.32532 8.39044 4.28169 8.32793 4.25169 8.25867C4.22169 8.18941 4.20593 8.11482 4.20536 8.03934C4.20479 7.96387 4.21941 7.88905 4.24836 7.81934C4.27731 7.74964 4.31999 7.68647 4.37387 7.63361C4.42774 7.58074 4.4917 7.53926 4.56194 7.51163C4.63218 7.484 4.70726 7.47079 4.78271 7.47278C4.85816 7.47478 4.93244 7.49194 5.00112 7.52324C5.0698 7.55454 5.13148 7.59935 5.18249 7.65499L6.56249 9.05749L9.84749 5.84749C9.95296 5.74215 10.0959 5.68298 10.245 5.68298C10.394 5.68298 10.537 5.74215 10.6425 5.84749C10.6953 5.90034 10.737 5.96318 10.7653 6.03234C10.7935 6.1015 10.8077 6.1756 10.807 6.25031C10.8063 6.32502 10.7908 6.39884 10.7612 6.46746C10.7317 6.53608 10.6888 6.59813 10.635 6.64999Z" fill="currentColor">
           </path>
          </svg>
         </div>
         <div class="flex flex-wrap justify-center gap-1 lg:gap-4.5 text-sm">
          <div class="flex gap-1.25 items-center">
           <i class="ki-filled ki-abstract text-muted-foreground text-sm">
           </i>
           <span class="text-secondary-foreground font-medium">
            KeenThemes
           </span>
          </div>
          <div class="flex gap-1.25 items-center">
           <i class="ki-filled ki-geolocation text-muted-foreground text-sm">
           </i>
           <span class="text-secondary-foreground font-medium">
            SF, Bay Area
           </span>
          </div>
          <div class="flex gap-1.25 items-center">
           <i class="ki-filled ki-sms text-muted-foreground text-sm">
           </i>
           <a class="text-secondary-foreground font-medium hover:text-primary" href="mailto: jenny@kteam.com">
            jenny@kteam.com
           </a>
          </div>
         </div>
        </img>
       </div>
      </div>
      <!-- End of Container -->
     </div>
     <!-- Container -->
     <div class="kt-container-fixed">
      <div class="flex items-center flex-wrap md:flex-nowrap lg:items-end justify-between border-b border-b-border gap-3 lg:gap-6 mb-5 lg:mb-10">
       <div class="grid">
        <div class="kt-scrollable-x-auto">
         <div class="kt-menu gap-3" data-kt-menu="true">
          <div class="kt-menu-item border-b-2 border-b-transparent kt-menu-item-active:border-b-primary kt-menu-item-here:border-b-primary" data-kt-menu-item-overflow="true" data-kt-menu-item-placement="bottom-start" data-kt-menu-item-placement-rtl="bottom-end" data-kt-menu-item-toggle="dropdown" data-kt-menu-item-trigger="click|lg:hover">
           <div class="kt-menu-link gap-1.5 pb-2 lg:pb-4 px-2">
            <span class="kt-menu-title text-nowrap text-sm text-secondary-foreground kt-menu-item-active:text-primary kt-menu-item-active:font-medium kt-menu-item-here:text-primary kt-menu-item-here:font-medium kt-menu-item-show:text-primary kt-menu-link-hover:text-primary">
             Profiles
            </span>
            <span class="kt-menu-arrow">
             <i class="ki-filled ki-down text-xs text-muted-foreground menu-item-active:text-primary kt-menu-item-here:text-primary menu-item-show:text-primary kt-menu-link-hover:text-primary">
             </i>
            </span>
           </div>
           <div class="kt-menu-dropdown kt-menu-default py-2 min-w-[200px]">
            <div class="kt-menu-item">
             <a class="kt-menu-link" href="html/demo1/public-profile/profiles/default.html" tabindex="0">
              <span class="kt-menu-title">
               Default
              </span>
             </a>
            </div>
            <div class="kt-menu-item">
             <a class="kt-menu-link" href="html/demo1/public-profile/profiles/creator.html" tabindex="0">
              <span class="kt-menu-title">
               Creator
              </span>
             </a>
            </div>
            <div class="kt-menu-item">
             <a class="kt-menu-link" href="html/demo1/public-profile/profiles/company.html" tabindex="0">
              <span class="kt-menu-title">
               Company
              </span>
             </a>
            </div>
            <div class="kt-menu-item">
             <a class="kt-menu-link" href="html/demo1/public-profile/profiles/nft.html" tabindex="0">
              <span class="kt-menu-title">
               NFT
              </span>
             </a>
            </div>
            <div class="kt-menu-item">
             <a class="kt-menu-link" href="html/demo1/public-profile/profiles/blogger.html" tabindex="0">
              <span class="kt-menu-title">
               Blogger
              </span>
             </a>
            </div>
            <div class="kt-menu-item">
             <a class="kt-menu-link" href="html/demo1/public-profile/profiles/crm.html" tabindex="0">
              <span class="kt-menu-title">
               CRM
              </span>
             </a>
            </div>
            <div class="kt-menu-item" data-kt-menu-item-offset="-10px, 0" data-kt-menu-item-placement="right-start" data-kt-menu-item-toggle="dropdown" data-kt-menu-item-trigger="click|lg:hover">
             <div class="kt-menu-link" tabindex="0">
              <span class="kt-menu-title">
               More
              </span>
              <span class="kt-menu-arrow">
               <i class="ki-filled ki-down text-xs in-[.kt-menu-dropdown]:-rotate-90">
               </i>
              </span>
             </div>
             <div class="kt-menu-dropdown kt-menu-default py min-w-[200px]">
              <div class="kt-menu-item">
               <a class="kt-menu-link" href="html/demo1/public-profile/profiles/gamer.html" tabindex="0">
                <span class="kt-menu-title">
                 Gamer
                </span>
               </a>
              </div>
              <div class="kt-menu-item">
               <a class="kt-menu-link" href="html/demo1/public-profile/profiles/feeds.html" tabindex="0">
                <span class="kt-menu-title">
                 Feeds
                </span>
               </a>
              </div>
              <div class="kt-menu-item">
               <a class="kt-menu-link" href="html/demo1/public-profile/profiles/plain.html" tabindex="0">
                <span class="kt-menu-title">
                 Plain
                </span>
               </a>
              </div>
              <div class="kt-menu-item">
               <a class="kt-menu-link" href="html/demo1/public-profile/profiles/modal.html" tabindex="0">
                <span class="kt-menu-title">
                 Modal
                </span>
               </a>
              </div>
             </div>
            </div>
           </div>
          </div>
          <div class="kt-menu-item border-b-2 border-b-transparent kt-menu-item-active:border-b-primary kt-menu-item-here:border-b-primary" data-kt-menu-item-overflow="true" data-kt-menu-item-placement="bottom-start" data-kt-menu-item-placement-rtl="bottom-end" data-kt-menu-item-toggle="dropdown" data-kt-menu-item-trigger="click|lg:hover">
           <div class="kt-menu-link gap-1.5 pb-2 lg:pb-4 px-2">
            <span class="kt-menu-title text-nowrap text-sm text-secondary-foreground kt-menu-item-active:text-primary kt-menu-item-active:font-medium kt-menu-item-here:text-primary kt-menu-item-here:font-medium kt-menu-item-show:text-primary kt-menu-link-hover:text-primary">
             Projects
            </span>
            <span class="kt-menu-arrow">
             <i class="ki-filled ki-down text-xs text-muted-foreground menu-item-active:text-primary kt-menu-item-here:text-primary menu-item-show:text-primary kt-menu-link-hover:text-primary">
             </i>
            </span>
           </div>
           <div class="kt-menu-dropdown kt-menu-default py-2 min-w-[200px]">
            <div class="kt-menu-item">
             <a class="kt-menu-link" href="html/demo1/public-profile/projects/3-columns.html" tabindex="0">
              <span class="kt-menu-title">
               3 Columns
              </span>
             </a>
            </div>
            <div class="kt-menu-item">
             <a class="kt-menu-link" href="html/demo1/public-profile/projects/2-columns.html" tabindex="0">
              <span class="kt-menu-title">
               2 Columns
              </span>
             </a>
            </div>
           </div>
          </div>
          <div class="kt-menu-item border-b-2 border-b-transparent kt-menu-item-active:border-b-primary kt-menu-item-here:border-b-primary">
           <a class="kt-menu-link gap-1.5 pb-2 lg:pb-4 px-2" href="html/demo1/public-profile/works.html">
            <span class="kt-menu-title text-nowrap font-medium text-sm text-secondary-foreground kt-menu-item-active:text-primary kt-menu-item-active:font-semibold kt-menu-item-here:text-primary kt-menu-item-here:font-semibold kt-menu-item-show:text-primary kt-menu-link-hover:text-primary">
             Works
            </span>
           </a>
          </div>
          <div class="kt-menu-item border-b-2 border-b-transparent kt-menu-item-active:border-b-primary kt-menu-item-here:border-b-primary">
           <a class="kt-menu-link gap-1.5 pb-2 lg:pb-4 px-2" href="html/demo1/public-profile/teams.html">
            <span class="kt-menu-title text-nowrap font-medium text-sm text-secondary-foreground kt-menu-item-active:text-primary kt-menu-item-active:font-semibold kt-menu-item-here:text-primary kt-menu-item-here:font-semibold kt-menu-item-show:text-primary kt-menu-link-hover:text-primary">
             Teams
            </span>
           </a>
          </div>
          <div class="kt-menu-item border-b-2 border-b-transparent kt-menu-item-active:border-b-primary kt-menu-item-here:border-b-primary">
           <a class="kt-menu-link gap-1.5 pb-2 lg:pb-4 px-2" href="html/demo1/public-profile/network.html">
            <span class="kt-menu-title text-nowrap font-medium text-sm text-secondary-foreground kt-menu-item-active:text-primary kt-menu-item-active:font-semibold kt-menu-item-here:text-primary kt-menu-item-here:font-semibold kt-menu-item-show:text-primary kt-menu-link-hover:text-primary">
             Network
            </span>
           </a>
          </div>
          <div class="kt-menu-item border-b-2 border-b-transparent kt-menu-item-active:border-b-primary kt-menu-item-here:border-b-primary active">
           <a class="kt-menu-link gap-1.5 pb-2 lg:pb-4 px-2" href="html/demo1/public-profile/activity.html">
            <span class="kt-menu-title text-nowrap font-medium text-sm text-secondary-foreground kt-menu-item-active:text-primary kt-menu-item-active:font-semibold kt-menu-item-here:text-primary kt-menu-item-here:font-semibold kt-menu-item-show:text-primary kt-menu-link-hover:text-primary">
             Activity
            </span>
           </a>
          </div>
          <div class="kt-menu-item border-b-2 border-b-transparent kt-menu-item-active:border-b-primary kt-menu-item-here:border-b-primary" data-kt-menu-item-overflow="true" data-kt-menu-item-placement="bottom-start" data-kt-menu-item-placement-rtl="bottom-end" data-kt-menu-item-toggle="dropdown" data-kt-menu-item-trigger="click|lg:hover">
           <div class="kt-menu-link gap-1.5 pb-2 lg:pb-4 px-2">
            <span class="kt-menu-title text-nowrap text-sm text-secondary-foreground kt-menu-item-active:text-primary kt-menu-item-active:font-medium kt-menu-item-here:text-primary kt-menu-item-here:font-medium kt-menu-item-show:text-primary kt-menu-link-hover:text-primary">
             More
            </span>
            <span class="kt-menu-arrow">
             <i class="ki-filled ki-down text-xs text-muted-foreground menu-item-active:text-primary kt-menu-item-here:text-primary menu-item-show:text-primary kt-menu-link-hover:text-primary">
             </i>
            </span>
           </div>
           <div class="kt-menu-dropdown kt-menu-default py-2 min-w-[200px]">
            <div class="kt-menu-item">
             <a class="kt-menu-link" href="html/demo1/public-profile/campaigns/card.html" tabindex="0">
              <span class="kt-menu-title">
               Campaigns - Card
              </span>
             </a>
            </div>
            <div class="kt-menu-item">
             <a class="kt-menu-link" href="html/demo1/public-profile/campaigns/list.html" tabindex="0">
              <span class="kt-menu-title">
               Campaigns - List
              </span>
             </a>
            </div>
            <div class="kt-menu-item">
             <a class="kt-menu-link" href="html/demo1/public-profile/empty.html" tabindex="0">
              <span class="kt-menu-title">
               Empty
              </span>
             </a>
            </div>
           </div>
          </div>
         </div>
        </div>
       </div>
       <div class="flex items-center justify-end grow lg:grow-0 lg:pb-4 gap-2.5 mb-3 lg:mb-0">
        <button class="kt-btn kt-btn-primary">
         <i class="ki-filled ki-users">
         </i>
         Connect
        </button>
        <button class="kt-btn kt-btn-icon kt-btn-outline">
         <i class="ki-filled ki-messages">
         </i>
        </button>
        <div data-kt-dropdown="true" data-kt-dropdown-placement="bottom-end" data-kt-dropdown-placement-rtl="bottom-start" data-kt-dropdown-trigger="click">
         <button class="kt-dropdown-toggle kt-btn kt-btn-icon kt-btn-outline" data-kt-dropdown-toggle="true">
          <i class="ki-filled ki-dots-vertical">
          </i>
         </button>
         <div class="kt-dropdown-menu w-full max-w-[220px]" data-kt-dropdown-menu="true">
          <ul class="kt-dropdown-menu-sub">
           <li>
            <button class="kt-dropdown-menu-link" data-kt-dropdown-dismiss="true" data-kt-modal-toggle="#share_profile_modal">
             <i class="ki-filled ki-coffee">
             </i>
             Share Profile
            </button>
           </li>
           <li>
            <button class="kt-dropdown-menu-link" data-kt-dropdown-dismiss="true" data-kt-modal-toggle="#give_award_modal">
             <i class="ki-filled ki-award">
             </i>
             Give Award
            </button>
           </li>
           <li>
            <div class="kt-dropdown-menu-link">
             <i class="ki-filled ki-coffee">
             </i>
             Stay Updated
             <input class="ms-auto kt-switch kt-switch-sm" name="check" type="checkbox" value="1"/>
            </div>
           </li>
           <li>
            <button class="kt-dropdown-menu-link" data-kt-dropdown-dismiss="true" data-kt-modal-toggle="#report_user_modal">
             <i class="ki-filled ki-information-2">
             </i>
             Report User
            </button>
           </li>
          </ul>
         </div>
        </div>
       </div>
      </div>
     </div>
     <!-- End of Container -->
     <!-- Container -->
     <div class="kt-container-fixed">
      <!-- begin: toolbar -->
      <div class="flex flex-wrap items-center gap-5 justify-between mb-7.5">
       <h3 class="text-lg text-mono font-semibold">
        Activity
       </h3>
      </div>
      <!-- end: toolbar -->
      <!-- begin: activity -->
      <div class="flex gap-5 lg:gap-7.5">
       <div class="kt-card grow" id="activity_2024">
        <div class="kt-card-header">
         <h3 class="kt-card-title">
          Activity
         </h3>
         <div class="flex items-center gap-2">
          <label class="group text-2sm font-medium inline-flex items-center gap-2">
           <span class="inline-flex items-center gap-2">
            Auto refresh:
            <span class="group-has-checked:hidden">
             Off
            </span>
            <span class="hidden group-has-checked:inline">
             On
            </span>
           </span>
           <input checked="" class="kt-switch kt-switch-sm" name="check" type="checkbox" value="1"/>
          </label>
         </div>
        </div>
        <div class="kt-card-content">
         <div class="flex flex-col">
          <div class="flex items-start relative">
           <div class="w-9 start-0 top-9 absolute bottom-0 rtl:-translate-x-1/2 translate-x-1/2 border-s border-s-input">
           </div>
           <div class="flex items-center justify-center shrink-0 rounded-full bg-accent/60 border border-input size-9 text-secondary-foreground">
            <i class="ki-filled ki-people text-base">
            </i>
           </div>
           <div class="ps-2.5 mb-7 text-base grow">
            <div class="flex flex-col">
             <div class="text-sm text-foreground">
              Posted a new article
              <a class="text-sm font-medium kt-link" href="html/demo1/public-profile/profiles/blogger.html">
               Top 10 Tech Trends
              </a>
             </div>
             <span class="text-xs text-secondary-foreground">
              Today, 9:00 AM
             </span>
            </div>
           </div>
          </div>
          <div class="flex items-start relative">
           <div class="w-9 start-0 top-9 absolute bottom-0 rtl:-translate-x-1/2 translate-x-1/2 border-s border-s-input">
           </div>
           <div class="flex items-center justify-center shrink-0 rounded-full bg-accent/60 border border-input size-9 text-secondary-foreground">
            <i class="ki-filled ki-entrance-left text-base">
            </i>
           </div>
           <div class="ps-2.5 mb-7 text-base grow">
            <div class="flex flex-col">
             <div class="text-sm text-foreground">
              I had the privilege of interviewing an industry expert for an
              <a class="text-sm kt-link" href="html/demo1/public-profile/profiles/blogger.html">
               upcoming blog post
              </a>
             </div>
             <span class="text-xs text-secondary-foreground">
              2 days ago, 4:07 PM
             </span>
            </div>
           </div>
          </div>
          <div class="flex items-start relative">
           <div class="w-9 start-0 top-9 absolute bottom-0 rtl:-translate-x-1/2 translate-x-1/2 border-s border-s-input">
           </div>
           <div class="flex items-center justify-center shrink-0 rounded-full bg-accent/60 border border-input size-9 text-secondary-foreground">
            <i class="ki-filled ki-code text-base">
            </i>
           </div>
           <div class="ps-2.5 mb-7 text-base grow">
            <div class="flex flex-col pb-2.5">
             <span class="text-sm text-foreground">
              Jenny attended a Nature Photography Immersion workshop
             </span>
             <span class="text-xs text-secondary-foreground">
              3 days ago, 11:45 AM
             </span>
            </div>
            <div class="kt-card shadow-none">
             <div class="kt-card-content">
              <div class="grid gap-4">
               <div class="flex flex-col md:flex-row md:items-center gap-5">
                <div class="flex items-center gap-5 shrink-0">
                 <div class="border border-primary/10 rounded-lg max-h-20">
                  <div class="flex items-center justify-center border-b border-b-primary/10 bg-primary/10 rounded-t-lg">
                   <span class="text-sm text-primary font-medium p-2">
                    Apr
                   </span>
                  </div>
                  <div class="flex items-center justify-center size-12">
                   <span class="font-medium text-foreground text-xl tracking-tight">
                    02
                   </span>
                  </div>
                 </div>
                 <img alt="" class="rounded-lg max-h-20 max-w-full" src="assets/media/images/600x400/8.jpg">
                 </img>
                </div>
                <div class="flex flex-col gap-2">
                 <a class="text-xs text-primary leading-[14px] hover:text-primary mb-px" href="#">
                  Photo Workshop
                 </a>
                 <a class="text-base font-medium hover:text-primary text-mono leading-4" href="#">
                  Nature Photography Immersion
                 </a>
                 <p class="text-xs text-foreground leading-[22px]">
                  Enhance your nature photography skills in a hands-on workshop guided by experienced photographers.
                 </p>
                </div>
               </div>
              </div>
             </div>
            </div>
           </div>
          </div>
          <div class="flex items-start relative">
           <div class="w-9 start-0 top-9 absolute bottom-0 rtl:-translate-x-1/2 translate-x-1/2 border-s border-s-input">
           </div>
           <div class="flex items-center justify-center shrink-0 rounded-full bg-accent/60 border border-input size-9 text-secondary-foreground">
            <i class="ki-filled ki-share text-base">
            </i>
           </div>
           <div class="ps-2.5 mb-7 text-base grow">
            <div class="flex flex-col">
             <div class="text-sm text-foreground">
              I couldn't resist sharing a sneak peek of our
              <a class="text-sm kt-link" href="html/demo1/public-profile/profiles/blogger.html">
               upcoming content
              </a>
             </div>
             <span class="text-xs text-secondary-foreground">
              5 days ago, 4:07 PM
             </span>
            </div>
           </div>
          </div>
          <div class="flex items-start relative">
           <div class="w-9 start-0 top-9 absolute bottom-0 rtl:-translate-x-1/2 translate-x-1/2 border-s border-s-input">
           </div>
           <div class="flex items-center justify-center shrink-0 rounded-full bg-accent/60 border border-input size-9 text-secondary-foreground">
            <i class="ki-filled ki-calendar-tick text-base">
            </i>
           </div>
           <div class="ps-2.5 mb-7 text-base grow">
            <div class="flex flex-col pb-2.5">
             <span class="text-sm text-foreground">
              Jenny attended a webinar on new product features.
             </span>
             <span class="text-xs text-secondary-foreground">
              3 days ago, 11:45 AM
             </span>
            </div>
            <div class="kt-card shadow-none p-4">
             <div class="flex flex-wrap gap-2.5">
              <i class="ki-filled ki-code text-lg text-violet-500">
              </i>
              <div class="flex flex-col gap-5 grow">
               <div class="flex flex-wrap items-center justify-between">
                <div class="flex flex-col gap-0.5">
                 <span class="text-base font-medium text-mono cursor-pointer hover:text-primary mb-px">
                  Leadership Development Series: Part 1
                 </span>
                 <span class="text-xs text-secondary-foreground">
                  The first installment of a leadership development series.
                 </span>
                </div>
                <a class="kt-link kt-link-underlined kt-link-dashed" href="html/demo1/account/members/teams.html">
                 View
                </a>
               </div>
               <div class="flex flex-wrap gap-7.5">
                <div class="flex items-center gap-1.5">
                 <span class="text-sm font-medium text-secondary-foreground">
                  Code:
                 </span>
                 <a class="text-sm text-primary" href="#">
                  #leaderdev-1
                 </a>
                </div>
                <div class="flex items-center gap-1.5">
                 <span class="text-sm text-secondary-foreground">
                  Progress:
                 </span>
                 <div class="kt-progress kt-progress-success min-w-[120px]">
                  <div class="kt-progress-indicator" style="width: 80%">
                  </div>
                 </div>
                </div>
                <div class="flex items-center gap-1.5 lg:min-w-24 shrink-0 max-w-auto">
                 <span class="text-sm text-secondary-foreground">
                  Guests:
                 </span>
                 <div class="flex -space-x-2">
                  <div class="flex">
                   <img class="hover:z-5 relative shrink-0 rounded-full ring-1 ring-background size-7" src="assets/media/avatars/300-4.png"/>
                  </div>
                  <div class="flex">
                   <img class="hover:z-5 relative shrink-0 rounded-full ring-1 ring-background size-7" src="assets/media/avatars/300-1.png"/>
                  </div>
                  <div class="flex">
                   <img class="hover:z-5 relative shrink-0 rounded-full ring-1 ring-background size-7" src="assets/media/avatars/300-2.png"/>
                  </div>
                  <div class="flex">
                   <span class="hover:z-5 relative inline-flex items-center justify-center shrink-0 rounded-full ring-1 font-semibold leading-none text-2xs size-7 text-primary-foreground ring-primary/10 bg-primary">
                    +24
                   </span>
                  </div>
                 </div>
                </div>
               </div>
              </div>
             </div>
            </div>
           </div>
          </div>
          <div class="flex items-start relative">
           <div class="w-9 start-0 top-9 absolute bottom-0 rtl:-translate-x-1/2 translate-x-1/2 border-s border-s-input">
           </div>
           <div class="flex items-center justify-center shrink-0 rounded-full bg-accent/60 border border-input size-9 text-secondary-foreground">
            <i class="ki-filled ki-coffee text-base">
            </i>
           </div>
           <div class="ps-2.5 mb-7 text-base grow">
            <div class="flex flex-col">
             <div class="text-sm text-mono">
              Reaching the milestone of
              <a class="text-sm font-medium kt-ink" href="html/demo1/public-profile/profiles/feeds.html">
               10,000 followers
              </a>
              on the blog was a dream come true
             </div>
             <span class="text-xs text-secondary-foreground">
              5 days ago, 4:07 PM
             </span>
            </div>
           </div>
          </div>
          <div class="flex items-start relative">
           <div class="w-9 start-0 top-9 absolute bottom-0 rtl:-translate-x-1/2 translate-x-1/2 border-s border-s-input">
           </div>
           <div class="flex items-center justify-center shrink-0 rounded-full bg-accent/60 border border-input size-9 text-secondary-foreground">
            <i class="ki-filled ki-rocket text-base">
            </i>
           </div>
           <div class="ps-2.5 mb-7 text-base grow">
            <div class="flex flex-col">
             <div class="text-sm text-mono">
              Completed phase one of client project ahead of schedule.
             </div>
             <span class="text-xs text-secondary-foreground">
              6 days ago, 10:45 AM
             </span>
            </div>
           </div>
          </div>
          <div class="flex items-start relative">
           <div class="w-9 start-0 top-9 absolute bottom-0 rtl:-translate-x-1/2 translate-x-1/2 border-s border-s-input">
           </div>
           <div class="flex items-center justify-center shrink-0 rounded-full bg-accent/60 border border-input size-9 text-secondary-foreground">
            <i class="ki-filled ki-directbox-default text-base">
            </i>
           </div>
           <div class="ps-2.5 mb-7 text-base grow">
            <div class="flex flex-col pb-2.5">
             <span class="text-sm text-foreground">
              Attending the virtual blogging conference was an enriching experience
             </span>
             <span class="text-xs text-secondary-foreground">
              2 days ago, 4:07 PM
             </span>
            </div>
            <div class="kt-card shadow-none">
             <div class="kt-card-content lg:py-4">
              <div class="flex justify-center py-4">
               <img alt="image" class="dark:hidden max-h-[160px]" src="assets/media/illustrations/3.svg">
                <img alt="image" class="light:hidden max-h-[160px]" src="assets/media/illustrations/3-dark.svg">
                </img>
               </img>
              </div>
              <div class="flex flex-col gap-1">
               <div class="text-base font-medium text-mono text-center">
                Blogging Conference
               </div>
               <div class="flex items-center justify-center gap-1">
                <a class="text-sm font-semibold link" href="html/demo1/public-profile/profiles/company.html">
                 Axio new release
                </a>
                <span class="text-sm text-secondary-foreground me-2">
                 email campaign
                </span>
                <span class="kt-badge kt-badge-sm kt-badge-success kt-badge-outline">
                 Public
                </span>
               </div>
              </div>
             </div>
            </div>
           </div>
          </div>
          <div class="flex items-start relative">
           <div class="w-9 start-0 top-9 absolute bottom-0 rtl:-translate-x-1/2 translate-x-1/2 border-s border-s-input">
           </div>
           <div class="flex items-center justify-center shrink-0 rounded-full bg-accent/60 border border-input size-9 text-secondary-foreground">
            <i class="ki-filled ki-design-1 text-base">
            </i>
           </div>
           <div class="ps-2.5 mb-7 text-base grow">
            <div class="flex flex-col">
             <div class="text-sm text-foreground">
              Onboarded a talented designer to our creative team, adding valuable expertise to upcoming projects.
             </div>
             <span class="text-xs text-secondary-foreground">
              2 weeks ago, 10:45 AM
             </span>
            </div>
           </div>
          </div>
          <div class="flex items-start relative">
           <div class="w-9 start-0 top-9 absolute bottom-0 rtl:-translate-x-1/2 translate-x-1/2 border-s border-s-input">
           </div>
           <div class="flex items-center justify-center shrink-0 rounded-full bg-accent/60 border border-input size-9 text-secondary-foreground">
            <i class="ki-filled ki-code text-base">
            </i>
           </div>
           <div class="ps-2.5 mb-7 text-base grow">
            <div class="grow">
             <div class="flex flex-col pb-2.5">
              <div class="text-sm text-foreground">
               A new team
               <a class="text-sm font-medium text-mono hover:text-primary" href="#">
                Market Mavericks
               </a>
               joined community
              </div>
              <span class="text-xs text-secondary-foreground">
               1 month ago, 11:45 AM
              </span>
             </div>
             <div class="kt-card shadow-none p-4">
              <div class="flex flex-wrap justify-between items-center gap-7">
               <div class="flex items-center gap-4">
                <div class="relative size-[50px] shrink-0">
                 <svg class="w-full h-full stroke-primary/10 fill-primary-soft" fill="none" height="48" viewbox="0 0 44 48" width="44" xmlns="http://www.w3.org/2000/svg">
                  <path d="M16 2.4641C19.7128 0.320509 24.2872 0.320508 28 2.4641L37.6506 8.0359C41.3634 10.1795 43.6506 14.141 43.6506
              18.4282V29.5718C43.6506 33.859 41.3634 37.8205 37.6506 39.9641L28 45.5359C24.2872 47.6795 19.7128 47.6795 16 45.5359L6.34937
              39.9641C2.63655 37.8205 0.349365 33.859 0.349365 29.5718V18.4282C0.349365 14.141 2.63655 10.1795 6.34937 8.0359L16 2.4641Z" fill="none">
                  </path>
                  <path d="M16.25 2.89711C19.8081 0.842838 24.1919 0.842837 27.75 2.89711L37.4006 8.46891C40.9587 10.5232 43.1506 14.3196 43.1506
              18.4282V29.5718C43.1506 33.6804 40.9587 37.4768 37.4006 39.5311L27.75 45.1029C24.1919 47.1572 19.8081 47.1572 16.25 45.1029L6.59937
              39.5311C3.04125 37.4768 0.849365 33.6803 0.849365 29.5718V18.4282C0.849365 14.3196 3.04125 10.5232 6.59937 8.46891L16.25 2.89711Z" stroke="none" stroke-opacity="1">
                  </path>
                 </svg>
                 <div class="absolute leading-none start-2/4 top-2/4 -translate-y-2/4 -translate-x-2/4 rtl:translate-x-2/4">
                  <i class="ki-filled ki-abstract-39 text-xl ps-px text-primary">
                  </i>
                 </div>
                </div>
                <div class="flex flex-col gap-1.5">
                 <a class="text-base font-medium hover:text-primary text-mono" href="#">
                  Market Mavericks
                 </a>
                 <p class="text-sm text-secondary-foreground">
                  Navigating markets with strategic solutions
                 </p>
                </div>
               </div>
               <div class="flex flex-wrap items-center gap-6 lg:gap-12">
                <div class="flex flex-col items-end gap-5">
                 <span class="text-xs text-secondary-foreground uppercase">
                  rating
                 </span>
                 <div class="kt-rating">
                  <div class="kt-rating-label checked">
                   <i class="kt-rating-on ki-solid ki-star text-base leading-none">
                   </i>
                   <i class="kt-rating-off ki-outline ki-star text-base leading-none">
                   </i>
                  </div>
                  <div class="kt-rating-label checked">
                   <i class="kt-rating-on ki-solid ki-star text-base leading-none">
                   </i>
                   <i class="kt-rating-off ki-outline ki-star text-base leading-none">
                   </i>
                  </div>
                  <div class="kt-rating-label checked">
                   <i class="kt-rating-on ki-solid ki-star text-base leading-none">
                   </i>
                   <i class="kt-rating-off ki-outline ki-star text-base leading-none">
                   </i>
                  </div>
                  <div class="kt-rating-label checked">
                   <i class="kt-rating-on ki-solid ki-star text-base leading-none">
                   </i>
                   <i class="kt-rating-off ki-outline ki-star text-base leading-none">
                   </i>
                  </div>
                  <div class="kt-rating-label indeterminate">
                   <i class="kt-rating-on ki-solid ki-star text-base leading-none" style="width: 50.0%">
                   </i>
                   <i class="kt-rating-off ki-outline ki-star text-base leading-none">
                   </i>
                  </div>
                 </div>
                </div>
                <div class="flex flex-col items-end gap-3 lg:min-w-24 shrink-0 max-w-auto">
                 <span class="text-xs text-secondary-foreground uppercase">
                  memebers
                 </span>
                 <div class="flex -space-x-2">
                  <div class="flex">
                   <img class="hover:z-5 relative shrink-0 rounded-full ring-1 ring-background size-7" src="assets/media/avatars/300-4.png"/>
                  </div>
                  <div class="flex">
                   <img class="hover:z-5 relative shrink-0 rounded-full ring-1 ring-background size-7" src="assets/media/avatars/300-1.png"/>
                  </div>
                  <div class="flex">
                   <img class="hover:z-5 relative shrink-0 rounded-full ring-1 ring-background size-7" src="assets/media/avatars/300-2.png"/>
                  </div>
                  <div class="flex">
                   <span class="hover:z-5 relative inline-flex items-center justify-center shrink-0 rounded-full ring-1 font-semibold leading-none text-2xs size-7 text-primary-foreground ring-background bg-primary">
                    S
                   </span>
                  </div>
                 </div>
                </div>
                <div class="grid justify-end min-w-20">
                 <a class="kt-btn kt-btn-sm kt-btn-primary">
                  <i class="ki-filled ki-people">
                  </i>
                  Join
                 </a>
                </div>
               </div>
              </div>
             </div>
            </div>
           </div>
          </div>
          <div class="flex items-start relative">
           <div class="w-9 start-0 top-9 absolute bottom-0 rtl:-translate-x-1/2 translate-x-1/2 border-s border-s-input">
           </div>
           <div class="flex items-center justify-center shrink-0 rounded-full bg-accent/60 border border-input size-9 text-secondary-foreground">
            <i class="ki-filled ki-like-shapes text-base">
            </i>
           </div>
           <div class="ps-2.5 mb-7 text-base grow">
            <div class="flex flex-col">
             <div class="text-sm font-medium text-foreground">
              Hosted a virtual
              <a class="text-sm font-medium kt-link" href="html/demo1/public-profile/profiles/creator.html">
               team-building event
              </a>
              , fostering collaboration and strengthening bonds among team members.
             </div>
             <span class="text-xs font-medium text-muted-foreground">
              1 month ago, 13:56 PM
             </span>
            </div>
           </div>
          </div>
          <div class="flex items-start relative">
           <div class="flex items-center justify-center shrink-0 rounded-full bg-accent/60 border border-input size-9 text-secondary-foreground">
            <i class="ki-filled ki-cup text-base">
            </i>
           </div>
           <div class="ps-2.5 text-base grow">
            <div class="flex flex-col">
             <div class="text-sm text-foreground">
              We recently
              <a class="text-sm font-medium kt-link" href="html/demo1/public-profile/profiles/nft.html">
               celebrated
              </a>
              the blog's 1-year anniversary
             </div>
             <span class="text-xs text-secondary-foreground">
              3 months ago, 4:07 PM
             </span>
            </div>
           </div>
          </div>
         </div>
        </div>
        <div class="kt-card-footer justify-center">
         <a class="kt-link kt-link-underlined kt-link-dashed" href="#">
          All-time Activity
         </a>
        </div>
       </div>
       <div class="kt-card grow hidden" id="activity_2023">
        <div class="kt-card-header">
         <h3 class="kt-card-title">
          Activity
         </h3>
         <div class="flex items-center gap-2">
          <label class="group text-2sm font-medium inline-flex items-center gap-2">
           <span class="inline-flex items-center gap-2">
            Auto refresh:
            <span class="group-has-checked:hidden">
             Off
            </span>
            <span class="hidden group-has-checked:inline">
             On
            </span>
           </span>
           <input checked="" class="kt-switch kt-switch-sm" name="check" type="checkbox" value="1"/>
          </label>
         </div>
        </div>
        <div class="kt-card-content">
         <div class="flex flex-col">
          <div class="flex items-start relative">
           <div class="w-9 start-0 top-9 absolute bottom-0 rtl:-translate-x-1/2 translate-x-1/2 border-s border-s-input">
           </div>
           <div class="flex items-center justify-center shrink-0 rounded-full bg-accent/60 border border-input size-9 text-secondary-foreground">
            <i class="ki-filled ki-people text-base">
            </i>
           </div>
           <div class="ps-2.5 mb-7 text-base grow">
            <div class="flex flex-col">
             <div class="text-sm text-foreground">
              Posted a new article
              <a class="text-sm font-medium kt-link" href="html/demo1/public-profile/profiles/blogger.html">
               Top 10 Tech Trends
              </a>
             </div>
             <span class="text-xs text-secondary-foreground">
              Today, 9:00 AM
             </span>
            </div>
           </div>
          </div>
          <div class="flex items-start relative">
           <div class="w-9 start-0 top-9 absolute bottom-0 rtl:-translate-x-1/2 translate-x-1/2 border-s border-s-input">
           </div>
           <div class="flex items-center justify-center shrink-0 rounded-full bg-accent/60 border border-input size-9 text-secondary-foreground">
            <i class="ki-filled ki-share text-base">
            </i>
           </div>
           <div class="ps-2.5 mb-7 text-base grow">
            <div class="flex flex-col">
             <div class="text-sm text-foreground">
              I couldn't resist sharing a sneak peek of our
              <a class="text-sm kt-link" href="html/demo1/public-profile/profiles/blogger.html">
               upcoming content
              </a>
             </div>
             <span class="text-xs text-secondary-foreground">
              5 days ago, 4:07 PM
             </span>
            </div>
           </div>
          </div>
          <div class="flex items-start relative">
           <div class="w-9 start-0 top-9 absolute bottom-0 rtl:-translate-x-1/2 translate-x-1/2 border-s border-s-input">
           </div>
           <div class="flex items-center justify-center shrink-0 rounded-full bg-accent/60 border border-input size-9 text-secondary-foreground">
            <i class="ki-filled ki-coffee text-base">
            </i>
           </div>
           <div class="ps-2.5 mb-7 text-base grow">
            <div class="flex flex-col">
             <div class="text-sm text-mono">
              Reaching the milestone of
              <a class="text-sm font-medium kt-ink" href="html/demo1/public-profile/profiles/feeds.html">
               10,000 followers
              </a>
              on the blog was a dream come true
             </div>
             <span class="text-xs text-secondary-foreground">
              5 days ago, 4:07 PM
             </span>
            </div>
           </div>
          </div>
          <div class="flex items-start relative">
           <div class="w-9 start-0 top-9 absolute bottom-0 rtl:-translate-x-1/2 translate-x-1/2 border-s border-s-input">
           </div>
           <div class="flex items-center justify-center shrink-0 rounded-full bg-accent/60 border border-input size-9 text-secondary-foreground">
            <i class="ki-filled ki-design-1 text-base">
            </i>
           </div>
           <div class="ps-2.5 mb-7 text-base grow">
            <div class="flex flex-col">
             <div class="text-sm text-foreground">
              Onboarded a talented designer to our creative team, adding valuable expertise to upcoming projects.
             </div>
             <span class="text-xs text-secondary-foreground">
              2 weeks ago, 10:45 AM
             </span>
            </div>
           </div>
          </div>
          <div class="flex items-start relative">
           <div class="w-9 start-0 top-9 absolute bottom-0 rtl:-translate-x-1/2 translate-x-1/2 border-s border-s-input">
           </div>
           <div class="flex items-center justify-center shrink-0 rounded-full bg-accent/60 border border-input size-9 text-secondary-foreground">
            <i class="ki-filled ki-like-shapes text-base">
            </i>
           </div>
           <div class="ps-2.5 mb-7 text-base grow">
            <div class="flex flex-col">
             <div class="text-sm font-medium text-foreground">
              Hosted a virtual
              <a class="text-sm font-medium kt-link" href="html/demo1/public-profile/profiles/creator.html">
               team-building event
              </a>
              , fostering collaboration and strengthening bonds among team members.
             </div>
             <span class="text-xs font-medium text-muted-foreground">
              1 month ago, 13:56 PM
             </span>
            </div>
           </div>
          </div>
          <div class="flex items-start relative">
           <div class="flex items-center justify-center shrink-0 rounded-full bg-accent/60 border border-input size-9 text-secondary-foreground">
            <i class="ki-filled ki-cup text-base">
            </i>
           </div>
           <div class="ps-2.5 text-base grow">
            <div class="flex flex-col">
             <div class="text-sm text-foreground">
              We recently
              <a class="text-sm font-medium kt-link" href="html/demo1/public-profile/profiles/nft.html">
               celebrated
              </a>
              the blog's 1-year anniversary
             </div>
             <span class="text-xs text-secondary-foreground">
              3 months ago, 4:07 PM
             </span>
            </div>
           </div>
          </div>
         </div>
        </div>
        <div class="kt-card-footer justify-center">
         <a class="kt-link kt-link-underlined kt-link-dashed" href="#">
          All-time Activity
         </a>
        </div>
       </div>
       <div class="kt-card grow hidden" id="activity_2022">
        <div class="kt-card-header">
         <h3 class="kt-card-title">
          Activity
         </h3>
         <div class="flex items-center gap-2">
          <label class="group text-2sm font-medium inline-flex items-center gap-2">
           <span class="inline-flex items-center gap-2">
            Auto refresh:
            <span class="group-has-checked:hidden">
             Off
            </span>
            <span class="hidden group-has-checked:inline">
             On
            </span>
           </span>
           <input checked="" class="kt-switch kt-switch-sm" name="check" type="checkbox" value="1"/>
          </label>
         </div>
        </div>
        <div class="kt-card-content">
         <div class="flex flex-col">
          <div class="flex items-start relative">
           <div class="w-9 start-0 top-9 absolute bottom-0 rtl:-translate-x-1/2 translate-x-1/2 border-s border-s-input">
           </div>
           <div class="flex items-center justify-center shrink-0 rounded-full bg-accent/60 border border-input size-9 text-secondary-foreground">
            <i class="ki-filled ki-people text-base">
            </i>
           </div>
           <div class="ps-2.5 mb-7 text-base grow">
            <div class="flex flex-col">
             <div class="text-sm text-foreground">
              Posted a new article
              <a class="text-sm font-medium kt-link" href="html/demo1/public-profile/profiles/blogger.html">
               Top 10 Tech Trends
              </a>
             </div>
             <span class="text-xs text-secondary-foreground">
              Today, 9:00 AM
             </span>
            </div>
           </div>
          </div>
          <div class="flex items-start relative">
           <div class="w-9 start-0 top-9 absolute bottom-0 rtl:-translate-x-1/2 translate-x-1/2 border-s border-s-input">
           </div>
           <div class="flex items-center justify-center shrink-0 rounded-full bg-accent/60 border border-input size-9 text-secondary-foreground">
            <i class="ki-filled ki-entrance-left text-base">
            </i>
           </div>
           <div class="ps-2.5 mb-7 text-base grow">
            <div class="flex flex-col">
             <div class="text-sm text-foreground">
              I had the privilege of interviewing an industry expert for an
              <a class="text-sm kt-link" href="html/demo1/public-profile/profiles/blogger.html">
               upcoming blog post
              </a>
             </div>
             <span class="text-xs text-secondary-foreground">
              2 days ago, 4:07 PM
             </span>
            </div>
           </div>
          </div>
          <div class="flex items-start relative">
           <div class="w-9 start-0 top-9 absolute bottom-0 rtl:-translate-x-1/2 translate-x-1/2 border-s border-s-input">
           </div>
           <div class="flex items-center justify-center shrink-0 rounded-full bg-accent/60 border border-input size-9 text-secondary-foreground">
            <i class="ki-filled ki-share text-base">
            </i>
           </div>
           <div class="ps-2.5 mb-7 text-base grow">
            <div class="flex flex-col">
             <div class="text-sm text-foreground">
              I couldn't resist sharing a sneak peek of our
              <a class="text-sm kt-link" href="html/demo1/public-profile/profiles/blogger.html">
               upcoming content
              </a>
             </div>
             <span class="text-xs text-secondary-foreground">
              5 days ago, 4:07 PM
             </span>
            </div>
           </div>
          </div>
          <div class="flex items-start relative">
           <div class="w-9 start-0 top-9 absolute bottom-0 rtl:-translate-x-1/2 translate-x-1/2 border-s border-s-input">
           </div>
           <div class="flex items-center justify-center shrink-0 rounded-full bg-accent/60 border border-input size-9 text-secondary-foreground">
            <i class="ki-filled ki-coffee text-base">
            </i>
           </div>
           <div class="ps-2.5 mb-7 text-base grow">
            <div class="flex flex-col">
             <div class="text-sm text-mono">
              Reaching the milestone of
              <a class="text-sm font-medium kt-ink" href="html/demo1/public-profile/profiles/feeds.html">
               10,000 followers
              </a>
              on the blog was a dream come true
             </div>
             <span class="text-xs text-secondary-foreground">
              5 days ago, 4:07 PM
             </span>
            </div>
           </div>
          </div>
          <div class="flex items-start relative">
           <div class="w-9 start-0 top-9 absolute bottom-0 rtl:-translate-x-1/2 translate-x-1/2 border-s border-s-input">
           </div>
           <div class="flex items-center justify-center shrink-0 rounded-full bg-accent/60 border border-input size-9 text-secondary-foreground">
            <i class="ki-filled ki-design-1 text-base">
            </i>
           </div>
           <div class="ps-2.5 mb-7 text-base grow">
            <div class="flex flex-col">
             <div class="text-sm text-foreground">
              Onboarded a talented designer to our creative team, adding valuable expertise to upcoming projects.
             </div>
             <span class="text-xs text-secondary-foreground">
              2 weeks ago, 10:45 AM
             </span>
            </div>
           </div>
          </div>
          <div class="flex items-start relative">
           <div class="w-9 start-0 top-9 absolute bottom-0 rtl:-translate-x-1/2 translate-x-1/2 border-s border-s-input">
           </div>
           <div class="flex items-center justify-center shrink-0 rounded-full bg-accent/60 border border-input size-9 text-secondary-foreground">
            <i class="ki-filled ki-like-shapes text-base">
            </i>
           </div>
           <div class="ps-2.5 mb-7 text-base grow">
            <div class="flex flex-col">
             <div class="text-sm font-medium text-foreground">
              Hosted a virtual
              <a class="text-sm font-medium kt-link" href="html/demo1/public-profile/profiles/creator.html">
               team-building event
              </a>
              , fostering collaboration and strengthening bonds among team members.
             </div>
             <span class="text-xs font-medium text-muted-foreground">
              1 month ago, 13:56 PM
             </span>
            </div>
           </div>
          </div>
          <div class="flex items-start relative">
           <div class="flex items-center justify-center shrink-0 rounded-full bg-accent/60 border border-input size-9 text-secondary-foreground">
            <i class="ki-filled ki-cup text-base">
            </i>
           </div>
           <div class="ps-2.5 text-base grow">
            <div class="flex flex-col">
             <div class="text-sm text-foreground">
              We recently
              <a class="text-sm font-medium kt-link" href="html/demo1/public-profile/profiles/nft.html">
               celebrated
              </a>
              the blog's 1-year anniversary
             </div>
             <span class="text-xs text-secondary-foreground">
              3 months ago, 4:07 PM
             </span>
            </div>
           </div>
          </div>
         </div>
        </div>
        <div class="kt-card-footer justify-center">
         <a class="kt-link kt-link-underlined kt-link-dashed" href="#">
          All-time Activity
         </a>
        </div>
       </div>
       <div class="kt-card grow hidden" id="activity_2021">
        <div class="kt-card-header">
         <h3 class="kt-card-title">
          Activity
         </h3>
         <div class="flex items-center gap-2">
          <label class="group text-2sm font-medium inline-flex items-center gap-2">
           <span class="inline-flex items-center gap-2">
            Auto refresh:
            <span class="group-has-checked:hidden">
             Off
            </span>
            <span class="hidden group-has-checked:inline">
             On
            </span>
           </span>
           <input checked="" class="kt-switch kt-switch-sm" name="check" type="checkbox" value="1"/>
          </label>
         </div>
        </div>
        <div class="kt-card-content">
         <div class="flex flex-col">
          <div class="flex items-start relative">
           <div class="w-9 start-0 top-9 absolute bottom-0 rtl:-translate-x-1/2 translate-x-1/2 border-s border-s-input">
           </div>
           <div class="flex items-center justify-center shrink-0 rounded-full bg-accent/60 border border-input size-9 text-secondary-foreground">
            <i class="ki-filled ki-code text-base">
            </i>
           </div>
           <div class="ps-2.5 mb-7 text-base grow">
            <div class="flex flex-col pb-2.5">
             <span class="text-sm text-foreground">
              Jenny attended a Nature Photography Immersion workshop
             </span>
             <span class="text-xs text-secondary-foreground">
              3 days ago, 11:45 AM
             </span>
            </div>
            <div class="kt-card shadow-none">
             <div class="kt-card-content">
              <div class="grid gap-4">
               <div class="flex flex-col md:flex-row md:items-center gap-5">
                <div class="flex items-center gap-5 shrink-0">
                 <div class="border border-primary/10 rounded-lg max-h-20">
                  <div class="flex items-center justify-center border-b border-b-primary/10 bg-primary/10 rounded-t-lg">
                   <span class="text-sm text-primary font-medium p-2">
                    Apr
                   </span>
                  </div>
                  <div class="flex items-center justify-center size-12">
                   <span class="font-medium text-foreground text-xl tracking-tight">
                    02
                   </span>
                  </div>
                 </div>
                 <img alt="" class="rounded-lg max-h-20 max-w-full" src="assets/media/images/600x400/8.jpg">
                 </img>
                </div>
                <div class="flex flex-col gap-2">
                 <a class="text-xs text-primary leading-[14px] hover:text-primary mb-px" href="#">
                  Photo Workshop
                 </a>
                 <a class="text-base font-medium hover:text-primary text-mono leading-4" href="#">
                  Nature Photography Immersion
                 </a>
                 <p class="text-xs text-foreground leading-[22px]">
                  Enhance your nature photography skills in a hands-on workshop guided by experienced photographers.
                 </p>
                </div>
               </div>
              </div>
             </div>
            </div>
           </div>
          </div>
          <div class="flex items-start relative">
           <div class="w-9 start-0 top-9 absolute bottom-0 rtl:-translate-x-1/2 translate-x-1/2 border-s border-s-input">
           </div>
           <div class="flex items-center justify-center shrink-0 rounded-full bg-accent/60 border border-input size-9 text-secondary-foreground">
            <i class="ki-filled ki-share text-base">
            </i>
           </div>
           <div class="ps-2.5 mb-7 text-base grow">
            <div class="flex flex-col">
             <div class="text-sm text-foreground">
              I couldn't resist sharing a sneak peek of our
              <a class="text-sm kt-link" href="html/demo1/public-profile/profiles/blogger.html">
               upcoming content
              </a>
             </div>
             <span class="text-xs text-secondary-foreground">
              5 days ago, 4:07 PM
             </span>
            </div>
           </div>
          </div>
          <div class="flex items-start relative">
           <div class="w-9 start-0 top-9 absolute bottom-0 rtl:-translate-x-1/2 translate-x-1/2 border-s border-s-input">
           </div>
           <div class="flex items-center justify-center shrink-0 rounded-full bg-accent/60 border border-input size-9 text-secondary-foreground">
            <i class="ki-filled ki-coffee text-base">
            </i>
           </div>
           <div class="ps-2.5 mb-7 text-base grow">
            <div class="flex flex-col">
             <div class="text-sm text-mono">
              Reaching the milestone of
              <a class="text-sm font-medium kt-ink" href="html/demo1/public-profile/profiles/feeds.html">
               10,000 followers
              </a>
              on the blog was a dream come true
             </div>
             <span class="text-xs text-secondary-foreground">
              5 days ago, 4:07 PM
             </span>
            </div>
           </div>
          </div>
          <div class="flex items-start relative">
           <div class="w-9 start-0 top-9 absolute bottom-0 rtl:-translate-x-1/2 translate-x-1/2 border-s border-s-input">
           </div>
           <div class="flex items-center justify-center shrink-0 rounded-full bg-accent/60 border border-input size-9 text-secondary-foreground">
            <i class="ki-filled ki-rocket text-base">
            </i>
           </div>
           <div class="ps-2.5 mb-7 text-base grow">
            <div class="flex flex-col">
             <div class="text-sm text-mono">
              Completed phase one of client project ahead of schedule.
             </div>
             <span class="text-xs text-secondary-foreground">
              6 days ago, 10:45 AM
             </span>
            </div>
           </div>
          </div>
          <div class="flex items-start relative">
           <div class="w-9 start-0 top-9 absolute bottom-0 rtl:-translate-x-1/2 translate-x-1/2 border-s border-s-input">
           </div>
           <div class="flex items-center justify-center shrink-0 rounded-full bg-accent/60 border border-input size-9 text-secondary-foreground">
            <i class="ki-filled ki-design-1 text-base">
            </i>
           </div>
           <div class="ps-2.5 mb-7 text-base grow">
            <div class="flex flex-col">
             <div class="text-sm text-foreground">
              Onboarded a talented designer to our creative team, adding valuable expertise to upcoming projects.
             </div>
             <span class="text-xs text-secondary-foreground">
              2 weeks ago, 10:45 AM
             </span>
            </div>
           </div>
          </div>
          <div class="flex items-start relative">
           <div class="w-9 start-0 top-9 absolute bottom-0 rtl:-translate-x-1/2 translate-x-1/2 border-s border-s-input">
           </div>
           <div class="flex items-center justify-center shrink-0 rounded-full bg-accent/60 border border-input size-9 text-secondary-foreground">
            <i class="ki-filled ki-like-shapes text-base">
            </i>
           </div>
           <div class="ps-2.5 mb-7 text-base grow">
            <div class="flex flex-col">
             <div class="text-sm font-medium text-foreground">
              Hosted a virtual
              <a class="text-sm font-medium kt-link" href="html/demo1/public-profile/profiles/creator.html">
               team-building event
              </a>
              , fostering collaboration and strengthening bonds among team members.
             </div>
             <span class="text-xs font-medium text-muted-foreground">
              1 month ago, 13:56 PM
             </span>
            </div>
           </div>
          </div>
          <div class="flex items-start relative">
           <div class="flex items-center justify-center shrink-0 rounded-full bg-accent/60 border border-input size-9 text-secondary-foreground">
            <i class="ki-filled ki-cup text-base">
            </i>
           </div>
           <div class="ps-2.5 text-base grow">
            <div class="flex flex-col">
             <div class="text-sm text-foreground">
              We recently
              <a class="text-sm font-medium kt-link" href="html/demo1/public-profile/profiles/nft.html">
               celebrated
              </a>
              the blog's 1-year anniversary
             </div>
             <span class="text-xs text-secondary-foreground">
              3 months ago, 4:07 PM
             </span>
            </div>
           </div>
          </div>
         </div>
        </div>
        <div class="kt-card-footer justify-center">
         <a class="kt-link kt-link-underlined kt-link-dashed" href="#">
          All-time Activity
         </a>
        </div>
       </div>
       <div class="kt-card grow hidden" id="activity_2020">
        <div class="kt-card-header">
         <h3 class="kt-card-title">
          Activity
         </h3>
         <div class="flex items-center gap-2">
          <label class="group text-2sm font-medium inline-flex items-center gap-2">
           <span class="inline-flex items-center gap-2">
            Auto refresh:
            <span class="group-has-checked:hidden">
             Off
            </span>
            <span class="hidden group-has-checked:inline">
             On
            </span>
           </span>
           <input checked="" class="kt-switch kt-switch-sm" name="check" type="checkbox" value="1"/>
          </label>
         </div>
        </div>
        <div class="kt-card-content">
         <div class="flex flex-col">
          <div class="flex items-start relative">
           <div class="w-9 start-0 top-9 absolute bottom-0 rtl:-translate-x-1/2 translate-x-1/2 border-s border-s-input">
           </div>
           <div class="flex items-center justify-center shrink-0 rounded-full bg-accent/60 border border-input size-9 text-secondary-foreground">
            <i class="ki-filled ki-share text-base">
            </i>
           </div>
           <div class="ps-2.5 mb-7 text-base grow">
            <div class="flex flex-col">
             <div class="text-sm text-foreground">
              I couldn't resist sharing a sneak peek of our
              <a class="text-sm kt-link" href="html/demo1/public-profile/profiles/blogger.html">
               upcoming content
              </a>
             </div>
             <span class="text-xs text-secondary-foreground">
              5 days ago, 4:07 PM
             </span>
            </div>
           </div>
          </div>
          <div class="flex items-start relative">
           <div class="w-9 start-0 top-9 absolute bottom-0 rtl:-translate-x-1/2 translate-x-1/2 border-s border-s-input">
           </div>
           <div class="flex items-center justify-center shrink-0 rounded-full bg-accent/60 border border-input size-9 text-secondary-foreground">
            <i class="ki-filled ki-coffee text-base">
            </i>
           </div>
           <div class="ps-2.5 mb-7 text-base grow">
            <div class="flex flex-col">
             <div class="text-sm text-mono">
              Reaching the milestone of
              <a class="text-sm font-medium kt-ink" href="html/demo1/public-profile/profiles/feeds.html">
               10,000 followers
              </a>
              on the blog was a dream come true
             </div>
             <span class="text-xs text-secondary-foreground">
              5 days ago, 4:07 PM
             </span>
            </div>
           </div>
          </div>
          <div class="flex items-start relative">
           <div class="w-9 start-0 top-9 absolute bottom-0 rtl:-translate-x-1/2 translate-x-1/2 border-s border-s-input">
           </div>
           <div class="flex items-center justify-center shrink-0 rounded-full bg-accent/60 border border-input size-9 text-secondary-foreground">
            <i class="ki-filled ki-design-1 text-base">
            </i>
           </div>
           <div class="ps-2.5 mb-7 text-base grow">
            <div class="flex flex-col">
             <div class="text-sm text-foreground">
              Onboarded a talented designer to our creative team, adding valuable expertise to upcoming projects.
             </div>
             <span class="text-xs text-secondary-foreground">
              2 weeks ago, 10:45 AM
             </span>
            </div>
           </div>
          </div>
          <div class="flex items-start relative">
           <div class="w-9 start-0 top-9 absolute bottom-0 rtl:-translate-x-1/2 translate-x-1/2 border-s border-s-input">
           </div>
           <div class="flex items-center justify-center shrink-0 rounded-full bg-accent/60 border border-input size-9 text-secondary-foreground">
            <i class="ki-filled ki-like-shapes text-base">
            </i>
           </div>
           <div class="ps-2.5 mb-7 text-base grow">
            <div class="flex flex-col">
             <div class="text-sm font-medium text-foreground">
              Hosted a virtual
              <a class="text-sm font-medium kt-link" href="html/demo1/public-profile/profiles/creator.html">
               team-building event
              </a>
              , fostering collaboration and strengthening bonds among team members.
             </div>
             <span class="text-xs font-medium text-muted-foreground">
              1 month ago, 13:56 PM
             </span>
            </div>
           </div>
          </div>
          <div class="flex items-start relative">
           <div class="flex items-center justify-center shrink-0 rounded-full bg-accent/60 border border-input size-9 text-secondary-foreground">
            <i class="ki-filled ki-cup text-base">
            </i>
           </div>
           <div class="ps-2.5 text-base grow">
            <div class="flex flex-col">
             <div class="text-sm text-foreground">
              We recently
              <a class="text-sm font-medium kt-link" href="html/demo1/public-profile/profiles/nft.html">
               celebrated
              </a>
              the blog's 1-year anniversary
             </div>
             <span class="text-xs text-secondary-foreground">
              3 months ago, 4:07 PM
             </span>
            </div>
           </div>
          </div>
         </div>
        </div>
        <div class="kt-card-footer justify-center">
         <a class="kt-link kt-link-underlined kt-link-dashed" href="#">
          All-time Activity
         </a>
        </div>
       </div>
       <div class="kt-card grow hidden" id="activity_2019">
        <div class="kt-card-header">
         <h3 class="kt-card-title">
          Activity
         </h3>
         <div class="flex items-center gap-2">
          <label class="group text-2sm font-medium inline-flex items-center gap-2">
           <span class="inline-flex items-center gap-2">
            Auto refresh:
            <span class="group-has-checked:hidden">
             Off
            </span>
            <span class="hidden group-has-checked:inline">
             On
            </span>
           </span>
           <input checked="" class="kt-switch kt-switch-sm" name="check" type="checkbox" value="1"/>
          </label>
         </div>
        </div>
        <div class="kt-card-content">
         <div class="flex flex-col">
          <div class="flex items-start relative">
           <div class="w-9 start-0 top-9 absolute bottom-0 rtl:-translate-x-1/2 translate-x-1/2 border-s border-s-input">
           </div>
           <div class="flex items-center justify-center shrink-0 rounded-full bg-accent/60 border border-input size-9 text-secondary-foreground">
            <i class="ki-filled ki-share text-base">
            </i>
           </div>
           <div class="ps-2.5 mb-7 text-base grow">
            <div class="flex flex-col">
             <div class="text-sm text-foreground">
              I couldn't resist sharing a sneak peek of our
              <a class="text-sm kt-link" href="html/demo1/public-profile/profiles/blogger.html">
               upcoming content
              </a>
             </div>
             <span class="text-xs text-secondary-foreground">
              5 days ago, 4:07 PM
             </span>
            </div>
           </div>
          </div>
          <div class="flex items-start relative">
           <div class="w-9 start-0 top-9 absolute bottom-0 rtl:-translate-x-1/2 translate-x-1/2 border-s border-s-input">
           </div>
           <div class="flex items-center justify-center shrink-0 rounded-full bg-accent/60 border border-input size-9 text-secondary-foreground">
            <i class="ki-filled ki-calendar-tick text-base">
            </i>
           </div>
           <div class="ps-2.5 mb-7 text-base grow">
            <div class="flex flex-col pb-2.5">
             <span class="text-sm text-foreground">
              Jenny attended a webinar on new product features.
             </span>
             <span class="text-xs text-secondary-foreground">
              3 days ago, 11:45 AM
             </span>
            </div>
            <div class="kt-card shadow-none p-4">
             <div class="flex flex-wrap gap-2.5">
              <i class="ki-filled ki-code text-lg text-violet-500">
              </i>
              <div class="flex flex-col gap-5 grow">
               <div class="flex flex-wrap items-center justify-between">
                <div class="flex flex-col gap-0.5">
                 <span class="text-base font-medium text-mono cursor-pointer hover:text-primary mb-px">
                  Leadership Development Series: Part 1
                 </span>
                 <span class="text-xs text-secondary-foreground">
                  The first installment of a leadership development series.
                 </span>
                </div>
                <a class="kt-link kt-link-underlined kt-link-dashed" href="html/demo1/account/members/teams.html">
                 View
                </a>
               </div>
               <div class="flex flex-wrap gap-7.5">
                <div class="flex items-center gap-1.5">
                 <span class="text-sm font-medium text-secondary-foreground">
                  Code:
                 </span>
                 <a class="text-sm text-primary" href="#">
                  #leaderdev-1
                 </a>
                </div>
                <div class="flex items-center gap-1.5">
                 <span class="text-sm text-secondary-foreground">
                  Progress:
                 </span>
                 <div class="kt-progress kt-progress-success min-w-[120px]">
                  <div class="kt-progress-indicator" style="width: 80%">
                  </div>
                 </div>
                </div>
                <div class="flex items-center gap-1.5 lg:min-w-24 shrink-0 max-w-auto">
                 <span class="text-sm text-secondary-foreground">
                  Guests:
                 </span>
                 <div class="flex -space-x-2">
                  <div class="flex">
                   <img class="hover:z-5 relative shrink-0 rounded-full ring-1 ring-background size-7" src="assets/media/avatars/300-4.png"/>
                  </div>
                  <div class="flex">
                   <img class="hover:z-5 relative shrink-0 rounded-full ring-1 ring-background size-7" src="assets/media/avatars/300-1.png"/>
                  </div>
                  <div class="flex">
                   <img class="hover:z-5 relative shrink-0 rounded-full ring-1 ring-background size-7" src="assets/media/avatars/300-2.png"/>
                  </div>
                  <div class="flex">
                   <span class="hover:z-5 relative inline-flex items-center justify-center shrink-0 rounded-full ring-1 font-semibold leading-none text-2xs size-7 text-primary-foreground ring-primary/10 bg-primary">
                    +24
                   </span>
                  </div>
                 </div>
                </div>
               </div>
              </div>
             </div>
            </div>
           </div>
          </div>
          <div class="flex items-start relative">
           <div class="w-9 start-0 top-9 absolute bottom-0 rtl:-translate-x-1/2 translate-x-1/2 border-s border-s-input">
           </div>
           <div class="flex items-center justify-center shrink-0 rounded-full bg-accent/60 border border-input size-9 text-secondary-foreground">
            <i class="ki-filled ki-coffee text-base">
            </i>
           </div>
           <div class="ps-2.5 mb-7 text-base grow">
            <div class="flex flex-col">
             <div class="text-sm text-mono">
              Reaching the milestone of
              <a class="text-sm font-medium kt-ink" href="html/demo1/public-profile/profiles/feeds.html">
               10,000 followers
              </a>
              on the blog was a dream come true
             </div>
             <span class="text-xs text-secondary-foreground">
              5 days ago, 4:07 PM
             </span>
            </div>
           </div>
          </div>
          <div class="flex items-start relative">
           <div class="w-9 start-0 top-9 absolute bottom-0 rtl:-translate-x-1/2 translate-x-1/2 border-s border-s-input">
           </div>
           <div class="flex items-center justify-center shrink-0 rounded-full bg-accent/60 border border-input size-9 text-secondary-foreground">
            <i class="ki-filled ki-design-1 text-base">
            </i>
           </div>
           <div class="ps-2.5 mb-7 text-base grow">
            <div class="flex flex-col">
             <div class="text-sm text-foreground">
              Onboarded a talented designer to our creative team, adding valuable expertise to upcoming projects.
             </div>
             <span class="text-xs text-secondary-foreground">
              2 weeks ago, 10:45 AM
             </span>
            </div>
           </div>
          </div>
          <div class="flex items-start relative">
           <div class="w-9 start-0 top-9 absolute bottom-0 rtl:-translate-x-1/2 translate-x-1/2 border-s border-s-input">
           </div>
           <div class="flex items-center justify-center shrink-0 rounded-full bg-accent/60 border border-input size-9 text-secondary-foreground">
            <i class="ki-filled ki-like-shapes text-base">
            </i>
           </div>
           <div class="ps-2.5 mb-7 text-base grow">
            <div class="flex flex-col">
             <div class="text-sm font-medium text-foreground">
              Hosted a virtual
              <a class="text-sm font-medium kt-link" href="html/demo1/public-profile/profiles/creator.html">
               team-building event
              </a>
              , fostering collaboration and strengthening bonds among team members.
             </div>
             <span class="text-xs font-medium text-muted-foreground">
              1 month ago, 13:56 PM
             </span>
            </div>
           </div>
          </div>
          <div class="flex items-start relative">
           <div class="flex items-center justify-center shrink-0 rounded-full bg-accent/60 border border-input size-9 text-secondary-foreground">
            <i class="ki-filled ki-cup text-base">
            </i>
           </div>
           <div class="ps-2.5 text-base grow">
            <div class="flex flex-col">
             <div class="text-sm text-foreground">
              We recently
              <a class="text-sm font-medium kt-link" href="html/demo1/public-profile/profiles/nft.html">
               celebrated
              </a>
              the blog's 1-year anniversary
             </div>
             <span class="text-xs text-secondary-foreground">
              3 months ago, 4:07 PM
             </span>
            </div>
           </div>
          </div>
         </div>
        </div>
        <div class="kt-card-footer justify-center">
         <a class="kt-link kt-link-underlined kt-link-dashed" href="#">
          All-time Activity
         </a>
        </div>
       </div>
       <div class="kt-card grow hidden" id="activity_2018">
        <div class="kt-card-header">
         <h3 class="kt-card-title">
          Activity
         </h3>
         <div class="flex items-center gap-2">
          <label class="group text-2sm font-medium inline-flex items-center gap-2">
           <span class="inline-flex items-center gap-2">
            Auto refresh:
            <span class="group-has-checked:hidden">
             Off
            </span>
            <span class="hidden group-has-checked:inline">
             On
            </span>
           </span>
           <input checked="" class="kt-switch kt-switch-sm" name="check" type="checkbox" value="1"/>
          </label>
         </div>
        </div>
        <div class="kt-card-content">
         <div class="flex flex-col">
          <div class="flex items-start relative">
           <div class="w-9 start-0 top-9 absolute bottom-0 rtl:-translate-x-1/2 translate-x-1/2 border-s border-s-input">
           </div>
           <div class="flex items-center justify-center shrink-0 rounded-full bg-accent/60 border border-input size-9 text-secondary-foreground">
            <i class="ki-filled ki-share text-base">
            </i>
           </div>
           <div class="ps-2.5 mb-7 text-base grow">
            <div class="flex flex-col">
             <div class="text-sm text-foreground">
              I couldn't resist sharing a sneak peek of our
              <a class="text-sm kt-link" href="html/demo1/public-profile/profiles/blogger.html">
               upcoming content
              </a>
             </div>
             <span class="text-xs text-secondary-foreground">
              5 days ago, 4:07 PM
             </span>
            </div>
           </div>
          </div>
          <div class="flex items-start relative">
           <div class="w-9 start-0 top-9 absolute bottom-0 rtl:-translate-x-1/2 translate-x-1/2 border-s border-s-input">
           </div>
           <div class="flex items-center justify-center shrink-0 rounded-full bg-accent/60 border border-input size-9 text-secondary-foreground">
            <i class="ki-filled ki-coffee text-base">
            </i>
           </div>
           <div class="ps-2.5 mb-7 text-base grow">
            <div class="flex flex-col">
             <div class="text-sm text-mono">
              Reaching the milestone of
              <a class="text-sm font-medium kt-ink" href="html/demo1/public-profile/profiles/feeds.html">
               10,000 followers
              </a>
              on the blog was a dream come true
             </div>
             <span class="text-xs text-secondary-foreground">
              5 days ago, 4:07 PM
             </span>
            </div>
           </div>
          </div>
          <div class="flex items-start relative">
           <div class="w-9 start-0 top-9 absolute bottom-0 rtl:-translate-x-1/2 translate-x-1/2 border-s border-s-input">
           </div>
           <div class="flex items-center justify-center shrink-0 rounded-full bg-accent/60 border border-input size-9 text-secondary-foreground">
            <i class="ki-filled ki-directbox-default text-base">
            </i>
           </div>
           <div class="ps-2.5 mb-7 text-base grow">
            <div class="flex flex-col pb-2.5">
             <span class="text-sm text-foreground">
              Attending the virtual blogging conference was an enriching experience
             </span>
             <span class="text-xs text-secondary-foreground">
              2 days ago, 4:07 PM
             </span>
            </div>
            <div class="kt-card shadow-none">
             <div class="kt-card-content lg:py-4">
              <div class="flex justify-center py-4">
               <img alt="image" class="dark:hidden max-h-[160px]" src="assets/media/illustrations/3.svg">
                <img alt="image" class="light:hidden max-h-[160px]" src="assets/media/illustrations/3-dark.svg">
                </img>
               </img>
              </div>
              <div class="flex flex-col gap-1">
               <div class="text-base font-medium text-mono text-center">
                Blogging Conference
               </div>
               <div class="flex items-center justify-center gap-1">
                <a class="text-sm font-semibold link" href="html/demo1/public-profile/profiles/company.html">
                 Axio new release
                </a>
                <span class="text-sm text-secondary-foreground me-2">
                 email campaign
                </span>
                <span class="kt-badge kt-badge-sm kt-badge-success kt-badge-outline">
                 Public
                </span>
               </div>
              </div>
             </div>
            </div>
           </div>
          </div>
          <div class="flex items-start relative">
           <div class="w-9 start-0 top-9 absolute bottom-0 rtl:-translate-x-1/2 translate-x-1/2 border-s border-s-input">
           </div>
           <div class="flex items-center justify-center shrink-0 rounded-full bg-accent/60 border border-input size-9 text-secondary-foreground">
            <i class="ki-filled ki-design-1 text-base">
            </i>
           </div>
           <div class="ps-2.5 mb-7 text-base grow">
            <div class="flex flex-col">
             <div class="text-sm text-foreground">
              Onboarded a talented designer to our creative team, adding valuable expertise to upcoming projects.
             </div>
             <span class="text-xs text-secondary-foreground">
              2 weeks ago, 10:45 AM
             </span>
            </div>
           </div>
          </div>
          <div class="flex items-start relative">
           <div class="w-9 start-0 top-9 absolute bottom-0 rtl:-translate-x-1/2 translate-x-1/2 border-s border-s-input">
           </div>
           <div class="flex items-center justify-center shrink-0 rounded-full bg-accent/60 border border-input size-9 text-secondary-foreground">
            <i class="ki-filled ki-like-shapes text-base">
            </i>
           </div>
           <div class="ps-2.5 mb-7 text-base grow">
            <div class="flex flex-col">
             <div class="text-sm font-medium text-foreground">
              Hosted a virtual
              <a class="text-sm font-medium kt-link" href="html/demo1/public-profile/profiles/creator.html">
               team-building event
              </a>
              , fostering collaboration and strengthening bonds among team members.
             </div>
             <span class="text-xs font-medium text-muted-foreground">
              1 month ago, 13:56 PM
             </span>
            </div>
           </div>
          </div>
          <div class="flex items-start relative">
           <div class="flex items-center justify-center shrink-0 rounded-full bg-accent/60 border border-input size-9 text-secondary-foreground">
            <i class="ki-filled ki-cup text-base">
            </i>
           </div>
           <div class="ps-2.5 text-base grow">
            <div class="flex flex-col">
             <div class="text-sm text-foreground">
              We recently
              <a class="text-sm font-medium kt-link" href="html/demo1/public-profile/profiles/nft.html">
               celebrated
              </a>
              the blog's 1-year anniversary
             </div>
             <span class="text-xs text-secondary-foreground">
              3 months ago, 4:07 PM
             </span>
            </div>
           </div>
          </div>
         </div>
        </div>
        <div class="kt-card-footer justify-center">
         <a class="kt-link kt-link-underlined kt-link-dashed" href="#">
          All-time Activity
         </a>
        </div>
       </div>
       <div class="kt-card grow hidden" id="activity_2017">
        <div class="kt-card-header">
         <h3 class="kt-card-title">
          Activity
         </h3>
         <div class="flex items-center gap-2">
          <label class="group text-2sm font-medium inline-flex items-center gap-2">
           <span class="inline-flex items-center gap-2">
            Auto refresh:
            <span class="group-has-checked:hidden">
             Off
            </span>
            <span class="hidden group-has-checked:inline">
             On
            </span>
           </span>
           <input checked="" class="kt-switch kt-switch-sm" name="check" type="checkbox" value="1"/>
          </label>
         </div>
        </div>
        <div class="kt-card-content">
         <div class="flex flex-col">
          <div class="flex items-start relative">
           <div class="w-9 start-0 top-9 absolute bottom-0 rtl:-translate-x-1/2 translate-x-1/2 border-s border-s-input">
           </div>
           <div class="flex items-center justify-center shrink-0 rounded-full bg-accent/60 border border-input size-9 text-secondary-foreground">
            <i class="ki-filled ki-share text-base">
            </i>
           </div>
           <div class="ps-2.5 mb-7 text-base grow">
            <div class="flex flex-col">
             <div class="text-sm text-foreground">
              I couldn't resist sharing a sneak peek of our
              <a class="text-sm kt-link" href="html/demo1/public-profile/profiles/blogger.html">
               upcoming content
              </a>
             </div>
             <span class="text-xs text-secondary-foreground">
              5 days ago, 4:07 PM
             </span>
            </div>
           </div>
          </div>
          <div class="flex items-start relative">
           <div class="w-9 start-0 top-9 absolute bottom-0 rtl:-translate-x-1/2 translate-x-1/2 border-s border-s-input">
           </div>
           <div class="flex items-center justify-center shrink-0 rounded-full bg-accent/60 border border-input size-9 text-secondary-foreground">
            <i class="ki-filled ki-coffee text-base">
            </i>
           </div>
           <div class="ps-2.5 mb-7 text-base grow">
            <div class="flex flex-col">
             <div class="text-sm text-mono">
              Reaching the milestone of
              <a class="text-sm font-medium kt-ink" href="html/demo1/public-profile/profiles/feeds.html">
               10,000 followers
              </a>
              on the blog was a dream come true
             </div>
             <span class="text-xs text-secondary-foreground">
              5 days ago, 4:07 PM
             </span>
            </div>
           </div>
          </div>
          <div class="flex items-start relative">
           <div class="w-9 start-0 top-9 absolute bottom-0 rtl:-translate-x-1/2 translate-x-1/2 border-s border-s-input">
           </div>
           <div class="flex items-center justify-center shrink-0 rounded-full bg-accent/60 border border-input size-9 text-secondary-foreground">
            <i class="ki-filled ki-design-1 text-base">
            </i>
           </div>
           <div class="ps-2.5 mb-7 text-base grow">
            <div class="flex flex-col">
             <div class="text-sm text-foreground">
              Onboarded a talented designer to our creative team, adding valuable expertise to upcoming projects.
             </div>
             <span class="text-xs text-secondary-foreground">
              2 weeks ago, 10:45 AM
             </span>
            </div>
           </div>
          </div>
          <div class="flex items-start relative">
           <div class="w-9 start-0 top-9 absolute bottom-0 rtl:-translate-x-1/2 translate-x-1/2 border-s border-s-input">
           </div>
           <div class="flex items-center justify-center shrink-0 rounded-full bg-accent/60 border border-input size-9 text-secondary-foreground">
            <i class="ki-filled ki-code text-base">
            </i>
           </div>
           <div class="ps-2.5 mb-7 text-base grow">
            <div class="grow">
             <div class="flex flex-col pb-2.5">
              <div class="text-sm text-foreground">
               A new team
               <a class="text-sm font-medium text-mono hover:text-primary" href="#">
                Market Mavericks
               </a>
               joined community
              </div>
              <span class="text-xs text-secondary-foreground">
               1 month ago, 11:45 AM
              </span>
             </div>
             <div class="kt-card shadow-none p-4">
              <div class="flex flex-wrap justify-between items-center gap-7">
               <div class="flex items-center gap-4">
                <div class="relative size-[50px] shrink-0">
                 <svg class="w-full h-full stroke-primary/10 fill-primary-soft" fill="none" height="48" viewbox="0 0 44 48" width="44" xmlns="http://www.w3.org/2000/svg">
                  <path d="M16 2.4641C19.7128 0.320509 24.2872 0.320508 28 2.4641L37.6506 8.0359C41.3634 10.1795 43.6506 14.141 43.6506
              18.4282V29.5718C43.6506 33.859 41.3634 37.8205 37.6506 39.9641L28 45.5359C24.2872 47.6795 19.7128 47.6795 16 45.5359L6.34937
              39.9641C2.63655 37.8205 0.349365 33.859 0.349365 29.5718V18.4282C0.349365 14.141 2.63655 10.1795 6.34937 8.0359L16 2.4641Z" fill="none">
                  </path>
                  <path d="M16.25 2.89711C19.8081 0.842838 24.1919 0.842837 27.75 2.89711L37.4006 8.46891C40.9587 10.5232 43.1506 14.3196 43.1506
              18.4282V29.5718C43.1506 33.6804 40.9587 37.4768 37.4006 39.5311L27.75 45.1029C24.1919 47.1572 19.8081 47.1572 16.25 45.1029L6.59937
              39.5311C3.04125 37.4768 0.849365 33.6803 0.849365 29.5718V18.4282C0.849365 14.3196 3.04125 10.5232 6.59937 8.46891L16.25 2.89711Z" stroke="none" stroke-opacity="1">
                  </path>
                 </svg>
                 <div class="absolute leading-none start-2/4 top-2/4 -translate-y-2/4 -translate-x-2/4 rtl:translate-x-2/4">
                  <i class="ki-filled ki-abstract-39 text-xl ps-px text-primary">
                  </i>
                 </div>
                </div>
                <div class="flex flex-col gap-1.5">
                 <a class="text-base font-medium hover:text-primary text-mono" href="#">
                  Market Mavericks
                 </a>
                 <p class="text-sm text-secondary-foreground">
                  Navigating markets with strategic solutions
                 </p>
                </div>
               </div>
               <div class="flex flex-wrap items-center gap-6 lg:gap-12">
                <div class="flex flex-col items-end gap-5">
                 <span class="text-xs text-secondary-foreground uppercase">
                  rating
                 </span>
                 <div class="kt-rating">
                  <div class="kt-rating-label checked">
                   <i class="kt-rating-on ki-solid ki-star text-base leading-none">
                   </i>
                   <i class="kt-rating-off ki-outline ki-star text-base leading-none">
                   </i>
                  </div>
                  <div class="kt-rating-label checked">
                   <i class="kt-rating-on ki-solid ki-star text-base leading-none">
                   </i>
                   <i class="kt-rating-off ki-outline ki-star text-base leading-none">
                   </i>
                  </div>
                  <div class="kt-rating-label checked">
                   <i class="kt-rating-on ki-solid ki-star text-base leading-none">
                   </i>
                   <i class="kt-rating-off ki-outline ki-star text-base leading-none">
                   </i>
                  </div>
                  <div class="kt-rating-label checked">
                   <i class="kt-rating-on ki-solid ki-star text-base leading-none">
                   </i>
                   <i class="kt-rating-off ki-outline ki-star text-base leading-none">
                   </i>
                  </div>
                  <div class="kt-rating-label indeterminate">
                   <i class="kt-rating-on ki-solid ki-star text-base leading-none" style="width: 50.0%">
                   </i>
                   <i class="kt-rating-off ki-outline ki-star text-base leading-none">
                   </i>
                  </div>
                 </div>
                </div>
                <div class="flex flex-col items-end gap-3 lg:min-w-24 shrink-0 max-w-auto">
                 <span class="text-xs text-secondary-foreground uppercase">
                  memebers
                 </span>
                 <div class="flex -space-x-2">
                  <div class="flex">
                   <img class="hover:z-5 relative shrink-0 rounded-full ring-1 ring-background size-7" src="assets/media/avatars/300-4.png"/>
                  </div>
                  <div class="flex">
                   <img class="hover:z-5 relative shrink-0 rounded-full ring-1 ring-background size-7" src="assets/media/avatars/300-1.png"/>
                  </div>
                  <div class="flex">
                   <img class="hover:z-5 relative shrink-0 rounded-full ring-1 ring-background size-7" src="assets/media/avatars/300-2.png"/>
                  </div>
                  <div class="flex">
                   <span class="hover:z-5 relative inline-flex items-center justify-center shrink-0 rounded-full ring-1 font-semibold leading-none text-2xs size-7 text-primary-foreground ring-background bg-primary">
                    S
                   </span>
                  </div>
                 </div>
                </div>
                <div class="grid justify-end min-w-20">
                 <a class="kt-btn kt-btn-sm kt-btn-primary">
                  <i class="ki-filled ki-people">
                  </i>
                  Join
                 </a>
                </div>
               </div>
              </div>
             </div>
            </div>
           </div>
          </div>
          <div class="flex items-start relative">
           <div class="w-9 start-0 top-9 absolute bottom-0 rtl:-translate-x-1/2 translate-x-1/2 border-s border-s-input">
           </div>
           <div class="flex items-center justify-center shrink-0 rounded-full bg-accent/60 border border-input size-9 text-secondary-foreground">
            <i class="ki-filled ki-like-shapes text-base">
            </i>
           </div>
           <div class="ps-2.5 mb-7 text-base grow">
            <div class="flex flex-col">
             <div class="text-sm font-medium text-foreground">
              Hosted a virtual
              <a class="text-sm font-medium kt-link" href="html/demo1/public-profile/profiles/creator.html">
               team-building event
              </a>
              , fostering collaboration and strengthening bonds among team members.
             </div>
             <span class="text-xs font-medium text-muted-foreground">
              1 month ago, 13:56 PM
             </span>
            </div>
           </div>
          </div>
          <div class="flex items-start relative">
           <div class="flex items-center justify-center shrink-0 rounded-full bg-accent/60 border border-input size-9 text-secondary-foreground">
            <i class="ki-filled ki-cup text-base">
            </i>
           </div>
           <div class="ps-2.5 text-base grow">
            <div class="flex flex-col">
             <div class="text-sm text-foreground">
              We recently
              <a class="text-sm font-medium kt-link" href="html/demo1/public-profile/profiles/nft.html">
               celebrated
              </a>
              the blog's 1-year anniversary
             </div>
             <span class="text-xs text-secondary-foreground">
              3 months ago, 4:07 PM
             </span>
            </div>
           </div>
          </div>
         </div>
        </div>
        <div class="kt-card-footer justify-center">
         <a class="kt-link kt-link-underlined kt-link-dashed" href="#">
          All-time Activity
         </a>
        </div>
       </div>
       <div class="flex flex-col gap-2.5" data-kt-tabs="true">
        <a class="kt-btn kt-btn-sm bg-transparent shadow-none text-secondary-foreground hover:text-primary kt-tab-active:bg-primary/10 kt-tab-active:text-primary active" data-kt-tab-toggle="#activity_2024" href="#">
         2024
        </a>
        <a class="kt-btn kt-btn-sm bg-transparent shadow-none text-secondary-foreground hover:text-primary kt-tab-active:bg-primary/10 kt-tab-active:text-primary" data-kt-tab-toggle="#activity_2023" href="#">
         2023
        </a>
        <a class="kt-btn kt-btn-sm bg-transparent shadow-none text-secondary-foreground hover:text-primary kt-tab-active:bg-primary/10 kt-tab-active:text-primary" data-kt-tab-toggle="#activity_2022" href="#">
         2022
        </a>
        <a class="kt-btn kt-btn-sm bg-transparent shadow-none text-secondary-foreground hover:text-primary kt-tab-active:bg-primary/10 kt-tab-active:text-primary" data-kt-tab-toggle="#activity_2021" href="#">
         2021
        </a>
        <a class="kt-btn kt-btn-sm bg-transparent shadow-none text-secondary-foreground hover:text-primary kt-tab-active:bg-primary/10 kt-tab-active:text-primary" data-kt-tab-toggle="#activity_2020" href="#">
         2020
        </a>
        <a class="kt-btn kt-btn-sm bg-transparent shadow-none text-secondary-foreground hover:text-primary kt-tab-active:bg-primary/10 kt-tab-active:text-primary" data-kt-tab-toggle="#activity_2019" href="#">
         2019
        </a>
        <a class="kt-btn kt-btn-sm bg-transparent shadow-none text-secondary-foreground hover:text-primary kt-tab-active:bg-primary/10 kt-tab-active:text-primary" data-kt-tab-toggle="#activity_2018" href="#">
         2018
        </a>
        <a class="kt-btn kt-btn-sm bg-transparent shadow-none text-secondary-foreground hover:text-primary kt-tab-active:bg-primary/10 kt-tab-active:text-primary" data-kt-tab-toggle="#activity_2017" href="#">
         2017
        </a>
       </div>
      </div>
      <!-- end: activity -->
     </div>
     <!-- End of Container -->
    </main>
</template>