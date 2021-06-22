<?php foreach($demografias as $demografia) : ?>
	<tr>
		<td>
			<?= $demografia->titulo; ?>
		</td>
		<td>
			<?= $demografia->descripcion; ?>
		</td>
		<td>
			<button type="button" class="btnEditar bg-info" value="<?= $demografia->id ?>">
				<i class="fas fa-pen"></i>
			</button>
		</td>
		<td>
			<button class="btnEliminar bg-danger" value="<?= $demografia->id ?>">
				<i class="fas fa-trash"></i>
			</button>
		</td>
	</tr>
<?php endforeach;
