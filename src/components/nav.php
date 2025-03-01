    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <!-- <nav>
        <a href='/'>Home</a>
        <a href='/contact'>Contact</a>
        <a href='/students'>Students</a>
        <a href='/subject'>Subject</a>
        <a href='/register'>Register Subject</a>
    </nav> -->
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Student</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="/">Home</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="/subject">Subject</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="/registion">Registion</a>
                </li>
                <?php
                     if(isset($_SESSION['timestamp'])){
                        echo ' <li class="nav-item">
                        <a class="nav-link text-danger" href="/logout">Logout</a>
                        </li>   
                        ';
                     }else{
                        echo ' <li class="nav-item">
                        <a class="nav-link text-info" href="/login">Login</a>
                        </li>   
                        ';
                     }
                
                ?>
            </ul>
            </div>
        </div>
    </nav>

