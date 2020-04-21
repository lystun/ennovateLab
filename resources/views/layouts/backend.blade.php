<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Admin |  {{ config('app.name') }} </title>
    <link rel="title icon" type="image/png" href="/img/favicon.png">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/backend.css') }}" rel="stylesheet">

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Poppins:400,800&display=swap" rel="stylesheet">

</head>
<body class="hold-transition sidebar-mini">
    <div class="wrapper" id="app">

        <!-- Navbar -->
        <nav class="main-header navbar navbar-expand navbar-white navbar-light">
        
            <ul class="navbar-nav">
                <li class="nav-item">
                <a class="nav-link" data-widget="pushmenu" href="#"><i class="fas fa-bars"></i></a>
                </li>
            </ul>
            
        </nav>

        <!-- Main Sidebar Container -->
        <aside class="main-sidebar sidebar-dark-primary elevation-4">
            <!-- Brand Logo -->
            <router-link to="/admin/dashboard" class="brand-link">
                <img src="/img/favicon1.png" alt="Logo" class="brand-image">
                <span class="brand-text font-weight-dark">  {{ config('app.name') }} </span>
            </router-link>

            <!-- Sidebar -->
            <div class="sidebar">
                
                <!-- Sidebar Menu -->
                <nav class="mt-5">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                
                        <li class="nav-item">
                            <router-link to="/admin/dashboard" class="nav-link" active-class="active">
                                <i class="nav-icon fas fa-tachometer-alt"></i>
                                <p>Dashboard</p>
                            </router-link>
                        </li>
            
                        <li class="nav-item has-treeview menu-open">
                            <router-link to="posts#" class="nav-link" active-class="active">
                                <i class="nav-icon fas fa-book"></i>
                                <p>
                                    Blog
                                    <i class="right fas fa-angle-left"></i>
                                </p>
                            </router-link>
                            
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <router-link to="/admin/posts" class="nav-link" active-class="active">
                                        <i class="nav-icon far fa-circle"></i>
                                        <p>All Posts</p>
                                    </router-link>
                                    <router-link to="/admin/categories" class="nav-link" active-class="active">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Post Categories </p>
                                    </router-link>
                                </li>
                            </ul>
                        </li>

                        <li class="nav-item">
                            <a href="/logout" class="nav-link">
                                <i class="nav-icon fas fa-sign-out-alt"></i>
                                <p>Logout</p>
                            </a>
                        </li>

                        @can('isAdmin')
                            <li class="nav-item">
                                <router-link to="/developer" class="nav-link">
                                    <i class="nav-icon fas fa-"></i>
                                    <p>Developer</p>
                                </router-link>
                            </li>

                            <li class="nav-item has-treeview menu-open">
                                <a href="#" class="nav-link">
                                    <i class="nav-icon fas fa-cog"></i>
                                    <p>Management
                                    <i class="right fas fa-angle-left"></i>
                                    </p>
                                </a>
                                <ul class="nav nav-treeview">
                                    <li class="nav-item">
                                        <router-link to="/users" class="nav-link">
                                            <i class="fas fa-users"></i>
                                            <p>Users</p>
                                        </router-link>
                                    </li>
                                </ul>
                            </li>
                        @endcan

                    </ul>
                </nav>

            </div>

        </aside>

        <div class="content-wrapper">

            <!-- Main content -->
            <div class="content">
                <div class="container-fluid">
                    <app-admin></app-admin>
                </div>
            </div>
        </div>

        
        <!-- Main Footer -->
        <footer class="main-footer">    
            <div class="float-right d-none d-sm-inline">{{ config('app.name') }} </div>
            <strong>Copyright &copy; {{ Date('Y') }} <a href="https://ennovatelab.com">{{ config('app.name') }}</a>.</strong> All rights reserved.
        </footer>
    </div>


    <script src="{{ asset('js/app.js') }}" ></script>
    <script src="https://kit.fontawesome.com/24b54c8fdd.js"></script>
    
</body>
</html>
