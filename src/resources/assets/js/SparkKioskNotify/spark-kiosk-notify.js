Vue.component('spark-kiosk-notify', {
    props: [
    ],
    data() {
        return {
            'notifications': [],
            'users': [],
            'newNotification': {
                "user_id": null
            }
        };
    },
    ready(){
        this.getNotifications();
        this.getUsers();
    },
    methods: {
        /**
         * Get all of the announcements.
         */
        getNotifications: function(){
            this.$http.get('/skn/notifications')
                .then(response => {
                    this.notifications = response.data;
                });
        },

        /**
         * Get all of the users.
         */
        getUsers: function(){
            this.$http.get('/skn/users')
                .then(response => {
                    this.users = response.data;
                });
        },

        /**
         * Create Notification.
         */
        createNotification: function(){
            this.$http.post('/skn/notifications/create', this.newNotification)
                .then(response => {
                    this.newNotification = {};
                    this.getNotifications();
                });
        }

    }
});
