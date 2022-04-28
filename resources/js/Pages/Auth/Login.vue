<template>
    <div class="flex-col">
        <h1 class="text-2xl text-center mb-10">Login</h1>
        <div class="flex items-center justify-center mt-20">
            <form class="w-1/3 flex-col" @submit.prevent='loginUser()'>
            <!-- email -->
            <div>
                <label class="block mb-2" for="email">Email</label>
                <input required class="border-0 rounded-lg p-2" placeholder="Inserisci la tua email" type="email" id="email" name="email" v-model="form.email">
                <div v-if="form.errors.email">{{ form.errors.email }}</div>
            </div>
            <!-- password -->
            <div>
                <label class="block my-2" for="password">Password</label>
                <input required class="border-0 rounded-lg p-2" placeholder="Inserisci la tua password" type="password" id="password" name="password" v-model="form.password">
                <div v-if="form.errors.password">{{ form.errors.password }}</div>
            </div>
            <!-- remember me -->
            <div class="block my-2"><input type="checkbox" v-model="form.remember"> Remember Me</div>
            <!-- submit -->
            <button type="submit" class="px-4 py-2 hover:bg-slate-400 mt-3 border-2 border-slate-300 rounded-lg" :disabled="form.processing">Login</button>
            </form>
        </div>
        <h3 class="text-md text-center mt-5">Non sei ancora registrato? -> <Link href="register" class="text-blue-800 hover:underline">Clicca qui</Link></h3>
    </div>
</template>

<script>
import Layout from '../Shared/Layout.vue';
export default {
    layout: Layout,
    data() {
        return {
            form: this.$inertia.form({
                email: '',
                password: '',
                remember: false,
            })
        }
    },
    methods: {
        loginUser() {
            this.form.post('/login',
                {
                    preserveScroll: true,
                    onSuccess: () => form.reset('password'),
                }
            )
        }
    },
}
</script>

<style>

</style>
