<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ config('app.name')}} - Category list</title>
    @include('layouts.admin.css')
</head>

<body>
    <div class="container-scroller">
        @include('layouts.admin.sidepan')
        <div class="container-fluid page-body-wrapper">
            @include('layouts.admin.nav')
            <div class="main-panel">
                <div class="content-wrapper">
                    <div class="col-md-12 grid-margin stretch-card">
                        <div class="card">

                            @if( session()->has('Flag') && session()->get('Flag')=='Success' )
                            <div class="alert alert-success m-1">Successfully Updated this new Category Name</div>
                            @elseif( session()->has('Flag') && session()->get('Flag')=='Failed' )
                            <div class="alert alert-danger m-1">Unable to save this new Category Name, this Name may
                                already exist!</div>
                            @endif

                            <div class="card-body">
                                <h4 class="card-title">Category List</h4>
                                <form action="{{ url('/add-category') }}" method="post">
                                    @csrf
                                    <div class="add-items d-flex">
                                        <input type="text" name="categoryName" class="form-control"
                                            placeholder="Name of new category...">
                                        <button class="btn btn-primary">Add</button>
                                    </div>
                                </form>
                                <div class="list-wrapper">
                                    <ul class="d-flex flex-column-reverse text-white todo-list todo-list-custom">
                                        <li>
                                            <div class="form-check form-check-primary">
                                                <label class="form-check-label">
                                                    <input class="checkbox" type="checkbox"> Create invoice </label>
                                            </div>
                                            <i class="remove mdi mdi-close-box"></i>
                                        </li>
                                        <li>
                                            <div class="form-check form-check-primary">
                                                <label class="form-check-label">
                                                    <input class="checkbox" type="checkbox"> Meeting with Alita
                                                </label>
                                            </div>
                                            <i class="remove mdi mdi-close-box"></i>
                                        </li>
                                        <li class="completed">
                                            <div class="form-check form-check-primary">
                                                <label class="form-check-label">
                                                    <input class="checkbox" type="checkbox" checked> Prepare for
                                                    presentation </label>
                                            </div>
                                            <i class="remove mdi mdi-close-box"></i>
                                        </li>
                                        <li>
                                            <div class="form-check form-check-primary">
                                                <label class="form-check-label">
                                                    <input class="checkbox" type="checkbox"> Plan weekend outing
                                                </label>
                                            </div>
                                            <i class="remove mdi mdi-close-box"></i>
                                        </li>
                                        <li>
                                            <div class="form-check form-check-primary">
                                                <label class="form-check-label">
                                                    <input class="checkbox" type="checkbox"> Pick up kids from
                                                    school </label>
                                            </div>
                                            <i class="remove mdi mdi-close-box"></i>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @include('layouts.admin.footer')
            </div>
        </div>
    </div>

    @include('layouts.admin.js')

</body>

</html>