<template>
    <div>
        <form @submit="formSubmit($event)">
            <div>
                <div class="flex justify-between">
                    <h1 class="font-bold text-2xl">Create Category</h1>
                    <button
                        class="bg-yellow-400 text-sm font-bold py-1.5 px-2 active:shadow-lg hover:bg-yellow-300"
                    >
                        Save
                    </button>
                </div>
                <div class="grid grid-cols-1 lg:grid-cols-3 gap-6 mt-4">
                    <div class="lg:col-span-2 flex flex-col gap-y-6">
                        <!-- part-1 -->
                        <div class="dashboard-container">
                            <div class="font-bold text-lg mb-4">
                                Basic information
                            </div>
                            <div class="child:mt-4">
                                <div>
                                    <label
                                        for="name"
                                        class="block text-sm font-bold mb-1"
                                        >Name</label
                                    >
                                    <input
                                        type="text"
                                        id="name"
                                        class="focus:outline-yellow-500/30 py-1.5 px-2 w-full border border-gray-300 text-sm"
                                        v-model="category.name"
                                        required
                                    />
                                </div>

                                <div>
                                    <label
                                        for="des"
                                        class="block text-sm font-bold mb-1"
                                        >Description</label
                                    >
                                    <VueEditor
                                        id="des"
                                        v-model="category.description"
                                    />
                                </div>
                            </div>
                        </div>
                        <!-- part-2 -->
                        <div class="dashboard-container">
                            <div class="font-bold text-lg mb-4">
                                Search engine optimization
                            </div>
                            <p class="text-sm text-gray-500">
                                Provide information that will help improve the
                                snippet and bring your category to the top of
                                search engines.
                            </p>
                            <div class="child:mt-4">
                                <div>
                                    <label
                                        for="title"
                                        class="block text-sm font-bold mb-1"
                                        >Page title</label
                                    >
                                    <input
                                        type="text"
                                        id="title"
                                        class="focus:outline-yellow-500/30 py-1.5 px-2 w-full border border-gray-300 text-sm"
                                        v-model="category.seoPageTitle"
                                        required
                                    />
                                </div>

                                <div>
                                    <label
                                        for="m-des"
                                        class="block text-sm font-bold mb-1"
                                        >Meta description</label
                                    >
                                    <textarea
                                        id="m-des"
                                        class="focus:outline-yellow-500/30 py-1.5 px-2 w-full border border-gray-300 text-sm"
                                        v-model="category.seoMetaDescription"
                                        required
                                    ></textarea>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="h-min flex flex-col gap-y-6">
                        <div class="dashboard-container">
                            <div class="font-bold text-lg mb-4">Visibility</div>
                            <div class="flex items-center mb-4">
                                <input
                                    id="publish"
                                    type="radio"
                                    value="publish"
                                    v-model="category.visibility"
                                    name="publish-radio"
                                    class="w-4 h-4 text-yellow-600 bg-gray-100 border-gray-300"
                                    checked
                                    required
                                />
                                <label
                                    for="publish"
                                    class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300"
                                    >Publish</label
                                >
                            </div>
                            <div class="flex items-center mb-4">
                                <input
                                    id="hidden"
                                    type="radio"
                                    value="hidden"
                                    v-model="category.visibility"
                                    name="publish-radio"
                                    class="w-4 h-4 text-yellow-600 bg-gray-100 border-gray-300"
                                />
                                <label
                                    for="hidden"
                                    class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300"
                                    >Hidden</label
                                >
                            </div>
                        </div>

                        <div class="dashboard-container z-10">
                            <div class="font-bold text-lg mb-4">
                                Parent Category
                            </div>
                            <div>
                                <v-select
                                    label="name"
                                    v-model="category.parentCategory"
                                    :options="options"
                                ></v-select>
                                <p class="text-xs text-gray-500">
                                    Select a category that will be the parent of
                                    the current one.
                                </p>
                            </div>
                        </div>

                        <div class="dashboard-container">
                            <div class="font-bold text-lg mb-4">Image</div>
                            <label for="imageDisplay" class="cursor-pointer">
                                <div
                                    class="relative w-full h-64 border flex justify-center items-center hover:bg-gray-200/30"
                                >
                                    <div
                                        v-if="categoryImg"
                                        class="w-full h-64 hover-wrapper:flex"
                                    >
                                        <img
                                            class="w-full h-64 object-cover"
                                            :src="categoryImg"
                                        />
                                        <span
                                            class="absolute inset-0 w-full h-64 bg-gray-200/30 hidden justify-center items-center cover-wrapper"
                                        >
                                            <i
                                                class="fa-solid fa-cloud-arrow-up text-[50px]"
                                            ></i>
                                        </span>
                                    </div>
                                    <i
                                        v-else
                                        class="fa-solid fa-cloud-arrow-up text-[50px]"
                                    ></i>
                                </div>
                            </label>
                            <input
                                type="file"
                                class="opacity-0 pointer-events-none"
                                name="categoryImg"
                                id="imageDisplay"
                                @change="getFile"
                                required
                            />
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
</template>

<script>
import { VueEditor } from "vue2-editor/dist/vue2-editor.core.js";
export default {
    components: { VueEditor },
    data() {
        return {
            category: {
                name: "asdfasdf",
                description: "<h1>fine</h1>",
                visibility: null,
                seoMetaDescription: null,
                seoPageTitle: null,
                image: null,
                parentCategory: ["JavaScript", "Vue.js"],
            },
            categoryImg: null,
            options: [
                { name: "Vue.js", language: "JavaScript" },
                { name: "Rails", language: "Ruby" },
                { name: "Sinatra", language: "Ruby" },
                { name: "Laravel", language: "PHP" },
                { name: "Phoenix", language: "Elixir" },
            ],
        };
    },
    methods: {
        getFile(event) {
            this.category.image = event.target.files[0];
            this.categoryImg = URL.createObjectURL(event.target.files[0]);
        },
        formSubmit(e) {
            e.preventDefault();
            const formData = commonFunction.formdata(this.category);
            console.log(formData);
        },
    },
};
</script>

<style lang="css">
@import "~vue2-editor/dist/vue2-editor.css";

/* Import the Quill styles you want */
@import "~quill/dist/quill.core.css";
@import "~quill/dist/quill.bubble.css";
@import "~quill/dist/quill.snow.css";
</style>
