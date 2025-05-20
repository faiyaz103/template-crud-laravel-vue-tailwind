<style scoped>
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
        <div class="flex items-center justify-center rounded-full border-2 border-green-200 dark:border-green-950 size-[100px] shrink-0 bg-background">
         <img class="size-[50px]" src="assets/media/brand-logos/duolingo.svg">
         </img>
        </div>
        <div class="flex items-center gap-1.5">
         <div class="text-lg leading-5 font-semibold text-mono">
          Duolingo
         </div>
         <svg class="text-primary" fill="none" height="16" viewbox="0 0 15 16" width="15" xmlns="http://www.w3.org/2000/svg">
          <path d="M14.5425 6.89749L13.5 5.83999C13.4273 5.76877 13.3699 5.6835 13.3312 5.58937C13.2925 5.49525 13.2734 5.39424 13.275 5.29249V3.79249C13.274 3.58699 13.2324 3.38371 13.1527 3.19432C13.0729 3.00494 12.9565 2.83318 12.8101 2.68892C12.6638 2.54466 12.4904 2.43073 12.2998 2.35369C12.1093 2.27665 11.9055 2.23801 11.7 2.23999H10.2C10.0982 2.24159 9.99722 2.22247 9.9031 2.18378C9.80898 2.1451 9.72371 2.08767 9.65249 2.01499L8.60249 0.957487C8.30998 0.665289 7.91344 0.50116 7.49999 0.50116C7.08654 0.50116 6.68999 0.665289 6.39749 0.957487L5.33999 1.99999C5.26876 2.07267 5.1835 2.1301 5.08937 2.16879C4.99525 2.20747 4.89424 2.22659 4.79249 2.22499H3.29249C3.08699 2.22597 2.88371 2.26754 2.69432 2.34731C2.50494 2.42709 2.33318 2.54349 2.18892 2.68985C2.04466 2.8362 1.93073 3.00961 1.85369 3.20013C1.77665 3.39064 1.73801 3.5945 1.73999 3.79999V5.29999C1.74159 5.40174 1.72247 5.50275 1.68378 5.59687C1.6451 5.691 1.58767 5.77627 1.51499 5.84749L0.457487 6.89749C0.165289 7.19 0.00115967 7.58654 0.00115967 7.99999C0.00115967 8.41344 0.165289 8.80998 0.457487 9.10249L1.49999 10.16C1.57267 10.2312 1.6301 10.3165 1.66878 10.4106C1.70747 10.5047 1.72659 10.6057 1.72499 10.7075V12.2075C1.72597 12.413 1.76754 12.6163 1.84731 12.8056C1.92709 12.995 2.04349 13.1668 2.18985 13.3111C2.3362 13.4553 2.50961 13.5692 2.70013 13.6463C2.89064 13.7233 3.0945 13.762 3.29999 13.76H4.79999C4.90174 13.7584 5.00275 13.7775 5.09687 13.8162C5.191 13.8549 5.27627 13.9123 5.34749 13.985L6.40499 15.0425C6.69749 15.3347 7.09404 15.4988 7.50749 15.4988C7.92094 15.4988 8.31748 15.3347 8.60999 15.0425L9.65999 14C9.73121 13.9273 9.81647 13.8699 9.9106 13.8312C10.0047 13.7925 10.1057 13.7734 10.2075 13.775H11.7075C12.1212 13.775 12.518 13.6106 12.8106 13.3181C13.1031 13.0255 13.2675 12.6287 13.2675 12.215V10.715C13.2659 10.6132 13.285 10.5122 13.3237 10.4181C13.3624 10.324 13.4198 10.2387 13.4925 10.1675L14.55 9.10999C14.6953 8.96452 14.8104 8.79176 14.8887 8.60164C14.9671 8.41152 15.007 8.20779 15.0063 8.00218C15.0056 7.79656 14.9643 7.59311 14.8847 7.40353C14.8051 7.21394 14.6888 7.04197 14.5425 6.89749ZM10.635 6.64999L6.95249 10.25C6.90055 10.3026 6.83864 10.3443 6.77038 10.3726C6.70212 10.4009 6.62889 10.4153 6.55499 10.415C6.48062 10.4139 6.40719 10.3982 6.33896 10.3685C6.27073 10.3389 6.20905 10.2961 6.15749 10.2425L4.37999 8.44249C4.32532 8.39044 4.28169 8.32793 4.25169 8.25867C4.22169 8.18941 4.20593 8.11482 4.20536 8.03934C4.20479 7.96387 4.21941 7.88905 4.24836 7.81934C4.27731 7.74964 4.31999 7.68647 4.37387 7.63361C4.42774 7.58074 4.4917 7.53926 4.56194 7.51163C4.63218 7.484 4.70726 7.47079 4.78271 7.47278C4.85816 7.47478 4.93244 7.49194 5.00112 7.52324C5.0698 7.55454 5.13148 7.59935 5.18249 7.65499L6.56249 9.05749L9.84749 5.84749C9.95296 5.74215 10.0959 5.68298 10.245 5.68298C10.394 5.68298 10.537 5.74215 10.6425 5.84749C10.6953 5.90034 10.737 5.96318 10.7653 6.03234C10.7935 6.1015 10.8077 6.1756 10.807 6.25031C10.8063 6.32502 10.7908 6.39884 10.7612 6.46746C10.7317 6.53608 10.6888 6.59813 10.635 6.64999Z" fill="currentColor">
          </path>
         </svg>
        </div>
        <div class="flex flex-wrap justify-center gap-1 lg:gap-4.5 text-sm">
         <div class="flex gap-1.25 items-center">
          <i class="ki-filled ki-abstract-41 text-muted-foreground text-sm">
          </i>
          <span class="text-secondary-foreground font-medium">
           Public Company
          </span>
         </div>
         <div class="flex gap-1.25 items-center">
          <i class="ki-filled ki-geolocation text-muted-foreground text-sm">
          </i>
          <span class="text-secondary-foreground font-medium">
           Pittsburgh, KS
          </span>
         </div>
         <div class="flex gap-1.25 items-center">
          <i class="ki-filled ki-sms text-muted-foreground text-sm">
          </i>
          <a class="text-secondary-foreground font-medium hover:text-primary" href="mailto: info@duolingo.com">
           info@duolingo.com
          </a>
         </div>
        </div>
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
          <div class="kt-menu-item border-b-2 border-b-transparent kt-menu-item-active:border-b-primary kt-menu-item-here:border-b-primary here" data-kt-menu-item-overflow="true" data-kt-menu-item-placement="bottom-start" data-kt-menu-item-placement-rtl="bottom-end" data-kt-menu-item-toggle="dropdown" data-kt-menu-item-trigger="click|lg:hover">
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
            <div class="kt-menu-item active">
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
          <div class="kt-menu-item border-b-2 border-b-transparent kt-menu-item-active:border-b-primary kt-menu-item-here:border-b-primary">
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
        <button class="kt-btn kt-btn-primary" data-kt-dropdown-toggle="true">
         <i class="ki-filled ki-users">
         </i>
         Follow
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
      <!-- begin: grid -->
      <div class="grid grid-cols-1 lg:grid-cols-3 gap-5 lg:gap-7.5">
       <div class="col-span-1 lg:col-span-3">
        <div class="kt-card">
         <div class="kt-card-content">
          <div class="flex lg:px-10 py-1.5 gap-2">
           <div class="grid grid-cols-1 place-content-center flex-1 gap-1 text-center">
            <span class="text-mono text-2xl lg:text-2xl leading-none font-semibold">
             624
            </span>
            <span class="text-secondary-foreground text-sm">
             Employees
            </span>
           </div>
           <span class="not-last:border-e border-e-input my-1">
           </span>
           <div class="grid grid-cols-1 place-content-center flex-1 gap-1 text-center">
            <span class="text-mono text-2xl lg:text-2xl leading-none font-semibold">
             60.7M
            </span>
            <span class="text-secondary-foreground text-sm">
             Users
            </span>
           </div>
           <span class="not-last:border-e border-e-input my-1">
           </span>
           <div class="grid grid-cols-1 place-content-center flex-1 gap-1 text-center">
            <span class="text-mono text-2xl lg:text-2xl leading-none font-semibold">
             369M
            </span>
            <span class="text-secondary-foreground text-sm">
             Revenue
            </span>
           </div>
           <span class="not-last:border-e border-e-input my-1">
           </span>
           <div class="grid grid-cols-1 place-content-center flex-1 gap-1 text-center">
            <span class="text-mono text-2xl lg:text-2xl leading-none font-semibold">
             27
            </span>
            <span class="text-secondary-foreground text-sm">
             Company Rank
            </span>
           </div>
           <span class="not-last:border-e border-e-input my-1">
           </span>
          </div>
         </div>
        </div>
       </div>
       <div class="col-span-1">
        <div class="flex flex-col gap-5 lg:gap-7.5">
         <div class="kt-card">
          <div class="kt-card-header">
           <h3 class="kt-card-title">
            Highlights
           </h3>
          </div>
          <div class="kt-card-content pt-3.5 pb-3.5">
           <table class="kt-table-auto">
            <tbody>
             <tr>
              <td class="text-sm text-secondary-foreground pb-3 pe-4 lg:pe-10">
               Locations:
              </td>
              <td class="text-sm ext-mono pb-3">
               79
              </td>
             </tr>
             <tr>
              <td class="text-sm text-secondary-foreground pb-3 pe-4 lg:pe-10">
               Founded:
              </td>
              <td class="text-sm ext-mono pb-3">
               2011
              </td>
             </tr>
             <tr>
              <td class="text-sm text-secondary-foreground pb-3 pe-4 lg:pe-10">
               Status:
              </td>
              <td class="text-sm ext-mono pb-3">
               <span class="kt-badge kt-badge-sm kt-badge-success kt-badge-outline">
                Subscribed
               </span>
              </td>
             </tr>
             <tr>
              <td class="text-sm text-secondary-foreground pb-3 pe-4 lg:pe-10">
               Area:
              </td>
              <td class="text-sm ext-mono pb-3">
               Worldwide
              </td>
             </tr>
             <tr>
              <td class="text-sm text-secondary-foreground pb-3 pe-4 lg:pe-10">
               CEO:
              </td>
              <td class="text-sm ext-mono pb-3">
               <a class="kt-link" href="#">
                Luis von Ahn
               </a>
              </td>
             </tr>
             <tr>
              <td class="text-sm text-secondary-foreground pb-3 pe-4 lg:pe-10">
               Sector:
              </td>
              <td class="text-sm ext-mono pb-3">
               Online Education
              </td>
             </tr>
            </tbody>
           </table>
          </div>
         </div>
         <div class="kt-card">
          <div class="kt-card-header">
           <h3 class="kt-card-title">
            Open Jobs
           </h3>
          </div>
          <div class="kt-card-content">
           <div class="grid gap-5">
            <div class="flex align-start gap-3.5">
             <div class="flex items-center justify-center w-[1.875rem] h-[1.875rem] bg-accent/60 rounded-lg border border-input">
              <i class="ki-filled ki-chart-line-star text-base text-secondary-foreground">
              </i>
             </div>
             <div class="flex flex-col justify-start gap-1">
              <a class="text-sm font-semibold leading-none kt-link" href="#">
               Data Science
              </a>
              <span class="text-sm font-medium text-mono">
               Data Science Ninja
              </span>
              <span class="text-xs text-secondary-foreground">
               $80,000 - $110,000
              </span>
             </div>
            </div>
            <div class="flex align-start gap-3.5">
             <div class="flex items-center justify-center w-[1.875rem] h-[1.875rem] bg-accent/60 rounded-lg border border-input">
              <i class="ki-filled ki-rocket text-base text-secondary-foreground">
              </i>
             </div>
             <div class="flex flex-col justify-start gap-1">
              <a class="text-sm font-semibold leading-none kt-link" href="#">
               Exploration
              </a>
              <span class="text-sm font-medium text-mono">
               Galactic Guide Writer
              </span>
              <span class="text-xs text-secondary-foreground">
               $45,000 - $60,000
              </span>
             </div>
            </div>
            <div class="flex align-start gap-3.5">
             <div class="flex items-center justify-center w-[1.875rem] h-[1.875rem] bg-accent/60 rounded-lg border border-input">
              <i class="ki-filled ki-milk text-base text-secondary-foreground">
              </i>
             </div>
             <div class="flex flex-col justify-start gap-1">
              <a class="text-sm font-semibold leading-none kt-link" href="#">
               Drinking Arts
              </a>
              <span class="text-sm font-medium text-mono">
               Taste
              </span>
              <span class="text-xs text-secondary-foreground">
               $40,000 - $55,000
              </span>
             </div>
            </div>
            <div class="flex align-start gap-3.5">
             <div class="flex items-center justify-center w-[1.875rem] h-[1.875rem] bg-accent/60 rounded-lg border border-input">
              <i class="ki-filled ki-abstract-44 text-base text-secondary-foreground">
              </i>
             </div>
             <div class="flex flex-col justify-start gap-1">
              <a class="text-sm font-semibold leading-none kt-link" href="#">
               Film Production
              </a>
              <span class="text-sm font-medium text-mono">
               Zombie Makeup Artist
              </span>
              <span class="text-xs text-secondary-foreground">
               $55,000 - $75,000
              </span>
             </div>
            </div>
           </div>
          </div>
          <div class="kt-card-footer justify-center">
           <a class="kt-link kt-link-underlined kt-link-dashed" href="html/demo1/public-profile/works.html">
            View & Apply
           </a>
          </div>
         </div>
         <div class="kt-card">
          <div class="kt-card-header">
           <h3 class="kt-card-title">
            Network
           </h3>
          </div>
          <div class="kt-card-content pt-4">
           <div class="grid gap-2.5 mb-1">
            <div class="flex items-center gap-2.5">
             <span class="">
              <i class="ki-filled ki-dribbble text-lg text-muted-foreground">
              </i>
             </span>
             <a class="text-mono hover:text-primary text-sm" href="#">
              https://duolingo.com
             </a>
            </div>
            <div class="flex items-center gap-2.5">
             <span class="">
              <i class="ki-filled ki-sms text-lg text-muted-foreground">
              </i>
             </span>
             <a class="text-mono hover:text-primary text-sm" href="#">
              info@duolingo.com
             </a>
            </div>
            <div class="flex items-center gap-2.5">
             <span class="">
              <i class="ki-filled ki-facebook text-lg text-muted-foreground">
              </i>
             </span>
             <a class="text-mono hover:text-primary text-sm" href="#">
              duolingo
             </a>
            </div>
            <div class="flex items-center gap-2.5">
             <span class="">
              <i class="ki-filled ki-twitter text-lg text-muted-foreground">
              </i>
             </span>
             <a class="text-mono hover:text-primary text-sm" href="#">
              duolingo-news
             </a>
            </div>
            <div class="flex items-center gap-2.5">
             <span class="">
              <i class="ki-filled ki-youtube text-lg text-muted-foreground">
              </i>
             </span>
             <a class="text-mono hover:text-primary text-sm" href="#">
              duolingo-tuts
             </a>
            </div>
           </div>
          </div>
         </div>
         <div class="kt-card">
          <div class="kt-card-header">
           <h3 class="kt-card-title">
            Tags
           </h3>
          </div>
          <div class="kt-card-content">
           <div class="flex flex-wrap gap-2.5 mb-2">
            <span class="kt-badge kt-badge-outline">
             Web Design
            </span>
            <span class="kt-badge kt-badge-outline">
             Code Review
            </span>
            <span class="kt-badge kt-badge-outline">
             Figma
            </span>
            <span class="kt-badge kt-badge-outline">
             Product Development
            </span>
            <span class="kt-badge kt-badge-outline">
             Webflow
            </span>
            <span class="kt-badge kt-badge-outline">
             AI
            </span>
            <span class="kt-badge kt-badge-outline">
             noCode
            </span>
            <span class="kt-badge kt-badge-outline">
             Management
            </span>
           </div>
          </div>
         </div>
        </div>
       </div>
       <div class="col-span-1 lg:col-span-2">
        <div class="flex flex-col gap-5 lg:gap-7.5">
         <div class="kt-card">
          <div class="kt-card-header">
           <h3 class="kt-card-title">
            Company Profle
           </h3>
          </div>
          <div class="kt-card-content">
           <h3 class="text-base font-semibold text-mono leading-none mb-5">
            Headquarter
           </h3>
           <div class="flex flex-wrap items-center gap-5 mb-10">
            <div class="rounded-xl w-full md:w-80 min-h-52" id="company_profile_map">
            </div>
            <div class="flex flex-col gap-2.5">
             <div class="flex items-center gap-2.5">
              <span class="">
               <i class="ki-filled ki-dribbble text-lg text-muted-foreground">
               </i>
              </span>
              <a class="link text-sm font-medium" href="#">
               https://duolingo.com
              </a>
             </div>
             <div class="flex items-center gap-2.5">
              <span class="">
               <i class="ki-filled ki-facebook text-lg text-muted-foreground">
               </i>
              </span>
              <a class="link text-sm font-medium" href="#">
               duolingo
              </a>
             </div>
             <div class="flex items-center gap-2.5">
              <span class="">
               <i class="ki-filled ki-youtube text-lg text-muted-foreground">
               </i>
              </span>
              <a class="link text-sm font-medium" href="#">
               duolingo-tuts
              </a>
             </div>
             <div class="flex items-center gap-2.5">
              <span class="">
               <i class="ki-filled ki-whatsapp text-lg text-muted-foreground">
               </i>
              </span>
              <span class="text-sm text-mono">
               (31) 6-1235-4567
              </span>
             </div>
             <div class="flex items-center gap-2.5">
              <span class="">
               <i class="ki-filled ki-map text-lg text-muted-foreground">
               </i>
              </span>
              <span class="text-sm text-mono">
               Herengracht 501, 1017 BV Amsterdam, NL
              </span>
             </div>
            </div>
           </div>
           <div class="grid gap-2.5 mb-7">
            <div class="text-base font-semibold text-mono">
             About
            </div>
            <p class="text-sm text-foreground leading-5.5">
             Now that I’m done thoroughly mangling that vague metaphor, let’s get down to business. 
        You know you need to start blogging to grow your business, but you don’t know how. In this post, 
        I’ll show you how to write a great blog post in five simple steps that people will actually want to read.
            </p>
           </div>
           <div class="flex flex-col gap-4 mb-2.5">
            <div class="text-base font-semibold text-mono">
             Products
            </div>
            <div class="flex flex-wrap gap-2.5">
             <span class="kt-badge kt-badge-secondary kt-badge-outline">
              Lingo Kids
             </span>
             <span class="kt-badge kt-badge-secondary kt-badge-outline">
              Lingo Express
             </span>
             <span class="kt-badge kt-badge-secondary kt-badge-outline">
              Fun Learning
             </span>
             <span class="kt-badge kt-badge-secondary kt-badge-outline">
              Lingo Espanol
             </span>
             <span class="kt-badge kt-badge-secondary kt-badge-outline">
              Speaking Mastery
             </span>
             <span class="kt-badge kt-badge-secondary kt-badge-outline">
              Grammar Guru
             </span>
             <span class="kt-badge kt-badge-secondary kt-badge-outline">
              Lingo Quest
             </span>
             <span class="kt-badge kt-badge-secondary kt-badge-outline">
              History Lessons
             </span>
             <span class="kt-badge kt-badge-secondary kt-badge-outline">
              Global Explorer
             </span>
             <span class="kt-badge kt-badge-secondary kt-badge-outline">
              Translator
             </span>
             <span class="kt-badge kt-badge-secondary kt-badge-outline">
              Webflow
             </span>
             <span class="kt-badge kt-badge-secondary kt-badge-outline">
              Language Lab
             </span>
             <span class="kt-badge kt-badge-secondary kt-badge-outline">
              Lingo Plus
             </span>
            </div>
           </div>
          </div>
         </div>
         <div class="kt-card">
          <div class="kt-card-header">
           <h3 class="kt-card-title">
            Locations
           </h3>
           <button class="kt-btn kt-btn-primary">
            <i class="ki-filled ki-geolocation">
            </i>
            Offer Location
           </button>
          </div>
          <div class="kt-card-content p-5 lg:p-7.5 lg:pb-7">
           <div class="flex gap-5 kt-scrollable-x">
            <div class="kt-card shadow-none w-[280px] border-0 mb-4">
             <img alt="" class="rounded-t-xl max-w-[280px] shrink-0" src="assets/media/images/600x400/10.jpg"/>
             <div class="kt-card-border kt-card-rounded-b px-3.5 h-full pt-3 pb-3.5">
              <a class="font-medium block text-mono hover:text-primary text-base mb-2" href="#">
               Duolingo Tech Hub
              </a>
              <p class="text-sm text-secondary-foreground">
               456 Innovation Street, Floor 6, Techland, New York 54321
              </p>
             </div>
            </div>
            <div class="kt-card shadow-none w-[280px] border-0 mb-4">
             <img alt="" class="rounded-t-xl max-w-[280px] shrink-0" src="assets/media/images/600x400/11.jpg"/>
             <div class="kt-card-border kt-card-rounded-b px-3.5 h-full pt-3 pb-3.5">
              <a class="font-medium block text-mono hover:text-primary text-base mb-2" href="#">
               Duolingo Language Lab
              </a>
              <p class="text-sm text-secondary-foreground">
               789 Learning Lane, 3rd Floor, Lingoville, Texas 98765
              </p>
             </div>
            </div>
            <div class="kt-card shadow-none w-[280px] border-0 mb-4">
             <img alt="" class="rounded-t-xl max-w-[280px] shrink-0" src="assets/media/images/600x400/12.jpg"/>
             <div class="kt-card-border kt-card-rounded-b px-3.5 h-full pt-3 pb-3.5">
              <a class="font-medium block text-mono hover:text-primary text-base mb-2" href="#">
               Duolingo Research Institute
              </a>
              <p class="text-sm text-secondary-foreground">
               246 Innovation Road, Research Wing, Innovacity, Arizona 13579
              </p>
             </div>
            </div>
            <div class="kt-card shadow-none w-[280px] border-0 mb-4">
             <img alt="" class="rounded-t-xl max-w-[280px] shrink-0" src="assets/media/images/600x400/7.jpg"/>
             <div class="kt-card-border kt-card-rounded-b px-3.5 h-full pt-3 pb-3.5">
              <a class="font-medium block text-mono hover:text-primary text-base mb-2" href="#">
               Duolingo Research Institute
              </a>
              <p class="text-sm text-secondary-foreground">
               246 Innovation Road, Research Wing, Innovacity, Arizona 13579
              </p>
             </div>
            </div>
            <div class="kt-card shadow-none w-[280px] border-0 mb-4">
             <img alt="" class="rounded-t-xl max-w-[280px] shrink-0" src="assets/media/images/600x400/8.jpg"/>
             <div class="kt-card-border kt-card-rounded-b px-3.5 h-full pt-3 pb-3.5">
              <a class="font-medium block text-mono hover:text-primary text-base mb-2" href="#">
               Duolingo Research Institute
              </a>
              <p class="text-sm text-secondary-foreground">
               246 Innovation Road, Research Wing, Innovacity, Arizona 13579
              </p>
             </div>
            </div>
           </div>
          </div>
         </div>
         <!-- Projects Table -->
         <div class="kt-card">
          <div class="kt-card-header">
           <h3 class="kt-card-title">
            Projects
           </h3>
           <div class="kt-menu" data-kt-menu="true">
            <div class="kt-menu-item" data-kt-menu-item-offset="0, 10px" data-kt-menu-item-placement="bottom-end" data-kt-menu-item-placement-rtl="bottom-start" data-kt-menu-item-toggle="dropdown" data-kt-menu-item-trigger="click">
             <button class="kt-menu-toggle kt-btn kt-btn-sm kt-btn-icon kt-btn-ghost">
              <i class="ki-filled ki-dots-vertical text-lg">
              </i>
             </button>
             <div class="kt-menu-dropdown kt-menu-default w-full max-w-[175px]" data-kt-menu-dismiss="true">
              <div class="kt-menu-item">
               <a class="kt-menu-link" href="html/demo1/account/home/settings-plain.html">
                <span class="kt-menu-icon">
                 <i class="ki-filled ki-add-files">
                 </i>
                </span>
                <span class="kt-menu-title">
                 Add
                </span>
               </a>
              </div>
              <div class="kt-menu-item">
               <a class="kt-menu-link" href="html/demo1/account/members/import-members.html">
                <span class="kt-menu-icon">
                 <i class="ki-filled ki-file-down">
                 </i>
                </span>
                <span class="kt-menu-title">
                 Import
                </span>
               </a>
              </div>
              <div class="kt-menu-item" data-kt-menu-item-offset="-15px, 0" data-kt-menu-item-placement="right-start" data-kt-menu-item-toggle="dropdown" data-kt-menu-item-trigger="click|lg:hover">
               <div class="kt-menu-link">
                <span class="kt-menu-icon">
                 <i class="ki-filled ki-file-up">
                 </i>
                </span>
                <span class="kt-menu-title">
                 Export
                </span>
                <span class="kt-menu-arrow">
                 <i class="ki-filled ki-right text-xs rtl:transform rtl:rotate-180">
                 </i>
                </span>
               </div>
               <div class="kt-menu-dropdown kt-menu-default w-full max-w-[125px]">
                <div class="kt-menu-item">
                 <a class="kt-menu-link" href="html/demo1/account/home/settings-sidebar.html">
                  <span class="kt-menu-title">
                   PDF
                  </span>
                 </a>
                </div>
                <div class="kt-menu-item">
                 <a class="kt-menu-link" href="html/demo1/account/home/settings-sidebar.html">
                  <span class="kt-menu-title">
                   CVS
                  </span>
                 </a>
                </div>
                <div class="kt-menu-item">
                 <a class="kt-menu-link" href="html/demo1/account/home/settings-sidebar.html">
                  <span class="kt-menu-title">
                   Excel
                  </span>
                 </a>
                </div>
               </div>
              </div>
              <div class="kt-menu-item">
               <a class="kt-menu-link" href="html/demo1/account/security/privacy-settings.html">
                <span class="kt-menu-icon">
                 <i class="ki-filled ki-setting-3">
                 </i>
                </span>
                <span class="kt-menu-title">
                 Settings
                </span>
               </a>
              </div>
             </div>
            </div>
           </div>
          </div>
          <div class="kt-card-table kt-scrollable-x-auto">
           <table class="kt-table table-fixed">
            <thead>
             <tr>
              <th class="text-start w-52">
               Project Name
              </th>
              <th class="w-56 text-end">
               Progress
              </th>
              <th class="w-36 text-end">
               People
              </th>
              <th class="w-36 text-end">
               Due Date
              </th>
              <th class="w-16">
              </th>
             </tr>
            </thead>
            <tbody>
             <tr>
              <td class="text-start">
               <a class="text-sm font-medium text-mono hover:text-primary" href="#">
                Acme software development
               </a>
              </td>
              <td>
               <div class="kt-progress kt-progress-primary h-[4px]">
                <div class="kt-progress-indicator" style="width: 60%">
                </div>
               </div>
              </td>
              <td>
               <div class="flex justify-end rtl:justify-start shrink-0">
                <div class="flex -space-x-2">
                 <div class="flex">
                  <img class="hover:z-5 relative shrink-0 rounded-full ring-1 ring-background size-6" src="assets/media/avatars/300-4.png"/>
                 </div>
                 <div class="flex">
                  <img class="hover:z-5 relative shrink-0 rounded-full ring-1 ring-background size-6" src="assets/media/avatars/300-1.png"/>
                 </div>
                 <div class="flex">
                  <img class="hover:z-5 relative shrink-0 rounded-full ring-1 ring-background size-6" src="assets/media/avatars/300-2.png"/>
                 </div>
                 <div class="flex">
                  <span class="relative inline-flex items-center justify-center shrink-0 rounded-full ring-1 font-semibold leading-none text-2xs size-6 text-white ring-background bg-green-500">
                   +3
                  </span>
                 </div>
                </div>
               </div>
              </td>
              <td class="text-sm font-medium text-secondary-foreground text-end">
               24 Aug, 2024
              </td>
              <td class="text-start">
               <div class="kt-menu" data-kt-menu="true">
                <div class="kt-menu-item" data-kt-menu-item-offset="0, 10px" data-kt-menu-item-placement="bottom-end" data-kt-menu-item-placement-rtl="bottom-start" data-kt-menu-item-toggle="dropdown" data-kt-menu-item-trigger="click">
                 <button class="kt-menu-toggle kt-btn kt-btn-sm kt-btn-icon kt-btn-ghost">
                  <i class="ki-filled ki-dots-vertical text-lg">
                  </i>
                 </button>
                 <div class="kt-menu-dropdown kt-menu-default w-full max-w-[175px]" data-kt-menu-dismiss="true">
                  <div class="kt-menu-item">
                   <a class="kt-menu-link" href="#">
                    <span class="kt-menu-icon">
                     <i class="ki-filled ki-search-list">
                     </i>
                    </span>
                    <span class="kt-menu-title">
                     View
                    </span>
                   </a>
                  </div>
                  <div class="kt-menu-item">
                   <a class="kt-menu-link" href="#">
                    <span class="kt-menu-icon">
                     <i class="ki-filled ki-file-up">
                     </i>
                    </span>
                    <span class="kt-menu-title">
                     Export
                    </span>
                   </a>
                  </div>
                  <div class="kt-menu-separator">
                  </div>
                  <div class="kt-menu-item">
                   <a class="kt-menu-link" href="#">
                    <span class="kt-menu-icon">
                     <i class="ki-filled ki-pencil">
                     </i>
                    </span>
                    <span class="kt-menu-title">
                     Edit
                    </span>
                   </a>
                  </div>
                  <div class="kt-menu-item">
                   <a class="kt-menu-link" href="#">
                    <span class="kt-menu-icon">
                     <i class="ki-filled ki-copy">
                     </i>
                    </span>
                    <span class="kt-menu-title">
                     Make a copy
                    </span>
                   </a>
                  </div>
                  <div class="kt-menu-separator">
                  </div>
                  <div class="kt-menu-item">
                   <a class="kt-menu-link" href="#">
                    <span class="kt-menu-icon">
                     <i class="ki-filled ki-trash">
                     </i>
                    </span>
                    <span class="kt-menu-title">
                     Remove
                    </span>
                   </a>
                  </div>
                 </div>
                </div>
               </div>
              </td>
             </tr>
             <tr>
              <td class="text-start">
               <a class="text-sm font-medium text-mono hover:text-primary" href="#">
                Strategic Partnership Deal
               </a>
              </td>
              <td>
               <div class="kt-progress h-[4px]">
                <div class="kt-progress-indicator" style="width: 100%">
                </div>
               </div>
              </td>
              <td>
               <div class="flex justify-end rtl:justify-start shrink-0">
                <div class="flex -space-x-2">
                 <div class="flex">
                  <img class="hover:z-5 relative shrink-0 rounded-full ring-1 ring-background size-6" src="assets/media/avatars/300-1.png"/>
                 </div>
                 <div class="flex">
                  <img class="hover:z-5 relative shrink-0 rounded-full ring-1 ring-background size-6" src="assets/media/avatars/300-2.png"/>
                 </div>
                 <div class="flex">
                  <span class="hover:z-5 relative inline-flex items-center justify-center shrink-0 rounded-full ring-1 font-semibold leading-none text-2xs size-6 text-white ring-background bg-destructive">
                   M
                  </span>
                 </div>
                </div>
               </div>
              </td>
              <td class="text-sm font-medium text-secondary-foreground text-end">
               10 Sep, 2024
              </td>
              <td class="text-start">
               <div class="kt-menu" data-kt-menu="true">
                <div class="kt-menu-item" data-kt-menu-item-offset="0, 10px" data-kt-menu-item-placement="bottom-end" data-kt-menu-item-placement-rtl="bottom-start" data-kt-menu-item-toggle="dropdown" data-kt-menu-item-trigger="click">
                 <button class="kt-menu-toggle kt-btn kt-btn-sm kt-btn-icon kt-btn-ghost">
                  <i class="ki-filled ki-dots-vertical text-lg">
                  </i>
                 </button>
                 <div class="kt-menu-dropdown kt-menu-default w-full max-w-[175px]" data-kt-menu-dismiss="true">
                  <div class="kt-menu-item">
                   <a class="kt-menu-link" href="#">
                    <span class="kt-menu-icon">
                     <i class="ki-filled ki-search-list">
                     </i>
                    </span>
                    <span class="kt-menu-title">
                     View
                    </span>
                   </a>
                  </div>
                  <div class="kt-menu-item">
                   <a class="kt-menu-link" href="#">
                    <span class="kt-menu-icon">
                     <i class="ki-filled ki-file-up">
                     </i>
                    </span>
                    <span class="kt-menu-title">
                     Export
                    </span>
                   </a>
                  </div>
                  <div class="kt-menu-separator">
                  </div>
                  <div class="kt-menu-item">
                   <a class="kt-menu-link" href="#">
                    <span class="kt-menu-icon">
                     <i class="ki-filled ki-pencil">
                     </i>
                    </span>
                    <span class="kt-menu-title">
                     Edit
                    </span>
                   </a>
                  </div>
                  <div class="kt-menu-item">
                   <a class="kt-menu-link" href="#">
                    <span class="kt-menu-icon">
                     <i class="ki-filled ki-copy">
                     </i>
                    </span>
                    <span class="kt-menu-title">
                     Make a copy
                    </span>
                   </a>
                  </div>
                  <div class="kt-menu-separator">
                  </div>
                  <div class="kt-menu-item">
                   <a class="kt-menu-link" href="#">
                    <span class="kt-menu-icon">
                     <i class="ki-filled ki-trash">
                     </i>
                    </span>
                    <span class="kt-menu-title">
                     Remove
                    </span>
                   </a>
                  </div>
                 </div>
                </div>
               </div>
              </td>
             </tr>
             <tr>
              <td class="text-start">
               <a class="text-sm font-medium text-mono hover:text-primary" href="#">
                Client Onboarding
               </a>
              </td>
              <td>
               <div class="kt-progress kt-progress-primary h-[4px]">
                <div class="kt-progress-indicator" style="width: 20%">
                </div>
               </div>
              </td>
              <td>
               <div class="flex justify-end rtl:justify-start shrink-0">
                <div class="flex -space-x-2">
                 <div class="flex">
                  <img class="hover:z-5 relative shrink-0 rounded-full ring-1 ring-background size-6" src="assets/media/avatars/300-20.png"/>
                 </div>
                 <div class="flex">
                  <img class="hover:z-5 relative shrink-0 rounded-full ring-1 ring-background size-6" src="assets/media/avatars/300-7.png"/>
                 </div>
                </div>
               </div>
              </td>
              <td class="text-sm font-medium text-secondary-foreground text-end">
               19 Sep, 2024
              </td>
              <td class="text-start">
               <div class="kt-menu" data-kt-menu="true">
                <div class="kt-menu-item" data-kt-menu-item-offset="0, 10px" data-kt-menu-item-placement="bottom-end" data-kt-menu-item-placement-rtl="bottom-start" data-kt-menu-item-toggle="dropdown" data-kt-menu-item-trigger="click">
                 <button class="kt-menu-toggle kt-btn kt-btn-sm kt-btn-icon kt-btn-ghost">
                  <i class="ki-filled ki-dots-vertical text-lg">
                  </i>
                 </button>
                 <div class="kt-menu-dropdown kt-menu-default w-full max-w-[175px]" data-kt-menu-dismiss="true">
                  <div class="kt-menu-item">
                   <a class="kt-menu-link" href="#">
                    <span class="kt-menu-icon">
                     <i class="ki-filled ki-search-list">
                     </i>
                    </span>
                    <span class="kt-menu-title">
                     View
                    </span>
                   </a>
                  </div>
                  <div class="kt-menu-item">
                   <a class="kt-menu-link" href="#">
                    <span class="kt-menu-icon">
                     <i class="ki-filled ki-file-up">
                     </i>
                    </span>
                    <span class="kt-menu-title">
                     Export
                    </span>
                   </a>
                  </div>
                  <div class="kt-menu-separator">
                  </div>
                  <div class="kt-menu-item">
                   <a class="kt-menu-link" href="#">
                    <span class="kt-menu-icon">
                     <i class="ki-filled ki-pencil">
                     </i>
                    </span>
                    <span class="kt-menu-title">
                     Edit
                    </span>
                   </a>
                  </div>
                  <div class="kt-menu-item">
                   <a class="kt-menu-link" href="#">
                    <span class="kt-menu-icon">
                     <i class="ki-filled ki-copy">
                     </i>
                    </span>
                    <span class="kt-menu-title">
                     Make a copy
                    </span>
                   </a>
                  </div>
                  <div class="kt-menu-separator">
                  </div>
                  <div class="kt-menu-item">
                   <a class="kt-menu-link" href="#">
                    <span class="kt-menu-icon">
                     <i class="ki-filled ki-trash">
                     </i>
                    </span>
                    <span class="kt-menu-title">
                     Remove
                    </span>
                   </a>
                  </div>
                 </div>
                </div>
               </div>
              </td>
             </tr>
             <tr>
              <td class="text-start">
               <a class="text-sm font-medium text-mono hover:text-primary" href="#">
                Widget Supply Agreement
               </a>
              </td>
              <td>
               <div class="kt-progress kt-progress-success h-[4px]">
                <div class="kt-progress-indicator" style="width: 100%">
                </div>
               </div>
              </td>
              <td>
               <div class="flex justify-end rtl:justify-start shrink-0">
                <div class="flex -space-x-2">
                 <div class="flex">
                  <img class="hover:z-5 relative shrink-0 rounded-full ring-1 ring-background size-6" src="assets/media/avatars/300-6.png"/>
                 </div>
                 <div class="flex">
                  <img class="hover:z-5 relative shrink-0 rounded-full ring-1 ring-background size-6" src="assets/media/avatars/300-23.png"/>
                 </div>
                 <div class="flex">
                  <img class="hover:z-5 relative shrink-0 rounded-full ring-1 ring-background size-6" src="assets/media/avatars/300-12.png"/>
                 </div>
                 <div class="flex">
                  <span class="relative inline-flex items-center justify-center shrink-0 rounded-full ring-1 font-semibold leading-none text-2xs size-6 text-primary-foreground ring-background bg-primary">
                   +1
                  </span>
                 </div>
                </div>
               </div>
              </td>
              <td class="text-sm font-medium text-secondary-foreground text-end">
               5 May, 2024
              </td>
              <td class="text-start">
               <div class="kt-menu" data-kt-menu="true">
                <div class="kt-menu-item" data-kt-menu-item-offset="0, 10px" data-kt-menu-item-placement="bottom-end" data-kt-menu-item-placement-rtl="bottom-start" data-kt-menu-item-toggle="dropdown" data-kt-menu-item-trigger="click">
                 <button class="kt-menu-toggle kt-btn kt-btn-sm kt-btn-icon kt-btn-ghost">
                  <i class="ki-filled ki-dots-vertical text-lg">
                  </i>
                 </button>
                 <div class="kt-menu-dropdown kt-menu-default w-full max-w-[175px]" data-kt-menu-dismiss="true">
                  <div class="kt-menu-item">
                   <a class="kt-menu-link" href="#">
                    <span class="kt-menu-icon">
                     <i class="ki-filled ki-search-list">
                     </i>
                    </span>
                    <span class="kt-menu-title">
                     View
                    </span>
                   </a>
                  </div>
                  <div class="kt-menu-item">
                   <a class="kt-menu-link" href="#">
                    <span class="kt-menu-icon">
                     <i class="ki-filled ki-file-up">
                     </i>
                    </span>
                    <span class="kt-menu-title">
                     Export
                    </span>
                   </a>
                  </div>
                  <div class="kt-menu-separator">
                  </div>
                  <div class="kt-menu-item">
                   <a class="kt-menu-link" href="#">
                    <span class="kt-menu-icon">
                     <i class="ki-filled ki-pencil">
                     </i>
                    </span>
                    <span class="kt-menu-title">
                     Edit
                    </span>
                   </a>
                  </div>
                  <div class="kt-menu-item">
                   <a class="kt-menu-link" href="#">
                    <span class="kt-menu-icon">
                     <i class="ki-filled ki-copy">
                     </i>
                    </span>
                    <span class="kt-menu-title">
                     Make a copy
                    </span>
                   </a>
                  </div>
                  <div class="kt-menu-separator">
                  </div>
                  <div class="kt-menu-item">
                   <a class="kt-menu-link" href="#">
                    <span class="kt-menu-icon">
                     <i class="ki-filled ki-trash">
                     </i>
                    </span>
                    <span class="kt-menu-title">
                     Remove
                    </span>
                   </a>
                  </div>
                 </div>
                </div>
               </div>
              </td>
             </tr>
             <tr>
              <td class="text-start">
               <a class="text-sm font-medium text-mono hover:text-primary" href="#">
                Project X Redesign
               </a>
              </td>
              <td>
               <div class="kt-progress kt-progress-primary h-[4px]">
                <div class="kt-progress-indicator" style="width: 80%">
                </div>
               </div>
              </td>
              <td>
               <div class="flex justify-end rtl:justify-start shrink-0">
                <div class="flex -space-x-2">
                 <div class="flex">
                  <img class="hover:z-5 relative shrink-0 rounded-full ring-1 ring-background size-6" src="assets/media/avatars/300-2.png"/>
                 </div>
                 <div class="flex">
                  <img class="hover:z-5 relative shrink-0 rounded-full ring-1 ring-background size-6" src="assets/media/avatars/300-15.png"/>
                 </div>
                 <div class="flex">
                  <img class="hover:z-5 relative shrink-0 rounded-full ring-1 ring-background size-6" src="assets/media/avatars/300-18.png"/>
                 </div>
                 <div class="flex">
                  <span class="relative inline-flex items-center justify-center shrink-0 rounded-full ring-1 font-semibold leading-none text-2xs size-6 text-white ring-background bg-green-500">
                   +2
                  </span>
                 </div>
                </div>
               </div>
              </td>
              <td class="text-sm font-medium text-secondary-foreground text-end">
               1 Feb, 2025
              </td>
              <td class="text-start">
               <div class="kt-menu" data-kt-menu="true">
                <div class="kt-menu-item" data-kt-menu-item-offset="0, 10px" data-kt-menu-item-placement="bottom-end" data-kt-menu-item-placement-rtl="bottom-start" data-kt-menu-item-toggle="dropdown" data-kt-menu-item-trigger="click">
                 <button class="kt-menu-toggle kt-btn kt-btn-sm kt-btn-icon kt-btn-ghost">
                  <i class="ki-filled ki-dots-vertical text-lg">
                  </i>
                 </button>
                 <div class="kt-menu-dropdown kt-menu-default w-full max-w-[175px]" data-kt-menu-dismiss="true">
                  <div class="kt-menu-item">
                   <a class="kt-menu-link" href="#">
                    <span class="kt-menu-icon">
                     <i class="ki-filled ki-search-list">
                     </i>
                    </span>
                    <span class="kt-menu-title">
                     View
                    </span>
                   </a>
                  </div>
                  <div class="kt-menu-item">
                   <a class="kt-menu-link" href="#">
                    <span class="kt-menu-icon">
                     <i class="ki-filled ki-file-up">
                     </i>
                    </span>
                    <span class="kt-menu-title">
                     Export
                    </span>
                   </a>
                  </div>
                  <div class="kt-menu-separator">
                  </div>
                  <div class="kt-menu-item">
                   <a class="kt-menu-link" href="#">
                    <span class="kt-menu-icon">
                     <i class="ki-filled ki-pencil">
                     </i>
                    </span>
                    <span class="kt-menu-title">
                     Edit
                    </span>
                   </a>
                  </div>
                  <div class="kt-menu-item">
                   <a class="kt-menu-link" href="#">
                    <span class="kt-menu-icon">
                     <i class="ki-filled ki-copy">
                     </i>
                    </span>
                    <span class="kt-menu-title">
                     Make a copy
                    </span>
                   </a>
                  </div>
                  <div class="kt-menu-separator">
                  </div>
                  <div class="kt-menu-item">
                   <a class="kt-menu-link" href="#">
                    <span class="kt-menu-icon">
                     <i class="ki-filled ki-trash">
                     </i>
                    </span>
                    <span class="kt-menu-title">
                     Remove
                    </span>
                   </a>
                  </div>
                 </div>
                </div>
               </div>
              </td>
             </tr>
            </tbody>
           </table>
          </div>
          <div class="kt-card-footer justify-center">
           <a class="kt-link kt-link-underlined kt-link-dashed" href="html/demo1/public-profile/projects/3-columns.html">
            All Projects
           </a>
          </div>
         </div>
         <!-- End of Projects Table -->
         <div class="grid grid-cols-1 xl:grid-cols-2 gap-5 lg:gap-7.5">
          <div class="kt-card">
           <div class="kt-card-header gap-2">
            <h3 class="kt-card-title">
             Members
            </h3>
            <div class="kt-menu" data-kt-menu="true">
             <div class="kt-menu-item" data-kt-menu-item-offset="0, 10px" data-kt-menu-item-placement="bottom-end" data-kt-menu-item-placement-rtl="bottom-start" data-kt-menu-item-toggle="dropdown" data-kt-menu-item-trigger="click">
              <button class="kt-menu-toggle kt-btn kt-btn-sm kt-btn-icon kt-btn-ghost">
               <i class="ki-filled ki-dots-vertical text-lg">
               </i>
              </button>
              <div class="kt-menu-dropdown kt-menu-default w-full max-w-[200px]" data-kt-menu-dismiss="true">
               <div class="kt-menu-item">
                <a class="kt-menu-link" href="html/demo1/account/activity.html">
                 <span class="kt-menu-icon">
                  <i class="ki-filled ki-cloud-change">
                  </i>
                 </span>
                 <span class="kt-menu-title">
                  Activity
                 </span>
                </a>
               </div>
               <div class="kt-menu-item">
                <a class="kt-menu-link" data-kt-modal-toggle="#share_profile_modal" href="#">
                 <span class="kt-menu-icon">
                  <i class="ki-filled ki-share">
                  </i>
                 </span>
                 <span class="kt-menu-title">
                  Share
                 </span>
                </a>
               </div>
               <div class="kt-menu-item" data-kt-menu-item-offset="-15px, 0" data-kt-menu-item-placement="right-start" data-kt-menu-item-toggle="dropdown" data-kt-menu-item-trigger="click|lg:hover">
                <div class="kt-menu-link">
                 <span class="kt-menu-icon">
                  <i class="ki-filled ki-notification-status">
                  </i>
                 </span>
                 <span class="kt-menu-title">
                  Notifications
                 </span>
                 <span class="kt-menu-arrow">
                  <i class="ki-filled ki-right text-xs rtl:transform rtl:rotate-180">
                  </i>
                 </span>
                </div>
                <div class="kt-menu-dropdown kt-menu-default w-full max-w-[175px]">
                 <div class="kt-menu-item">
                  <a class="kt-menu-link" href="html/demo1/account/home/settings-sidebar.html">
                   <span class="kt-menu-icon">
                    <i class="ki-filled ki-sms">
                    </i>
                   </span>
                   <span class="kt-menu-title">
                    Email
                   </span>
                  </a>
                 </div>
                 <div class="kt-menu-item">
                  <a class="kt-menu-link" href="html/demo1/account/home/settings-sidebar.html">
                   <span class="kt-menu-icon">
                    <i class="ki-filled ki-message-notify">
                    </i>
                   </span>
                   <span class="kt-menu-title">
                    SMS
                   </span>
                  </a>
                 </div>
                 <div class="kt-menu-item">
                  <a class="kt-menu-link" href="html/demo1/account/home/settings-sidebar.html">
                   <span class="kt-menu-icon">
                    <i class="ki-filled ki-notification-status">
                    </i>
                   </span>
                   <span class="kt-menu-title">
                    Push
                   </span>
                  </a>
                 </div>
                </div>
               </div>
               <div class="kt-menu-item">
                <a class="kt-menu-link" data-kt-modal-toggle="#report_user_modal" href="#">
                 <span class="kt-menu-icon">
                  <i class="ki-filled ki-dislike">
                  </i>
                 </span>
                 <span class="kt-menu-title">
                  Report
                 </span>
                </a>
               </div>
               <div class="kt-menu-separator">
               </div>
               <div class="kt-menu-item">
                <a class="kt-menu-link" href="html/demo1/account/home/settings-enterprise.html">
                 <span class="kt-menu-icon">
                  <i class="ki-filled ki-setting-3">
                  </i>
                 </span>
                 <span class="kt-menu-title">
                  Settings
                 </span>
                </a>
               </div>
              </div>
             </div>
            </div>
           </div>
           <div class="kt-card-content">
            <div class="flex flex-col gap-2 lg:gap-5">
             <div class="flex items-center gap-2">
              <div class="flex items-center grow gap-2.5">
               <img alt="" class="rounded-full size-9 shrink-0" src="assets/media/avatars/300-3.png">
                <div class="flex flex-col">
                 <a class="text-sm font-medium text-mono hover:text-primary mb-px" href="#">
                  Tyler Hero
                 </a>
                 <span class="text-xs text-secondary-foreground">
                  6 connections
                 </span>
                </div>
               </img>
              </div>
              <button class="kt-btn kt-btn-sm kt-btn-icon kt-btn-primary kt-btn-outline rounded-full">
               <i class="ki-filled ki-plus">
               </i>
              </button>
             </div>
             <div class="flex items-center gap-2">
              <div class="flex items-center grow gap-2.5">
               <img alt="" class="rounded-full size-9 shrink-0" src="assets/media/avatars/300-1.png">
                <div class="flex flex-col">
                 <a class="text-sm font-medium text-mono hover:text-primary mb-px" href="#">
                  Esther Howard
                 </a>
                 <span class="text-xs text-secondary-foreground">
                  29 connections
                 </span>
                </div>
               </img>
              </div>
              <button class="kt-btn kt-btn-sm kt-btn-icon kt-btn-primary kt-btn-outline rounded-full active">
               <i class="ki-filled ki-check">
               </i>
              </button>
             </div>
             <div class="flex items-center gap-2">
              <div class="flex items-center grow gap-2.5">
               <img alt="" class="rounded-full size-9 shrink-0" src="assets/media/avatars/300-14.png">
                <div class="flex flex-col">
                 <a class="text-sm font-medium text-mono hover:text-primary mb-px" href="#">
                  Cody Fisher
                 </a>
                 <span class="text-xs text-secondary-foreground">
                  34 connections
                 </span>
                </div>
               </img>
              </div>
              <button class="kt-btn kt-btn-sm kt-btn-icon kt-btn-primary kt-btn-outline rounded-full">
               <i class="ki-filled ki-plus">
               </i>
              </button>
             </div>
             <div class="flex items-center gap-2">
              <div class="flex items-center grow gap-2.5">
               <img alt="" class="rounded-full size-9 shrink-0" src="assets/media/avatars/300-7.png">
                <div class="flex flex-col">
                 <a class="text-sm font-medium text-mono hover:text-primary mb-px" href="#">
                  Arlene McCoy
                 </a>
                 <span class="text-xs text-secondary-foreground">
                  1 connections
                 </span>
                </div>
               </img>
              </div>
              <button class="kt-btn kt-btn-sm kt-btn-icon kt-btn-primary kt-btn-outline rounded-full active">
               <i class="ki-filled ki-check">
               </i>
              </button>
             </div>
            </div>
           </div>
           <div class="kt-card-footer justify-center">
            <a class="kt-link kt-link-underlined kt-link-dashed" href="html/demo1/public-profile/network.html">
             All Contributors
            </a>
           </div>
          </div>
          <div class="kt-card">
           <div class="kt-card-header">
            <h3 class="kt-card-title">
             Investments
            </h3>
            <div class="kt-menu" data-kt-menu="true">
             <div class="kt-menu-item" data-kt-menu-item-offset="0, 10px" data-kt-menu-item-placement="bottom-end" data-kt-menu-item-placement-rtl="bottom-start" data-kt-menu-item-toggle="dropdown" data-kt-menu-item-trigger="click">
              <button class="kt-menu-toggle kt-btn kt-btn-sm kt-btn-icon kt-btn-ghost">
               <i class="ki-filled ki-dots-vertical text-lg">
               </i>
              </button>
              <div class="kt-menu-dropdown kt-menu-default w-full max-w-[200px]" data-kt-menu-dismiss="true">
               <div class="kt-menu-item">
                <a class="kt-menu-link" href="html/demo1/account/home/settings-enterprise.html">
                 <span class="kt-menu-icon">
                  <i class="ki-filled ki-setting-3">
                  </i>
                 </span>
                 <span class="kt-menu-title">
                  Settings
                 </span>
                </a>
               </div>
               <div class="kt-menu-item">
                <a class="kt-menu-link" href="html/demo1/account/members/import-members.html">
                 <span class="kt-menu-icon">
                  <i class="ki-filled ki-some-files">
                  </i>
                 </span>
                 <span class="kt-menu-title">
                  Import
                 </span>
                </a>
               </div>
               <div class="kt-menu-item">
                <a class="kt-menu-link" href="html/demo1/account/activity.html">
                 <span class="kt-menu-icon">
                  <i class="ki-filled ki-cloud-change">
                  </i>
                 </span>
                 <span class="kt-menu-title">
                  Activity
                 </span>
                </a>
               </div>
               <div class="kt-menu-item">
                <a class="kt-menu-link" data-kt-modal-toggle="#report_user_modal" href="#">
                 <span class="kt-menu-icon">
                  <i class="ki-filled ki-dislike">
                  </i>
                 </span>
                 <span class="kt-menu-title">
                  Report
                 </span>
                </a>
               </div>
              </div>
             </div>
            </div>
           </div>
           <div class="kt-card-content flex justify-center items-center px-3 py-1">
            <div id="contributions_chart">
            </div>
           </div>
          </div>
         </div>
        </div>
       </div>
      </div>
      <!-- end: grid -->
     </div>
     <!-- End of Container -->
    </main>
</template>