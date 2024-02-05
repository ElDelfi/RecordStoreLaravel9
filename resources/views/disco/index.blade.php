@extends('layouts.app')

@section('template_title')
    Disco
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Disco') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('discos.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                  {{ __('Create New') }}
                                </a>
                              </div>
                        </div>
                    </div>
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success">
                            <p>{{ $message }}</p>
                        </div>
                    @endif

                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-hover">
                                <thead class="thead">
                                    <tr>
                                        <th>No</th>

										<th>Genero</th>
										<th>Formato</th>
										<th>Nombre</th>
										<th>Artista</th>
										<th>Estado</th>
										<th>Year</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($discos as $disco)
                                        <tr>
                                            <td>{{ ++$i }}</td>

											<td>{{ $disco->genero->nombre}}</td>
											<td>{{ $disco->formato->nombre}}</td>
											<td>{{ $disco->nombre }}</td>
											<td>{{ $disco->artista }}</td>
											<td>{{ $disco->album }}</td>
											<td>{{ $disco->year }}</td>

                                            <td>
                                                <form action="{{ route('discos.destroy',$disco->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('discos.show',$disco->id) }}"><i class="fa fa-fw fa-eye"></i> {{ __('Show') }}</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('discos.edit',$disco->id) }}"><i class="fa fa-fw fa-edit"></i> {{ __('Edit') }}</a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-fw fa-trash"></i> {{ __('Delete') }}</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                {!! $discos->links() !!}
            </div>
        </div>
    </div>
@endsection
