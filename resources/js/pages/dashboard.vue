<template>
    <div id="dashboard">
        <h1 class="font-bold text-2xl">Dashboard</h1>
        <div class="sm:grid grid-cols-3 gap-x-6 mt-6 child:mb-3">
            <Card/>
            <Card/>
            <Card/>
        </div>
        <div class="sm:grid grid-cols-3 gap-x-6 mt-6 child:mb-3">
            <Report class=" col-span-2" title="Income statistics">
                <canvas id="incomeChart"></canvas>
            </Report>
            <Report title="Category statistics">
                <canvas id="productChart"></canvas>
            </Report>
        </div>
        <div>
            <Report title="Recent orders">
                <div class="overflow-x-auto relative mt-2">
                    <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400 child:text-gray-500">
                            <tr>
                                <th scope="col" class="py-3 px-6">
                                    No.
                                </th>
                                <th scope="col" class="py-3 px-6">
                                    Status
                                </th>
                                <th scope="col" class="py-3 px-6">
                                    Date
                                </th>
                                <th scope="col" class="py-3 px-6">
                                    Total
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr v-for="(order, index) in orders" :key="index" class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                                <th scope="row" class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                    {{order.no}}
                                </th>
                                <td class="py-4 px-6">
                                    <!-- status bar -->
                                    <div :class="['rounded', 'px-1.5', 'py-1',
                                    {'bg-green-100': (order.status == 1), 'bg-sky-100': (order.status == 2), 'bg-red-100': (order.status == 3)},
                                    {'text-green-800': (order.status == 1), 'text-sky-800': (order.status == 2), 'text-red-800': (order.status == 3)},
                                    'inline-block', 'text-sm']">
                                        {{statusChecker(order.status)}}
                                    </div>
                                </td>
                                <td class="py-4 px-6">
                                    {{order.date}}
                                </td>
                                <td class="py-4 px-6">
                                    {{order.total}}
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </Report>
        </div>
    </div>
</template>


<script>
window.dateObj = new Date();
import Card from '../components/dashboard/card.vue';
import Report from '../components/dashboard/report.vue';
export default {
    components: {
        Card,
        Report
    },
    data() {
        return {
            // dummy orders data
            orders: [
                {
                    'no': '#00745',
                    'status': 1,
                    'date': dateObj.getDate() + '-' + (dateObj.getMonth()+1) + '-' + dateObj.getFullYear(),
                    'total': '1500tk'
                },
                {
                    'no': '#00435',
                    'status': 2,
                    'date': dateObj.getDate() + '-' + (dateObj.getMonth()+1) + '-' + dateObj.getFullYear(),
                    'total': '400tk'
                },
                {
                    'no': '#00643',
                    'status': 3,
                    'date': dateObj.getDate() + '-' + (dateObj.getMonth()+1) + '-' + dateObj.getFullYear(),
                    'total': '1600tk'
                }
            ]
        }
    },
    methods: {
        statusChecker(status) {
            if (status == 1) return 'Completed';
            else if (status == 2) return 'Pending';
            else if (status == 3) return 'Cancel';  
        }
    },
    mounted() {
        // income chart
        const labels = ['Jan','Feb','Mar','Apr','May','Jun','Jul','Aug','Sep','Oct','Nov','Dec'];
        const data = {
            labels: labels,
            datasets: [{
                label: '',
                data: [65, 59, 80, 81, 56, 55, 40, 20, 40, 105, 50, 77],
                backgroundColor: [
                    'rgba(255, 99, 132, 0.2)',
                    'rgba(255, 159, 64, 0.2)',
                    'rgba(255, 205, 86, 0.2)',
                    'rgba(75, 192, 192, 0.2)',
                    'rgba(54, 162, 235, 0.2)',
                    'rgba(153, 102, 255, 0.2)',
                    'rgba(201, 203, 207, 0.2)'
                ],
                borderColor: [
                    'rgb(255, 99, 132)',
                    'rgb(255, 159, 64)',
                    'rgb(255, 205, 86)',
                    'rgb(75, 192, 192)',
                    'rgb(54, 162, 235)',
                    'rgb(153, 102, 255)',
                    'rgb(201, 203, 207)'
                ],
                borderWidth: 1
            }]
        };
        const config = {
            type: 'bar',
            data: data,
            options: {
                scales: {
                    y: { beginAtZero: true }
                },
                plugins: { legend: { display: false } }
            },
        };
        const myChart = new chart(
            document.getElementById('incomeChart'),
            config
        );

        // product chart
        const ProductChartData = {
            labels: [
                'Mobile',
                'TV',
                'Fridge'
            ],
            datasets: [{
                label: 'My First Dataset',
                data: [300, 50, 100],
                backgroundColor: [
                'rgb(255, 99, 132)',
                'rgb(54, 162, 235)',
                'rgb(255, 205, 86)'
                ],
                hoverOffset: 4
            }]
        };
        const productChartConfig = {
            type: 'doughnut',
            data: ProductChartData,
            options: {
                plugins: { legend: { display: false } }
            }
        };
        const productChart = new chart(
            document.getElementById('productChart'),
            productChartConfig
        );
    }
}
</script>
