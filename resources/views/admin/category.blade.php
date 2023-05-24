<!DOCTYPE html>
<html lang="en">

<head>
    @include('admin.css')
</head>

<body>
    <div class="slide-left">
        <div>
            @include('admin.header')
            @include('admin.sidebar')
        </div>

        <!-- partial:partials/_sidebar.html -->





        <!-- partial -->
        <div class="content-wrapper">

            <form action="{{ url('add_category') }}" method="POST">
                @csrf
                @if(session('success_category'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <strong>{{session('success_category')}}</strong>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>

                @endif
                <div class="col-md-3 ">
                    <h1 class="" style="font-size: 22px">Add Category</h1>
                    <input type="text" class="form-control mt-4 mb-2  text-dark " id="exampleInputEmail1"
                        aria-describedby="emailHelp" placeholder="Enter Your Category" name="category_name"
                        style="background: rgb(226, 221, 221)">
                    @error('category_name')
                    <div class="text-danger mb-4">{{ $message }}</div>
                    @enderror
                    <button type="submit" class="btn btn-primary">Add Category</button>
                </div>
            </form>
            <div class="m-3">
                @if(session('success_delete'))

                <h1 class="text-center text-success">{{session('success_delete')}}</h1>
                @endif
                <table class="table table-striped mt-5 text-center text-white">
                    <thead>
                        <tr class="">
                            <th scope="col" class="text-primary "> No</th>
                            <th scope="col" class="text-primary">Category Name</th>
                            <th scope="col" class="text-primary">Action</th>
                        </tr>
                    </thead>
                    <?php $no = 1; ?>
                    @foreach ($data as $datas)
                    <tbody>
                        <tr>
                            <th>{{ $no}}</th>
                            <th scope="row">{{ $datas->category_name }}</th>

                            <td>
                                <a href="{{ url('delete_category',$datas->id) }}" class="btn btn-danger"
                                    onclick="return confirm('Are You Sure You Want To Delete')">Delete</a>
                            </td>
                        </tr>
                    </tbody>
                    <?php $no++; ?>
                    @endforeach
                </table>
            </div>
        </div>
        <!-- partial:partials/_navbar.html -->
    </div>
</body>
@include('admin.script')
</html>
