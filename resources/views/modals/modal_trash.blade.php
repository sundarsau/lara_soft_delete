<!-- Modal -->
<div class="modal fade" id="modalTrash" tabindex="-1" role="dialog"
aria-labelledby="modalTrashTitle" aria-hidden="true">
<div class="modal-dialog modal-dialog-centered" role="document">
  <div class="modal-content">
    <form action="{{route('soft.delete')}}" method="post">
      {{csrf_field()}}
      <input type="hidden" name="delete" id="delete_id">
      <div>
        <center><h1>!</h1></center>
      </div>

    <div class="modal-body">
      <center><h1>Are You Sure?</h1>
      <h6>You want to Move Course to Trash!</h6>
    </center>
    </div>
      <div class="row" style="margin-bottom: 50px; text-align: center;">
        <div class="col-sm-3"></div>
        <div class="col-sm-3">
          <button type="button" class="btn btn-danger btn-cancel" data-bs-dismiss="modal">Cancel</button>
        </div>
        <div class="col-sm-3">
          <button type="submit" class="btn btn-success btn-submit" >Move to Trash</button>
        </div>
        <div class="col-sm-3"></div>
      </div>
    </form>
  </div>
</div>
</div>