<?php
$url = "http://localhost/ArTeM01-054/psychology/apirest/controllers/personas.php?op=GetAll";
$curl = curl_init();
curl_setopt($curl, CURLOPT_URL, $url);
curl_setopt($curl, CURLOPT_RETURNTRANSFER,1);
$output = json_decode(curl_exec($curl));

?>


<div class="card">
              <div class="card-header">
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                  Crear Nueva Persona
                </button>
              </div>
              <!-- Button trigger modal -->


<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="http://localhost/ArTeM01-054/psychology/apirest/controllers/personas.php?op=insert" method="post">
          <label for="">Nombre</label>
          <input type="text" name="nombre" id="">
          <br>
          <label for="">Telefono</label>
          <input type="number" name="telefono" id="">
          <br>
          <label for="">Correo</label>
          <input type="text" name="correo" id="">
          <br>
          <label for="">foto</label>
          <input type="text" name="foto" id="">
          <br>
          <label for="">Documento</label>
          <input type="text" name="Documento" id="">
          <br>
          <label for="">tipo_documento</label>
          <input type="text" name="tipo_Doc" id="">
          <br>
          <label for="">tipo_persona</label>
          <input type="text" name="tipo_persona" id="">
          <br>
          <input type="submit" value="Agregar Persona" name="subir">
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>Nombre</th>
                    <th>Telefono</th>
                    <th>Correo</th>
                    <th>Foto</th>
                    <th>Documento</th>
                    <th>Tipo Documento</th>
                    <th>Tipo Persona</th>
                  </tr>
                  </thead>
                  <tbody>
                    <?php 
                        foreach ($output as $out) {
                    ?>
                  <tr>
                    <td><?php echo $out->nombre;?></td>
                    <td><?php echo $out->telefono;?></td>
                    <td><?php echo $out->correo;?></td>
                    <td><?php echo $out->foto;?></td>
                    <td><?php echo $out->documento;?></td>
                    <td><?php echo $out->tipo_documento;?></td>
                    <td><?php echo $out->tipo_persona;?></td>
                  </tr>
                  <?php }?>
                            
                  </tbody>
                  <tfoot>
                  <tr>
                    <th>Rendering engine</th>
                    <th>Browser</th>
                    <th>Platform(s)</th>
                    <th>Engine version</th>
                    <th>CSS grade</th>
                    <th>Cerditos</th>                    
                    <th>Artemis</th>                    
                  </tr>
                  </tfoot>
                </table>
              </div>
              <!-- /.card-body -->
            </div>


<script>
  $(function () {
    $("#example1").DataTable({
      "responsive": true, "lengthChange": false, "autoWidth": false,
      "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
    }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,
    });
  });
</script>