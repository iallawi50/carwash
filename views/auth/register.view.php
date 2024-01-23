<div class="container mt-5">



    <form method=post class="shadow col-md-8  mx-auto" action="./register">

        <div class="p-3">
            <div class="text-center">
                <img src="<?= asset("imgs/logo.png") ?>" width="150px" alt="">
            </div>
            <h1 class="text-center">فتح حساب جديد</h1>
            <div class="mb-3">
                <label for="name" class="form-label">اسمك</label>
                <input type="text" name="name" value="<?= $name ?? "" ?>" class="form-control" id="name" aria-describedby="emailHelp">
                <p class="text-danger"><?= $errors["name"] ?? '' ?></p>
            </div>
            <div class="mb-3">
                <label for="username" class="form-label">اسم المستخدم</label>
                <input type="text" name="username" value="<?= $username ?? "" ?>" class="form-control" id="username" aria-describedby="emailHelp">
                <p class="text-danger"><?= $errors["username"] ?? '' ?></p>
            </div>
            <div class="mb-3">
                <label for="phone" class="form-label">رقم الجوال</label>
                <input type="text" name="phone" value="<?= $phone ?? "" ?>" class="form-control" id="phone" aria-describedby="emailHelp">
                <p class="text-danger"><?= $errors["phone"] ?? '' ?></p>
            </div>

            <div class="mb-3">
                <label for="password" class="form-label">كلمة المرور</label>
                <input type="password" name="password" value="<?php $password ?? "" ?>" class="form-control" id="password">
                <p class="text-danger"><?= $errors["password"] ?? '' ?></p>
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">كلمة المرور</label>
                <input type="password" name="confirmpassword" class="form-control" id="exampleInputPassword1">
            </div>

            <div class="mb-3">
                <label class="form-label">نوع الحساب</label>
                <div> 
                    <input type="radio" name="account_type" id="client" value="0" checked><label for="client">&nbsp; انا عميل</label>
                    <br>
                    <input type="radio" name="account_type" id="services" value="1"><label for="services">&nbsp; لدي مغسلة</label>
                </div>
            </div>
        </div>

        <button type="submit" class="btn btn-success rounded-0 col-12">تسجيل</button>
    </form>
</div>