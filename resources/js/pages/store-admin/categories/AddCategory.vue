<template>
    <main class="grow pt-5" id="content" role="content">
     <!-- Container -->
     <div class="kt-container-fixed">
      <div class="flex flex-wrap items-center lg:items-end justify-between gap-5 pb-7.5">
       <div class="flex flex-col justify-center gap-2">
        <h1 class="text-xl font-medium leading-none text-mono">
         Add Category
        </h1>
       </div>
      </div>
     </div>
     <!-- End of Container -->
     <!-- Container -->
     <form @submit.prevent="saveCategory">
        <div class="kt-container-fixed">
        <div class="grid gap-5 lg:gap-7.5 xl:w-[38.75rem] mx-auto">
        <div class="kt-card pb-2.5">
        <div class="kt-card-content grid gap-5">
            
            <div class="flex items-baseline flex-wrap lg:flex-nowrap gap-2.5">
            <label class="kt-form-label max-w-56">
            Name
            </label>
            <input v-model="form.name" class="kt-input" placeholder="Casual" type="text" value=""/>
            </div>
            <div class="flex justify-end">
            <button type="submit" class="kt-btn kt-btn-primary">
            Save
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
            form: {
                name: ''
            }
        }
    },
    methods:{
        async saveCategory(){
            try {
                await axios.post('/api/categories', this.form);
                this.$router.push('/categories');
            } catch (error) {
                console.error('Failed to save', error);
            }
        }
    }
}

</script>