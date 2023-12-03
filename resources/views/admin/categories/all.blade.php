@extends('admin.articles.master')

@section('content')
  <div class="card">
    <!--begin::Header-->
    <div class="card-header card-header-stretch">
      <!--begin::Title-->
      <div class="card-title">
        <h3 class="m-0 text-gray-800">Categories</h3>
      </div>
      <div class="d-flex m-3 justify-end">
        <button id="createNewCategory" class="btn btn-sm btn-primary" data-toggle="modal" data-target="#categoryForm">Add
          new</button>
      </div>
    </div>
    <!--end::Title-->
    <!--begin::Tab Content-->
    <div id="kt_referred_users_tab_content" class="tab-content">
      <!--begin::Tab panel-->
      <div id="kt_referrals_1" class="card-body tab-pane fade show active p-0" role="tabpanel">
        <div class="table-responsive">
          <!--begin::Table-->
          <table class="table-row-bordered table-row-solid gy-4 gs-9 table align-middle">
            <!--begin::Thead-->
            <thead class="fs-5 fw-semibold bg-lighten border-gray-200">
              <tr>
                <th class="min-w-125px ps-9">S.N</th>
                <th class="min-w-150px px-0">Name</th>
                <th class="min-w-150px">Slug</th>
                <th class="min-w-125px">Published</th>
                <th class="min-w-125px text-center">Action</th>
              </tr>
            </thead>
            <!--end::Thead-->

            <!--begin::Tbody-->
            <tbody class="fs-6 fw-semibold text-gray-600">
              @foreach ($categories as $category)
                <tr>
                  <td class="ps-9">{{ $category->id }}</td>
                  <td class="ps-0">{{ $category->name }}</td>
                  <td>{{ $category->slug }}</td>
                  <td class="text-success">
                    <label class="switch">
                      <input type="checkbox" id="is_published" class="form-control" name="is_published"
                        value="{{ $category->is_published }}" {{ $category->is_published == '1' ? 'checked' : '' }}>
                      <span class="slider round"></span>
                    </label>
                  </td>
                  <td class="d-flex gap-2">
                    <button data-id="{{ $category->id }}" class="btn btn-sm btn-secondary editCategory">Edit</button>
                    <form action="{{ route('category.destroy', $category->id) }}" method="POST">
                      @csrf
                      @method('DELETE')
                      <a href="{{ route('category.destroy', $category->id) }}"
                        onclick="e.preventDefault();this.closest('form').submit();"
                        class="btn btn-sm btn-danger">Delete</a>
                    </form>
                  </td>
                </tr>
              @endforeach
            </tbody>
            <!--end::Tbody-->
          </table>
          <!--end::Table-->
        </div>
      </div>
      <!--end::Tab panel-->
    </div>
    <!--end::Tab Content-->
  </div>
  @include('admin.categories.new')
@endsection

@section('scripts')
  <script type="text/javascript">
    $(document).ready(function() {

      $("#createNewCategory").click(function() {
        $('#form').trigger("reset");
        $('#categoryFormTitle').html('Add new category');
        $('#categoryForm').modal('show');
      });

      $('.add-subcategory').click(function() {
        const container = $('#subcategoriesContainer');
        const newSubcategory = container.find('.subcategory:first').clone();

        newSubcategory.find('input').val('');

        container.append(newSubcategory);
      });

      $('#subcategoriesContainer').on('click', '.remove-subcategory', function() {
        $(this).closest('.subcategory').remove();
      });

      $(".close").click(function() {
        $('#categoryForm').modal('hide');
      })

    });
  </script>
  {{-- <script type="text/javascript">
    $(document).ready(function($) {
      $.ajaxSetup({
        headers: {
          'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content'),
        }
      });

      $("#createNewCategory").click(function() {
        $('#form').trigger("reset");
        $('#saveBtn').html('Save');
        $('#categoryFormTitle').html('Add new category');
        $('#categoryForm').modal('show');
      });

      $('.editCategory').on('click', function() {
        var id = $(this).data('id');
        console.log(id);
        $.ajax({
          type: "GET",
          url: "{{ url('/category/edit') }}/" + id,
          dataType: "json",
          success: function(data) {
            $('#categoryFormTitle').html('Edit a category');
            $('#categoryForm').modal('show');
            $('#name').val(data.name);
            $('#is_published').prop('checked', data.is_published);
            $('#saveBtn').html('Update').data('id', id);
          }
        });
      });

      $(".close").click(function() {
        $('#categoryForm').modal('hide');
      })

      $('#saveBtn').click(function(e) {
        e.preventDefault();
        $(this).html('Saving...');
        var isPublished = $('#is_published').is(':checked') ? 1 : 0;
        var id = $(this).data('id');
        var url = "{{ url('category/store') }}";

        $.ajax({
          type: id ? 'PUT' : 'POST',
          url: url,
          data: {
            'name': $('#name').val(),
            'is_published': isPublished,
          },
          dataType: 'json',
          success: function(data) {
            $('#form').trigger('reset');
            $('#categoryForm').modal("hide");
            toastr.success('Data saved successfully', 'success');
          },
        });
      });
      $('.add-subcategory').click(function() {
        const container = $('#subcategoriesContainer');
        const newSubcategory = container.find('.subcategory:first').clone();

        newSubcategory.find('input').val('');

        container.append(newSubcategory);
      });

      $('#subcategoriesContainer').on('click', '.remove-subcategory', function() {
        $(this).closest('.subcategory').remove();
      });
    });
  </script> --}}
@endsection
