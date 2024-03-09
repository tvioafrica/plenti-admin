import axios from "axios";

export const frontendSignupAdvertiser = {
    namespaced: true,
    state: {
        
    },
    getters: {
        
    }, 
    actions: {
        signup: function (context, payload) {
            return new Promise((resolve, reject) => {
                let url = "auth/signup/register-advertiser";
                axios.post(url,payload).then((res) => {                    
                    resolve(res);
                }).catch((err) => {
                    reject(err);
                });
            });
        },
        verify: function (context, payload) {
            return new Promise((resolve, reject) => {
                let url = "auth/signup/verify-advertiser";
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
