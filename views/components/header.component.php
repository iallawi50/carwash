<?php

use App\Models\User;
use App\Middleware\Auth;


if (isset($_SESSION["user"]) && !User::find($_SESSION["user"]->id)) {
  unset($_SESSION["user"]);
}


?>


<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Carwash</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.rtl.min.css" integrity="sha384-nU14brUcp6StFntEOOEBvcJm4huWjB0OcIeQ3fltAfSmuZFrkAif0T+UtNGlKKQv" crossorigin="anonymous">
</head>

<body dir=rtl>
  <nav class="navbar navbar-expand-lg navbar-dark bg-primary" dir=ltr>
    <div class="container">
      <a class="navbar-brand" href="<?= home() ?>">Carwash</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse flex-row-reverse navbar-collapse" id="navbarNavDropdown">
        <ul class="navbar-nav flex-sm-row-reverse">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="<?= home() ?>">الرئيسية</a>
          </li>

          <?php

          if (Auth::check()) : ?>

            <?php if ($_SESSION["user"]->account_type) :  ?>

              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="<?=home()?>/dashboard">لوحة التحكم</a>
              </li>

            <?php else: ?>
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="<?= home() ?>">حجوزاتي</a>
            </li>
            <?php endif ?>


            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                حسابي
              </a>
              <ul class="dropdown-menu">
                <form action="<?= home() ?>/logout" method="post" id="logout">
                  <li class="dropdown-item pointer" role="button" onclick="logout.submit()">تسجيل خروج</li>
                </form>
              </ul>
            </li>
          <?php else : ?>

            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                تسجيل
              </a>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="<?= home() ?>/login">تسجيل دخول</a></li>
                <li><a class="dropdown-item" href="<?= home() ?>/register">تسجيل جديد</a></li>
              </ul>
            <?php endif ?>
        </ul>
      </div>
    </div>
  </nav>

  <?php
  if (isset($_SESSION["not-authorized"])) : ?>

    <div class="alert alert-danger text-center"><?= $_SESSION["not-authorized"] ?></div>

    <?php unset($_SESSION["not-authorized"]); ?>

  <?php elseif (isset($_SESSION["post-deleted"])) : ?>

    <div class="alert alert-success text-center"><?= $_SESSION["authorized"] ?></div>

    <?php unset($_SESSION["authorized"]); ?>

  <?php endif ?>