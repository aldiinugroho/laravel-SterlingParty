<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sterling Party</title>
    <link rel="stylesheet" href={{URL::asset('./css/index.css')}}>
    <link rel="stylesheet" href={{URL::asset('./css/bar.css')}}>
    <link rel="stylesheet" href={{URL::asset('./css/admin.css')}}>
    <link rel="stylesheet" href={{URL::asset('./css/need.css')}}>
    <!-- <script src="http://code.jquery.com/jquery-1.8.3.js"></script> -->
    <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
</head>
<style>
    *{
        margin: 0;
        padding: 0;
    }
</style>
<body class="forbody">
    <!-- drop menu -->
    @include('adminheader')
    <!-- end of drop menu -->

    <div>
        <form class="form_sett_admin" action="" method="post">
            <div class="bg_cnt_inp">
                <h2>Add Item</h2>
                <div class="set_add_itm">
                    <div><input type="text" name="name" placeholder="Item Name"></div>
                    <div><input type="text" name="price" placeholder="Item Price"></div>
                    <div><input type="text" name="amount" placeholder="Item Amount"></div>
                </div>
                <div class="inp_fl_set"><input type="file" name="image" id=""></div>
                <div class="btn_admn_sett"><button>Add Item</button></div>
            </div>
        </form>
    </div>

    @if (!$item->isEmpty())
        <div>
            <div class="item-sell-cont-admin">
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
                                <form class="amount-cont-admin" action="#" method="post">
                                    {{ csrf_field() }}
                                    <div><p>Amount :</p></div>
                                    <div><input type="number" value={{$i->Item_Amount}} name="amount" id="amount"></div>
                                    <div><button>Change</button></div>
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

    <script src={{URL::asset('./js/bar.js')}}></script>
    <script src={{URL::asset('./js/index.js')}}></script>
</body>
</html>