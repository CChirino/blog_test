<template>
  <app-layout>
    <div class="bg-white shadow">
          <h3 class="text-xl pt-3 pb-3 text-center">Crear categorias</h3>
    </div>
    <div class="relative flex items-top justify-center md:max-h-screen lg:items-center lg:pt-0" > 
    <div class="mt-5 md:mt-0 md:col-span-2 ">
          <form action="#" method="POST" @submit.prevent="submit" class=" mt-8 mb-8 bg-white overflow-hidden shadow md:rounded-lg">
            <div class="shadow overflow-hidden sm:rounded-md">
              <div class="px-4 py-5  bg-white sm:p-6">
                <div class="grid grid-cols-6 gap-6">
                  <div class="col-span-6 sm:col-span-4">
                    <label class="block text-sm font-medium text-gray-700">Nombre de Categoria:</label>
                    <input type="text" name="name" id="name" autocomplete="text" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md" v-model="form.name" />
                  </div>
                  <div class="col-span-6 sm:col-span-4">
                    <label for="email_address" class="block text-sm font-medium text-gray-700">Slug:</label>
                    <input type="text" name="email_address" id="email_address" autocomplete="email" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md" v-model="form.slug" />
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
  props: ["categories"],
  data() {
    return {
      form: {
        name: this.$props.categories.name,
        slug: this.$props.categories.slug,
      },
    };
  },
  methods: {
    submit() {
      this.$inertia.put(
        route("categories.update", this.$props.categories.id),
        this.form
      );
    },
  },
};
</script>