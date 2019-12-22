<template>
    <div class="card">
        <form class="form-horizontal" @submit.prevent="submitForm">
        <div class="card-header">Add Task</div>

        <div class="card-body">
                <input type="hidden" name="csrf_token" :value="$page.csrf_token" />
                <div class="form-group">
                    <input :class="{'is-invalid': $page.errors.name}" v-model="form.name" type="text" name="name" class="form-control" placeholder="Task Title: Follow-up with Mr. Patel" />
                    <span v-if="$page.errors.name" class="text-danger">{{ $page.errors.name[0] }}</span>
                </div>

                <div class="form-group">
                    <textarea :class="{'is-invalid': $page.errors.description}" v-model="form.description" class="form-control" placeholder="Task Description: Previous week, we have sent an invoice to Mr. Patel INV-101, need to keep taking follow-up till we receive the payment." />
                    <span v-if="$page.errors.description" class="text-danger">{{ $page.errors.description[0] }}</span>
                </div>
        </div>

        <div class="card-footer">
            <button type="submit" class="btn btn-success">Add Task</button>
        </div>
        </form>
    </div>
</template>

<script type="text/javascript">
    export default {
        data(){
            return {
                form: {                
                    name: null,
                    description: null,
                }
            }
        },
        methods: {
            submitForm(){
                let that = this
                this.$inertia.post('/tasks', this.form).then(function(){
                    that.form = {
                        name: null,
                        description: null,
                    }
                })
            }
        }
    }
</script>