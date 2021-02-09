<template>
    <div class="relative max-w-xl mx-auto">
        <Ornament class="absolute left-full transform translate-x-1/2" />
        <Ornament class="absolute right-full bottom-0 transform -translate-x-1/2" />

        <TitleSection>
            <template v-slot:title>Calculator</template>
            <template v-slot:default>Please, select the operation that you want to make.</template>
        </TitleSection>

        <Calculator :result="result"
                    :operation="operation"
                    :operations="operations"
                    :getResult="getResult"
                    :deleteOperations="deleteOperations"
                    :addNewOperation="addNewOperation"
                    :getMostRecentOperations="getMostRecentOperations"
                    :createOperation="createOperation"
        />

        <TickerTape result="result"
                    :operations="operations"
                    :deleteOperation="deleteOperation"
                    :getMostRecentOperations="getMostRecentOperations"
                    v-if="operations.length"
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
    setup() {
        const { result, getResult, operation, createOperation, addNewOperation } = useGetResult()
        const { operations, getMostRecentOperations } = useRecentOperations()
        const { operationDeleted, deleteOperation, deleteOperations } = useDeleteOperation(getMostRecentOperations)

        return {
            result,
            getResult,
            operation,
            createOperation,
            addNewOperation,
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
