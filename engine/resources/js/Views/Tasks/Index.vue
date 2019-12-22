<template>
    <Layout>
        <div class="row justify-content-center">
            <div class="col-md-7">
                <div class="card">
                    <div class="card-header d-flex justify-content-between">
                        All Tasks
                        <inertia-link href="/tasks" class="btn btn-sm btn-success">+</inertia-link>
                    </div>

                    <div class="card-body">
                        <p class="text-center" v-if="tasks.length == 0">
                            <span class="text-primary">
                                No tasks. 
                                Try creating your first task. :)
                            </span>
                        </p>
                        <ul v-else class="list-group list-group-flush">
                            <li v-for="(task, i) in tasks" class="list-group-item">
                                <div class="row">
                                    <div class="col-md-9 text-truncate">
                                        {{ i + 1 }}.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                        <inertia-link :href="'/tasks/'+task.id">{{ task.name }}</inertia-link><br/><br/>

                                        <span class="badge badge-pill p-2 badge-dark">development</span>
                                        <span class="badge badge-pill p-2 badge-primary">review</span>
                                        <span class="badge badge-pill p-2 badge-success">approved</span>
                                    </div>

                                    <div class="col-md-2 text-right">
                                        Daksh M.<br/>
                                        <span class="text-muted">No Due date</span>
                                    </div>

                                    <div class="col-md-1">
                                        <inertia-link method="DELETE" title="Delete this task" :href="'/tasks/'+task.id" class="btn btn-sm btn-outline-danger">X</inertia-link>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-md-5" v-if="! task">
                <CreateForm></CreateForm>
            </div>
            <div class="col-md-5" v-if="task">
                <ViewPanel :task="task"></ViewPanel>

                <br/>
                <CommentPanel :task="task"></CommentPanel>
            </div>
        </div>
    </Layout>
</template>

<script type="text/javascript">
    import CreateForm from './Components/CreateForm'
    import ViewPanel from './Components/ViewPanel'
    import CommentPanel from './Components/CommentPanel'

    export default {
        props: ['tasks', 'task'],
        components: {
            CreateForm,
            ViewPanel,
            CommentPanel
        }
    }
</script>