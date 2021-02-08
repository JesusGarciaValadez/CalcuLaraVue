import { ref } from 'vue'

export default function useGetResult() {
    const result = ref('')
    const operation = ref('')
    const getResult = () => {
        result.value = ''
    }
    const addNewOperation = async(getMostRecentOperations, event) => {
        if (event) {
            event.preventDefault()
        }
        operation.value = '4+4'
        const response = await axios.post('./api/operations', {
            operation: operation.value,
        })
        console.log(response)

        if(response.status === 201) {
            getMostRecentOperations()
        }
    }

    return {
        result,
        operation,
        getResult,
        addNewOperation
    }
}
