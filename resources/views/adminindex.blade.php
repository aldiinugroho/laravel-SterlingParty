<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sterling Party</title>
    <link rel="stylesheet" href={{URL::asset('./css/index.css')}}>
    <link rel="stylesheet" href={{URL::asset('./css/bar.css')}}>
    <link rel="stylesheet" href={{URL::asset('./css/admin.css')}}>
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

    <div class="evnt_ttl"><h2>Event Request</h2></div>
        @if ($getevent->isEmpty())
            {{-- no data to show --}}
        @else
            @foreach ($getevent as $i)
            <div class="cent_data">
                <div class="cont_event_data">
                    <div>
                        <div class="detail_set_conf">
                            <div class="detail_set_conf_title">Name</div>
                            <div>{{$i->Event_Name}}</div>
                        </div>
                        <div class="detail_set_conf">
                            <div class="detail_set_conf_title">Contact</div>
                            <div>0{{$i->Event_Contact}}</div>
                        </div>
                        <div class="detail_set_conf">
                            <div class="detail_set_conf_title">Theme</div>
                            <div>{{$i->Theme_Name}}</div>
                        </div>
                        <div class="detail_set_conf">
                            <div class="detail_set_conf_title">Date</div>
                            <div>{{$i->Event_Date}}</div>
                        </div>
                        <br>
                        <div class="detail_set_conf_title">Address</div>
                        <div>{{$i->Event_Address}}</div>
                        </div>
                        <br>
                        <div class="detail_set_conf_title">Additional</div>
                        <div>{{$i->Event_Additional}}</div>
                    </div>
                </div>
            </div>
            @endforeach
        @endif
    </div>
    <script src={{URL::asset('./js/bar.js')}}></script>
    <script src={{URL::asset('./js/index.js')}}></script>
</body>
</html>