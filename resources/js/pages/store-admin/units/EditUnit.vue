<template>
    <main class="grow pt-5" id="content" role="content">
     <!-- Container -->
     <div class="kt-container-fixed">
      <div class="flex flex-wrap items-center lg:items-end justify-between gap-5 pb-7.5">
       <div class="flex flex-col justify-center gap-2">
        <h1 class="text-xl font-medium leading-none text-mono">
         Edit Unit
        </h1>
       </div>
      </div>
     </div>
     <!-- End of Container -->
     <!-- Container -->
     <form @submit.prevent="updateUnit">
        <div class="kt-container-fixed">
        <div class="grid gap-5 lg:gap-7.5 xl:w-[38.75rem] mx-auto">
        <div class="kt-card pb-2.5">
        <div class="kt-card-content grid gap-5">
            
            <div class="flex items-baseline flex-wrap lg:flex-nowrap gap-2.5">
            <label class="kt-form-label max-w-56">
            Name
            </label>
            <input v-model="form.name" class="kt-input" placeholder="Pieces" type="text" value=""/>
            </div>
            <div class="flex items-baseline flex-wrap lg:flex-nowrap gap-2.5">
            <label class="kt-form-label max-w-56">
            Short Name
            </label>
            <input v-model="form.shortname" class="kt-input" placeholder="pcs" type="text" value=""/>
            </div>
            <div class="flex justify-end">
            <button type="submit" class="kt-btn bg-yellow-500 text-black">
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
            form:{
                name: '',
                shortname: ''
            }
        };
    },

    methods:{
        async getUnit(){
            const {id} = this.$route.params;
            try {
                const response = await axios.get(`/api/units/${id}`);
                this.form=response.data;

            } catch (error) {
                console.error('Failed to load unit', error);
            }
        },
        async updateUnit(){
            const {id}=this.$route.params;
            try {
                await axios.put(`/api/units/${id}`, this.form);
                this.$router.push('/units');
            } catch (error) {
                console.error('Failed to update unit', error);
            }
        }
    },

    mounted(){
        this.getUnit();
    }
}

</script>