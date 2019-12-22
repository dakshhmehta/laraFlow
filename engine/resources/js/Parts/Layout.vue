<template>
<div>
    <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
        <div class="container">
            <inertia-link class="navbar-brand" href="/home">
                {{ $page.app.name }}
            </inertia-link>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <!-- Right Side Of Navbar -->
                <ul class="navbar-nav">
                    <li class="nav-item dropdown">
                        <inertia-link href="/tasks" class="nav-link">Tasks</inertia-link>
                    </li>
                </ul>

                <!-- Right Side Of Navbar -->
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item dropdown">
                        <a class="nav-link" href="#" role="button" onclick="event.preventDefault();
                                             document.getElementById('logout-form').submit();">
                            Logout <span class="caret"></span>
                        </a>

                        <form id="logout-form" action="/logout" method="POST" style="display: none;">
                            <input type="hidden" name="_token" :value="$page.csrf_token">
                        </form>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <main class="py-4">
        <div class="pl-5 pr-5">
            <slot></slot>
        </div>
    </main>
</div>
</template>

<script>
export default {

}
</script>