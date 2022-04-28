<template>

    <div class="flex space-x-5">
        <Link href="/admin/posts/create" class="border-2 rounded-2xl border-slate-500 hover:bg-slate-500 hover:border-gray-200 hover:text-gray-200 text-black px-4 py-1">Crea nuovo post</Link>
        <Link href="/admin/categories/create" class="border-2 rounded-2xl border-slate-500 hover:bg-slate-500 hover:border-gray-200 hover:text-gray-200 text-black px-4 py-1">Crea nuova Categoria</Link>
    </div>

    <div class="container mx-auto my-10">

        <div class="flex flex-col">
            <div class="overflow-x-auto sm:-mx-6 lg:-mx-8">
                <div class="py-2 inline-block min-w-full sm:px-6 lg:px-8">
                    <div class="overflow-hidden">
                        <table class="min-w-full">
                            <!-- head -->
                        <thead class="border-b">
                            <tr>
                                <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-left">
                                    ID
                                </th>
                                <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-left">
                                    Nome
                                </th>
                                <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-left">
                                    Slug
                                </th>
                                <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-left">
                                    Azioni
                                </th>
                            </tr>
                        </thead>
                        <!-- body -->
                        <tbody>

                            <tr class="border-b" v-for="(category,index) in categories.data" :key="index">
                                <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">
                                    {{ category.id }}
                                </td>
                                <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                                    {{ category.name }}
                                </td>
                                <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                                {{ category.slug }}
                                </td>
                                <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap flex space-x-2">
                                    <Link :href="'/admin/categories/' + category.id" class="text-blue-500 hover:underline ">Vedi</Link>
                                    <Link :href="'/admin/categories/' + category.id  + '/edit'" class="text-yellow-500 hover:underline ">Modifica</Link>
                                </td>
                            </tr>

                        </tbody>
                        </table>
                    </div>
                </div>
            </div>

            <div class="flex space-x-10 justify-center mt-10">
                <Component :is="link.url ? 'Link' : 'span'" :class="{'text-gray-500' : ! link.url, 'font-bold' : link.active }" v-for="(link,index) in categories.links" :key="index" :href="link.url" v-html="link.label"></Component>
            </div>
        </div>

    </div>
</template>

<script>
import DashLayout from '../../Shared/DashLayout.vue';
export default {
    layout: DashLayout,
    props: {
        categories: Array,
    },

}
</script>

<style>

</style>
