<template>
    <LoadingComponent :props="loading" />
    <div class="col-12 xl:col-12">
        <div class="db-card">
            <div class="db-card-header">
                <h3 class="db-card-title">{{ $t('label.customer_stats') }}</h3>
                <div id="customer-range" class="cursor-pointer flex items-center gap-3">
                    <Datepicker hideInputIcon autoApply :enableTimePicker="false" utc="false"
                        @update:modelValue="customerStates" v-model="date" range :preset-ranges="presetRanges">
                        <template #yearly="{ label, range, presetDateRange }">
                            <span @click="presetDateRange(range)">{{ label }}</span>
                        </template>
                    </Datepicker>
                    <i class="lab lab-calendar lab-font-size-24 lab-color-pink"></i>
                </div>
            </div>
            <div class="db-card-body">
                <AdvertiserDashboardStatsComponent />
                <div class="xl:col-12">
                    <highcharts :options="productAchievement" ref="productAchievement"></highcharts>
                </div>
                <div class="xl:col-12">
                    <highcharts :options="dailyTrend" ref="lineCharts"></highcharts>
                </div>

                <div id="column-chart" style="display: none;"></div>
            </div>
        </div>
    </div>
</template>

<script>
import LoadingComponent from "../components/LoadingComponent";
import Datepicker from "@vuepic/vue-datepicker";
import "@vuepic/vue-datepicker/dist/main.css";
import { ref, onMounted } from 'vue';
import { endOfMonth, endOfYear, startOfMonth, startOfYear, subMonths } from 'date-fns';
import AdvertiserDashboardStatsComponent from "./AdvertiserDashboardStatsComponent";
import { Chart } from "highcharts-vue";
import Highcharts from "highcharts";
import exportingInit from "highcharts/modules/exporting";
import chartService from "../../../services/chartService";

exportingInit(Highcharts);

export default {
    name: "AdvertisersComponent",
    components: {
        LoadingComponent,
        Datepicker,
        AdvertiserDashboardStatsComponent,
        highcharts: Chart
    },
    data() {
        return {
            loading: {
                isActive: false,
            },
            date: null,
            dailyTrend: {},
            productAchievement: {},
            first_date: null,
            last_date: null,
            presetRanges: [
                { label: 'Today', range: [new Date(), new Date()] },
                { label: 'This month', range: [startOfMonth(new Date()), endOfMonth(new Date())] },
                {
                    label: 'Last month',
                    range: [startOfMonth(subMonths(new Date(), 1)), endOfMonth(subMonths(new Date(), 1))],
                },
                { label: 'This year', range: [startOfYear(new Date()), endOfYear(new Date())] },
                {
                    label: 'This year (slot)',
                    range: [startOfYear(new Date()), endOfYear(new Date())],
                    slot: 'yearly',
                },
            ],
            hcInstance: Highcharts,
            chartOptions: {
                series: [{
                    data: [1, 2, 3]
                }]
            },
            total: 0,
            dataMerch: [],
            dataAPI: [
                {
                    "total_money": 106774737,
                    "merchant_type": "000000",
                    "name": "Male",
                    "payment_count": 5090
                },
                {
                    "total_money": 27300,
                    "merchant_type": "30199",
                    "name": "Female",
                    "payment_count": 1131
                },
                {
                    "total_money": 2137435724,
                    "merchant_type": "2010",
                    "name": "Unknown",
                    "payment_count": 2689
                }

            ],
        };
    },
    mounted() {
        const date = new Date();
        const startDate = new Date(date.getFullYear(), date.getMonth(), 1);
        const endDate = new Date(date.getFullYear(), date.getMonth() + 1, 0);
        this.date = [startDate, endDate];
        this.customerStates();

    },
    methods: {
        customerStates: function (e) {
            let date = {
                first_date: '',
                last_date: '',
            };
            if (e) {
                this.first_date = e[0];
                this.last_date = e[1];
                date.first_date = e[0];
                date.last_date = e[1];
            }

            this.loading.isActive = true;
            this.$store.dispatch("dashboard/trends", date).then((res) => {
                var series = []
                var categories = []

                res.data.data.map(function (element) {
                    series.push(element.series)
                    categories.push(element.category)
                })
                this.dailyTrend = chartService.plotSingleLineAreaChat(
                    "Impressions",
                    categories,
                    series,
                    "xTitle",
                    "yTitle");
                this.loading.isActive = false;
            }).catch((err) => {
                this.loading.isActive = false;
            });

            this.$store.dispatch("dashboard/getProductCategory", date).then((res) => {
                var series = []
                var categories = []

                res.data.data.map(function (element) {
                    series.push(element.y)
                    categories.push(element.name)
                })
                this.productAchievement = chartService.plotColumnChat(
                    "Products",
                    "categories",
                    res.data.data,
                    "Product purchased in offer",
                    "Total product");
                this.loading.isActive = false;
            }).catch((err) => {
                this.loading.isActive = false;
            });
        },
        getChartData() {
            this.getDataFromAPI()
            // console.log(this.total)
            return {
                chart: {
                    plotBackgroundColor: null,
                    plotBorderWidth: null,
                    plotShadow: false,
                    type: "pie"
                },
                title: {
                    text: "<p style='font-size:20pt;'> total <br>" + this.total + "</p>",
                    align: 'center',
                    verticalAlign: 'middle',

                },
                tooltip: {
                    // /pointFormat: "{series.name}: <b>{point.percentage:.1f}%</b>",
                    useHTML: true,
                    formatter: function () {
                        //console.log(this); // just to see , what data you can access
                        return this.key + '<br>'
                            + '</b> Persentase: <b>' + this.percentage.toFixed(2) + '% </b>(' + this.point.y + ' Transaction)<br>'
                            + 'Rp.' + this.point.money;
                    }
                },
                plotOptions: {
                    pie: {
                        allowPointSelect: true,
                        cursor: "pointer",
                        dataLabels: {
                            enabled: true,
                            //format: "<b>{point.name}</b>: {point.percentage:.1f} %",
                            formatter: function () {
                                return this.key + '<br>' + this.percentage.toFixed(2) + '%'
                            },
                            style: {
                                color:
                                    (Highcharts.theme && Highcharts.theme.contrastTextColor) ||
                                    "black"
                            }
                        }
                    }
                },
                series:
                    [
                        {
                            name: "Prosentase",
                            colorByPoint: true,
                            innerSize: '50%',
                            data: this.dataMerch,
                        }
                    ]
            }
        },
        getDataFromAPI() {
            this.dataMerch = []
            this.total = 0
            this.dataAPI.forEach(element => {
                this.total = this.total + element.payment_count
            })
            this.total = this.formatNumber(this.total)
            this.dataAPI.forEach(element => {
                this.dataMerch.push({
                    name: ((element.name !== null) ? element.name + ' - ' : '') + element.merchant_type,
                    y: element.payment_count,
                    money: this.formatNumber(element.total_money)
                })
            })
        },
        formatNumber(amount, decimalCount = 2, decimal = ".", thousands = ",") {
            try {
                decimalCount = Math.abs(decimalCount);
                decimalCount = isNaN(decimalCount) ? 2 : decimalCount;

                const negativeSign = amount < 0 ? "-" : "";

                let i = parseInt(amount = Math.abs(Number(amount) || 0).toFixed(decimalCount)).toString();
                let j = (i.length > 3) ? i.length % 3 : 0;

                return negativeSign + (j ? i.substr(0, j) + thousands : '') + i.substr(j).replace(/(\d{3})(?=\d)/g, "$1" + thousands);
            } catch (e) {
                console.log(e)
            }
        },
    },
}
</script>
