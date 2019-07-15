<?php
/**
 * Created by PhpStorm.
 * User: ASUS
 * Date: 7/4/2019
 * Time: 12:55
 */
?>

@extends('templates.default')
@section('content')
    <div class="row page-titles">
        <div class="col-md-5 col-8 align-self-center">
            <h3 class="text-themecolor">Dasboard</h3>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="javascript:void(0)">Event Tegal</a></li>
                <li class="breadcrumb-item active">Dasboard</li>
            </ol>
        </div>
    </div>
    <div class="row">
        <!-- Column -->
        <div class="col-lg-4 col-md-6">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex flex-row">
                        <div class="round round-lg align-self-center round-info"><i class="mdi mdi-bookmark-check"></i></div>
                        <div class="m-l-10 align-self-center">
                            <h3 class="m-b-0 font-light">{{$event}}</h3>
                            <h5 class="text-muted m-b-0">Event</h5></div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Column -->
        <!-- Column -->
        <div class="col-lg-4 col-md-6">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex flex-row">
                        <div class="round round-lg align-self-center round-warning"><i class="mdi mdi-animation"></i></div>
                        <div class="m-l-10 align-self-center">
                            <h3 class="m-b-0 font-lgiht">{{$kategori}}</h3>
                            <h5 class="text-muted m-b-0">Categories</h5></div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Column -->
        <!-- Column -->
        <div class="col-lg-4 col-md-6">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex flex-row">
                        <div class="round round-lg align-self-center round-primary"><i class="mdi mdi-account-card-details"></i></div>
                        <div class="m-l-10 align-self-center">
                            <h3 class="m-b-0 font-lgiht">{{$client}}</h3>
                            <h5 class="text-muted m-b-0">Client</h5></div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Column -->
{{--        <!-- Column -->
        <div class="col-lg-3 col-md-6">
        </div>
        <!-- Column -->--}}
    </div>
@endsection
