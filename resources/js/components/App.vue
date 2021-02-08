<template>
    <div class="relative max-w-xl mx-auto" v-cloak>
        <Ornament class="absolute left-full transform translate-x-1/2" />
        <Ornament class="absolute right-full bottom-0 transform -translate-x-1/2" />

        <TitleSection>
            <template v-slot:title>Calculator</template>
            <template v-slot:default>Please, select the operation that you want to make.</template>
        </TitleSection>

        <Calculator result="result"
                    :getResult="getResult"
                    :deleteOperations="deleteOperations"
        />

        <TickerTape result="result"
                    :operations="operations"
                    :deleteOperation="deleteOperation"
                    :getMostRecentOperations="getMostRecentOperations"
        />
    </div>
</template>

<script>

import Calculator from "./Calculator"
import TitleSection from "./calculator/TitleSection"
import Ornament from "./calculator/Ornament"
import TickerTape from "./calculator/TickerTape"
import useGetResult from "../composables/useGetResult"
import useRecentOperations from "../composables/useRecentOperations"
import useDeleteOperation from "../composables/useDeleteOperation"

export default {
    name: "App",
    components: {
        Calculator,
        Ornament,
        TickerTape,
        TitleSection,
    },
    setup(props) {
        const { result, getResult, operation } = useGetResult()
        const { operations, getMostRecentOperations } = useRecentOperations(result)
        const { operationDeleted, deleteOperation, deleteOperations } = useDeleteOperation(getMostRecentOperations)

        return {
            result,
            getResult,
            operations,
            getMostRecentOperations,
            operationDeleted,
            deleteOperation,
            deleteOperations,
        }
    },
}
</script>

<style scoped>

</style>
