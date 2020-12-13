<div class="header-cont">
    @yield('header')
    <div class="header">
        <div class="home-c"><a href="/index"><p>Home</p></a></div>
        <div class="history-c"><a href="/history"><p>History</p></a></div>
        <div class="create-c"><a href="/create"><p>Create event now</p></a></div>
        <div class="need-c"><a href="/need"><p>Need something ?</p></a></div>
    </div>
    
    <div class="name_log_set">
        <div class="nameclient">{{$clientdata[0]['User_Name']}}</div>
        <div class="logout-conf"><a href="/logout"><p>Logout</p></a></div>
    </div>
</div>