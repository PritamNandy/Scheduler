<!--main content start-->
<section id="main-content">
    <section class="wrapper">
        <!-- page start-->
        <div class="row">
            <div class="col-md-12">
                <section class="card">
                    <header class="card-header">
                        <b style="font-weight: 600; font-size: 20px;"><?php echo lang('location');?></b>
                        <button class="btn btn-sm btn-success pull-right" data-toggle="modal" data-target="#addModal"><i class="fa fa-plus"></i> <?php echo lang('add')." ".lang('location'); ?></button>
                    </header>
                    <div class="card-body">
                        <div class="adv-table">
                            <table  class="table table-bordered table-striped" id="myTable" style="width: 100%;">
                                <thead>
                                    <tr>
                                        <th><?php echo lang('location'); ?></th>
                                        <th><?php echo lang('description'); ?></th>
                                        <th><?php echo lang('options'); ?></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach($locations as $location) { ?>
                                    <tr>
                                        <td><?php echo $location->name; ?></td>
                                        <td><?php echo $location->description; ?></td>
                                        <td><a class="btn btn-sm btn-warning edit" href="<?php echo site_url('event/editLocation/?id='.$location->id); ?>" data-id="<?php echo $location->id; ?>"><i class="fa fa-edit"></i> <?php echo lang('edit'); ?></a> <a class="btn btn-sm btn-danger" href="<?php echo site_url('event/deleteDayHeading/?id='.$location->id); ?>" onclick="confirm('Are you sure?')"><i class="fa fa-trash-o"></i> <?php echo lang('delete'); ?></a>
                                        <?php if($location->status == 1) { ?>
                                            <a class="btn btn-primary btn-sm" href="<?php echo site_url('event/locationStatus/?id='.$location->id."&status=0"); ?>">Active</a>
                                        <?php } else { ?>
                                            <a class="btn btn-secondary btn-sm" href="<?php echo site_url('event/locationStatus/?id='.$location->id."&status=1"); ?>">Inactive</a>
                                        <?php } ?>
                                        </td>
                                    </tr>
                                    <?php } ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </section>
            </div>
        </div>
        <!-- page end-->
    </section>
</section>
<!--main content end-->


<!-- Add Modal -->
<div class="modal fade" id="addModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel"><?php echo lang('add')." ".lang('location'); ?></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
          <form action="<?php echo site_url('event/addEditLocation'); ?>" method="post">
              <div class="form-group">
                  <label for="exampleInputEmail1"><?php echo lang('location')." ".lang('name'); ?></label><span style="color: red; font-weight: bold;">*</span>
                  <input type="text" class="form-control" id="exampleInputEmail1" name="location" placeholder="Enter location name">
              </div>
              <div class="form-group">
                  <label for="exampleInputPassword1"><?php echo lang('description'); ?></label>
                  <textarea class="form-control" id="exampleInputPassword1" name="description" placeholder="Enter description of location"></textarea>
              </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button submit" class="btn btn-primary">Save changes</button>
      </div>
    </form>
    </div>
  </div>
</div>


<!-- Edit Event Types Modal -->
<div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel"><?php echo lang('edit')." ".lang('event')." ".lang('type'); ?></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
          <form id="editForm" action="<?php echo site_url('event/addEditEventType'); ?>" method="post">
              <div class="form-group">
                  <label for="exampleInputEmail1"><?php echo lang('event')." ".lang('name'); ?></label><span style="color: red;">*</span>
                  <input type="text" class="form-control" id="exampleInputEmail1" name="event" placeholder="Enter event name">
              </div>
              <div class="form-group">
                  <label for="exampleInputPassword1"><?php echo lang('description'); ?></label>
                  <textarea class="form-control" id="exampleInputPassword1" name="description" placeholder="Enter description of event"></textarea>
              </div>
              <div class="form-group">
                  <label for="exampleInputPassword1"><?php echo lang('color'); ?></label>
                  <div id="cp2" class="input-group colorpicker-component mb-3 colorpicker-element" title="Using input value" data-colorpicker-id="2">
                      <input type="text" class="form-control input-lg" name="color" value="#328dff">
                      <div class="input-group-append">
                          <span class="input-group-addon btn btn-outline-secondary"><i style="background-color: rgb(50, 141, 255);"></i></span>
                      </div>
                  </div>
              </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button submit" class="btn btn-primary">Save changes</button>
      </div>
    </form>
    </div>
  </div>
</div>


<script src="<?php echo site_url('common/js/jquery.js'); ?>"></script>
<script src="<?php echo site_url('common/js/bootstrap.bundle.min.js'); ?>"></script>
<script>
    
$(document).ready(function() {
    $('#myTable').DataTable( {
    responsive: true,
    "processing": true,
                "searchable": true,
    dom: "<'row'<'col-sm-3'l><'col-sm-5 text-center'B><'col-sm-4'f>>" +
                        "<'row'<'col-sm-12'tr>>" +
                        "<'row'<'col-sm-5'i><'col-sm-7'p>>",
                buttons: [
                    'copyHtml5',
                    {
                        extend: 'excelHtml5',
                        exportOptions: {
                            columns: [0, 1, 2],
                        }
                    },
                    {
                        extend: 'csvHtml5',
                        exportOptions: {
                            columns: [0, 1, 2],
                        }
                    },
                    {
                        extend: 'pdfHtml5',
                        exportOptions: {
                            columns: [0, 1, 2],
                        }
                    },
                    {
                        extend: 'print',
                        exportOptions: {
                            columns: [0, 1, 2],
                        }
                    },
                ],
                language: { search: '', searchPlaceholder: "Search..." },
        });
        /*$('#myTable .edit').click(function(){
            var id = $(this).attr("data-id");
            $.ajax({
                 url: "event/getEventTypeByJson?id=" + id,
                 method: 'GET',
                 data: '',
                 dataType: "json",
                 success: function(response){
                   $('#editForm').find('input[name="event"]').val(response.name);
                   $('#editForm').find('input[name="description"]').val(response.description);
                   $('#editForm').find('input[name="color"]').val(response.color);
                 }
             }); 
             $('#editModal').modal('show');
        });    */
})

</script>