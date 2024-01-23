<div class="container mt-5">
    <table class="table table-primary text-center align-middle  ">
        <thead>
            <tr class="p">
                <th scope="col">#</th>
                <th scope="col">المغسلة</th>
                <th scope="col">الوقت</th>
                <th scope="col">الباقة</th>
                <th scope="col">السعر</th>
                <th scope="col">حالة الحجز</th>
            </tr>
        </thead>
        <tbody>


            <?php
            $x = 1;
            foreach (user()->reservations() as $reserv) : ?>
                <tr>
                    <th scope="row"><?= $x++ ?></th>
                    <td><?= $reserv->wash()->name ?></td>
                    <td class="col">
                        <?= $reserv->date ?>
                        <br>
                        <input type="time" readonly class="bg-transparent text-center border-0" value="<?= $reserv->time ?>">
                    </td>
                    <td><?= $reserv->service()->title ?? "غير محدد" ?></td>
                    <td><?= $reserv->service()->price ?? "غير محدد" ?></td>
                    <td>
                        <?php

                        switch ($reserv->status) {
                            case 1:
                                echo "موافق عليه";
                                break;
                            case 2:
                                echo "مكتمل";
                                break;
                            case 3:
                                echo "ملغي";
                                break;
                            case 4:
                                echo "مرفوض";
                                break;
                            default:
                                echo "تحت المراجعة";
                                break;
                        }

                        ?>
                    </td>
                </tr>
            <?php endforeach ?>

        </tbody>
    </table>
</div>