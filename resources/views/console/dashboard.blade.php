@extends ('layout.console')

@section ('content')

    <section class="w3-padding">

        <ul id="dashboard">
            <li><a href="{{ env('APP_URL') }}/console/projects/list">Manage Projects</a></li>
            <li><a href="{{ env('APP_URL') }}/console/types/list">Manage Types</a></li>
            <li><a href="{{ env('APP_URL') }}/console/skills/list">Manage Skills</a></li>

            <li><a href="{{ env('APP_URL') }}/console/users/list">Manage Users</a></li>
            <li><a href="{{ env('APP_URL') }}/console/logout">Log Out</a></li>
        </ul>

    </section>

@endsection