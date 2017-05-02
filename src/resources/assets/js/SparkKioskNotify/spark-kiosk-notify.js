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
    mounted(){
        this.getNotifications();
        this.getUsers();
    },
    methods: {
        /**
         * Get all of the announcements.
         */
        getNotifications: function(){
            axios.get('/skn/notifications')
                .then(response => {
                    this.notifications = response.data;
                });
        },

        /**
         * Get all of the users.
         */
        getUsers: function(){
            axios.get('/skn/users')
                .then(response => {
                    this.users = response.data;
                });
        },

        /**
         * Create Notification.
         */
        createNotification: function(){
            axios.post('/skn/notifications/create', this.newNotification)
                .then(response => {
                    this.newNotification = {};
                    this.getNotifications();
                });
        }

    }
});
