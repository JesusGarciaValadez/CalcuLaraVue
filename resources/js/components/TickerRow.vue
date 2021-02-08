<template>
    <li class="list-none relative py-2 border-b border-dashed border-gray-800 w-full flex flex-row align-center justify-end">
        <p class="block">
            <sup class="font-base text-xs align-top">{{ row.operation }}</sup>
            {{ row.result }}
        </p>
        <button class="align-baseline items-center px-2 ml-2 border border-red-500 rounded-full inline-block text-red-800 font-normal cursor-pointer focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-red-500">×</button>
    </li>
</template>

<script>
export default {
    name: 'tickerRow',
    props: ['row'],
}
</script>

<style scoped>

</style>
