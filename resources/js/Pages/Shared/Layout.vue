<template>
    <div class="h-screen flex justify-center items-center p-2">
        <main class="grid grid-cols-6 grid-rows-5 w-2/3 h-full rounded-lg shadow-2xl">
            <!-- nav -->
            <Nav/>
            <!-- slot per render dei diversi contenuti -->
            <div class="col-span-4 row-span-5 bg-red-600 rounded-tr-lg p-5">
                <slot/>
            </div>
            <!-- footer -->
            <footer class="col-span-4 row-span-1 bg-green-400 col-start-3 col-end-7 rounded-br-lg p-5">
              sono il footer
            </footer>
        </main>
    </div>
</template>

<script>
import Nav from '../Shared/Nav.vue';
export default {
    components : {
        Nav,
    }
}
</script>

<style>

</style>
