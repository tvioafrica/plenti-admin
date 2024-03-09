import axios from "axios";

export const frontendSignupMerchant = {
    namespaced: true,
    state: {
        
    },
    getters: {
        
    }, 
    actions: {
        signup: function (context, payload) {
            return new Promise((resolve, reject) => {
                let url = "auth/signup/register-merchant";
                axios.post(url,payload).then((res) => {                    
                    resolve(res);
                }).catch((err) => {
                    reject(err);
                });
            });
        },
        verify: function (context, payload) {
            return new Promise((resolve, reject) => {
                let url = "auth/signup/verify-merchant";
                axios.post(url,payload).then((res) => {
                    resolve(res);
                }).catch((err) => {
                    reject(err);
                });
            });
        },        
    },
    mutations: {
       
    },
};
