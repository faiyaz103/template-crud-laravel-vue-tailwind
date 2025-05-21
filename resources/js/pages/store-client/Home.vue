<template>
    <main class="grow pt-5" id="content" role="content">
     <!-- Container -->
     <div class="kt-container-fixed" id="contentContainer">
     </div>
     <!-- End of Container -->
     <!-- Container -->
     <div class="kt-container-fixed">
      <!-- begin: Content -->
      <div class="grid grid-cols-1 gap-6">
       <!--Store Search-->
       <div class="kt-card shadow-none relative h-[140px] bg-cover bg-no-repeat light:bg-accent/50 mb-3.5">
        <div class="kt-input kt-input-lg absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 max-w-[420px] w-full z-1 shadow-[0px_3px_11px_0px_rgba(45,72,126,0.10)]">
         <i class="ki-filled ki-magnifier text-muted-foreground">
         </i>
         <input
            v-model="searchTerm"
            @input="fetchProducts()"
            placeholder="Search by product, brand, or category" 
            type="text"
        />

        </div>
       </div>

       <div class="space-y-4">
        <!-- Search -->
        <div v-if="searchTerm.trim()"  class="grid grid-cols-1 gap-5">
         
         <div v-for="product in products.data" :key="product.id" class="kt-card">
          <div class="kt-card-content flex items-center flex-wrap justify-between p-2 pe-5 gap-4.5">
           <div class="flex items-center gap-3.5">
            <div class="kt-card flex items-center justify-center bg-accent/50 h-[70px] w-[90px] shadow-none">
             <router-link :to="`/store/products/${product.id}`">
                <img alt="img" class="h-[70px] cursor-pointer" :src="'/storage/'+product.image"/>
             </router-link>
            </div>
            <div class="flex flex-col gap-2">
             <div class="flex items-center gap-2.5 -mt-1">
              <router-link :to="`/store/products/${product.id}`" class="text-sm font-medium text-mono leading-5.5">
               {{product.name}}
              </router-link>
              <span
                v-if="product.discount > 0"
                class="kt-badge kt-badge-info kt-badge-sm uppercase"
               >
               save {{product.discount}}%
              </span>
             </div>
             <div class="flex items-center flex-wrap gap-3">
              <!-- <template v-if="product.quantity > 0">
                <div>
                <span class="kt-badge kt-badge-success kt-badge-sm">
                In Stock
               </span>
               </div>
              </template> -->
              <template v-if="product.quantity == 0">
                <div>
                <span class="kt-badge kt-badge-destructive kt-badge-sm">
                Out of stock
               </span>
               </div>
              </template>
              <div class="flex items-center flex-wrap gap-2 lg:gap-4">
               <!-- <span class="text-xs font-normal text-secondary-foreground uppercase">
                SKU:
                <span class="text-xs font-medium text-foreground">
                 {{product.sku}}
                </span>
               </span> -->
               <span class="text-xs font-normal text-secondary-foreground">
                Brand:
                <span class="text-xs font-medium text-foreground">
                 {{ product.brand?.name }}
                </span>
               </span>
               <span class="text-xs font-normal text-secondary-foreground">
                Category:
                <span class="text-xs font-medium text-foreground">
                 {{ product.category?.name }}
                </span>
               </span>
              </div>
             </div>
            </div>
           </div>
           
           <template v-if="product.discount > 0">
            <div class="flex items-center gap-1.5">
            <span class="text-xs font-normal text-secondary-foreground line-through">
             ${{ product.price }}
            </span>
            <span class="text-sm font-medium text-mono">
             ${{ Math.floor(product.price - (product.price * product.discount / 100)) }}
            </span>
           </div>
           </template>

           <template v-else>
            <div class="flex items-center gap-1.5">
            <span class="text-sm font-medium text-mono">
             ${{ product.price }}
            </span>
           </div>
           </template>
          </div>
          
         </div>
        </div>

        <div class="flex items-center justify-between gap-4">
         <span class="text-lg font-medium text-mono">
          New Arrivals
         </span>
         <a class="kt-link" href="html/demo1/account/home/get-started.html">
          See All
          <i class="ki-filled ki-right text-xs">
          </i>
         </a>
        </div>
        <!-- begin: grid -->
        <div class="grid sm:grid-cols-2 xl:grid-cols-4 gap-5 mb-2">
         <div v-for="newarrival in newarrivals.data" :key="newarrival.id" class="kt-card">
          <div class="kt-card-content flex flex-col justify-between p-2.5 gap-4">
           <div class="mb-2.5">
            <div class="kt-card flex items-center justify-center relative bg-accent/50 w-full h-[180px] mb-4 shadow-none">
             <span v-if="newarrival.discount > 0" class="kt-badge kt-badge-info kt-badge-sm absolute top-2 end-2 uppercase">
              save {{newarrival.discount}}%
             </span>
             <router-link :to="`/store/products/${newarrival.id}`">
                 <img :src="'/storage/'+newarrival.image" alt="" class="h-[180px] shrink-0 cursor-pointer"/>
             </router-link>
            </div>
            <template v-if="newarrival.quantity == 0">
                <div>
                    <span class="kt-badge mx-2.5 kt-badge-destructive kt-badge-sm">
                    Out of stock
                    </span>
                </div>
            </template>
            <router-link :to="`/store/products/${newarrival.id}`" class="hover:text-primary text-sm font-medium text-mono px-2.5 leading-5.5 block" data-kt-drawer-toggle="#drawers_shop_product_details" href="#">
             {{ newarrival.name }}
            </router-link>
            <span class="text-sm text-gray-600 px-2.5 leading-5.5 block">
                 {{ newarrival.brand?.name }}
            </span>
            <span class="text-xs text-gray-600 px-2.5 leading-5.5 block">
                 {{ newarrival.category?.name }}
            </span>
            
           </div>
           <div class="flex items-center flex-wrap justify-between gap-5 px-2.5 pb-1">
            <div class="flex items-center flex-wrap gap-1.5">
             <template v-if="newarrival.discount > 0">
                <span class="text-xs font-normal text-secondary-foreground line-through pt-[1px]">
                    ${{ newarrival.price }}
                </span>
                <span class="text-sm font-medium text-mono">
                    ${{ Math.floor(newarrival.price - (newarrival.price * newarrival.discount / 100)) }}
                </span>
             </template>

             <template v-else>
                <span class="text-sm font-medium text-mono">
                    ${{ newarrival.price }}
                </span>
             </template>
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
       <!-- end: New Arrivals -->
       <!-- begin: Popular Sneakers -->
       <div class="space-y-4">
        <div class="flex items-center justify-between gap-4">
         <span class="text-lg font-medium text-mono">
          Popular Sneakers
         </span>
         <a class="kt-link" href="html/demo1/account/home/get-started.html">
          See All
          <i class="ki-filled ki-right text-xs">
          </i>
         </a>
        </div>
        <!-- begin: grid -->
        <div class="grid sm:grid-cols-2 xl:grid-cols-4 gap-5 mb-2">
         <div v-for="popular in popular.data" :key="popular.id" class="kt-card">
          <div class="kt-card-content flex flex-col justify-between p-2.5 gap-4">
           <div class="mb-2.5">
            <div class="kt-card flex items-center justify-center relative bg-accent/50 w-full h-[180px] mb-4 shadow-none">
             <span v-if="popular.discount > 0" class="kt-badge kt-badge-info kt-badge-sm absolute top-2 end-2 uppercase">
              save {{popular.discount}}%
             </span>
             <router-link :to="`/store/products/${popular.id}`">
                <img :src="'/storage/'+popular.image" alt="" class="h-[180px] shrink-0 cursor-pointer"/>
             </router-link>
            </div>
            <template v-if="popular.quantity == 0">
                <div>
                    <span class="kt-badge mx-2.5 kt-badge-destructive kt-badge-sm">
                    Out of stock
                    </span>
                </div>
            </template>
            <router-link :to="`/store/products/${popular.id}`" class="hover:text-primary text-sm font-medium text-mono px-2.5 leading-5.5 block" data-kt-drawer-toggle="#drawers_shop_product_details" href="#">
             {{ popular.name }}
            </router-link>
            <span class="text-sm text-gray-600 px-2.5 leading-5.5 block">
                 {{ popular.brand?.name }}
            </span>
            <span class="text-xs text-gray-600 px-2.5 leading-5.5 block">
                 {{ popular.category?.name }}
            </span>
            
           </div>
           <div class="flex items-center flex-wrap justify-between gap-5 px-2.5 pb-1">
            <div class="flex items-center flex-wrap gap-1.5">
             <template v-if="popular.discount > 0">
                <span class="text-xs font-normal text-secondary-foreground line-through pt-[1px]">
                    ${{ popular.price }}
                </span>
                <span class="text-sm font-medium text-mono">
                    ${{ Math.floor(popular.price - (popular.price * popular.discount / 100)) }}
                </span>
             </template>

             <template v-else>
                <span class="text-sm font-medium text-mono">
                    ${{ popular.price }}
                </span>
             </template>
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
       <!-- end: Popular Sneakers -->
       <!-- begin: Deals -->
       <div class="space-y-4">
        <div class="flex items-center justify-between gap-4">
         <span class="text-lg font-medium text-mono">
          Limited-Time Deals
         </span>
         <a class="kt-btn kt-btn-sm kt-btn-ghost kt-btn-primary" href="html/demo1/account/home/get-started.html">
          See All
          <i class="ki-filled ki-right">
          </i>
         </a>
        </div>
        <!-- begin: grid -->
        <div class="grid sm:grid-cols-2 xl:grid-cols-4 gap-5 mb-2">
         <div v-for="deal in deals.data" :key="deal.id" class="kt-card">
          <div class="kt-card-content flex flex-col justify-between p-2.5 gap-4">
           <div class="mb-2.5">
            <div class="kt-card flex items-center justify-center relative bg-accent/50 w-full h-[180px] mb-4 shadow-none">
             <span v-if="deal.discount > 0" class="kt-badge kt-badge-info kt-badge-sm absolute top-2 end-2 uppercase">
              save {{deal.discount}}%
             </span>
             <router-link :to="`/store/products/${deal.id}`">
                <img :src="'/storage/'+deal.image" alt="" class="h-[180px] shrink-0 cursor-pointer"/>
             </router-link>
            </div>
            <template v-if="deal.quantity == 0">
                <div>
                    <span class="kt-badge mx-2.5 kt-badge-destructive kt-badge-sm">
                    Out of stock
                    </span>
                </div>
            </template>
            <router-link :to="`/store/products/${deal.id}`" class="hover:text-primary text-sm font-medium text-mono px-2.5 leading-5.5 block" data-kt-drawer-toggle="#drawers_shop_product_details" href="#">
             {{ deal.name }}
            </router-link>
            <span class="text-sm text-gray-600 px-2.5 leading-5.5 block">
                 {{ deal.brand?.name }}
            </span>
            <span class="text-xs text-gray-600 px-2.5 leading-5.5 block">
                 {{ deal.category?.name }}
            </span>
            
           </div>
           <div class="flex items-center flex-wrap justify-between gap-5 px-2.5 pb-1">
            <div class="flex items-center flex-wrap gap-1.5">
             <template v-if="deal.discount > 0">
                <span class="text-xs font-normal text-secondary-foreground line-through pt-[1px]">
                    ${{ deal.price }}
                </span>
                <span class="text-sm font-medium text-mono">
                    ${{ Math.floor(deal.price - (deal.price * deal.discount / 100)) }}
                </span>
             </template>

             <template v-else>
                <span class="text-sm font-medium text-mono">
                    ${{ deal.price }}
                </span>
             </template>
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
       <!-- end: Deals -->
       <div class="grid sm:grid-cols-2 xl:grid-cols-4 gap-5 mb-2">
        <div class="kt-card">
         <div class="kt-card-content flex items-center gap-3.5 px-5">
          <div class="relative size-[50px] shrink-0">
           <svg class="w-full h-full stroke-primary/10 fill-primary-soft" fill="none" height="48" viewbox="0 0 44 48" width="44" xmlns="http://www.w3.org/2000/svg">
            <path d="M16 2.4641C19.7128 0.320509 24.2872 0.320508 28 2.4641L37.6506 8.0359C41.3634 10.1795 43.6506 14.141 43.6506 
			18.4282V29.5718C43.6506 33.859 41.3634 37.8205 37.6506 39.9641L28 45.5359C24.2872 47.6795 19.7128 47.6795 16 45.5359L6.34937 
			39.9641C2.63655 37.8205 0.349365 33.859 0.349365 29.5718V18.4282C0.349365 14.141 2.63655 10.1795 6.34937 8.0359L16 2.4641Z" fill="">
            </path>
            <path d="M16.25 2.89711C19.8081 0.842838 24.1919 0.842837 27.75 2.89711L37.4006 8.46891C40.9587 10.5232 43.1506 14.3196 43.1506 
			18.4282V29.5718C43.1506 33.6804 40.9587 37.4768 37.4006 39.5311L27.75 45.1029C24.1919 47.1572 19.8081 47.1572 16.25 45.1029L6.59937 
			39.5311C3.04125 37.4768 0.849365 33.6803 0.849365 29.5718V18.4282C0.849365 14.3196 3.04125 10.5232 6.59937 8.46891L16.25 2.89711Z" stroke="">
            </path>
           </svg>
           <div class="absolute leading-none start-2/4 top-2/4 -translate-y-2/4 -translate-x-2/4 rtl:translate-x-2/4">
            <i class="ki-filled ki-delivery-time text-xl ps-px text-primary">
            </i>
           </div>
          </div>
          <div class="flex flex-col">
           <a class="hover:text-primary text-md font-medium text-mono" href="#">
            Free Delivery
           </a>
           <span class="text-xs font-normal text-secondary-foreground">
            No extra shipping costs
           </span>
          </div>
         </div>
        </div>
        <div class="kt-card">
         <div class="kt-card-content flex items-center gap-3.5 px-5">
          <div class="relative size-[50px] shrink-0">
           <svg class="w-full h-full stroke-success-transparent fill-success-soft" fill="none" height="48" viewbox="0 0 44 48" width="44" xmlns="http://www.w3.org/2000/svg">
            <path d="M16 2.4641C19.7128 0.320509 24.2872 0.320508 28 2.4641L37.6506 8.0359C41.3634 10.1795 43.6506 14.141 43.6506 
			18.4282V29.5718C43.6506 33.859 41.3634 37.8205 37.6506 39.9641L28 45.5359C24.2872 47.6795 19.7128 47.6795 16 45.5359L6.34937 
			39.9641C2.63655 37.8205 0.349365 33.859 0.349365 29.5718V18.4282C0.349365 14.141 2.63655 10.1795 6.34937 8.0359L16 2.4641Z" fill="">
            </path>
            <path d="M16.25 2.89711C19.8081 0.842838 24.1919 0.842837 27.75 2.89711L37.4006 8.46891C40.9587 10.5232 43.1506 14.3196 43.1506 
			18.4282V29.5718C43.1506 33.6804 40.9587 37.4768 37.4006 39.5311L27.75 45.1029C24.1919 47.1572 19.8081 47.1572 16.25 45.1029L6.59937 
			39.5311C3.04125 37.4768 0.849365 33.6803 0.849365 29.5718V18.4282C0.849365 14.3196 3.04125 10.5232 6.59937 8.46891L16.25 2.89711Z" stroke="">
            </path>
           </svg>
           <div class="absolute leading-none start-2/4 top-2/4 -translate-y-2/4 -translate-x-2/4 rtl:translate-x-2/4">
            <i class="ki-filled ki-messages text-xl ps-px text-green-500">
            </i>
           </div>
          </div>
          <div class="flex flex-col">
           <a class="hover:text-primary text-md font-medium text-mono" href="#">
            24/7 Support
           </a>
           <span class="text-xs font-normal text-secondary-foreground">
            Help anytime, anywhere
           </span>
          </div>
         </div>
        </div>
        <div class="kt-card">
         <div class="kt-card-content flex items-center gap-3.5 px-5">
          <div class="relative size-[50px] shrink-0">
           <svg class="w-full h-full stroke-info-transparent fill-info-soft" fill="none" height="48" viewbox="0 0 44 48" width="44" xmlns="http://www.w3.org/2000/svg">
            <path d="M16 2.4641C19.7128 0.320509 24.2872 0.320508 28 2.4641L37.6506 8.0359C41.3634 10.1795 43.6506 14.141 43.6506 
			18.4282V29.5718C43.6506 33.859 41.3634 37.8205 37.6506 39.9641L28 45.5359C24.2872 47.6795 19.7128 47.6795 16 45.5359L6.34937 
			39.9641C2.63655 37.8205 0.349365 33.859 0.349365 29.5718V18.4282C0.349365 14.141 2.63655 10.1795 6.34937 8.0359L16 2.4641Z" fill="">
            </path>
            <path d="M16.25 2.89711C19.8081 0.842838 24.1919 0.842837 27.75 2.89711L37.4006 8.46891C40.9587 10.5232 43.1506 14.3196 43.1506 
			18.4282V29.5718C43.1506 33.6804 40.9587 37.4768 37.4006 39.5311L27.75 45.1029C24.1919 47.1572 19.8081 47.1572 16.25 45.1029L6.59937 
			39.5311C3.04125 37.4768 0.849365 33.6803 0.849365 29.5718V18.4282C0.849365 14.3196 3.04125 10.5232 6.59937 8.46891L16.25 2.89711Z" stroke="">
            </path>
           </svg>
           <div class="absolute leading-none start-2/4 top-2/4 -translate-y-2/4 -translate-x-2/4 rtl:translate-x-2/4">
            <i class="ki-filled ki-discount text-xl ps-px text-violet-500">
            </i>
           </div>
          </div>
          <div class="flex flex-col">
           <a class="hover:text-primary text-md font-medium text-mono" href="#">
            Discounts
           </a>
           <span class="text-xs font-normal text-secondary-foreground">
            Save big on top deals
           </span>
          </div>
         </div>
        </div>
        <div class="kt-card">
         <div class="kt-card-content flex items-center gap-3.5 px-5">
          <div class="relative size-[50px] shrink-0">
           <svg class="w-full h-full stroke-yellow-100 fill-warning-soft" fill="none" height="48" viewbox="0 0 44 48" width="44" xmlns="http://www.w3.org/2000/svg">
            <path d="M16 2.4641C19.7128 0.320509 24.2872 0.320508 28 2.4641L37.6506 8.0359C41.3634 10.1795 43.6506 14.141 43.6506 
			18.4282V29.5718C43.6506 33.859 41.3634 37.8205 37.6506 39.9641L28 45.5359C24.2872 47.6795 19.7128 47.6795 16 45.5359L6.34937 
			39.9641C2.63655 37.8205 0.349365 33.859 0.349365 29.5718V18.4282C0.349365 14.141 2.63655 10.1795 6.34937 8.0359L16 2.4641Z" fill="">
            </path>
            <path d="M16.25 2.89711C19.8081 0.842838 24.1919 0.842837 27.75 2.89711L37.4006 8.46891C40.9587 10.5232 43.1506 14.3196 43.1506 
			18.4282V29.5718C43.1506 33.6804 40.9587 37.4768 37.4006 39.5311L27.75 45.1029C24.1919 47.1572 19.8081 47.1572 16.25 45.1029L6.59937 
			39.5311C3.04125 37.4768 0.849365 33.6803 0.849365 29.5718V18.4282C0.849365 14.3196 3.04125 10.5232 6.59937 8.46891L16.25 2.89711Z" stroke="">
            </path>
           </svg>
           <div class="absolute leading-none start-2/4 top-2/4 -translate-y-2/4 -translate-x-2/4 rtl:translate-x-2/4">
            <i class="ki-filled ki-credit-cart text-xl ps-px text-yellow-500">
            </i>
           </div>
          </div>
          <div class="flex flex-col">
           <a class="hover:text-primary text-md font-medium text-mono" href="#">
            Money-Back
           </a>
           <span class="text-xs font-normal text-secondary-foreground">
            Full refund, no risk
           </span>
          </div>
         </div>
        </div>
       </div>
      </div>
      <!-- end: Content -->
     </div>
     <!-- End of Container -->
    </main>
</template>

<script>

import axios from 'axios';

export default{
    data(){
        return{
            newarrivals:{},
            popular:{},
            deals:{},
            products:{},
            searchTerm:''
        }
    },

    methods:{
        async fetchProducts(url='/api/products'){
            try {
                const {data}= await axios.get(url, {
                    params:{
                        search: this.searchTerm
                    }
                });
                this.products=data;
            } catch (error) {
                console.error('Failed to load', error);
            }
        },

        async fetchNewArrivals(url='/api/store/new'){
            try {
                const {data} = await axios.get(url);
                this.newarrivals=data;
            } catch (error) {
                console.error('Failed to load', error);
            }
        },

        async fetchPopular(url='/api/store/popular'){
            try {
                const {data} = await axios.get(url);
                this.popular=data;
            } catch (error) {
                console.error('Failed to load', error);
            }
        },

        async fetchDeals(url='/api/store/deals'){
            try {
                const {data} = await axios.get(url);
                this.deals=data;
            } catch (error) {
                console.error('Failed to load', error);
            }
        }
    },

    mounted(){
        this.fetchNewArrivals();
        this.fetchPopular();
        this.fetchDeals();
    }
}

</script>