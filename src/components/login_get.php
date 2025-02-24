<!-- <section>
    <h1>Login</h1>
    <form action="login" method="post">
        <input type="submit" value="Assume That Login Success !!!">
    </form>
</section> -->


<div class="content" style="width: 50%; height: 90vh; display: flex; justify-content: center; align-items: center; color: aquamarine;">
        <div class="card mb-3 content_con" style="width: 80%;">
            <div class="row g-0 p-3">
                <div class="content_1" style="width: 90%; height: auto; display: flex; flex-direction: column; border-radius: 10px; margin-top:20px; margin-left:20px; justify-content: center; align-items:center;">
                    <h1 class="title">Login</h1>
                    <form action="login.php" method="post">
                        <div class="mb-3 email">
                            <label for="exampleFormControlInput1" class="form-label">Email address</label>
                            <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com or nick" name="email_username">
                        </div>
                        <div class="password">
                            <label for="inputPassword5" class="form-label">Password</label>
                            <input type="password" id="inputPassword5" class="form-control" aria-describedby="passwordHelpBlock" name="password">
                            <div id="passwordHelpBlock" class="form-text" style="margin-bottom: 20px;">
                                Your password must be 8-20 characters long, contain letters and numbers, and must not contain spaces, special characters, or emoji.
                            </div>
                        </div>
                        <div class="form-check mb-3 check_me">
                            
                        </div>
                        <button class="btn btn-primary submit">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>