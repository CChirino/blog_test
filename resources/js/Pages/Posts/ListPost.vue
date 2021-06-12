<template>
  <app-layout>
    <div class="">
      <div class="bg-white pt-5 pb-5 shadow">
        <div  class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between h-16">
          <h3 class="text-lg pt-5 pb-5 flex">Lista de Articulos</h3>
          <div class="flex" >
            <inertia-link :href="route('posts.create')" > 
          <button class="bg-green-400 hover:bg-green-700 text-white font-bold py-2 px-4 rounded-full mt-4 mb-4">
              Crear Articulo
          </button>
            </inertia-link>
          </div>
        </div>
        </div>
      </div>
    <div class="relative flex items-top justify-center md:max-h-screen lg:items-center lg:pt-0">
      <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
        <div class="py-2 align-middle inline-block max-w-full sm:px-6 lg:px-8">
          <div class="shadow overflow-hidden border-b border-gray-200 md:rounded-lg mt-8 mb-8 bg-white overflow-hidden shadow md:rounded-lg">
            <table class="min-w-full divide-y divide-gray-200">
              <thead class="bg-gray-50">
                <tr>
                  <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                    Imagen Principal
                  </th>
                  <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                    Descripcion
                  </th>
                 <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                    Categorias
                  </th>
                  <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                    Fecha de Creacion
                  </th>
                  <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                    Fecha de Actualizacion
                  </th>
                  <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                    Transacciones
                  </th>
                </tr>
              </thead>
              <tbody class="bg-white divide-y divide-gray-200">
                <tr v-for="posts in posts" :key="posts.id">
                  <td class="pt-4 pb-4 pr-2 pl-2">
                      <img width="160" :src="'http://127.0.0.1:8000/storage/articles/' + posts.file">
                  </td>
                  <td class="px-6 py-4 whitespace-nowrap">
                    <div class="flex items-center">
                      <div class="ml-4">
                        <div class="text-sm font-medium text-gray-900">
                          {{ posts.title }}
                        </div>
                      </div>
                    </div>
                  </td>
                  <td class="px-6 py-4 whitespace-nowrap">
                    <div class="text-sm text-gray-900">{{ posts.name }}</div>
                  </td>
                  <td class="px-6 py-4 whitespace-nowrap">
                    <div class="text-sm text-gray-900">{{ posts.created_at }}</div>
                  </td>
                  <td class="px-6 py-4 whitespace-nowrap">
                    <div class="text-sm text-gray-900">{{ posts.updated_at }}</div>
                  </td>

                  <td class="px-6 py-4 whitespace-nowrap">
                    <inertia-link :href="route('posts.edit', posts.id)" class="pl-2 pr-2" > 
                                Editar
                    </inertia-link>
                      <!-- <TrashIcon class="h-5 w-5"  /> -->
                    <inertia-link
                      class="pl-2 pr-2 " 
                      method="delete"
                      :href="route('posts.destroy', posts.id)">
                      Borrar
                    </inertia-link>
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>

    </div>
  </app-layout>
</template>

<script>

import AppLayout from "@/Layouts/AppLayout";
export default {
    props: {
    posts: Array,
  },
    components: {
    AppLayout,
  },
}
</script>