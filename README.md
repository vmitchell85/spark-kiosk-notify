# Spark Kiosk Notify

Adds a notification panel to your Laravel Spark Kiosk, allowing you to send notifications to users.

## Spark 4.x
Spark 4.0 replaced vue-resource for axios. The 2.1 release has been updated to use axios.

If you are upgrading to Spark 4.0 you will need to remove the spark-kiosk-notify.js file and republish the resources.

Please note the path was updated as well.

## Vue 1.x
If you are using Vue 1.x please use the 1.0.5 release. The 2.x release is updated for Vue 2.x

## Planned / Desired Features

- View notifications
- Update notifications
- Delete notifications
- Send Notification on User's tab
- Select Multiple Users
- Search for users instead of listing? Listing all could be an issue if you have many users.
- Switch to SparkForm?

## Installation process

This package comes with predefined views and routes to use with your existing Spark installation.

In order to install the Spark Kiosk Notifications Package into your Spark application:

**1. Add this composer package to your composer.json using the command below**

`composer require vmitchell85/spark-kiosk-notify`

**2. Add the following to providers array in `config\app.php`**

`vmitchell85\SparkKioskNotify\SparkKioskNotifyServiceProvider::class,`

**3. Publish the Spark resources (views, VueJS components):**

`php artisan vendor:publish --provider="vmitchell85\SparkKioskNotify\SparkKioskNotifyServiceProvider"`

**4. Add the javascript components to your bootstrap.js file**

Add `require('./components/SparkKioskNotify/spark-kiosk-notify');` to your `resources/assets/js/components/app.js` file.

**5. Compile the Javascript components**

`npm run dev`

**6. Add the HTML snippets**

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
<!-- Notifications -->
<div role="tabpanel" class="tab-pane" id="notifications">
    @include('spark-kiosk-notify::notifications')
</div>
```

**7. Try it out**

Log into your Spark application and access the new notifications tab located at:

`http://your-spark.url/spark/kiosk#/notifications`
