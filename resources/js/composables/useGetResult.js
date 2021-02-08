import { ref } from 'vue'

export default function useGetResult() {
    const result = ref('')
    const operation = ref('')
    const getResult = () => {
        result.value = ''
    }

    return {
        result,
        operation,
        getResult
    }
}
