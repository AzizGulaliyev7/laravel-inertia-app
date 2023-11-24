<script setup>
    import Highlight from "@/Components/Highlight.vue";

    let snippet = `
    class ExampleAgain {
            public function __construct() {
                //
            }
        }
    `.trim();
</script>

<template>
    <Head>
        <title>
            Home
        </title>

        <meta type="description" content="Home informations" head-key="description">
    </Head>
    <h2 class="text-3xl">
        Home
    </h2>

    <Highlight :code="snippet">

    </Highlight>
</template>

<style scoped>

</style>
