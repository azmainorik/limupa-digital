<header>
                <!-- Begin Header Top Area -->
                <div class="header-top">
                    <div class="container">
                        <div class="row">
                            <!-- Begin Header Top Left Area -->
                            <div class="col-lg-3 col-md-4">
                                <div class="header-top-left">
                                    <ul class="phone-wrap">
                                        <li><span>Telephone Enquiry:</span><a href="#">(+123) 123 321 345</a></li>
                                    </ul>
                                </div>
                            </div>
                            <!-- Header Top Left Area End Here -->
                            <!-- Begin Header Top Right Area -->
                            <div class="col-lg-9 col-md-8">
                                <div class="header-top-right">
                                    <ul class="ht-menu">
                                        <!-- Begin Setting Area -->
                                       
                                        <!-- Setting Area End Here -->
                                        <!-- Begin Currency Area -->
                                       
                                        <!-- Currency Area End Here -->
                                        <!-- Begin Language Area -->
                                        <li>
                                            <span class="language-selector-wrapper">Language :</span>
                                            <div class="ht-language-trigger"><span>English</span></div>
                                            <div class="language ht-language">
                                                <ul class="ht-setting-list">
                                                    <li class="active"><a href="#"><img src="assets/images/menu/flag-icon/1.jpg" alt="">English</a></li>
                                                    <li><a href="#"><img src="assets/images/menu/flag-icon/2.jpg" alt="">Français</a></li>
                                                </ul>
                                            </div>
                                        </li>
                                        <!-- Language Area End Here -->
                                    </ul>
                                </div>
                            </div>
                            <!-- Header Top Right Area End Here -->
                        </div>
                    </div>
                </div>
                
                <!-- Header Top Area End Here -->
                <!-- Begin Header Middle Area -->
                <div class="header-middle pl-sm-0 pr-sm-0 pl-xs-0 pr-xs-0">
                    <div class="container">
                        <div class="row">
                            <!-- Begin Header Logo Area -->
                            <div class="col-lg-3">
                                <div class="logo pb-sm-30 pb-xs-30">
                                    <a href="index.html">
                                         
                                    </a>
                                </div>
                            </div>
                            <!-- Header Logo Area End Here -->
                            <!-- Begin Header Middle Right Area -->
                            <div class="col-lg-9 pl-0 ml-sm-15 ml-xs-15">
                                <!-- Begin Header Middle Searchbox Area -->

                                <!-- Header Middle Searchbox Area End Here -->
                                <!-- Begin Header Middle Right Area -->
                                <div class="header-middle-right">
                                    <ul class="hm-menu">
                                        <!-- Begin Header Middle Wishlist Area -->
                                        @if(Session::get("customerId"))
                                        <a href="{{route('logout')}}">                                                
                                            <button type="logout" class="btn btn-outline-warning ">Logout </button>                                                
                                        </a>
                                        @else
                                        <a href="{{route('login.info')}}">                                                
                                            <button type="button" class="btn btn-outline-warning ">Login </button>                                                
                                        </a>
                                        <a href="{{route('customer-detail')}}">                                                
                                            <button type="button" class="btn btn-outline-warning ">Register </button>                                                
                                        </a>
                                        @endif
                                        <!-- Header Middle Wishlist Area End Here -->
                                        <!-- Begin Header Mini Cart Area -->
                                        
                                        <!-- Header Mini Cart Area End Here -->
                                    </ul>
                                </div>
                                <!-- Header Middle Right Area End Here -->
                            </div>
                            <!-- Header Middle Right Area End Here -->
                        </div>
                    </div>
                </div>
                <!-- Header Middle Area End Here -->
                <!-- Begin Header Bottom Area -->
                <div class="header-bottom header-sticky d-none d-lg-block d-xl-block">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-12">
                                <!-- Begin Header Bottom Menu Area -->
                                <div class="hb-menu">
                                    <nav>
                                        <ul>
                                            <li><a href="index.html">Home</a></li>
                                            <li class="dropdown-holder"><a href="">Browse Categories</a>
                                                <ul class="hb-dropdown">
                                                    @foreach($categories as $category)
                                                    <li class="sub-dropdown-holder"><a href="">{{$category->name}}</a>
                                                     @foreach($category->subCategory as $subCat)
                                                      <ul class="hb-dropdown hb-sub-dropdown">
                                                          <li><a href="{{route('brand-name', ['id' => $subCat->id])}}">{{$subCat->name}}</a></li>                                                            
                                                      </ul>    
                                                      @endforeach 
                                                    </li>
                                                    @endforeach
                                                </ul>                                                
                                            </li>                                            
                                        </ul>
                                                                         
                                    </nav>
                                </div>
                                <!-- Header Bottom Menu Area End Here -->
                                
                            </div>
                        </div>
                    </div>
                    
                </div>
                <!-- Header Bottom Area End Here -->
                <!-- Begin Mobile Menu Area -->
                <div class="mobile-menu-area d-lg-none d-xl-none col-12">
                    <div class="container"> 
                        <div class="row">
                            <div class="mobile-menu">
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Mobile Menu Area End Here -->
</header>