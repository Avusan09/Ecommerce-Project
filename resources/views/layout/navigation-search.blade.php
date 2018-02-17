<nav class="white search-navigation hide-on-med-and-down">
    <div class="nav-wrapper">
       <div class="row">
            {{--Logo--}}
            <div class="col s2">
                <a href="#" class="dropdown-button brand-logo black-text" data-activates="categories">
                    <img class="logo-image" src="http://shmector.com/_ph/13/979709898.png" alt="">
                </a>
            </div>

            {{--Search Form--}}
            <div class="col s6  hide-on-med-and-down" >
                {{--<form class="blue darken-4" action="{{route('productsearch')}}">--}}
                    {{--<div class="input-field">--}}
                        {{--<input id="search" type="search" id="mainsearch" name="productsearch" required placeholder="Search for products or categories">--}}
                        {{--<label class="label-icon" for="search"><i class="material-icons">search</i></label>--}}
                        {{--<i class="material-icons">close</i>--}}
                    {{--</div>--}}
                {{--</form>--}}

                <div id="app">

                    <ais-index
                            app-id="HRI7P97C9Z"
                            api-key="f8c5161de71e4bb53f33b0e94fcfffa1"
                            index-name="products">
                        <a class='dropdown-button btn black-text' style="width: 100%;margin-top: 10px" data-hover="false" href='#' data-activates='main-search'>
                        <ais-input onkeypress="myFunction()" class="black-text" placeholder="search here"  autofocus></ais-input>
                        </a>

                        <div id="myDIV" style="display:none" class="black-text">
                            <ul id='main-search' class='dropdown-content black-text' style="width: 100%;margin-top: 10px">
                                <ais-results>
                                    <template slot-scope="{ result }">
                                        <a :href="'/products/' + result.id ">
                                        <h5>
                                            @{{ result.Title }}
                                        </h5>
                                        </a>
                                    </template>
                                </ais-results>
                            </ul>

                        </div>
                    </ais-index>


                </div>




            </div>

            {{--Userstuff--}}
            <div class="col s4  hide-on-med-and-down" >
                <ul>
                    <li class="carts"><a class="dropdown-button waves-effect waves-teal" href="#!" data-activates="help-drop">Help<i class="material-icons right">arrow_drop_down</i></a></li>
                    <li class="carts"><a class="dropdown-button waves-effect waves-teal" href="#!" data-activates="profile-drop">Username<i class="material-icons right">arrow_drop_down</i></a></li>
                    <li class="carts"><a class="waves-effect waves-teal modal-trigger" href="#cart"><i class="fas fa-cart-plus fa-2x "> </i><span class="new badge blue darken-4">4</span></a></li>
                </ul>
            </div>
        </div>
        </div>

</nav>

<nav class="black-text search-navigation-mini hide-on-large-only">
    <a href="#" class="brand-logo valign-wrapper black-text" style="z-index: 1">
        <img class="logo-image-mini" src="http://shmector.com/_ph/13/979709898.png" alt="">
    </a>
    <a href="#" data-activates="mobile-demo" class="button-collapse teal"><i class="material-icons">menu</i></a>

    <ul class="collapsible side-nav" id="mobile-demo" data-collapsible="accordion" >
        <li>
            <div class="collapsible-header"><i class="material-icons red-text">laptop_apple</i>Laptops</div>
            <div class="collapsible-body"><span>
                    <ul>
                        <li><a href="#!">Gaming Laptops</a></li>
                        <li><a href="#!">Business Laptops</a></li>
                        <li><a href="#!">Personal Laptops</a></li>
                    </ul>
                </span></div>
        </li>
        <li>
            <div class="collapsible-header"><i class="material-icons teal-text">phones</i>Phones</div>
            <div class="collapsible-body"><span>
                    <ul>
                        <li><a href="#!">Smart Phones</a></li>
                        <li><a href="#!">Feature Phones</a></li>
                        <li><a href="#!">Phablets</a></li>
                    </ul>
                </span></div>
        </li>
        <li>
            <div class="collapsible-header"><i class="material-icons green-text">whatshot</i>Desktop</div>
            <div class="collapsible-body"><span>
                    <ul>
                        <li><a href="#!">My account</a></li>
                        <li><a href="#!">Saved Orders</a></li>
                        <li><a href="#!">All Orders</a></li>
                    </ul>
                </span></div>
        </li>
        <li>
            <div class="collapsible-header"><i class="material-icons red-text">laptop_apple</i>Laptops</div>
            <div class="collapsible-body"><span>
                    <ul>
                        <li><a href="#!">My account</a></li>
                        <li><a href="#!">Saved Orders</a></li>
                        <li><a href="#!">All Orders</a></li>
                    </ul>
                </span></div>
        </li>
        <li>
            <div class="collapsible-header"><i class="material-icons red-text">laptop_apple</i>Laptops</div>
            <div class="collapsible-body"><span>
                    <ul>
                        <li><a href="#!">My account</a></li>
                        <li><a href="#!">Saved Orders</a></li>
                        <li><a href="#!">All Orders</a></li>
                    </ul>
                </span></div>
        </li>
        <li>
            <div class="collapsible-header"><i class="material-icons red-text">laptop_apple</i>Laptops</div>
            <div class="collapsible-body"><span>
                    <ul>
                        <li><a href="#!">My account</a></li>
                        <li><a href="#!">Saved Orders</a></li>
                        <li><a href="#!">All Orders</a></li>
                    </ul>
                </span></div>
        </li>
    </ul>
</nav>

{{--dropdown structure--}}

{{--Help --}}
<ul id="help-drop" class="dropdown-content">
    <li><a href="#!">Contact Us</a></li>
    <li><a href="#!">Your Orders</a></li>
</ul>

{{--Profile --}}
<ul id="profile-drop" class="dropdown-content">
    <li><a href="#!">My account</a></li>
    <li><a href="#!">Saved Orders</a></li>
    <li><a href="#!">All Orders</a></li>
</ul>

{{--Laptop --}}
<ul id="laptops-drop" class="dropdown-content">
    <li><a href="#!">My account</a></li>
    <li><a href="#!">Saved Orders</a></li>
    <li><a href="#!">All Orders</a></li>
</ul>

{{--Phones --}}
<ul id="phones-drop" class="dropdown-content">
    <li><a href="#!">My account</a></li>
    <li><a href="#!">Saved Orders</a></li>
    <li><a href="#!">All Orders</a></li>
</ul>
{{--Modals --}}

{{--Cart--}}
<div id="cart" class="modal modal-fixed-footer">
    <div class="modal-content">
        <h4>Your Cart</h4>
        <br>
        <ul class="collection">
            <li class="collection-item avatar">
                <i class="material-icons circle red">play_arrow</i>
                <span class="title">Title</span>
                <p>First Line <br>
                    Second Line
                </p>
                <a href="#!" class="secondary-content"><i class="material-icons">grade</i></a>
            </li>
            <li class="collection-item avatar">
                <i class="material-icons circle">folder</i>
                <span class="title">Title</span>
                <p>First Line <br>
                    Second Line
                </p>
                <a href="#!" class="secondary-content"><i class="material-icons">grade</i></a>
            </li>
            <li class="collection-item avatar">
                <i class="material-icons circle green">insert_chart</i>
                <span class="title">Title</span>
                <p>First Line <br>
                    Second Line
                </p>
                <a href="#!" class="secondary-content"><i class="material-icons">grade</i></a>
            </li>
            <li class="collection-item avatar">
                <i class="material-icons circle red">play_arrow</i>
                <span class="title">Title</span>
                <p>First Line <br>
                    Second Line
                </p>
                <a href="#!" class="secondary-content"><i class="material-icons">grade</i></a>
            </li>
        </ul>
    </div>
    <div class="modal-footer">
        <a href="#!" class="modal-action modal-close waves-effect waves-teal btn-flat ">Proceed to checkout</a>
    </div>
</div>


<ul id="categories" class="dropdown-content">
    <li class="carts"><a href="/products/">Laptops</a></li>
    <li class="carts"><a href="/products/">Phones</a></li>
    </ul>
</div>