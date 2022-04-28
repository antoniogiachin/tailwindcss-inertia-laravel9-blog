<template>

    <Link href="/admin/posts/create" class="border-2 rounded-2xl border-slate-500 hover:bg-slate-500 hover:border-gray-200 hover:text-gray-200 text-black px-4 py-1">Crea nuovo post</Link>
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
                                Titolo
                            </th>
                            <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-left">
                                Autore
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
                        <tr class="border-b" v-for="(post,index) in posts" :key="index">
                            <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">
                                {{ post.id }}
                            </td>
                            <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                                {{ post.title }}
                            </td>
                            <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                                {{ post.author }}
                            </td>
                            <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                               {{ post.slug }}
                            </td>
                            <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap flex space-x-2">
                                <Link :href="'/admin/posts/' + post.id" class="text-blue-500 hover:underline ">Vedi</Link>
                                <Link :href="'/admin/posts/' + post.id  + '/edit'" class="text-yellow-500 hover:underline ">Modifica</Link>
                            </td>
                        </tr>

                    </tbody>
                    </table>
                </div>
                </div>
            </div>
            </div>

    </div>
</template>

<script>
import DashLayout from '../../Shared/DashLayout.vue';
export default {
    layout: DashLayout,
    props: {
        posts: Array,
    },
}
</script>

<style>

</style>
