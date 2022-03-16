@extends('admin.layouts.admin_layout')

@section('title', 'Все категории')

@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Выберите поля для заполнеия</h1>
                </div><!-- /.col -->
            </div><!-- /.row -->
            @if (session('success'))
                <div class="alert alert-danger" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                    <h4><i class="icon fa fa-check"></i>{{ session('success') }}</h4>
                </div>
            @endif
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->


    <section class="content">
        <div class="container-fluid">
            <div class="row">

                <div class="col-lg-12">
                    <div class="card card-primary">
                        <form action="{{ route('order.fields') }}" method="POST">
                            @csrf
                            <div class="card-body">
                                <div class="form-group">
                                    <!-- select -->
                                    <div class="form-group">
                                        <label>Id поста</label>
                                        <select name="id" class="form-control" required>
                                            @foreach($post as $p)
                                                <option value="{{ $p['id'] }}">{{ $p['title'] }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <label for="exampleInputEmail1">Имя </label>
                                    <div class="form-group" style="display: flex">
                                        <input type="text" name="name" class="form-control" id="exampleInputEmail1"
                                        placeholder="Имя"  >
                                        <input type="checkbox" style="margin-left: 10px;width: 40px;height: 40px">
                                        <span class="checkmark"></span>
                                    </div>
                                    <label for="exampleInputEmail1">Фамилия </label>
                                    <div class="form-group" style="display: flex">
                                        <input type="text" name="surname" class="form-control" id="exampleInputEmail1"
                                               placeholder="Фамилия"  >
                                        <input type="checkbox" style="margin-left: 10px;width: 40px;height: 40px">
                                        <span class="checkmark"></span>

                                    </div>
                                    foreach($request as #dara{
                                    if(date===yes)
                                    save;

                                    })
                                    <label for="exampleInputEmail1">Email</label>
                                    <div class="form-group" style="display: flex">
                                        <input type="email"  class="form-control" id="exampleInputEmail1"
                                               placeholder="Email"  >
                                        <input type="checkbox"name="email" value="yes" style="margin-left: 10px;width: 40px;height: 40px">
                                        <span class="checkmark"></span>

                                    </div>
                                    <label for="exampleInputEmail1">Телефон </label>
                                    <div class="form-group" style="display: flex">
                                        <input type="tel" name="phone" class="form-control" id="exampleInputEmail1"
                                               placeholder="Телефон" >
                                        <input type="checkbox" style="margin-left: 10px;width: 40px;height: 40px">
                                        <span class="checkmark"></span>

                                    </div>
                                    <label for="exampleInputEmail1"> Адрес</label>
                                    <div class="form-group" style="display: flex">
                                        <input type="text" name="address" class="form-control" id="exampleInputEmail1"
                                               placeholder="Адрес"  >
                                        <input type="checkbox" style="margin-left: 10px;width: 40px;height: 40px">
                                        <span class="checkmark"></span>

                                    </div>
                                    <label for="exampleInputEmail1">Гос. номер</label>
                                    <div class="form-group" style="display: flex">
                                        <input type="text" name="gosnomer" class="form-control" id="exampleInputEmail1"
                                               placeholder="Гос. номер"  >
                                        <input type="checkbox" style="margin-left: 10px;width: 40px;height: 40px">
                                        <span class="checkmark"></span>

                                    </div>

                                    <label for="exampleInputEmail1"> Дата рождения</label>
                                    <div class="form-group" style="display: flex">
                                        <input type="date" name="birthday" class="form-control" id="exampleInputEmail1"
                                               placeholder="Дата рождения"  >
                                        <input type="checkbox" style="margin-left: 10px;width: 40px;height: 40px">
                                        <span class="checkmark"></span>

                                    </div><label for="exampleInputEmail1">Марка машины </label>
                                    <div class="form-group" style="display: flex">
                                        <input type="text" name="brand" class="form-control" id="exampleInputEmail1"
                                               placeholder="Марка машины "  >
                                        <input type="checkbox" style="margin-left: 10px;width: 40px;height: 40px">
                                        <span class="checkmark"></span>

                                    </div>
                                    <label for="exampleInputEmail1">Модель машины </label>
                                    <div class="form-group" style="display: flex">
                                        <input type="text" name="model" class="form-control" id="exampleInputEmail1"
                                               placeholder="Модель машины "  >
                                        <input type="checkbox" style="margin-left: 10px;width: 40px;height: 40px">
                                        <span class="checkmark"></span>

                                    </div>
                                    <label for="exampleInputEmail1">Дата поездки</label>
                                    <div class="form-group" style="display: flex">
                                        <input type="date" name="travelDate" class="form-control" id="exampleInputEmail1"
                                               placeholder="Дата поездки"  >
                                        <input type="checkbox" style="margin-left: 10px;width: 40px;height: 40px">
                                        <span class="checkmark"></span>

                                    </div>
                                    <label for="exampleInputEmail1">Количество людей</label>
                                    <div class="form-group" style="display: flex">
                                        <input type="number" name="numberPeople" class="form-control" id="exampleInputEmail1"
                                               placeholder="Количество людей"  >
                                        <input type="checkbox" style="margin-left: 10px;width: 40px;height: 40px">
                                        <span class="checkmark"></span>

                                    </div>
                                    <label for="exampleInputEmail1"> Промокод</label>
                                    <div class="form-group" style="display: flex">
                                        <input type="text" name="promokod" class="form-control" id="exampleInputEmail1"
                                               placeholder="Промокод"  >
                                        <input type="checkbox" style="margin-left: 10px;width: 40px;height: 40px">
                                        <span class="checkmark"></span>

                                    </div>








                                </div>

                            </div>
                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary">Добавить</button>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

{{--    <!-- Main content -->--}}
{{--    <section class="content">--}}
{{--        <div class="container-fluid">--}}
{{--            <div class="card">--}}
{{--                <div class="card-body p-0">--}}
{{--                    <table class="table table-striped projects">--}}
{{--                        <thead>--}}
{{--                        <tr>--}}

{{--                            <th style="width: 5%">--}}
{{--                                ID--}}
{{--                            </th>--}}
{{--                            <th>--}}
{{--                                Название--}}
{{--                            </th>--}}
{{--                            <th>--}}
{{--                                Email--}}
{{--                            </th>--}}
{{--                            <th>--}}
{{--                                Телефон--}}
{{--                            </th>--}}
{{--                            <th>--}}
{{--                                Категория--}}
{{--                            </th>--}}
{{--                            <th>--}}
{{--                                Посты--}}
{{--                            </th>--}}
{{--                            <th>--}}
{{--                                Цена--}}
{{--                            </th>--}}
{{--                            <th style="width: 30%">--}}
{{--                            </th>--}}
{{--                        </tr>--}}
{{--                        </thead>--}}
{{--                        <tbody>--}}

{{--                        @foreach ($orders as $order)--}}
{{--                            <tr>--}}
{{--                                <td>--}}
{{--                                    {{ $order['zid'] }}--}}
{{--                                </td>--}}
{{--                                <td>--}}
{{--                                    {{ $order['name'] }}--}}
{{--                                </td>--}}
{{--                                <td>--}}
{{--                                    {{ $order['email'] }}--}}
{{--                                </td>--}}
{{--                                <td>--}}
{{--                                    {{ $order['phone'] }}--}}
{{--                                </td>--}}

{{--                            </tr>--}}
{{--                        @endforeach--}}



{{--                        </tbody>--}}
{{--                    </table>--}}
{{--                </div>--}}
{{--                <!-- /.card-body -->--}}
{{--            </div>--}}
{{--        </div><!-- /.container-fluid -->--}}
{{--    </section>--}}
    <!-- /.content -->
@endsection
