<!-- Modal -->
<div class="modal fade modalPermisos" id="exampleModalMessage" tabindex="-1" role="dialog"
  aria-labelledby="exampleModalMessageTitle" aria-hidden="true">
  <div class="modal-dialog  modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">
          <h5 class="modal-title h4">Permisos Roles
            <!-- <?= $data['rol'] ?> -->
          </h5>
        </h5>
        <button type="button" class="btn bg-gradient-danger" data-bs-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">×</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="" id="formPermisos" name="formPermisos">
          <input type="hidden" id="idrol" name="idrol" value="<?= $data['idrol']; ?>" required="">
          <div class="table-responsive">
            <table class="table">
              <thead>
                <tr>
                  <th>#</th>
                  <th>Módulo</th>
                  <th>Ver</th>
                  <th>Crear</th>
                  <th>Actualizar</th>
                  <th>Eliminar</th>
                </tr>
              </thead>
              <tbody>
                <?php
                $no = 1;
                $modulos = $data['modulos'];
                for ($i = 0; $i < count($modulos); $i++) {

                  $permisos = $modulos[$i]['permisos'];
                  $rCheck = $permisos['r'] == 1 ? " checked " : "";
                  $wCheck = $permisos['w'] == 1 ? " checked " : "";
                  $uCheck = $permisos['u'] == 1 ? " checked " : "";
                  $dCheck = $permisos['d'] == 1 ? " checked " : "";

                  $idmod = $modulos[$i]['idmodulo'];
                  ?>
                  <tr>
                    <td>
                      <?= $no; ?>
                      <input type="hidden" name="modulos[<?= $i; ?>][idmodulo]" value="<?= $idmod ?>" required>

                    </td>
                    <td>
                      <?= $modulos[$i]['titulo']; ?>
                    </td>
                    <td>

                      <div class="form-check form-switch mb-0 d-flex align-items-center justify-content-center">
                        <input class="form-check-input" type="checkbox" name="modulos[<?= $i; ?>][r]" <?= $rCheck ?>
                          id="flexSwitchCheckDefault11">
                      </div>
                    </td>
                    <td>
                      <div class="form-check form-switch mb-0 d-flex align-items-center justify-content-center">
                        <label>
                          <!-- <input type="checkbox" name="modulos[<?= $i; ?>][w]" <?= $wCheck ?>><span class="flip-indecator" data-toggle-on="ON" data-toggle-off="OFF"></span> -->
                          <input class="form-check-input" type="checkbox" name="modulos[<?= $i; ?>][w]" <?= $wCheck ?>
                            id="flexSwitchCheckDefault11">

                        </label>
                      </div>
                    </td>
                    <td>
                      <div class="form-check form-switch mb-0 d-flex align-items-center justify-content-center">
                        <label>
                          <!-- <input type="checkbox" name="modulos[<?= $i; ?>][u]" <?= $uCheck ?>><span class="flip-indecator" data-toggle-on="ON" data-toggle-off="OFF"></span> -->
                          <input class="form-check-input" type="checkbox" name="modulos[<?= $i; ?>][u]" <?= $uCheck ?>
                            id="flexSwitchCheckDefault11">

                        </label>
                      </div>
                    </td>
                    <td>
                      <div class="form-check form-switch mb-0 d-flex align-items-center justify-content-center">
                        <label>
                          <!-- <input type="checkbox" name="modulos[<?= $i; ?>][d]" <?= $dCheck ?>><span class="flip-indecator" data-toggle-on="ON" data-toggle-off="OFF"></span> -->
                          <input class="form-check-input" type="checkbox" name="modulos[<?= $i; ?>][d]" <?= $dCheck ?>
                            id="flexSwitchCheckDefault11">

                        </label>
                      </div>
                    </td>
                  </tr>
                  <?php
                  $no++;
                }
                ?>
              </tbody>
            </table>
          </div>
          <div class="text-center">
            <button class="btn bg-gradient-success" type="submit"><i class="fa fa-fw fa-lg fa-check-circle"
                aria-hidden="true"></i> Guardar</button>
            <button class="btn bg-gradient-danger" type="button" data-bs-toggle="modal"><i
                class="app-menu__icon fas fa-sign-out-alt" aria-hidden="true"></i> Salir</button>
          </div>
        </form>
      </div>
      <!-- <div class="modal-footer">
            <button type="button" class="btn bg-gradient-secondary" data-bs-dismiss="modal">Close</button>
            <button type="button" class="btn bg-gradient-primary">Send message</button>
          </div> -->
    </div>
  </div>
</div>
</div>