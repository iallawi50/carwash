<form method=post class="shadow col-md-8 mt-5 mx-auto" action="">


    <div class="p-3">
        <div class="text-center">
            <img src="<?= asset("imgs/logo.png") ?>" width="150px" alt="">
        </div>
        <h1 class="text-center">اضافة مغسلة</h1>
        <div class="mb-3">
            <label for="name" class="form-label">اسم المغسلة</label>
            <input type="text" name="name" class="form-control" id="name" aria-describedby="emailHelp">
            <p class="text-danger"><?= $errors["name"] ?? '' ?></p>
        </div>
        <div class="mb-3">
            <label for="description" class="form-label">الوصف</label>
            <textarea name="description" id=description class="form-control" cols="30" rows="5"></textarea>
            <p class="text-danger"><?= $errors["description"] ?? '' ?></p>
        </div>

        <div class="mb-3">
            <label for="location" class="form-label">الموقع</label>
            <input type="url" name="location" class="form-control" id="location">
            <p class="text-danger"><?= $errors["location"] ?? '' ?></p>
        </div>
    </div>

    <button type="submit" class="btn btn-success rounded-0 col-12">اضف</button>
</form>