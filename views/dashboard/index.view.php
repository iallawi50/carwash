<div class="container mt-5">

<div class="row justify-content-between">
    <?php if(user()->washes()): ?>

        <a href="dashboard/edit?id=<?= user()->wash()->id ?>" class="d-block col-lg-3 bg-warning text-center text-decoration-none">
        <h1 class="text-white my-5">تعديل مغسلة</h1>
    </a>

        <?php else: ?>

            <a href="dashboard/create" class="d-block col-lg-3 bg-success text-center text-decoration-none">
        <h1 class="text-white my-5">اضافة مغسلة</h1>
    </a>

            <?php endif ?>
    <a href="dashboard/reservations" class="d-block col-lg-3 bg-dark text-center text-decoration-none">
        <h1 class="text-white my-5">ادارة الحجوزات</h1>
    </a>
    <a href="dashboard/services" class="d-block col-lg-3 bg-danger text-center text-decoration-none">
        <h1 class="text-white my-5">ادارة الباقات</h1>
    </a>


</div>
</div>