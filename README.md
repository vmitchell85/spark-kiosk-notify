# Spark Kiosk Notify

Adds a notification panel to your Laravel Spark Kiosk, allowing you to send notifications to users.

## Planned / Desired Features

- View notifications
- Update notifications
- Delete notifications
- Send Notification on User's tab


## Installation process

This package comes with predefined views and routes to use with your existing Spark installation.

In order to install into your Spark application:

**1. Publish the Spark resources (views, VueJS components):**

`php artisan vendor:publish --provider="vmitchell85\SparkKioskNotify\SparkKioskNotifyServiceProvider"`

**2. Add the javascript components to your bootstrap.js file**

Add `require('./SparkKioskNotify/notifications.js');` to your `resources/assets/js/components/bootstrap.js` file.

**3. Compile the Javascript components**

`gulp`

**4. Add the HTML snippets**

File: `resources/views/vendor/spark/kiosk.blade.php`

Place a link to the notifications settings tab:

```html
<!-- Notifications Link -->
<li role="presentation">
    <a href="#notifications" aria-controls="notifications" role="tab" data-toggle="tab">
        <i class="fa fa-fw fa-btn fa-bell"></i>Notifications
    </a>
</li>
```

Inside the `<!-- Tab Panels -->` section, place the code to load the notifications tab:

```html
<div role="tabpanel" class="tab-pane" id="notifications">
    @include('spark-notify::notifications')
</div>
```

**5. Try it out**

Log into your Spark application and access the new notifications tab located at:

`http://your-spark.url/settings#/notifications`
