<?php
include './inc/db.php';
include './inc/form.php';
include './inc/select.php';
include './inc/db_closed.php';

?>

<?php include './parts/header.php'; ?>

<body>

    <div class="container">
        <div class="position-relative overflow-hidden p-3 p-md-5 m-md-3 text-center bg-light">
            <div class="col-md-5 p-lg-5 mx-auto my-5">
                <img src="images\latest.webp" class="d-block mx-auto img-fluid" alt="">
                <h1 class="display-4 fw-normal">Hurry Up</h1>
                <p class="lead fw-normal">in progresss.....</p>
                <h3 id="countdown"></h3>
                <a class="btn btn-outline-secondary" href="#">Coming soon</a>
            </div>
            <div class="product-device shadow-sm d-none d-md-block"></div>
            <div class="product-device product-device-2 shadow-sm d-none d-md-block"></div>
        </div>

        <div class="position-relative overflow-hidden p-3 p-md-5 m-md-3 text-center bg-light rounded-4 shadow-sm">
    <h3 class="fw-bold mb-4">To Win you should:</h3>
    <ul class="list-unstyled fs-5">
        <li class="mb-2">1- Enter your firstname</li>
        <li class="mb-2">2- Enter your lastname</li>
        <li class="mb-2">3-Enter your Email  </li>
    </ul>
</div>
        <div class="position-relative overflow-hidden p-3 p-md-5 m-md-3 text-center bg-light">
            <div class="col-md-5 p-lg-5 mx-auto my-5"></div>
            <form class="mt-5" action=" <?php echo $_SERVER['PHP_SELF'] ?> " method="POST">
                <h3>Enter your info</h3>
                <div class="mb-3">

                    <label for="firstname" class="form-label">Firstname</label>
                    <input type="text" class="form-control" name="firstname" id="firstname"
                        value="<?php echo $firstname; ?>">
                    <div class="form-text-error"> <?php echo $errors['firstnameerror']; ?> </div>
                </div>



                <div class="mb-3">
                    <label for="lastname" class="form-label">lastname</label>
                    <input type="text" class="form-control" name="lastname" id="lastname"
                        value="<?php echo $lastname; ?>">
                    <div class="form-text-error"><?php echo $errors['lastnameerror']; ?></div>
                </div>


                <div class="mb-3">
                    <label for="email" class="form-label">Email address</label>
                    <input type="text" class="form-control" name="email" id="email" value="<?php echo $email; ?>">
                    <div class="form-text-error"><?php echo $errors['emailerror']; ?> </div>
                </div>
                <button type="submit" name="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
    </div>


    <!-- Button trigger modal -->
    <div class="d-grid gap-2 col-6 mx-auto my-5">
        <button type="button" id="winner" class="btn btn-primary" data-bs-toggle="modal"
            data-bs-target="#staticBackdrop">
            The winnner
        </button>
    </div>






    
    <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
        aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content shadow-lg rounded-4">
                <div class="modal-header bg-success text-white">
                    <h5 class="modal-title fw-bold" id="staticBackdropLabel"> The Winner Is 🔥🔥🔥 </h5>
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"
                        aria-label="Close"></button>
                </div>
                <div class="modal-body text-center">
                    <?php if (!empty($users)): ?>
                        <?php foreach ($users as $user): ?>
                            <div class="card mx-auto my-3 shadow-sm border-0 " style="max-width: 400px;">
                                <div class="card-body">
                                    <h2 class="card-title text-primary fw-bold">
                                        <?php echo htmlspecialchars($user['firstname']) . ' ' . htmlspecialchars($user['lastname']); ?>
                                    </h2>
                                    <p class="card-text text-muted fs-5">
                                        <?php echo htmlspecialchars($user['email']); ?>
                                    </p>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    <?php else: ?>
                        <div class="alert alert-danger">No winner found!</div>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>




    <?php include './parts/footer.php'; ?>

</body>

</html>