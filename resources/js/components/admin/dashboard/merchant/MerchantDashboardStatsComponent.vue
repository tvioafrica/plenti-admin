<template>
    <LoadingComponent :props="loading" />

    <div class="mb-9">
        <h4 class="font-semibold text-[22px] leading-[34px] mb-3 capitalize">{{ $t("menu.overview") }}</h4>
        <div class="row">

            <div class="col-12 sm:col-6 xl:col-4">
                <div class="p-4 rounded-lg flex items-center gap-4 bg-[#FF4F99]">
                    <div class="w-12 h-12 rounded-full flex items-center justify-center bg-white">
                        <i class="lab lab-total-sale lab-font-size-24 lab-color-pink"></i>
                    </div>
                    <div>
                        <h3 class="font-medium text-white">Participating Stores</h3>
                        <h4 class="font-semibold text-[22px] leading-[34px] text-white">2</h4>
                    </div>
                </div>
            </div>

            <div class="col-12 sm:col-6 xl:col-4" style="cursor: pointer;" @click="redirectToTransaction">
                <div class="p-4 rounded-lg flex items-center gap-4 bg-[#567DFF]">
                    <div class="w-12 h-12 rounded-full flex items-center justify-center bg-white">
                        <i class="lab lab-total-customers lab-font-size-24 lab-color-cornflower-blue"></i>
                    </div>
                    <div>
                        <h3 class="font-medium text-white">Total Transactions</h3>
                        <h4 class="font-semibold text-[22px] leading-[34px] text-white">{{ dashboadStats.impressions }}</h4>
                    </div>
                </div>
            </div>
            <div class="col-12 sm:col-6 xl:col-4">
                <div class="p-4 rounded-lg flex items-center gap-4 bg-[#A953FF]">
                    <div class="w-12 h-12 rounded-full flex items-center justify-center bg-white">
                        <i class="lab lab-total-menu-items lab-font-size-24 lab-color-heliotrope"></i>
                    </div>
                    <div>
                        <h3 class="font-medium text-white">Total Shoppers</h3>
                        <h4 class="font-semibold text-[22px] leading-[34px] text-white">{{ dashboadStats.customers }}</h4>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
import LoadingComponent from "../../components/LoadingComponent";
export default {
    name: "MerchantDashboardStatsComponent",
    components: { LoadingComponent },
    props: ['dashboadStats'],
    data() {
        return {
            loading: {
                isActive: false,
            },
        };
    },
    methods: {
        redirectToTransaction() {
            this.$router.push(
                {
                    path: '/admin/transactions',
                }
            )
        }
    },

}
</script>
