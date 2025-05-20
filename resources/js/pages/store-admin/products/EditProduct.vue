<template>
  <main class="grow pt-5" id="content" role="content">
    <!-- Container -->
    <div class="kt-container-fixed">
      <div class="flex flex-wrap items-center lg:items-end justify-between gap-5 pb-7.5">
        <div class="flex flex-col justify-center gap-2">
          <h1 class="text-xl font-medium leading-none text-mono">
            Edit Product
          </h1>
        </div>
      </div>
    </div>
    <!-- End of Container -->

    <!-- Container -->
    <form @submit.prevent="updateProduct" enctype="multipart/form-data">
    <div class="kt-container-fixed">
      <div class="grid gap-5 lg:gap-7.5 xl:w-[38.75rem] mx-auto">
        <div class="kt-card pb-2.5">
            <div class="kt-card-content grid gap-5">

              <div class="flex items-baseline flex-wrap lg:flex-nowrap gap-2.5">
                <label class="kt-form-label max-w-56">Product Image</label>
                <input @change="handleImageUpload" class="kt-input" type="file" accept="image/*" />
              </div>

              <div v-if="imagePreview" class="mt-2">
                <p class="text-sm text-gray-500">Preview:</p>
                <img :src="imagePreview" alt="Product Image Preview" class="h-32 mt-1 rounded shadow" />
            </div>

              <div class="flex items-baseline flex-wrap lg:flex-nowrap gap-2.5">
                <label class="kt-form-label max-w-56">Name</label>
                <input v-model="form.name" class="kt-input" type="text" placeholder="Enter product name" />
              </div>

              <div class="flex items-baseline flex-wrap lg:flex-nowrap gap-2.5">
                <label class="kt-form-label max-w-56">Brand</label>
                <select v-model="form.brand_id" class="kt-input">
                  <!-- <option value="">Select a brand</option> -->
                  <option v-for="brand in brands.data" :key="brand.id" :value="brand.id">
                    {{ brand.name }}
                  </option>
                </select>
              </div>

              <div class="flex items-baseline flex-wrap lg:flex-nowrap gap-2.5">
                <label class="kt-form-label max-w-56">Category</label>
                <select v-model="form.category_id" class="kt-input">
                  <!-- <option value="">Select a category</option> -->
                  <option v-for="category in categories.data" :key="category.id" :value="category.id">
                    {{ category.name }}
                  </option>
                </select>
              </div>

              <div class="flex items-baseline flex-wrap lg:flex-nowrap gap-2.5">
                <label class="kt-form-label max-w-56">Description</label>
                <textarea v-model="form.description" class="kt-input" rows="3" placeholder="Enter product description"></textarea>
              </div>

              <div class="flex items-baseline flex-wrap lg:flex-nowrap gap-2.5">
                <label class="kt-form-label max-w-56">Price</label>
                <input v-model="form.price" class="kt-input" type="number" min="0" step="1" placeholder="Enter price" />
              </div>

              <div class="flex items-baseline flex-wrap lg:flex-nowrap gap-2.5">
                <label class="kt-form-label max-w-56">SKU</label>
                <input v-model="form.sku" class="kt-input" type="text" placeholder="Enter SKU" />
              </div>

              <div class="flex items-baseline flex-wrap lg:flex-nowrap gap-2.5">
                <label class="kt-form-label max-w-56">Unit</label>
                <select v-model="form.unit_id" class="kt-input">
                  <!-- <option value="">Select a unit</option> -->
                  <option v-for="unit in units.data" :key="unit.id" :value="unit.id">
                    {{ unit.name }}
                  </option>
                </select>
              </div>

              <div class="flex items-baseline flex-wrap lg:flex-nowrap gap-2.5">
                <label class="kt-form-label max-w-56">Discount (%)</label>
                <input v-model="form.discount" class="kt-input" type="number" min="0" max="100" placeholder="Enter discount" />
              </div>

              <div class="flex items-baseline flex-wrap lg:flex-nowrap gap-2.5">
                <label class="kt-form-label max-w-56">Quantity</label>
                <input v-model="form.quantity" class="kt-input" type="number" min="0" placeholder="Enter quantity" />
              </div>

              <div class="flex justify-end">
                <button type="submit" class="kt-btn kt-btn-primary">
                  Update
                </button>
              </div>
            </div>
        </div>
      </div>
    </div>
    </form>
    <!-- End of Container -->
  </main>
</template>

<script>

import axios from 'axios';

export default{
    data(){
        return{
            brands:{},
            categories:{},
            units:{},

            form:{
                image: null,
                name: '',
                brand_id: '',
                category_id: '',
                description: '',
                price: '',
                sku: '',
                unit_id: '',
                discount: 0,
                quantity: ''
            },

            imagePreview: null
        }
    },

    methods:{

        async fetchBrands(url="/api/brands"){
            try {
                const {data} = await axios.get(url);
                this.brands=data;
            } catch (error) {
                console.error('Failed to load', error);
            }
        },
        async fetchCategories(url="/api/categories"){
            try {
                const {data} = await axios.get(url);
                this.categories=data;
            } catch (error) {
                console.error('Failed to load', error);
            }
        },
        async fetchUnits(url="/api/units"){
            try {
                const {data} = await axios.get(url);
                this.units=data;
            } catch (error) {
                console.error('Failed to load', error);
            }
        },
        async fetchProduct(){
            try {
                const pid=this.$route.params.id;
                const {data} = await axios.get(`/api/products/${pid}`);
                this.form={
                    ...data,
                    image:null
                };

                this.imagePreview=`/storage/${data.image}`;
            } catch (error) {
                console.error('Failed to load', error);
            }
        },

        handleImageUpload(event){
            const file=event.target.files[0];
            this.form.image=file;

            if(file){
                this.imagePreview=URL.createObjectURL(file);
            }
            else{
                this.imagePreview=null;
            }
        },

        async updateProduct(){
            const pid=this.$route.params.id;
            try {
                
                const formData = new FormData();

                if(this.form.image){
                    formData.append('image', this.form.image);
                }
                formData.append('name', this.form.name);
                formData.append('brand_id', this.form.brand_id);
                formData.append('category_id', this.form.category_id);
                formData.append('description', this.form.description);
                formData.append('price', this.form.price);
                formData.append('sku', this.form.sku);
                formData.append('unit_id', this.form.unit_id);
                formData.append('discount', this.form.discount);
                formData.append('quantity', this.form.quantity);

                await axios.post(`/api/products/${pid}?_method=PUT`, formData, {
                    headers:{
                        'Content-Type': 'multipart/form-data',
                    }
                });

                this.$router.push('/products');

            } catch (error) {
                console.error('Failed to update', error);
            }
        }
    },

    mounted(){
        this.fetchBrands();
        this.fetchCategories();
        this.fetchUnits();
        this.fetchProduct();
    }
}

</script>