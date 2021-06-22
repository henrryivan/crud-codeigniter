<div class="row">
	<input class="form__input" type="hidden" id="id" value="<?= $demografia->id ?>">
</div>
<div class="row">
	<input id="txtTitulo" class="form__input mb-5" placeholder="Nombre de demografía" value="<?= $demografia->titulo ?>">
</div>
<div class="row">
	<textarea id="txtDescripcion" class="form__textarea mb-4" placeholder="Descripción de demografía"><?= $demografia->descripcion ?></textarea>
</div>
<div class="row">
	<button id="btn" class="btn-success rounded-pill" value="editar">Editar</button>
</div>
