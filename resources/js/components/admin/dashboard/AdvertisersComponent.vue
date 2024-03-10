<template>
    <LoadingComponent :props="loading" />
    <div class="col-12 xl:col-12">
        <div class="db-card">
            <div class="db-card-header">
                <h3 class="db-card-title"></h3>
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
                <AdvertiserDashboardStatsComponent :dashboadStats="dashboadStats" />
                <div class="row xl:col-12">
                    <div class="xl:col-6">
                        <highcharts :options="productAchievement" ref="productAchievement"></highcharts>
                    </div>
                    <div class="xl:col-6">
                        <highcharts :options="genderChart"></highcharts>
                    </div>
                </div>
                <br/><br/><br/>
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
            dashboadStats: {
                offers:0,
                stores:0,
                impressions:0,
                customers:0
            },
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
            genderChart: [],
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
                    "Transactions",
                    categories,
                    series,
                    "Daily transactions by dates",
                    "Total transactions");
                this.loading.isActive = false;
            }).catch((err) => {
                this.loading.isActive = false;
            });

            this.$store.dispatch("dashboard/getProductCategory", date).then((res) => {
                var series = []
                var categories = []

                this.productAchievement = chartService.plotColumnChat(
                    "Products",
                    "",
                    res.data.data,
                    "Product purchased in offer",
                    "Total product");
                this.loading.isActive = false;
            }).catch((err) => {
                this.loading.isActive = false;
            });

            this.$store.dispatch("dashboard/getTransactionByGender", date).then((res) => {

                this.dataMerch = res.data.data.gender
                this.total = res.data.data.total;

                this.genderChart = chartService.plotGenderDistributionChart(
                    res.data.data.gender,
                    res.data.data.total,
                    Highcharts
                );
                this.loading.isActive = false;
            }).catch((err) => {
                this.loading.isActive = false;
            });

            this.$store.dispatch("dashboard/getAdvertisersStats", date).then((res) => {
                this.dashboadStats = res.data.data
                console.log(this.dashboadStats)
            }).catch((err) => {
                this.loading.isActive = false;
            });

        },



    },
}
</script>
