<template>
    <nav class=" col-span-2 row-span-5 row-start-1 row-end-7 flex-col bg-slate-800 p-5 rounded-l text-gray-100 ">
        <div class="nav-left">
            <h1 class="text-2xl text-center mb-10">Blog Inertia</h1>
        </div>
        <div class="nav-right">
            <ul class="flex-col space-y-3">
                <li>
                    <Link class="p-2 hover:underline" href="/">Home</Link>
                </li>
                <li>
                    <Link class="p-2 hover:underline" href="/post">Post</Link>
                </li>
                <li>
                    <Link class="p-2 hover:underline" href="/contact">Contattaci</Link>
                </li>
                <li>
                    <Link class="p-2 hover:underline" href="admin/dashboard">Dashboard</Link>
                </li>
                <li class="absolute bottom-5">
                    <Link class="p-2 hover:underline" href="/logout" method="post" as="button" >Log Out</Link>
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
