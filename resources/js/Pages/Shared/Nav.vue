<template>
    <nav class="flex justify-between px-6 py-2 bg-slate-800 m-2 rounded text-gray-100 ">
        <div class="nav-left">
            <h1 class="text-lg">Blog Inertia</h1>
        </div>
        <div class="nav-right">
            <ul class="flex space-x-3">
                <li>
                    <Link class="p-2 hover:underline" href="#">Post</Link>
                </li>
                <li>
                    <Link class="p-2 hover:underline" href="#">Contattaci</Link>
                </li>
                <li>
                    <Link class="p-2 hover:underline" href="#">Login</Link>
                </li>
            </ul>
        </div>
    </nav>
</template>

<script>
export default {
    name: 'Nav'
}
</script>

<style>

</style>
