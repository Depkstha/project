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
        <form id="form" method="POST" action="{{ route('category.store') }}">
          <div class="modal-body">
            @csrf
            <div class="mb-3">
              <label for="name" class="form-label text-bold">Name <span class="text-danger">*</span></label>
              <input type="text" id="name" class="form-control rounded" name="name" required>
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

            <div id="subcategoriesContainer">
              <div class="form-group subcategory mb-3">
                <label class="form-label" for="subcategories">SubCategory <span class="text-danger">*</span></label>
                <div class="d-flex gap-3">
                  <input type="text" name="subcategories[]" class="form-control rounded" required>
                  <button type="button" class="badge bg-danger remove-subcategory"><i
                      class="fa-solid fa-minus"></i></button>
                  <button type="button" class="badge bg-secondary add-subcategory"><i
                      class="fa-solid fa-plus"></i></button>
                </div>
              </div>
            </div>
            <div class="mt-3 justify-end">
              <button type="submit" class="btn btn-primary btn-sm">Save</button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
