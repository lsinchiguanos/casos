<?php include_once "encabezado.php" ?>
<div class="row">
    <div class="col-12">
        <h1>Editar</h1>
        <form action="insertar.php" method="POST" class="needs-validation">
            <div class="form-row">
                <div class="col-md-4 mb-3">
                    <label for="dominio">Dominio :</label>
                    <input name="dominio" type="text" class="form-control" id="dominio" placeholder="" required>
                    <div class="valid-feedback">¡Ok válido!</div>
                    <div class="invalid-feedback">Complete el campo.</div>
                </div>

                <div class="col-md-4 mb-3">
                    <label for="reino">Reino :</label>
                    <input name="reino" type="text" class="form-control" id="reino" placeholder="" required>
                    <div class="valid-feedback">¡Ok válido!</div>
                    <div class="invalid-feedback">Complete el campo.</div>
                </div>

                <div class="col-md-4 mb-3">
                    <label for="phylum">Phylum :</label>
                    <input name="phylum" type="text" class="form-control" id="phylum" placeholder="" required>
                    <div class="valid-feedback">¡Ok válido!</div>
                    <div class="invalid-feedback">Complete el campo.</div>
                </div>

                <div class="col-md-4 mb-3">
                    <label for="clase">Clase :</label>
                    <input name="clase" type="text" class="form-control" id="clase" placeholder="" required>
                    <div class="valid-feedback">¡Ok válido!</div>
                    <div class="invalid-feedback">Complete el campo.</div>
                </div>

                <div class="col-md-4 mb-3">
                    <label for="subclase">Sub-clase :</label>
                    <input name="subclase" type="text" class="form-control" id="subclase" placeholder="" required>
                    <div class="valid-feedback">¡Ok válido!</div>
                    <div class="invalid-feedback">Complete el campo.</div>
                </div>

                <div class="col-md-4 mb-3">
                    <label for="orden">Orden :</label>
                    <input name="orden" type="text" class="form-control" id="orden" placeholder="" required>
                    <div class="valid-feedback">¡Ok válido!</div>
                    <div class="invalid-feedback">Complete el campo.</div>
                </div>

                <div class="col-md-4 mb-3">
                    <label for="familia">Familia :</label>
                    <input name="familia" type="text" class="form-control" id="familia" placeholder="" required>
                    <div class="valid-feedback">¡Ok válido!</div>
                    <div class="invalid-feedback">Complete el campo.</div>
                </div>

                <div class="col-md-4 mb-3">
                    <label for="genero">Género :</label>
                    <input name="genero" type="text" class="form-control" id="genero" placeholder="" required>
                    <div class="valid-feedback">¡Ok válido!</div>
                    <div class="invalid-feedback">Complete el campo.</div>
                </div>

                <div class="col-md-4 mb-3">
                    <label for="especie">Especie :</label>
                    <input name="especie" type="text" class="form-control" id="especie" placeholder="" required>
                    <div class="valid-feedback">¡Ok válido!</div>
                    <div class="invalid-feedback">Complete el campo.</div>
                </div>
            </div>

            <button type="submit" class="btn ">Guardar</button>
            <a href="./casos.php" class="btn ">Volver</a>
        </form>
    </div>
</div>
<?php include_once "foot.php" ?>