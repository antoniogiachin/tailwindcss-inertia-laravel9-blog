<template>
    <h1 class="text-2xl text-center">Crea il tuo post</h1>
    <form @submit.prevent="savePost()" class="w-1/3 mx-auto my-5 flex-col space-y-6">
        <!-- titolo -->
        <div>
            <label class="block mb-2" for="title">Titolo</label>
            <input required class="border-0 rounded-lg p-2 w-full" placeholder="Inserisci il titolo" type="text" id="title" name="title" v-model="form.title">
            <div class="text-red-500" v-if="form.errors.title">{{ form.errors.title }}</div>
        </div>
        <!-- autore -->
        <div>
            <label class="block mb-2" for="author">Autore</label>
            <input required class="border-0 rounded-lg p-2 w-full" placeholder="Inserisci il titolo" type="text" id="author" name="author" v-model="form.author">
            <div class="text-red-500" v-if="form.errors.author">{{ form.errors.author }}</div>
        </div>
        <!-- contenuto -->
        <div>
            <label class="block mb-2" for="content">Testo</label>
            <textarea v-model="form.content" name="content" id="content" required class="border-0 rounded-lg p-2 w-full" cols="30" rows="10"></textarea>
            <div class="text-red-500" v-if="form.errors.content">{{ form.errors.content }}</div>
        </div>
        <!-- button invio -->
        <button type="submit" class="px-4 py-2 hover:bg-cyan-500 mt-3 border-2 border-blue-400 rounded-lg" :disabled="form.processing">Salva</button>

    </form>
</template>

<script>
import DashLayout from '../../Shared/DashLayout.vue';
export default {
    layout: DashLayout,
    data() {
        return {
            form: this.$inertia.form({
                title: '',
                author: '',
                content: '',
            })
        }
    },
    methods: {
        savePost() {
            this.form.post('/admin/posts', {
                preserveScroll: true,
                preserveState: true,
            });
        }
    },
}
</script>

<style>

</style>
