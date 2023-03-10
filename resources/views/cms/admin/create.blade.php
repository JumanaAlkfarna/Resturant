@extends('cms.parent')

@section('title' , 'Admin')

@section('main_title' , 'Create Admin')

@section('sub_title' , 'create_Admin')


@section('styles')

@endsection



@section('content')
<section class="container-fluid">
    <div class="card card-primary">
        <div class="card-header">
            <h3 class="card-title">Create Data Of Admin</h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        <form>
            <div class="card-body">
                <div class="row">
                    <div class="form-group col-md-6">
                      <label>Roles Name</label>
                      <select class="form-control select2" id="role_id" name="role_id" style="width: 100%;">
                        {{-- <option selected="selected">Alabama</option> --}}
                      @foreach($roles as $role)
                        <option value="{{ $role->id }}">{{ $role->name }}</option>
                      @endforeach
                      </select>
                    </div>
                  </div>

                <div class="row">
                    <div class="form-group col-md-6">
                        <label for="first_name">Admin First Name</label>
                        <input type="text" class="form-control" id="first_name" name="first_name"
                            placeholder="Enter Admin First Name">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="last_name">Admin Last Name</label>
                        <input type="text" class="form-control" id="last_name" name="last_name"
                            placeholder="Enter Admin Last Name">
                    </div>
                </div>

                <div class="row">
                    <div class="form-group col-md-6">
                        <label for="email">Email</label>
                        <input type="email" class="form-control" id="email" name="email" placeholder="Enter Email">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="password">Password</label>
                        <input type="password" class="form-control" id="password" name="password"
                            placeholder="Enter Password">
                    </div>
                </div>

                <div class="row">
                    <div class="form-group col-md-6">
                        <label for="mobile">Mobile</label>
                        <input type="text" class="form-control" id="mobile" name="mobile"
                            placeholder="Enter Admin Mobile">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="address">Address</label>
                        <input type="text" class="form-control" id="address" name="address"
                            placeholder="Enter Admin Addess">
                    </div>
                </div>



                <div class="row">
                    <div class="form-group col-md-6">
                        <label for="DOB">Date Of Birth</label>
                        <input type="date" class="form-control" id="DOB" name="DOB" placeholder="">
                    </div>



                </div>

                <div class="row">
                    <div class="form-group col-md-6">
                        <label for="image">Image</label>
                        <input type="file" class="form-control" id="image" name="image" placeholder="">
                    </div>
                </div>


                <!-- /.card-body -->

                <div class="card-footer">
                    <button type="button" onclick="performStore()" class="btn btn-primary">Store</button>
                    <a href="{{ route('admins.index') }}" type="button" class="btn btn-info">Return Back</a>
                </div>
        </form>
        <!-- form end -->
    </div>
</section>
@endsection


@section('scripts')
<script>
    function performStore(){
    let formData = new FormData();
    formData.append('first_name',document.getElementById('first_name').value);
    formData.append('last_name',document.getElementById('last_name').value);
    formData.append('email',document.getElementById('email').value);
    formData.append('password',document.getElementById('password').value);
    formData.append('mobile',document.getElementById('mobile').value);
    formData.append('address',document.getElementById('address').value);
    formData.append('DOB',document.getElementById('DOB').value);
    formData.append('image',document.getElementById('image').files[0]);
    formData.append('role_id',document.getElementById('role_id').value);

    store('/cms/admin/admins' , formData)
  }

</script>
@endsection
