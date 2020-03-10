<!-- BODY -->
<div class="container container-fluid flex-container">
    <form action="post" class="flex-container custom-form border">
        <div class="form-group">
            <img src="images/Logo/logo.png" alt="logo" class="rounded mx-auto d-block logo" height="250" width="250">
        </div>
        <div class="form-group row">
            <label for="inputusername" class="col-sm-2 col-form-label">Username: </label>
            <div class="col-sm-10">
                <input placeholder="Username" type="text" class="form-control" id="inputusername" required>
            </div>
        </div>
        <div class="form-group row">
            <label for="inputpass"  class="col-sm-2 col-form-label">Password: </label>
            <div class="col-sm-10">
                <input type="password" class="form-control" placeholder="Password" id="inputpass" required>
            </div>
        </div>
        <div class="form-group flex-container">
            <button type="submit" class="btn login">LOGIN</button>
            <button type="button" class="btn"> Don't have an account? Register !</button>  
        </div>
    </form>
</div>
