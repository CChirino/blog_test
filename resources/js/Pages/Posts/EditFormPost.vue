<template>
  <app-layout>
    <div class="bg-white shadow">
          <h3 class="text-xl pt-3 pb-3 text-center">Crear Articulos</h3>
    </div>
    <div class="relative flex items-top justify-center md:max-h-screen lg:items-center lg:pt-0" > 
    <div class="mt-5 md:mt-0 md:col-span-2 ">
          <form action="#" method="POST" @submit.prevent="submit" class=" mt-8 mb-8 bg-white overflow-hidden shadow md:rounded-lg">
            <div class="shadow overflow-hidden sm:rounded-md">
              <div class="px-4 py-5  bg-white sm:p-6">
                <div class="grid grid-cols-6 gap-6">
                  <div class="col-span-6 sm:col-span-4">
                    <label class="block text-sm font-medium text-gray-700">Titulo del articulos:</label>
                    <input type="text" name="name" id="name" autocomplete="text" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md"  v-model="form.title" />
                  </div>

                  <div class="col-span-6 sm:col-span-4">
                    <label class="block text-sm font-medium text-gray-700">Descripcion:</label>
                    <input type="text" name="email_address" id="email_address" autocomplete="email" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md" v-model="form.description" />
                  </div>
                 <div class="col-span-6 sm:col-span-4">
                    <label class="block text-sm font-medium text-gray-700">Imagenes:</label>
                        <img width="300" :src="'http://127.0.0.1:8000/storage/articles/' + posts.file" class="pt-2 pb-2" >
                      <input
                                        class="form-control mb-1"
                                        placeholder=""
                                        type="file" id="file" ref="file" v-on:change="onChangeFileUpload()"
                      />                  
                  </div>
                  <div class="col-span-6 sm:col-span-4">
                    <label class="block text-sm font-medium text-gray-700">Contenido:</label>
                    <textarea class="w-full px-3 py-2 text-gray-700 border rounded-lg focus:outline-none" v-model="form.content" rows="4"></textarea>                    
                  </div>
                <div class="col-span-6 sm:col-span-4">
                    <label class="block text-sm font-medium text-gray-700">Seleccionar Categoria:</label>
                     <select class="w-full border bg-white rounded px-3 py-2 outline-none" v-model="form.category_id" >
                        <option class="py-1" v-for="categories in categories" :key="categories.id" :value="categories.id">
                          {{ categories.name }}
                        </option>
                    </select>
                  </div>
                  <div class="col-span-6 sm:col-span-4">
                    <label class="block text-sm font-medium text-gray-700">Seleccionar Status:</label>
                    <div class="flex items-center mb-2 mr-4">
                        <input type="radio" id="radio-example-1" name="radio" class="h-4 w-4 text-gray-700 px-3 py-3 border rounded mr-2" :value=1 v-model="form.status">
                        <label for="radio-example-1" class="text-gray-600">Publicado</label>
                    </div>
                    <div class="flex items-center mb-2">
                        <input type="radio" id="radio-example-2" name="radio" class="h-4 w-4 text-gray-700 px-3 py-3 border rounded mr-2" :value=2 v-model="form.status"> 
                        <label for="radio-example-2" class="text-gray-600">Borrador</label>
                    </div>
                    <div class="flex items-center mb-2">
                        <input type="radio" id="radio-example-2" name="radio" class="h-4 w-4 text-gray-700 px-3 py-3 border rounded mr-2" :value=3 v-model="form.status">
                        <label for="radio-example-2" class="text-gray-600">Inactivo</label>
                    </div>
                  </div>
                </div>
              </div>
              <div class="px-4 py-3 bg-gray-50 text-right sm:px-6">
                <button type="submit" class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                  Guardar
                </button>
              </div>
            </div>
          </form>
        </div>
    </div>
  </app-layout>
</template>
<script>
import AppLayout from "@/Layouts/AppLayout";
export default {
  components: {
    AppLayout,
  },
  props: ["posts", "categories"],
  data() {
    return {
      form: {
        title: this.$props.posts.title,
        description: this.$props.posts.description,
        content: this.$props.posts.content,
        category_id: this.$props.posts.category_id,
        status: this.$props.posts.status,
      },
    };
  },
  methods: {
    submit() {
      this.$inertia.put(
        route("posts.update", this.$props.posts.id),
        this.form
      );
    },
  },
};
</script>