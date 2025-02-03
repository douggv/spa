<?php 
include '../../../app/config.php';

?>

<?php 

$categoria = $_GET['categoria'];
$sql = "SELECT * FROM eventos where categoria = '$categoria' ";
$query = $pdo->prepare($sql);
$query->execute();
$eventos = $query->fetchAll(PDO::FETCH_ASSOC);

$servicio_id = $_GET['id_servicio'];
include '../../../app/controllers/servicios/datos_del_servicio.php';
?>

<?php include '../../layout/cabecera.php';?>
<?php include '../../layout/nav.php';?>
<?php include '../../../admin/layout/mensaje.php'; ?>
<script>
    document.addEventListener('DOMContentLoaded', function() {
    const calendarEl = document.getElementById('calendar')
    const calendar = new FullCalendar.Calendar(calendarEl, {
    initialView: 'dayGridMonth',
    
    headerToolbar: {
      left: 'today,prev,next',
      center: 'title',
      right: 'dayGridMonth,timeGridWeek,timeGridDay'
    },
    locale : 'es',
    events: [
        <?php foreach($eventos as $evento): ?>
        {
            title: '<?php echo $evento['title']; ?>',
            start: '<?php echo $evento['start']; ?>',
            end: '<?php echo $evento['end']; ?>',
            categoria: '<?php echo $evento['categoria']; ?>',
        },
        <?php endforeach; ?>
    ],

    dateClick: function(info) {
        a = info.dateStr;
            const fechaComoCadena = a;
            var numeroDia = new Date(fechaComoCadena).getDay();
           
            var diaSemanaIndex = (numeroDia);

            var diasSemana = ['Lunes', 'Martes', 'Miércoles', 'Jueves', 'Viernes', 'Sábado', 'Domingo'];
            var diaSemana = diasSemana[diaSemanaIndex];
                if (numeroDia == 0) {
                    Swal.fire({
                    position: "center",
                    icon: "error",
                    title: "Lo sentimos, no hay atencion los dias Domingos",
                    showConfirmButton: false,
                    timer: 1500
                    });            
                } else {
                // Abre el modal de Bootstrap
        $('#txtFecha').val(info.dateStr);
        $('#txtFechaCulminacion').val(info.dateStr);
        $('#modalEventos').modal('show');
    }
      //alert('clicked ' + info.dateStr); //indformacion de la fecha
      //alert("vista actual"+ info.view.type); // informacion de la vista
      //info.dayEl.style.backgroundColor = 'red';// cambiar el color del dia
      //$('#exampleModal').modal();
    },
        
    })
    .render()
    })
</script>


<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div id='calendar'></div>
        </div>
    </div>
</div>



<form action="../../../app/controllers_clientes/agendas/enviar_reservas.php" method="post">
<div class="modal fade" id="modalEventos" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="tituloEvento"></h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <div  id="descripcion"></div>
        <div class="row">
          <div class="col-md-2">
            <div class="form-group">
              <label for="txtID" class="form-label">ID</label>
              <input type="text" class="form-control" id="txtID" name="id" readonly>
            </div>
          </div>
          <div class="col-md-10">
            <div class="form-group">
              <label for="titulo" class="form-label">Titulo</label>    
              <input value =  " <?php echo $nombre; ?>" type="text" class="form-control" id="titulo" name="title" required>
            </div>
          </div>
        </div>
        <div class= "row">
          <div class="col-md-6">
            <div class="form-group">
              <label for="fecha" class="form-label">Fecha</label>    
              <input  type="text" id="txtFecha" class="form-control" name="fecha" required>
            </div>
            
          </div>
          <div class="col-md-6">
            <div class="form-group">
              <label for="hora" class="form-label">Hora</label>    
              <input placeholder="00:00" type="text" class="form-control" id="txtHora" name="hora" required pattern="^([01][0-9]|2[0-3]):([0-5][0-9])$">            </div>
          </div>

        </div>
        
        <div class= "row">
          <div class="col-md-6">
            <div class="form-group">
              <label for="fecha" class="form-label">Fecha Culminacion</label>    
              <input type="text"  class="form-control" id="txtFechaCulminacion" name="fechaCulminacion" required>
            </div>
            
          </div>
          <div class="col-md-6">
            <div class="form-group">
              <label for="precio" class="form-label">Precio</label>  
              <input value="<?php echo $precio; ?>$" type="text" class="form-control" id="txtprecio" name="precio" required>  
            </div>
          </div>


        </div>
        <div class= "row">

          <div class="col-md-6">
            <div class="form-group">
              <label for="categoria" class="form-label">Categoría</label>    
              <input value="<?php echo $categoria; ?>" type="text" class="form-control" id="txtcategoria" name="categoria" required>
            </div>
            
          </div>
          <div class="col-md-6">
            <div class="form-group">
              <label for="cliente" class="form-label">Cliente</label>    
              <input value="<?php echo $nombre_usuario_sesion_cliente; ?>" type="text" class="form-control" id="txtcliente" name="cliente" required>
            
            </div>
          </div>

        </div>
        <div class= "row">
 
          <div class="col-md-6">
            <div class="form-group">
              <label for="descripcion" class="form-label">Descripcion</label>    
              <input value =  "<?php echo $descripcion; ?>" class="form-control" id="txtdescripcion" name="descripcion" required></input>

            </div>
          </div>
          <div class="col-md-6">
            <div class="form-group">
              <label for="" class="form-label">Forma de pago</label> 
              <select class="form-select" aria-label="Default select example" name="forma_pago" required>
                <option value="efectivo">Efectivo</option>
                <option value="tarjeta">Tarjeta</option>
                <option value="transferencia">Transferencia</option>
                <option value="otros">Otros</option>
              </select>   
            </div>
            
          </div>

        </div>
        <div class= "row">
          <div class="col-md-6">
            <div class="form-group">
              <label for="" class="form-label">Nombre que realizo el pago</label>    
              <input type="text" class="form-control" id="txtPago" name="nombre_pago" >
            </div>
            
          </div>
          <div class="col-md-6">
            <div class="form-group">
              <label for="" class="form-label">Numero de Referencia</label> 
              <input type="text" class="form-control" id="txtReferencia" name="referencia" >   
            </div>  
          </div>
        </div>
          
          
          
          
          
          <input type="text" value = " <?php echo $id_usuario_sesion; ?>" name="id_usuario_fk" hidden>
          <input type="text" value = " <?php echo $id_servicio; ?>" name="id_servicio_fk" hidden>
          <input type="text" value ="pendiente" name="estado" hidden>
        </div>
      <div class="modal-footer">
        <button type="submit" id="btnAgregar" class="btn btn-success" >Enviar</button>
        <button type="button" class="btn btn-default" data-bs-dismiss="modal">Close</button>
        
      </div>
    </div>
  </div>
</div>
</form>