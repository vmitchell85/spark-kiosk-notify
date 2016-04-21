Vue.component('spark-kiosk-notify', {
    props: [
        'notifications'
    ],
    ready(){
        // this.getNotifications();
    },
    methods: {
        getNotifications: function(){
            this.$http.get('api/notifications')
                .then(response => function(){
                    this.notifications = response.data;
                });
        }
    }
});
