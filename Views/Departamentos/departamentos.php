<?php 
asideAdmin($data); 
navbarAdmin($data);
getModal('modalDepartamentos',$data);  
?>

<!-- <div id="contentAjax"></div>  -->
 <div class="container-fluid py-4">
      <div class="row">
        <div class="col-12">
          <div class="card">
            <!-- Card header -->
            <div class="card-header pb-0">
              <div class="d-lg-flex">
                <div>
                  <h5 class="mb-0"> <?= $data['page_title'] ?></h5>
                  <!-- <p class="text-sm mb-0">
                    A lightweight, extendable, dependency-free javascript HTML table plugin.
                  </p> -->
                </div>
                <div class="ms-auto my-auto mt-lg-0 mt-4">
                  <div class="ms-auto my-auto">
                  <?php if($_SESSION['permisosMod']['w']){ ?>
                    <a href="javascript:;" onclick="openModal();" class="btn bg-gradient-primary btn-sm mb-0" >+&nbsp; Nuevo</a>
                    <?php } ?>
                    <div class="modal fade" id="import" tabindex="-1" aria-hidden="true">
                      <div class="modal-dialog mt-lg-10">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h5 class="modal-title" id="ModalLabel">Import CSV</h5>
                            <i class="fas fa-upload ms-3"></i>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                          </div>
                          <div class="modal-body">
                            <p>You can browse your computer for a file.</p>
                            <input type="text" placeholder="Browse file..." class="form-control mb-3">
                            <div class="form-check">
                              <input class="form-check-input" type="checkbox" value="" id="importCheck" checked="">
                              <label class="custom-control-label" for="importCheck">I accept the terms and conditions</label>
                            </div>
                          </div>
                          <div class="modal-footer">
                            <button type="button" class="btn bg-gradient-secondary btn-sm" data-bs-dismiss="modal">Close</button>
                            <button type="button" class="btn bg-gradient-primary btn-sm">Upload</button>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="card-body px-0 pb-0">
              <div class="table-responsive">
                
              <table class="table align-items-center mb-0 table table-striped table-bordered dataTable no-footer" id="tableDepartamentos">
                      <thead>
                        <tr>
                          <th>ID</th>
                          <th>Nombre</th>
                          <th>Descripci??n</th>
                          <th>Status</th>
                          <th>Acciones</th>
                        </tr>
                      </thead>
                      <tbody>
                      </tbody>
                    </table>
              </div>
            </div>
          </div>
        </div>
      </div>

<?php footerAdmin($data); ?>
    