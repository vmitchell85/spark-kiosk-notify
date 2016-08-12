<?php

Route::group(['middleware' => ['web', 'dev']], function($router) {
    $router->get('/skn/notifications', function(){
        return \Laravel\Spark\Notification::with('creator')->with('user')->orderBy('created_at', 'desc')->get();
    });

    $router->post('/skn/notifications/create', function(Illuminate\Http\Request $request){

        $new_notification = new \Laravel\Spark\Notification;

        // Must generate an unique id since it's not auto increment
        $new_notification->id = Illuminate\Support\Facades\Hash::make( time() . Auth::user()->id );
        $new_notification->body = $request->input('body');
        $new_notification->user_id = $request->input('user_id');
        $new_notification->action_text = $request->input('action_text');
        $new_notification->action_url = $request->input('action_url');
        $new_notification->created_by = Auth::user()->id;
        $new_notification->save();

        return $new_notification;
    });

    $router->get('/skn/users', function(){
        return \App\User::all();
    });
});
