@extends('admin.articles.master')

@section('content')
  <div class="card">
    <!--begin::Header-->
    <div class="card-header card-header-stretch">
      <!--begin::Title-->
      <div class="card-title">
        <h3 class="m-0 text-gray-800">Categories</h3>
      </div>
      <div class="justify-end m-3 d-flex">
        <button id="createNewCategory" class="btn btn-sm btn-primary" data-toggle="modal" data-target="#categoryForm">Add
          new</button>
      </div>
    </div>
    <!--end::Title-->
    <!--begin::Tab Content-->
    <div id="kt_referred_users_tab_content" class="tab-content">
      <!--begin::Tab panel-->
      <div id="kt_referrals_1" class="p-0 card-body tab-pane fade show active" role="tabpanel">
        <div class="table-responsive">
          <!--begin::Table-->
          <table class="table align-middle table-row-bordered table-row-solid gy-4 gs-9">
            <!--begin::Thead-->
            <thead class="border-gray-200 fs-5 fw-semibold bg-lighten">
              <tr>
                <th class="min-w-175px ps-9">S.N</th>
                <th class="px-0 min-w-150px">Name</th>
                <th class="min-w-350px">Slug</th>
                <th class="min-w-125px">Published</th>
                <th class="text-center min-w-125px">Action</th>
              </tr>
            </thead>
            <!--end::Thead-->

            <!--begin::Tbody-->
            <tbody class="text-gray-600 fs-6 fw-semibold">
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
                  <td class="text-center">
                    <button data-id="{{ $category->id }}" class="btn btn-sm btn-secondary editCategory">Edit</button>
                    <button class="btn btn-sm btn-danger DeleteCategory">Delete</button>
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
    $(document).ready(function($) {
      $.ajaxSetup({
        headers: {
          'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content'),
        }
      });

      toastr.options = {
        "closeButton": true,
        "debug": false,
        "newestOnTop": true,
        "progessBar": true,
        "preventDuplicates": true,
        "positionClass": "toast-top-right",
        "showDuration": "300",
        "hideDuration": "1000",
        "timeOut": "5000",
        "extendTimeOut": "1000",
        "showEasing": "swing",
        "hideEasing": "linear",
        "showMethod": "fadeIn",
        "hideMethod": "fadeOut",
      }

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
        var url = "{{ url('/category/store') }}";

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
            table.draw();
            toastr.success('Data saved successfully', 'success');
          },
        });
      });
    });
  </script>
@endsection
