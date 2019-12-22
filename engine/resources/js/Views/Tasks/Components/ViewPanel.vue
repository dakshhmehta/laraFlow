<template>
    <div class="card">
        <div class="card-header">{{ task.name }}</div>

        <div class="card-body">
            {{ task.description }}
        </div>
    </div>
</template>

<script type="text/javascript">
    export default {
        props: ['task']
    }
</script>