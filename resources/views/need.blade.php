<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sterling Party</title>
    <link rel="stylesheet" href={{URL::asset('./css/index.css')}}>
    <link rel="stylesheet" href={{URL::asset('./css/create.css')}}>
    <link rel="stylesheet" href={{URL::asset('./css/home.css')}}>
    <link rel="stylesheet" href={{URL::asset('./css/need.css')}}>
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

    <div class="header-cont">
        <div class="header">
            <div class="home-d-a"><a href="/index"><p>Back</p></a></div>
            <!-- <div class="history-d"><a href=""><p>History</p></a></div>
            <div class="create-d"><a href="./create.html"><p>Create event now</p></a></div>
            <div class="need-d"><a href=""><p>Need something ?</p></a></div> -->
        </div>
        <div>
            <div class="logout-conf"><a href="/cart"><img class="bag" src="./Assets/main/bag.png" alt="bag"></a></div>
        </div>
    </div>


    <div class="overall">
        <!-- main -->
        <div>
            <div class="base">
                <div class="main-vec">
                    <!-- boat -->
                    <!-- <div class="menu-order">
                        <form class="order" action="" method="post" onsubmit="return register()">
                            <div><input type="text" placeholder="Name" id="name"></div>
                            <div><input type="text" placeholder="Contact" id="contact"></div>
                            <div><input type="text" placeholder="Address" id="address"></div>
                            <div><input type="date" id="date"></div>
                            <div class="order-s">
                                <select class="opt-font" id="theme">
                                    <option selected value="null">Event theme</option>
                                    <option value="Casual">Casual</option>
                                    <option value="Halloween">Halloween</option>
                                    <option value="Pool">Pool</option>
                                    <option value="Rock">Rock</option>
                                    <option value="Other">Other</option>
                                </select>
                            </div>
                            <div><input type="text" placeholder="Additional themes" id="additional"></div>
                
                            <div class="acpt">
                                <div><input type="checkbox" name="acc" id="acc"></div>
                                <div><p>Agree to terms and conditions</p></div>
                            </div>

                            <div class="error-conf" id="errors"></div>
                
                            <div class="btn-change"><button>Change</button></div>
                
                        </form>
                    </div> -->

                    <!-- change plans -->
                    <!-- <div>
                        <form class="change-p" action="" method="post">
                            <div class="change-info"><p>Want to change the plans ? enter the ticket number and our customer service
                                will contact you directly.
                            </p></div>
                            <div class="inp-btn">
                                <div class="ticket"><input type="text" placeholder="#Ticket number"></div>
                                <div class="btn-ch"><button>Change</button></div>
                            </div>
                        </form>
                    </div> -->
                    @if (!$item->isEmpty())
                        <div>
                            <div class="item-sell-cont">
                                @foreach ($item as $i)
                                    <div>
                                        <div class="detail-item-conf">
                                            <div class="item-foto-cont">
                                                <div><img src={{"data:image/".$i->Item_ImageType.";base64,".base64_encode( $i->Item_Image )}} alt={{$i->Item_Name}}></div>
                                            </div>

                                            <div class="detail-conf-text">
                                                <div><p>{{$i->Item_Name}}</p></div>
                                                <div>Rp {{$i->Item_Price}}</div>
                                                <div>
                                                <form class="amount-cont" action="/addtocart/{{$i->Item_ID}}" method="post">
                                                    {{ csrf_field() }}
                                                    <div><p>Amount :</p></div>
                                                    <div><input type="number" name="amount" id="amount"></div>
                                                    <div><button>Add</button></div>
                                                </form>
                                            </div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                            <div class="err_itmmsg">
                                @error ('amount')
                                    <div class="red_text">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="forPaginate">
                                <div class="pagination">
                                    {{ $item->links() }}
                                </div>
                            </div>
                        </div>
                    @else
                        <div class="noitemtosee"><h2>We have no item soryy..</h2></div>
                    @endif
                    
                    

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