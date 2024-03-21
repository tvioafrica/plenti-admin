<template>
    <LoadingComponent :props="loading" />

    <div class="db-card db-tab-div active">
        <div class="db-card-header border-none">
            <h3 class="db-card-title">{{ $t('menu.email_sms') }}</h3>
            <div class="db-card-filter">
                <TableLimitComponent :method="list" :search="props.search" :page="paginationPage" />
                <FilterEmailComponent />
                <!--<div class="dropdown-group">
                    <ExportComponent />
                    <div class="dropdown-list db-card-filter-dropdown-list">
                        <PrintComponent :props="printObj" />
                        <ExcelComponent :method="xls" />
                    </div>
                </div>-->
                <emailNSmsNotificationCreateComponent :props="props" v-if="permissionChecker('email_sms_create')" />
            </div>
        </div>

        <div class="table-filter-div">
            <form class="p-4 sm:p-5 mb-5" @submit.prevent="sendMessage">
                <div class="row">

                    <div class="col-12 sm:col-6 md:col-4 xl:col-3">
                        <label for="searchRole" class="db-field-title after:hidden">{{ $t('label.role') }}</label>
                        <vue-select @search:change="selectUser($event)" class="db-field-control f-b-custom-select"
                            id="role_id" v-model="props.search.role_id" :options="roles" label-by="name" value-by="id"
                            :closeOnSelect="true" :searchable="true" :clearOnClose="true" placeholder="search here...."
                            search-placeholder="--" />
                    </div>

                    <div class="col-12 sm:col-6 md:col-4 xl:col-3">
                        <label for="searchUser" class="db-field-title after:hidden">{{ $t('label.user') }}</label>
                       <!-- <vue-select class="db-field-control f-b-custom-select" v-model="props.search.user_id"
                            :options="users" label-by="name" value-by="id" :closeOnSelect="true" 
                            :clearOnClose="true" placeholder="--" search-placeholder="search here...." /> -->
                          <CheckboxList @update:selectedValues="handleSelectedVals" :options="optionsNew"/>                
                    </div>

                    <div class="col-12 sm:col-6 md:col-4 xl:col-3">
                        <label for="searchTitle" class="db-field-title after:hidden">{{ $t('label.title') }}</label>
                        <vue-select class="db-field-control f-b-custom-select" v-model="props.search.title"
                            :options="emailSmsNotifications" label-by="title" value-by="id" :closeOnSelect="true" :searchable="true"
                            :clearOnClose="true" placeholder="--" search-placeholder="search here...." />
                    </div>
                    <!--:reset="resetUser"-->
                   <!-- <div class="col-12">
                        <div class="flex flex-wrap gap-3 mt-2">
                            <div v-for="su in selectedUsers" :key="su"> 
                                <TagComponent :id="su.id" >{{ su.name }}</TagComponent> 
                            </div>                            
                        </div>
                    </div>-->
                    <!-- v-if=" props.search.role_id !== null && parentSelectedValues.length !== 0 && props.search.title !== null " -->
                    <div class="col-12">
                        <div class="flex flex-wrap gap-3 mt-2">
                            <button class="db-btn py-2 text-white bg-primary" >
                                <i class="lab lab-search-line lab-font-size-16"></i>
                                <span>{{ $t('button.send_message') }}</span>
                            </button>                            
                        </div>
                    </div>

                </div>
            </form>
        </div>

        <div class="db-table-responsive">
            <table class="db-table stripe" id="print">
                <thead class="db-table-head">
                    <tr class="db-table-head-tr">
                        <th class="db-table-head-th"> Title </th>
                        <th class="db-table-head-th"> Content </th>
                        <th class="db-table-head-th"> Type of Mail</th>
                        <th class="db-table-head-th hidden-print"
                            v-if="permissionChecker('email_sms_show') || permissionChecker('email_sms_delete')">
                            {{ $t('label.action') }}</th>
                    </tr>
                </thead>
                <tbody class="db-table-body" v-if="emailSmsNotifications.length > 0">
                    <tr class="db-table-body-tr" v-for="emailSmsNotification in emailSmsNotifications" :key="emailSmsNotification">
                        <td class="db-table-body-td">
                            <div>{{ textShortener(emailSmsNotification.title) }}</div>
                        </td>
                        <td class="db-table-body-td">
                            <div>{{ emailSmsNotification.content }}</div>
                        </td>
                        <td class="db-table-body-td">
                            <div> <b>{{ emailSmsNotification.type_of === 1 ? "SMS" : "E-MAIL" }} </b></div>
                        </td>
                        <td class="db-table-body-td hidden-print"
                            v-if="permissionChecker('email_sms_show') || permissionChecker('email_sms_delete')">
                            <div class="flex justify-start items-center sm:items-start sm:justify-start gap-1.5">
                                <SmIconViewComponent :link="'admin.email-sms-notification.show'" :id="emailSmsNotification.id"
                                    v-if="permissionChecker('email_sms_show')" />
                                <SmIconDeleteComponent @click="destroy(emailSmsNotification.id)"
                                    v-if="permissionChecker('email_sms_delete')" />
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
import TagComponent from "../components/TagComponent";
import CheckboxList from "./CheckboxList";
import emailNSmsNotificationCreateComponent from "./emailNSmsNotificationCreateComponent";
import alertService from "../../../services/alertService";
import PaginationTextComponent from "../components/pagination/PaginationTextComponent";
import PaginationBox from "../components/pagination/PaginationBox";
import PaginationSMBox from "../components/pagination/PaginationSMBox";
import appService from "../../../services/appService";
import statusEnum from "../../../enums/modules/statusEnum";
import TableLimitComponent from "../components/TableLimitComponent";
import SmIconDeleteComponent from "../components/buttons/SmIconDeleteComponent";
import SmModalEditComponent from "../components/buttons/SmModalEditComponent";
import SmIconViewComponent from "../components/buttons/SmIconViewComponent";
import FilterEmailComponent from "../components/buttons/collapse/FilterEmailComponent";
import ExportComponent from "../components/buttons/export/ExportComponent";
import PrintComponent from "../components/buttons/export/PrintComponent";
import ExcelComponent from "../components/buttons/export/ExcelComponent";

export default {
    name: "emailNSmsNotificationListComponent",
    components: {
        TableLimitComponent,
        PaginationSMBox,
        PaginationBox,
        PaginationTextComponent,
        emailNSmsNotificationCreateComponent,
        LoadingComponent,
        TagComponent,
        CheckboxList,
        SmIconDeleteComponent,
        SmModalEditComponent,
        SmIconViewComponent,
        FilterEmailComponent,
        ExportComponent,
        PrintComponent,
        ExcelComponent
    },
    data() {
        return {
            loading: {
                isActive: false
            },
            parentSelectedValues: [],
            optionsNew: [],
            enums: {
                statusEnum: statusEnum,
                statusEnumArray: {
                    [statusEnum.ACTIVE]: this.$t("label.active"),
                    [statusEnum.INACTIVE]: this.$t("label.inactive")
                },
            },
            printLoading: true,
            printObj: {
                id: "print",
                popTitle: this.$t('menu.email_sms')
            },
            props: {
                form: {
                    title: "",
                    content: "",
                    type_of: ""
                },
                search: {
                    paginate: 1,
                    page: 1,
                    per_page: 10,
                    order_column: 'id',
                    order_type: 'desc',
                    title: null,
                    type_of: "",
                    role_id: null,
                    user_id: null
                }
            },
            selectedUsers: [ ]
        }
    },
    
    computed: {
        emailSmsNotifications: function () {
            return this.$store.getters['emailSmsNotification/lists'];
        },
        pagination: function () {
            return this.$store.getters['emailSmsNotification/pagination'];
        },
        paginationPage: function () {
            return this.$store.getters['emailSmsNotification/page'];
        },
        roles: function () {
            return this.$store.getters['role/lists'];
        },
        users: function () {
            return this.$store.getters['user/lists'];
        }
    },

    watch: {
        users(newVal, oldVal) {
            let normalArray = [{id: 0, name: "All users"}];
            for (let proxy of newVal) {
                normalArray.push(proxy);
            }
            this.optionsNew = normalArray;
        },
    },

    mounted() {
        this.loading.isActive = true;

        this.$store.dispatch("defaultAccess/show").then(res => {
            this.props.search.branch_id = res.data.data.branch_id;
            this.loading.isActive = false;
            this.list();
        }).catch((error) => {
            this.loading.isActive = false;
        });

        this.$store.dispatch('role/lists', {
            order_column: 'id',
            order_type: 'asc',
        });

        this.$store.dispatch('user/lists', {
            order_column: 'id',
            order_type: 'asc',
            status: statusEnum.ACTIVE
        });

      //  console.log("user: " + JSON.stringify(this.users));

    },

    methods: {
        permissionChecker(e) {
            return appService.permissionChecker(e);
        },
        statusClass: function (status) {
            return appService.statusClass(status);
        },
        textShortener: function (text, number = 30) {
            return appService.textShortener(text, number);
        },
        search: function () {
            this.list();
        },
        resetUser: function (id) {
            this.selectedUsers = this.selectedUsers.filter((el) => el.id !== id);
        },
        handleSelectedVals:  function (val) {
            this.parentSelectedValues = val;
        },
        sendMessage: function () {
            if ( this.props.search.role_id === null || this.parentSelectedValues.length === 0 || this.props.search.title === null  ){
                alert("Please select the complete list of options before proceeding to send the mail");
                return 
            }
            if (this.optionsNew.length === 1 && this.optionsNew[0].id === 0){
                alert("Please this user list is empty! Please pick a list of users");
                return 
            }
            //console.log("Parent >>> " + )
            let allusers      = this.optionsNew.filter((item) => item.id !== 0 );
            const optionIndex = this.parentSelectedValues.findIndex((item) => item.id === 0);
            if (optionIndex > 0) {
                this.parentSelectedValues = allusers;
            }
            try {
                //console.log("Parent values: " + JSON.stringify(this.parentSelectedValues));
                const fd = new FormData();
                fd.append('email_template_id', Number(this.props.search.title) );
                fd.append('recipients', JSON.stringify(this.parentSelectedValues) );

                this.loading.isActive = true;
                this.$store.dispatch('emailSmsNotification/send', {
                    form: fd,
                    search: this.props.search
                }).then((res) => {
                    
                    this.loading.isActive = false;
                    alertService.success("All Messages have be sent.");
                    this.props.search.title = null;  
                    this.props.search.role_id = null; 
                    this.parentSelectedValues = [];
                    this.list();

                    this.errors = {};                   
                }).catch((err) => {
                    this.loading.isActive = false;
                    this.errors = err.response.data.errors;
                })
            } catch (err) {
                this.loading.isActive = false;
                alertService.error(err)
            }

        },
        onSelect:  function (option) {
            console.log(JSON.stringify(option));
        },
        selectUser: function (e) {
            this.props.search.user_id = null;
            this.$store.dispatch('user/lists', {
                order_column: 'id',
                order_type: 'asc',
                status: statusEnum.ACTIVE,
                role_id: this.props.search.role_id,
                branch_id: null,
            });
        },
        clear: function () {
            this.props.search.paginate = 1;
            this.props.search.page = 1;
            this.props.search.per_page = 10;
            this.props.search.order_column = 'id';
            this.props.search.order_type = 'desc';
            this.props.search.title = "";
            this.props.search.role_id = null;
            this.props.search.user_id = null;
            this.list();
        },
        list: function (page = 1) {
            this.loading.isActive = true;
            this.props.search.page = page;
            this.$store.dispatch('emailSmsNotification/lists', this.props.search).then(res => {
                this.loading.isActive = false;
            }).catch((err) => {
                this.loading.isActive = false;
            });
        },
        destroy: function (id) {
            appService.destroyConfirmation().then((res) => {
                try {
                    this.loading.isActive = true;
                    this.$store.dispatch('emailSmsNotification/destroy', {
                        id: id,
                        search: this.props.search
                    }).then((res) => {
                        this.loading.isActive = false;
                        alertService.successFlip(null, this.$t('label.email_sms'));
                    }).catch((err) => {
                        this.loading.isActive = false;
                        alertService.error(err.response.data.message);
                    })
                } catch (err) {
                    this.loading.isActive = false;
                    alertService.error(err.response.data.message);
                }
            }).catch((err) => {
                this.loading.isActive = false;
            })
        },
        xls: function () {
            this.loading.isActive = true;
            this.$store.dispatch('emailSmsNotification/export', this.props.search).then(res => {
                this.loading.isActive = false;
                const blob = new Blob([res.data], { type: 'application/vnd.openxmlformats-officedocument.spreadsheetml.sheet' });
                const link = document.createElement('a');
                link.href = URL.createObjectURL(blob);
                link.download = this.$t("menu.email_sms");
                link.click();
                URL.revokeObjectURL(link.href);
            }).catch((err) => {
                this.loading.isActive = false;
                alertService.error(err.response.data.message);
            });
        }
    }
}
</script>
<style scoped>
@media print {
    .hidden-print {
        display: none !important;
    }
}
</style>
