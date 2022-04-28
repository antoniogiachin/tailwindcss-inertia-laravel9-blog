<template>
    <div class="container mx-auto py-10">
        <div class="flex w-1/3 mx-auto justify-around items-center">
            <h1 class="text-5xl ">Dashboard</h1>
            <p class=" mt-3">Bentornato {{ $page.props.auth.user.username }}</p>
        </div>
        <div class="w-2/3 my-10 mx-auto border-2 border-blue-400 rounded-lg bg-cyan-500">
            <ul class="flex justify-between px-5 py-1">
                <li>
                    <Link href="/" class="text-zinc-500 hover:underline hover:text-black">Torna alla home</Link>
                </li>
                <li>
                    <Link href="/admin/posts" class="text-zinc-500 hover:underline hover:text-black">Gestisci i Post</Link>
                </li>
                <li>
                    <Link href="/" class="text-zinc-500 hover:underline hover:text-black">Gestisci il tuo profilo</Link>
                </li>
            </ul>
        </div>
        <slot/>
    </div>

</template>

<script>
export default {

}
</script>

<style>

</style>
