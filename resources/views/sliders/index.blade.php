@extends('layouts.admin')

@section('content')
<!-- Begin Page Content -->
<div class="container-fluid">

    <div class="card shadow">
        <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
            <h3 class="m-0 font-weight-bold text-primary"> Categorias</h3>
            <a href="{{route('sliders.create')}}" class="btn btn-primary">Crear</a>

        </div>
        <div class="card-body">

            <table class="table text-center">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Image</th>

                        <th scope="col">Name</th>
                        <th scope="col">Icon</th>
                        <th scope="col">...</th>
                        <th scope="col">...</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">0</th>
                        <td>
                            <img src="#" width="80">

                        </td>
                        <td>Name</td>
                        <td></td>

                        <td>
                            <a class="btn btn-primary btn-sm" href="#">
                                <span class="fas fa-edit"></span>
                            </a>
                        </td>
                        <td>

                            <form action="#" method="POST" class="confirm-form mb-0">

                                <button type="submit" class="btn btn-danger btn-sm">
                                    <span class="fas fa-trash"></span>
                                </button>

                            </form>
                        </td>
                    </tr>


                </tbody>
            </table>
        </div>
        <div class="card-footer">


        </div>
    </div>


</div>
<!-- /.container-fluid -->
@endsection