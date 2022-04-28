<template>
    <div>
        <h1 class="text-2xl text-center mb-10">Registrati</h1>
        <div class="flex items-center justify-center my-10">
            <form class="w-1/3 flex-col" @submit.prevent='loginUser()'>
            <!-- name -->
            <div>
                <label class="block mb-2" for="name">Nome</label>
                <input required class="border-0 rounded-lg p-2" placeholder="Inserisci il tuo nome" type="name" id="name" name="name" v-model="form.name">
                <div v-if="form.errors.name">{{ form.errors.name }}</div>
            </div>
            <!-- email -->
            <div>
                <label class="block my-2" for="email">Email</label>
                <input required class="border-0 rounded-lg p-2" placeholder="Inserisci la tua email" type="email" id="email" name="email" v-model="form.email">
                <div v-if="form.errors.email">{{ form.errors.email }}</div>
            </div>
            <!-- password -->
            <div>
                <label class="block my-2" for="password">Password</label>
                <input required class="border-0 rounded-lg p-2" placeholder="Inserisci la tua password" type="password" id="password" name="password" v-model="form.password">
                <div v-if="form.errors.password">{{ form.errors.password }}</div>
            </div>
            <!-- submit -->
            <button type="submit" class="px-4 py-2 hover:bg-slate-400 mt-6 border-2 border-slate-300 rounded-lg" :disabled="form.processing">Login</button>
            </form>
        </div>
    </div>
</template>

<script>
import Layout from '../Shared/Layout.vue';
export default {
    layout: Layout,
    data() {
        return {
            form: this.$inertia.form({
                name: '',
                email: '',
                password: '',
                remember: false,
            })
        }
    },
    methods: {
        loginUser() {
            this.form.post('/register',
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
