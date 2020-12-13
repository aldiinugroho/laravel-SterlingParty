<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sterling Party</title>
    <link rel="stylesheet" href={{URL::asset('./css/index.css')}}>
    <link rel="stylesheet" href={{URL::asset('./css/create.css')}}>
    <link rel="stylesheet" href={{URL::asset('./css/home.css')}}>
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
            <div class="home-d"><a href="/index"><p>Home</p></a></div>
            <div class="history-d"><a href="/history"><p>History</p></a></div>
            <div class="create-d"><a href="/create"><p>Create event now</p></a></div>
            <div class="need-d"><a href="/need"><p>Need something ?</p></a></div>
        </div>
        <div>
            <div class="logout-conf"><a href="/"><p>Logout</p></a></div>
        </div>
    </div>

    <div class="overall">
        <!-- main -->
        <div>
            <div class="base">
                <div class="main-vec">
                    <!-- boat -->
                    <div class="menu-order">
                        <form class="order" action="/registerevent" method="post">
                            {{ csrf_field() }}
                            <div><input type="text" name="name" placeholder="Name" id="name"></div>
                            <div><input type="text" name="contact" placeholder="Contact" id="contact"></div>
                            <div><input type="text" name="address" placeholder="Address" id="address"></div>
                            <div><input type="date" name="date" id="date"></div>
                            <div class="order-s">
                                <select class="opt-font" name="theme" id="theme">
                                    <option selected value="null">Event theme</option>
                                    <option value="Casual">Casual</option>
                                    <option value="Halloween">Halloween</option>
                                    <option value="Pool">Pool</option>
                                    <option value="Rock">Rock</option>
                                    <option value="Other">Other</option>
                                </select>
                            </div>
                            <div><input type="text" name="additional" placeholder="Additional themes" id="additional"></div>


                            <div><input name="numberguest" placeholder="The number of guests" type="number" name="count" id="count"></div>

                            <div class="condi-conf">
                                <p>*The total price you get will be based on the number of invited guests</p>
                            </div>

                            <div class="total-conf">
                                <p>Rp -</p>
                            </div>

                            <div class="order-s">
                                <select name="paymentype" class="opt-font" id="theme">
                                    <option selected value="null">Payment type</option>
                                    <option value="Debit">Debit</option>
                                </select>
                            </div>


                
                            <div class="acpt">
                                <div><input type="checkbox" name="acc" id="acc"></div>
                                <div><p>Agree to terms and conditions</p></div>
                            </div>

                            <div class="error-conf" id="errors"></div>
                
                            <div class="sbmt-conf-1">
                                <div class="btn-order-create"><button>Register</button></div>
                                <div><a class="req-conf" href="">Request assistance ?</a></div>
                            </div>
                
                        </form>
                    </div>

                    <!-- change plans
                    <div>
                        <form class="change-p" action="./change.html" method="post">
                            <div class="change-info"><p>Want to change the plans ? enter the ticket number and our customer service
                                will contact you directly.
                            </p></div>
                            <div class="inp-btn">
                                <div class="ticket"><input type="text" placeholder="#Ticket number"></div>
                                <div class="btn-ch"><button>Change</button></div>
                            </div>
                        </form>
                    </div> -->

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