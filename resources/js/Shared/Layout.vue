<script>
import {defineComponent} from 'vue'
import Nav from "./Nav.vue";
import { Head } from "@inertiajs/inertia-vue3";

export default defineComponent({
    name: "Layout",
    components: {Nav, Head},

    computed: {
        username() {
            return this.$page.props.auth.user.username
        }
    }
})
</script>

<template>
    <Head>
        <title>
            My app
        </title>

        <meta type="description" content="My app informations" head-key="description">
    </Head>

    <section class="p-6 bg-gray-200">
        <header class="flex justify-between">
            <div class="flex items-center">
                <h1 class="font-bold text-lg">
                    My app
                </h1>

                <p class="text-sm ml-4">Welcome back, {{ username }}</p>
            </div>

            <Nav>

            </Nav>
        </header>
    </section>

    <section class="p-6">
        <div class="max-w-3xl mx-auto">
            <slot/>
        </div>
    </section>
</template>

<style scoped>

</style>
