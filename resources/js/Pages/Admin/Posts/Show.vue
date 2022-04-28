<template>
  <div class="flex-col space-y-6 w-1/2 mx-auto my-5">
        <h1 class="my-3 text-center text-2xl">Stai visualizzando <span class="text-3xl fw-bold">"{{post.title}}"</span> </h1>
        <h3 class="text-lg">Scritto da: {{post.author}}</h3>
        <div>
            <h3 class="text-lg">Contenuto:</h3>
            <p class="text-md">{{post.content}}</p>
        </div>
        <!-- torna indietro  -->
        <div>
            <Link class="text-blue-500 hover:underline " href="/admin/posts">Torna indietro</Link>
        </div>
  </div>

</template>

<script>
import DashLayout from '../../Shared/DashLayout.vue';
export default {
    layout: DashLayout,
    props: {
        post: Object,
    },
}
</script>

<style>

</style>
