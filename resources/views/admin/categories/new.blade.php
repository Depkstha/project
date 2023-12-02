  <!-- Modal -->
  <div class="modal fade" id="categoryForm" tabindex="-1" role="dialog" aria-labelledby="categoryFormTitle"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="categoryFormTitle"></h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <form id="form" method="POST">
          <div class="modal-body">
            @csrf
            <div class="mb-3">
              <label for="name" class="form-label text-bold">Name <span class="text-danger">*</span></label>
              <input type="text" id="name" class="rounded form-control" name="name" required>
            </div>
            <div class="mb-3">
              <div class="mb-3">
                <label for="">Publish</label>
              </div>
              <label class="switch">
                <input type="checkbox" id="is_published" class="form-control" name="is_published"
                  @isset($category)
                  {{ $category->is_published == 1 ? 'checked' : '' }}
                  @endisset>
                <span class="slider round"></span>
              </label>
            </div>
          </div>
          <div class="modal-footer">
            <button id="saveBtn" type="submit" class="btn btn-primary btn-sm"></button>
          </div>
        </form>
      </div>
    </div>
  </div>
