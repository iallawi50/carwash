<div class="container mt-5">
    <table class="table table-primary text-center align-middle  ">
        <thead>
            <tr class="p">
                <th scope="col">#</th>
                <th scope="col">العميل</th>
                <th scope="col">هاتف العميل</th>
                <th scope="col">الوقت</th>
                <th scope="col">الباقة</th>
                <th scope="col">السعر</th>
                <th scope="col">حالة الحجز</th>
            </tr>
        </thead>
        <tbody>


            <?php
            $x = 1;
            foreach (user()->wash()->reservations() as $reserv) : ?>
                <tr>
                    <th scope="row"><?= $x++ ?></th>
                    <td><?= $reserv->user()->name ?></td>
                    <td><?= $reserv->user()->phone ?></td>
                    <td class="col">
                        <?= $reserv->date ?>
                        <br>
                        <input type="time" readonly class="bg-transparent text-center border-0" value="<?= $reserv->time ?>">
                    </td>
                    <td><?= $reserv->service()->title ?? "غير محدد" ?></td>
                    <td><?= $reserv->service()->price ?? "غير محدد" ?></td>
                    <td>
                        <form action="reservations/update" method="post">
                            <input type="text" name="id" hidden value="<?= $reserv->id ?>">
                        <select name="status" class="form-control" onchange="this.form.submit()">
                            <option value="0" <?= $reserv->status == 0 ? "selected" : "" ?>>تحت المعالجة</option>
                            <option value="1" <?= $reserv->status == 1 ? "selected" : "" ?>>موافق عليه</option>
                            <option value="2" <?= $reserv->status == 2 ? "selected" : "" ?>>مكتمل</option>
                            <option value="3" <?= $reserv->status == 3 ? "selected" : "" ?>>ملغي</option>
                            <option value="4" <?= $reserv->status == 4 ? "selected" : "" ?>>مرفوض</option>
                        </select>
                        </form>
                    </td>
                </tr>
            <?php endforeach ?>

        </tbody>
    </table>
</div>