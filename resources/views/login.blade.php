@extends('layouts.layout')
@section('title','login')
<script src="js/email.js"></script>
<div class="container home-container">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="logo text-center">
                                        <!-- LOGO -->
                                   
                                </div>
                            </div>
                        </div>
                        <div class="row">
                        <div class="col-md-3 col-md-offset-1 col-sm-4">
                                <div class="home-iphone">
                                    <img src="images/logo perrito.png" alt="">
                                </div>
                            <div class="col-md-8 col-sm-8">
                                <div class="home_text">
                                    <!-- TITLE AND DESC -->
                                    <h1>SocialPets</h1>
                                    <p>Comunidad de amigos perrunos</p>
        
                                        <div class="download-btn">
                                        <!-- BUTTON -->
                                        <!-- Button trigger modal -->
                                        <a type="button" class="btn home-btn wow fadeInLeft" data-toggle="modal" data-target="#exampleModal">Log in</a>
                                        <a class="btn home-btn wow fadeInLeft" href="#DOWNLOAD">Register</a>
                                        <a class="tuor btn wow fadeInRight" href="#ABOUT">Más información<i class="fa fa-angle-down"></i></a>

                                        <!-- Modal -->
                                        <div class="modal fade modalCenter" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel">Log in</h5>
                                                <button type="button" class="close" data-dismiss="modal">
                                                <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                            
                                            <form action="" method="post" class="form-signin" onsubmit="return validation()" >
                                                @csrf
                                                    <div class="form-label-group">
                                                            <label>Nombre</label>
                                                            <input type="text" name="nombre" class="form-control" placeholder="nombre" required>
                                                        </div>
                                                        <label>Email</label>
                                                    <input type="text" name="email" id="email"class="form-control" placeholder="Correo electronico" required autofocus>
                                                    </div>
                                                    <div class="modal-footer">
                                            <button class="btn home-btn wow fadeInLeft enviar" type="submit" name="login">Log in</button>
                                                <p>No estas logeado? <a>Registrate</a></p>
                                                </form>
                                            </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            </div>
                        </div>
                    </div>
                </div>
@section('content')
@endsection