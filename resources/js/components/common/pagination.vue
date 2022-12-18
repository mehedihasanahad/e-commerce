<template>
    <div>
        <nav aria-label="Page navigation example">
            <ul class="inline-flex -space-x-px">
                <li>
                    <button
                        :class="[
                            'py-2',
                            'px-3',
                            'ml-0',
                            'leading-tight',
                            'text-gray-500',
                            'bg-white',
                            'rounded-l-lg',
                            'border',
                            'border-gray-300',
                            'hover:bg-gray-100',
                            'hover:text-gray-700',
                            'dark:bg-gray-800',
                            'dark:border-gray-700',
                            'dark:text-gray-400',
                            'dark:hover:bg-gray-700',
                            'dark:hover:text-white',
                            ' select-none',
                            paginateDetails.current_page === 1
                                ? 'pointer-events-none opacity-50'
                                : '',
                        ]"
                        @click="getClickedBtn(paginateDetails.current_page - 1)"
                    >
                        Previous
                    </button>
                </li>
                <li v-for="(page, i) in paginateDetails.last_page" :key="i">
                    <button
                        :class="[
                            'py-2',
                            'px-3',
                            'ml-0',
                            'leading-tight',
                            'text-gray-500',
                            'bg-white',
                            'border',
                            'border-gray-300',
                            'hover:bg-gray-100',
                            'hover:text-gray-700',
                            'dark:bg-gray-800',
                            'dark:border-gray-700',
                            'dark:text-gray-400',
                            'dark:hover:bg-gray-700',
                            'dark:hover:text-white',
                            ' select-none',
                        ]"
                        @click="getClickedBtn($event)"
                    >
                        {{ i + 1 }}
                    </button>
                </li>
                <li>
                    <button
                        :class="[
                            'py-2',
                            'px-3',
                            'ml-0',
                            'leading-tight',
                            'text-gray-500',
                            'bg-white',
                            'rounded-r-lg',
                            'border',
                            'border-gray-300',
                            'hover:bg-gray-100',
                            'hover:text-gray-700',
                            'dark:bg-gray-800',
                            'dark:border-gray-700',
                            'dark:text-gray-400',
                            'dark:hover:bg-gray-700',
                            'dark:hover:text-white',
                            ' select-none',
                            paginateDetails.last_page === currentPage
                                ? 'pointer-events-none opacity-50'
                                : '',
                        ]"
                        @click="getClickedBtn(paginateDetails.current_page + 1)"
                    >
                        Next
                    </button>
                </li>
            </ul>
        </nav>
    </div>
</template>

<script>
export default {
    props: {
        paginateDetails: {
            type: Object,
        },
    },
    data() {
        return {
            currentPage: 1,
        };
    },
    methods: {
        getClickedBtn(event) {
            const currentpage =
                typeof event !== "number"
                    ? event.currentTarget.textContent
                    : event;
            this.currentPage = currentpage;
            this.$emit("onChangePage", currentpage);
        },
    },
};
</script>
