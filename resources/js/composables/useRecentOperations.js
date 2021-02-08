import { ref, watch, onMounted } from 'vue'

export default function useRecentOperations(result) {
    const operations = ref([])
    const getMostRecentOperations = async() => {
        const response = await axios.get('./api/operations')

        if (response.status === 200) {
            operations.value = response.data
        }
    }

    onMounted(getMostRecentOperations)
    watch(result, getMostRecentOperations)

    return {
        operations,
        getMostRecentOperations,
    }
}
