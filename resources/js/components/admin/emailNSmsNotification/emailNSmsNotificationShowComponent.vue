<template>
    <LoadingComponent :props="loading" />
    <div class="db-card">
        <div class="db-card-header">
            <h3 class="db-card-title">{{ $t('menu.email_sms') }}</h3>
        </div>
        <div class="db-card-body">
            <div class="row">               
                <div class="col-12 sm:col-7">
                    <h3 class="text-lg font-medium capitalize mb-2 text-paragraph">{{ emailSmsNotification.title }}</h3>
                   
                        
                    <label class="db-badge mb-3 db-table-badge text-green-600 bg-green-100">
                        {{ emailSmsNotification.type_of == 1 ? "SMS" : "E-MAIL"  }} 
                    </label>
                  

                    <p class="db-light-text font-medium mt-4 italic">
                        "{{ emailSmsNotification.content }}"
                    </p>

                </div>
            </div>
        </div>

        <div class="db-table-responsive">
            <table class="db-table stripe" id="print">
                <thead class="db-table-head">
                    <tr class="db-table-head-tr">
                        <th class="db-table-head-th"> Title </th>
                        <th class="db-table-head-th"> User Name </th>
                        <th class="db-table-head-th"> Date/Time</th>
                        <th class="db-table-head-th"> Status </th>
                    </tr>
                </thead>
                <tbody class="db-table-body" v-if="emailSmsNotifications.length > 0">
                    <tr class="db-table-body-tr" v-for="emailSmsNotification in emailSmsNotifications" :key="emailSmsNotification">
                        <td class="db-table-body-td">
                            <div>{{ emailSmsNotification.email_sms.title }}</div>
                        </td>
                        <td class="db-table-body-td">
                            <div>{{ emailSmsNotification.user !== null ? emailSmsNotification.user.name : "Nil" }}</div>
                        </td>
                        
                        <td class="db-table-body-td">
                            <div> <b>{{ removeDateSuffix(emailSmsNotification.email_sms.created_at) }} </b></div>
                        </td>
                        <td class="db-table-body-td hidden-print">
                            <div class="flex justify-start items-center sm:items-start sm:justify-start gap-1.5">
                               <label class="db-badge mb-3 db-table-badge text-green-600 bg-green-100" v-if="emailSmsNotification.email_sms.type_of == 1 && JSON.parse(emailSmsNotification.status).code == 'ok'">
                                    SUCCESS
                               </label>
                               <label class="db-badge mb-3 db-table-badge text-red-600 bg-red-100" v-else-if="emailSmsNotification.email_sms.type_of == 1 && JSON.parse(emailSmsNotification.status).code != 'ok'">
                                    FAILED
                               </label>
                               <label class="db-badge mb-3 last db-table-badge text-green-600 bg-green-100" v-if=" emailSmsNotification.email_sms.type_of == 2 ">
                                    SUCCESS
                               </label>
                            </div>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>

        <div class="flex items-center justify-between border-t border-gray-200 bg-white px-4 py-6">
            <PaginationSMBox :pagination="pagination" :method="list" />
            <div class="hidden sm:flex sm:flex-1 sm:items-center sm:justify-between">
                <PaginationTextComponent :props="{ page: paginationPage }" />
                <PaginationBox :pagination="pagination" :method="list" />
            </div>
        </div>
    </div>
</template>

<script>
import LoadingComponent from "../components/LoadingComponent";
import appService from "../../../services/appService";
import PaginationTextComponent from "../components/pagination/PaginationTextComponent";
import PaginationBox from "../components/pagination/PaginationBox";
import PaginationSMBox from "../components/pagination/PaginationSMBox";

export default {
    name: "emailNSmsNotificationShowComponent",
    components: {
        LoadingComponent,
        PaginationSMBox,
        PaginationBox,
        PaginationTextComponent,
    },
    data() {
        return {
            loading: {
                isActive: false
            },
            props: {
                search: {
                    paginate: 1,
                    page: 1,
                    per_page: 10,
                    order_column: 'id',
                    order_type: 'desc',
                    email_sms_id: null
                }
            },
        }
    },
    computed: {
        emailSmsNotification: function () {
            return this.$store.getters['emailSmsNotification/show'];
        },
        emailSmsNotifications: function () {
            return this.$store.getters['emailSmsNotification/lists_user'];
        },
        pagination: function () {
            return this.$store.getters['emailSmsNotification/pagination_user'];
        },
        paginationPage: function () {
            return this.$store.getters['emailSmsNotification/page_user'];
        },
    },
    mounted() {
        this.props.search.email_sms_id = this.$route.params.id;
        this.loading.isActive = true;
        this.$store.dispatch('emailSmsNotification/show', this.$route.params.id).then(res => {
            this.loading.isActive = false;
        }).catch((error) => {
            this.loading.isActive = false;
        });

        this.loading.isActive = true;
        this.$store.dispatch('emailSmsNotification/lists_user', this.props.search).then(res => {
            this.loading.isActive = false;
        }).catch((error) => {
            this.loading.isActive = false;
        });
    },
    methods: {
        statusClass: function (status) {
            return appService.statusClass(status);
        },
        list: function (page = 1) {
            this.loading.isActive = true;
            this.props.search.page = page;
            this.$store.dispatch('emailSmsNotification/lists_user', this.props.search).then(res => {
                this.loading.isActive = false;
            }).catch((err) => {
                this.loading.isActive = false;
            });
        },
       removeDateSuffix: function (dateString) {
            return dateString.replace(/\.\d+Z$/i, '');
       }
    }
}

</script>
<style scoped>
.italic{
    font-style: italic;
}
</style>