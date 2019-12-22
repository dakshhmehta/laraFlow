<template>
    <Layout>
        <div class="row justify-content-center">
            <div class="col-md-7">
                <div class="card">
                    <div class="card-header">All Tasks</div>

                    <div class="card-body">
                        <p class="text-center" v-if="tasks.length == 0">
                            <span class="text-primary">
                                No tasks. 
                                Try creating your first task. :)
                            </span>
                        </p>
                        <ul v-else id="task-list">
                            <li v-for="task in tasks">
                                {{ task.name }}

                                <inertia-link method="DELETE" title="Delete this task" :href="'/tasks/'+task.id" class="btn btn-sm btn-outline-danger">
                                    X
                                </inertia-link>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-md-5">
                <CreateForm></CreateForm>
            </div>
        </div>
    </Layout>
</template>

<script type="text/javascript">
    import CreateForm from './Components/CreateForm'

    export default {
        props: ['tasks'],
        components: {
            CreateForm
        }
    }
</script>

<style type="text/css" scoped>
    #task-list li {
        margin-bottom: 15px;
    }
</style>