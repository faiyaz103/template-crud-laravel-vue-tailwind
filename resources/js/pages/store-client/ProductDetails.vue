<template>
  <div class="max-w-5xl mx-auto p-6">
    <!-- Header -->
    <div class="flex justify-between items-center mb-6">
      <h1 class="text-2xl font-semibold">Product Details</h1>
    </div>

    <!-- Main Product Section -->
    <div class="flex flex-col lg:flex-row gap-8">
      <!-- Product Image -->
      <div class="relative bg-accent/50 rounded-xl flex items-center justify-center p-4 w-full lg:w-[50%]">
        <span v-if="product?.discount > 0" class="absolute top-4 right-4 bg-violet-500 text-white text-xs px-2 py-1 rounded uppercase">
          save {{product?.discount}}%
        </span>
        <img alt="Product Image" class="w-full h-auto object-contain max-h-[400px]" :src="'/storage/'+product?.image" />
        <!-- <div class="absolute bottom-4 right-4 w-[75px] h-[45px] bg-background rounded-sm flex items-center justify-center overflow-hidden">
          <img alt="Nike Logo Light" class="dark:hidden w-full h-auto" src="/assets/media/brand-logos/nike-light.svg" />
          <img alt="Nike Logo Dark" class="hidden dark:block w-full h-auto" src="/assets/media/brand-logos/nike-dark.svg" />
        </div> -->
      </div>

      <!-- Product Info -->
      <div class="flex-1 space-y-4">
        <h2 class="text-xl font-medium text-mono">
          {{product?.name}}
        </h2>
        <p class="text-sm text-gray-600">
          {{ product?.description }}
        </p>

        <div class="space-y-3">
            <div class="flex items-center">
                <span class="w-28 text-sm text-gray-500">Brand</span>
                <span class="text-sm font-medium">{{product?.brand?.name}}</span>
            </div>
            <div class="flex items-center">
                <span class="w-28 text-sm text-gray-500">Category</span>
                <span class="text-sm font-medium">{{product?.category?.name}}</span>
            </div>
          <div class="flex items-center">
            <span class="w-28 text-sm text-gray-500">Availability</span>
            <span v-if="product?.quantity > 0" class="text-green-600 text-sm font-medium">In Stock</span>
            <span v-else class="text-red-600 text-sm font-medium">Out of stock</span>

          </div>
          <div class="flex items-center">
            <span class="w-28 text-sm text-gray-500">SKU</span>
            <span class="text-sm font-medium">{{product?.sku}}</span>
          </div>
          
        </div>

        <!-- Pricing -->
        <div class="flex items-center space-x-3 mt-4">
          <template v-if="product?.discount > 0">
            <span class="line-through text-gray-400 text-base">${{ product?.price }}</span>
            <span class="text-lg font-semibold text-mono">{{ Math.floor(product?.price - (product?.price * product?.discount / 100)) }}</span>
          </template>
          <template v-else>
            <span class="text-lg font-semibold text-mono">${{ product?.price }}</span>
          </template>
        </div>

        <!-- Add to Cart Button -->
        <div class="mt-6">
          <button class="bg-blue-600 hover:bg-blue-700 text-white px-6 py-2 rounded flex items-center gap-2">
            <i class="ki-filled ki-handcart"></i>
            Add to Cart
          </button>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
import axios from 'axios';

export default{
    data(){
        return{
            product:null
        }
    },

    methods:{
        async fetchProduct(id){
            try {
                const response = await axios.get(`/api/products/${id}`);
                this.product=response.data;  
                // console.log(response.data);
  
            } catch (error) {
                console.error("Failed to load", error);
            }
        }
    },

    mounted(){
        const id=this.$route.params.id;
        this.fetchProduct(id);
    }
}
</script>