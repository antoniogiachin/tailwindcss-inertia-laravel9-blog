<template>
    <div>
        <!-- header -->
        <header>
            <Nav/>
        </header>
        <!-- slot per render dei diversi contenuti -->
        <div class="container mx-auto py-10">
            <slot/>
        </div>
        <!-- footer -->
        <footer>
          sono il footer
        </footer>
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
