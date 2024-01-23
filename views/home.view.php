
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
                <a href="reservation?id=<?= $wash->id ?>" class="btn btn-success">حجز</a>
                <a href="<?= $wash->location ?>" class="btn btn-primary">الموقع</a>
                </div>
            </div>
        </div>

        <?php endforeach ?>
    </div>


