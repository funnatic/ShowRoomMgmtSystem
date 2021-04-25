

<x-headers/>
<link rel="stylesheet" href="{{asset('css/admin_auth.css')}}">

<div class="login_section">
<div class="card mx-auto d-block">
    <div class="card-header bg-warning">
        <h5 class="card-title">EIMS</h5>
        @if(session()->has('message'))
        <h4 class='card-text  text-danger mt-4'>{{session('message')}}</h4>
        @endif
    </div>
    <div class="card-body bg-secondary">
        <form action="authentication" method="POST">
            @csrf;
            <div class="input-group mb-3 ">
            <div class="input-group-prepend">
                <span class="input-group-text"><i class="fa fa-shield"></i></span>
            </div>
                <input type="text" placeholder="Passcode" required name="passcode">
        </div>
        <div class="input-group mb-3">
            <div class="input-group-prepend">
                <span class="input-group-text"><i class="fa fa-user"></i></span>
            </div>
            <input type="text" name="username" placeholder="Username" required>
        </div>
        <div class="input-group mb-3">
            <div class="input-group-prepend">
                <span class="input-group-text"><i class="fa fa-lock"></i></span>
            </div>
            <input type="password" name="password" placeholder="Password" required>
        </div>
        <button class="btn btn-success mb-3" style="margin-left:50px;">Sign In</button>
        
        </form>
    </div>
</div>
</div>
