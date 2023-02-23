<!-- Modal -->
<div class="modal fade" id="modalFormVacantes" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog modal-xl" >
    <div class="modal-content">
      <div class="modal-header headerRegister">
        <h5 class="modal-title" id="titleModal">Nueva Producto</h5>
        <button type="button" class="btn bg-gradient-danger" data-bs-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">×</span>
                            </button>
      </div>
      <div class="modal-body">
            <form id="formVacantes" name="formVacantes" class="form-horizontal">
              <input type="hidden" id="idVacante" name="idVacante" value="">
              <p class="text-danger text-gradient">Los campos con asterisco (<span class="required">*</span>) son obligatorios.</p>
              <div class="row">
                <div class="col-md-8">
                    <div class="form-group">
                      <label class="control-label">Nombre de la vacante <span class="required">*</span></label>
                      <input class="form-control" id="txtNombre" name="txtNombre" type="text" required="">
                    </div>
                    <div class="form-group">
                      <label class="control-label">Descripción de la vacante</label>
                      <textarea class="form-control" id="txtDescripcion" name="txtDescripcion" ></textarea>
                    </div>
                    
                </div>
                <div class="col-md-4">


                    <div class="card mt-4 mb-3">
            <div class="card-body pb-0">
              <div class="row align-items-center mb-3">
                <div class="col-9">
                  <h5 class="mb-1 text-gradient text-primary">
                    <a href="javascript:;">Importante!</a>
                  </h5>
                </div>
              </div>
              <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
 
            </div>
          </div>

                    <div class="row">
                        <div class="form-group col-md-6">
                            <label for="listArea">Área de la vacante <span class="required">*</span></label>
                            <select class="form-control"  id="listArea" name="listArea" required=""></select>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="listStatus"> Asignada A  <span class="required">*</span></label>
                            <select class="form-control selectpicker" id="listStatus" name="listStatus" required="">
                              <option value="1">Yendi</option>
                              <option value="2">Fernanda</option>
                            </select>
                        </div>
                    </div>

                    <div class="row">
                       <div class="form-group col-md-6">
                           <button id="btnActionForm" class="btn bg-gradient-success btn-sm btn-block" type="submit"><i class="fa fa-fw fa-lg fa-check-circle"></i><span id="btnText">Guardar</span></button>
                       </div> 
                       <div class="form-group col-md-6">
                           <button class="btn bg-gradient-danger btn-sm btn-block" type="button"  data-bs-dismiss="modal"><i class="fa fa-fw fa-lg fa-times-circle"></i>Cerrar</button>
                       </div> 
                    </div>  
                </div>
              </div>
              
              <div class="tile-footer">
                 <div class="form-group col-md-12">
                     <div id="containerGallery">
                         <span>Agregar Portada de la vacante (440 x 545)</span>
                         <button class="btnAddImage btn btn-info btn-sm" type="button">
                             <i class="fas fa-plus"></i>
                         </button>
                     </div>
                     <hr>
                     <div id="containerImages">
                         <!-- <div id="div24">
                             <div class="prevImage">
                                 <img src="<?= media(); ?>/images/uploads/producto1.jpg">
                             </div>
                             <input type="file" name="foto" id="img1" class="inputUploadfile">
                             <label for="img1" class="btnUploadfile"><i class="fas fa-upload "></i></label>
                             <button class="btnDeleteImage" type="button" onclick="fntDelItem('div24')"><i class="fas fa-trash-alt"></i></button>
                         </div>
                         <div id="div24">
                             <div class="prevImage">
                                 <img class="loading" src="<?= media(); ?>/images/loading.svg">
                             </div>
                             <input type="file" name="foto" id="img1" class="inputUploadfile">
                             <label for="img1" class="btnUploadfile"><i class="fas fa-upload "></i></label>
                             <button class="btnDeleteImage" type="button" onclick="fntDelItem('div24')"><i class="fas fa-trash-alt"></i></button>
                         </div> -->
                        
                     </div>
                 </div>
                                
              </div>
            </form>
      </div>
    </div>
  </div>
</div>

<!-- Modal -->
<div class="modal fade" id="modalViewProducto" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog modal-xl" >
    <div class="modal-content">
      <div class="modal-header header-primary">
        <h5 class="modal-title" id="titleModal">Datos del Producto</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <table class="table table-bordered">
          <tbody>
            <tr>
              <td>Codigo:</td>
              <td id="celCodigo"></td>
            </tr>
            <tr>
              <td>Nombres:</td>
              <td id="celNombre"></td>
            </tr>
            <tr>
              <td>Precio:</td>
              <td id="celPrecio"></td>
            </tr>
            <tr>
              <td>Stock:</td>
              <td id="celStock"></td>
            </tr>
            <tr>
              <td>Categoría:</td>
              <td id="celCategoria"></td>
            </tr>
            <tr>
              <td>Status:</td>
              <td id="celStatus"></td>
            </tr>
            <tr>
              <td>Descripción:</td>
              <td id="celDescripcion"></td>
            </tr>
            <tr>
              <td>Fotos de referencia:</td>
              <td id="celFotos">
              </td>
            </tr>
          </tbody>
        </table>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
      </div>
    </div>
  </div>
</div>

