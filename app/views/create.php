<div class="container">
	<h1>Добавить деталь</h1>
	<form action="/main/create" method="post">
		<div class="box-body">
			<div class="col-md-6">
				<div class="form-group">
					<label>Название</label>
					<input type="text" class="form-control" name="title" value="" placeholder="" required>
				</div>
			</div>
			<div class="col-md-6">
				<div class="form-group">
					<label>Вес, кг</label>
					<input type="number" class="form-control" name="weight" value="" placeholder="" required>
				</div>
			</div>
			<div class="col-md-6">
				<div class="form-group">
					<label>Объём, м<sup>3</sup></label>
					<input type="number" class="form-control" name="volume" value="" placeholder="" required>
				</div>
			</div>
			<div class="col-md-6">
				<div class="form-group">
					<label>Длина, см</label>
					<input type="number" class="form-control" name="length" value="" placeholder="" required>
				</div>
			</div>
			<div class="col-md-6">
				<div class="form-group">
					<label>Ширина, см</label>
					<input type="number" class="form-control" name="width" value="" placeholder="" required>
				</div>
			</div>
			<div class="col-md-6">
				<div class="form-group">
					<label>Высота, см</label>
					<input type="number" class="form-control" name="height" value="" placeholder="" required>
				</div>
			</div>
		</div>
		<div class="box-footer">
			<button class="btn btn-success pull-right">Сохранить</button>
		</div>
	</form>
</div>	