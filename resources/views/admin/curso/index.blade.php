@extends('layouts.admin2')

@section('content')

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Listado de Cursos</h1>
          </div>
          <div class="col-sm-6 text-right">
            <!-- actualizado por marck, usando ELOQUENT -->
            <a class="btn btn-info" href="{{ route('curso.create') }}">Agregar Curso</a>
            <a href="{{ route('cursos.pdf') }}">Generar Reporte</a>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main Content-->
    <section class="content">
      <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-header">
              <h3 class="card-title"></h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <table id="example2" class="table table-bordered table-hover">
                <thead>
                <tr>
                  <th scope="col">Codigo</th>
                  <th scope="col">Nombre</th>
                  <th scope="col">Descripcion</th>
                  <th scope="col">Costo</th>
                  <th scope="col" colspan="2" class="text-center">Acciones</th>
                </tr>
                </thead>
                <tbody>
                  @forelse($cursos as $item=>$cur)
                  <tr>
                    <!--actualizado por marck -->
                    <th scope="row">{{$item+1}}</th>
                    <td>{{$cur->CURSOC_Nombre}}</td>
                    <td>{{$cur->CURSOC_Descripcion}}</td>
                    <td>{{$cur->CURSOC_Costo}}</td>
                    <td><button class="btn btn-info">
                      <a class="text-light" href="{{ route('curso.edit', $cur->id_curso) }}">
                        Editar
                      </a></button></td>
                    <td>
                      <!-- $prod-> (debe señalar al "ID") - fijado por marck -->
                      {!!Form::open(['route'=>['curso.destroy',$cur->id_curso],'method'=>'DELETE'])!!}
                          {{ csrf_field() }}
                          {{ method_field('DELETE') }}
                          {!!Form::submit('Eliminar',
                                ['class'=>'btn btn-danger'])
                          !!}
                      {!!Form::close()!!}
                     </td>
                  </tr>
                  @empty
                    <p><i>No se han encontrado elementos en la base de datos ...</i></p>
                  @endforelse
                    <!-- -------------------- -->
                </tbody>
              </table>
              {{ $cursos->links() }}
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->

        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>


</div>

@endsection