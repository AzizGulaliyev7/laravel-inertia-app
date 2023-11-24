<script>
import {defineComponent} from 'vue'

export default defineComponent({
    name: "Show",

    props: {
        user: Object
    }
})
</script>

<template>
    <div class="border-b border-gray-100">
        <Link href="/users" class="text-blue-500 hover:underline">Back</Link>
    </div>

    <div class="mt-4">
        <h1 class="text-2xl font-bold"> {{ user.data.name }} </h1>
        <div class="mt-2">{{ user.data.email }}</div>
    </div>
</template>

<style scoped>

</style>
