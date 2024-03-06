<form  action="{{ route('myStore') }}" method="POST" enctype="multipart/form-data">
    {{ csrf_field() }}
    <div class="mb-3">
        <label class="form-label">Nombre</label>
        <input type="text" name="nombre" class="form-control" required />
    </div>
    <div class="mb-3">
        <label class="form-label">Cédula (NIT)</label>
        <input type="text" name="cedula" class="form-control" required />
    </div>
    <div class="row">
        <div class="col-md-6">
            <label class="form-label">Seleccione la edad</label>
            <select class="form-select" name="edad" required>
                <option value="">Edad</option>
                <?php
                for ($i = 18; $i <= 50; $i++) {
                    echo "<option value='$i'>$i</option>";
                } ?>
            </select>
        </div>

        <div class="col-md-6">
            <label class="form-label">Sexo</label>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="sexo" id="sexo_m" value="Masculino" checked>
                <label class="form-check-label" for="sexo_m">
                    Masculino
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="sexo" id="sexo_f" value="Femenino">
                <label class="form-check-label" for="sexo_f">
                    Femenino
                </label>
            </div>
        </div>
    </div>

    <div class="mb-3">
        <label class="form-label">Teléfono</label>
        <input type="number" name="telefono" class="form-control" required />
    </div>

    <div class="mb-3">
        <label class="form-label">Seleccione el Cargo</label>
        <select name="cargo" class="form-select" required>
            <option selected value="">Cargo</option>
            <?php
            $cargos = array(
                "Gerente",
                "Asistente",
                "Analista",
                "Contador",
                "Secretario",
                "Desarrollador Web"
            );
            foreach ($cargos as $cargo) {
                echo "<option value='$cargo'>$cargo</option>";
            }
            ?>
        </select>
    </div>

    <div class="mb-3 mt-4">
        <label class="form-label">Cambiar Foto del empleado</label>
        <input class="form-control form-control-sm" type="file" name="avatar" accept="image/png, image/jpeg" required/>
    </div>

    <div class="d-grid gap-2">
        <button type="submit" class="btn btn-primary btn_add">
            Registrar Empleado
        </button>

    </div>
</form>