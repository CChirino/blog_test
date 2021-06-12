<template lang='html'>
    <form
        class="ps-form ps-form--new-product"
        v-on:submit.prevent="submitForm" enctype="multipart/form-data" >
                            <div class="form-group">
                                <div class="form-group--nest">
                                    <input type="file" class="form-control mb-1" v-on:change="onImageChange">
                                    <button class="ps-btn ps-btn--sm">
                                        Choose
                                    </button>
                                </div>
                            </div>
    </form>
</template>

<script>
export default {
    name: 'UploadsImage',
    data(){
        return{
            file:'',
        }
    },
    methods:{
        onImageChange(e){
                console.log(e.target.files[0]);
                this.file = e.target.files[0];
            },
        submitForm(){
                const config = {
                    headers: { 'content-type': 'multipart/form-data' }
                }
                let formData = new FormData();
                formData.append('file', this.file);
                this.$inertia.post(route('posts.store'), formData, config)
                .then(function (response) {
                })
                 .catch((error) => {
                     if(error.response.data){
                         this.errors = error.response.data.errors
                     }
                      console.log(error.response.data)
                 }).finally(() => {
                 });
        },
        onChangeFileUpload(){
        this.file = this.$refs.file.files[0];

      }
    }
};
</script>

<style lang="scss" scoped>

</style>