<!doctype html>
<html class="no-js" lang="en">
<head>
    <meta charset="UTF-8">
    <title>
        @section('title')
        @show
    </title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link type="text/css" rel="stylesheet" href="{{asset('assets/css/components.css')}}"/>
    <link type="text/css" rel="stylesheet" href="{{asset('assets/css/custom.css')}}"/>
    <link type="text/css" rel="stylesheet" href="#" id="skin_change"/>
    <link href="{{ asset('assets/css/styles.css') }}" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Kaushan+Script|Courgette|Anton|Baloo+Tamma|Marvel|Katibeh" rel="stylesheet">
</head>

<body class="fixed_menu">
<div id="wrap">
    <div id="top">
        <nav class="navbar">
            <div class="container-fluid m-0">
                <a class="mr-0" href="index">
                    <h4 class="title-nav">Borrowin</h4>
                </a>
                <div class="menu mr-sm-auto">
                        <span class="toggle-left" id="menu-toggle">
                        <i class="fa fa-bars text-white"></i>
                    </span>
                </div>
                <div class="topnav dropdown-menu-right ml-auto">
                    <div class="btn-group">
                        <div class="notifications no-bg">
                            <a class="btn btn-default btn-sm messages" data-toggle="dropdown"> <i class="fa fa-envelope fa-1x text-white"></i>
                                {{-- <span class="badge badge-warning">Aca va el numero de notificaciones</span> --}}
                            </a>
                            <div class="dropdown-menu drop_box_align" role="menu" id="messages_dropdown">
                                <div class="popover-header">No tienes nuevos mensajes</div>
                                <div id="messages">
                                    <div class="data">
                                        <div class="row">
                                            <div class="col-2">
                                                <img src="" class="message-img avatar rounded-circle" alt="avatar1"></div>
                                            <div class="col-10 message-data"><strong></strong>
                                                <br>
                                                <small></small>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="popover-footer">
                                    <a href="mail_inbox">Bandeja de entrada</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="btn-group">
                        <div class="notifications messages no-bg">
                            <a class="btn btn-default btn-sm" data-toggle="dropdown"> <i class="fa fa-bell text-white"></i>
                                <span class="badge badge-danger"></span>
                            </a>
                            <div class="dropdown-menu drop_box_align" role="menu">
                                <div class="popover-header">No tienes nuevas notificaciones</div>
                                <div id="notifications">
                                    <div class="data">
                                        <div class="row">
                                            <div class="col-2">
                                                <img src="assets/img/" class="message-img avatar rounded-circle" alt="avatar1"></div>
                                            <div class="col-10 message-data">
                                                <i class="fa fa-clock-o"></i>
                                                <strong>Nombre de usuario</strong> notificacion
                                                <br>
                                                <small class="primary_txt">Horario</small>
                                                <br>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="popover-footer">
                                    <a href="#">Ver todos</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="btn-group">
                        <a class="btn btn-default btn-sm messages toggle-right">
                            &nbsp;
                            <i class="fa fa-cog text-white"></i>
                            &nbsp;
                        </a>
                    </div>
                    <div class="btn-group">
                        <div class="user-settings no-bg">
                            <button type="button" class="btn btn-default no-bg micheal_btn" data-toggle="dropdown">
                                <img src="{{asset('assets/img/profile/20171005215642_profile.jpg')}}" class="admin_img2 rounded-circle avatar-img" alt=""> <strong>{{ Auth::user()->email }}</strong>
                                <span class="fa fa-sort-down white_bg"></span>
                            </button>
                            <div class="dropdown-menu admire_admin">
                                <a class="dropdown-item" href="edit_user"><i class="fa fa-cogs"></i>
                                    Configuración</a>
                                <a class="dropdown-item" href="users"><i class="fa fa-bookmark-o"></i>
                                  &nbsp;&nbsp;Contactos</a>
                                <a class="dropdown-item" href="mail_inbox"><i class="fa fa-envelope"></i>
                                    &nbsp;Correo</a>
                                <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();                                               document.getElementById('logout-form').submit();"><i class="fa fa-sign-out"></i>
                                      &nbsp;Logout
                                    </a>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        {{ csrf_field() }}
                                    </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </nav>
    </div>
    <div class="wrapper">
        <div id="left" class="fixed">
            <div class="menu_scroll  left_scrolled">
                <div class="media user-media bg-dark dker">
                    <div class="user-media-toggleHover">
                        <span class="fa fa-user"></span>
                    </div>
                    <div class="user-wrapper bg-dark">
                        <a class="user-link" href="">
                            <img class="media-object img-thumbnail user-img rounded-circle admin_img3" alt="User Picture"
                                 src="{{asset('assets/img/profile/20171005215642_profile.jpg')}}">
                            <p class="text-white user-info">Bienvenido {{ Auth::user()->name}}</p></a>

                        <div class="search_bar col-lg-12">
                            <div class="input-group">
                                <input type="search" class="form-control" placeholder="Buscar">
                                <span class="input-group-btn">
                                <button class="btn without_border" type="button"><span class="fa fa-search">
                                </span></button>
                            </span>
                            </div>
                        </div>
                    </div>
                </div>
                <ul id="menu" class="bg-blue dker">
                    <li {!! (Request::is('index')? 'class="active"':"") !!}>
                    <a href="{{ URL::to('index') }} ">
                        <i class="fa fa-home"></i>
                        <span class="link-title menu_hide">&nbsp;Inicio
                            </span>
                    </a>
                    </li>
                    <li {!! (Request::is('portal')? 'class="active"':"") !!}>
                    <a href="{{ URL::to('portal') }} ">
                        <i class="fa fa-share-alt"></i>
                        <span class="link-title menu_hide">&nbsp;Muro
                            </span>
                    </a>
                    </li>

                    <li {!! (Request::is('users')|| Request::is('view_user')? 'class="dropdown_menu active"':"")!!}>
                    <a href="#">
                        <i class="fa fa-user"></i>
                        <span class="link-title menu_hide">&nbsp; Contactos</span>
                        <span class="fa arrow menu_hide"></span>
                    </a>
                    <ul>
                        <li {!! (Request::is('users')? 'class="active"':"") !!}>
                        <a href="{{URL::to('users')}} ">
                            <i class="fa fa-angle-right"></i>
                            &nbsp; Mis contactos
                        </a>
                        </li>
                        <li {!! (Request::is('view_user')? 'class="active"':"") !!}>
                        <a href="{{URL::to('view_user')}} ">
                            <i class="fa fa-angle-right"></i>
                            &nbsp; Mi perfil
                        </a>
                        </li>
                    </ul>
                    </li>
                    <li {!! (Request::is('productos')? 'class="active"':"") !!}>
                    <a href="{{ URL::to('productos') }} ">
                        <i class="fa fa-angle-right"></i>
                        &nbsp; Productos
                    </a>
                    </li>
                    <li  {!! (Request::is('mail_compose')|| Request::is('mail_inbox') || Request::is('mail_sent')|| Request::is('mail_spam')|| Request::is('mail_draft')|| Request::is('mail_trash') ? 'class="active"' : '') !!}>
                    <a href="#">
                        <i class="fa fa-envelope-o"></i>
                        <span class="link-title menu_hide">&nbsp; Email</span>
                        <span class="fa arrow menu_hide"></span>
                    </a>
                    <ul>
                        <li {!! (Request::is('mail_compose')? 'class="active"':"") !!}>
                        <a href="{{ URL::to('mail_compose') }} ">
                            <i class="fa fa-angle-right"></i>
                            &nbsp; Crear
                        </a>
                        </li>
                        <li {!! (Request::is('mail_inbox')? 'class="active"':"") !!}>
                        <a href="{{ URL::to('mail_inbox') }} ">
                            <i class="fa fa-angle-right"></i>
                            &nbsp; Bandeja de entrada
                        </a>
                        </li>
                        <li {!! (Request::is('mail_sent')? 'class="active"':"") !!}>
                        <a href="#">
                            <i class="fa fa-angle-right"></i>
                            &nbsp; Enviados
                        </a>
                        </li>
                        <li {!! (Request::is('mail_spam')? 'class="active"':"") !!}>
                        <a href="#">
                            <i class="fa fa-angle-right"></i>
                            &nbsp; Spam
                        </a>
                        </li>
                        <li {!! (Request::is('mail_draft')? 'class="active"':"") !!}>
                        <a href="#">
                            <i class="fa fa-angle-right"></i>
                            &nbsp; Borradores
                        </a>
                        </li>
                        <li {!! (Request::is('mail_trash')? 'class="active"':"") !!}>
                        <a href="#">
                            <i class="fa fa-angle-right"></i>
                            &nbsp; Papelera
                        </a>
                        </li>
                    </ul>
                    </li>
                    <li {!! (Request::is('contacto')? 'class="active"':"") !!}>
                    <a href="{{ URL::to('contacto-login') }} ">
                        <i class="fa fa-comments"></i>
                        <span class="link-title menu_hide">&nbsp;Contacto
                            </span>
                    </a>
                    </li>
                    <li {!! (Request::is('about')? 'class="active"':"") !!}>
                    <a href="{{ URL::to('about-login') }} ">
                        <i class="fa fa-question-circle "></i>
                        <span class="link-title menu_hide">&nbsp;FAQs
                            </span>
                    </a>
                    </li>
                  </ul>
            </div>
        </div>

        <div id="content" class="bg-container">
            @yield('content')
        </div>


    </div>
    @include('layouts.right_sidebar')
</div>


<script type="text/javascript" src="{{asset('assets/js/components.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/js/custom.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/js/pages/fixed_menu.js')}}"></script>

@yield('footer_scripts')
</body>
</html>
