<div class="container mt-5">
    <table class="table table-primary text-center">
        <thead>
            <tr class="p">
                <th scope="col">#</th>
                <th scope="col">الباقة</th>
                <th scope="col">السعر</th>
                <th scope="col">العمليات</th>
            </tr>
        </thead>
        <tbody>


        <?php
        $x = 1;
        foreach ($services as $serv) :?>
            <tr>
                <th scope="row"><?= $x++ ?></th>
                <td><?=$serv->title?></td>
                <td><?=$serv->price?></td>
                <td>
                    <div class="btn-group btn-group-sm" role="group" aria-label="Small button group">
                        <a href="services/delete?id=<?=$serv->id?>" class="btn btn-danger">حذف</a>
                    </div>
                </td>
            </tr>
            <?php endforeach ?>
<form action="" method="post">
<tr class="align-middle text-center">
                <th scope="row">جديد</th>
                <td class="p-3"><input type="text" name="title" class="form-control"></td>
                <td><input type="text" class="form-control" name="price"></td>
                <td>
                    <div class="btn-group btn-group-sm" role="group" aria-label="Small button group">
                        <button type="submit" class="btn btn-success">اضافة</button>
                    </div>
                </td>
            </tr>
</form>

        </tbody>
    </table>
</div>