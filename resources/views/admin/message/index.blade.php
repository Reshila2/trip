@extends('admin.layouts.admin_layout')

@section('title', 'Все cообщения')

@section('content')

    <div class="content-header">
        <div class="container-fluid">
           <!-- /.row -->
            @if (session('success'))
                <div class="alert alert-success" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                    <h4><i class="icon fa fa-check"></i>{{ session('success') }}</h4>
                </div>
            @endif
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="card">
                <div class="card-body p-0">
                    <table class="table table-striped projects">
                        <thead>
                        <tr>
                            <th style="width: 10%">
                                ID
                            </th>
                            <th>
                                Имя
                            </th>
                            <th>
                                Фамилия
                            </th>
                            <th>
                                Почта
                            </th>
                            <th>
                                Телефон
                            </th>
                            <th>
                                Сообщение
                            </th>
                            <th>
                                Дата создания
                            </th>

                        </tr>
                        </thead>
                        <tbody>
                        @foreach ($contacts as $contact)
                            <tr>
                                <td>
                                    {{ $contact['id'] }}
                                </td>
                                <td>
                                    {{ $contact['name'] }}
                                </td>
                                <td>{{$contact['surname']}}</td>
                                <td>{{$contact['email']}}</td>
                                <td>{{$contact['phone']}}</td>
                                <td>{{$contact['message']}}</td>
                                <td>{{$contact['created_at']}}</td>


                            </tr>
                        @endforeach


                        </tbody>
                    </table>
                </div>
                <!-- /.card-body -->
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- /.content -->
@endsection
