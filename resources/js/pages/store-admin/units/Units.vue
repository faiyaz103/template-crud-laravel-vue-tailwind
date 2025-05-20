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
            @input="fetchUnits()"
            placeholder="Search here..." 
            type="text"
        />
        </div>
    
        <router-link class="kt-btn kt-btn-primary" to="/add-unit">
         Add Unit
        </router-link>
        <!--Product Filter-->
        <!--End of Filter Drawer-->
        <!--End of Filter-->
       </div>
       <!-- begin: toolbar -->
       
       <!-- end: toolbar -->

       <!-- begin: list -->
       <div class="" id="shop1_lists">
        <!-- begin: grid -->
        <div v-for="unit in units.data" :key="unit.id" class="grid grid-cols-1 gap-5">
         <div class="kt-card">
          <div class="kt-card-content flex items-center flex-wrap justify-between p-2 pe-5 gap-4.5">
           <div class="flex items-center gap-3.5">
            
            <div class="flex flex-col gap-2">
             <div class="flex items-center gap-2.5 -mt-1">
              <p class="text-sm font-medium text-mono leading-5.5">
               {{ unit.name }}
              </p>
             </div>
             <div class="flex items-center flex-wrap gap-3">
              
              <div class="flex items-center flex-wrap gap-2 lg:gap-4">
                <span class="text-xs font-medium text-foreground">
                 {{ unit.shortname }}
                </span>
              </div>
             </div>
            </div>
           </div>
           <div class="flex items-center gap-1.5">
            <router-link class="kt-btn bg-yellow-500 text-black" :to="`/edit-unit/${unit.id}`">
             Edit
            </router-link>
            <button @click="deleteUnit(unit.id)" class="kt-btn bg-orange-700 text-white kt-btn-outline ms-2 shrink-0">
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

     <div if="units.links" class="flex justify-center items-center space-x-2 mt-6">
        <button v-for="(link, index) in units.links"
        :key="index"
        @click="fetchUnits(link.url)"
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
            units:{},
            searchTerm: ''
        }
    },
    methods:{
        async fetchUnits(url="/api/units"){
            try {
                const {data} = await axios.get(url, {
                    params:{
                        search: this.searchTerm
                    }
                });
                this.units=data;
            } catch (error) {
                console.error('Failed to load', error);
            }
        },
        async deleteUnit(id){
            try {
                await axios.delete(`/api/units/${id}`);
                this.fetchUnits();
            } catch (error) {
                console.error('Failed to delete', error);
            }
        }
    },
    mounted(){
        this.fetchUnits();
    }
}

</script>