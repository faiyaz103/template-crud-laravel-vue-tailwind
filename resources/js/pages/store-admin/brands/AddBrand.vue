<template>
    <main class="grow pt-5" id="content" role="content">
     <div class="kt-container-fixed">
      <div class="flex flex-wrap items-center lg:items-end justify-between gap-5 pb-7.5">
       <div class="flex flex-col justify-center gap-2">
        <h1 class="text-xl font-medium leading-none text-mono">
         Add Brand
        </h1>
       </div>
      </div>
     </div>
     
     <form @submit.prevent="saveBrand" enctype="multipart/form-data">
        <div class="kt-container-fixed">
        <div class="grid gap-5 lg:gap-7.5 xl:w-[38.75rem] mx-auto">
        <div class="kt-card pb-2.5">
        <div class="kt-card-content grid gap-5">
            
            <div class="flex items-baseline flex-wrap lg:flex-nowrap gap-2.5">
              <label class="kt-form-label max-w-56">Name</label>
              
              <input v-model="form.name" class="kt-input" placeholder="Nike" type="text" />
            </div>

            <div class="flex items-baseline flex-wrap lg:flex-nowrap gap-2.5">
              <label class="kt-form-label max-w-56">Brand Image</label> 
              <input @change="handleImageUpload" class="kt-input" type="file" accept="image/*" />
            </div>

            <div v-if="imagePreview" class="mt-2">
                <p class="text-sm text-gray-500">Preview:</p>
                <img :src="imagePreview" alt="Brand Image Preview" class="h-32 mt-1 rounded shadow" />
            </div>


            <div class="flex justify-end">
              <button type="submit" class="kt-btn kt-btn-primary">Save</button>
            </div>

        </div>
        </div>
        </div>
        </div>
     </form>
    </main>
</template>

<script>

import axios from 'axios';

export default{
    data(){
        return{
            form:{
                name:'',
                brand_image:null
            },
            imagePreview:null
        }
    },

    methods:{
        handleImageUpload(event){
            const file=event.target.files[0];
            this.form.brand_image=file;

            if(file){
                this.imagePreview=URL.createObjectURL(file);
            }
            else{
                this.imagePreview=null;
            }
        },

        async saveBrand(){
            try {
                const formData = new FormData();

                formData.append('name', this.form.name);
                if(this.form.brand_image){
                    formData.append('brand_image', this.form.brand_image);
                }

                await axios.post('/api/brands', formData, {
                    headers:{
                        'Content-Type': 'multipart/form-data',
                    }
                });

                this.$router.push('/brands');
            } catch (error) {
                console.error('Failed to save brand', error);
            }
        }
    }
}

</script>
