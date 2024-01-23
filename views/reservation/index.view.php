<form method=post class="shadow col-md-8 mt-5 mx-auto" action="">


    <div class="p-3">
        <div class="text-center">
            <img src="<?= asset("imgs/logo.png") ?>" width="150px" alt="">
        </div>
        <h1 class="text-center">حجز موعد</h1>
        <div class="mb-3">
            <label for="name" class="form-label">الباقة</label>
            <select class="form-control" name="service_id">
                <?php foreach ($services as $serv) : ?>

                    <option value="<?= $serv->id ?>"><?= $serv->price ?> ريال | <?= $serv->title ?> </option>

                <?php endforeach ?>
            </select>

        </div>
        <div class="mb-3">
            <label for="name" class="form-label">التاريخ</label>
            <input type="date" name="date" class="form-control" id="name">
            <p class="text-danger"><?= $errors["date"] ?? '' ?></p>
        </div>
        <div class="mb-3">
            <label for="name" class="form-label">الوقت</label>
            <input type="time" name="time" class="form-control" id="name">
            <p class="text-danger"><?= $errors["time"] ?? '' ?></p>
        </div>
    </div>

    <button type="submit" class="btn btn-success rounded-0 col-12">اضف</button>
</form>