<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sterling Party</title>
    <link rel="stylesheet" href={{URL::asset('./css/index.css')}}>
    <link rel="stylesheet" href={{URL::asset('./css/change.css')}}>
    <link rel="stylesheet" href={{URL::asset('./css/home.css')}}>
    <link rel="stylesheet" href={{URL::asset('./css/need.css')}}>
    <link rel="stylesheet" href={{URL::asset('./css/cart.css')}}>
</head>
<style>
    *{
        margin: 0;
        padding: 0;
    }
</style>
<body class="back-reg">
    <!-- <div class="bags">
        <a href="./index.html"><img class="bag" src="./Assets/main/x.png" alt="bag"></a>
    </div> -->

    <!-- <div class="header-cont">
        <div class="header">
            <div class="home-d-a"><a href="./home.html"><p>Back</p></a></div>
        </div>
        <div>
            <div class="logout-conf"><a href="./cart.html"><img class="bag" src="./Assets/main/bag.png" alt="bag"></a></div>
        </div>
    </div> -->


    <div class="overall">
        <!-- main -->
        <div>
            <div class="base">
                <div class="main-vec">
                    <!-- boat -->

                    <!-- here -->

                    @if ($cart_tosee != 0)
                        <div>
                            {{-- ubah form jadi link biasa --}}
                            <form class="checkout-form" action="/checkout" method="get">
                                <div class="x-set">
                                    <div><a href="/need"><img class="x-order-close" src="./Assets/main/x.png" alt="x"></a></div>
                                </div>
                                <div class="white-conf">
                                    <div class="item-detail-cart">
                                        <div>Item name</div>
                                        <div>Qty</div>
                                        <div>Price</div>
                                        <div>Subtotal</div>
                                        <div>      </div>
                                    </div>
                                    <div class="tohideval">
                                        {{$total = 0}}
                                    </div>
                                    @foreach ($cart_tosee as $item => $i)
                                        <div class="tohideval">
                                            {{$subtotal = 0}}
                                        </div>
                                        <div class="item-detail-cart">
                                            <div>{{$i['Item_Name']}}</div>
                                            <div>{{$i['Item_Amount']}}</div>
                                            <div>{{$i['Item_Price']}}</div>
                                            <div>{{$subtotal = $i['Item_Price'] * $i['Item_Amount']}}</div>
                                            <div class="deltbtnred"><a href="/delete/{{$i['Item_ID']}}"><p>delete</p></a></div>
                                        </div>
                                        <div class="tohideval">
                                            {{$total += $subtotal}}
                                        </div>
                                    @endforeach
                                    
                                    <div><h2>Total price : {{$total}}</h2></div>
                                </div>

                                <div><button class="checkout-order">Checkout</button></div>

                            </form>
                        </div>
                    @else
                        <div class="emptypad-set">
                            <div><h2 class="emptycartsign">Your cart is empty..</h2></div>
                            <div><a class="red_text" href="/need">Click here to back.</a></div>
                        </div>
                    @endif
                    




                    <!-- end of here -->

                    <div class="boat">
                        <div><img src="./Assets/main/boat.png" alt="boat"></div>
                    </div>

                    <!-- castle -->
                    <div class="castle">
                        <img src="./Assets/main/castle.svg" alt="castle">
                    </div>

                    <!-- slogan -->
                    <div class="slogan">
                        <div class="imgrz">
                            <div class="getp" ><img src="./Assets/main/slogan/get.png" alt="get"></div>
                            <div class="whatp"><img src="./Assets/main/slogan/what.png" alt="what"></div>
                            <div class="youp"><img src="./Assets/main/slogan/you.png" alt="you"></div>
                            <div class="wantp"><img src="./Assets/main/slogan/want.png" alt="want"></div>
                        </div>
                    </div>
                    <!-- end of slogan -->

                </div>

                <!-- logo -->
                <div class="logo-cont">
                    <div><img src="./Assets/main/logo.png" alt="logo"></div>
                </div>
                <!-- end of logo -->

                <!-- layer1 -->
                <div class="ly1">
                    <img src="./Assets/main/gray.svg" alt="gray">
                </div>
                <!-- end of layer1 -->

                <!-- layer 2&3 -->
                <div class="l2n3">

                    <!-- layer2 -->
                    <div class="ly2">
                        <img src="./Assets/main/sand.svg" alt="sand">
                    </div>

                    <!-- layer3 -->
                    <div class="ly3">
                        <img src="./Assets/main/blue.svg" alt="blue">
                    </div>

                </div>
                <!-- end of layer2&3 -->

            </div>

        </div>
        <!-- end of main -->
    
    </div>

    <script src={{URL::asset('./js/order.js')}}></script>
</body>
</html>