<div class="container">
  <h1>Редактировать деталь</h1>
  <form action="/main/edit" method="post" enctype="multipart/form-data">
    <div class="col-md-6">
        <div class="form-group">
            <label>Название</label>
            <input type="text" class="form-control" name="title" value="<?=$data[0]['title']?>" placeholder="">
        </div>
    </div>
    <div class="col-md-6">
        <div class="form-group">
            <label>Вес, кг</label>
            <input type="number" class="form-control" name="weight" value="<?=$data[0]['weight']?>" placeholder="">
        </div>
    </div>
    <div class="col-md-6">
        <div class="form-group">
            <label>Объём, м<sup>3</sup></label>
            <input type="number" class="form-control" name="volume" value="<?=$data[0]['volume']?>" placeholder="">
        </div>
    </div>
    <div class="col-md-6">
        <div class="form-group">
            <label>Длина, см</label>
            <input type="number" class="form-control" name="length" value="<?=$data[0]['length']?>" placeholder="">
        </div>
    </div>
    <div class="col-md-6">
        <div class="form-group">
            <label>Ширина, см</label>
            <input type="number" class="form-control" name="width" value="<?=$data[0]['width']?>" placeholder="">
        </div>
    </div>
    <div class="col-md-6">
        <div class="form-group">
            <label>Высота, см</label>
            <input type="number" class="form-control" name="height" value="<?=$data[0]['height']?>" placeholder="">
            <input type="hidden" name="id" value="<?=$data[0]['id']?>">
        </div>
    </div>
    <div class="col-md-6">
        <div class="form-group">
            <label>Картинка</label>
            <?php if($data[0]['img']): ?>
                <p><img src="/img/<?=$data[0]['img']?>" alt=""></p>
            <?php endif; ?>
            <input type="file" class="form-control" name="img" value="">
        </div>
        </div
        <div class="box-footer">
           <button type="submit" class="btn btn-success pull-right">Сохранить</button>
       </div>
   </form>
</div>		