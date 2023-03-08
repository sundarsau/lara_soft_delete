<!-- Modal for Permanent Delete Confirmation-->
<div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="deleteModalTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <form action="{{ route('permanent.delete') }}" method="post">
                {{ csrf_field() }}
                <input type="hidden" name="delete" id="delete_id">
                <div>
                    <center>
                        <h1>!</h1>
                    </center>
                </div>

                <div class="modal-body">
                    <center>
                        <h1>Are You Sure?</h1>
                        <h6>You want to Permanently delete the Course? It can not be Restored!!</h6>
                    </center>
                </div>
                <div class="row" style="margin-bottom: 50px; text-align: center;">
                    <div class="col-sm-3"></div>
                    <div class="col-sm-3">
                        <button type="button" class="btn btn-danger btn-cancel" data-bs-dismiss="modal">Cancel</button>
                    </div>
                    <div class="col-sm-3">
                        <button type="submit" class="btn btn-success btn-submit">Delete</button>
                    </div>
                    <div class="col-sm-3"></div>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- Restore Modal  -->
<div class="modal fade" id="restoreModal" tabindex="-1" role="dialog" aria-labelledby="restoreModalTitle"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <form action="{{ route('course.restore') }}" method="post">
                {{ csrf_field() }}
                <input type="hidden" name="restore" id="restore_id">
                <div class="swal-icon swal-icon--warning">
                    <center>
                        <h1>!</h1>
                    </center>
                </div>

                <div class="modal-body">
                    <center>
                        <h1>Are You Sure</h1>
                        <h6>Are You Sure You Want to Restore Selected Course?</h6>
                    </center>
                </div>
                <div class="row" style="margin-bottom: 50px; text-align: center;">
                    <div class="col-sm-3"></div>
                    <div class="col-sm-3">
                        <button type="button" class="btn btn-danger btn-cancel" data-bs-dismiss="modal">Cancel</button>
                    </div>
                    <div class="col-sm-3">
                        <button type="submit" class="btn btn-success btn-submit">Yes Restore It</button>
                    </div>
                    <div class="col-sm-3"></div>
                </div>
            </form>
        </div>
    </div>
</div>
