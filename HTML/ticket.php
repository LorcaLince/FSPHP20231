<?php include("menu.php"); ?> 

    <div class="container grupo-tickets">
        <div class="row row-group d-flex justify-content-center align-items-center g-1">
            <div class="card card-tickets card-tickets-estudiante col-md-3">
                <div class="card-body">
                    <h5 class="card-title"><b>Estudiante</b></h5>
                    <p class="card-text pt-2">Tienen descuento</p>
                    <h6><b>80%</b></h6>
                    <p class="card-text pt-2"><small class="text-body-secondary">* presentar documentación</small></p>
                </div>
            </div>
            <div class="card card-tickets card-tickets-trainee mx-2 col-md-3">
                <div class="card-body">
                    <h5 class="card-title"><b>Trainee</b></h5>
                    <p class="card-text pt-2">Tienen descuento</p>
                    <h6><b>50%</b></h6>
                    <p class="card-text pt-2"><small class="text-body-secondary">* presentar documentación</small></p>
                </div>
            </div>
            <div class="card card-tickets card-tickets-junior col-md-3">
                <div class="card-body">
                    <h5 class="card-title"><b>Junior</b></h5>
                    <p class="card-text pt-2">Tienen descuento</p>
                    <h6><b>15%</b></h6>
                    <p class="card-text pt-2"><small class="text-body-secondary">* presentar documentación</small></p>
                </div>
            </div>
        </div>    
    </div>
    <div class="text-center mt-3 mb-4">
        <p class="m-0">VENTA</p>
        <h2>VALOR DE TICKET $200</h2>       
    </div>
    <form method="post" action="datosCompra.php" class="formulario-tickets" id="formulario-tickets">
        <div>    
            <div class="row">
                <div class="col-6">
                    <input type="text" class="form-control" name="nombre" placeholder="Nombre" aria-label="Nombre">
                </div>
                <div class="col-6">
                    <input type="text" class="form-control" name="apellido" placeholder="Apellido" aria-label="Apellido">
                </div>
                <div class="col-12 mt-3">
                    <input type="email" class="form-control" name="email" placeholder="Correo" aria-label="Correo"s>
                </div>
                <div class="col-6 mt-3">
                    <label for="" class="ps-1">Cantidad</label>
                    <input type="text" class="form-control mt-2" id="input-cantidad" name= "cantidad" placeholder="Cantidad" aria-label="Cantidad" required>
                </div>
                <div class="col-6 mt-3">
                    <label for="" class="ps-1">Categoría</label>
                    <select class="form-select select-tickets mt-2" name="categoria" id="select-tickets" aria-label="Default select example">
                        <option selected>Selecciona una Categoría</option>
                        <option value="1">Estudiante</option>
                        <option value="2">Trainee</option>
                        <option value="3">Junior</option>
                        <option value="4">General</option>
                    </select>
                </div>
                <div class="col-12 mt-4">
                    <input type="text" class="form-control form-control-lg total-pagar" id="input-total-pagar" placeholder="Total a pagar: $" aria-label="Total" disabled>
                </div>
                <div class="container-btn-tickets d-flex justify-content-between">
                    <button type="submit" class="btn btn-success btn-ticket mt-4 p-2" onclick="borrar();">Borrar</button>
                    <button type="submit" class="btn btn-success btn-ticket mt-4 p-2" onclick="montoPagar();">Resumen</button>
                <div class="col-12">
                    <button type="submit" class="col-12 btn btn-primary" >Comprar</button>
            
            </div>
        </div>
    </form>
  


<?php include("footer.php") ;?>