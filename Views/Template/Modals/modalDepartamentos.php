<div class="modal fade" id="modalFormDepartamentos" tabindex="-1" role="dialog" aria-labelledby="modal-form" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-body p-0">
          <div class="card card-plain">
            <div class="card-header pb-0 text-left">
              <h3 class="font-weight-bolder text-info text-gradient" id="titleModal">Welcome back</h3>
              
              <!-- <p class="mb-0">Enter your email and password to sign in</p> -->
              <p class="text-danger text-gradient">Los campos con asterisco (<span class="required">*</span>) son obligatorios.</p>

            </div>
            
            <div class="card-body">
              <form role="form text-left" id="formDepartamento" name="formDepartamento">
              <input type="hidden" id="idDepartamento" name="idDepartamento" value="">
                <label>Nombre <span class="required">*</span></label>
                <div class="input-group mb-3">
                  <input type="text" id="txtNombre" name="txtNombre" class="form-control" placeholder="Nombre" required
                    >
                </div>

                <label>Descripción <span class="required">*</span></label>
                <div class="input-group mb-3">
                    <textarea class="form-control" id="txtDescripcion" name="txtDescripcion" rows="2" placeholder="Descripción Categoría" required></textarea>
                </div>

                <label>Estado <span class="required">*</span></label>
                <div class="input-group mb-3">
                <select class="form-control selectpicker" id="listStatus" name="listStatus" required="">
                          <option value="1">Activo</option>
                          <option value="2">Inactivo</option>
                        </select>
                </div>

                <div class="text-center">
                  <button id="btnActionForm" type="submit" class="btn btn-round bg-gradient-info btn-sm w-100 mt-4 mb-0"><span id="btnText">Guardar</span></button>
                  <button id="btnActionForm" type="button" class="btn btn-round bg-gradient-secondary btn-sm w-100 mt-4 mb-0" data-bs-dismiss="modal">Cancelar</button>

                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
