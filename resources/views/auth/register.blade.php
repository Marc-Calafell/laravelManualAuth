@if (count($errors) > 0)
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<div class="row">
    <div class="col-md-4"></div>
        <div class="col-md-4">
            <form action="/register" method="POST">
                {{ csrf_field() }}
                <div class="form-group">
                    Email : <input type="text" name="email">
                </div>

                <div class="form-group">
                    Password : <input type="password" name="password" ><br>
                    Password : <input type="password" name="password2" >
                </div>

                <div class="row text-center">
                    <input type="submit" value="Register" class="btn btn-primary" name="register">
                </div>
            </form>
        </div>
    <div class="col-md-4"></div>
</div>


</body>
</html>