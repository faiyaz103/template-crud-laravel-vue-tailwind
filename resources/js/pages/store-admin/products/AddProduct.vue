<template>
  <main class="grow pt-5" id="content" role="content">
    <!-- Container -->
    <div class="kt-container-fixed">
      <div class="flex flex-wrap items-center lg:items-end justify-between gap-5 pb-7.5">
        <div class="flex flex-col justify-center gap-2">
          <h1 class="text-xl font-medium leading-none text-mono">
            Add Product
          </h1>
        </div>
      </div>
    </div>
    <!-- End of Container -->

    <!-- Container -->
    <div class="kt-container-fixed">
      <div class="grid gap-5 lg:gap-7.5 xl:w-[38.75rem] mx-auto">
        <div class="kt-card pb-2.5">
          <form>
            <div class="kt-card-content grid gap-5">
              <div class="flex items-baseline flex-wrap lg:flex-nowrap gap-2.5">
                <label class="kt-form-label max-w-56">Product Image</label>
                <input class="kt-input" type="file" accept="image/*" />
              </div>

              <div class="flex items-baseline flex-wrap lg:flex-nowrap gap-2.5">
                <label class="kt-form-label max-w-56">Name</label>
                <input class="kt-input" type="text" placeholder="Enter product name" />
              </div>

              <div class="flex items-baseline flex-wrap lg:flex-nowrap gap-2.5">
                <label class="kt-form-label max-w-56">Brand</label>
                <select class="kt-input">
                  <!-- <option value="">Select a brand</option> -->
                  <option v-for="brand in brands.data" :key="brand.id" :value="brand.id">
                    {{ brand.name }}
                  </option>
                  
                </select>
              </div>

              <div class="flex items-baseline flex-wrap lg:flex-nowrap gap-2.5">
                <label class="kt-form-label max-w-56">Category</label>
                <select class="kt-input">
                  <!-- <option value="">Select a category</option> -->
                  <option v-for="category in categories.data" :key="category.id" :value="category.id">
                    {{ category.name }}
                  </option>
                </select>
              </div>

              <div class="flex items-baseline flex-wrap lg:flex-nowrap gap-2.5">
                <label class="kt-form-label max-w-56">Description</label>
                <textarea class="kt-input" rows="3" placeholder="Enter product description"></textarea>
              </div>

              <div class="flex items-baseline flex-wrap lg:flex-nowrap gap-2.5">
                <label class="kt-form-label max-w-56">Price</label>
                <input class="kt-input" type="number" min="0" step="0.01" placeholder="Enter price" />
              </div>

              <div class="flex items-baseline flex-wrap lg:flex-nowrap gap-2.5">
                <label class="kt-form-label max-w-56">SKU</label>
                <input class="kt-input" type="text" placeholder="Enter SKU" />
              </div>

              <div class="flex items-baseline flex-wrap lg:flex-nowrap gap-2.5">
                <label class="kt-form-label max-w-56">Unit</label>
                <select class="kt-input">
                  <!-- <option value="">Select a unit</option> -->
                  <option v-for="unit in units.data" :key="unit.id" :value="unit.id">
                    {{ unit.name }}
                  </option>
                </select>
              </div>

              <div class="flex items-baseline flex-wrap lg:flex-nowrap gap-2.5">
                <label class="kt-form-label max-w-56">Discount (%)</label>
                <input class="kt-input" type="number" min="0" max="100" placeholder="Enter discount" />
              </div>

              <div class="flex justify-end">
                <button type="submit" class="kt-btn kt-btn-primary">
                  Save
                </button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
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
            units:{}
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
        }
    },

    mounted(){
        this.fetchBrands();
        this.fetchCategories();
        this.fetchUnits();
    }
}

</script>