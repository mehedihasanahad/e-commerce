<template>
    <div id="category">
        <div class="flex justify-between">
            <h1 class="font-bold text-2xl">Category</h1>
            <router-link
                to="/category/create"
                class="bg-yellow-400 text-sm font-bold py-1.5 px-2 active:shadow-lg hover:bg-yellow-300"
                >New Category</router-link
            >
        </div>

        <div id="data-table" class="mt-4 py-2 bg-white shadow-md">
            <div class="search-bar px-2 relative">
                <div class="absolute p-2.5 text-gray-400">
                    <svg
                        xmlns="http://www.w3.org/2000/svg"
                        width="1em"
                        height="1em"
                        viewBox="0 0 16 16"
                        fill="currentColor"
                    >
                        <path
                            d="M16.243 14.828C16.243 14.828 16.047 15.308 15.701 15.654C15.34 16.015 14.828 16.242 14.828 16.242L10.321 11.736C9.247 12.522 7.933 13 6.5 13C2.91 13 0 10.09 0 6.5C0 2.91 2.91 0 6.5 0C10.09 0 13 2.91 13 6.5C13 7.933 12.522 9.247 11.736 10.321L16.243 14.828ZM6.5 2C4.015 2 2 4.015 2 6.5C2 8.985 4.015 11 6.5 11C8.985 11 11 8.985 11 6.5C11 4.015 8.985 2 6.5 2Z"
                        ></path>
                    </svg>
                </div>
                <input
                    type="text"
                    placeholder="search"
                    class="w-full pl-8 pr-2 py-2 text-sm border border-slate-300 rounded focus:outline-none focus:shadow-blue-200 focus:shadow-inner"
                />
            </div>
            <!-- table -->
            <div class="overflow-x-auto relative mt-2">
                <table
                    class="w-full text-sm text-left text-gray-500 dark:text-gray-400"
                >
                    <thead
                        class="text-xs text-gray-700 uppercase bg-sky-100 dark:bg-gray-700 dark:text-gray-400"
                    >
                        <tr>
                            <th scope="col" class="py-3 px-6">
                                Category Thumb
                            </th>
                            <th scope="col" class="py-3 px-6">Category name</th>
                            <th scope="col" class="py-3 px-6">
                                Category Group
                            </th>
                            <th scope="col" class="py-3 px-6">Visibility</th>
                            <th scope="col" class="py-3 px-6">Actions</th>
                        </tr>
                    </thead>
                    <tbody v-if="categories !== null && categories.length > 0">
                        <tr
                            class="bg-white border-b dark:bg-gray-800 dark:border-gray-700"
                            v-for="(category, i) in categories"
                            :key="i"
                        >
                            <td class="w-[150px]">
                                <img
                                    v-if="category.image !== null"
                                    class="w-10 h-10 object-cover ml-4"
                                    :src="
                                        '/images/uploads/category/' +
                                        category.image
                                    "
                                />
                                <img
                                    v-else
                                    class="w-10 h-10 object-cover ml-4"
                                    src="/images/default.jpg"
                                />
                            </td>
                            <td
                                scope="row"
                                class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap dark:text-white"
                            >
                                {{
                                    category.name != "null" ? category.name : ""
                                }}
                            </td>
                            <td class="py-4 px-6">
                                {{
                                    category.parentCategory != "null"
                                        ? category.parentCategory
                                        : ""
                                }}
                            </td>
                            <td class="py-4 px-6">
                                {{
                                    category.visibility != "null"
                                        ? category.visibility
                                        : ""
                                }}
                            </td>
                            <td class="py-4 px-6">
                                <div class="d-flex space-x-2">
                                    <button>
                                        <i
                                            class="fa-regular fa-pen-to-square text-blue-400"
                                        ></i>
                                    </button>
                                    <button>
                                        <i
                                            class="fa-solid fa-trash text-red-500"
                                        ></i>
                                    </button>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <!-- pagination -->
            <div
                class="mt-4 mb-2 px-2 flex flex-col items-center gap-y-3 lg:flex-row lg:justify-between"
            >
                <paginate
                    :paginateDetails="painateData"
                    @onChangePage="getCateory"
                />
                <!-- pagination details -->
                <div class="flex gap-x-3">
                    <p>Showing {{ from }} to {{ to }} of {{ total }}</p>
                    <label>/</label>
                    Rows per page
                    <select
                        id="countries"
                        class="bg-gray-50 border border-gray-300 outline-none text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500"
                        @change="getCateory(1, $event.currentTarget.value)"
                    >
                        <option value="16" selected>10</option>
                        <option value="25">25</option>
                        <option value="50">50</option>
                        <option value="75">75</option>
                        <option value="100">100</option>
                    </select>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
import paginate from "../../components/common/pagination.vue";
export default {
    components: {
        paginate,
    },
    data() {
        return {
            categories: null,
            from: 1,
            to: 10,
            total: 20,
            painateData: null,
        };
    },
    mounted() {
        this.getCateory();
    },
    methods: {
        async getCateory(page = 1, items = 10) {
            const {
                data: { data: categoryData },
            } = await APISERVICE.get(
                `admin/category?page=${page}&items=${items}`
            );
            console.log("parent", categoryData);
            this.painateData = categoryData;
            this.categories = categoryData.data;
            this.from = categoryData.from;
            this.to = categoryData.to;
            this.total = categoryData.total;
        },
    },
};
</script>
