<template>
<div>
    <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
        <div class="container">
            <a class="navbar-brand" href="url('/')">
                {{ $page.app.name }}
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
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
        <slot></slot>
    </main>
</div>
</template>

<script>
export default {

}
</script>