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
         <input
            v-model="searchTerm"
            @input="fetchBrands()"
            placeholder="Search here..." 
            type="text"
        />
        </div>
        <router-link class="kt-btn kt-btn-primary" to="/add-brand">
         Add Brand
        </router-link>
        <!--Filter-->
        
        <!--Product Filter-->
        <!--End of Filter Drawer-->
        <!--End of Filter-->
       </div>
       <!-- begin: toolbar -->
       
       <!-- end: toolbar -->
       <!-- begin: list -->
       <div class="" id="shop1_lists">
        <!-- begin: grid -->
        <div class="grid grid-cols-1 gap-5">
         <div v-for="brand in brands.data" :key="brand.id" class="kt-card">
          <div class="kt-card-content flex items-center flex-wrap justify-between p-2 pe-5 gap-4.5">
           <div class="flex items-center gap-3.5">
            <div class="kt-card flex items-center justify-center bg-accent/50 h-[70px] w-[90px] shadow-none">
             <img 
                :src="brand.brand_image ? '/storage/' + brand.brand_image : 'assets/media/store/client/600x600/11.png'"
                alt="img" 
                class="h-[70px] cursor-pointer"
            />
            </div>
            <div class="flex flex-col gap-2">
             <div class="flex items-center gap-2.5 -mt-1">
              <p class="text-sm font-medium text-mono leading-5.5">
              {{brand.name}}
              </p>
             </div>
             
            </div>
           </div>
           <div class="flex items-center gap-1.5">
            <span class="text-xs font-normal text-secondary-foreground line-through">
            </span>
            
            <router-link class="kt-btn bg-yellow-500 text-black" :to="`/edit-brand/${brand.id}`">
             Edit
            </router-link>
            <button @click="deleteBrand(brand.id)" class="kt-btn bg-orange-700 text-white kt-btn-outline ms-2 shrink-0">
             Delete
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
      <div if="brands.links" class="flex justify-center items-center space-x-2 mt-6">
        <button v-for="(link, index) in brands.links"
        :key="index"
        @click="fetchBrands(link.url)"
        :disabled="!link.url"
        class="px-4 py-2 rounded-md"
        :class="{
            'bg-indigo-500 text-white hover:bg-indigo-600' :link.active,
            'bg-gray-500 text-white hover:bg-gray-600' :!link.active && link.url,
            'bg-gray-300 text-gray-600 cursor-not-allowed' :!link.url
        }"
        v-html="link.label"
        ></button>
     </div>
    </main>
</template>

<script>

import axios from 'axios';

export default{
    data(){
        return{
            brands:{},
            searchTerm: ''
        }
    },

    methods:{
        async fetchBrands(url="/api/brands"){
            try {
                const {data} = await axios.get(url, {
                    params:{
                        search: this.searchTerm
                    }
                });
                this.brands=data;
            } catch (error) {
                console.error('Failed to load', error);
            }
        },
        async deleteBrand(id){
            try {
                await axios.delete(`/api/brands/${id}`);
                this.fetchBrands();
            } catch (error) {
                console.error('Failed to delete', error);
            }
        }
    },

    mounted(){
        this.fetchBrands();
    }
}

</script>