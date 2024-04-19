    <form action="" method="POST">



        {{-- <input type="hidden" name="token" > --}}
        <input type="hidden" name="token" value="{{ $token }}">
        <hr> <br>
        <input type="password" name="password" placeholder="enter new password"> <hr>
        <button type="submit" >Reset Password</button>
@csrf
    </form>
