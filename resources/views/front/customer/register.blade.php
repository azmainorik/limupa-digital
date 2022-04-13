@extends('front.master')
@section('title')


@endsection


@section('body')

            <!-- Begin Li's Breadcrumb Area -->
            <div class="breadcrumb-area">
                <div class="container">
                    <div class="breadcrumb-content">
                        <ul>
                            <li><a href="index.html">Home</a></li>
                            <li class="active">Login Register</li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- Li's Breadcrumb Area End Here -->
            <!-- Begin Login Content Area -->
            <div class="page-section mb-60">
                <div class="container">
                    <div class="row">
                       
                        <div class="col-sm-12 col-md-12 col-lg-6 col-xs-12">
                            <form action="{{route('customer.register')}}" method="post">
                                @csrf
                                <div class="login-form">
                                    <h4 class="login-title">Register</h4>
                                    <div class="row">
                                        <div class="col-md-12 mb-20">
                                            <label>Name</label>
                                            <input class="mb-0" name="name" type="text" placeholder="Name">
                                            @if ($errors->has('name'))
                                               <span class="text-danger">{{ $errors->first('name') }}</span>
                                            @endif
                                        </div>
                                      
                                        <div class="col-md-12 mb-20">
                                            <label>Email Address*</label>
                                            <input class="mb-0" name="email"  type="email" placeholder="Email Address">
                                            @if ($errors->has('email'))
                                               <span class="text-danger">{{ $errors->first('email') }}</span>
                                            @endif 
                                        </div>
                                        <div class="col-md-12 mb-20">
                                            <label>Mobile*</label>
                                            <input class="mb-0" name="mobile"  type="text" placeholder="mobile no">
                                            @if ($errors->has('mobile'))
                                               <span class="text-danger">{{ $errors->first('mobile') }}</span>
                                            @endif 
                                        </div>
                                        <div class="col-md-6 mb-20">
                                            <label>Password</label>
                                            <input class="mb-0" name="password"  type="password" placeholder="Password">
                                            @if ($errors->has('password'))
                                               <span class="text-danger">{{ $errors->first('password') }}</span>
                                            @endif
                                        </div>
                                        <div class="col-md-6 mb-20">
                                            <label>Confirm Password</label>
                                            <input class="mb-0" name="confirm_password" type="password" placeholder="Confirm Password">
                                            @if ($errors->has('confirm'))
                                               <span class="text-danger">{{ $errors->first('confirm') }}</span>
                                            @endif
                                        </div>
                                        
                                        <div class="col-12">
                                        <button type="" class="register-button mt-0">Register</button>
                                        </div>
                                        <div class="col-md-4 mt-10 mb-20 text-left text-md-right">
                                            <a href="{{route('login.info')}}"> already have a account?</a>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Login Content Area End Here -->
@endsection