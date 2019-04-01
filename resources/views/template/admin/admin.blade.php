<!DOCTYPE html>
<html lang="zxx">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        {{-- CSRF Token --}}
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>@if (trim($__env->yieldContent('template_title')))@yield('template_title') | @endif {{ config('app.name', Lang::get('titles.app')) }}</title>
        <meta name="description" content="">
        <meta name="author" content="Jeremy Kenedy">
        <link rel="shortcut icon" href="/favicon.ico">
      

        <link href="{{ mix('/css/app.css') }}" rel="stylesheet">

        @yield('template_linked_css')

        <style type="text/css">
            @yield('template_fastload_css')

            @if (Auth::User() && (Auth::User()->profile) && (Auth::User()->profile->avatar_status == 0))
                .user-avatar-nav {
                    background: url({{ Gravatar::get(Auth::user()->email) }}) 50% 50% no-repeat;
                    background-size: auto 100%;
                }
            @endif

        </style>

        <script>
            window.Laravel = {!! json_encode([
                'csrfToken' => csrf_token(),
            ]) !!};

        </script>

    </head>
    <body class="mdl-color--grey-100">

        @section('content')
            <div class="mdl-card mdl-shadow--2dp mdl-cell mdl-cell--12-col mdl-cell--8-col-tablet mdl-cell--12-col-desktop margin-top-0">
                <div class="mdl-card__title mdl-color--primary mdl-color-text--white">
                    <h2 class="mdl-card__title-text logo-style">
                      Users
                    </h2>

                </div>
                <div class="mdl-card__supporting-text mdl-color-text--grey-600 padding-0 context">
                    <div class="table-responsive material-table">
                        <table id="user_table" class="mdl-data-table mdl-js-data-table data-table" cellspacing="0" width="100%">
                          <thead>
                            <tr>
                                <th class="mdl-data-table__cell--non-numeric">ID</th>
                                <th class="mdl-data-table__cell--non-numeric">Username</th>
                                <th class="mdl-data-table__cell--non-numeric">Email</th>
                                <th class="mdl-data-table__cell--non-numeric mdl-layout--large-screen-only">First Name</th>
                                <th class="mdl-data-table__cell--non-numeric mdl-layout--large-screen-only">Last Name</th>
                                <th class="mdl-data-table__cell--non-numeric">Role</th>
                                <th class="mdl-data-table__cell--non-numeric mdl-layout--large-screen-only">Created</th>
                                <th class="mdl-data-table__cell--non-numeric mdl-layout--large-screen-only">Updated</th>
                                <th class="mdl-data-table__cell--non-numeric no-sort no-search">Actions</th>
                            </tr>
                          </thead>
                          <tbody>
                                @foreach ($users as $users)
                                    <tr>
                                        <td class="mdl-data-table__cell--non-numeric"><a href="{{ URL::to('users/' . $users->id) }}">{{$users->id}}</a></td>
                                        <td class="mdl-data-table__cell--non-numeric"><a href="{{ URL::to('users/' . $users->id) }}">{{$users->name}} </a></td>
                                        <td class="mdl-data-table__cell--non-numeric"><a href="{{ URL::to('users/' . $users->id) }}">{{$users->email}} </a></td>
                                        <td class="mdl-data-table__cell--non-numeric mdl-layout--large-screen-only"><a href="{{ URL::to('users/' . $users->id) }}">{{$users->first_name}} </a></td>
                                        <td class="mdl-data-table__cell--non-numeric mdl-layout--large-screen-only"><a href="{{ URL::to('users/' . $users->id) }}">{{$users->last_name}} </a></td>
                                        <td class="mdl-data-table__cell--non-numeric">
                                            @foreach ($users->roles as $users_role)
                                                @if ($users_role->name == 'User')
                                                    @php
                                                        $levelIcon        = 'person';
                                                        $levelName        = 'User';
                                                        $levelBgClass     = 'mdl-color--blue-200';
                                                        $leveIconlBgClass = 'mdl-color--blue-500';
                                                    @endphp
                                                @elseif ($users_role->name == 'Admin')
                                                    @php
                                                        $levelIcon        = 'supervisor_account';
                                                        $levelName        = 'Admin';
                                                        $levelBgClass     = 'mdl-color--red-200';
                                                        $leveIconlBgClass = 'mdl-color--red-500';
                                                    @endphp
                                                @elseif ($users_role->name == 'Unverified')
                                                    @php
                                                        $levelIcon        = 'person_outline';
                                                        $levelName        = 'Unverified';
                                                        $levelBgClass     = 'mdl-color--orange-200';
                                                        $leveIconlBgClass = 'mdl-color--orange-500';
                                                    @endphp
                                                @else
                                                    @php
                                                        $levelIcon        = 'person_outline';
                                                        $levelName        = 'Unverified';
                                                        $levelBgClass     = 'mdl-color--orange-200';
                                                        $leveIconlBgClass = 'mdl-color--orange-500';
                                                    @endphp
                                                @endif
                                            @endforeach
                                            <a href="{{ URL::to('users/' . $users->id) }}">
                                                <span class="mdl-chip mdl-chip--contact {{ $levelBgClass }} mdl-color-text--white md-chip">
                                                    <span class="mdl-chip__contact {{ $leveIconlBgClass }} mdl-color-text--white">
                                                        <i class="material-icons">{{ $levelIcon }}</i>
                                                    </span>
                                                    <span class="mdl-chip__text">{{ $levelName }}</span>
                                                </span>
                                            </a>
                                        </td>
                                        <td class="mdl-data-table__cell--non-numeric mdl-layout--large-screen-only"><a href="{{ URL::to('users/' . $users->id) }}">{{$users->created_at}} </a></td>
                                        <td class="mdl-data-table__cell--non-numeric mdl-layout--large-screen-only"><a href="{{ URL::to('users/' . $users->id) }}">{{$users->updated_at}} </a></td>
                                        <td class="mdl-data-table__cell--non-numeric">


                                            {{-- VIEW USER PROFILE ICON BUTTON --}}
                                            <a href="/profile/{{$users->name}}" class="mdl-button mdl-button--icon mdl-js-button mdl-js-ripple-effect" title="View User Profile">
                                                <i class="material-icons mdl-color-text--green">person</i>
                                            </a>


                                            {{-- VIEW USER ACCOUNT ICON BUTTON --}}
                                            <a href="{{ URL::to('users/' . $users->id) }}" class="mdl-button mdl-button--icon mdl-js-button mdl-js-ripple-effect" title="View User Account">
                                                <i class="material-icons mdl-color-text--blue">account_circle</i>
                                            </a>

                                            {{-- EDIT USER ICON BUTTON --}}
                                            <a href="{{ URL::to('users/' . $users->id . '/edit') }}" class="mdl-button mdl-button--icon mdl-js-button mdl-js-ripple-effect">
                                                <i class="material-icons mdl-color-text--orange">edit</i>
                                            </a>

                                            {{-- DELETE ICON BUTTON AND FORM CALL --}}
                                            {!! Form::open(array('url' => 'users/' . $users->id, 'class' => 'inline-block', 'id' => 'delete_'.$users->id)) !!}
                                                {!! Form::hidden('_method', 'DELETE') !!}
                                                <a href="#" class="dialog-button dialiog-trigger-delete dialiog-trigger{{$users->id}} mdl-button mdl-button--icon mdl-js-button mdl-js-ripple-effect" data-userid="{{$users->id}}">
                                                    <i class="material-icons mdl-color-text--red">delete</i>
                                                </a>
                                            {!! Form::close() !!}
                                        </td>
                                    </tr>
                                @endforeach
                          </tbody>
                        </table>
                    </div>
                </div>
                <div class="mdl-card__menu" style="top: -4px;">

                    <a href="{{ url('/users/create') }}" class="mdl-button mdl-button--icon mdl-js-button mdl-js-ripple-effect mdl-color-text--white" title="Add New User">
                        <i class="material-icons">person_add</i>
                        <span class="sr-only">Add New User</span>
                    </a>

                    <a href="{{ URL::to('/users/deleted') }}" class="mdl-button mdl-button--icon mdl-js-button mdl-js-ripple-effect mdl-color-text--white" title="Show Deleted Users">
                        <i class="material-icons" aria-hidden="true">delete_sweep</i>
                        <span class="sr-only">Show Deleted Users</span>
                    </a>

                </div>
            </div>
        @endsection

    </body>
</html>