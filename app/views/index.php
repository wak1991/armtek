<div class="container">
    <h1>Список деталей</h1>
    <div class="container">
        <div class="row">
            <div class="form-group col-sm-8">
                <a href="/main/create" class="btn btn-success">Добавить деталь</a>
            </div>
            <div class="form-group col-sm-4">
                Количество деталей на страницу
                <select onchange="window.location.href=this.options[this.selectedIndex].value">
                    <option value="/main/index/?perpage=2">2</option>
                    <option value="/main/index/?perpage=3">3</option>
                    <option value="/main/index/?perpage=5">5</option>
                </select>
            </div>
            <div class="form-group col-sm-4">
                <select onchange="window.location.href=this.options[this.selectedIndex].value">
                    <option>Сортировка</option>
                    <option value="/main/index/?sort=title-asc">Название (А-Я)</option>
                    <option value="/main/index/?sort=title-desc">Название (Я-А)</option>
                    <option value="/main/index/?sort=weight-asc">Вес (<)</option>
                    <option value="/main/index/?sort=weight-desc">Вес (>)</option>
                    <option value="/main/index/?sort=volume-asc">Объём (<)</option>
                    <option value="/main/index/?sort=volume-desc">Объём (>)</option>
                    <option value="/main/index/?sort=length-asc">Длина (<)</option>
                    <option value="/main/index/?sort=length-desc">Длина (>)</option>
                    <option value="/main/index/?sort=width-asc">Ширина (<)</option>
                    <option value="/main/index/?sort=width-desc">Ширина (>)</option>
                    <option value="/main/index/?sort=height-asc">Высота (<)</option>
                    <option value="/main/index/?sort=height-desc">Высота (>)</option>
                </select>
            </div>
        </div>
    </div>
    <div class="row">
        <table class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>Название</th>
                    <th>Вес, кг</th>
                    <th>Объём, м<sup>3</sup></th>
                    <th>Длина, см</th>
                    <th>Ширина, см</th>
                    <th>Высота, см</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($data as $d): ?>
                    <tr>
                        <td><a href="/main/edit/?id=<?= $d['id']; ?>"><?= $d['title']; ?></a></td>
                        <td><?= $d['weight']; ?></td>
                        <td><?= $d['volume']; ?></td>
                        <td><?= $d['length']; ?></td>
                        <td><?= $d['width']; ?></td>
                        <td><?= $d['height']; ?></td>
                    </tr>
                <?php endforeach; ?>
            </tfoot>
        </table>
    </div>
    <?php if ($pagination->countPages > 1): ?>
        <?= $pagination; ?>
    <?php endif; ?>
</div>		