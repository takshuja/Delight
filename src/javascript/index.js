var app = Vue.createApp({
    data() {
        return {
            notifications: {
                inbox: 5,
                wishlist: 12,
                cart: 3
            }
        }
    },
    // methods: {
        // login: function() {
            // this.inbox++;
            // window.location.href = "src/php/login.php";
        // }
    // }

})

app.mount('body')