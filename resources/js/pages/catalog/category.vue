<template>
    <div id="category">
        <div class="flex justify-between">
            <h1 class="font-bold text-2xl">Category</h1>
            <router-link to="/category/create" class="bg-yellow-400 text-sm font-bold py-1.5 px-2 active:shadow-lg hover:bg-yellow-300">New Category</router-link>
        </div>

        <div id="data-table" class="mt-4 py-2 bg-white shadow-md">
            <div class="search-bar px-2 relative">
                <div class="absolute p-2.5 text-gray-400">
                    <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor"><path d="M16.243 14.828C16.243 14.828 16.047 15.308 15.701 15.654C15.34 16.015 14.828 16.242 14.828 16.242L10.321 11.736C9.247 12.522 7.933 13 6.5 13C2.91 13 0 10.09 0 6.5C0 2.91 2.91 0 6.5 0C10.09 0 13 2.91 13 6.5C13 7.933 12.522 9.247 11.736 10.321L16.243 14.828ZM6.5 2C4.015 2 2 4.015 2 6.5C2 8.985 4.015 11 6.5 11C8.985 11 11 8.985 11 6.5C11 4.015 8.985 2 6.5 2Z"></path></svg>
                </div>
                <input type="text" placeholder="search" class="w-full pl-8 pr-2 py-2 text-sm border border-slate-300 rounded focus:outline-none focus:shadow-blue-200 focus:shadow-inner">
            </div>
            <!-- table -->
            <div class="overflow-x-auto relative mt-2">
                <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                    <thead class="text-xs text-gray-700 uppercase bg-sky-100 dark:bg-gray-700 dark:text-gray-400">
                        <tr>
                            <th scope="col" class="py-3 px-6">
                                Category name
                            </th>
                            <th scope="col" class="py-3 px-6">
                                Color
                            </th>
                            <th scope="col" class="py-3 px-6">
                                Category
                            </th>
                            <th scope="col" class="py-3 px-6">
                                Price
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                            <th scope="row" class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                Apple MacBook Pro 17"
                            </th>
                            <td class="py-4 px-6">
                                Sliver
                            </td>
                            <td class="py-4 px-6">
                                Laptop
                            </td>
                            <td class="py-4 px-6">
                                $2999
                            </td>
                        </tr>
                        <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                            <th scope="row" class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                Microsoft Surface Pro
                            </th>
                            <td class="py-4 px-6">
                                White
                            </td>
                            <td class="py-4 px-6">
                                Laptop PC
                            </td>
                            <td class="py-4 px-6">
                                $1999
                            </td>
                        </tr>
                        <tr class="bg-white border-b dark:bg-gray-800">
                            <th scope="row" class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                Magic Mouse 2
                            </th>
                            <td class="py-4 px-6">
                                Black
                            </td>
                            <td class="py-4 px-6">
                                Accessories
                            </td>
                            <td class="py-4 px-6">
                                $99
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <!-- pagination -->
            <div class="mt-4 mb-2 px-2 flex flex-col items-center gap-y-3 lg:flex-row lg:justify-between">
                <nav aria-label="Page navigation example">
                    <ul class="inline-flex -space-x-px">
                        <li>
                        <a href="#" class="py-2 px-3 ml-0 leading-tight text-gray-500 bg-white rounded-l-lg border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">Previous</a>
                        </li>
                        <li>
                        <a href="#" class="py-2 px-3 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">1</a>
                        </li>
                        <li>
                        <a href="#" class="py-2 px-3 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">2</a>
                        </li>
                        <li>
                        <a href="#" aria-current="page" class="py-2 px-3 text-blue-600 bg-blue-50 border border-gray-300 hover:bg-blue-100 hover:text-blue-700 dark:border-gray-700 dark:bg-gray-700 dark:text-white">3</a>
                        </li>
                        <li>
                        <a href="#" class="py-2 px-3 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">4</a>
                        </li>
                        <li>
                        <a href="#" class="py-2 px-3 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">5</a>
                        </li>
                        <li>
                        <a href="#" class="py-2 px-3 leading-tight text-gray-500 bg-white rounded-r-lg border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">Next</a>
                        </li>
                    </ul>
                </nav>
                <div class="flex gap-x-3">
                    <p>Showing 11 to 13 of 13</p>
                    <label>/</label>
                    Rows per page
                    <select id="countries" class="bg-gray-50 border border-gray-300 outline-none  text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500">
                        <option value="16">16</option>
                        <option value="25" selected>25</option>
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
export default {}
</script>
