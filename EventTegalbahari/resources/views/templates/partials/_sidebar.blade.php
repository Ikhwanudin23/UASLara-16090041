<?php
/**
 * Created by PhpStorm.
 * User: ASUS
 * Date: 7/1/2019
 * Time: 15:02
 */

?>

<aside class="left-sidebar">
    <!-- Sidebar scroll-->
    <div class="scroll-sidebar">
        <!-- User profile -->
        <div class="user-profile" style="background: url('{{ asset('assets/images/background/user-info.jpg') }}')  no-repeat;">
            <!-- User profile image -->
            <div class="profile-img"> <img src="{{ asset('assets/images/users/profile.png') }}" alt="user" /> </div>
            <!-- User profile text-->
            <div class="profile-text"> <a href="#" class="dropdown-toggle u-dropdown" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="true">Ikhwanudin</a>
                <div class="dropdown-menu animated flipInY"> <a href="#" class="dropdown-item"><i class="ti-user"></i> My Profile</a> <a href="#" class="dropdown-item"><i class="ti-wallet"></i> My Balance</a> <a href="#" class="dropdown-item"><i class="ti-email"></i> Inbox</a>
                    <div class="dropdown-divider"></div> <a href="#" class="dropdown-item"><i class="ti-settings"></i> Account Setting</a>
                    <div class="dropdown-divider"></div> <a href="login.html" class="dropdown-item"><i class="fa fa-power-off"></i> Logout</a> </div>
            </div>
        </div>
        <!-- End User profile text-->

        <!-- Sidebar navigation-->
        <nav class="sidebar-nav">
            <ul id="sidebarnav">
                <li class="nav-small-cap">PERSONAL</li>

                <li> <a class="has-arrow waves-effect waves-dark" href="#" aria-expanded="false"><i class="mdi mdi-calendar-text"></i><span class="hide-menu">Dasboard</span></a>
                    <ul aria-expanded="false" class="collapse">
                        <li><a href="{{route('dashboard')}}">Dashboard</a></li>
                    </ul>
                </li>

                <li> <a class="has-arrow waves-effect waves-dark" href="#" aria-expanded="false"><i class="mdi mdi-bookmark-check"></i><span class="hide-menu">Event</span></a>
                    <ul aria-expanded="false" class="collapse">
                        <li><a href="{{route('event')}}">Daftar Event Client</a></li>
                        <li><a href="{{route('event.create')}}">Tambah Event</a></li>

                    </ul>
                </li>
                <li> <a class="has-arrow waves-effect waves-dark" href="#" aria-expanded="false"><i class="mdi mdi-account-card-details"></i><span class="hide-menu">Client</span></a>
                    <ul aria-expanded="false" class="collapse">
                        <li><a href="{{route('client')}}">Daftar Client</a></li>
                        <li><a href="{{route('client.create')}}">Tambah Client</a></li>
                    </ul>
                </li>
                <li> <a class="has-arrow waves-effect waves-dark" href="#" aria-expanded="false"><i class="mdi mdi-animation"></i><span class="hide-menu">Kategori Event</span></a>
                    <ul aria-expanded="false" class="collapse">
                        <li><a href="{{route('categories')}}">Daftar Kategori Event</a></li>
                        <li><a href="{{route('categories.create')}}">Tambah Kategori Event</a></li>

                    </ul>
                </li>
{{--                <li> <a class="has-arrow waves-effect waves-dark" href="#" aria-expanded="false"><i class="mdi mdi-chart-bubble"></i><span class="hide-menu">Event Client Sponsor</span></a>
                    <ul aria-expanded="false" class="collapse">
                        <li><a href="ui-cards.html">Daftar Event Sponsor</a></li>
                        <li><a href="ui-user-card.html">Tambah Event client Sponsor</a></li>

                    </ul>
                </li>
                <li class="nav-devider"></li>
                <li> <a class="has-arrow waves-effect waves-dark" href="#" aria-expanded="false"><i class="mdi mdi-map-marker"></i><span class="hide-menu">Admin</span></a>
                    <ul aria-expanded="false" class="collapse">
                        <li><a href="map-google.html">Daftar Admin</a></li>
                        <li><a href="map-vector.html">Tambah Admin</a></li>
                    </ul>
                </li>--}}
            </ul>
        </nav>
        <!-- End Sidebar navigation -->
    </div>
    <!-- End Sidebar scroll-->
    <!-- Bottom points-->
    <div class="sidebar-footer">
        <!-- item--><a href="" class="link" data-toggle="tooltip" title="Settings"><i class="ti-settings"></i></a>
        <!-- item--><a href="" class="link" data-toggle="tooltip" title="Email"><i class="mdi mdi-gmail"></i></a>
        <!-- item--><a href="{{url('/')}}" class="link" data-toggle="tooltip" title="Logout"><i class="mdi mdi-power"></i></a> </div>
    <!-- End Bottom points-->
</aside>
