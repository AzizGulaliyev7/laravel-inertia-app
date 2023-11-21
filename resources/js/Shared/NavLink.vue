<script>
import {Link} from "@inertiajs/inertia-vue3";

export default {
    name: "NavLink",
    components: {Link},

    props: {
        active: Boolean
    }
}
</script>

<template>
    <Link
        class="text-black hover:underline"
        :class="{ 'font-bold underline': active }">
        <slot/>
    </Link>
</template>

<style scoped>

</style>
