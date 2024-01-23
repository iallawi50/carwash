<div class="container">
    <h1 class="text-center mt-5">المغاسل</h1>



    <div class="row">

        <?php foreach ($washes as $wash) : ?>

            <div class="col-lg-4 col-md-6 col-sm-12">
                <div class="card text-center">

                    <div class="card-body">
                        <h5 class="card-title"><?= $wash->name ?></h5>
                        <p class="card-text"><?= $wash->description ?></p>
                    </div>
                    <div class="card-footer d-flex justify-content-between">
                        <?php if (user()->account_type == 1) : ?>

                        <?php elseif (!user()->id) : ?>

                            <a href="<?= home() ?>/login" class="btn btn-success">سجل دخول</a>

                        <?php else : ?>

                            <a href="reservation?id=<?= $wash->id ?>" class="btn btn-success">حجز</a>
                        <?php endif ?>
                        <a href="<?= $wash->location ?>" class="btn btn-primary">الموقع</a>
                    </div>
                </div>
            </div>

        <?php endforeach ?>
    </div>