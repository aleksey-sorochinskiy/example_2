<div class="row header">
    <div class="col">
        <a href="/"><img src="/images/header.gif" class="header-logo" alt=""></a>
        <div class="header-social">
            <a href="#"><i class="fab fa-facebook-square"></i></a>
            <a href="#"><i class="fab fa-instagram"></i></a>
            <a href="#"><i class="fab fa-vk"></i></a>
        </div>
    </div>

    @if(Route::currentRouteName() !== 'registration_form')
        @if(!Auth::user())
            <div class="col-3">
                <!-- LOGIN FORM-->
                <form method="POST" id="login-form" class="login-form" action="{{ route('login') }}">
                    @csrf
                    <div class="form-group">
                        @if ($errors->has('email'))
                            <div class="error">
                                <strong>{{ $errors->first('email') }}</strong>
                            </div>
                        @endif
                        <input id="email" type="email"
                               class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}"
                               name="email" value="{{ old('email') }}" required autofocus>
                    </div>
                    <div class="form-group">
                        @if ($errors->has('password'))
                            <div class="error">
                                <strong>{{ $errors->first('password') }}</strong>
                            </div>
                        @endif
                        <input id="password" type="password"
                               class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}"
                               name="password" required>
                    </div>
                    <button type="submit" class="btn btn-outline-info float-left">Ok</button>
                    <a class="register-link float-right" href="{{route('registration_form')}}">Регистрация</a>
                </form>
                <!-- END LOGIN FORM-->
            </div>
        @else
            <div class="col-3 header-profile">
                <p class="hello">
                    @if(Auth::user()->view_avatars)
                        @if(Auth::user()->avatar)
                            <img class="img-responsive profile-avatar-header" src="{{Auth::user()->avatar->link}}"
                                 alt="">
                        @endif
                    @endif
                    Hello {{Auth::user()->name}}
                </p>
                <div class="user-menu-hover btn btn-default">
                    <span>Меню пользователя</span>
                    <div class="user-menu-wrapper">
                        <div>
                            <a class="profile-link" href="{{route('user_profile',['id' =>Auth::user()->id])}}">Профиль
                                пользователя</a>
                            <a class="profile-link" href="{{route('edit_profile')}}">Настройки</a>

                            <a class="profile-link" href="{{route('gallery.list_user', ['id' => Auth::user()->id])}}">Галлерея</a>

                            <a class="profile-link" href="{{route('user.get_rating', ['id' => Auth::user()->id])}}">Репутация</a>


                            {{--<a class="profile-link" href="{{route('gallery.list_user', ['id' => Auth::user()->id])}}">Мои темы</a>--}}
                            {{--<a class="profile-link" href="{{route('gallery.list_user', ['id' => Auth::user()->id])}}">Мои посты</a>--}}

                            <a class="profile-link" href="{{route('replay.create')}}">Отправить свой/госу реплей</a>

                            <a class="profile-link" href="{{route('replay.my_user')}}">Мои реплеи</a>
                            <a class="profile-link" href="{{route('replay.my_gosu')}}">Мои госу реплеи</a>

                            <a class="profile-link" href="{{route('user.message.get_list')}}">Новые сообщения()</a>
                            {{--                            {{$general_helper->getNewUserMessage()}}--}}

                            <a class="profile-link" href="{{route('user.friends_list')}}">Список друзей</a>
                            <a class="profile-link" href="{{route('user.ignore_list')}}">Игнор лист</a>

                            <a class="profile-link" href="{{route('logout',['id' =>Auth::user()->id])}}">Выход</a>
                        </div>
                    </div>
                </div>
                @if(Auth::user()->user_role_id == 1)
                    <div>
                        <a href="{{route('admin.home')}}">Admin Panel</a>
                    </div>
                @endif
            </div>
        @endif
    @else
        <div class="col-3 header-profile"></div>
    @endif
</div>