<script>
    import NavLink from "./NavLink.vue";

    export default {
        components: {
            NavLink
        }
    }
</script>

<template>
    <nav>
        <ul class="flex space-x-6 list-inside">
            <li>
                <NavLink href="/" :active="$page.component === 'Home'">
                    Home
                </NavLink>
            </li>

            <li>
                <NavLink href="/users" :active="$page.component === 'Users/Index'">
                    Users
                </NavLink>
            </li>

            <li>
                <NavLink href="/threads" :active="$page.component === 'Threads/Index'">
                    Threads
                </NavLink>
            </li>

            <li>
                <NavLink href="/settings" :active="$page.component === 'Settings'">
                    Settings
                </NavLink>
            </li>

            <li>
                <NavLink href="/logout" method="post">
                    Log out
                </NavLink>
            </li>
        </ul>
    </nav>
</template>

<style scoped>

</style>
