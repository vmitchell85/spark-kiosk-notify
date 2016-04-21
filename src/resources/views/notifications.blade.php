<spark-kiosk-notify inline-template>
    <div class="panel panel-default">
        <div class="panel-heading">Create Notification</div>

        <div class="panel-body">
            <div class="alert alert-info">
                Notifications you create here will be sent to the "Notifications" section of
                the notifications modal window for that specific user.
            </div>

            <form class="form-horizontal" role="form">
                <!-- Notification -->
                <div class="form-group" :class="{'has-error': createForm.errors.has('body')}">
                    <label class="col-md-4 control-label">Notification</label>

                    <div class="col-md-6">
                        <textarea class="form-control" name="notification" rows="7" v-model="createForm.body" style="font-family: monospace;">
                        </textarea>

                        <span class="help-block" v-show="createForm.errors.has('body')">
                            @{{ createForm.errors.get('body') }}
                        </span>
                    </div>
                </div>

                <!-- Action Text -->
                <div class="form-group" :class="{'has-error': createForm.errors.has('action_text')}">
                    <label class="col-md-4 control-label">Action Button Text</label>

                    <div class="col-md-6">
                        <input type="text" class="form-control" name="action_text" v-model="createForm.action_text">

                        <span class="help-block" v-show="createForm.errors.has('action_text')">
                            @{{ createForm.errors.get('action_text') }}
                        </span>
                    </div>
                </div>

                <!-- Action URL -->
                <div class="form-group" :class="{'has-error': createForm.errors.has('action_url')}">
                    <label class="col-md-4 control-label">Action Button URL</label>

                    <div class="col-md-6">
                        <input type="text" class="form-control" name="action_url" v-model="createForm.action_url">

                        <span class="help-block" v-show="createForm.errors.has('action_url')">
                            @{{ createForm.errors.get('action_url') }}
                        </span>
                    </div>
                </div>

                <!-- Create Button -->
                <div class="form-group">
                    <div class="col-md-offset-4 col-md-6">
                        <button type="submit" class="btn btn-primary"
                                @click.prevent="create"
                                :disabled="createForm.busy">

                            Create
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</spark-kiosk-notify>
