<template>
    <div>
        <button type="submit"
                class="w-full inline-flex items-center justify-center px-6 py-3 border border-transparent rounded-md shadow-sm text-base font-medium text-white font-bold bg-blue-600 hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500">
            <slot></slot>
        </button>
    </div>
</template>

<script>
export default {
    name: "Submit"
}
</script>

<style scoped>

</style>
