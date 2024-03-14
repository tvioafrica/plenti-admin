import axios from "axios";
import appService from "../../services/appService";

export const dashboard = {
    namespaced: true,
    state: {
        totalSales: [],
        totalOrders: [],
        totalCustomers: [],
        totalMenuItems: [],
        orderStatistics: [],
        orderSummary: [],
        salesSummary: [],
        customerStates: [],
        getAdvertisersStats: [],
        getTransactionByGender: [],
        getProductCategory: [],
        trends: [],
        getMerchantStats: [],
        getMerchantTransactionByGender: [],
        getTopShoppers: [],
        merchantTrends: [],
        featuredItems: [],
        mostPopularItems: [],
        topCustomers: [],
    },

    getters: {
        totalSales: function (state) {
            return state.totalSales;
        },
        totalOrders: function (state) {
            return state.totalOrders;
        },
        totalCustomers: function (state) {
            return state.totalCustomers;
        },
        totalMenuItems: function (state) {
            return state.totalMenuItems;
        },
        orderStatistics: function (state) {
            return state.orderStatistics;
        },
        orderSummary: function (state) {
            return state.orderSummary;
        },
        salesSummary: function (state) {
            return state.salesSummary;
        },
        customerStates: function (state) {
            return state.customerStates;
        },
        featuredItems: function (state) {
            return state.featuredItems;
        },
        mostPopularItems: function (state) {
            return state.mostPopularItems;
        },
        topCustomers: function (state) {
            return state.topCustomers;
        },
        getAdvertisersStats: function (state) {
            return state.getAdvertisersStats;
        },
        getTransactionByGender: function (state) {
            return state.getAdvertisersStats;
        },
        getProductCategory: function (state) {
            return state.getAdvertisersStats;
        },
        trends: function (state) {
            return state.getAdvertisersStats;
        },
        getMerchatStats: function (state) {
            return state.getMerchantStats;
        },
        getMerchantTransactionByGender: function (state) {
            return state.getMerchantTransactionByGender;
        },
        getTopShoppers: function (state) {
            return state.getTopShoppers;
        },
        merchantTrends: function (state) {
            return state.merchantTrends;
        },
    },

    actions: {
        totalSales: function (context) {
            return new Promise((resolve, reject) => {
                axios
                    .get("admin/dashboard/total-sales")
                    .then((res) => {
                        context.commit("totalSales", res.data.data);
                        resolve(res);
                    })
                    .catch((err) => {
                        reject(err);
                    });
            });
        },
        totalOrders: function (context) {
            return new Promise((resolve, reject) => {
                axios
                    .get("admin/dashboard/total-orders")
                    .then((res) => {
                        context.commit("totalOrders", res.data.data);
                        resolve(res);
                    })
                    .catch((err) => {
                        reject(err);
                    });
            });
        },
        totalCustomers: function (context) {
            return new Promise((resolve, reject) => {
                axios
                    .get("admin/dashboard/total-customers")
                    .then((res) => {
                        context.commit("totalCustomers", res.data.data);
                        resolve(res);
                    })
                    .catch((err) => {
                        reject(err);
                    });
            });
        },
        totalMenuItems: function (context) {
            return new Promise((resolve, reject) => {
                axios
                    .get("admin/dashboard/total-menu-items")
                    .then((res) => {
                        context.commit("totalMenuItems", res.data.data);
                        resolve(res);
                    })
                    .catch((err) => {
                        reject(err);
                    });
            });
        },
        orderStatistics: function (context,payload) {
            return new Promise((resolve, reject) => {
                let url = "admin/dashboard/order-statistics";
                if (payload) {
                    url = url + appService.requestHandler(payload);
                }
                axios.get(url).then((res) => {
                        context.commit("orderStatistics", res.data.data);
                        resolve(res);
                    })
                    .catch((err) => {
                        reject(err);
                    });
            });
        },
        orderSummary: function (context,payload) {
            return new Promise((resolve, reject) => {
                let url = "admin/dashboard/order-summary";
                if (payload) {
                    url = url + appService.requestHandler(payload);
                }
                axios.get(url).then((res) => {
                        context.commit("orderSummary", res.data.data);
                        resolve(res);
                    })
                    .catch((err) => {
                        reject(err);
                    });
            });
        },
        salesSummary: function (context,payload) {
            return new Promise((resolve, reject) => {
                let url = "admin/dashboard/sales-summary";
                if (payload) {
                    url = url + appService.requestHandler(payload);
                }
                axios.get(url).then((res) => {
                        context.commit("salesSummary", res.data.data);
                        resolve(res);
                    })
                    .catch((err) => {
                        reject(err);
                    });
            });
        },
        customerStates: function (context,payload) {
            return new Promise((resolve, reject) => {
                let url = "admin/dashboard/customer-states";
                if (payload) {
                    url = url + appService.requestHandler(payload);
                }
                axios.get(url).then((res) => {
                        context.commit("customerStates", res.data.data);
                        resolve(res);
                    })
                    .catch((err) => {
                        reject(err);
                    });
            });
        },
        featuredItems: function (context) {
            return new Promise((resolve, reject) => {
                axios
                    .get("admin/dashboard/featured-items")
                    .then((res) => {
                        context.commit("featuredItems", res.data.data);
                        resolve(res);
                    })
                    .catch((err) => {
                        reject(err);
                    });
            });
        },
        mostPopularItems: function (context) {
            return new Promise((resolve, reject) => {
                axios
                    .get("admin/dashboard/popular-items")
                    .then((res) => {
                        context.commit("mostPopularItems", res.data.data);
                        resolve(res);
                    })
                    .catch((err) => {
                        reject(err);
                    });
            });
        },
        topCustomers: function (context) {
            return new Promise((resolve, reject) => {
                axios
                    .get("admin/dashboard/top-customers")
                    .then((res) => {
                        context.commit("topCustomers", res.data.data);
                        resolve(res);
                    })
                    .catch((err) => {
                        reject(err);
                    });
            });
        },
        getAdvertisersStats: function (context,payload) {
            return new Promise((resolve, reject) => {
                let url = "admin/dashboard/get-advertisers-stats";
                if (payload) {
                    url = url + appService.requestHandler(payload);
                }
                axios.get(url).then((res) => {
                        context.commit("getAdvertisersStats", res.data.data);
                        resolve(res);
                    })
                    .catch((err) => {
                        reject(err);
                    });
            });
        },
        getTransactionByGender: function (context,payload) {
            return new Promise((resolve, reject) => {
                let url = "admin/dashboard/get-transaction-by-gender";
                if (payload) {
                    url = url + appService.requestHandler(payload);
                }
                axios.get(url).then((res) => {
                        context.commit("getTransactionByGender", res.data.data);
                        resolve(res);
                    })
                    .catch((err) => {
                        reject(err);
                    });
            });
        },
        getProductCategory: function (context,payload) {
            return new Promise((resolve, reject) => {
                let url = "admin/dashboard/get-product-category-achievements";
                if (payload) {
                    url = url + appService.requestHandler(payload);
                }
                axios.get(url).then((res) => {
                        context.commit("getProductCategory", res.data.data);
                        resolve(res);
                    })
                    .catch((err) => {
                        reject(err);
                    });
            });
        },
        trends: function (context,payload) {
            return new Promise((resolve, reject) => {
                let url = "admin/dashboard/trends";
                if (payload) {
                    url = url + appService.requestHandler(payload);
                }
                axios.get(url).then((res) => {
                        context.commit("trends", res.data.data);
                        resolve(res);
                    })
                    .catch((err) => {
                        reject(err);
                    });
            });
        },
        getMerchantStats: function (context,payload) {
            return new Promise((resolve, reject) => {
                let url = "admin/dashboard/get-merchant-stats";
                if (payload) {
                    url = url + appService.requestHandler(payload);
                }
                axios.get(url).then((res) => {
                        context.commit("getMerchantStats", res.data.data);
                        resolve(res);
                    })
                    .catch((err) => {
                        reject(err);
                    });
            });
        },
        getMerchantTransactionByGender: function (context,payload) {
            return new Promise((resolve, reject) => {
                let url = "admin/dashboard/get-merchant-transaction-by-gender";
                if (payload) {
                    url = url + appService.requestHandler(payload);
                }
                axios.get(url).then((res) => {
                        context.commit("getMerchantTransactionByGender", res.data.data);
                        resolve(res);
                    })
                    .catch((err) => {
                        reject(err);
                    });
            });
        },
        getTopShoppers: function (context,payload) {
            return new Promise((resolve, reject) => {
                let url = "admin/dashboard/get-top-shoppers";
                if (payload) {
                    url = url + appService.requestHandler(payload);
                }
                axios.get(url).then((res) => {
                        context.commit("getTopShoppers", res.data.data);
                        resolve(res);
                    })
                    .catch((err) => {
                        reject(err);
                    });
            });
        },
        merchantTrends: function (context,payload) {
            return new Promise((resolve, reject) => {
                let url = "admin/dashboard/merchant-trends";
                if (payload) {
                    url = url + appService.requestHandler(payload);
                }
                axios.get(url).then((res) => {
                        context.commit("merchantTrends", res.data.data);
                        resolve(res);
                    })
                    .catch((err) => {
                        reject(err);
                    });
            });
        },
    },

    mutations: {
        totalSales: function (state, payload) {
            state.totalSales = payload;
        },
        totalOrders: function (state, payload) {
            state.totalOrders = payload;
        },
        totalCustomers: function (state, payload) {
            state.totalCustomers = payload;
        },
        totalMenuItems: function (state, payload) {
            state.totalMenuItems = payload;
        },
        orderStatistics: function (state, payload) {
            state.orderStatistics = payload;
        },
        orderSummary: function (state, payload) {
            state.orderSummary = payload;
        },
        salesSummary: function (state, payload) {
            state.salesSummary = payload;
        },
        customerStates: function (state, payload) {
            state.customerStates = payload;
        },
        featuredItems: function (state, payload) {
            state.featuredItems = payload;
        },
        mostPopularItems: function (state, payload) {
            state.mostPopularItems = payload;
        },
        topCustomers: function (state, payload) {
            state.topCustomers = payload;
        },
        getAdvertisersStats: function (state, payload) {
            state.getAdvertisersStats = payload;
        },
        getTransactionByGender: function (state, payload) {
            state.getTransactionByGender = payload;
        },
        getProductCategory: function (state, payload) {
            state.getProductCategory = payload;
        },
        trends: function (state, payload) {
            state.trends = payload;
        },
        getMerchantStats: function (state, payload) {
            state.getMerchantStats = payload;
        },
        getMerchantTransactionByGender: function (state, payload) {
            state.getTransactionByGender = payload;
        },
        getTopShoopers: function (state, payload) {
            state.getTopShoopers = payload;
        },
        merchantTrends: function (state, payload) {
            state.merchantTrends = payload;
        },
    },
};
