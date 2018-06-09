<!-- Modal -->
<div id="levelModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Add Level</h4>
      </div>
      <div class="modal-body">
        <p>kindly enter credentials here.</p>


        <form action="#" method="" enctype="multipart/form-data">
                             {{csrf_field()}}

  <div class="form-group">
    <label for="name"> Enter Level </label>
    <input type="text" class="form-control" id="name" name="name" aria-describedby="emailHelp" placeholder="Enter Category Name">
    <small id="emailHelp" class="form-text text-muted">Name of category.</small>
  </div>
  
<div class="form-group">
    <label for="name">  Level description</label>
    <input type="text" class="form-control" id="name" name="name" aria-describedby="emailHelp" placeholder="Enter Category Name">
    <small id="emailHelp" class="form-text text-muted">Name of category.</small>
  </div>


  <button  type="submit"class="btn btn-primary">Create Category</button>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>