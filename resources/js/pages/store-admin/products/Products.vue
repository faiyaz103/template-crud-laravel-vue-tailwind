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
            @input="fetchProducts()"
            placeholder="Search by product, brand, or category" 
            type="text"
        />
        </div>
        <!--Filter-->
        
        <router-link class="kt-btn kt-btn-primary" to="/add-product">
         Add Product
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
        <div class="grid grid-cols-1 gap-5">
         
         <div v-for="product in products.data" :key="product.id" class="kt-card">
          <div class="kt-card-content flex items-center flex-wrap justify-between p-2 pe-5 gap-4.5">
           <div class="flex items-center gap-3.5">
            <div class="kt-card flex items-center justify-center bg-accent/50 h-[70px] w-[90px] shadow-none">
             <img alt="img" class="h-[70px] cursor-pointer" :src="'/storage/'+product.image"/>
            </div>
            <div class="flex flex-col gap-2">
             <div class="flex items-center gap-2.5 -mt-1">
              <a class="hover:text-primary text-sm font-medium text-mono leading-5.5" href="#">
               {{product.name}}
              </a>
              <span
                v-if="product.discount > 0"
                class="kt-badge kt-badge-info kt-badge-sm uppercase"
               >
               save {{product.discount}}%
              </span>
             </div>
             <div class="flex items-center flex-wrap gap-3">
              <template v-if="product.quantity > 0">
                <div>
                <span class="kt-badge kt-badge-success kt-badge-sm">
                {{product.quantity}} {{ product.unit?.shortname }}
               </span>
               </div>
              </template>
              <template v-else>
                <div>
                <span class="kt-badge kt-badge-destructive kt-badge-sm">
                Out of stock
               </span>
               </div>
              </template>
              <div class="flex items-center flex-wrap gap-2 lg:gap-4">
               <span class="text-xs font-normal text-secondary-foreground uppercase">
                SKU:
                <span class="text-xs font-medium text-foreground">
                 {{product.sku}}
                </span>
               </span>
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
           <router-link class="kt-btn bg-yellow-500 text-black" :to="`/edit-product/${product.id}`">
             Edit
            </router-link>
           <button @click="deleteProduct(product.id)" class="kt-btn bg-orange-700 text-white kt-btn-outline ms-2 shrink-0">
             Delete
            </button>
          </div>
          
         </div>
        </div>
        <!-- end: grid -->
       </div>
       <!-- end: list -->
      </div>
     </div>
     <!-- End of Container -->
      <div if="products.links" class="flex justify-center items-center space-x-2 mt-6">
        <button v-for="(link, index) in products.links"
        :key="index"
        @click="fetchProducts(link.url)"
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
            products:{},
            searchTerm: ''
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
        async deleteProduct(id){
            try {
                await axios.delete(`/api/products/${id}`);
                this.fetchProducts();
            } catch (error) {
                console.error('Failed to delete', error);
            }
        }
    },

    mounted(){
        this.fetchProducts();
    }
}

</script>