<template>
  <app-layout>
    <div class="">
      <div class="bg-white pt-5 pb-5 shadow">
        <div  class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between h-16">
          <h3 class="text-lg pt-5 pb-5 flex">Lista de categorias</h3>
          <div class="flex" >
            <inertia-link :href="route('categories.create')" > 
          <button class="bg-green-400 hover:bg-green-700 text-white font-bold py-2 px-4 rounded-full mt-4 mb-4">
              Crear Categoria
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
                    Nombre de Categoria
                  </th>
                  <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                    Slug
                  </th>
                  <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                    Transacciones
                  </th>
                </tr>
              </thead>
              <tbody class="bg-white divide-y divide-gray-200">
                <tr v-for="category in categories" :key="category.id">
                  <td class="px-6 py-4 whitespace-nowrap">
                    <div class="flex items-center">
                      <div class="ml-4">
                        <div class="text-sm font-medium text-gray-900">
                          {{ category.name }}
                        </div>
                      </div>
                    </div>
                  </td>
                  <td class="px-6 py-4 whitespace-nowrap">
                    <div class="text-sm text-gray-900">{{ category.slug }}</div>
                  </td>
                  <td class="px-10 py-10 pl-6 pr-6  whitespace-nowrap text-sm text-gray-500 inline-block text">
                    <inertia-link :href="route('categories.edit', category.id)" class="pl-2 pr-2" > 
                                Editar
                    </inertia-link>
                      <!-- <TrashIcon class="h-5 w-5"  /> -->
                    <inertia-link
                      class="pl-2 pr-2" 
                      method="delete"
                      :href="route('categories.destroy', category.id)">
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
import { TrashIcon } from '@heroicons/vue/outline'

export default {
    props: {
    categories: Array,
  },
    components: {
    AppLayout,
    TrashIcon,
  },
}
</script>